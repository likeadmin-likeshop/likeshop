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
// | Author: LikeShop-令狐冲
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
        return redirect('dispatch/_error',['msg' => '权限不足，无法访问']);
    }
}