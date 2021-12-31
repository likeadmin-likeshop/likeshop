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

use app\common\logic\OrderRefundLogic;
use app\common\model\Order;
use app\common\model\OrderLog;
use app\common\model\Pay;
use app\common\model\Team;
use app\common\model\TeamFollow;
use app\common\model\TeamFound;
use app\common\server\ConfigServer;
use think\console\Command;
use think\console\Input;
use think\console\Output;
use think\Db;
use think\Exception;
use think\facade\Log;


class TeamEnd extends Command
{
    protected function configure()
    {
        $this->setName('team_end')
            ->setDescription('结束已超时的拼团');
    }

    protected function execute(Input $input, Output $output)
    {
        $now = time();

        //关闭活动
        $activity = Db::name('team_activity')
            ->where('end_time', '<=', $now)
            ->select();
        //更新商品is_team
        $team_ids = array_column($activity, 'team_id');

        Db::name('goods g')
            ->join('team_goods_item i', 'i.goods_id = g.id')
            ->where('i.team_id', 'in', $team_ids)
            ->update(['is_team' => 0]);

        Db::name('team_activity')
            ->where('team_id', 'in', $team_ids)
            ->update(['status' => 0]);


        $map1 = [
            ['found_end_time', '<=', $now],
            ['status', '=', 0]
        ];

        $map2 = [
            ['team_id', 'in', $team_ids],
            ['status', '=', 0]
        ];
        //已过团结束时间,但未成团
        $lists = Db::name('team_found')
            ->field('id')
            ->whereOr([$map1, $map2])
            ->select();

        if (empty($lists)) {
            return true;
        }

        //需要退款的团id
        $refound_found_ids = [];

        //系统自动成团: 0-关闭; 1-开启
        $setting = ConfigServer::get('team', 'automatic', 0);

        //更新拼团状态
        foreach ($lists as $item) {
            $found = TeamFound::get($item['id']);
            if ($found['join'] == $found['need'] || $setting == 1) {
                //人数凑齐,拼团成功 或者 系统自动成团
                $team_status = Team::STATUS_SUCCESS;
            } else {
                //人数不齐,拼团失败
                $team_status = Team::STATUS_ERROR;
                $refound_found_ids[] = $item['id'];
            }
            $found->status = $team_status;
            $found->team_end_time = time();
            $found->save();

            TeamFollow::where(['found_id' => $item['id']])
                ->update(['status' => $team_status, 'team_end_time' => time()]);
        }

        if (empty($refound_found_ids)) {
            return true;
        }

        //失败的订单才退款
        $orders = Db::name('order')
            ->where(['team_found_id' => $refound_found_ids, 'del' => 0])
            ->select();


        Db::startTrans();
        try {
            foreach ($orders as $order) {
                if ($order['order_status'] == Order::STATUS_CLOSE) {
                    continue;
                }
                if ($order['pay_status'] == Pay::REFUNDED || $order['pay_status'] == Pay::UNPAID) {
                    continue;
                }
                //取消订单
                OrderRefundLogic::cancelOrder($order['id'], OrderLog::TYPE_SYSTEM);
                //更新订单状态
                OrderRefundLogic::cancelOrderRefundUpdate($order);
                //订单退款
                OrderRefundLogic::refund($order, $order['order_amount'], $order['order_amount']);
            }
            Db::commit();
        } catch (Exception $e) {
            Db::rollback();
            //错误记录
            Log::write('拼购退款失败:' . $e->getMessage());
        } catch (\EasyWeChat\Kernel\Exceptions\Exception $e) {
            Db::rollback();
            //错误记录
            Log::write('拼购退款失败:' . $e->getMessage());
        } catch (\Exception $e) {
            Db::rollback();
            //错误记录
            Log::write('拼购退款失败:' . $e->getMessage());
        }
    }
}