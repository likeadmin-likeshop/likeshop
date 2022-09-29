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
            'web_favicon' => ConfigServer::get('website', 'web_favicon'),
        ];
        return $config;
    }

}