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
    //商品详情
    public function getContentAttr($value,$data){
        $preg = '/(<img .*?src=")[^https|^http](.*?)(".*?>)/is';
        $local_url = UrlServer::getFileUrl().'/';
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
        $this->setAttr('like', $goods->where(['del'=>0,'is_like'=>1,'status'=>1])->field('id,name,image,min_price as price,market_price')->select());
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
        }
        return $comment;
    }


}