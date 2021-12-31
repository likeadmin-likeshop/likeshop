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

namespace app\admin\logic;

use app\common\model\DistributionOrder;
use app\common\model\OrderGoods;
use app\common\model\Pay;
use app\common\model\Withdraw;
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

        //退款订单
        $refund_order = Db::name('order_refund')
            ->field('sum(refund_amount) as amount, count(id) as num')
            ->where(['refund_status' => 1])
            ->find();

        //会员相关
        $user = Db::name('user')
            ->field('sum(user_money) as money, sum(user_integral) as integral, sum(earnings) as earnings')
            ->where(['del' => 0])
            ->find();

        //已提现佣金
        $have_withdraw_earnings = Db::name('withdraw_apply')
            ->where(['status' => Withdraw::STATUS_SUCCESS])
            ->sum('money');

        //提现中
        $wait_withdraw_earnings = Db::name('withdraw_apply')
            ->where(['status' => Withdraw::STATUS_ING])
            ->sum('money');


        //本月分销佣金金额
        $month_earnings = Db::name('distribution_order_goods')
            ->where('status', '<>', DistributionOrder::STATUS_ERROR)
            ->whereTime('create_time', 'month')
            ->sum('money');

        //分销佣金总佣金
        $distribution_earnings = Db::name('distribution_order_goods')
            ->where('status', '<>', DistributionOrder::STATUS_ERROR)
            ->sum('money');

        return [
            'month_order_amount' => round($month_order_amount, 2),
            'total_amount' => round($order['amount'], 2),
            'order_num' => $order['num'] ?? 0,
            'refund_amount' => round($refund_order['amount'], 2),
            'refund_num' => $refund_order['num'] ?? 0,

            'total_user_money' => round($user['money'], 2),
            'total_user_integral' => $user['integral'] ?? 0,
            'able_earnings' => round($user['earnings'], 2),
            'have_withdraw_earnings' => round($have_withdraw_earnings, 2),

            'month_earnings' => round($month_earnings, 2),
            'distribution_earnings' => round($distribution_earnings, 2),
            'wait_earnings' => round($wait_withdraw_earnings, 2),
        ];
    }

}