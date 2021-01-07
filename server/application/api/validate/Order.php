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

namespace app\api\validate;
use app\api\logic\SeckillLogic;
use think\Db;
use think\Validate;

class Order extends Validate
{
    protected $rule = [
        'goods' => 'require|array|checkGoods',
        'action' => 'require',
        'coupon_id' =>'checkCoupon',
    ];

    protected $message = [
        'goods.require' => '参数错误',
        'action.require' => '参数缺失',
    ];

    protected function sceneBuy()
    {
        $this->only(['action', 'goods', 'coupon_id']);
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
                ->column('gi.*', 'gi.id');
            $seckill_list = SeckillLogic::getSeckillGoods();
            $seckill_goods = $seckill_list['seckill_goods'];
            if($seckill_goods){
                foreach ($goods_price_array as $key => $item){
                    if(isset($seckill_goods[$item['id']])){
                        $goods_price_array[$key]['price'] = $seckill_goods[$item['id']]['price'];
                    }
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

}