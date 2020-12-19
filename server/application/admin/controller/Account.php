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
                $this->success('登录成功');
            }
            $this->error($result);
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