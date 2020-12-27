<?php
namespace app\admin\logic;
use app\common\model\DistributionOrder;
use app\common\model\Pay;

use app\common\model\Withdraw;
use think\Db;

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
// | Author: LikeShopTeam
// +----------------------------------------------------------------------
class FinanceLogic{
    public static function lists(){
        //本月订单金额
        $month_order_amount = Db::name('order')
            ->where(['pay_status'=>Pay::ISPAID,'refund_status'=>\app\common\model\OrderGoods::REFUND_STATUS_NO])
            ->whereTime('create_time','month')
            ->sum('order_amount');

        //订单总金额
        $total_amount = Db::name('order')
            ->where(['pay_status'=>Pay::ISPAID,'refund_status'=>\app\common\model\OrderGoods::REFUND_STATUS_NO])
            ->sum('total_amount');

        //会员余额
        $total_user_money = Db::name('user')
            ->where(['del'=>0])
            ->sum('user_money');

        //会员积分
        $total_user_integral = Db::name('user')
            ->where(['del'=>0])
            ->sum('user_integral');

        //可提现佣金
        $able_earnings = Db::name('user')
            ->where(['del'=>0])
            ->sum('earnings');

        //已提现佣金
        $have_withdraw_earnings = Db::name('withdraw_apply')
            ->where(['status' => Withdraw::STATUS_AUDIT_SUCCESS])
            ->sum('money');

        //本月分销佣金金额
        $month_earnings = Db::name('distribution_order_goods')
            ->where('status', '<>', DistributionOrder::STATUS_ERROR)
            ->whereTime('create_time', 'month')
            ->sum('money');

        //分销佣金总金额
        $distribution_earnings = Db::name('distribution_order_goods')
            ->where('status', '<>', DistributionOrder::STATUS_ERROR)
            ->sum('money');

        return [
            'month_order_amount'    => $month_order_amount,
            'total_amount'          => $total_amount,
            'total_user_money'      => $total_user_money,
            'total_user_integral'   => $total_user_integral,
            'month_earnings'        => $month_earnings,
            'distribution_earnings' => $distribution_earnings,
            'able_earnings'         => $able_earnings,
            'have_withdraw_earnings' => $have_withdraw_earnings,
        ];
    }
}