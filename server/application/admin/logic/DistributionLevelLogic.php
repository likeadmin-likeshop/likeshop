<?php
namespace app\admin\logic;

use app\common\logic\LogicBase;
use app\common\model\Distribution;
use app\common\model\DistributionGoods;
use app\common\model\DistributionLevel;
use app\common\model\DistributionLevelUpdate;
use app\common\model\DistributionOrderGoods;
use app\common\model\Order;
use think\Db;

class DistributionLevelLogic extends LogicBase
{
    /**
     * @notes 分销等级列表
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     * @author Tab
     */
    public static function index()
    {
        $field = [
            'id',
            'name',
            'weights' => 'weights_desc',
            'first_ratio',
            'second_ratio',
            'is_default',
            'id' => 'members_num'
        ];
        $lists = DistributionLevel::field($field)
            ->order('weights', 'asc')
            ->select()
            ->toArray();

        $count = DistributionLevel::count();

        return [
            'count' => $count,
            'lists' => $lists,
        ];
    }

    /**
     * @notes 添加分销会员等级
     * @param $params
     * @return bool
     * @author Tab
     */
    public static function add($params)
    {
        Db::startTrans();
        try{
            // 写入等级主表
            $params['remark'] = $params['remark'] ?? '';
            $newLevel = DistributionLevel::create($params);

            // 写入升级条件表
            self::addUpdateCondition($params, $newLevel->id);

            // 处理分销商品比例
            self::updateDistributionGoods($newLevel->id);

            Db::commit();
            return true;
        }catch(\Exception $e) {
            Db::rollback();
            self::$error = $e->getMessage();
            return false;
        }
    }

    /**
     * @notes 添加更新升级条件
     * @param $params
     * @param $level_id
     * @throws \Exception
     * @author Tab
     */
    public static function addUpdateCondition($params, $level_id)
    {
        $updateConditionData = [];
        foreach($params['update_condition'] as $key) {
            // 判断是否在规定的条件字段
            if(!in_array($key, DistributionLevel::UPDATE_CONDITION_FIELDS, true)) {
                continue;
            }
            if ($params[$key] < 0) {
                throw new \Exception('升级条件不允许小于0');
            }
            // 获取键对应值的字段名
            $valueField = DistributionLevel::getValueFiled($key);
            $updateConditionData[] = [
                'level_id' => $level_id,
                'key' => $key,
                $valueField => $params[$key]
            ];
        }
        (new DistributionLevelUpdate())->saveAll($updateConditionData);
    }

    /**
     * @notes 获取分销等级详情
     * @param $params
     * @return array
     * @author Tab
     */
    public static function detail($params)
    {
        $level = DistributionLevel::findOrEmpty($params['id']);
        if($level->isEmpty()) {
            return [];
        }
        $level = $level->toArray();
        // 默认等级
        if($level['is_default']) {
            unset($level['self_ratio']);
            unset($level['third_ratio']);
            unset($level['update_relation']);
            return $level;
        }
        // 自定义等级
        $level['update_condition'] = self::getUpdateCondition($level);
        unset($level['self_ratio']);
        unset($level['third_ratio']);

        return $level;
    }

    /**
     * @notes 获取升级条件
     * @param $level
     * @return array
     * @author Tab
     */
    public static function getUpdateCondition($level)
    {
        $updateCondition = DistributionLevelUpdate::where('level_id', $level['id'])->column('key,value_int,value_decimal,value_text');
        $updateConditionData = [];
        foreach($updateCondition as $item) {
            if($item['value_int']) {
                $updateConditionData[$item['key']] = $item['value_int'];
                continue;
            }
            if($item['value_decimal']) {
                $updateConditionData[$item['key']] = $item['value_decimal'];
                continue;
            }
            if($item['value_text']) {
                $updateConditionData[$item['key']] = $item['value_text'];
                continue;
            }
        }
        $data = [
            'keys' => array_keys($updateConditionData),
            'data' => $updateConditionData
        ];
        // 补全条件
        foreach(DistributionLevel::UPDATE_CONDITION_FIELDS as $field) {
            if(!isset($data['data'][$field])) {
                $data['data'][$field] =  '';
            }
        }
        return $data;
    }

