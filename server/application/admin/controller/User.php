<?php
// +----------------------------------------------------------------------
// | LikeShop有特色的全开源社交分销电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 商业用途务必购买系统授权，以免引起不必要的法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | 微信公众号：好象科技
// | 访问官网：http://www.likemarket.net
// | 访问社区：http://bbs.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam
// +----------------------------------------------------------------------

namespace app\admin\controller;


use app\admin\logic\UserLogic;

class User extends AdminBase
{
    /**
     * 会员列表
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function lists(){
        if ($this->request->isAjax()) {
            $get = $this->request->get();
            $this->success('', UserLogic::lists($get));

        }
        $this->assign('level_list',UserLogic::getLevelList());
        $this->assign('group_list',UserLogic::getGroupList());
        return $this->fetch();
    }
    /*
     * 设置分组
     */
    public function setGroup(){
        if($this->request->isAjax()){
            $post = $this->request->post();
            UserLogic::setGroup($post);
            $this->success('设置成功','');
        }
        $this->assign('group_list',UserLogic::getGroupList());
        return $this->fetch();
    }


    /**
     * 账户调整
     * @param $id
     * @return mixed
     */
    public function adjustAccount($id){
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $result = $this->validate($post,'app\admin\validate\AdjustAccount');
            if($result === true){
                $result = UserLogic::adjustAccount($post); //逻辑层处理信息
                if($result){
                    $this->success('操作成功',$result);
                }
                $result = '操作失败';
            }
            $this->error($result);

        }
        $this->assign('info',UserLogic::getUser($id));
        return $this->fetch();
    }

    /*
     * 等级调整
     */
    public function adjustLevel($id){
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $result = $this->validate($post,'app\admin\validate\AdjustUserLevel');
            if($result === true){
                $result = UserLogic::adjustLevel($post); //逻辑层处理信息
                if($result){
                    $this->success('操作成功',$result);
                }
                $result = '操作失败';
            }
            $this->error($result);
        }
        $this->assign('info',UserLogic::getUser($id));
        $this->assign('user_level',UserLogic::getLevelList());
        return $this->fetch();

    }
    /*
     * 会员编辑
     */
    public function edit($id){
        if($this->request->isAjax()){
            $post = $this->request->post();
            $result = $this->validate($post,'app\admin\validate\User');
            if($result === true){
                UserLogic::edit($post);
                $this->success('保存成功');
            }
            return $this->error('保存失败');
        }
        $detail = UserLogic::getUser($id,true);
        $this->assign('info',$detail);
        return $this->fetch();
    }
    /*
     * 会员详情
     */
    public function info($id){
        $detail = UserLogic::getUser($id,false,true);
        $this->assign('detail',$detail);

        return $this->fetch();
    }

    public function getList(){
        $post = $this->request->get('');
        $list = UserLogic::getList($post);
        $this->success('',$list);
    }
    public function sendCouponList(){
        if($this->request->isAjax()){
            $list = UserLogic::sendCouponList();
            $this->success('',$list);
        }
        return $this->fetch();
    }
}
