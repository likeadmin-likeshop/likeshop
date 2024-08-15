<?php
namespace app\admin\controller;

use app\admin\logic\DistributionLevelLogic;
use app\admin\validate\DistributionLevelValidate;
use think\Validate;

class DistributionLevel extends AdminBase
{
    /**
     * @notes 分销等级列表
     * @return \think\response\View
     * @author Tab
     */
    public function index()
    {
        if ($this->request->isPost()) {
            $result = DistributionLevelLogic::index();
            return $this->_success('', $result);
        }
        return view();
    }

    /**
     * @notes 添加分销等级
     * @return \think\response\View
     * @author Tab
     */
    public function add()
    {
        if ($this->request->isPost()) {
            $params = $this->request->post();
            $validate = new DistributionLevelValidate();
            if (!$validate->scene('add')->check($params)) {
                return $this->_error($validate->getError());
            }

            $result = DistributionLevelLogic::add($params);
            if($result) {
                return $this->_success('添加成功');
            }
            return $this->_error(DistributionLevelLogic::getError());
        }
        // 显示添加页面
        return view();
    }

    /**
     * @notes 编辑分销等级
     * @return \think\response\View
     * @author Tab
     */
    public function edit()
    {
        if ($this->request->isPost()) {
            $params = $this->request->post();
            $validate = new DistributionLevelValidate();
            if (!$validate->scene('edit')->check($params)) {
                return $this->_error($validate->getError());
            }
            $result = DistributionLevelLogic::edit($params);
            if($result) {
                return $this->_success('编辑成功');
            }
            return $this->_error(DistributionLevelLogic::getError());
        }

        $params = $this->request->get();
        $detail = DistributionLevelLogic::detail($params);
        $template = $detail['is_default'] ? 'edit_default' : 'edit';
        return view($template, ['detail' => $detail]);
    }

    /**
     * @notes 删除分销等级
     * @return \think\response\Json
     * @author Tab
     */
    public function delete()
    {
        $params = $this->request->post();
        $result = DistributionLevelLogic::delete($params);
        if($result) {
            return $this->_success('删除成功');
        }
        return $this->_error(DistributionLevelLogic::getError());
    }
}