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

namespace app\common\command;

use app\common\logic\AccountLogLogic;
use app\common\model\{AccountLog, AfterSale, Notice_, Order, User};
use app\common\server\ConfigServer;
use think\console\Command;
use think\console\Input;
use think\console\Output;
use think\Db;
use think\facade\Hook;

class DistributionOrder extends Command
{
    protected function configure()
    {
        $this->setName('distribution_order')
            ->setDescription('结算分销订单');
    }

    protected function execute(Input $input, Output $output)
    {
        //查看分销配置是否开启
        $setting = ConfigServer::get('distribution', 'is_open', 1);
        if ($setting != 1){
            return true;
        }

        //售后时间(未过售后时间的分销订单不处理)
        $after_sale_time = ConfigServer::get('after_sale', 'refund_days', 7);
        $time = time() - ($after_sale_time * 24 * 60 * 60);

        //待分佣的分销订单
        $orders = Db::name('distribution_order_goods')->alias('d')
            ->field('o.id as order_id, d.money, d.id as distribution_id, d.user_id, d.sn')
            ->join('order_goods og', 'og.id = d.order_goods_id')
            ->join('order o', 'o.id = og.order_id')
            ->where('d.status', \app\common\model\DistributionOrder::STATUS_WAIT_HANDLE)
            ->where('o.order_status', Order::STATUS_FINISH)
            ->where('o.create_time', '<', $time)
            ->select();

        //todo 此处订单如非已在(正在退款或退款成功状态)都给分佣
        foreach ($orders as $order) {

            //订单是否在售后(正在退款或已退款)
            $check = Db::name('after_sale')
                ->where(['order_id' => $order['order_id']])
                ->where('status', 'in', [AfterSale::STATUS_WAIT_REFUND, AfterSale::STATUS_SUCCESS_REFUND])
                ->find();

            if ($check) {
                continue;
            }

            //增加用户佣金
            $user = User::get($order['user_id']);
            $user->earnings = ['inc', $order['money']];
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
            Db::name('distribution_order_goods')
                ->where('id', $order['distribution_id'])
                ->update([
                    'status' => \app\common\model\DistributionOrder::STATUS_SUCCESS,
                    'update_time' => time()
                ]);

            Hook::listen('notice', [
                'user_id'  => $order['user_id'],
                'earnings' => $order['money'],
                'scene'    => Notice_::EARNINGS_GET_BENEFIT,
            ]);
        }
    }

}