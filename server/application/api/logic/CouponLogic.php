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
namespace app\api\logic;
use app\api\model\Coupon;
use app\common\model\Footprint;
use app\common\server\ConfigServer;
use think\Db;
use think\facade\Cache;
use think\facade\Hook;
use think\helper\Time;

class CouponLogic{
    public static function getCouponList($user_id){
        //更新过期优惠券
        \app\common\logic\CouponLogic::couponClose($user_id);
        $coupon = new Coupon();
        $now = time();
        $where[] = ['del','=',0];
        $where[] = ['status','=',1];
        $where[] = ['get_type','=',1];
        $where[] = ['send_time_start','<=',$now];
        $where[] = ['send_time_end','>=',$now];

        $coupon_list = $coupon
            ->where($where)
            ->order('id desc')
            ->select();
        $user_coupon = [];
        if($user_id){
            $user_coupon = Db::name('coupon_list')
                ->where(['user_id'=>$user_id,'del'=>0])
                ->select();
        }
        $user_coupon_ids = array_column($user_coupon,'coupon_id');

        foreach ($coupon_list as &$item){

            //是否已领取
            $item['is_get'] = 0;
            //优惠券类型
            $item['coupon_type'] = '全场通用';
            //优惠券使用时间
            $item['use_time_tips'] = '';
            $item['use_condition'] = '无金额门槛';

            if(in_array($item['id'],$user_coupon_ids)){
                $item['is_get'] = 1;
            }

            if($item['use_goods_type'] == 2){
                $item['coupon_type'] = '指定商品可用';
            }
            if($item['use_goods_type'] == 3){
                $item['coupon_type'] = '定商品不可用';
            }
            if($item['condition_type'] == 2){
                $item['use_condition'] = '满'.floatval($item['condition_money']).'元减'.floatval($item['money']);

            }

            switch ($item['use_time_type']){
                case 2:
                    $item['use_time'] = time()+86400*$item['use_time'];
                    $item['use_time_tips'] = '有效期至:'.date('Y.m.d H:i',$item['use_time']);
                    break;
                case 3:
                    $item['use_time'] = time() + 86400 * $item['use_time']+86400;
                    $item['use_time_tips'] = '有效期至:'.date('Y.m.d H:i',$item['use_time']);
                    break;
                default:
                    $item['use_time_tips'] = date('Y.m.d H:i',$item['use_time_start']).'-'.date('Y.m.d H:i',$item['use_time_end']);
            }

        }
        $coupon_list->visible(['id','name','money','is_get','coupon_type','use_time_tips','use_condition']);

        return $coupon_list;
    }


