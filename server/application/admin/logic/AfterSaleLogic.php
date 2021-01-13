<?php
// +----------------------------------------------------------------------
// | LikeShop100%开源免费商用电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | Gitee下载：https://gitee.com/likemarket/likeshopv2
// | 访问官网：https://www.likemarket.net
// | 访问社区：https://home.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 微信公众号：好象科技
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------

// | Author: LikeShopTeam
// +----------------------------------------------------------------------

namespace app\admin\logic;

use app\common\logic\AccountLogLogic;
use app\common\server\WeChatServer;
use app\common\logic\AfterSaleLogLogic;
use app\common\logic\PaymentLogic;
use app\common\model\{AccountLog, AfterSale, AfterSaleLog, Goods, MessageScene_, Order, OrderGoods, Pay};
use think\Db;
use think\Exception;
use think\facade\Env;
use think\facade\Hook;

class AfterSaleLogic
{
    public static function lists($get)
    {
        $after_sale = new AfterSale();
        $where = [];

        $where[] = ['a.del', '=', 0];
        //订单类型
        if ($get['type'] != '') {
            $where[] = ['status', '=', $get['type']];
        }

        //订单搜素
        if (!empty($get['search_key']) && !empty($get['keyword'])) {
            $keyword = $get['keyword'];
            switch ($get['search_key']) {
                case 'sn':
                    $where[] = ['a.sn', '=', $keyword];
                    break;
                case 'order_sn':
                    $where[] = ['o.order_sn', '=', $keyword];
                    break;
                case 'goods_name':
                    $where[] = ['g.goods_name', 'like', '%' . $keyword . '%'];
                    break;
                case 'user_sn':
                    $where[] = ['u.sn', '=', $keyword];
                    break;
                case 'nickname':
                    $where[] = ['u.nickname', 'like', '%' . $keyword . '%'];
                    break;
                case 'user_mobile':
                    $where[] = ['u.mobile', '=', $keyword];
                    break;
            }
        }

        if (isset($get['status']) && $get['status'] != '') {
            $where[] = ['a.status', '=', $get['status']];
        }

        //下单时间
        if (isset($get['start_time']) && $get['start_time'] != '') {
            $where[] = ['a.create_time', '>=', strtotime($get['start_time'])];
        }
        if (isset($get['end_time']) && $get['end_time'] != '') {
            $where[] = ['a.create_time', '<=', strtotime($get['end_time'])];
        }

        $field = 'a.id,a.sn,a.status,a.order_id,a.order_goods_id,
        a.user_id,a.refund_type,a.create_time,a.refund_price,
        o.order_status,o.pay_way';

        $count = $after_sale
            ->alias('a')
            ->join('order o', 'o.id = a.order_id')
            ->join('user u', 'u.id = a.user_id')
            ->join('order_goods g', 'g.id = a.order_goods_id')
            ->with(['order_goods', 'user', 'order'])
            ->where($where)
            ->group('a.id')
            ->count();

        $lists = $after_sale
            ->alias('a')
            ->field($field)
            ->join('order o', 'o.id = a.order_id')
            ->join('user u', 'u.id = a.user_id')
            ->join('order_goods g', 'g.id = a.order_goods_id')
            ->with(['order_goods', 'user', 'order'])
            ->where($where)
            ->page($get['page'], $get['limit'])
            ->order('a.id desc')
            ->append(['user.base_avatar', 'order_goods.base_image'])
            ->group('a.id')
            ->select();

        foreach ($lists as &$list) {
            $list['order']['pay_way'] = Pay::getPayWay($list['order']['pay_way']);
            $list['order']['order_status'] = Order::getOrderStatus($list['order']['order_status']);
            $list['refund_type'] = AfterSale::getRefundTypeDesc($list['refund_type']);
            $list['create_time'] = date('Y-m-d H:i:s', $list['create_time']);
            $list['status'] = AfterSale::getStatusDesc($list['status']);

            foreach ($list['order_goods'] as &$good) {
                $info = json_decode($good['goods_info'], true);
                $good['goods_name'] = $info['goods_name'];
                $good['spec_value'] = $info['spec_value_str'];
                $good['image'] = empty($info['spec_image']) ? $info['image'] : $info['spec_image'];
            }
        }
        return ['count' => $count, 'lists' => $lists];
    }


