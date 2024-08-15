<?php
namespace app\common\model;

use think\Model;

class DistributionOrderGoods extends Model
{
    //分销订单状态
    const STATUS_WAIT_HANDLE = 1;//待返佣
    const STATUS_SUCCESS = 2;//已结算
    const STATUS_ERROR = 3;//已失效

    public function getStatusDescAttr($value)
    {
        $statusDesc = [
            1 => '待返佣',
            2 => '已结算',
            3 => '已失效',
        ];
        return $statusDesc[$value];
    }

    public function getDistributionCreateTimeAttr($value)
    {
        return date('Y-m-d H:i:s', $value);
    }

    /**
     * Notes: 更新指定分佣订单状态
     * @param $distribution_id
     * @param $status
     * @author 段誉(2021/4/23 10:10)
     * @return DistributionOrder
     */
    public static function updateOrderStatus($distribution_id, $status)
    {
        return self::where('id', $distribution_id)
            ->update([
                'status' => $status,
                'update_time' => time()
            ]);
    }

    /**
     * @notes 获取指定用户佣金情况
     * @param $userId
     * @return array
     * @author Tab
     * @date 2021/9/2 19:14
     */
    public static function getEarnings($userId)
    {
        // 待返佣
        $wait = self::where([
            'user_id' => $userId,
            'status' => 1,
        ])->sum('money');
        // 已入账
        $success = self::where([
            'user_id' => $userId,
            'status' => 2,
        ])->sum('money');
        // 已失效
        $fail = self::where([
            'user_id' => $userId,
            'status' => 3,
        ])->sum('money');

        return [
            'wait' => $wait,
            'success' => $success,
            'fail' => $fail,
        ];
    }

    public function getSettlementTimeAttr($value)
    {
        return empty($value) ? '' : date('Y-m-d H:i:s', $value);
    }
}