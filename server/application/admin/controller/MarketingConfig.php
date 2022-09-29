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
use app\admin\logic\MarketingConfigLogic;

class MarketingConfig extends AdminBase{
    /**
     * note 邀请奖励
     * create_time 2020/12/2 16:18
     */
    public function invitedAwardConfig(){
        if($this->request->isAjax()){
            $post = $this->request->post();
            MarketingConfigLogic::setConfig($post);
            return $this->_success('设置成功',[]);
        }
        $this->assign('config',MarketingConfigLogic::getConfig(['invited_award_integral']));
        return $this->fetch();

    }

    /**
     * note 下单奖励
     * create_time 2020/12/2 16:19
     */
    public function orderAwardConfig(){
        if($this->request->isAjax()){
            $post = $this->request->post();
            MarketingConfigLogic::setConfig($post);
            return $this->_success('设置成功',[]);
        }
        $this->assign('config',MarketingConfigLogic::getConfig(['order_award_integral']));
        return $this->fetch();
    }

    /**
     * note 会员注册
     * create_time 2020/12/2 16:22
     */
    public function registerAwardConfig(){
        if($this->request->isAjax()){
            $post = $this->request->post();
            MarketingConfigLogic::setConfig($post);
            return $this->_success('设置成功',[]);
        }
        $config = [
            'register_award_integral_status',
            'register_award_integral',
            'register_award_coupon_status',
            'register_award_coupon',
        ];
        $this->assign('config',MarketingConfigLogic::getConfig($config));
        $this->assign('coupon_list',MarketingConfigLogic::getCouponList());
        return $this->fetch();
    }


    /**
     * Notes: 积分抵扣
     * @author 段誉(2021/3/30 17:43)
     * @return mixed
     */
    public function integralDeduction()
    {
        if($this->request->isAjax()){
            $post = $this->request->post();
            MarketingConfigLogic::setConfig($post);
            $this->_success('设置成功',[]);
        }
        $config = [
            'integral_deduction_status',//积分抵扣状态
            'integral_deduction_money',//积分抵扣比例
            'integral_deduction_limit',//积分使用需超过多少才可使用
        ];
        $this->assign('config',MarketingConfigLogic::getConfig($config));
        return $this->fetch();
    }
}