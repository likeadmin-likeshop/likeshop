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
use app\common\model\Client_;
use think\Db;
use think\Validate;

class ChangeMobile extends Validate
{
    protected $rule = [
        'client' => 'require',
        'mobile' => 'require|mobile',
        'new_mobile' => 'require|mobile|checkMobile',
    ];

    protected $message = [
        'mobile.require' => '参数缺失',
        'mobile.mobile' => '请填写正确的手机号',
        'new_mobile.mobile' => '请填写正确的手机号',
        'new_mobile.require' => '请填写手机号',
        'client' => '参数缺失',
    ];


    public function sceneChange()
    {
        $this->only(['client', 'mobile', 'new_mobile']);
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
        if ($data['client'] != Client_::mnp) {

            if (!isset($data['code'])) {
                return '请填写验证码';
            }

            $sms_logic = new SmsLogic($data['message_key'], $data['mobile'], $data['code']);
            $check = $sms_logic->checkCode();

            //检查验证码是否正确
            if ($check !== true) {
                return $check;
            }

            //标记验证码已验证
            $sms_logic->cancelCode();
            return true;
        }

        return true;
    }
}