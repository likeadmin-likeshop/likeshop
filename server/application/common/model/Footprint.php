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