    public static function getDetail($id)
    {
        $after_sale = new AfterSale();
        $result = $after_sale
            ->with(['order_goods', 'user', 'order'])
            ->where('id', $id)
            ->find()->toArray();

        $result['refund_type_text'] = AfterSale::getRefundTypeDesc($result['refund_type']);
        $result['status_text'] = AfterSale::getStatusDesc($result['status']);
        $result['order']['pay_way'] = Pay::getPayWay($result['order']['pay_way']);
        $result['order']['order_status'] = Order::getOrderStatus($result['order']['order_status']);
        $result['create_time'] = date('Y-m-d H:i:s', $result['create_time']);

        foreach ($result['order_goods'] as &$good) {
            $info = json_decode($good['goods_info'], true);
            $good['goods_name'] = $info['goods_name'];
            $good['spec_value'] = $info['spec_value_str'];
            $good['image'] = empty($info['spec_image']) ? $info['image'] : $info['spec_image'];
        }

        //售后日志
        $logs = AfterSaleLog::where('after_sale_id', $id)
            ->order('id', 'desc')
            ->select();

        foreach ($logs as &$log) {
            $log['create_time'] = date('Y-m-d H:i:s', $log['create_time']);
        }
        $result['log'] = $logs;

        return $result;
    }


    //商家同意售后
    public static function agree($id, $admin_id)
    {
        $after_sale = AfterSale::get($id);

        $after_sale->update_time = time();
        //仅退款
        if ($after_sale['refund_type'] == AfterSale::TYPE_ONLY_REFUND) {
            $after_sale->status = AfterSale::STATUS_WAIT_REFUND;//更新为等待退款状态
        }

        //退款退货
        if ($after_sale['refund_type'] == AfterSale::TYPE_REFUND_RETURN) {
            $after_sale->status = AfterSale::STATUS_WAIT_RETURN_GOODS;//更新为商品待退货状态
        }

        $after_sale->save();
        //记录日志
        AfterSaleLogLogic::record(
            AfterSaleLog::TYPE_SHOP,
            AfterSaleLog::SHOP_AGREE_REFUND,
            $after_sale['order_id'],
            $after_sale['id'],
            $admin_id,
            AfterSaleLog::SHOP_AGREE_REFUND
        );

        // 仅退款;更新订单商品为等待退款
        if ($after_sale['refund_type'] == AfterSale::TYPE_ONLY_REFUND) {
            $order_goods = OrderGoods::get(['id' => $after_sale['order_goods_id']]);
            $order_goods->refund_status = OrderGoods::REFUND_STATUS_WAIT;//等待退款
            $order_goods->save();
        }

        $mobile = Db::name('order')->where(['id'=>$after_sale->order_id])->value('mobile');
        //发送短信
        $nickname = Db::name('user')->where(['id' => $after_sale->user_id])->value('nickname');
        Hook::listen('sms_send',  [
            'key' => 'SJTYSHTK',
            'mobile' => $mobile,
            'params' => ['nickname' => $nickname, 'order_sn' => $after_sale->sn],
        ]);

        Hook::listen('wx_message_send', [
            'user_id'  => $after_sale->user_id,
            'scene'    => MessageScene_::REFUND_SUCCESS,
            'order_id' => $after_sale->order_id
        ]);
    }


