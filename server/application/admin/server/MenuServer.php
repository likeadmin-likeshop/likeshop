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

// | Author: LikeShop-令狐冲
// +----------------------------------------------------------------------


namespace app\admin\server;


use think\Db;
use think\facade\Cache;
use think\facade\Config;
use think\facade\Url;

class MenuServer
{


    /**
     * 获取菜单
     * @param $role_id
     * @return string
     */
    public static function getMenuHtml($role_id)
    {
        $lists = Db::name('dev_auth')
            ->where(['type' => 1, 'del' => 0, 'disable' => 0])
            ->order(['sort' => 'desc'])
            ->select();


        $none_auth = AuthServer::getRoleNoneAuthIds($role_id);

        $lists = self::setRoleMenu($none_auth, $lists);

        // $lists = self::setSuperiorMenu($lists);

        return self::createHtml(linear_to_tree($lists), true);
    }


    /**
     * 判断菜单配置是否更改
     * @param $menu
     * @param $role_id
     * @return bool
     */
    public static function menuIsUpdate($menu, $role_id)
    {
        $new_meu_md5 = md5($menu);
        $menu_md5 = Cache::get('menu_md5_role_id' . $role_id);
        if ($menu_md5 == $new_meu_md5) {
            return false;
        }
        Cache::set('menu_md5', $new_meu_md5);
        return true;
    }

    /**
     * 设置角色菜单
     * @param $none_auth
     * @param $lists
     * @return mixed
     */
    private static function setRoleMenu(&$none_auth, $lists)
    {
        foreach ($lists as $k => $v) {
            if (in_array($v['id'], $none_auth)) {
                unset($lists[$k]);
            }
        }
        return array_values($lists);
    }


    protected static function createHtml($menu, $max = false)
    {
        //一级菜单
        if ($max) {
            $html = '';
            $choose_class = 'layui-this';
            foreach ($menu as $k => $v) {
                $sub = isset($v['sub']) ? $v['sub'] : [];
                if ($sub) {
                    $html .= '<li data-name="set" class="layui-nav-item"><a href="javascript:;" lay-tips="' . $v['name'] . '" lay-direction="2"><i class="layui-icon ' . $v['icon'] . '"></i><cite>' . $v['name'] . '</cite></a><dl class="layui-nav-child">';
                    $html .= self::createHtml($sub);
                    $html .= '</li>';
                } else {
                    $html .= '<li data-name="set" class="layui-nav-item ' . $choose_class . '"><a href="javascript:;" lay-href="' . self::uri($v['uri']) . '" lay-tips="' . $v['name'] . '" lay-direction="2"><i class="layui-icon ' . $v['icon'] . '"></i><cite>' . $v['name'] . '</cite></a>';
                    $html .= '</dl></li>';
                }
                $choose_class = '';
            }
            return $html;
        }

        //二三级菜单无子菜单
        $html = '';
        foreach ($menu as $k => $v) {
            $sub = isset($v['sub']) ? $v['sub'] : [];
            if ($sub) {
                $html .= '<dd class="layui-nav-itemed"><a href="javascript:;">' . $v['name'] . '<i class="layui-icon ' . $v['icon'] . '"></i></a><dl class="layui-nav-child">';
                $html .= self::createHtml($sub);
                $html .= '</dl></dd>';
            } else {
                $html .= '<dd><a href="javascript:;" lay-href="' . self::uri($v['uri']) . '"><i class="layui-icon ' . $v['icon'] . '"></i>' . $v['name'] . '</a></dd>';
            }
        }
        return $html;
    }


    /**
     * 设置uri
     * @param $uri
     * @return string
     */
    private static function uri($uri)
    {
        if ($uri) {
            return Url::build($uri);
        }
        return '';
    }

}