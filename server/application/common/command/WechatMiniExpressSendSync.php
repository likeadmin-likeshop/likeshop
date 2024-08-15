<?php

namespace app\common\command;

use app\common\model\Order;
use app\common\model\Pay;
use app\common\model\RechargeOrder;
use app\common\server\WechatMiniExpressSendSyncServer;
use think\console\Command;
use think\console\Input;
use think\console\Output;

class WechatMiniExpressSendSync extends Command
{
    protected function configure()
    {
        $this->setName('wechat_mini_express_send_sync')->setDescription('微信小程序发货同步');
    }
    
    protected function execute(Input $input, Output $output)
    {
        // 订单
        static::order();
        // 用户充值
        static::user_recharge();
    }
    
    private static function order()
    {
        // 快递
        $list = Order::where('delivery_type', Order::DELIVERY_STATUS_EXPRESS)
            ->where('shipping_status', 1)
            ->where('pay_status', 1)
            ->where('pay_way', Pay::WECHAT_PAY)
            ->where('wechat_mini_express_sync', 0)
            ->where('order_status', 'in', [ Order::STATUS_WAIT_RECEIVE, Order::STATUS_FINISH ])
            ->limit(60)
            ->order('id desc')
            ->select()->toArray();
        // 自提
        $list2 = Order::where('delivery_type', Order::DELIVERY_STATUS_SELF)
            ->where('pay_status', 1)
            ->where('pay_way', Pay::WECHAT_PAY)
            ->where('wechat_mini_express_sync', 0)
            ->where('order_status', 'in', [ Order::STATUS_WAIT_DELIVERY, Order::STATUS_WAIT_RECEIVE, Order::STATUS_FINISH ])
            ->limit(20)
            ->order('id desc')
            ->select()->toArray();
        // dump([ $list, $list2 ]);
    
        foreach ([ $list, $list2 ] as $items) {
            foreach ($items as $item) {
                WechatMiniExpressSendSyncServer::_sync_order($item);
            }
        }
    }
    
    private static function user_recharge()
    {
        $list = RechargeOrder::where('pay_status', 1)
            ->where('pay_way', Pay::WECHAT_PAY)
            ->where('wechat_mini_express_sync', 0)
            ->limit(60)
            ->order('id desc')
            ->select()->toArray();
        // dump($list);
        
        foreach ($list as $item) {
            WechatMiniExpressSendSyncServer::_sync_recharge($item);
        }
    }
    
}