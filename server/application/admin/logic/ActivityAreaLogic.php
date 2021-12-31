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

class ActivityAreaLogic{
    /**
     * note 活动专区列表
     * create_time 2020/11/24 11:23
     */
    public static function areaLists(){
        $count = Db::name('activity_area')
                ->where(['del'=>0])
                ->count();

        $lists = Db::name('activity_area')
                ->where(['del'=>0])
                ->select();
        foreach ($lists as &$item){
            $item['status_desc'] = '下架';
            $item['status'] && $item['status_desc'] = '上架';
            $item['image'] = UrlServer::getFileUrl($item['image']);
        }

        return ['count'=>$count,'lists'=>$lists];

    }
    /**
     * note 活动专区商品
     * create_time 2020/11/24 11:24
     */
    public static function goodsLists($get){
        $where[] = ['AG.del','=',0];
        $where[] = ['AA.del','=',0];
        if(isset($get['name']) && $get['name']){
            $where[] = ['G.name','like','%'.$get['name'].'%'];
        }
        if(isset($get['activity_id']) && $get['activity_id']){
            $where[] = ['AA.id','=',$get['activity_id']];
        }

        $count = Db::name('activity_goods')->alias('AG')
                ->join('activity_area AA','AG.activity_id = AA.id')
                ->join('goods G','AG.Goods_id = G.id')
                ->where($where)
                ->count();


        $lists =  Db::name('activity_goods')->alias('AG')
                ->join('activity_area AA','AG.activity_id = AA.id')
                ->join('goods G','AG.Goods_id = G.id')
                ->where($where)
                ->field('AG.id,AG.goods_id,AG.activity_id,AA.name,AA.status,G.id,G.name,G.image')
                ->order('AG.id desc')
                ->select();
        $activity_lisst = Db::name('activity_area')
                    ->where(['del'=>0])
                    ->column('name,status','id');
        foreach ($lists as &$item){
            $item['activity_name'] = '';
            $item['status_desc'] = '下架';

            if(isset($activity_lisst[$item['activity_id']])){
                $item['activity_name'] = $activity_lisst[$item['activity_id']]['name'];
                $activity_lisst[$item['activity_id']]['status'] && $item['status_desc'] = '上架';
            }

        }

        return ['count'=>$count,'lists'=>$lists];
    }

    /**
     * note 获取全部的活动专区
     * create_time 2020/11/24 12:01
     */
    public static function getActivityList(){
        return Db::name('activity_area')
                ->where(['del'=>0])
                ->column('name','id');

    }
    /**
     * note 添加活动专区
     * create_time 2020/11/24 12:01
     */
    public static function addActivity($post){
        $data = [
            'name'          => $post['name'],
            'title'         => $post['title'],
            'image'         => $post['image'],
            'status'        => $post['status'],
            'del'           => 0,
            'create_time'   => time(),
        ];
        return Db::name('activity_area')->insert($data);
    }
    /**
     * note 编辑活动专区
     * create_time 2020/11/24 12:02
     */
    public static function editActivity($post){
        $data = [
            'name'          => $post['name'],
            'title'         => $post['title'],
            'image'         => $post['image'],
            'status'        => $post['status'],
            'update_time'   => time(),
        ];
        return Db::name('activity_area')->where(['id'=>$post['id']])->update($data);
    }
    /**
     * note 删除活动专区
     * create_time 2020/11/24 12:02
     */
    public static function delActivity($id){
        Db::name('activity_area')->where(['id'=>$id])->update(['update_time'=>time(),'del'=>1]);
        Db::name('activity_goods')->where(['activity_id'=>$id])->update(['update_time'=>time(),'del'=>1]);
        return true;

    }

    /**
     * note 获取活动商品详情
     * create_time 2020/11/25 10:40
     */
    public static function getActivity($id){
        $activity = Db::name('activity_area')->where(['id'=>$id])->find();
        $activity['image'] = UrlServer::getFileUrl($activity['image']);
        return $activity;
    }

    /**
     * note 添加活动商品
     * create_time 2020/11/25 10:40
     */
    public static function addGoods($post)
    {
        return Db::name('activity_goods')->insert([
            'activity_id'   => $post['activity_id'],
            'goods_id'      => $post['goods_id'][0],
            'del'           => 0,
            'create_time'   => time(),
        ]);
    }

    /**
     * note 编辑活动商品
     * create_time 2020/11/25 10:40
     */
    public static function editGoods($post){
        $new = time();
        $update_data = [
            'activity_id'       => $post['activity_id'],
            'update_time'       => $new,
        ];

        return Db::name('activity_goods')
                ->where(['id'=>$post['id'],'activity_id'=>$post['activity_id']])
                ->update($update_data);

    }

    /**
     * note 删除活动商品
     * create_time 2020/11/25 10:40
     */
    public static function delGoods($goods_id,$activity_id){
        $update_data = [
            'update_time'   => time(),
            'del'           => 1,
        ];
        return Db::name('activity_goods')->where(['del'=>0,'goods_id'=>$goods_id,'activity_id'=>$activity_id])->update($update_data);
    }

    /**
     * note 获取活动商品详情
     * create_time 2020/11/25 10:41
     */
    public static function getActivityGoods($goods_id,$activity_id){
        $activity_list =  Db::name('activity_goods')->alias('AG')
                ->join('goods_item GI','AG.item_id = GI.id')
                ->where(['activity_id'=>$activity_id,'AG.goods_id'=>$goods_id])
                ->field('AG.*,GI.price,GI.spec_value_str,GI.image,GI.price')
                ->select();

        $goods_id = $activity_list[0]['goods_id'];
        $goods = Db::name('goods')->where(['del'=>0,'id'=>$goods_id])->field('image,name')->find();

        foreach ($activity_list as &$item){
            $item['name'] = $goods['name'];
            if(empty($item['image'])){
                $item['image'] = $goods['image'];
            }
        }
        return $activity_list;
    }
}