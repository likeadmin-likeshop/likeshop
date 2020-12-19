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
// | Author: LikeShopTeam
// +----------------------------------------------------------------------

namespace app\admin\validate;

use think\captcha\Captcha;
use think\Db;
use think\facade\Cache;
use think\Validate;

class Admin extends Validate
{

    protected $rule = [
        'account' => 'require|unique:admin',
        'password' => 'require|length:6,16｜confirm:re_password|edit',
        're_password' => 'confirm:password',
        'name' => 'require',
        'role_id' => 'require',
        'disable' => 'require|in:0,1',
    ];

    protected $message = [
        'account.require' => '账号不能为空',
        'account.unique' => '账号名已存在，请使用其他账号名',
        'password.require' => '密码不能为空',
        'password.length' => '密码长度必须为6到16位之间',
        'password.confirm' => '两次密码输入不一致',
        're_password.confirm' => '两次密码输入不一致',
        'name.require' => '名称不能为空',
        'role_id.require' => '请选择角色',
        'disable.require' => '状态错误',
        'disable.in' => '状态错误',
    ];


    /**
     * 添加
     */
    public function sceneAdd()
    {
        $this->remove('password',['edit']);
    }

    /**
     * 编辑
     */
    public function sceneEdit()
    {
        $this->remove('password', ['require', 'password']);

    }

    /**
     * 编辑的时候自定义验证方法
     * @param $password
     * @param $other
     * @param $data
     * @return bool|mixed
     */
    protected function edit($password, $other, $data)
    {
        //不填写验证
        if (empty($password) && empty($data['re_password'])) {
            return true;
        }

        //填写的时候验证
        $password_length = strlen($password);
        if ($password_length < 6 || $password_length > 16) {
            return $this->message['password.length'];
        }
        return true;
    }

}