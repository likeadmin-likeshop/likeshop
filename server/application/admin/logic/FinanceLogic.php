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


use app\common\model\OrderGoods;
use app\common\model\Pay;
use think\Db;


class FinanceLogic
{
    public static function lists()
    {
        //本月订单金额
        $month_order_amount = Db::name('order')
            ->where(['pay_status' => Pay::ISPAID, 'refund_status' => OrderGoods::REFUND_STATUS_NO])
            ->whereTime('create_time', 'month')
            ->sum('order_amount');

        //订单总金额
        $order = Db::name('order')
            ->field('sum(order_amount) as amount, count(id) as num')
            ->where('pay_status' , 'in', [Pay::ISPAID, Pay::REFUNDED])
            ->find();

        //会员相关
        $user = Db::name('user')
            ->field('sum(user_money) as money')
            ->where(['del' => 0])
            ->find();

        return [
            'month_order_amount' => round($month_order_amount, 2),
            'total_amount' => round($order['amount'], 2),
            'order_num' => $order['num'] ?? 0,
            'total_user_money' => round($user['money'], 2),
        ];
    }
}