    //商家拒绝
    public static function refuse($post, $admin_id)
    {
        $id = $post['id'];
        $after_sale = AfterSale::get($id);
        $after_sale->update_time = time();
        $after_sale->status = AfterSale::STATUS_REFUSE_REFUND;//更新为拒绝退款状态
        $after_sale->admin_remark = isset($post['remark']) ? $post['remark'] : '';
        $after_sale->save();
        //记录日志
        AfterSaleLogLogic::record(
            AfterSaleLog::TYPE_SHOP,
            AfterSaleLog::SHOP_REFUSE_REFUND,
            $after_sale['order_id'],
            $after_sale['id'],
            $admin_id,
            AfterSaleLog::SHOP_REFUSE_REFUND
        );
        $nickname = Db::name('user')->where(['id' => $after_sale->user_id])->value('nickname');
        $mobile = Db::name('order')->where(['id'=>$after_sale->order_id])->value('mobile');
        //发送短信
        Hook::listen('sms_send', [
            'key' => 'SJJJSHTK',
            'mobile' => $mobile,
            'params' => ['nickname' => $nickname, 'order_sn' => $after_sale->sn],
        ]);

    }

    //商家收货
    public static function takeGoods($post, $admin_id)
    {
        $id = $post['id'];
        $after_sale = AfterSale::get($id);
        $after_sale->update_time = time();
        $after_sale->status = AfterSale::STATUS_WAIT_REFUND;//更新为等待退款状态
        $after_sale->save();
        //记录日志
        AfterSaleLogLogic::record(
            AfterSaleLog::TYPE_SHOP,
            AfterSaleLog::SHOP_TAKE_GOODS,
            $after_sale['order_id'],
            $after_sale['id'],
            $admin_id,
            AfterSaleLog::SHOP_TAKE_GOODS
        );
        //更新订单商品为等待退款状态
        $order_goods = OrderGoods::get(['id' => $after_sale['order_goods_id']]);
        $order_goods->refund_status = OrderGoods::REFUND_STATUS_WAIT;//等待退款
        $order_goods->save();
    }


    //商家拒绝收货
    public static function refuseGoods($post, $admin_id)
    {
        $id = $post['id'];
        $after_sale = AfterSale::get($id);
        $after_sale->update_time = time();
        $after_sale->status = AfterSale::STATUS_REFUSE_RECEIVE_GOODS;//更新为拒绝收货状态
        $after_sale->admin_remark = isset($post['remark']) ? $post['remark'] : '';
        $after_sale->save();
        //记录日志
        AfterSaleLogLogic::record(
            AfterSaleLog::TYPE_SHOP,
            AfterSaleLog::SHOP_REFUSE_TAKE_GOODS,
            $after_sale['order_id'],
            $after_sale['id'],
            $admin_id,
            AfterSaleLog::SHOP_REFUSE_TAKE_GOODS
        );
    }


