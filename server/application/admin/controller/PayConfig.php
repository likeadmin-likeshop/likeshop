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

use app\admin\logic\PayConfigLogic;
use app\common\server\ConfigServer;
use think\db;

class PayConfig extends AdminBase
{

    public function lists()
    {
        if ($this->request->isAjax()) {
            $get = $this->request->get(); //获取get请求
            $this->_success('', PayConfigLogic::lists($get)); //逻辑层处理渲染数据
        }
        return $this->fetch();
    }

    /**
     * 编辑余额支付
     */
    public function editBalance()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post(); //获取post请求
            PayConfigLogic::editBalancePayConfig($post); //逻辑层处理编辑数据
            $this->_success('修改成功');
        }
        $res = db::name('dev_pay')->where('type', 1)->find();
        $this->assign('info', $res); //逻辑层处理数据,返回已有信息
        return $this->fetch();
    }

    /**
     * 编辑货到付款
     */
    public function editHand()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post(); //获取post请求
            $result = $this->validate($post, 'app\admin\validate\PayConfig.editHand'); //验证信息
            if ($result === true) { //是否验证成功
                $post['pay_use'] = isset($post['pay_use']) && $post['pay_use'] == 'on' ? 1 : 0;
                $post['refund_use'] = isset($post['refund_use']) && $post['refund_use'] == 'on' ? 1 : 0;
                $post['withdraw_use'] = isset($post['withdraw_use']) && $post['withdraw_use'] == 'on' ? 1 : 0;
                PayConfigLogic::editHandPayConfig($post); //逻辑层处理编辑数据
                $this->_success('修改成功');
            }
            $this->_error($result);
        }
        $this->assign('info', ConfigServer::get('pay_hand')); //逻辑层处理数据,返回已有信息
        return $this->fetch();
    }


    /**
     * 编辑公众号
     */
    public function editOfficial()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post(); //获取post请求
            if ($post['apiclient_cert'] == '') {
                $this->_error('apiclient_cert不能为空');
            }
            if ($post['apiclient_key'] == '') {
                $this->_error('apiclient_key不能为空');
            }
            PayConfigLogic::editOfficialPayConfig($post); //逻辑层处理编辑数据
            $this->_success('修改成功');
        }
        $res = db::name('dev_pay')->where('type', 2)->find();
        $domain_name = ConfigServer::get('website', 'domain_name', '');
        $domain_name = $domain_name ? $domain_name : request()->domain();
        $this->assign('domain', $domain_name);
        $this->assign('res', $res); //逻辑层处理数据,返回已有信息
        $this->assign('info', ConfigServer::get('pay_official')); //逻辑层处理数据,返回已有信息
        return $this->fetch();
    }

    /**
     * 编辑小程序
     */
    public function editApplet()
    {

        if ($this->request->isAjax()) {
            $post = $this->request->post(); //获取post请求
            if ($post['apiclient_cert'] == '') {
                $this->_error('apiclient_cert不能为空');
            }
            if ($post['apiclient_key'] == '') {
                $this->_error('apiclient_key不能为空');
            }
            PayConfigLogic::editAppletPayConfig($post); //逻辑层处理编辑数据
            $this->_success('修改成功');
        }
        $res = db::name('dev_pay')->where('type', 3)->find();
        $domain_name = ConfigServer::get('website', 'domain_name', '');
        $domain_name = $domain_name ? $domain_name : request()->domain();
        $this->assign('domain', $domain_name);
        $this->assign('res', $res); //逻辑层处理数据,返回已有信息
        $this->assign('info', ConfigServer::get('pay_applet')); //逻辑层处理数据,返回已有信息
        $this->assign('config', ConfigServer::get('upload', 'image', ''));
        return $this->fetch();
    }

    /**
     * 编辑支付宝
     */
    public function editAlipay()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post(); //获取post请求
            PayConfigLogic::editAlipayPayConfig($post); //逻辑层处理编辑数据
            $this->_success('修改成功');
        }
        $res = db::name('dev_pay')->where('type', 4)->find();
        $this->assign('res', $res); //逻辑层处理数据,返回已有信息
        $this->assign('info', ConfigServer::get('pay_alipay')); //逻辑层处理数据,返回已有信息
        return $this->fetch();
    }

    /**
     * 编辑App
     */
    public function editApp()
    {
        if ($this->request->isAjax()) {
            $post = $this->request->post(); //获取post请求
            if ($post['apiclient_cert'] == '') {
                $this->_error('apiclient_cert不能为空');
            }
            if ($post['apiclient_key'] == '') {
                $this->_error('apiclient_key不能为空');
            }
            PayConfigLogic::editApp($post); //逻辑层处理编辑数据
            $this->_success('修改成功');
        }
        $res = db::name('dev_pay')->where('type', 5)->find();
        $domain_name = ConfigServer::get('website', 'domain_name', '');
        $domain_name = $domain_name ? $domain_name : request()->domain();
        $this->assign('domain', $domain_name);
        $this->assign('res', $res); //逻辑层处理数据,返回已有信息
        $this->assign('info', ConfigServer::get('pay_app')); //逻辑层处理数据,返回已有信息
        $this->assign('config', ConfigServer::get('upload', 'image', ''));
        return $this->fetch();
    }


}