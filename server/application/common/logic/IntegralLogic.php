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

use app\api\model\User;
use app\common\model\AccountLog;

class IntegralLogic
{


    /**
     * Desc: 下单时使用优惠券抵扣  todo 和取消抵扣方法整合在一起
     * @param $user_id
     * @param $order_id
     * @param $user_use_integral
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function useIntegralByOrder($user_id, $order_id, $user_use_integral)
    {
        //扣减用户积分
        $user = User::get($user_id);
        $user->user_integral = ['dec', $user_use_integral];
        $user->save();

        AccountLogLogic::AccountRecord(
            $user_id,
            $user_use_integral,
            2,
            AccountLog::order_deduction_integral,
            '',
            $order_id,
            ''
        );
    }



    /**
     * Desc: 取消订单回退抵消的积分
     * @param $user_id
     * @param $order_id
     * @param $use_integral
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function rollbackIntegralByOrder($user_id, $order_id, $use_integral)
    {
        $user = User::get($user_id);
        $user->user_integral = ['inc', $use_integral];
        $user->save();

        AccountLogLogic::AccountRecord(
            $user_id,
            $use_integral,
            1,
            AccountLog::cancel_order_refund_integral,
            '',
            $order_id
        );
    }
}