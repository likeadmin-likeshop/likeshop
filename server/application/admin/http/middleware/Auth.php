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


namespace app\admin\http\middleware;

use app\admin\cache\RoleNoneAuthCacheUris;

class Auth
{
    /**
     * 权限控制
     * @param $request
     * @param \Closure $next
     * @return mixed|\think\response\Redirect
     */
    public function handle($request, \Closure $next)
    {

        //未登录的无需权限控制
        if (empty(session('admin_info'))) {
            return $next($request);
        }

        //如果id为1，视为系统超级管理，无需权限控制
        if (session('admin_info.id') == 1) {
            return $next($request);
        }

        //权限控制判断
        $controller_action = $request->controller() . '/' . $request->action();////当前访问
        $controller_action = strtolower($controller_action);
        $auth_cache = new RoleNoneAuthCacheUris(session('admin_info.role_id'), ['role_id' => session('admin_info.role_id')]);
        $none_auth = $auth_cache->set(3600);
        if (empty($none_auth) || !in_array($controller_action, $none_auth)) {
            //通过权限控制
            return $next($request);
        }
        return redirect('dispatch/dispatch_error',['msg' => '权限不足，无法访问']);
    }
}