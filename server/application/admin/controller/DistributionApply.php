<?php
namespace app\admin\controller;

use app\admin\logic\DistributionApplyLogic;
use think\facade\View;

class DistributionApply extends AdminBase
{
    public function lists()
    {
        if ($this->request->isAjax()) {
            $get = $this->request->get();
            $lists = DistributionApplyLogic::lists($get);
            return $this->_success('获取成功', $lists);
        }

        return view();
    }

    public function detail()
    {
        $id = $this->request->get('id');
        View::assign('detail', DistributionApplyLogic::detail($id));
        return view();
    }

    public function audit()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $res = DistributionApplyLogic::audit($post);
            if ($res === false) {
                return $this->_error(DistributionApplyLogic::getError());
            }
            return $this->_success('操作成功');
        }

        return view();
    }
}