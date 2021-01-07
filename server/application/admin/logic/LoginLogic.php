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

use app\admin\server\LoginServer;
use app\common\server\ConfigServer;
use think\Db;

class LoginLogic
{

    /**
     * 登录
     * @param $post
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public static function login($post)
    {
        //session激活
        $admin_info = Db::name('admin')
            ->field(['id', 'account', 'name', 'role_id'])
            ->where(['account' => $post['account'], 'del' => 0])
            ->find();
        session('admin_info', $admin_info);
        LoginServer::setState($admin_info['id']);
        //登录信息更新
        $ip = request()->ip();
        $time = time();
        Db::name('admin')
            ->where(['account' => $post['account'], 'del' => 0])
            ->update(['login_ip' => $ip, 'login_time' => $time]);

        //记住账号
        if (isset($post['remember_account']) && $post['remember_account'] == 'on') {
            \think\facade\Cookie::set('account', $post['account']);
        } else {
            \think\facade\Cookie::delete('account');
        }
    }

    /**
     * 登出
     * @param $admin_id
     */
    public static function logout($admin_id)
    {
        if ($admin_id) {
            //清除登录标识
            LoginServer::setState($admin_id, false);
        }
        session(null);
    }

    /**
     * 获取登录页面配置
     * @return array
     */
    public static function config()
    {
        $config = [
            'company_name' => ConfigServer::get('copyright', 'company_name'),
            'number' => ConfigServer::get('copyright', 'number'),
            'link' => ConfigServer::get('copyright', 'link'),
            'admin_image' => ConfigServer::get('website', 'admin_image'),
            'admin_title' => ConfigServer::get('website', 'admin_title'),
            'name' => ConfigServer::get('website', 'name'),
            'login_logo' => ConfigServer::get('website', 'login_logo'),
            'slogan' => ConfigServer::get('website', 'slogan'),
            'slogan_status' => ConfigServer::get('website', 'slogan_status'),
        ];
        return $config;
    }

}