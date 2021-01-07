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

namespace app\api\model;

use think\Model;

class AfterSale extends Model
{
    public function orderGoods()
    {
        return $this->hasOne('order_goods','id','order_goods_id')
            ->field('id,goods_id,item_id,total_pay_price,goods_num,goods_price');
    }

    public function shop()
    {
        return $this->hasOne('shop', 'id', 'shop_id')
            ->field('id,name,r_contact,r_tel,r_province_id,r_city_id,r_district_id,r_address');
    }
}