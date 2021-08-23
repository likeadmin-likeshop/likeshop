<?php

namespace app\admin\controller;

use app\admin\logic\StatisticsLogic;

class Statistics extends AdminBase
{
    /**
     * 会员统计
     */
    public function member()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $this->_success('', StatisticsLogic::member($post));
        }
        $this->assign('res', StatisticsLogic::member(['days' => 'today']));
        return $this->fetch();
    }

    /**
     * 商品统计
     */
    public function goods()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $this->_success('', StatisticsLogic::goods($post));
        }
        $this->assign('res', StatisticsLogic::goods(['days' => 'today']));
        return $this->fetch();
    }

    /**
     * 访问
     */
    public function visit()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $this->_success('', StatisticsLogic::visit($post));
        }
        $this->assign('res', StatisticsLogic::visit(['days' => 'today']));
        return $this->fetch();
    }

    /**
     * 交易
     */
    public function deal()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $this->_success('', StatisticsLogic::deal($post));
        }
        $this->assign('res', StatisticsLogic::deal(['days' => 'today']));
        return $this->fetch();
    }
}