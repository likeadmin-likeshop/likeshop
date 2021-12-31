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

use app\api\logic\GoodsLogic;
use app\api\logic\OrderLogic;
use app\api\logic\TeamLogic;
use app\common\model\{AccountLog, Footprint, MessageScene_, NoticeSetting, OrderLog, User, Pay, Order, OrderTrade};
use app\common\server\ConfigServer;
use app\common\server\DistributionServer;
use think\Db;
use think\Exception;
use think\facade\Hook;
use think\facade\Log;

/**
 * 支付成功后处理订单状态
 * Class PayNotifyLogic
 * @package app\api\logic
 */
class PayNotifyLogic
{
    public static function handle($action, $order_sn, $extra = [])
    {
        Db::startTrans();
        try {
            self::$action($order_sn, $extra);
            Db::commit();
            return true;
        } catch (Exception $e) {
            Db::rollback();
            $record = [
                __CLASS__, __FUNCTION__, $e->getFile(), $e->getLine(), $e->getMessage()
            ];
            Log::record(implode('-', $record));
            return $e->getMessage();
        }
    }


    //下单回调
    private static function order($order_sn, $extra = [])
    {
        $time = time();

        $order_model = new Order();
        $order = $order_model
            ->with('order_goods')
            ->where('order_sn',$order_sn)
            ->find();

        //增加会员消费累计额度
        $user = User::get($order['user_id']);
        $user->total_order_amount = ['inc', $order['order_amount']];

        //余额支付,扣除余额
        if ($order['pay_way'] == Pay::BALANCE_PAY) {
            $user->user_money = ['dec', $order['order_amount']];
            $user->save();
            AccountLogLogic::AccountRecord($order['user_id'], $order['order_amount'], 2, AccountLog::balance_pay_order, '', $order['id'], $order_sn);
        } else {
            $user->save();
        }

        $order->pay_status = Pay::ISPAID;
        $order->pay_time = $time;
        $order->order_status = Order::STATUS_WAIT_DELIVERY;
        if (isset($extra['transaction_id'])) {
            $order->transaction_id = $extra['transaction_id'];
        }
        $order->save();

        //扣除库存
        $deduct_type = ConfigServer::get('trading','deduct_type', 1);
        if ($deduct_type == 0) {
            //扣除库存,增加销量
            OrderGoodsLogic::decStock($order['order_goods']);
        }

        //订单日志
        OrderLogLogic::record(
            OrderLog::TYPE_USER,
            OrderLog::USER_PAID_ORDER,
            $order['id'],
            $user['id'],
            OrderLog::USER_PAID_ORDER
        );

        //拼团订单,更新拼团信息
        if ($order['order_type'] == Order::TEAM_ORDER){
            TeamLogic::updateTeam($order['id']);
        }

        //拼购,砍价的订单不参与分销分佣
        if ($order['order_type'] == Order::NORMAL_ORDER){
            DistributionServer::commission($order['id']);
        }


        //发送通知
        Hook::listen('notice', [
            'user_id' => $user['id'],
            'order_id' => $order['id'],
            'scene' => NoticeSetting::ORDER_PAY_NOTICE,
        ]);


        //短信通知
        Hook::listen('sms_send', [
            'key'       => NoticeSetting::ORDER_PAY_NOTICE,
            'mobile'    => $order->mobile,
            'user_id'   => $user->id,
            'params'    => [
                'nickname'      => $user->nickname,
                'order_sn'      => $order->order_sn,
                'order_amount'  => $order->order_amount,
                'time'          => $order->create_time,
                'total_num'     => $order->total_num.'件',
                'goods_name'    => omit_str(($order->order_goods[0]['goods_name'] ?? '商品'), 8)
            ]
        ]);

        $order_contact_mobile = ConfigServer::get('order_message', 'order_contact_mobile');
        //平台短信通知
        if($order_contact_mobile) {
            Hook::listen('sms_send',[
                'key'       => NoticeSetting::USER_PAID_NOTICE_PLATFORM,
                'mobile'    => $order_contact_mobile,
                'params'    => [
                    'order_sn'      => $order['order_sn'],
                ],
            ]);
        }

        // 赠送成长值和积分
        Hook::listen('give_reward', [
            'order_id' => $order['id'],
            'scene'    => 1, //1=下单支付场景
        ]);

        // 钩子-记录足迹(下单结算)
        Hook::listen('footprint', [
            'type'       => Footprint::place_order,
            'user_id'    => $user['id'],
            'foreign_id' => $order['id'], //订单ID
            'total_money' => $order['order_amount'] //订单应付金额
        ]);

        //打印订单
        Hook::listen('printer', [
            'order_id'       => $order['id'],
        ]);

    }
    /**
     * note 充值回调
     * create_time 2020/10/26 18:53
     */
    private static function recharge($order_sn,$extra = []){
        $new = time();
        $order = Db::name('recharge_order')->where(['order_sn'=>$order_sn])->find();
        $update_data['pay_time'] = $new;
        $update_data['pay_status'] = Pay::ISPAID;
        if (isset($extra['transaction_id'])) {
            $update_data['transaction_id'] = $extra['transaction_id'];
        }
        Db::name('recharge_order')->where(['id'=>$order['id']])->update($update_data);
        $user = User::get($order['user_id']);
        $total_money = $order['order_amount']+$order['give_money'];
        $total_integral = $order['give_integral'];
        $user->user_money = ['inc', $total_money];
        $user->user_integral = ['inc', $total_integral];
        $user->user_growth = ['inc', $order['give_growth']];
        $user->total_recharge_amount = ['inc',$total_money];
        $user->save();
        //记录余额
        $total_money > 0 && AccountLogLogic::AccountRecord($user->id,$total_money,1, AccountLog::recharge_money);
        //记录积分
        $total_integral > 0 && AccountLogLogic::AccountRecord($user->id,$total_integral,1, AccountLog::recharge_give_integral);
        //记录成长值
        $order['give_growth'] > 0 &&AccountLogLogic::AccountRecord($user->id,$order['give_growth'],1, AccountLog::recharge_give_growth);
    }

}