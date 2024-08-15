<?php
namespace app\admin\controller;

use app\admin\logic\DistributionLevelLogic;
use app\admin\logic\DistributionMemberLogic;

/**
 * 分销会员
 * Class DistributionMember
 * @package app\admin\controller\distribution
 */
class DistributionMember extends AdminBase
{
    /**
     * @notes 分销会员列表
     * @return \think\response\View
     * @author Tab
     */
    public function index()
    {
        if ($this->request->isPost()) {
            $params = $this->request->post();
            $result = DistributionMemberLogic::lists($params);
            return $this->_success('', $result);
        }
        $levels = DistributionLevelLogic::getLevels();
        return view('', ['levels' => $levels]);
    }

    /**
     * @notes 开通分销会员
     * @return \think\response\View
     * @author Tab
     */
    public function open()
    {
        if($this->request->isPost()) {
            $params = $this->request->post();
            $result = DistributionMemberLogic::open($params);
            if($result) {
                return $this->_success('开通成功');
            }
            return $this->_error(DistributionMemberLogic::getError());
        }
        $levels = DistributionLevelLogic::getLevels();
        return view('', ['levels' => $levels]);
    }

    /**
     * @notes 用户列表
     * @return \think\response\Json|\think\response\View
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     * @author Tab
     */
    public function userLists()
    {
        if ($this->request->isPost()) {
            $params = $this->request->post();
            $lists = DistributionMemberLogic::getUserLists($params);
            return $this->_success('', $lists);
        }
        return view();
    }

    /**
     * @notes 分销会员等级调整
     * @return \think\response\Json|\think\response\View
     * @author Tab
     */
    public function adjust()
    {
        if($this->request->isPost()) {
            $params = $this->request->post();
            $result = DistributionMemberLogic::adjust($params);
            if($result) {
                return $this->_success('调整成功');
            }
            return $this->_error(DistributionMemberLogic::getError());
        }
        $params = $this->request->get();
        $user = DistributionMemberLogic::getUser($params);
        $levels = DistributionLevelLogic::getLevels();
        return view('', [
            'user' => $user,
            'levels' => $levels
        ]);
    }

    /**
     * @notes 冻结资格/恢复资格
     * @return \think\response\Json
     * @author Tab
     */
    public function isFreeze()
    {
        $params = $this->request->post();
        $result = DistributionMemberLogic::isFreeze($params);
        if($result) {
            return $this->_success('操作成功');
        }
        return $this->_error(DistributionMemberLogic::getError());
    }
}