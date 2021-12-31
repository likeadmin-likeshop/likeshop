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
namespace app\admin\logic;
use app\common\server\UrlServer;
use think\Db;

class SeckillLogic{

    public static function goodsList($get){
        $where = [];
        $where[] = ['sg.del','=',0];
        $where[] = ['g.del','=',0];
        if(isset($get['name']) && $get['name']) {
            $where[] = ['name','like','%'.$get['name'].'%'];
        }

        if(isset($get['seckill_id']) && $get['seckill_id']){
            $where[] = ['seckill_id','=',$get['seckill_id']];
        }

        $count = Db::name('seckill_goods sg')
            ->join('goods g','sg.goods_id = g.id')
            ->where($where)
            ->group('goods_id,seckill_id')
            ->count();


        $list = Db::name('seckill_goods sg')
            ->join('goods g','sg.goods_id = g.id')
            ->where($where)
            ->group('goods_id,seckill_id')
            ->field('sg.id,seckill_id,goods_id,g.name,g.image,g.max_price,g.min_price,sg.sales_sum')
            ->page($get['page'], $get['limit'])
            ->order('sg.id desc')
            ->select();
        $goods_ids = array_column($list,'goods_id');
        $seckill_goods_list = Db::name('seckill_goods')->where(['goods_id'=>$goods_ids])->column('*','id');

        $seckill = Db::name('seckill_time')->where(['del'=>0])->column('*','id');
        foreach ($list as &$item){
            $price_array = [];
            $item['image'] = UrlServer::getFileUrl($item['image']);
            $item['goods_price'] = '￥'.$item['min_price'];
            if($item['max_price'] != $item['min_price']){
                $item['goods_price'] = '￥'.$item['min_price'].' ~ '.'￥'.$item['max_price'];
            }
            if(isset($seckill[$item['seckill_id']])){
                $item['start_time'] = $seckill[$item['seckill_id']]['start_time'];
                $item['end_time'] = $seckill[$item['seckill_id']]['end_time'];
            }
            //该秒杀商品的全部规格
            $seckill_goods_item = Db::name('seckill_goods')
                            ->where(['seckill_id'=>$item['seckill_id'],'goods_id'=>$item['goods_id']])
                            ->column('*','id');
            foreach ($seckill_goods_item as $seckill_id => $seckill_item){

                if(isset($seckill_goods_list[$seckill_id])){
                    $price_array[] = $seckill_goods_list[$seckill_id]['price'];
                }
            }

            $max_price = max($price_array);
            $min_price = min($price_array);

            $item['seckill_price'] = '￥'.$max_price;
            if($max_price != $min_price){
                $item['seckill_price'] =  '￥'.$min_price.' ~ '.'￥'.$max_price;
            }
        }

        return ['count' => $count, 'list' => $list];
    }

    public static function timeList($get){
        $where = [];
        $where[] = ['del','=',0];
        $count = Db::name('seckill_time')->where($where)->count();
        $list = Db::name('seckill_time')
            ->where($where)
            ->order('start_time asc')
            ->page($get['page'], $get['limit'])
            ->select();
        foreach ($list as &$item){
            $item['time'] = $item['start_time'].' ~ '.$item['end_time'];
        }
        return ['count' => $count, 'list' => $list];

    }



    public static function addTime($post){
        $post['create_time'] = time();
        $post['update_time'] = time();
        return Db::name('seckill_time')->insert($post);
    }



    public static function editTime($post){
        $post['update_time'] = time();
        return Db::name('seckill_time')->where(['id'=>$post['id']])->update($post);
    }

    public static function addGoods($post){
        $now = time();
        $add_data = [];

        foreach ($post['item'] as  $item){
            $add_data[] =[
                'seckill_id'        => $post['seckill_id'],
                'goods_id'          => $item['goods_id'],
                'item_id'           => $item['item_id'],
                'price'             => $item['price'],
                'create_time'       => $now,
                'sales_sum'         => 0,
                'update_time'       => $now,
                'del'               => 0,
            ];
        }
        return Db::name('seckill_goods')->insertAll($add_data);
    }

    public static function editGoods($post){
        $now = time();

        foreach ($post['item'] as  $goods){

            $update_data = [
                'seckill_id'    => $post['seckill_id'],
                'price'         => $goods['price'],
                'update_time'   => $now,
            ];
            Db::name('seckill_goods')->where(['id'=>$goods['id']])->update($update_data);
        }

        return true;
    }

    public static function delGoods($id,$seckill_id){
        $update_data = [
            'update_time'   => time(),
            'del'           => 1,
        ];
        return Db::name('seckill_goods')->where(['del'=>0,'goods_id'=>$id,'seckill_id'=>$seckill_id])->update($update_data);
    }


    public static function delTime($id){
        $update_data = [
            'update_time'   => time(),
            'del'           => 1,
        ];
        Db::name('seckill_time')->where(['id'=>$id])->update($update_data);
        Db::name('seckill_goods')->where(['del'=>0,'seckill_id'=>$id])->update($update_data);
        return true;
    }

    public static function getTime($id){
        return Db::name('seckill_time')->where(['del'=>0,'id'=>$id])->find();
    }

    public static function getTimeAll(){

        $time_list =  Db::name('seckill_time')->where(['del'=>0])->order('start_time asc')->select();
        foreach ($time_list as &$item){
            $item['time'] = $item['start_time'].' ~ '.$item['end_time'];
        }
        return $time_list;
    }

    public static function getSeckillGoods($id,$seckill_id){
        $skill_goods = Db::name('seckill_goods sg')
            ->join('goods_item gi','sg.item_id = gi.id')
            ->where(['del'=>0,'sg.goods_id'=>$id,'sg.seckill_id'=>$seckill_id ])
            ->field('sg.*,gi.image,gi.spec_value_str,gi.price as goods_price')
            ->select();

        $goods_id = $skill_goods[0]['goods_id'];
        $goods = Db::name('goods')->where(['del'=>0,'id'=>$goods_id])->field('image,name')->find();

        foreach ($skill_goods as &$item){
            $item['name'] = $goods['name'];
            if(!$item['image']){
                $item['image'] = $goods['image'];
            }
        }

        return $skill_goods;
    }

}