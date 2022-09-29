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

namespace app\api\model;

use think\Db;
use think\Model;

class Coupon extends Model
{
    public function couponGoods()
    {
        return $this->hasMany('couponGoods', 'coupon_id', 'id');
    }


    //通过(coupon_list)获取优惠券信息
    public static function getCouponByClId($coupon_id)
    {
        $result = Db::name('coupon c')
            ->join('coupon_list cl', 'c.id = cl.coupon_id')
            ->where(['cl.id ' => $coupon_id, 'c.del' => 0, 'cl.del' => 0, 'cl.status' => 0])
            ->field('c.*')
            ->find();

        return $result;
    }
}