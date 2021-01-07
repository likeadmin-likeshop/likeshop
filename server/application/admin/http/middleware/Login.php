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

namespace app\admin\http\middleware;


use app\admin\logic\LoginLogic;
use app\admin\server\LoginServer;

class Login
{
    /**
     * 登录验证
     * @param $request
     * @param \Closure $next
     * @return mixed|\think\response\Redirect
     */
    public function handle($request, \Closure $next)
    {

        //系统拦截强制下线
        if (session('admin_info') && (LoginServer::isLogin(session('admin_info.id'))) == false) {
            LoginLogic::logout(session('admin_info.id'));
        }

        //已登录的访问登录页
        if (session('admin_info') && !$this->isNotNeedLogin($request)) {
            return $next($request);
        }

        //已登录的访问非登录页
        if (session('admin_info') && $this->isNotNeedLogin($request)) {
            return redirect('index/index');
        }

        //未登录的访问非登录页
        if (!session('admin_info') && $this->isNotNeedLogin($request)) {
            return $next($request);
        }

        //未登录访问登录页
        return redirect('account/login');
    }


    /**
     * 是否免登录验证
     * @param $request
     * @return bool
     */
    private function isNotNeedLogin($request)
    {
        $data = app()->controller($request->controller())->like_not_need_login;
        if (empty($data)) {
            return false;
        }
        $action = strtolower($request->action());
        $data = array_map('strtolower', $data);
        if (!in_array($action, $data)) {
            return false;
        }
        return true;
    }
}
