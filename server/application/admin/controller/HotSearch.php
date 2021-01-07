<?php


namespace app\admin\controller;


use app\admin\logic\HotSearchLogic;
use app\common\server\ConfigServer;

class HotSearch extends AdminBase
{

    public function index() {

        $info = HotSearchLogic::info();
        $this->assign('info',$info);
        return $this->fetch();
    }

    public function set(){
        $post = $this->request->post();

        $result = HotSearchLogic::set($post);
        if($result == true){
            $this->_success('操作成功');
        }
        $this->_error('操作失败');
    }
}