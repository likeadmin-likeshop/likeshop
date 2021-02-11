<?php
// +----------------------------------------------------------------------
// | LikeShop100%开源免费商用电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | Gitee下载：https://gitee.com/likemarket/likeshopv2
// | 访问官网：https://www.likemarket.net
// | 访问社区：https://home.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 微信公众号：好象科技
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------

// | Author: LikeShopTeam
// +----------------------------------------------------------------------
namespace app\admin\controller;
use app\admin\logic\UserPrivilegeLogic;
class UserPrivilege extends AdminBase{
    /**
     * note 权益列表
     * create_time 2020/12/2 11:04
     */
    public function lists(){
        if($this->request->isAjax()){
            $get = $this->request->get();
            $list = UserPrivilegeLogic::lists($get);
            $this->_success('',$list);
        }
        return $this->fetch();
    }


    /**
     * note 添加权益
     * create_time 2020/12/2 11:04
     */
    public function add(){
        if($this->request->isAjax()){
            $post = $this->request->post();
            $result = $this->validate($post,'app\admin\validate\UserPrivilege.add');
            if($result === true){
                UserPrivilegeLogic::add($post);
                $this->_success('添加成功',[]);
            }
            $this->_error($result,[]);
        }
        return $this->fetch();
    }

    /**
     * note 编辑权益
     * create_time 2020/12/2 11:40
     */
    public function edit($id){
        if($this->request->isAjax()){
            $post = $this->request->post();
            $result = $this->validate($post,'app\admin\validate\UserPrivilege.edit');
            if($result === true){
                UserPrivilegeLogic::edit($post);
                $this->_success('添加成功',[]);
            }
            $this->_error($result,[]);
        }

        $this->assign('detail',UserPrivilegeLogic::getPrivilege($id));
        return $this->fetch();

    }

    /**
     * note 删除权益
     * create_time 2020/12/2 11:40
     */
    public function del($id){
        if($this->request->isAjax()){
            $result = $this->validate(['id'=>$id],'app\admin\validate\UserPrivilege.del');
            if($result === true){
                UserPrivilegeLogic::del($id);
                $this->_success('删除成功','');
            }
            $this->_error($result,'');
        }
    }
}