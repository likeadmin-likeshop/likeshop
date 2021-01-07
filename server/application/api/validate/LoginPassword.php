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


use app\common\logic\SmsLogic;
use think\Validate;

class LoginPassword extends Validate
{
    protected $regex = [ 'password' => '^(?=.*[a-zA-Z0-9].*)(?=.*[a-zA-Z\\W].*)(?=.*[0-9\\W].*).{6,20}$'];
    protected $rule = [
        'mobile'=>'require|mobile',
        'password'=>'require|confirm:password|regex:password',
        'repassword'=>'require|confirm:password',
        'code'=>'require|checkCode',
    ];

    protected $message = [
        'mobile.require'=>'请输入手机号',
        'password.require'=>'请输入密码',
        'password.regex'=>'密码格式错误',
        'repassword.require'=>'请再次输入密码',
        'repassword.confirm'=>'两次密码输入不一致',
        'code.require'=>'请输入验证码',
        'mobile.mobile'=>'非有效手机号码'
    ];

    public static function checkCode($value,$rule,$data){
        $sms_logic = new SmsLogic($data['message_key'],$data['mobile'],$value);
        $check = $sms_logic->checkCode();
        //检查验证码是否正确
        if($check !== true){
            return $check;
        }
        //标记验证码已验证
        $sms_logic->cancelCode();
        return true;
    }

    public function sceneCode()
    {
        $this->only(['mobile','code']);
    }


    public function sceneAdd()
    {
        $this->only(['mobile','password']);
    }


    public function sceneForget()
    {

    }

}