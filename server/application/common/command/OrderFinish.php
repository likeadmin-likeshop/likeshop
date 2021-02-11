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

use app\common\logic\OrderLogLogic;
use app\common\model\Order;
use app\common\model\OrderLog;
use app\common\model\Pay;
use app\common\server\ConfigServer;
use think\console\Command;
use think\console\Input;
use think\console\Output;
use think\Db;
use think\facade\Log;

/**
 * 确认收货
 * Class OrderFinish
 * @package app\common\command
 */
class OrderFinish extends Command
{
    protected function configure()
    {
        $this->setName('order_finish')
            ->setDescription('自动确认收货(待收货订单)');
    }

    protected function execute(Input $input, Output $output)
    {
        Db::startTrans();
        try{
            $now = time();
            $config = ConfigServer::get('trading', 'order_finish', 0);
            if($config == 0){
                return true;
            }

            $finish_limit = $config * 24 * 60 * 60;

            $orders = Db::name('order')
                ->where(['order_status' => Order::STATUS_WAIT_RECEIVE, 'pay_status' =>Pay::ISPAID, 'del' => 0])
                ->where(Db::raw("shipping_time+$finish_limit < $now"))
                ->select();

            if (empty($orders)){
                return true;
            }

            foreach ($orders as $order){
                Db::name('order')
                    ->where(['id' => $order['id']])
                    ->update([
                        'order_status' => Order::STATUS_FINISH,
                        'update_time' => $now,
                        'confirm_take_time' => $now,
                    ]);

                //订单日志
                OrderLogLogic::record(
                    OrderLog::TYPE_SYSTEM,
                    OrderLog::SYSTEM_CONFIRM_ORDER,
                    $order['id'],
                    0,
                    OrderLog::SYSTEM_CONFIRM_ORDER
                );
            }
            Db::commit();
        } catch (\Exception $e){
            Log::write('订单自动确认失败,失败原因:'.$e->getMessage());
            Db::rollback();
        }
    }
}