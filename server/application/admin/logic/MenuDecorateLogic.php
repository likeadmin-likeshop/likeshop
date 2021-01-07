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
namespace app\admin\logic;
use app\common\model\Menu_;
use think\Db;

class MenuDecorateLogic{
    /*
     * 获取列表
     */
    public static function lists($client,$type){
        $where[] = ['del','=',0];
        $where[] = ['client','=',$client];
        $where[] = ['decorate_type','=',$type];

        $count = Db::name('menu_decorate')->where($where)->count();
        $lists = Db::name('menu_decorate')->where($where)->select();
        $link_scene = 'link'.$client;

        foreach ($lists as &$item){
            if($item['link_type'] == 1){
                $content = Menu_::getMenuContent($type,$item['link_address']);
                $item['link_address'] = $content['link'][$link_scene] ?? '';

            }
        }
        return ['count' => $count, 'lists' => $lists];
    }
    /*
     * 新增
     */
    public static function add($post){
        $link_address = $post['menu'];
        if($post['link_type'] == 2){
            $link_address = $post['url'];
        }
        $time = time(); //当前时间截
        $data = [
            'name'          => $post['name'],
            'image'         => $post['image'],
            'client'        => $post['client'],
            'decorate_type' => $post['decorate_type'],
            'link_type'     => $post['link_type'],
            'link_address'  => $link_address,
            'sort'          => $post['sort']?:0,
            'update_time'   => $time,
            'create_time'   => $time,
        ];
        return Db::name('menu_decorate')->insert($data);
    }

    /*
     * 编辑菜单
     */
    public static function edit($post){
        $link_address = $post['menu'];
        if($post['link_type'] == 2){
            $link_address = $post['url'];
        }
        $time = time(); //当前时间截
        $data = [
            'name'          => $post['name'],
            'image'         => $post['image'],
            'decorate_type' => $post['decorate_type'],
            'link_type'     => $post['link_type'],
            'link_address'  => $link_address,
            'sort'          => $post['sort']?:0,
            'update_time'   => $time,
        ];
        return Db::name('menu_decorate')->where(['id'=>$post['id']])->update($data);
    }
    /*
     * 删除菜单
     */
    public static function del($id){
        $data= [
            'del'           =>1,
            'update_time'   =>time()
        ];
        return Db::name('menu_decorate')->where(['id'=>$id])->update($data);
    }
    /*
     * 批量删除菜单
     */
    public static function batchDelMenuDecorate($ids){
        $data = [
            'del'           => 1,
            'update_time'   => time()
        ];

        return Db::name('menu_decorate')->where(['id'=>$ids])->update($data);
    }
    /*
     * 获取菜单
     */
    public static function getMenuDecorate($id){
        return Db::name('menu_decorate')->where(['id'=>$id])->find();
    }
}