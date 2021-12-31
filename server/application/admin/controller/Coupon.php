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
use app\admin\logic\CouponLogic;
class Coupon extends AdminBase{
    /**
     * note 优惠券列表
     * create_time 2020/10/22 10:14
     */
    public function lists(){
        if($this->request->isAjax()){
            $get = $this->request->get();
            $lists = CouponLogic::lists($get);
            $this->_success('',$lists);
        }
        return $this->fetch();
    }
    /**
     * note 添加优惠券
     * create_time 2020/10/22 10:14
     */
    public function add(){
        if($this->request->isAjax()){
            $post = $this->request->post();
            $result = $this->validate($post,'app\admin\validate\Coupon');
            if($result === true){
                $result = CouponLogic::add($post);
                if($result == true){
                    $this->_success('新增成功','');
                }
                $result = '新增失败';
            }
            return $this->_error($result,'');

        }
        return $this->fetch();

    }
    /**
     * note 编辑优惠券
     * create_time 2020/10/22 10:15
     */
    public function edit($id){
        if($this->request->isAjax()){
            $post = $this->request->post();
            $result = $this->validate($post,'app\admin\validate\Coupon');
            if($result === true){
                $result = CouponLogic::edit($post);

                if($result == true){
                    $this->_success('编辑成功','');
                }
                $result = '编辑失败';
            }
            return $this->_error($result,'');

        }
        $detail = CouponLogic::getCoupon($id,true);
        $this->assign('detail',json_encode($detail,JSON_UNESCAPED_UNICODE));
        return $this->fetch();
    }
    /**
     * note 删除优惠券
     * create_time 2020/10/22 10:15
     */
    public function del($id){
        if($this->request->isAjax()){
            $result = CouponLogic::del($id);

            if($result == true){
                $this->_success('删除成功','');
            }
            return $this->_error('删除失败','');
        }
    }
    /**
     * note 优惠券发放记录
     * create_time 2020/10/22 10:18
     */
    public function log($id){
        if($this->request->isAjax()){
            $get = $this->request->get();
            $lists = CouponLogic::log($get);
            $this->_success('',$lists);
        }
        $this->assign('id',$id);
        return $this->fetch();
    }
   /**
    * note 优惠券详情
    * create_time 2020/10/22 10:18
    */
    public function detail($id){
        $detail = CouponLogic::getCoupon($id,true);
        $this->assign('detail',json_encode($detail,JSON_UNESCAPED_UNICODE));
        return $this->fetch();
    }
    /**
     * note 关闭优惠券
     * create_time 2020/10/22 10:19
     */
    public function close($id){
        if($this->request->isAjax()){
            $result = CouponLogic::close($id);
            if($result == true){
                $this->_success('优惠券关闭成功','');
            }
            return $this->_error('优惠券关闭失败，请重新关闭','');

        }

    }
    public function sendCouponList(){
        if($this->request->isAjax()){
            $list = CouponLogic::sendCouponList();
            $this->_success('',$list);
        }
        return $this->fetch();
    }
    public function sendCoupon(){
        if($this->request->isAjax()){
            $post = $this->request->post();
            $result = $this->validate($post,'app\admin\validate\SendCoupon');
            if($result === true){
                CouponLogic::sendCoupon($post);
                return $this->_success('发放成功',[]);
            }
            return $this->_error($result,'');
        }


    }
}