    /**
     * @notes 编辑分销等级
     * @param $params
     * @return bool
     * @author Tab
     */
    public static function edit($params)
    {
        Db::startTrans();
        try{
            $params['remark'] = $params['remark'] ?? '';
            $level = DistributionLevel::findOrEmpty($params['id']);
            if($level->isEmpty()) {
                throw new \Exception('等级不存在');
            }

            // 佣金比例保留两位小数
            $params['first_ratio'] = !empty($params['first_ratio']) ? round($params['first_ratio'], 2) : 0;
            $params['second_ratio'] = !empty($params['second_ratio']) ? round($params['second_ratio'], 2) : 0;

            // 默认等级
            if($level->is_default) {
                $level->allowField(['name', 'first_ratio', 'second_ratio','remark'])->save($params);
                Db::commit();
                return true;
            }
            // 自定义等级 - 更新主表信息
            if(!$params['weights'] > 1) {
                throw new \Exception('级别须大于1');
            }
            if(!isset($params['update_relation'])) {
                throw new \Exception('请选择升级关系');
            }
            if(!isset($params['update_condition']) || !count($params['update_condition'])) {
                throw new \Exception('请选择升级条件');
            }
            $level->allowField(['name', 'weights', 'first_ratio', 'second_ratio','remark', 'update_relation'])->save($params);

            // 自定义等级 - 删除旧升级条件
            $deleteIds = DistributionLevelUpdate::where('level_id', $level->id)->column('id');
            DistributionLevelUpdate::destroy($deleteIds);

            // 自定义等级 - 添加新的升级条件
            self::addUpdateCondition($params, $level->id);

            Db::commit();
            return true;
        }catch(\Exception $e) {
            Db::rollback();
            self::$error = $e->getMessage();
            return false;
        }
    }

    /**
     * @notes 删除分销等级
     * @param $params
     * @return bool
     * @author Tab
     */
    public static function delete($params)
    {
        Db::startTrans();
        try{
            $level = DistributionLevel::findOrEmpty($params['id']);
            if($level->isEmpty()) {
                throw new \Exception('等级不存在');
            }
            if($level->is_default) {
                throw new \Exception('系统默认等级不允许删除');
            }

            // 重置该等级下的分销会员为系统默认等级
            $defaultId = DistributionLevel::where('is_default', 1)->value('id');
            Distribution::where('level_id', $level->id)->update(['level_id' => $defaultId]);

            // 删除升级条件
            $deleteIds = DistributionLevelUpdate::where('level_id', $level->id)->column('id');
            DistributionLevelUpdate::destroy($deleteIds);

            // 删除该等级下的分销商品比例
            $deleteIds = DistributionGoods::where('level_id', $level->id)->column('id');
            DistributionGoods::destroy($deleteIds);

            // 删除等级
            $level->delete();

            Db::commit();
            return true;
        }catch(\Exception $e) {
            Db::rollback();
            self::$error = $e->getMessage();
            return false;
        }
    }

    /**
     * @notes 更新分销会员等级
     * @param $userId
     * @return false
     * @author Tab
     */
    public static function updateDistributionLevel($userId)
    {
        // 非默认等级
        $levels = DistributionLevel::where('is_default', 0)
            ->order('weights', 'desc')
            ->column('id,name,weights,update_relation', 'id');

        $userInfo = Distribution::alias('d')
            ->leftJoin('distribution_level dl', 'dl.id = d.level_id')
            ->field('d.is_distribution,d.level_id,dl.weights')
            ->where('d.user_id', $userId)
            ->findOrEmpty()
            ->toArray();

        // 非分销会员直接返回false
        if(empty($userInfo) || !$userInfo['is_distribution']) {
            return false;
        }

        foreach($levels as $level) {
            if(self::isMeetConditions($userId, $level) && $level['weights'] > $userInfo['weights']) {
                // 满足升级条件且是升更高的等级
                Distribution::where(['user_id' => $userId])->update(['level_id' => $level['id']]);
                break;
            }
        }
    }

    /**
     * @notes 判断是否满足当前等级的升级条件
     * @param $userId
     * @param $level
     * @return bool
     * @author Tab
     */
    public static function isMeetConditions($userId, $level)
    {
        $updateRelation = $level['update_relation'];
        // 任一条件满足升级
        if($updateRelation == 1) {
            $flagOr = self::singleConsumptionAmountFlag($userId, $level, $updateRelation)
                || self::cumulativeConsumptionAmountFlag($userId, $level, $updateRelation)
                || self::cumulativeConsumptionTimesFlag($userId, $level, $updateRelation)
                || self::returnedCommissionFlag($userId, $level, $updateRelation);
            return $flagOr;
        }

        // 全部条件满足升级
        if($updateRelation == 2) {
            $flagAnd = self::singleConsumptionAmountFlag($userId, $level, $updateRelation)
                && self::cumulativeConsumptionAmountFlag($userId, $level, $updateRelation)
                && self::cumulativeConsumptionTimesFlag($userId, $level, $updateRelation)
                && self::returnedCommissionFlag($userId, $level, $updateRelation);
            return $flagAnd;
        }
    }

