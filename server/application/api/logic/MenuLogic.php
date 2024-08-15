<?php
// +----------------------------------------------------------------------
// | likeshop开源商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop系列产品在gitee、github等公开渠道开源版本可免费商用，未经许可不能去除前后端官方版权标识
// |  likeshop系列产品收费版本务必购买商业授权，购买去版权授权后，方可去除前后端官方版权标识
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | likeshop团队版权所有并拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshop.cn.team
// +----------------------------------------------------------------------
namespace app\api\logic;

use app\common\model\Menu_;
use app\common\model\SelffetchVerifier;
use app\common\server\ConfigServer;
use app\common\server\UrlServer;
use think\Db;

class MenuLogic
{
    public static function getMenu($type,$user_info)
    {
        $list = Db::name('menu_decorate')
            ->where(['decorate_type' => $type, 'del' => 0, 'is_show' => 1])
            ->field('name,image,link_type,link_address')
            ->order('sort desc')
            ->select();

        $menu_list = [];

        $is_open = ConfigServer::get('distribution', 'is_open', 1);

        foreach ($list as $key => $menu) {
            //未登录时不显示核销订单入口，登陆用户非核销员时不显示核销订单入口
            if (($menu['link_address'] == Menu_::centre_writeoff_order && empty($user_info)) || ($menu['link_address'] == Menu_::centre_writeoff_order && !empty($user_info) && empty(SelffetchVerifier::where(['user_id'=>$user_info['id'],'status'=>1,'del'=>0])->select()->toArray()))) {
                continue;
            }

            $menu_content = Menu_::getMenuContent($type, $menu['link_address']);

            if ($menu_content && !$is_open && 2 === $menu_content['menu_type']) {
                continue;
            }
            //处理图标
            $menu_list[] = [
                'name' => $menu['name'],
                'image' => UrlServer::getFileUrl($menu['image']),
                'link' => $menu_content['link'] ?? $menu['link_address'],
                'is_tab' => $menu_content['is_tab'] ?? '',
                'link_type' => $menu_content['link_type'] ?? $menu['link_type'],
            ];
        }
        return $menu_list;
    }
}