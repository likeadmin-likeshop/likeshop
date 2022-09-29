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
