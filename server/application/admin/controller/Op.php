<?php
namespace app\admin\controller;
use app\admin\logic\OpLogic;

class Op extends Admin{
    public function config(){
        if($this->request->isAjax()){
            $post = $this->request->post();
            OpLogic::setConfig($post);
            $this->_success('设置成功',[]);
        }
        $this->assign('config',OpLogic::getConfig(['app_id','secret']));
        return $this->fetch();
    }

}