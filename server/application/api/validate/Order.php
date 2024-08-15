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

namespace app\api\validate;
use app\api\logic\SeckillLogic;
use app\common\model\Goods;
use app\common\model\GoodsItem;
use app\common\model\Order as CommonOrder;
use app\common\model\OrderGoods;
use app\common\model\SelffetchShop;
use app\common\model\SelffetchVerifier;
use app\common\model\Team;
use app\common\server\ConfigServer;
use think\Db;
use think\Validate;
use app\common\model\AfterSale as CommonAfterSale;

class Order extends Validate
{
    protected $rule = [
        'goods' => 'require|array|checkGoods',
        'action' => 'require',
        'coupon_id' =>'checkCoupon',
        'delivery_type' => 'require|in:'.CommonOrder::DELIVERY_STATUS_EXPRESS.','.CommonOrder::DELIVERY_STATUS_SELF,
//        'selffetch_shop_id' => 'requireIf:delivery_type,'.CommonOrder::DELIVERY_STATUS_SELF,
//        'consignee' => 'requireIf:delivery_type,'.CommonOrder::DELIVERY_STATUS_SELF,
//        'mobile' => 'requireCallback:check_require|mobile',
        'pickup_code' => 'require|checkPickupCode',
    ];

    protected $message = [
        'goods.require' => '参数错误',
        'action.require' => '参数缺失',
        'delivery_type.require' => '配送方式不能为空',
//        'selffetch_shop_id.requireIf' => '自提门店不能为空',
//        'consignee.requireIf' => '取货人不能为空',
//        'mobile.requireCallback' => '联系电话不能为空',
//        'mobile.mobile' => '联系电话格式不正确',
        'pickup_code.require' => '提货码不能为空',
    ];

    protected function sceneBuy()
    {
        $this->only(['action', 'goods', 'coupon_id', 'delivery_type']);
    }

    protected function sceneVerification()
    {
        $this->only(['pickup_code']);
    }


    protected function checkGoods($value, $rule, $data)
    {

        foreach ($value as $item){
            if (!$item['item_id'] || !$item['num']){
                return '参数缺失';
            }
        }

        return true;
    }

    //验证优惠券
    protected function checkCoupon($value,$rule,$data){
        if($value){
            $coupon = Db::name('coupon c')
                    ->join('coupon_list cl','c.id = cl.coupon_id')
                    ->where(['cl.id '=>$value, 'c.del'=>0,'cl.del'=>0,'cl.status'=>0])
                    ->field('c.*,cl.create_time as get_coupon_time')
                    ->find();
            if(empty($coupon)){
                return '优惠券不存在';
            }
            $tips = true;

            $now = time();
            if($coupon['use_time_type'] == 1){
                if($coupon['use_time_start'] > $now || $coupon['use_time_end'] < $now){
                    $tips = '优惠券不在使用时间范围内';
                }
            }else{//领券当天X天可用
                $coupon['use_time'] = $coupon['get_coupon_time']+86400*$coupon['use_time'];
                if($coupon['use_time_type'] == 3){  //领券次日起X天可用
                    $coupon['use_time'] = $coupon['create_time'] + 86400*$coupon['use_time']+86400;
                }
                if($coupon['use_time'] - $now < 0){
                    $tips = '优惠券不在使用时间范围内';
                }
            }

            $item_ids = array_column($data['goods'], 'item_id');
            $item_num = array_column($data['goods'], 'num', 'item_id');
            $goods_price_array = Db::name('goods_item')->alias('gi')
                ->join('goods g', 'gi.goods_id = g.id')
                ->where(['gi.id' => $item_ids])
                ->column('gi.*,g.is_member', 'gi.id');

            //会员折扣价格
            $user_id = $data['user_id'] ?? 0;
            $level_discount = Db::name('user u')
                ->join('user_level l', 'u.level = l.id')
                ->where('u.id', $user_id)
                ->value('discount');

            $seckill_list = SeckillLogic::getSeckillGoods();
            $seckill_goods = $seckill_list['seckill_goods'];

            //会员折扣价(优先级最高且不和其他活动重叠) > 活动价格
            foreach ($goods_price_array as $key => $item){

                if ($item['is_member'] == 1 && $level_discount > 0) {
                    $goods_price_array[$key]['price'] = round($item['price'] * $level_discount / 10, 2);
                    continue;
                }

                if(isset($seckill_goods[$item['id']])){
                    $goods_price_array[$key]['price'] = $seckill_goods[$item['id']]['price'];
                    continue;
                }
            }

            //所有的商品id
            $goods_ids = array_column($goods_price_array, 'goods_id');
            //优惠券商品
            $coupon_goods = Db::name('coupon_goods')->where(['coupon_id' => $coupon['id']])->column('goods_id');
            //与当前优惠券关联的商品id
            $intersect_goods = array_intersect($goods_ids, $coupon_goods);

            //全部商品可用、满足金额可用
            if($coupon['use_goods_type'] == 1 && $coupon['condition_type'] == 2){
                $total_price = 0;
                foreach ($data['goods'] as $goods_item){
                    $price =  isset($goods_price_array[$goods_item['item_id']]) ? $goods_price_array[$goods_item['item_id']]['price'] : 0;
                    $total_price += $price * $goods_item['num'];
                }
                //结算商品未满足金额
                if($total_price < $coupon['condition_money']){
                    $tips = '所结算的商品中未满足使用的金额';
                }
            }
            //指定商品可用
            if($coupon['use_goods_type'] == 2) {
                //未包含指定商品
                if(empty($intersect_goods)){
                    $tips = '所结算的商品中未包含指定商品';
                }
                if($intersect_goods && $coupon['condition_type'] == 2){
                    $total_price = 0;
                    foreach ($intersect_goods as $goods_item){
                        foreach ($goods_price_array as $price_item){
                            if($price_item['goods_id'] == $goods_item){
                                $num =  $item_num[$price_item['id']] ?? 0;
                                $total_price += $price_item['price'] * $num;
                            }
                        }
                    }
                    //结算商品未满足金额
                    if($total_price < $coupon['condition_money']){
                        $tips = '所结算的商品中未满足使用的金额';
                    }
                }
            }
            //指定商品不可用
            if($coupon['use_goods_type'] == 3) {
                //包含不可用商品
                if($intersect_goods){
                    $tips = '所结算的商品中包含指定不可用商品';
                }
                //满足金额可用
                if(empty($intersect_goods) && $coupon['condition_type'] == 2){
                    $diff_goods = array_diff($goods_ids,$coupon_goods);
                    $total_price = 0;
                    foreach ($diff_goods as $goods_item){
                        foreach ($goods_price_array as $price_item){
                            if($price_item['goods_id'] == $goods_item){
                                $num =  $item_num[$price_item['id']] ?? 0;
                                $total_price += $price_item['price'] * $num;
                            }
                        }
                    }
                    //结算商品未满足金额
                    if($total_price < $coupon['condition_money']){
                        $tips = '所结算的商品中未满足使用的金额';

                    }
                }
            }


            return $tips;
        }

    }


