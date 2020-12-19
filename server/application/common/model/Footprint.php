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
// | Author: LikeShopTeam-张无忌
// +----------------------------------------------------------------------
namespace app\common\model;


use think\Model;

class Footprint extends Model
{
    const enter_mall = 1;
    const browse_goods = 2;
    const add_cart = 3;
    const receive_coupon = 4;
    const place_order = 5;

    public static function getText($value)
    {
        $name  = '';
        switch ($value) {
            case self::enter_mall:
                $name = '访问商城';
                break;
            case self::browse_goods:
                $name = '浏览商品';
                break;
            case self::add_cart:
                $name = '加入购物车';
                break;
            case self::receive_coupon:
                $name = '领取优惠券';
                break;
            case self::place_order:
                $name = '下单结算';
                break;
        }
        return $name;
    }
}