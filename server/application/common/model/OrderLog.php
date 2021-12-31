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

namespace app\common\model;

use think\Db;
use think\Model;

class OrderLog extends Model
{
    //操作人类型
    const TYPE_USER     = 0;//会员
    const TYPE_SHOP     = 1;//门店
    const TYPE_SYSTEM   = 2;//系统

    //订单动作
    const USER_ADD_ORDER        = 101;//提交订单
    const USER_CANCEL_ORDER     = 102;//取消订单
    const USER_DEL_ORDER        = 103;//删除订单
    const USER_CONFIRM_ORDER    = 104;//确认收货
    const USER_PAID_ORDER       = 105;//支付订单

    const SHOP_CANCEL_ORDER     = 201;//商家取消订单
    const SHOP_DEL_ORDER        = 202;//商家删除订单
    const SHOP_DELIVERY_ORDER   = 203;//商家发货
    const SHOP_CONFIRM_ORDER    = 204;//商家确认收货

    const SYSTEM_CANCEL_ORDER   = 301;//系统取消订单
    const SYSTEM_CONFIRM_ORDER  = 302;//系统确认订单

    //订单动作明细
    public static function getLogDesc($log)
    {
        $desc = [
            self::USER_ADD_ORDER        => '会员提交订单',
            self::USER_CANCEL_ORDER     => '会员取消订单',
            self::USER_DEL_ORDER        => '会员删除订单',
            self::USER_CONFIRM_ORDER    => '会员确认收货',
            self::USER_PAID_ORDER       => '会员支付订单',

            self::SHOP_CANCEL_ORDER     => '商家取消订单',
            self::SHOP_DEL_ORDER        => '商家删除订单',
            self::SHOP_DELIVERY_ORDER   => '商家发货',
            self::SHOP_CONFIRM_ORDER    => '商家确认收货',

            self::SYSTEM_CANCEL_ORDER   => '系统取消订单',
            self::SYSTEM_CONFIRM_ORDER  => '系统确认收货',
        ];

        if ($log === true) {
            return $desc;
        }

        return isset($desc[$log]) ? $desc[$log] : $log;
    }

    //订单日志
    public static function getOrderLog($order_id)
    {
        $logs = Db::name('order_log')
            ->where('order_id', $order_id)
            ->select();

        foreach ($logs as &$log){
            $log['create_time'] = date('Y-m-d H:i:s', $log['create_time']);
            $log['channel'] = self::getLogDesc($log['channel']);
        }

        return $logs;
    }
}