    function check_require($value, $data){
        if($data['delivery_type'] == CommonOrder::DELIVERY_STATUS_SELF){
            return true;
        }
    }


    public function checkPickupCode($value,$rule,$data)
    {
        $result = CommonOrder::where(['pickup_code'=>$value])->find();
        if (empty($result)) {
            return '提货码不正确或订单不存在';
        }
        if ($result['order_status'] != CommonOrder::STATUS_WAIT_DELIVERY) {
            return '订单不允许核销';
        }
        if ($result['delivery_type'] != CommonOrder::DELIVERY_STATUS_SELF) {
            return '不是自提订单，不允许核销';
        }
        if ($result['verification_status'] == CommonOrder::WRITTEN_OFF) {
            return '订单已核销';
        }
        $verifier = SelffetchVerifier::where(['selffetch_shop_id'=>$result['selffetch_shop_id'],'user_id'=>$data['user_id'],'status'=>1,'del'=>0])->find();
        if (empty($verifier)) {
            return '非门店核销员，无法核销订单';
        }
        if ($result['order_type'] == CommonOrder::TEAM_ORDER){
            $found = Db::name('team_found')->where(['id' => $result['team_found_id']])->find();
            if ($found['status'] != Team::STATUS_SUCCESS){
                return '拼团成功后才能核销';
            }
        }
        
        return true;
    }


    //验证订单商品是否支持对应的配送方式
    public function checkDeliveryType($value,$rule,$data)
    {
        $is_express = ConfigServer::get('delivery_type', 'is_express');
        $is_express = ($is_express === null) ? 1 : $is_express;
        $is_selffetch = ConfigServer::get('delivery_type', 'is_selffetch');
        $is_selffetch = ($is_selffetch === null) ? 0 : $is_selffetch;
        $tips = true;
        //门店自提
        if ($value == CommonOrder::DELIVERY_STATUS_SELF) {
            if ($is_selffetch == 0) {
                $tips = '暂未开启门店自提配送方式';
            }else {
                $item_ids = implode(',',array_column($data['goods'],'item_id'));
                $goods_ids = implode(',',GoodsItem::where('id','in', $item_ids)->column('goods_id'));
                $goods = Goods::where('id','in', $goods_ids)->select();
                $goods_name = [];
                foreach ($goods as $val) {
                    if ($val['is_selffetch'] == 0) {
                        $goods_name[] = $val['name'];
                    }
                }
                if (!empty($goods_name)) {
//                    $tips = '商品：'.implode('、',$goods_name).'不支持门店自提！';
                    $tips = '订单存在不支持门店自提的商品！';
                }
            }
        }elseif ($value == CommonOrder::DELIVERY_STATUS_EXPRESS) { //快递配送
            if ($is_express == 0) {
                $tips = '暂未开启快递配送方式';
            }else {
                $item_ids = implode(',',array_column($data['goods'],'item_id'));
                $goods_ids = implode(',',GoodsItem::where('id','in', $item_ids)->column('goods_id'));
                $goods = Goods::where('id','in', $goods_ids)->select();
                $goods_name = [];
                foreach ($goods as $val) {
                    if ($val['is_express'] == 0) {
                        $goods_name[] = $val['name'];
                    }
                }
                if (!empty($goods_name)) {
//                    $tips = '商品：'.implode('、',$goods_name).'不支持快递配送！';
                    $tips = '订单存在不支持快递配送的商品！';
                }
            }
        }
        return $tips;
    }
}