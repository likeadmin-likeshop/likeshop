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

namespace app\common\command;

use app\common\logic\AccountLogLogic;
use app\common\model\{AccountLog, AfterSale, NoticeSetting, Order, User, DistributionOrder as DistributionOrderModel};
use app\common\server\ConfigServer;
use think\console\Command;
use think\console\Input;
use think\console\Output;
use think\Db;
use think\facade\Hook;
use think\facade\Log;

class DistributionOrder extends Command
{

    /**
     * 分佣逻辑 => (没有售后订单且符合其他条件可结算)
     * 售后订单为 申请退款, 待退货, 待收货  属于情况不明, 不结算分佣订单
     * 售后订单为 等待退款 或 退款成功, 不结算分佣订单  分佣订单状态改为已失效
     * 售后订单为 拒绝 或 拒收货  情况清晰 不退钱 可结算分佣订单
     */

    protected function configure()
    {
        $this->setName('distribution_order')
            ->setDescription('结算分销订单');
    }

    protected function execute(Input $input, Output $output)
    {
        //查看分销配置是否开启
        $setting = ConfigServer::get('distribution', 'is_open', 1);
        if ($setting != 1) {
            return true;
        }

        //售后时间(未过售后时间的分销订单不处理)
        $after_sale_time = ConfigServer::get('after_sale', 'refund_days', 7);
        $after_sale_time = $after_sale_time * 24 * 60 * 60;
        $now = time();

        Db::startTrans();
        try{
            //待分佣的分销订单
            $orders = Db::name('distribution_order_goods')->alias('d')
                ->field('o.id as order_id,o.confirm_take_time, d.money, d.id as distribution_id, d.user_id, d.sn, d.order_goods_id')
                ->join('order_goods og', 'og.id = d.order_goods_id')
                ->join('order o', 'o.id = og.order_id')
                ->where('d.status', DistributionOrderModel::STATUS_WAIT_HANDLE)
                ->where('o.order_status', Order::STATUS_FINISH)
                ->where(Db::raw("o.confirm_take_time+$after_sale_time < $now"))
                ->select();

            //处理用户表字段earnings为null时自增佣金报错的情况
            $check_user = User::whereNull('earnings')->find();
            if ($check_user) {
                User::whereNull('earnings')->update(['earnings' => 0]);
            }

            foreach ($orders as $order) {
                
                $user = User::get($order['user_id']);

                //当前分佣订单是否可结算   //非分销会员或已被冻结的分销会员不参与分佣
                if ( false === self::isSettle($order) || empty($user)
                    || $user['is_distribution'] != 1
                    || $user['freeze_distribution'] == 1
                ) {
                    continue;
                }

                //增加佣金
                $user->earnings = ['inc', $order['money']];
                $user->update_time = time();
                $user->save();

                //增加佣金变动记录
                AccountLogLogic::AccountRecord(
                    $order['user_id'],
                    $order['money'],
                    1,
                    AccountLog::distribution_inc_earnings,
                    '',
                    $order['distribution_id'],
                    $order['sn']
                );

                //更新分销订单状态
                DistributionOrderModel::updateOrderStatus($order['distribution_id'], DistributionOrderModel::STATUS_SUCCESS);

                //通知会员
                Hook::listen('notice', [
                    'user_id'  => $order['user_id'],
                    'earnings' => $order['money'],
                    'scene'    => NoticeSetting::GET_EARNINGS_NOTICE,
                ]);

                // 赠送成长值和积分
                Hook::listen('give_reward', [
                    'order_id' => $order['order_id'],
                    'scene'    => 4, //4=订单结算
                ]);
            }

            Db::commit();
        } catch (\Exception $e) {
            Db::rollback();
            Log::write('结算分佣订单错误:'.$e->getMessage());
        }
    }


    //是否可以结算分佣订单 (检查是否有售后记录 没有则可结算, 有则需要检查售后记录状态)
    protected function isSettle($order)
    {
        //订单是否在售后(正在退款或已退款)
        $check = Db::name('after_sale')
            ->where(['order_goods_id' => $order['order_goods_id']])
            ->where('del', 0)
            ->find();

        if (!$check) {
            return true;
        }

        //有售后订单记录且状态 $no_settlement中的 不结算分佣订单
        $no_settlement = [
            AfterSale::STATUS_APPLY_REFUND, //申请退款
            AfterSale::STATUS_WAIT_RETURN_GOODS, //商品待退货
            AfterSale::STATUS_WAIT_RECEIVE_GOODS, //商家待收货
        ];

        //不结算且分佣订单改为已失效
        $set_fail = [
            AfterSale::STATUS_WAIT_REFUND, //等待退款
            AfterSale::STATUS_SUCCESS_REFUND, //退款成功
        ];

        //售后情况不明 不结算
        if (in_array($check['status'], $no_settlement)) {
            return false;
        }

        //分佣订单更新为已失效  不结算
        if (in_array($check['status'], $set_fail)) {
            DistributionOrderModel::updateOrderStatus($order['distribution_id'], DistributionOrderModel::STATUS_ERROR);
            return false;
        }

        return true;
    }

}