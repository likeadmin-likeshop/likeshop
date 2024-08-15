<?php
namespace app\admin\controller;

use app\admin\logic\DistributionCenterLogic;
use app\common\model\Distribution;

class DistributionCenter extends AdminBase
{
    /**
     * @notes 数据概览
     * @return \think\response\Json
     * @author Tab
     */
    public function center()
    {
        $data = DistributionCenterLogic::center();
        return view('', ['data' => $data]);
    }

    /**
     * @notes 分销初始化数据
     * @return \think\response\Json
     * @author Tab
     */
    public function updateTable()
    {
        try {
            $defaultLevel = \app\common\model\DistributionLevel::where('is_default', 1)->findOrEmpty()->toArray();
            if (empty($defaultLevel)) {
                // 没有默认等级，初始化
                \app\common\model\DistributionLevel::create([
                    'name' => '默认等级',
                    'weights' => '1',
                    'is_default' => '1',
                    'remark' => '默认等级',
                    'update_relation' => '1'
                ]);
            }
            // 默认分销会员等级
            $defaultLevelId = \app\common\model\DistributionLevel::where('is_default', 1)->value('id');
            // 生成分销基础信息表
            $users = \app\common\model\User::field('id,is_distribution')
                ->where(['del' => 0])
                ->select()
                ->toArray();
            $distribution = Distribution::column('user_id');
            $addData = [];
            foreach($users as $item) {
                if (in_array($item['id'], $distribution)) {
                    // 已有基础分销记录，跳过
                    continue;
                }
                $data = [
                    'user_id' => $item['id'],
                    'level_id' => $defaultLevelId,
                    'is_distribution' => $item['is_distribution'],
                    'is_freeze' => 0,
                    'remark' => '',
                ];
                $addData[] = $data;
            }
            $distributionModel = new Distribution();
            $distributionModel->saveAll($addData);

            return '初始化数据完成';
        } catch(\Exception $e) {
            return $e->getMessage();
        }
    }
}