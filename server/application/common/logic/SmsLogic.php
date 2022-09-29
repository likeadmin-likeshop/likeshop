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

namespace app\common\logic;

use app\common\model\NoticeSetting;
use app\common\model\SmsLog;

class SmsLogic
{
    protected $message_key = '';
    protected $mobile = '';
    protected $code = '';
    protected $sms = '';
    protected $indate = 300;//todo 验证码有效期

    public function __construct($key, $mobile, $code)
    {
        $this->message_key = NoticeSetting::SMS_SCENE[$key];
        $this->mobile = $mobile;
        $this->code = $code;
        $sms_Log = new SmsLog();
        $sms = $sms_Log
            ->where(['message_key' => $this->message_key, 'mobile' => $this->mobile, 'is_verify' => 0])
            ->order('id desc')
            ->field('id,code,send_time')
            ->find();

        $this->sms = $sms;
    }

    //检查验证码
    public function checkCode()
    {
        if (!isset($this->sms) || $this->sms->code !== $this->code) {
            return '验证码错误';
        }
        $send_time = $this->sms->getData('send_time');

        $now = time();
        if ($this->sms->code === $this->code && $send_time + $this->indate < $now) {
            return '验证码已过期';
        }
        return true;

    }

    //标记已验证
    public function cancelCode()
    {
        if (empty($this->sms)) {
            return false;
        }
        unset($this->sms->send_time);
        $this->sms->is_verify = 1;
        $this->sms->update_time = time();
        return $this->sms->save();
    }
}