    //确认退款 ===> 退款
    public static function confirm($id, $admin_id)
    {
        //售后记录状态
        $after_sale = AfterSale::get($id);
        $order = Order::get(['id' => $after_sale['order_id']]);
        $order_goods = OrderGoods::get(['id' => $after_sale['order_goods_id']]);

        $result = [];

        Db::startTrans();
        try {
            $total_fee = $order['order_amount'];//订单应付金额
            $refund_fee = $order_goods['total_pay_price'];//实际商品支付金额

            //在白名单内,一分钱
            $white_list = Env::get('wechat.white_list', '');
            $white_list = explode(',', $white_list);
            if (in_array($order['user_id'], $white_list)) {
                $total_fee = 0.01;
                $refund_fee = 0.01;
            }

            //增加退款记录
            $refund_data = [
                'order_id' => $order['id'],
                'user_id' => $order['user_id'],
                'refund_sn' => createSn('order_refund', 'refund_sn'),
                'order_amount' => $total_fee,
                'refund_amount' => $refund_fee,
                'transaction_id' => $order['transaction_id'],
                'create_time' => time(),
            ];
            $refund_id = Db::name('order_refund')->insertGetId($refund_data);


            //余额支付回退余额
            if ($order['pay_way'] == Pay::BALANCE_PAY) {
                $user = \app\common\model\User::get($order['user_id']);
                //余额支付,回退余额
                $user->user_money = ['inc', $order['order_amount']];
                AccountLogLogic::AccountRecord($order['user_id'], $order['order_amount'], 1, AccountLog::after_sale_refund);
                $user->save();
            }


            //微信支付
            if ($order['pay_way'] == Pay::WECHAT_PAY) {
                $config = self::payConfig($order['order_source']);
                $data = [
                    'transaction_id' => $order['transaction_id'],
                    'refund_sn' => $refund_data['refund_sn'],
                    'total_fee' => $total_fee * 100,
                    'refund_fee' => $refund_fee * 100,
                ];

                $result = PaymentLogic::refund($config, $data);
                if ($result['return_code'] != 'SUCCESS' || $result['result_code'] != 'SUCCESS') {
                    $return_msg = '未知原因';
                    if (isset($result['return_code']) && $result['return_code'] == 'FAIL') {
                        $return_msg = $result['return_msg'];
                        throw new Exception($return_msg);
                    }

                    if (isset($result['err_code_des'])) {
                        $return_msg = $result['err_code_des'];
                        throw new Exception($return_msg);
                    }
                    throw new Exception($return_msg);
                }
            }

            //更新退款记录
            $update_refund = [
                'refund_status' => 1,
                'refund_at' => time(),
                'wechat_refund_id' => $result['refund_id'] ?? '',//微信的退款id
                'refund_msg' => json_encode($result, JSON_UNESCAPED_UNICODE),
                'update_time' => time(),
            ];
            Db::name('order_refund')->where(['id' => $refund_id])->update($update_refund);

            $after_sale->update_time = time();
            $after_sale->status = AfterSale::STATUS_SUCCESS_REFUND;//更新为退款成功状态
            $after_sale->save();

            //记录日志
            AfterSaleLogLogic::record(
                AfterSaleLog::TYPE_SHOP,
                AfterSaleLog::REFUND_SUCCESS,
                $after_sale['order_id'],
                $after_sale['id'],
                $admin_id,
                AfterSaleLog::REFUND_SUCCESS//退款成功
            );
            $order_goods->refund_status = OrderGoods::REFUND_STATUS_SUCCESS;//退款成功
            $order_goods->save();

            //更新订单状态
            $order->pay_status = Pay::REFUNDED;
            $order->refund_amount += $total_fee;//退款金额 + 以前的退款金额
            $order->refund_status = 1;//退款状态：0-未退款；1-部分退款；2-全部退款

            //退款金额等于订单应付金额时为全部退款
            if ($order->refund_amount == $order['order_amount']) {
                $order->refund_status = 2;
            }
            $order->save();
            Db::commit();
            return true;
        } catch (Exception $e) {
            Db::rollback();
            //增加退款失败记录
            $refund_data = [
                'order_id' => $order['id'],
                'user_id' => $order['user_id'],
                'refund_sn' => createSn('order_refund', 'refund_sn'),
                'order_amount' => $total_fee,
                'refund_amount' => $refund_fee,
                'transaction_id' => $order['transaction_id'],
                'create_time' => time(),
                'refund_status' => 2,
                'refund_msg' => json_encode($result, JSON_UNESCAPED_UNICODE),
            ];
            Db::name('order_refund')->insertGetId($refund_data);

            //记录日志
            AfterSaleLogLogic::record(
                AfterSaleLog::TYPE_SHOP,
                AfterSaleLog::REFUND_ERROR,//退款失败
                $after_sale['order_id'],
                $after_sale['id'],
                $admin_id,
                AfterSaleLog::REFUND_ERROR,//退款失败
                $e->getMessage()
            );

            return $e->getMessage();
        }
    }


    public static function payConfig($order_source)
    {
        $config = WeChatServer::getPayConfigBySource($order_source);

        if (empty($config)) {
            throw new Exception('请联系管理员设置微信相关配置!');
        }

        if (!isset($config['cert_path']) || !isset($config['key_path'])) {
            throw new Exception('请联系管理员设置微信证书!');
        }

        if (!file_exists($config['cert_path']) || !file_exists($config['cert_path'])) {
            throw new Exception('微信证书不存在,请联系管理员!!');
        }

        return $config;
    }

}