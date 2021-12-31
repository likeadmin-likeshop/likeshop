<?php
// +----------------------------------------------------------------------
// | likeshop100%开源免费商用商城系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 开源版本可自由商用，可去除界面版权logo
// | 商业版本务必购买商业授权，以免引起法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | gitee下载：https://gitee.com/likeshop_gitee
// | github下载：https://github.com/likeshop-github
// | 访问官网：https://www.likeshop.cn
// | 访问社区：https://home.likeshop.cn
// | 访问手册：http://doc.likeshop.cn
// | 微信公众号：likeshop技术社区
// | likeshop团队 版权所有 拥有最终解释权
// +----------------------------------------------------------------------
// | author: likeshopTeam
// +----------------------------------------------------------------------


namespace app\api\validate;

use think\Db;
use think\Validate;
use app\common\logic\SmsLogic;

class Register extends Validate
{
    protected $regex = ['password' => '^(?=.*[a-zA-Z0-9].*)(?=.*[a-zA-Z\\W].*)(?=.*[0-9\\W].*).{6,20}$'];
    protected $rule = [
        'mobile' => 'require|mobile|checkMobile',
        'password' => 'require|confirm:password|regex:password',
        'code' => 'requireIf:check_code,1|checkCode',
    ];

    protected $message = [
        'mobile.require'    => '请输入手机号',
        'password.require'  => '请输入密码',
        'password.regex'    => '密码格式错误',
        'code.requireIf'    => '请输入验证码',
        'mobile.mobile'     => '非有效手机号码'
    ];

    public function checkCode($value, $rule, $data)
    {
        $sms_logic = new SmsLogic('ZCYZ', $data['mobile'], $value);
        $check = $sms_logic->checkCode();
        //检查验证码是否正确
        if ($check !== true) {
            return $check;
        }
        //标记验证码已验证
        $sms_logic->cancelCode();
        return true;
    }


    public function sceneCode()
    {
        $this->only(['mobile', 'code']);
    }


    public function sceneAdd()
    {
        $this->only(['mobile', 'password']);
    }


    public function sceneForget()
    {

    }


    public function checkMobile($value, $data, $rule)
    {
        //检查手机号是否已存在
        $user = Db::name('user')
            ->where('mobile', '=', $value)
            ->find();

        if ($user) {
            return '此手机号已被使用';
        }

        return true;
    }

}