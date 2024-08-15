<?php
namespace app\admin\controller;

use app\admin\controller\AdminBase;
use app\admin\logic\DistributionGoodsLogic;

class DistributionGoods extends AdminBase
{
    /**
     * @notes 分销商品列表页
     * @return \think\response\View
     * @author Tab
     */
    public function index()
    {
        if ($this->request->isPost()) {
            $params = $this->request->post();
            $lists = DistributionGoodsLogic::lists($params);
            return $this->_success('', $lists);
        }

        return view();
    }

    /**
     * @notes 设置佣金
     * @return \think\response\View
     * @author Tab
     */
    public function set()
    {
        if ($this->request->isPost()) {
            $params = $this->request->post();
            $result = DistributionGoodsLogic::set($params);
            if ($result) {
                return $this->_success('设置成功');
            }
            return $this->_error(DistributionGoodsLogic::getError());
        }
        $params = $this->request->get();
        $detail = DistributionGoodsLogic::detail($params);
        return view('', ['detail' => $detail]);
    }

    /**
     * @notes 参与分销/取消分销
     * @return \think\response\Json
     * @author Tab
     */
    public function isDistribution()
    {
        $params = $this->request->post();
        $result = DistributionGoodsLogic::isDistribution($params);
        if ($result) {
            return $this->_success('操作成功');
        }
        return $this->_error(DistributionGoodsLogic::getError());
    }
}