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

namespace app\admin\validate;

use think\Db;
use think\Validate;

class Password extends Validate
{
    protected $rule = [
        'old_password' => 'require|verify',
        'password' => 'require|length:6,16',
        're_password' => 'confirm:password',
    ];

    protected $message = [
        'old_password.require' => '当前密码不能为空',
        'old_password.verify' => '当前密码输入不正确',
        'password.require' => '新密码不能为空',
        'password.length' => '密码长度必须为6到16位之间',
        're_password.confirm' => '两次密码输入不一致',
    ];

    /**
     * 密码验证
     * @param $old_password
     * @param $other
     * @param $data
     * @return bool
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    protected function verify($old_password, $other, $data)
    {
        $admin_info = Db::name('admin')
            ->where(['id' => $data['admin_id']])
            ->find();
        $password = create_password($old_password, $admin_info['salt']);
        if ($password != $admin_info['password']) {
            return false;
        }
        return true;
    }


}