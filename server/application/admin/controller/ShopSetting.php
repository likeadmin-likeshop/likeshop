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
            $this->success('修改成功');
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
            $this->success('修改成功');
        }
    }

    /**
     * 会员提现设置
     */
    public function withdraw()
    {
        $config = [
            'min_withdraw' => ConfigServer::get('withdraw', 'min_withdraw'),
            'max_withdraw' => ConfigServer::get('withdraw', 'max_withdraw'),
            'poundage' => ConfigServer::get('withdraw', 'poundage'),
        ];
        $this->assign('config', $config);
        return $this->fetch();
    }


    public function setWithdraw()
    {
        $post = $this->request->post();
        if ($post) {
            ConfigServer::set('withdraw', 'min_withdraw', $post['min_withdraw']);//最低提现
            ConfigServer::set('withdraw', 'max_withdraw', $post['max_withdraw']);//最高提现
            ConfigServer::set('withdraw', 'poundage', $post['poundage']);//提现手续费
            $this->success('操作成功');
        }
    }
}