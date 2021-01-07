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

use app\api\model\Goods;use think\Db;

class CollectLogic{
    public static function getCollectGoods($user_id,$page,$size){
        $goods = new Goods();
        $count = $goods->alias('g')
                ->leftJoin('goods_collect c','g.id=c.goods_id')
                ->where(['g.del' => 0,'status'=>1,'user_id'=>$user_id])
                ->count();

        $list = $goods->alias('g')
            ->leftJoin('goods_collect c','g.id=c.goods_id')
            ->where(['g.del' => 0,'user_id'=>$user_id])
            ->field('g.id,name,image,min_price as price')
            ->order('id desc')
            ->page($page, $size)
            ->select();
        $more = is_more($count,$page,$size);  //是否有下一页
        return [
            'list'      => $list,
            'count'     => $count,
            'page_no'   => $page,
            'page_size' => $size,
            'more'      =>$more
        ];

    }
    public static function handleCollectGoods($post,$user_id){
        if($post['is_collect']==1){
            $data =[
                'user_id'=>$user_id,
                'goods_id'=>$post['goods_id'],
                'create_time'=>time(),
            ];
            return Db::name('goods_collect')->insert($data);
        }
        return Db::name('goods_collect')->where(['goods_id'=>$post['goods_id']])->delete();

    }
}