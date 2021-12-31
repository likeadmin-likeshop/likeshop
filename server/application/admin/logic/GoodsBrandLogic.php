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
use think\facade\Cache;

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
            ->order(['sort' => 'desc', 'id'=>'desc'])
            ->select();

        foreach ($lists as &$item) {
            $item['image'] = UrlServer::getFileUrl($item['image']);
        }

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
        Cache::rm('goods_category_1');
        Cache::rm('goods_category_2');
        return Db::name('goods_brand')->insert($data);
    }

    //获取单个品牌
    public static function getGoodsBrand($id)
    {
        $detail =  Db::name('goods_brand')->where(['id' => $id])->find();
        $detail['abs_image'] = UrlServer::getFileUrl($detail['image']);
        return $detail;

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
        Cache::rm('goods_category_1');
        Cache::rm('goods_category_2');
        return Db::name('goods_brand')->where(['id' => $id])->update($update_data);
    }

    //删除品牌
    public static function del($id)
    {
        $update_data = [
            'del' => 1,
            'update_time' => time(),
        ];
        Cache::rm('goods_category_1');
        Cache::rm('goods_category_2');
        return Db::name('goods_brand')->where(['del' => 0, 'id' => $id])->update($update_data);
    }
    //更新品牌状态
    public static function switchStatus($data)
    {
        $update_data = [
            'is_show'       => $data['status'],
            'update_time'   => time(),
        ];
        Cache::rm('goods_category_1');
        Cache::rm('goods_category_2');
        return Db::name('goods_brand')->where(['del' =>0,'id' =>$data['id']])->update($update_data);
    }
    //获取品牌列表
    public static function getGoodsBrandList(){
        return Db::name('goods_brand')->where(['del'=>0])->field('id,name')->select();
    }
}