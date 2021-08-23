<?php

namespace app\admin\controller;


use app\common\server\ConfigServer;

/**
 * 拼团设置
 * Class TeamSet
 * @package app\admin\controller
 */
class TeamSet extends AdminBase
{
    public function index()
    {
        $automatic = ConfigServer::get('team', 'automatic', 0);
        $this->assign('automatic', $automatic);
        return $this->fetch('team_set/index');
    }

    public function set()
    {
        if ($this->request->isAjax()) {
            $automatic = $this->request->post('automatic', 0, 'intval');
            ConfigServer::set('team', 'automatic', $automatic);
            $this->_success('设置成功');
        }
    }
}