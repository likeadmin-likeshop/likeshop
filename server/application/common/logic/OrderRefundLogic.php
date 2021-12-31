<?php
// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshopTeam
// +----------------------------------------------------------------------


namespace app\common\logic;


use app\api\logic\DistributionLogic;
use app\api\model\Order;
use app\common\model\AccountLog;
use app\common\model\Order as CommonOrder;
use app\common\model\OrderGoods;
use app\common\model\OrderLog;
use app\common\model\Pay;
use app\common\model\User;
use app\common\server\AliPayServer;
use app\common\server\WeChatPayServer;
use app\common\server\WeChatServer;
use think\Db;
use think\Exception;
use think\facade\Hook;

/**
 * 订单退款逻辑
 * Class OrderRefundLogic
 * @package app\common\logic
 */
class OrderRefundLogic
{

    /**
     * Notes:  取消订单
     * @param $order_id
     * @param int $handle_type
     * @param int $handle_id
     * @author 段誉(2021/1/28 15:23)
     * @return Order
     */
    public static function cancelOrder($order_id, $handle_type = OrderLog::TYPE_SYSTEM, $handle_id = 0)
    {
        //更新订单状态
        $order = Order::get($order_id);
        $order->order_status = CommonOrder::STATUS_CLOSE;
        $order->update_time = time();
        $order->cancel_time = time();
        $order->save();

        //取消订单后操作
        Hook::listen('cancel_order', ['order_id'  => $order_id, 'handle_id' => $handle_id, 'handle_type' => $handle_type]);
        return $order;
    }


    /**
     * Notes: 处理订单退款(事务在取消订单逻辑处)
     * @param $order
     * @param $order_amount
     * @param $refund_amount
     * @author 段誉(2021/1/28 15:23)
     * @throws Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public static function refund($order, $order_amount, $refund_amount)
    {
        //退款记录
        $refund_id = self::addRefundLog($order, $order_amount, $refund_amount);

        switch ($order['pay_way']) {
            //余额退款
            case Pay::BALANCE_PAY:
                self::balancePayRefund($order, $refund_amount);
                break;
            //微信退款
            case Pay::WECHAT_PAY:
                self::wechatPayRefund($order, $refund_id);
                break;
            //支付宝退款
            case Pay::ALI_PAY:
                self::aliPayRefund($order, $refund_id);
                break;
        }
    }


    /**
     * Notes: 微信支付退款
     * @param $order (订单信息)
     * @param $refund_id (退款记录id)　
     * @author 段誉(2021/1/27 16:04)
     * @throws Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public static function wechatPayRefund($order, $refund_id)
    {
        $config = WeChatServer::getPayConfigBySource($order['order_source'])['config'];

        if (empty($config)) {
            throw new Exception('请联系管理员设置微信相关配置!');
        }

        if (!isset($config['cert_path']) || !isset($config['key_path'])) {
            throw new Exception('请联系管理员设置微信证书!');
        }

        if (!file_exists($config['cert_path']) || !file_exists($config['key_path'])) {
            throw new Exception('微信证书不存在,请联系管理员!');
        }

        $refund_log = Db::name('order_refund')->where(['id' => $refund_id])->find();

        $data = [
            'transaction_id' => $order['transaction_id'],
            'refund_sn' => $refund_log['refund_sn'],
            'total_fee' => $refund_log['order_amount'] * 100,//订单金额,单位为分
            'refund_fee' => intval($refund_log['refund_amount'] * 100),//退款金额
        ];
        $result = WeChatPayServer::refund($config, $data);

        if (isset($result['return_code']) && $result['return_code'] == 'FAIL') {
            throw new Exception($result['return_msg']);
        }

        if (isset($result['err_code_des'])) {
            throw new Exception($result['err_code_des']);
        }

        if ($result['return_code'] == 'SUCCESS' && $result['result_code'] == 'SUCCESS') {
            $update_data = [
                'wechat_refund_id' => $result['refund_id'] ?? 0,
                'refund_msg' => json_encode($result, JSON_UNESCAPED_UNICODE),
            ];
            //更新退款日志记录
            Db::name('order_refund')->where(['id' => $refund_id])->update($update_data);

        } else {
            throw new Exception('微信支付退款失败');
        }
    }


    /**
     * Notes: 支付宝退款
     * @param $order
     * @param $refund_id
     * @author 段誉(2021/3/23 15:48)
     * @throws Exception
     * @throws \think\exception\PDOException
     */
    public static function aliPayRefund($order, $refund_id)
    {
        $result = (new AliPayServer())->refund($order['order_sn'], $order['order_amount']);
        $result = (array)$result;

        if ($result['code'] == '10000' && $result['msg'] == 'Success' && $result['fundChange'] == 'Y') {
            //更新退款日志记录
            $update_data = ['refund_msg' => json_encode($result['httpBody'], JSON_UNESCAPED_UNICODE)];
            Db::name('order_refund')->where(['id' => $refund_id])->update($update_data);
        } else {
            throw new Exception('支付宝退款失败');
        }
    }


