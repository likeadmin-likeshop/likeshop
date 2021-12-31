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
namespace app\admin\validate;
use think\Db;
use think\Validate;

class SeckillGoods extends Validate{
    protected $rule = [
        'seckill_id'        => 'require|checkSeckill',
        'item'              => 'require|checkActivity'

    ];
    protected $message = [
        'seckill_id.require'    => '请选择秒杀时段',
        'item.require'          => '请选择秒杀商品',
    ];

    public function checkSeckill($value,$rule,$data){

        $seckill = Db::name('seckill_time')->where(['del'=>0,'id'=>$value])->find();
        if(empty($seckill)){
            return '秒杀时间段已被调整，请重新选择时间段';
        }
        return true;
    }

    public function sceneAdd(){
        $this->append('item','checkAddGoods');

    }
    public function sceneEdit(){
        $this->append('item','checkEditGoods');

    }
    
    public function checkActivity($value,$rule,$data){
        $goods_ids = array_unique(array_column($value,'goods_id'));
        $team_goods= Db::name('team_goods_item')->alias('TGI')
                ->join('team_activity TA','TA.team_id = TGI.team_id')
                ->where(['TGI.goods_id'=>$goods_ids,'TA.del'=>0])
                ->find();

        if($team_goods){
            return '该商品正在参加拼团活动中，不能在参加秒杀活动';
        }
        $bargain_goods = Db::name('bargain_item')->alias('bi')
            ->join('bargain b', 'b.id = bi.bargain_id')
            ->where(['bi.goods_id' => $goods_ids, 'b.del' => 0])
            ->find();
        if($bargain_goods){
            return '该商品正在参加砍价活动中，不能在参加秒杀活动';
        }

        return true;
    }

    public function checkAddGoods($value,$rule,$data){
        $goods_ids = array_unique(array_column($value,'goods_id'));
        $goods = Db::name('goods')->where(['del'=>0])->column('id');
        $goods_item = Db::name('goods_item')->where(['goods_id'=>$goods_ids])->column('price,spec_value_str','id');
        $seckill_goods = Db::name('seckill_goods')->where(['seckill_id'=>$data['seckill_id'],'del'=>0])->column('item_id');

        foreach ($value as $item){

            if(!in_array($item['goods_id'],$goods)){
                return '商品ID:'.$item['goods_id'].'已下架';
            }

            if($seckill_goods && in_array($item['item_id'],$seckill_goods)){
                return '商品规格:'.$goods_item[$item['item_id']]['spec_value_str'].'已在活动中，请勿重复添加';
            }
            $goods_price = $goods_item[$item['item_id']]['price'] ?? 0;
            //验证商品价格
            if($item['price'] > $goods_price){
                return '商品规格:'.$goods_item[$item['item_id']]['spec_value_str'] .'的秒杀价格高于原价';
            }


        }
        return true;
    }

    public function checkEditGoods($value,$rule,$data){

        $goods_ids = array_unique(array_column($value,'goods_id'));
        $seckill_ids = array_column($value,'id');

        $seckill_goods = Db::name('seckill_goods')
                ->where(['goods_id'=>$goods_ids,'seckill_id'=>$data['seckill_id']])
                ->where('id','not in',$seckill_ids)
                ->find();

        if($seckill_goods){
            return '该时间段已存在相同的商品';
        }
        $goods = Db::name('goods')->where(['del'=>0])->column('id');
        $goods_item = Db::name('goods_item')->where(['goods_id'=>$goods_ids])->column('price,spec_value_str','id');


        foreach ($value as $item){
            if(!in_array($item['goods_id'],$goods)){
                return '商品ID:'.$item['goods_id'].'已下架';
            }

            $goods_price = $goods_item[$item['item_id']]['price'] ?? 0;

            //验证商品价格
            if($item['price'] > $goods_price){
                return '商品规格:'.$goods_item[$item['item_id']]['spec_value_str'] .'的秒杀价格高于原价';
            }

        }
        return true;
    }

}