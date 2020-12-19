<?php
// +----------------------------------------------------------------------
// | LikeShop有特色的全开源社交分销电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 商业用途务必购买系统授权，以免引起不必要的法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | 微信公众号：好象科技
// | 访问官网：http://www.likemarket.net
// | 访问社区：http://bbs.likemarket.net
// | 访问手册：http://doc.likemarket.net
// | 好象科技开发团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | Author: LikeShopTeam
// +----------------------------------------------------------------------

namespace app\admin\logic;
use think\Db;

class GoodsBrandLogic
{
    //列表
    public static function lists($get)
    {
        $where[] = ['del','=',0];

        if(isset($get['name']) && $get['name']){
            $where[] = ['name','like','%'.$get['name'].'%'];
        }

        $count = Db::name('goods_brand')
            ->where($where)
            ->count();
        $lists = Db::name('goods_brand')
            ->where($where)
            ->page($get['page'],$get['limit'])
            ->select();

        return ['count' => $count,'list' => $lists];
    }
    //添加
    public static function add($post)
    {
        $data = [
            'name'              => $post['name'],
            'initial'           => $post['initial'],
            'image'             => $post['image'],
            'sort'              => $post['sort'],
            'is_show'           => $post['is_show'],
            'remark'            => $post['remark'],
            'del'               => 0,
            'create_time'       => time()
        ];
        return Db::name('goods_brand')->insert($data);
    }

    //获取单个品牌
    public static function getGoodsBrand($id)
    {
       return Db::name('goods_brand')->where(['id' => $id])->find();

    }

    //编辑品牌
    public static function edit($post,$id)
    {
        $update_data = [
            'name'              => $post['name'],
            'initial'           => $post['initial'],
            'image'             => $post['image'],
            'sort'              => $post['sort'],
            'is_show'           => $post['is_show'],
            'remark'            => $post['remark'],
            'del'               => 0,
            'update_time'       => time()
        ];

        return Db::name('goods_brand')->where(['id' => $id])->update($update_data);
    }

    //删除品牌
    public static function del($id)
    {
        $update_data = [
            'del' => 1,
            'update_time' => time(),
        ];
        return Db::name('goods_brand')->where(['del' => 0, 'id' => $id])->update($update_data);
    }
    //更新品牌状态
    public static function switchStatus($data)
    {
        $update_data = [
            'is_show'       => $data['status'],
            'update_time'   => time(),
        ];
        return Db::name('goods_brand')->where(['del' =>0,'id' =>$data['id']])->update($update_data);
    }
    //获取品牌列表
    public static function getGoodsBrandList(){
        return Db::name('goods_brand')->where(['del'=>0])->field('id,name')->select();
    }
}