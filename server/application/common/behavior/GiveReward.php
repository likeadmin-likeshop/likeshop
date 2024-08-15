<?php
// +----------------------------------------------------------------------
// | likeshop开源商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop系列产品在gitee、github等公开渠道开源版本可免费商用，未经许可不能去除前后端官方版权标识
// |  likeshop系列产品收费版本务必购买商业授权，购买去版权授权后，方可去除前后端官方版权标识
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | likeshop团队版权所有并拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshop.cn.team
// +----------------------------------------------------------------------

namespace app\common\behavior;


use app\common\logic\AccountLogLogic;
use app\common\model\AccountLog;
use app\common\model\Order;
use Exception;
use think\Db;
use think\facade\Log;

class GiveReward
{
    /**
     * @Notes: 赠送积分或成长值
     * @Author: 张无忌
     * @param $params
     * @return bool
     */
    public function run($params)
    {
        try {
            $order_id = $params['order_id']; //(订单ID)
            $scene    = $params['scene'];    //(赠送场景 [1=订单支付, 2=订单发货, 3=订单完成, 4=订单结算])

            $order = Db::name('order')->find($order_id);
            if (!$order) return false;
            if (empty($order['attach_values'])) return false;
            $attach = json_decode($order['attach_values'], true);

            // 自提订单没有发货操作。
            // 当订单为自提方式,赠送机制为订单发货赠送且传入场景为 3=订单完成(自提核销操作) 时
            // 调整场景值为2,便于通过后续场景值验证
            if ($order['delivery_type'] == Order::DELIVERY_STATUS_SELF && $attach['give_growth_scene'] == 2 && $scene == 3) {
                $scene = 2;
            }

            $this->giveIntegral($order, $attach, $scene);
            $this->giveGrowth($order, $attach, $scene);

            return true;
        } catch (Exception $e) {
            Log::write('赠送奖励失败:'.$e->getMessage());
            return false;
        }
    }


    /**
     * @Notes: 送积分
     * @Author: 张无忌
     * @param $order
     * @param $attach
     * @param $scene
     * @return bool
     * @throws \think\Exception
     */
    private function giveIntegral($order, $attach, $scene)
    {
        if ($attach['give_integral_scene'] != $scene) return true;
        if ($attach['give_integral_num'] <= 0) return true;

        Db::name('user')->where(['id'=>$order['user_id']])->update([
            'user_integral' => ['inc', $attach['give_integral_num']],
            'update_time'   => time()
        ]);

        $change_type = 1;
        $channel = AccountLog::order_goods_give_integral;
        AccountLogLogic::AccountRecord(
            $order['user_id'],
            $attach['give_integral_num'],
            $change_type,
            $channel, '', $order['id']
        );

        return true;
    }

    /**
     * @Notes: 送成长值
     * @Author: 张无忌
     * @param $order
     * @param $attach
     * @param $scene
     * @return bool
     * @throws \think\Exception
     */
    private function giveGrowth($order, $attach, $scene)
    {
        if ($attach['give_growth_scene'] != $scene) return true;
        if ($attach['give_growth_num'] <= 0) return true;

        Db::name('user')->where(['id'=>$order['user_id']])->update([
            'user_growth' => ['inc', $attach['give_growth_num']],
            'update_time' => time()
        ]);

        $change_type = 1;
        $channel = AccountLog::order_give_growth;
        AccountLogLogic::AccountRecord(
            $order['user_id'],
            $attach['give_growth_num'],
            $change_type,
            $channel, '', $order['id']
        );

        return true;
    }
}