    public static function getGoodsCoupon($user_id,$id){
        $now = time();
        $where = [
            ['get_type','=',1],
            ['status','=',1],
            ['del','=',0],
            ['send_time_start','<=',$now],
            ['send_time_end','>=',$now],
        ];
        $coupon = new Coupon();
        $coupon_list = $coupon
                    ->where($where)
                    ->field('id,name,money,condition_type,condition_money,use_time,use_time_start,use_time_end,use_time_type,use_goods_type')
                    ->with(['coupon_goods'])
                    ->select()->toArray();

        $user_coupon = [];
        $lists = [];
        if($user_id){
            $user_coupon = Db::name('coupon_list')
                ->where(['user_id'=>$user_id,'del'=>0])
                ->select();
        }
        $user_coupon_ids = array_column($user_coupon,'coupon_id');

        foreach ($coupon_list as $item){
            if($item['use_goods_type'] == 2 || $item['use_goods_type'] == 3){
                $goods_ids = array_column($item['coupon_goods'],'goods_id');
                $exist_id = in_array($id,$goods_ids);
                if($item['use_goods_type'] == 2 && !$exist_id){
                    continue;
                }
                if($item['use_goods_type'] == 3 && $exist_id){
                    continue;
                }
            }
            $coupons['id'] = $item['id'];
            $coupons['name'] = $item['name'];
            $coupons['money'] = $item['money'];
            //是否已领取
            $coupons['is_get'] = 0;
            //优惠券使用时间
            $coupons['use_time_tips'] = '';
            //使用使用类型
            switch ($item['use_goods_type']){
                case 1:
                    $coupons['coupon_type'] = '全场可用';
                    break;
                case 2:
                    $coupons['coupon_type'] = '指定商品可用';
                    break;
                case 3:
                    $coupons['coupon_type'] = '指定商品不可用';
                    break;

            }
            //优惠券有效期
            switch ($item['use_time_type']){
                case 2:
                    $coupons['use_time'] = time()+86400*$item['use_time'];
                    $coupons['use_time_tips'] = '有效期至:'.date('Y.m.d H:i',$item['use_time']);
                    break;
                case 3:
                    $coupons['use_time'] = time() + 86400 * $item['use_time']+86400;
                    $coupons['use_time_tips'] = '有效期至:'.date('Y.m.d H:i',$item['use_time']);
                    break;
                default:
                    $coupons['use_time_tips'] = date('Y.m.d H:i',$item['use_time_start']).'-'.date('Y.m.d H:i',$item['use_time_end']);
            }
            $coupons['use_condition'] = '无金额门槛';
            if(in_array($item['id'],$user_coupon_ids)){
                $coupons['is_get'] = 1;
            }
            if($item['condition_type'] == 2){
                $coupons['use_condition'] = '满'.floatval($item['condition_money']).'元减'.floatval($item['money']);
            }
            $lists[] = $coupons;
        }
        return $lists;
    }
    //我的优惠券
    public static function getMyCouponList($user_id,$type){

        $coupon = new Coupon();
        $where[] = ['user_id','=',$user_id];
        $where[] = ['cl.del','=',0];
        if($type != ''){
            $where[] = ['cl.status','=',$type];
        }

        $coupon_list = $coupon->alias('c')
            ->join('coupon_list cl','c.id = cl.coupon_id')
            ->field('user_id,coupon_id,coupon_code,cl.create_time,
                            c.id,c.name,c.money,c.condition_type,c.condition_money,
                            c.send_total_type,c.send_total,c.use_time_type,c.use_time_start,c.use_time_end,c.use_time,
                            c.get_type,c.get_num_type,c.get_num,c.use_goods_type')
            ->with('couponGoods')
            ->order('cl.id desc')
            ->where($where)
            ->select();

        $goods_list = Db::name('goods')->where(['del'=>0])->column('name','id');

        foreach ($coupon_list as &$item){

            $goods_name_array = [];

            //优惠券使用时间
            $item['use_time_tips'] = '';
            $item['use_condition'] = '满'.floatval($item['condition_money']).'元减'.floatval($item['money']);
        /*********************************优惠券可用范围************************************************/
            $item['coupon_type'] = '全场通用';
            $item['tips'] = '';
            switch ($item['use_goods_type']){
                case 1:
                    $item['coupon_type'] = '全场通用';
                    $item['tips'] = '';
                    break;
                case 2:
                    $item['coupon_type'] = '指定商品可用';
                    $goods_ids = array_column($item['coupon_goods']->toarray(),'goods_id');
                    $goods_name_array = array_intersect_key($goods_list,array_flip($goods_ids));
                    $item['tips'] ='商品'.implode('、',$goods_name_array).'可用';
                    break;
                case 3:
                    $item['coupon_type'] = '指定商品可用';
                    $goods_ids = array_column($item['coupon_goods']->toarray(),'goods_id');
                    $goods_name_array = array_intersect_key($goods_list,array_flip($goods_ids));
                    $item['tips'] ='商品'.implode('、',$goods_name_array).'可用';
                    break;
            }
            //使用门槛
            if($item['condition_type'] == 1){
                $item['use_condition'] = '无金额门槛';
            }

         /*********************************优惠券使用时间***********************************/
            $item['use_time_tips'] = '';
            switch ($item['use_time_type']){
                case 2:
                    $item['use_time'] = $item['create_time']+86400*$item['use_time'];
                    $item['use_time_tips'] = '有效期至:'.date('Y.m.d H:i',$item['use_time']);
                    break;
                case 3:
                    $item['use_time'] = $item['create_time'] + 86400 * $item['use_time']+86400;
                    $item['use_time_tips'] = '有效期至:'.date('Y.m.d H:i',$item['use_time']);
                    break;
                default:
                    $item['use_time_tips'] = date('Y.m.d H:i',$item['use_time_start']).'-'.date('Y.m.d H:i',$item['use_time_end']);
            }
        }
        $coupon_list->hidden(['coupon_goods'])->visible(['id','name','money','coupon_code','coupon_type','tips','use_time_tips','use_condition']);

        return $coupon_list;

    }

    //领取优惠券
    public static function userGetCoupon($coupon_id,$user_id){
        $now = time();
        //生成券码
        $coupon_code = create_coupon_code();
        $add_data = [
            'user_id'       => $user_id,
            'coupon_id'     => $coupon_id,
            'coupon_code'   => $coupon_code,
            'status'        => 0,
            'create_time'   => $now,
            'update_time'   => $now,
            'del'           => 0,
        ];
        $result = Db::name('coupon_list')->insert($add_data);
        if ($result) {
            // 钩子-记录足迹(领取优惠券)
            Hook::listen('footprint', [
                'type'       => Footprint::receive_coupon,
                'user_id'    => $user_id,
                'foreign_id' => $coupon_id //优惠券ID
            ]);
        }
        return $result;
    }
    //下单获取优惠券
    public static function orderCoupon($goods,$user_id){
        //更新过期优惠券
        \app\common\logic\CouponLogic::couponClose($user_id);
        $coupon = [
            'usable'        => [],//可用
            'unusable'      => [],//不可用
        ];
        if($goods){
            $coupon_model = new Coupon();
            //找出自己的优惠券
            $my_coupon = $coupon_model->alias('c')
                ->join('coupon_list cl','cl.coupon_id = c.id')
                ->where(['user_id'=>$user_id,'c.del'=>0,'cl.del'=>0,'cl.status'=>0])
                ->field('c.*,cl.id as cl_id,cl.create_time as get_coupon_time')
                ->order('cl.id desc')
                ->select()->toArray();
            //数组切换成对应的索引：[2=>1] 2=item_id
            $item_num = array_column($goods,'num','item_id');
            //找出下单的商品信息
            $item_ids = array_column($goods,'item_id');
            //找出下单的商品对应的价格
            $goods_price_array = Db::name('goods_item')->alias('gi')
                ->join('goods g','gi.goods_id = g.id')
                ->where(['gi.id'=>$item_ids])
                ->column('gi.*','gi.id');
            $seckill_list = SeckillLogic::getSeckillGoods();
            $seckill_goods = $seckill_list['seckill_goods'];
            if($seckill_goods){
                foreach ($goods_price_array as $key => $item){
                    if(isset($seckill_goods[$item['id']])){
                        $goods_price_array[$key]['price'] = $seckill_goods[$item['id']]['price'];
                    }
                }
            }

            if($my_coupon){
                //处理优惠券信息
                foreach ($my_coupon as &$coupon_item){
                    /*****************拼接优惠券信息**********************/
                    //优惠券类型
                    $coupon_item['coupon_type'] = '全场店铺可用';
                    //优惠券使用时间
                    $coupon_item['use_time_tips'] = '';

                    $coupon_item['use_condition'] = '满'.floatval($coupon_item['condition_money']).'减'.floatval($coupon_item['money']);
                    //优惠券使用范围
                    switch ($coupon_item['use_goods_type']){
                        case 1:
                            $coupon_item['coupon_type'] = '全场通用';
                            break;
                        case 2:
                            $coupon_item['coupon_type'] = '指定商品可用';
                            break;
                        case 3:
                            $coupon_item['coupon_type'] = '指定商品不可用';
                            break;
                    }
                    if($coupon_item['condition_type'] == 1){
                        $coupon_item['use_condition'] = '无金额门槛';
                    }
                    //优惠券使用时间
                    $coupon_item['use_time_tips'] = '';
                    switch ($coupon_item['use_time_type']){
                        case 2:
                            $coupon_item['use_time'] = $coupon_item['get_coupon_time']+86400*$coupon_item['use_time'];
                            $coupon_item['use_time_tips'] = '有效期至:'.date('Y.m.d H:i',$coupon_item['use_time']);
                            break;
                        case 3:
                            $coupon_item['use_time'] = $coupon_item['get_coupon_time'] + 86400 * $coupon_item['use_time']+86400;
                            $coupon_item['use_time_tips'] = '有效期至:'.date('Y.m.d H:i',$coupon_item['use_time']);
                            break;
                        default:
                            $coupon_item['use_time_tips'] = date('Y.m.d H:i',$coupon_item['use_time_start']).'-'.date('Y.m.d H:i',$coupon_item['use_time_end']);
                    }

                    /*****************优惠券不可用和可用**********************/
                    $coupon_item['tips'] = '';
                    $coupon_info = [
                        'id'                => $coupon_item['cl_id'],
                        'coupon_id'         => $coupon_item['id'],
                        'name'              => $coupon_item['name'],
                        'money'             => $coupon_item['money'],
                        'get_coupon_time'   => $coupon_item['get_coupon_time'],
                        'use_time_tips'     => $coupon_item['use_time_tips'],
                        'use_condition'     => $coupon_item['use_condition'],
                        'coupon_type'       => $coupon_item['coupon_type'],
                        'tips'              => $coupon_item['tips'],
                    ];

                    //验证优惠券是否过期
                    $now = time();
                    if($coupon_item['use_time_type'] == 1){
                        if($coupon_item['use_time_start'] > $now || $coupon_item['use_time_end'] < $now){
                            $coupon_info['tips'] = '优惠券不在使用时间范围内';
                            $coupon['unusable'][] = $coupon_info;
                            continue;
                        }
                    }else{
                        if($coupon_item['use_time'] - $now <= 0){
                            $coupon_info['tips'] = '优惠券不在使用时间范围内';
                            $coupon['unusable'][] = $coupon_info;
                            continue;
                        }
                    }
                    //当前优惠券的商品id
                    $goods_ids = array_column($goods_price_array,'goods_id');

                    //优惠券商品
                    $coupon_goods = Db::name('coupon_goods')->where(['coupon_id' => $coupon_item['id']])->column('goods_id');

                    $intersect_goods = array_intersect($goods_ids,$coupon_goods);

                    if($goods_price_array){
                        //全部商品可用，满足金额可用
                        if($coupon_item['use_goods_type'] == 1 && $coupon_item['condition_type'] == 2){
                            $total_price = 0;
                            foreach ($goods as $goods_item){
                                $price =  isset($goods_price_array[$goods_item['item_id']]) ? $goods_price_array[$goods_item['item_id']]['price'] : 0;

                                $total_price += $price * $goods_item['num'];
                            }
                            if($total_price < $coupon_item['condition_money']){
                                $coupon_info['tips'] = '所结算的商品中未满足使用的金额';
                                $coupon['unusable'][] = $coupon_info;
                                continue;
                            }
                        }
                        //指定商品可用
                        if($coupon_item['use_goods_type'] == 2) {
                            if(empty($intersect_goods)){
                                $coupon_info['tips'] = '所结算的商品中未包含指定商品';
                                $coupon['unusable'][] = $coupon_info;
                                continue;

                            }
                            //满足金额可用
                            if($intersect_goods && $coupon_item['condition_type'] == 2){
                                $total_price = 0;

                                foreach ($intersect_goods as $goods_item){
                                    foreach ($goods_price_array as $price_item){
                                        if($price_item['goods_id'] == $goods_item){
                                            $num =  $item_num[$price_item['id']] ?? 0;

                                            $total_price += $price_item['price'] * $num;
                                        }
                                    }
                                }
                                if($total_price < $coupon_item['condition_money']){
                                    $coupon_info['tips'] = '所结算的商品中未满足使用的金额';
                                    $coupon['unusable'][] = $coupon_info;
                                    continue;
                                }
                            }
                        }
                        //指定商品不可用
                        if($coupon_item['use_goods_type'] == 3) {
                            //无门槛使用
                            if($intersect_goods){
                                $coupon_info['tips'] = '所结算的商品中包含指定不可用商品';
                                $coupon['unusable'][] = $coupon_info;
                                continue;

                            }
                            //满足金额可用
                            if(empty($intersect_goods) && $coupon_item['condition_type'] == 2){
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

                                if($total_price < $coupon_item['condition_money']){
                                    $coupon_info['tips'] = '所结算的商品中未满足使用的金额';
                                    $coupon['unusable'][] = $coupon_info;
                                    continue;
                                }
                            }
                        }

                        $coupon['usable'][] = $coupon_info;

                    }else{
                        $coupon_info['tips'] = '所结算的商品中未包含指定商品';
                        $coupon['unusable'][] = $coupon_info;
                    }
                }
            }
        }
        return $coupon;
    }
    /**
     * note 注册赠送优惠券
     * create_time 2020/12/3 17:43
     */
    public static function registerSendCoupon($user_id){
        $now = time();
        $coupon_list = [];
        $cache_name = 'register_coupon_'.$user_id;
        $register_coupon = Cache::get($cache_name);

        //可领取注册优惠券
        if($register_coupon){
            //领取优惠券的id
            $register_award_coupon = ConfigServer::get('marketing','register_award_coupon',[]);
            if($register_award_coupon){
                $list = Db::name('coupon')
                    ->where(['id'=>$register_award_coupon,'get_type'=>2,'status'=>1,'del'=>0])
                    ->select();

                foreach ($list as $coupon){
                    $use_goods_type = '';
                    switch ($coupon['use_goods_type']){
                        case 1:
                            $use_goods_type = '全场通用';
                            break;
                        case 2:
                            $use_goods_type = '指定商品可用';
                            break;
                        case 3:
                            $use_goods_type = '指定商品不可用';
                            break;
                    }
                    $coupon_list[] = [
                        'id'            => $coupon['id'],
                        'name'          => $coupon['name'],
                        'money'         => $coupon['money'],
                        'use_goods_type'=> $use_goods_type,
                    ];
                    //判断该优惠券是否可领取
                    if( $coupon['send_total_type'] === 2){
                        $total_get_coupon = Db::name('coupon_list')->where(['coupon_id'=>$coupon['id']])->count();
                        if($total_get_coupon >= $coupon['send_total']){
                            continue;
                        }
                    }
                    if($coupon['get_num_type'] !== 1 ){
                        $where[] = ['coupon_id','=',$coupon['id']];
                        if($coupon['get_num_type'] === 3){
                            list($today_start,$end_start) = Time::today();
                            $where[] = ['create_time','between time',[$today_start,$end_start]];
                        }
                        $total_get_coupon = Db::name('coupon_list')->where($where)->count();
                        if($total_get_coupon >= $coupon['get_num']){
                            continue;
                        }
                    }

                    //生成券码
                    $coupon_code = create_coupon_code();
                    $add_data = [
                        'user_id'       => $user_id,
                        'coupon_id'     => $coupon['id'],
                        'coupon_code'   => $coupon_code,
                        'status'        => 0,
                        'create_time'   => $now,
                        'update_time'   => $now,
                        'del'           => 0,
                    ];
                    Db::name('coupon_list')->insert($add_data);

                }
            }

            Cache::rm($cache_name);
        }
        return $coupon_list;

    }

}