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

use app\common\logic\SmsLogic;
use app\common\model\Client_;
use think\Db;
use think\Validate;

class ChangeMobile extends Validate
{
    protected $rule = [
        'client'        => 'require|in:'. Client_::oa . ',' . Client_::ios . ',' . Client_::android. ',' .Client_::pc. ','. Client_::h5,
        'mobile'        => 'require|mobile',
        'new_mobile'    => 'require|mobile|checkMobile',
    ];

    protected $message = [
        'mobile.require'        => '参数缺失',
        'mobile.mobile'         => '请填写正确的手机号',
        'new_mobile.mobile'     => '请填写正确的手机号',
        'new_mobile.require'    => '请填写手机号',
        'client.require'        => '参数缺失',
        'client.in'             => '信息错误',
    ];


//    public function sceneChange()
//    {
//        $this->only(['client', 'mobile', 'new_mobile']);
//    }
    public function sceneBinding(){
        $this->only(['client','new_mobile']);
    }


    protected function checkMobile($value, $rule, $data)
    {
        //检查新手机号是否已存在
        $user = Db::name('user')
            ->where([
                ['mobile', '=', $value],
                ['id', '<>', $data['user_id']]
            ])
            ->find();

        if ($user) {
            return '此手机号已被使用';
        }

        //非小程序端,更换手机号需要手机验证码
//        if ($data['client'] == Client_::mnp) {
//            return true;
//        }

        if (!isset($data['code'])) {
            return '请填写验证码';
        }

        $mobile = $data['new_mobile'];
        if(isset($data['action']) && 'change' == $data['action']){
            $mobile = $data['mobile'];
        }
       
        $sms_logic = new SmsLogic($data['message_key'],$mobile, $data['code']);
        $check = $sms_logic->checkCode();

        //检查验证码是否正确
        if ($check !== true) {
            return $check;
        }

        //标记验证码已验证
        $sms_logic->cancelCode();
        return true;



    }
}