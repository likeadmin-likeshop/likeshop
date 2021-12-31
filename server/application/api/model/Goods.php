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
namespace app\api\model;
use app\common\server\ConfigServer;
use app\common\server\UrlServer;
use think\Db;
use think\Model;

class Goods extends Model{
    //商品图片
    public function getImageAttr($value,$data){
        if($value){
            return UrlServer::getFileUrl($value);
        }
        return $value;
    }
    //商品视频
    public function getVideoAttr($value,$data){
        if($value){
            return UrlServer::getFileUrl($value);
        }
        return $value;
    }
    //商品详情
    public function getContentAttr($value,$data){
        $preg = '/(<img .*?src=")[^https|^http](.*?)(".*?>)/is';
        $local_url = UrlServer::getFileUrl('/');
        return  preg_replace($preg, "\${1}$local_url\${2}\${3}",$value);
    }
    //商品库存
    public function getStockAttr($value,$data){
       if($data['is_show_stock']){
            return $value;
       }
       return true;
    }
    //商品轮播图
    public function GoodsImage(){
        return $this->hasMany('GoodsImage','goods_id','id')->field('goods_id,uri');
    }
    public function Spec()
    {
        return $this->hasMany('GoodsSpec', 'goods_id', 'id');
    }
    public function GoodsItem(){
        return $this->hasMany('GoodsItem', 'goods_id', 'id')->field('id,goods_id,image,spec_value_ids,spec_value_str,market_price,price,stock');
    }
    public function GoodsSpecValue(){

        return $this->hasMany('GoodsSpecValue','goods_id','id');
    }

    public function GoodsSpec()
    {
        $spec = $this->Spec->toArray();
        $spec_value = $this->GoodsSpecValue;
        $spec = array_column($spec,null,'id');
        $goods_item = $this->getAttr('goods_item');

        //将商品价格替换成商品规格价
        $this->setAttr('price',$goods_item[0]['price']);
        $this->setAttr('market_price',$goods_item[0]['market_price']);

        //拼接规格
        foreach ($spec_value as $item){
            if(isset($spec[$item['spec_id']])){
                $spec[$item['spec_id']]['spec_value'][]= $item;
            }
        }
        $this->setAttr('goods_spec',array_values($spec));
        //规格图片为空则替换商品主图
        foreach ($goods_item as $item_key => $item_value){
            if(empty($item_value['image'])){
                $goods_item[$item_key]['image'] = $this->getAttr('image');
            }
        }
        $this->setAttr('goods_item',$goods_item);
    }

    public function Like(){
        $goods = new self();
        $like_list = $goods->where(['del'=>0,'is_like'=>1,'status'=>1])->field('id,name,image,min_price as price,market_price')->orderRaw('rand()')->limit(5)->select();
     
        $this->setAttr('like',$like_list);
    }

    //下单赠送积分
    public function getOrderGiveIntegralAttr($value,$data)
    {
        $data['give_integral'] = empty($data['give_integral']) ? 0 : $data['give_integral'];
        if (1 === $data['give_integral_type']) {
            return intval($data['give_integral']);
        }
        return intval($data['max_price'] *  $data['give_integral'] / 100);
    }

    public function getCommentAttr($value,$data){
        $comment = [];
        $goods_comment = Db::name('goods_comment g')
                ->join('user u','g.user_id = u.id')
                ->where(['goods_id'=>$data['id'],'g.del'=>0,'u.del'=>0,'g.status'=>1])
                ->order('g.id desc')
                ->field('g.id,user_id,item_id,comment,g.create_time,nickname,avatar')
                ->find();
        if($goods_comment){
            //好评人数
            $goods_count = Db::name('goods_comment')
                    ->where(['goods_id'=>$data['id'],'del'=>0])
                    ->where('goods_comment','>',3)
                    ->count();
            //总评论人数
            $comment_count = Db::name('goods_comment')
                        ->where(['goods_id'=>$data['id'],'del'=>0])
                        ->count();
            //评论图片
            $comment_image = Db::name('goods_comment_image')->where(['goods_comment_id'=>$goods_comment])->column('uri');

            $comment = $goods_comment;
            $comment['goods_rate'] = round(($goods_count/$comment_count)*100).'%';
            $comment['avatar'] = UrlServer::getFileUrl($comment['avatar']);
            $comment['spec_value_str'] = '';
            $comment['create_time'] = date('Y-m-d H:i:s',$comment['create_time']);
            foreach ($comment_image as &$image_item){
                $image_item =  UrlServer::getFileUrl($image_item);
            }
            $comment['image'] = $comment_image;
            foreach ($this->goods_item as $item){
                if($item['id'] == $comment['item_id']){
                    $comment['spec_value_str'] = $item['spec_value_str'];
                }
            }
            if(empty($comment['comment'])){
                $comment['comment'] = '此用户没有填写评论';
            }
        }
        return $comment;
    }


    //详情页显示佣金金额
    public function getCommissionPriceAttr($value, $data)
    {
        $open_distribution = ConfigServer::get('distribution', 'is_open', 1);
        $show_commission = ConfigServer::get('distribution', 'show_commission', 0);
        $first_ratio = empty($data['first_ratio']) ? 0 : $data['first_ratio'];

        if ($open_distribution && $show_commission && $data['is_commission'] && $first_ratio > 0) {
            $money = round($first_ratio * $data['max_price'] / 100, 2);
            if ($money > 0) {
                return $money;
            }
        }
        return 0;
    }
}