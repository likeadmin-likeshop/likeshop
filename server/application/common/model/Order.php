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

namespace app\common\model;

use think\Db;
use think\Model;

class Order extends Model
{
    protected $name = 'order';

    //订单类型
    const NORMAL_ORDER = 0;//普通订单
    const SECKILL_ORDER = 1;//秒杀订单
    const TEAM_ORDER = 2;//拼团订单
    const BARGAIN_ORDER = 3;//砍价订单

    //订单状态
    const STATUS_WAIT_PAY = 0;       //待付款
    const STATUS_WAIT_DELIVERY = 1;  //待发货
    const STATUS_WAIT_RECEIVE = 2;   //待收货
    const STATUS_FINISH = 3;         //已完成
    const STATUS_CLOSE = 4;          //已关闭

    //配送方式
    const DELIVERY_STATUS_EXPRESS = 1;//快递配送
    const DELIVERY_STATUS_SELF = 2;//上门自提
    const DELIVERY_STATUS_CITY = 3;//同城配送

    //订单状态
    public static function getOrderStatus($status = true)
    {
        $desc = [
            self::STATUS_WAIT_PAY => '待付款',
            self::STATUS_WAIT_DELIVERY => '待发货',
            self::STATUS_WAIT_RECEIVE => '待收货',
            self::STATUS_FINISH => '已完成',
            self::STATUS_CLOSE => '已关闭',
        ];
        if ($status === true) {
            return $desc;
        }
        return $desc[$status] ?? '未知';
    }


    //订单类型
    public static function getOrderType($type)
    {
        $desc = [
            self::NORMAL_ORDER => '普通订单',
            self::SECKILL_ORDER => '秒杀订单',
            self::TEAM_ORDER => '拼团订单',
            self::BARGAIN_ORDER => '砍价订单',
        ];

        if ($type === true){
            return $desc;
        }
        return $desc[$type] ?? '未知';
    }

    //配送方式
    public static function getDeliveryType($type)
    {
        $desc = [
            self::DELIVERY_STATUS_EXPRESS => '快递发货',
            self::DELIVERY_STATUS_SELF => '上门自提',
            self::DELIVERY_STATUS_CITY => '同城配送',
        ];

        if ($type === true){
            return $desc;
        }
        return $desc[$type] ?? '未知';
    }


    //下单时间
    public function getCreateTimeAttr($value, $data)
    {
        return date('Y-m-d H:i:s', $value);
    }

    //付款时间
    public function getPayTimeAttr($value, $data)
    {
        if ($value) {
            return date('Y-m-d H:i:s', $value);
        }
        $value = '未支付';
        return $value;
    }

    // 发货时间
    public function getShippingTimeAttr($value, $data)
    {
        if ($value) {
            return date('Y-m-d H:i:s', $value);
        }
        return $value;
    }

    //收货时间
    public function getTakeTimeAttr($value, $data)
    {
        if ($value) {
            return date('Y-m-d H:i:s', $value);
        }
        return $value;
    }

    //取消时间
    public function getCancelTimeAttr($value, $data)
    {
        if ($value) {
            return date('Y-m-d H:i:s', $value);
        }
        return $value;
    }

    //订单类型
    public function getOrderTypeTextAttr($value, $data)
    {
        return self::getOrderType($data['order_type']);
    }

    //订单状态
    public function getOrderStatusTextAttr($value, $data)
    {
        return self::getOrderStatus($data['order_status']);
    }

    //订单支付方式
    public function getPayWayTextAttr($value, $data)
    {
        return Pay::getPayWay($data['pay_way']);
    }

    //订单支付状态
    public function getPayStatusTextAttr($value, $data)
    {
        return Pay::getPayStatus($data['pay_status']);
    }

    //订单来源
    public function getOrderSourceTextAttr($value, $data)
    {
        return Client_::getClient($data['order_source']);
    }

    //订单商品数量
    public function getGoodsCountAttr($value, $data)
    {
        return count($this->order_goods);
    }


    //订单关联商品
    public function orderGoods()
    {
        return $this->hasMany('order_goods', 'order_id', 'id');
    }

    //订单用户
    public function user()
    {
        return $this->hasOne('user', 'id', 'user_id')
            ->field('id,sn,nickname,avatar,level,mobile,sex,create_time');
    }

    //收货地址
    public function getDeliveryAddressAttr($value, $data)
    {
        $region = Db::name('dev_region')
            ->where('id', 'IN', [$data['province'], $data['city'], $data['district']])
            ->order('level asc')
            ->column('name');

        $region_desc = implode('', $region);
        return $region_desc . $data['address'];
    }
}