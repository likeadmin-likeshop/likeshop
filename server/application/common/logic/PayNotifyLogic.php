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

namespace app\common\logic;

use app\common\model\{AccountLog, MessageScene_, OrderLog, User, Pay, Order};
use app\common\server\ConfigServer;
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
        $user->save();

        $order->pay_status = Pay::ISPAID;
        $order->pay_time = $time;
        $order->order_status = Order::STATUS_WAIT_DELIVERY;
        if (isset($extra['transaction_id'])) {
            $order->transaction_id = $extra['transaction_id'];
        }
        $order->save();

        //短信通知
        Hook::listen('sms_send', [
            'key'       => 'DDZFTZ',
            'mobile'    => $order->mobile,
            'params'    => [
                'nickname'      => $user->nickname,
                'order_sn'      => $order->order_sn,
                'order_money'   => $order->order_amount
            ],
        ]);

        $order_contact_mobile = ConfigServer::get('order_message', 'order_contact_mobile' );
        //平台短信通知
        if($order_contact_mobile){
            Hook::listen('sms_send',[
                'key'       => 'DDTZ',
                'mobile'    => $order_contact_mobile,
                'params'    => [
                    'order_sn'      => $order['order_sn'],
                ],
            ]);
        }

        //订单日志
        OrderLogLogic::record(
            OrderLog::TYPE_USER,
            OrderLog::USER_PAID_ORDER,
            $order['id'],
            $user['id'],
            OrderLog::USER_PAID_ORDER
        );

        //扣除库存
        $deduct_type = ConfigServer::get('trading','deduct_type', 1);
        if ($deduct_type == 0) {
            //扣除库存,增加销量
            OrderGoodsLogic::decStock($order['order_goods']);
        }

        // 钩子-发送消息模板通知
        Hook::listen('wx_message_send', [
            'user_id'  => $user['id'],
            'scene'    => MessageScene_::BUY_SUCCESS,
            'order_id' => $order['id']
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
        UserLevelLogic::updateUserLevel($user->id);

    }

}