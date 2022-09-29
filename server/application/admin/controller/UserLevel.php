<?php
// +----------------------------------------------------------------------
// | likeshop开源商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop系列产品在gitee、github等公开渠道开源版本可免费商用，未经许可不能去除前后端官方版权标识
// |  likeshop系列产品收费版本务必购买商业授权，购买去版权授权后，方可去除前后端官方版权标识
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | likeshop团队版权所有并拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshop.cn.team
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