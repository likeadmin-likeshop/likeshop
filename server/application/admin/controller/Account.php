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


namespace app\admin\controller;


use app\admin\logic\LoginLogic;
use app\admin\validate\Login;
use think\facade\Url;

class Account extends AdminBase
{

    public $like_not_need_login = ['login'];

    /**
     * 登录
     * @return mixed
     */
    public function login()
    {
        if ($this->request->isAjax()) {
            $post = input('post.');
            $result = $this->validate($post, 'app\admin\validate\Login');
            if ($result === true) {
                LoginLogic::login($post);
                $this->_success('登录成功');
            }
            $this->_error($result);
        }
        $this->assign('account', cookie('account'));

        //首页配置
        $this->assign('config', LoginLogic::config());
        return $this->fetch();
    }

    /**
     * 退出登录
     */
    public function logout()
    {
        LoginLogic::logout(session('admin_info.id'));
        $url = Url::build('account/login');
        $this->redirect($url);
    }
}