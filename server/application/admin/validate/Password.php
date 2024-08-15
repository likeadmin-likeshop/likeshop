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