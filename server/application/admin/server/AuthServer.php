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


namespace app\admin\server;


use think\Db;

class AuthServer
{

    /**
     * 获取角色没有的权限id
     * @param int $role_id
     * @return array
     */
    public static function getRoleNoneAuthIds($role_id)
    {
        if ($role_id == 0) {
            return [];
        }
        $role_auth = self::getRoleAuth($role_id);
        $all_auth = self::getAllAuth();
        return array_diff($all_auth, $role_auth);
    }

    /**
     * 获取角色没有的uri
     * @param $role_id
     */
    public static function getRoleNoneAuthUris($role_id)
    {
        $ids = self::getRoleNoneAuthIds($role_id);
        $result = Db::name('dev_auth')
            ->where('id', 'in', $ids)
            ->column('uri');
        $data = [];
        foreach ($result as $k => $v) {
            if (empty($v)) {
                continue;
            }
            $data[] = strtolower($v);
        }
        return $data;
    }

    /**
     * 获取角色权限
     * @param $role_id
     * @return array
     */
    private static function getRoleAuth($role_id)
    {
        return Db::name('role_dev_auth_index')
            ->where(['role_id' => $role_id])
            ->column('menu_auth_id');
    }

    /**
     * 获取系统所有权限
     * @return array
     */
    private static function getAllAuth()
    {
        return Db::name('dev_auth')
            ->where(['del' => 0, 'disable' => 0])
            ->column('id');
    }

    /**
     * 获取用户没有权限uri
     * @param $role_id
     * @return array
     */
    public static function getRoleNoneAuthArr($role_id)
    {
        return Db::name('dev_auth')
            ->where('id', 'in', self::getRoleNoneAuthIds($role_id))
            ->column('uri');
    }


}