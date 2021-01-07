<?php
namespace app\admin\logic;
use app\common\model\DistributionOrder;
use app\common\model\Pay;

use app\common\model\Withdraw;
use think\Db;

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

        return [
            'month_order_amount'    => $month_order_amount,
            'total_amount'          => $total_amount,
            'total_user_money'      => $total_user_money,
            'total_user_integral'   => $total_user_integral,
        ];
    }
}