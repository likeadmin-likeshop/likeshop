<?php
// +----------------------------------------------------------------------
// | LikeShop有特色的全开源社交分销电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 商业用途务必购买系统授权，以免引起不必要的法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | 微信公众号：好象科技
// | 访问官网：http://www.likemarket.net
// | 访问社区：http://bbs.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam-段誉
// +----------------------------------------------------------------------


namespace app\common\logic;

use app\common\server\AliPayServer;

class AliPayLogic
{

    //支付宝app支付
    public static function appPay($order)
    {
        $data = [
            'body'=>'商品简述',
            'subject'=>'商品名',
            'out_trade_no'=> $order['sn'],
            'timeout_express'=>'30m',
            'total_amount'=> $order['order_amount'],
            'product_code'=>'FAST_INSTANT_TRADE_PAY'
        ];
        $notify_url = 'http://tp.test/api/index/notify';

        $alipay = new AliPayServer();
        return $alipay->appAlipay($data, $notify_url);
    }
}