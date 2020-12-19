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


namespace app\common\model;


class Pay
{
    const UNPAID = 0;//待支付
    const ISPAID = 1;//已支付
    const REFUNDED = 2;//已退款
    const REFUSED_REFUND = 3;//拒绝退款

    //支付方式
    const WECHAT_PAY = 1;//微信支付
    const ALI_PAY = 2;//支付宝支付
    const BALANCE_PAY = 3;//余额支付
    const OFFLINE_PAY = 4;//线下支付


    //支付状态
    public static function getPayStatus($type)
    {
        $data = [
            self::UNPAID => '待支付',
            self::ISPAID => '已支付',
            self::REFUNDED => '已退款',
            self::REFUSED_REFUND => '拒绝退款',
        ];

        if ($type === true) {
            return $data;
        }
        return $data[$type] ?? '未知';
    }


    //支付方式
    public static function getPayWay($type)
    {
        $data = [
            self::WECHAT_PAY => '微信支付',
            self::ALI_PAY => '支付宝支付',
            self::BALANCE_PAY => '余额支付',
            self::OFFLINE_PAY => '线下支付',
        ];

        if ($type === true) {
            return $data;
        }
        return $data[$type] ?? '其他';
    }
}