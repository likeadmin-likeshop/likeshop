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

use app\api\model\User;
use app\common\model\AccountLog;
use app\common\model\OrderGoods;
use app\common\server\ConfigServer;
use think\Db;

class IntegralLogic
{

    /**
     * Notes: 订单是否开启积分抵扣
     * @param $order_goods
     * @author 段誉(2021/4/1 11:05)
     * @return bool
     */
    public static function isIntegralInOrder($order_goods)
    {
        $integral_switch = ConfigServer::get('marketing', 'integral_deduction_status', 0);

        if ($integral_switch == 0) {
            return false;
        }

        foreach ($order_goods as $good) {
            if ($good['is_integral'] != 1) {
                return false;
            }
        }
        return true;
    }



    /**
     * Desc: 处理积分
     * @param $user_id
     * @param $use_integral
     * @param $channel
     * @param $source_id
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function handleIntegral($user_id, $use_integral, $channel, $source_id)
    {
        $user = User::get($user_id);
        switch ($channel) {
            //下单积分抵扣
            case AccountLog::order_deduction_integral:
                $user->user_integral = ['dec', $use_integral];
                $change_type = 2;
                break;

            //取消订单退回积分
            case AccountLog::cancel_order_refund_integral:
                $user->user_integral = ['inc', $use_integral];
                $change_type = 1;
                break;

            //下单奖励积分(每天一单)
            case AccountLog::order_add_integral:
                $user->user_integral = ['inc', $use_integral];
                $change_type = 1;
                break;

            //扣除首单积分奖励(用户取消订单)
            case AccountLog::deduct_order_first_integral:
                $diff = $user->user_integral - $use_integral;
                if ($diff < 0) {
                    $user->user_integral = 0;
                } else {
                    $user->user_integral = ['dec', $use_integral];
                }
                $change_type = 2;
                break;

            //购买商品赠送积分
            case AccountLog::order_goods_give_integral:
                $user->user_integral = ['inc', $use_integral];
                $change_type = 1;
                break;

            default:
                return;
        }
        $user->save();
        //更新积分记录
        AccountLogLogic::AccountRecord($user_id, $use_integral, $change_type, $channel, '', $source_id);
    }




    /**
     * Desc: 下单奖励积分(每天第一单)
     * @param $user_id
     * @param $order_id
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function rewardIntegral($user_id, $order_id)
    {
        //是否为当天第一个订单(是->奖励积分)
        $check = Db::name('account_log')
            ->where(['user_id' => $user_id, 'source_type' => AccountLog::order_add_integral])
            ->whereTime('create_time', 'today')
            ->find();

        //下单奖励开关;0-关闭;1-开启;
        $order_award_integral = ConfigServer::get('marketing', 'order_award_integral', 0);
        if ($order_award_integral == 0 || $check) {
            return;
        }

        self::handleIntegral($user_id, $order_award_integral, AccountLog::order_add_integral, $order_id);
    }


    /**
     * Notes: 扣除首单积分
     * @param $user_id
     * @param $order_id
     * @author 段誉(2021/2/25 10:23)
     * @return bool
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function backIntegral($user_id, $order_id)
    {
        $log = Db::name('account_log')
            ->where([
                'user_id' => $user_id,
                'source_type' => AccountLog::order_add_integral,
                'source_id' => $order_id
            ])
            ->find();

        if (!$log){
            return false;
        }

        self::handleIntegral($user_id, $log['change_amount'], AccountLog::deduct_order_first_integral, $order_id);

        return true;
    }


    /**
     * Notes: 购买商品奖励积分
     * @param $user_id
     * @param $order_id
     * @author 段誉(2021/4/1 11:06)
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function rewardIntegralByGoods($user_id, $order_id)
    {
        $goods_model = new OrderGoods();
        $goods = $goods_model->alias('og')
            ->field('g.*,og.total_pay_price')
            ->join('goods g', 'g.id = og.goods_id')
            ->where(['order_id' => $order_id])
            ->select();

        $get_integral = 0;//可得积分

        foreach ($goods as $good) {
            //赠送积分类型：0-不赠送；1-赠送固定积分；2-按比例赠送积分'
            if ($good['give_integral_type'] == 0) {
                continue;
            }

            $good['give_integral'] = empty($good['give_integral']) ? 0 : intval($good['give_integral']);

            if ($good['give_integral_type'] == 1) {
                $get_integral += $good['give_integral'];
            }

            if ($good['give_integral_type'] == 2) {
                $get_integral += $good['give_integral'] * $good['total_pay_price'] / 100;
            }
        }

        if ($get_integral <= 0) {
            return;
        }

        //用户赠送积分
        self::handleIntegral($user_id, $get_integral, AccountLog::order_goods_give_integral, $order_id);
    }


    /**
     * Notes: 积分抵扣描述
     * @param $integral_config
     * @param $integral_limit
     * @author 段誉(2021/5/19 18:32)
     * @return string
     */
    public static function getIntegralDesc($integral_config, $integral_limit)
    {
        if ($integral_config <= 0) {
            return '积分不可抵扣';
        }
        $integral_desc = $integral_config.'积分可抵扣1元';
        if ($integral_limit > 0) {
            $integral_desc .= ',单次抵扣积分不能低于'.$integral_limit;
        }
        return $integral_desc;
    }


}