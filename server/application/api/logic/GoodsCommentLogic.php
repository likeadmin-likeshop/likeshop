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

use app\common\model\Order;
use app\common\model\Pay;
use app\common\server\UrlServer;
use think\Db;

class GoodsCommentLogic{
    //列表
    public static function lists($get,$page, $size)
    {

        $where= [];
        $where[] = ['gc.goods_id','=',$get['goods_id']];
        switch ($get['id']){
            case 1://晒图
                $where[]= ['i.uri','not null',''];
                break;
            case 2://好评
                $where[]= ['goods_comment','>',3];
                break;
            case 3://中评
                $where[]= ['goods_comment','=',3];
                break;
            case 4://差评
                $where[]= ['goods_comment','<',3];
                break;
        }
        $comment_count = Db::name('goods_comment')->alias('gc')
                    ->leftJoin('goods_comment_image i','gc.id = i.goods_comment_id')
                    ->join('goods_item gi','gi.id = gc.item_id')
                    ->leftJoin('user u','u.id = gc.user_id')
                    ->where(['gc.del'=>0,'gc.status'=>1])
                    ->where($where)
                    ->group('gc.id')
                    ->count();
        $comment_lists = Db::name('goods_comment')->alias('gc')
                    ->leftJoin('goods_comment_image i','gc.id = i.goods_comment_id')
                    ->leftJoin('goods_item gi','gi.id = gc.item_id')
                    ->leftJoin('user u','u.id = gc.user_id')
                    ->where(['gc.del'=>0,'gc.status'=>1])
                    ->where($where)
                    ->page($page,$size)
                    ->field('gc.id,goods_comment,service_comment,express_comment,comment,description_comment,reply,gc.create_time,u.nickname,avatar,gi.spec_value_str')
                    ->group('gc.id')
                    ->order('gc.id desc')
                    ->select();
        $iamge_list = [];
        $comment_id = array_column($comment_lists,'id');
        if($comment_id){
            $iamge_list = Db::name('goods_comment_image')
                        ->where(['goods_comment_id'=>$comment_id])
                        ->field('goods_comment_id,uri')
                        ->select();

        }
        foreach ($comment_lists as &$comment){
            $comment['avatar'] = UrlServer::getFileUrl($comment['avatar']);
            $comment['create_time'] = date('Y-m-d H:i:d',$comment['create_time']);

            $comment['image'] = [];
            foreach ($iamge_list as $image){
                if($comment['id'] == $image['goods_comment_id']){
                    $comment['image'][] = UrlServer::getFileUrl($image['uri']);
                }
            }
            if(empty($comment['comment'])){
                $comment['comment'] = '此用户没有填写评论';
            }

            if (empty($comment['spec_value_str'])){
                $comment['spec_value_str'] = '';
            }

        }
        //好评总数
        $good_count = Db::name('goods_comment')
                    ->where(['del'=>0,'status'=>1,'goods_id'=>$get['goods_id']])
                    ->where('goods_comment','>',3)
                    ->count();
        //总评论数
        $all_count = Db::name('goods_comment')
                    ->where(['del'=>0,'status'=>1,'goods_id'=>$get['goods_id']])
                    ->where('status',1)
                    ->count();
        if($all_count == 0){
            $score ='100%';
        }else{
            $score = round($good_count/$all_count*100,2).'%';
        }

        $more = is_more($comment_count,$page,$size);  //是否有下一页
        return [
            'list'      => $comment_lists,
            'count'     => $comment_count,
            'percent'   => $score,
            'page_no'   => $page,
            'page_size' => $size,
            'more'      => $more
        ];
    }
    //提交评论
    public static function addGoodsComment($post ,$user_id){
        $time =time();
        $order_goods= db::name('order_goods')
            ->where(['id'=>$post['id'],'is_comment'=>0])
            ->field('goods_id,item_id')
            ->find();

        if(empty($order_goods)){
            return '商品已评论，请勿重复评论';
        }

        $comment_data= [
            'order_goods_id'        =>$post['id'],
            'user_id'               => $user_id,
            'goods_id'              => $order_goods['goods_id'],
            'item_id'               => $order_goods['item_id'],
            'goods_comment'         => $post['goods_comment'],
            'description_comment'   => $post['description_comment'],
            'service_comment'       => $post['service_comment'],
            'express_comment'       => $post['express_comment'],
            'create_time'   =>$time,
        ];

        isset($post['comment']) && $comment_data['comment'] = $post['comment'];

        $comment_id = Db::name('goods_comment')->insertGetId($comment_data);
        if(!$comment_id){
            return '评论失败，请重新提交';
        }

        if(isset($post['image']) && $post['image']){
            foreach ($post['image'] as $image_val){
                $image[]= ['uri'=>$image_val,'goods_comment_id'=>$comment_id];
            }
            Db::name('goods_comment_image')->insertAll($image);
        }
        Db::name('order_goods')->where('id',$post['id'])->update(['is_comment'=>1]);

        return true;


    }
    //分类列表
    public static function category($get){

        $all_count = Db::name('goods_comment')
                    ->where(['del'=>0,'status'=>1,'goods_id'=>$get['goods_id']])
                    ->where('status',1)
                    ->count();

        $good_count = Db::name('goods_comment')
                    ->where(['del'=>0,'status'=>1,'goods_id'=>$get['goods_id']])
                    ->where('goods_comment','>',3)
                    ->count();

        $medium_count = Db::name('goods_comment')
                        ->where(['del'=>0,'status'=>1,'goods_id'=>$get['goods_id']])
                        ->where('goods_comment','=',3)
                        ->count();

        $bad_count = Db::name('goods_comment')
                    ->where(['del'=>0,'status'=>1,'goods_id'=>$get['goods_id']])
                    ->where('goods_comment','<',3)
                    ->count();

        $image_count = Db::name('goods_comment')->alias('g')
                    ->rightJoin('goods_comment_image i','i.goods_comment_id=g.id')
                    ->where(['del'=>0,'status'=>1,'goods_id'=>$get['goods_id']])
                    ->where('uri','not null')
                    ->group('goods_comment_id')
                    ->count();
        $avg_score = Db::name('goods_comment')
                    ->where(['del'=>0,'status'=>1,'goods_id'=>$get['goods_id']])
                    ->avg('goods_comment');


        if($all_count == 0){
            $score ='100%';
            $avg_score = 5;
        }else{
            $score = round($good_count/$all_count*100,2).'%';
            $avg_score = round($avg_score,1);
        }

        return ['comment'=>
            [
                [
                    'name'  => '全部',
                    'id'    => 0,
                    'count' => $all_count
                ],
                [
                    'name'  => '晒图',
                    'id'    => 1,
                    'count' => $image_count
                ],
                [
                    'name'  => '好评',
                    'id'    => 2,
                    'count' => $good_count
                ],
                [
                    'name'  => '中评',
                    'id'    => 3,
                    'count' => $medium_count
                ],
                [
                    'name'  => '差评',
                    'id'    => 4,
                    'count' => $bad_count
                ]
            ] ,
            'percent'   => $score,
            'avg_score' => $avg_score,



        ];
    }
    //订单商品列表
    public static function getOrderGoods($type,$user_id,$page,$size){
        $where[] = ['O.order_status','=',Order::STATUS_FINISH];
        $where[] = ['O.del','=',0];
        $where[] = ['O.user_id','=',$user_id];

        if($type == 1) {
            $where[] = ['is_comment', '=',0];
        }else{
            $where[] = ['is_comment', '=',1];
        }
        $order_goods_count = Db::name('order')->alias('O')
                        ->join('order_goods OG','O.id = OG.order_id')
                        ->join('goods G','OG.goods_id = G.id')
                        ->where($where)
                        ->count();

        $order_goods_list =  Db::name('order')->alias('O')
                    ->join('order_goods OG','O.id = OG.order_id')
                    ->join('goods G','OG.goods_id = G.id')
                    ->where($where)
                    ->field('OG.id,OG.goods_id,item_id,OG.goods_price,goods_num,G.image,G.name as goods_name,OG.goods_info')
                    ->page($page,$size)
                    ->order('O.id desc')
                    ->select();


        $goods_comment = [];
        if($type == 2 && $order_goods_list) {
            $order_goods_ids = array_column($order_goods_list, 'id');

            $goods_comment_list = Db::name('goods_comment')
                ->where(['order_goods_id' => $order_goods_ids, 'del' => 0])
                ->column('goods_comment,comment,create_time,id', 'order_goods_id');

        }
        foreach ($order_goods_list as &$goods) {
            $goods['image'] = UrlServer::getFileUrl($goods['image']);
            $goods['goods_comment'] = '';
            $goods['comment'] = '';
            $goods['create_time'] = '';
            if (isset($goods_comment_list[$goods['id']])) {
                $goods_comment = $goods_comment_list[$goods['id']];

                $goods['goods_comment'] = $goods_comment['goods_comment'];
                $goods['comment'] = $goods_comment['comment'] ?: '此用户没有填写评论';
                $goods['create_time'] = date('Y-m-d H:i:s', $goods_comment['create_time']);
                $goods['comment_image'] = Db::name('goods_comment_image')->where(['goods_comment_id' => $goods_comment['id']])->column('uri');

                foreach ($goods['comment_image'] as &$uri){
                    $uri = UrlServer::getFileUrl($uri);
                }
            }

            //商品规格名称
            $goods_snapshot = json_decode($goods['goods_info'], true);
            $goods['spec_value_str'] = $goods_snapshot['spec_value_str'];
            
            unset($goods['goods_info']);
        }
        $more = is_more($order_goods_count, $page, $size);  //是否有下一页

        return [
            'list' => $order_goods_list,
            'count' => $order_goods_count,
            'page_no' => $page,
            'page_size' => $size,
            'more' => $more
        ];
    }

    //商品评论
    public static function getGoods($id){
        $goods = Db::name('order_goods')->alias('og')
                ->join('goods g','og.goods_id = g.id')
                ->where(['og.id'=>$id,'del'=>0,'og.is_comment'=>0])
                ->field('og.id,g.id as goods_id,name,image,og.goods_price,goods_num,og.goods_info,og.total_pay_price,og.total_price')
                ->find();
        if($goods){
            $goods['image'] = UrlServer::getFileUrl( $goods['image']);
            $goods_snapshot = json_decode($goods['goods_info'], true);
            $goods['spec_value_str'] = $goods_snapshot['spec_value_str'];
            unset($goods['goods_info']);
        }
        return $goods;
    }

}