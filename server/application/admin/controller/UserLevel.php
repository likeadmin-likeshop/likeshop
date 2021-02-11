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
use app\admin\logic\UserLevelLogic;
use app\admin\logic\UserLogic;

class UserLevel extends AdminBase{
   /**
    * note 会员列表
    * create_time 2020/12/15 11:45
    */
    public function lists(){
        $get = $this->request->get();
        if($this->request->isAjax()){
            $lists = UserLevelLogic::lists($get);
            $this->_success('',$lists);
        }
        return $this->fetch();
    }

    /**
     * note 添加会员
     * create_time 2020/12/15 11:45
     */
    public function add(){
        if($this->request->isAjax()){
            $post = $this->request->post();
            $post['del'] = 0;
            $result = $this->validate($post,'app\admin\validate\UserLevel.add');
            if($result === true){
                $result =  UserLevelLogic::add($post);
                if($result){
                    $this->_success('添加成功','');
                }
                $result = '添加失败';
            }
            $this->_error($result);

        }
        $this->assign('privilege_list',UserLevelLogic::getPrivilegeList());
        return $this->fetch();
    }

    /**
     * note 会员编辑
     * create_time 2020/12/15 11:45
     */
    public function edit($id){
        if($this->request->isAjax()){
            $post = $this->request->post();
            $post['del'] = 0;
            $result = $this->validate($post,'app\admin\validate\UserLevel');
            if($result === true){
                $result =  UserLevelLogic::edit($post);
                if($result){
                    $this->_success('添加成功','');
                }
                $result = '添加失败';
            }
            $this->_error($result);

        }
        $detail = UserLevelLogic::getUserLevel($id);
        $this->assign('privilege_list',UserLevelLogic::getPrivilegeList());
        $this->assign('detail',$detail);
        return $this->fetch();
    }

    /**
     * note 会员删除
     * create_time 2020/12/15 11:44
     */
    public function del($id){
        if($this->request->isAjax()){
            $result = $this->validate(['id'=>$id],'app\admin\validate\UserLevel.del');
            if($result === true){
                UserLevelLogic::del($id);
                $this->_success('删除成功','');
            }
            $this->_error('删除失败','');
        }
    }
}