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
namespace app\api\logic;
use app\api\model\Coupon;
use app\api\model\Goods;
use app\common\model\Ad;
use app\common\model\Footprint;
use app\common\server\ConfigServer;
use app\common\server\UrlServer;
use think\Db;
use think\facade\Hook;

class IndexLogic{
    public static function lists($user_id){
        // 钩子-记录足迹(访问商城)
        Hook::listen('footprint', [
            'type'    => Footprint::enter_mall,
            'user_id' => $user_id
        ]);

        //新闻
        $news  = Db::name('article')
            ->where(['del'=>0,'is_notice'=>1,'is_show'=>1])
            ->order('create_time desc')
            ->field('id,title')
            ->limit(3)
            ->select();
        if($news){
            $news[0]['is_new'] = 1;
        }

        $default_image = UrlServer::getFileUrl(ConfigServer::get('website', 'goods_image', ''));
        //优惠券
        $coupon = new Coupon();
        $now = time();
        $where[] = ['del','=',0];
        $where[] = ['status','=',1];
        $where[] = ['get_type','=',1];
        $where[] = ['send_time_start','<=',$now];
        $where[] = ['send_time_end','>=',$now];
        $coupon_list = $coupon->where($where)
                ->field('id,money,condition_type,condition_money')
                ->limit(9)
                ->order('id desc')
                ->select();

        $my_coupon = [];
        if($user_id){
            $my_coupon = Db::name('coupon_list')->where(['del'=>0,'user_id'=>$user_id])->column('coupon_id');
        }
        foreach ($coupon_list as &$coupon_item){
            $coupon_item['is_get'] = 0;
            $coupon_item['use_condition'] = '无金额门槛';
            //标记已领取
            if(in_array($coupon_item['id'],$my_coupon)){
                $coupon_item['is_get'] = 1;
            }
            if($coupon_item['condition_type'] == 2){
                $coupon_item['use_condition'] = '满'.floatval($coupon_item['condition_money']) .'元减'.floatval($coupon_item['money']);
            }
        }
        $coupon_list->hidden(['condition_money','condition_type']);
        //活动专区
        $activity_area = Db::name('activity_area')->field('id,name,title,image')->where(['del'=>0,'status'=>1])->select();
        foreach ($activity_area as &$area_item){
            $area_item['image'] = UrlServer::getFileUrl($area_item['image']);
        }

        //秒杀活动
        $seckill = SeckillLogic::getSeckill();
        if($seckill){
            $seckill['goods'] = Db::name('goods g')
                ->join('seckill_goods sg','g.id = sg.goods_id')
                ->where(['seckill_id'=>$seckill['id'],'g.del'=>0,'sg.del'=>0,'status'=>1,])
                ->group('sg.goods_id')
                ->order('sg.sales_sum,sg.id desc')
                ->limit(9)
                ->field('g.id,g.name,g.image,g.min_price,sg.price as seckill_price,sg.sales_sum')
                ->select();
            foreach ($seckill['goods'] as &$seckill_item ){
                // 传入默认商品主图
                if(empty( $seckill_item['image'])){
                    $seckill_item['image'] = $default_image;
                }else{
                    $seckill_item['image'] = UrlServer::getFileUrl($seckill_item['image']);
                }
            }
        }else{
            $seckill['goods'] = [];
        }


        //商城logo
        $shop_logo =UrlServer::getFileUrl(ConfigServer::get('website', 'shop_logo','/static/common/image/default/shop_logo.png')).'?=v1';

        //新品推荐
        $goods = new Goods();
        $new_goods = $goods
                    ->where(['del'=>0,'status'=>1,'is_new'=>1])
                    ->field('id,name,image,min_price as price,market_price,sales_sum+virtual_sales_sum as sales_sum')
                    ->order('sort desc,id desc')
                    ->limit(5)
                    ->select();
        $mall_logo =UrlServer::getFileUrl(ConfigServer::get('website', 'mall_logo', '')).'?=v1';
        //热销榜单
        $host_goods = $goods
                    ->where(['del'=>0,'status'=>1])
                    ->field('id,name,image,min_price as price,market_price,sales_sum+virtual_sales_sum as sales_sum')
                    ->order('sales_sum DESC,click_count DESC')
                    ->limit(5)
                    ->select();


        $list = [
            'news'          => $news,
            'shop_logo'     => $shop_logo,
            'coupon'        => $coupon_list,
            'activity_area' => $activity_area,
            'seckill'       => $seckill,
            'host_goods'    => $host_goods,
            'new_goods'     => $new_goods,
            'mall_logo'     => $mall_logo
        ];
        return $list;
    }



}