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