    /**
     * @notes 判断是否满足单笔消费金额条件
     * @param $userId
     * @param $level
     * @return bool
     * @author Tab
     */
    public static function singleConsumptionAmountFlag($userId, $level, $updateRelation)
    {
        $condition = DistributionLevelUpdate::field('value_int,value_decimal,value_text')
            ->where([
                'level_id' => $level['id'],
                'key' => 'singleConsumptionAmount'
            ])
            ->findOrEmpty();
        if($condition->isEmpty()) {
            // 等级条件为满足任一条件(updateRelation=1)  返回false (满足已设置的任一条件时才升级,未设置的条件归为未满足,返回false)
            // 等级条件为满足全部条件(updateRelation=2)  返回true  (满足已设置的所有条件时才升级,未设置的条件归为已满足,返回true)
            return $updateRelation == 2;
        }
        $recentOrder = Order::where([
            'user_id' =>  $userId,
            'pay_status' => 1
        ])
            ->order('id', 'desc')
            ->findOrEmpty();
        if($recentOrder->isEmpty()) {
            return false;
        }

        if($recentOrder->order_amount >= $condition['value_decimal']) {
            return true;
        }
        return false;
    }

    /**
     * @notes 判断是否满足累计消费金额条件
     * @param $userId
     * @param $level
     * @return bool
     * @author Tab
     */
    public static function cumulativeConsumptionAmountFlag($userId, $level, $updateRelation)
    {
        $condition = DistributionLevelUpdate::field('value_int,value_decimal,value_text')
            ->where([
                'level_id' => $level['id'],
                'key' => 'cumulativeConsumptionAmount'
            ])
            ->findOrEmpty();
        if($condition->isEmpty()) {
            // 等级条件为满足任一条件(updateRelation=1)  返回false (满足已设置的任一条件时才升级,未设置的条件归为未满足,返回false)
            // 等级条件为满足全部条件(updateRelation=2)  返回true  (满足已设置的所有条件时才升级,未设置的条件归为已满足,返回true)
            return $updateRelation == 2;
        }
        $cumulativeConsumptionAmount = Order::where([
            'user_id' =>  $userId,
            'pay_status' => 1
        ])->sum('order_amount');
        if($cumulativeConsumptionAmount >= $condition['value_decimal']) {
            return true;
        }
        return false;
    }

    /**
     * @notes 判断是否满足累计消费次数条件
     * @param $userId
     * @param $level
     * @return bool
     * @author Tab
     */
    public static function cumulativeConsumptionTimesFlag($userId, $level, $updateRelation)
    {
        $condition = DistributionLevelUpdate::field('value_int,value_decimal,value_text')
            ->where([
                'level_id' => $level['id'],
                'key' => 'cumulativeConsumptionTimes'
            ])
            ->findOrEmpty();
        if($condition->isEmpty()) {
            // 等级条件为满足任一条件(updateRelation=1)  返回false (满足已设置的任一条件时才升级,未设置的条件归为未满足,返回false)
            // 等级条件为满足全部条件(updateRelation=2)  返回true  (满足已设置的所有条件时才升级,未设置的条件归为已满足,返回true)
            return $updateRelation == 2;
        }
        $cumulativeConsumptionTimes = Order::where([
            'user_id' =>  $userId,
            'pay_status' => 1
        ])->count();

        if($cumulativeConsumptionTimes >= $condition['value_int']) {
            return true;
        }
        return false;
    }

    /**
     * @notes 判断是否消费已返佣金条件
     * @param $userId
     * @param $level
     * @return bool
     * @author Tab
     */
    public static function returnedCommissionFlag($userId, $level, $updateRelation)
    {
        $condition = DistributionLevelUpdate::field('value_int,value_decimal,value_text')
            ->where([
                'level_id' => $level['id'],
                'key' => 'returnedCommission'
            ])
            ->findOrEmpty();
        if($condition->isEmpty()) {
            // 等级条件为满足任一条件(updateRelation=1)  返回false (满足已设置的任一条件时才升级,未设置的条件归为未满足,返回false)
            // 等级条件为满足全部条件(updateRelation=2)  返回true  (满足已设置的所有条件时才升级,未设置的条件归为已满足,返回true)
            return $updateRelation == 2;
        }
        $returnedCommission = DistributionOrderGoods::where([
            'user_id' => $userId,
            'status' => 2
        ])->sum('money');
        if($returnedCommission >= $condition['value_decimal']) {
            return true;
        }
        return false;
    }

    /**
     * @notes 获取所有分销会员等级
     * @return array
     * @author Tab
     */
    public static function getLevels()
    {
        return DistributionLevel::order('weights', 'asc')->column('id, name,weights');
    }

    /**
     * @notes 更新分销商品比例
     * @param $levelId
     * @author Tab
     */
    public static function updateDistributionGoods($levelId)
    {
        // 处理单独设置比例的商品,新增分销会等级佣金比例初始化为0
        $field = [
            'goods_id',
            'item_id',
        ];
        $distribution = DistributionGoods::distinct(true)->field($field)->where('rule', 2)->select()->toArray();
        $addData = [];
        foreach($distribution as $item) {
            $temp = [
                'goods_id' => $item['goods_id'],
                'item_id' => $item['item_id'],
                'level_id' => $levelId,
                'first_ratio' => 0,
                'second_ratio' => 0,
                'rule' => 2,
            ];
            $addData[] = $temp;
        }
        (new  DistributionGoods())->saveAll($addData);
    }
}