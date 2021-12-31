<?php


namespace app\common\behavior;


use app\common\logic\AccountLogLogic;
use app\common\model\AccountLog;
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
        $channel = AccountLog::order_add_integral;
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