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