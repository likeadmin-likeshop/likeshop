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


namespace app\admin\server;


use app\admin\cache\LoginStateCache;

class LoginServer
{

    public static function setState($admin_id, $login = true)
    {
        //登录标识，该标示消失，自动下线
        $login_ctrl = new LoginStateCache($admin_id);
        if ($login) {
            $login_ctrl->set();
        } else {
            $login_ctrl->del();
        }
    }

    /**
     * 判断是否登录中
     * @param $admin_id
     * @return bool
     */
    public static function isLogin($admin_id)
    {
        $login_state = new LoginStateCache($admin_id);
        return $login_state->isEmpty() ? false : true;
    }

}