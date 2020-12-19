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
namespace app\api\logic;
use app\common\model\Menu_;
use app\common\server\UrlServer;
use think\Db;

class MenuLogic{
    public static function getMenu($client,$type){

        $list = Db::name('menu_decorate')
                ->where(['client'=>$client,'decorate_type'=>$type,'del'=>0,'is_show'=>1])
                ->field('name,image,link_type,link_address')
                ->order('sort desc')
                ->select();

        $menu_list = [];
        $link_scene = 'link'.$client;
        foreach ($list as $key => $menu){
            //处理图标
            $menu_content = Menu_::getMenuContent($type,$menu['link_address']);
            $menu_list[] = [
                'name'       => $menu['name'],
                'image'      => UrlServer::getFileUrl($menu['image']),
                'link'       => $menu_content['link'][$link_scene] ?? $menu['link_address'],
                'is_tab'     => $menu_content['is_tab'] ?? '',
                'link_type'  => $menu_content['type'] ?? $menu['link_type'],
            ];

        }
        return $menu_list;
    }
}