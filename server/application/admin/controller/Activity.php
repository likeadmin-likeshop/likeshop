<?php
// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshopTeam
// +----------------------------------------------------------------------
namespace app\admin\controller;
use app\admin\logic\ActivityAreaLogic;
class Activity extends AdminBase{
    public function lists(){
        $this->assign('activity_list',ActivityAreaLogic::getActivityList());
        return $this->fetch();
    }
    /**
     * note 活动专区列表
     * create_time 2020/11/25 10:36
     */
    public function areaLists(){
        if($this->request->isAjax()){
            $list = ActivityAreaLogic::areaLists();
            $this->_success('',$list);
        }
    }

    /**
     * note 活动商品列表
     * create_time 2020/11/25 10:36
     */
    public function goodsLists(){
        if($this->request->isAjax()){
            $get = $this->request->get();
            $list = ActivityAreaLogic::goodsLists($get);
            $this->_success('',$list);
        }
    }

    /**
     * note 添加活动专区
     * create_time 2020/11/25 10:37
     */
    public function addActivity(){
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $result = $this->validate($post,'app\admin\validate\ActivityArea.add');
            if($result === true){
                ActivityAreaLogic::addActivity($post);
                $this->_success('新增成功',[]);
            }
            $this->_error($result);
        }
        return $this->fetch();
    }

    /**
     * note 编辑活动专区
     * create_time 2020/11/25 10:37
     */
    public function editActivity($id){
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $post['del'] = 0;
            $result = $this->validate($post,'app\admin\validate\ActivityArea');
            if($result === true){
                ActivityAreaLogic::editActivity($post);
                $this->_success('新增成功',[]);
            }
            $this->_error($result);
        }
        $this->assign('info',ActivityAreaLogic::getActivity($id));
        return $this->fetch();
    }

    /**
     * note 删除活动专区
     * create_time 2020/11/25 10:37
     */
    public function delActivity(){
        $id = $this->request->post('id');
        ActivityAreaLogic::delActivity($id);
        $this->_success('删除成功',[]);

    }

    /**
     * note 添加活动商品
     * create_time 2020/11/25 10:37
     */
    public function addGoods(){
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $post['goods_list'] = form_to_linear($post);
            $result = $this->validate($post,'app\admin\validate\ActivityGoods.add');
            if($result === true){
                ActivityAreaLogic::addGoods($post);
                $this->_success('新增成功',[]);
            }
            $this->_error($result);
        }
        $this->assign('activity_list',ActivityAreaLogic::getActivityList());
        return $this->fetch();
    }

    /**
     * note 编辑活动商品
     * create_time 2020/11/25 10:37
     */
    public function editGoods(){
        if ($this->request->isAjax()) {
            $post = $this->request->post();
            $post['del'] = 0;
            $result = $this->validate($post,'app\admin\validate\ActivityGoods');

            if($result === true){
                ActivityAreaLogic::editGoods($post);
                $this->_success('新增成功',[]);
            }
            $this->_error($result);
        }
        $goods_id = $this->request->get('goods_id');
        $activity_id = $this->request->get('activity_id');
        $this->assign('activity_list',ActivityAreaLogic::getActivityList());
        $this->assign('info',ActivityAreaLogic::getActivityGoods($goods_id,$activity_id));
        return $this->fetch();
    }

    /**
     * note 删除活动商品
     * create_time 2020/11/25 10:38
     */
    public function delGoods(){
        $goods_id = $this->request->post('goods_id');
        $activity_id = $this->request->post('activity_id');
        $result = ActivityAreaLogic::delGoods($goods_id,$activity_id);
        if($result == true){
            $this->_success('删除成功','');
        }
        return $this->_error('删除失败','');
    }

}