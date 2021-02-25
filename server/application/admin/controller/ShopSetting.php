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

use app\common\server\ConfigServer;

class ShopSetting extends AdminBase
{

    /**
     * 交易设置
     */
    public function trading()
    {
        $config = [
            'order_contact' => ConfigServer::get('order_message', 'order_contact' ),//订单管理联系人
            'order_contact_mobile' => ConfigServer::get('order_message', 'order_contact_mobile' ),//订单管理联系人手机
            'order_cancel' => ConfigServer::get('trading', 'order_cancel', 30),
            'order_finish' => ConfigServer::get('trading', 'order_finish', 7),
            'refund_days' => ConfigServer::get('after_sale', 'refund_days', 7),
            'deduct_type' => ConfigServer::get('trading', 'deduct_type', 1),//订单库存扣减方式
            'contact' => ConfigServer::get('shop', 'contact' ),//联系人
            'mobile' => ConfigServer::get('shop', 'mobile'),//联系手机号
            'province_id' => ConfigServer::get('shop', 'province_id'),//省份id
            'city_id' => ConfigServer::get('shop', 'city_id'),//市id
            'district_id' => ConfigServer::get('shop', 'district_id'),//区id
            'address' => ConfigServer::get('shop', 'address'),//详细地址
        ];
        $this->assign('config', $config);
        return $this->fetch();
    }

    public function setTrading()
    {
        $post = $this->request->post();
        if ($post) {
            ConfigServer::set('trading', 'order_cancel', $post['order_cancel']);
            ConfigServer::set('trading', 'order_finish', $post['order_finish']);
            ConfigServer::set('after_sale', 'refund_days', $post['refund_days']);
            ConfigServer::set('trading', 'deduct_type', $post['deduct_type']);//订单库存扣减方式
            ConfigServer::set('shop', 'contact', $post['contact']);//店铺联系人
            ConfigServer::set('shop', 'mobile', $post['mobile']);//店铺联系手机号
            ConfigServer::set('shop', 'province_id', $post['province_id']);//店铺省份id
            ConfigServer::set('shop', 'city_id', $post['city_id']);//店铺市id
            ConfigServer::set('shop', 'district_id', $post['district_id']);//店铺地区id
            ConfigServer::set('shop', 'address', $post['address']);//店铺详细地址
            ConfigServer::set('order_message', 'order_contact', $post['order_contact']);//订单管理联系人
            ConfigServer::set('order_message', 'order_contact_mobile', $post['order_contact_mobile']);//订单管理联系人手机
            $this->_success('修改成功');
        }
    }

    /**
     * 售后退款
     */
    public function policy()
    {
        $config = [
            'service' => ConfigServer::get('policy', 'service'),
            'privacy' => ConfigServer::get('policy', 'privacy'),
            'after_sale' => ConfigServer::get('policy', 'after_sale'),

        ];
        $this->assign('config', $config);
        return $this->fetch();
    }

    public function setPolicy()
    {
        $post = $this->request->post();
        if ($post) {
            ConfigServer::set('policy', 'service', $post['service']);
            ConfigServer::set('policy', 'privacy', $post['privacy']);
            ConfigServer::set('policy', 'after_sale', $post['after_sale']);
            $this->_success('修改成功');
        }
    }

    /**
     * Notes: 注册设置
     * @author 段誉(2021/2/25 15:14)
     * @return mixed
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public function setRegister()
    {
        if ($this->request->isAjax()){
            $post = $this->request->post();
            ConfigServer::set('register_setting', 'open', $post['open']);
            $this->_success('操作成功');
        }
        $config = ConfigServer::get('register_setting', 'open', 0);
        $this->assign('config', $config);
        return $this->fetch('register');
    }

}