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
use app\common\server\ConfigServer;
use app\common\server\UrlServer;
use think\Db;

class SeckillLogic{

    public static function seckillTime(){
        $time_list = Db::name('seckill_time')
            ->where(['del'=>0])
            ->order('start_time asc')
            ->field('id,start_time,end_time')
            ->select();
        $now = time();
        foreach ($time_list as &$item){
            $item['status'] = 2;
            $item['tips'] = '';
            $start_time = strtotime(date('Y-m-d'.$item['start_time']));
            $end_time = strtotime(date('Y-m-d'.$item['end_time']));
            if($now >= $end_time ){
                $item['tips'] = '已结束';
            }
            if($start_time <= $now && $now < $end_time){
                $item['status'] = 1;
                $item['tips'] = '抢购中';
            }
            if($start_time >= $now){
                $item['tips'] = '未开始';
                $item['status'] = 0;
            }
        }
        return $time_list;
    }

    public static function seckillGoods($id,$page,$size){
        $where[] = ['g.del','=',0];
        $where[] = ['sg.del','=',0];
        $where[] = ['g.status','=',1];
        $where[] = ['sg.seckill_id','=',$id];

        $goods_count =  Db::name('goods g')
            ->join('seckill_goods sg','g.id = sg.goods_id')
            ->group('sg.goods_id')
            ->order('sg.sales_sum desc')
            ->where($where)
            ->count();

        $goods_list =  Db::name('goods g')
            ->join('seckill_goods sg','g.id = sg.goods_id')
            ->where($where)
            ->group('sg.goods_id')
            ->order('sg.sales_sum,sg.id desc')
            ->page($page,$size)
            ->field('g.id,g.name,g.image,g.min_price,sg.price as seckill_price,sg.sales_sum')
            ->select();


        $default_image = UrlServer::getFileUrl(ConfigServer::get('website', 'goods_image', ''));
        foreach ($goods_list as &$item){
            // 传入默认商品主图
            if(empty( $item['image'])) {
                $item['image'] = $default_image;
            }else{
                $item['image'] = UrlServer::getFileUrl($item['image']);
            }
        }

        $more = is_more($goods_count,$page,$size);  //是否有下一页

        $data = [
            'list'          => $goods_list,
            'page'          => $page,
            'size'          => $size,
            'count'         => $goods_count,
            'more'          => $more
        ];
        return $data;
    }


    //获取当前的秒杀时段
    public static function getSeckill(){
        $seckill_time = Db::name('seckill_time')
            ->where(['del'=>0])
            ->order('start_time asc')
            ->field('id,start_time,end_time')
            ->select();
        $seckill = [];
        $now = time();

        foreach ($seckill_time as $item){
            $start_time = strtotime(date('Y-m-d'.$item['start_time']));
            $end_time = strtotime(date('Y-m-d'.$item['end_time']));

            if($start_time <= $now && $now < $end_time){
                $item['end_time'] = $end_time;
                $seckill = $item;
                break;
            }
        }
        return $seckill;
    }
    //获取当前的秒杀信息和秒杀商品
    public static function getSeckillGoods(){

        $seckill = self::getSeckill();
        $seckill_goods = [];
        if($seckill){
            $seckill_goods = Db::name('seckill_goods')
                ->where(['seckill_id'=>$seckill['id'],'del'=>0])
                ->column('id as seckill_goods_id,price,goods_id','item_id');
        }

        return ['seckill'=>$seckill,'seckill_goods'=>$seckill_goods];
    }
}