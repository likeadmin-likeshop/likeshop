<?php
namespace app\admin\controller;

use app\admin\logic\DistributionOrderGoodsLogic;
use app\common\model\OrderGoods;

class DistributionOrderGoods extends AdminBase
{
    /**
     * @notes 分销订单列表
     * @return \think\response\View
     * @author Tab
     * @date 2021/9/3 14:38
     */
    public function index()
    {
        if($this->request->isPost()) {
            $params = $this->request->post();
            $result = DistributionOrderGoodsLogic::lists($params);
            return $this->_success('', $result);
        }
        return view();
    }

    /**
     * @notes 处理旧数据
     * @author Tab
     * @date 2021/10/16 15:03
     */
    public function processOldData()
    {
        // 查询order_id为0的数据
        $lists = \app\common\model\DistributionOrderGoods::where('order_id', 0)->select()->toArray();
        // 默认分销等级
        $defaultId = \app\common\model\DistributionLevel::where('is_default', 1)->value('id');
        $updateData = [];
        foreach($lists as $item) {
            $temp['id'] = $item['id'];
            $temp['level_id'] = $defaultId;
            $temp['level'] = 1;
            $temp['order_id'] = OrderGoods::where('id', $item['order_goods_id'])->value('order_id');
            $updateData[] = $temp;
        }
        if (count($updateData) > 0) {
            $model = new \app\common\model\DistributionOrderGoods();
            $model->saveAll($updateData);

            return '旧数据处理完成';
        }
        return '无旧数据需要处理';
    }
}