    /**
     * Notes: 增加退款记录
     * @param $order
     * @param $order_amount
     * @param $refund_amount
     * @param string $result_msg
     * @author 段誉(2021/1/28 15:23)
     * @return int|string
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function addRefundLog($order, $order_amount, $refund_amount, $result_msg = '退款成功')
    {
        $data = [
            'order_id' => $order['id'],
            'user_id' => $order['user_id'],
            'refund_sn' => createSn('order_refund', 'refund_sn'),
            'order_amount' => $order_amount,
            'refund_amount' => $refund_amount,
            'transaction_id' => $order['transaction_id'],
            'create_time' => time(),
            'refund_status' => 1,
            'refund_at' => time(),
            'refund_msg' => json_encode($result_msg, JSON_UNESCAPED_UNICODE),
        ];
        return Db::name('order_refund')->insertGetId($data);
    }


    /**
     * Notes: 取消订单,退款后更新订单和订单商品信息
     * @param $order
     * @author 段誉(2021/1/28 14:21)
     * @throws Exception
     * @throws \think\exception\PDOException
     */
    public static function cancelOrderRefundUpdate($order)
    {
        //订单商品=>标记退款成功状态
        Db::name('order_goods')
            ->where(['order_id' => $order['id']])
            ->update(['refund_status' => OrderGoods::REFUND_STATUS_SUCCESS]);

        //更新订单支付状态为已退款
        Db::name('order')->where(['id' => $order['id']])->update([
            'pay_status' => Pay::REFUNDED,
            'refund_status' => 2,//订单退款状态; 0-未退款；1-部分退款；2-全部退款
            'refund_amount' => $order['order_amount'],
        ]);
    }


    /**
     * Notes:售后退款更新订单或订单商品状态
     * @param $order
     * @param $order_goods_id
     * @author 段誉(2021/1/28 15:22)
     */
    public static function afterSaleRefundUpdate($order, $order_goods_id, $admin_id = 0)
    {
        $order_goods = OrderGoods::get(['id' => $order_goods_id]);
        $order_goods->refund_status = OrderGoods::REFUND_STATUS_SUCCESS;//退款成功
        $order_goods->save();

        //更新订单状态
        $order = \app\common\model\Order::get(['id' => $order['id']]);
        $order->pay_status = Pay::REFUNDED;
        $order->refund_amount += $order_goods['total_pay_price'];//退款金额 + 以前的退款金额
        $order->refund_status = 1;//退款状态：0-未退款；1-部分退款；2-全部退款

        //如果订单商品已全部退款
        if (self::checkOrderGoods($order['id'])) {
            $order->order_status = CommonOrder::STATUS_CLOSE;
            $order->refund_status = 2;

            OrderLogLogic::record(
                OrderLog::TYPE_SHOP,
                OrderLog::SYSTEM_CANCEL_ORDER,
                $order['id'],
                $admin_id,
                OrderLog::SYSTEM_CANCEL_ORDER
            );
        }
        $order->save();

        //更新相关分佣订单为已失效
        DistributionLogic::setFailByAfterSale($order_goods_id);
    }


    //订单内商品是否已全部
    public static function checkOrderGoods($order_id)
    {
        $order_goods = OrderGoods::where('order_id', $order_id)->select();
        if (empty($order_goods)) {
            return false;
        }

        foreach ($order_goods as $item) {
            if ($item['refund_status'] != OrderGoods::REFUND_STATUS_SUCCESS) {
                return false;
            }
        }
        return true;
    }


    /**
     * Notes: 余额退款
     * @param $order
     * @param $refund_amount
     * @author 段誉(2021/1/28 15:24)
     * @return bool
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function balancePayRefund($order, $refund_amount)
    {
        $user = User::get($order['user_id']);
        $user->user_money = ['inc', $refund_amount];
        $user->save();

        AccountLogLogic::AccountRecord(
            $order['user_id'],
            $refund_amount,
            1,
            AccountLog::cancel_order_refund,
            '',
            $order['id'],
            $order['order_sn']
        );
        return true;
    }


    /**
     * Notes: 退款失败增加错误记录
     * @param $order
     * @param $err_msg
     * @author 段誉(2021/1/28 15:24)
     * @return int|string
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function addErrorRefund($order, $err_msg)
    {
        $refund_data = [
            'order_id' => $order['id'],
            'user_id' => $order['user_id'],
            'refund_sn' => createSn('order_refund', 'refund_sn'),
            'order_amount' => $order['order_amount'],//订单应付金额
            'refund_amount' => $order['order_amount'],//订单退款金额
            'transaction_id' => $order['transaction_id'],
            'create_time' => time(),
            'refund_status' => 2,
            'refund_msg' => json_encode($err_msg, JSON_UNESCAPED_UNICODE),
        ];
        return Db::name('order_refund')->insertGetId($refund_data);
    }

}