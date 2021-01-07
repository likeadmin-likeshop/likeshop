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

namespace app\api\validate;

use think\Db;
use think\Validate;

class Token extends Validate
{
    protected $rule = [
        'token' => 'require|valid|user',
    ];

    /**
     * User: 意象信息科技 lr
     * Desc: token验证
     * @param $token
     * @param $other
     * @param $data
     * @return bool|string
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    protected function valid($token, $other, $data)
    {
        $session = Db::name('session')
            ->where(['token' => $token])
            ->find();
        if (empty($session)) {
            return '会话失效，请重新登录';
        }
        if ($session['expire_time'] <= time()) {
            return '登录超时，请重新登录';
        }
        return true;
    }

    /**
     * User: 意象信息科技 lr
     * Desc 用户验证
     * @param $token
     * @param $other
     * @param $data
     * @return string
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    protected function user($token, $other, $data)
    {
        $user_id = Db::name('session')
            ->where(['token' => $token])
            ->value('user_id');

        $user_info = Db::name('user')
            ->where(['id' => $user_id, 'del' => 0])
            ->find();
        if (empty($user_info)) {
            return '用户不存在';
        }
        if ($user_info['disable'] == 1) {
            return '用户被禁用';
        }
        return true;
    }


}