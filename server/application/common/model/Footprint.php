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