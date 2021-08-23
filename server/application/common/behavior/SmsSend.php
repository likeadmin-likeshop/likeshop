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
namespace app\common\behavior;

use app\common\logic\NoticeLogic;
use app\common\model\{NoticeSetting, SmsLog, SmsConfig};
use app\common\server\Alisms;
use think\Exception;

class SmsSend
{
    protected $sms_key = '';        //短信KEY
    protected $mobile = '';         //发送手机号码
    protected $sms_params = '';     //发送参数
    protected $config = '';         //短信配置
    protected $code = '';           //验证码（短信key为注册、找回密码）
    protected $sms = '';            //短信内容
    protected $content = '';        //短信准备发送内容
    protected $sms_log = '';        //短信记录model

    protected $notice_id = null; //通知记录id

    public function run($params)
    {
        try{
            $params['scene'] = $params['key'];
            $this->sms_key = $params['key'];
            $this->sms_params = $params['params'];
            $this->mobile = $params['mobile'];
            $result = $this->getSmsConfig($params['key']);

            if (true !== $result) {
                return $result;
            }
            $this->sms_log = new SmsLog();
            //短信内容
            $this->setSmsContent();
            //短信验证码
            $this->setSmsCode();
            //增加短信记录
            $this->createSmsLog();

            //增加通知记录
            $this->notice_id = NoticeLogic::addNoticeLog($params, $this->sms, NoticeSetting::SMS_NOTICE, $this->content);

            $alisms = new Alisms($this->config);
            $res = $alisms->setMobile($this->mobile)
                ->setTemplateCode($this->sms['template_code'])
                ->setTemplateParam($this->sms_params)
                ->sendSms();

            if (isset($res['Code']) && $res['Code'] == 'OK') {
                $send_status = SmsLog::send_success;
                $this->updateSmsLog($send_status, $res);
                return true;
            } else {
                $send_status = SmsLog::send_fail;
                $this->updateSmsLog($send_status, $res);
                $message = $res['Message'] ?? $res;
                throw new Exception('短信配置错误：' . $message);
            }

        } catch (\Exception $e) {
            NoticeLogic::updateNotice($this->notice_id,  $e->getMessage());
        }
    }

    /**
     * Notes:获取短信配置
     */
    public function getSmsConfig($scene)
    {
        $able_send = config('project.sms');
        $this->config = SmsConfig::get(['status' => 1]);
        //短信是否开启
        if (!$this->config || true != $able_send) {
            return '短信功能未开启';
        }
        //获取短信内容
        $sms_scene = NoticeSetting::where('scene', $scene)->find();
        $this->sms = $sms_scene['sms_notice'];
        $this->variable = $sms_scene['variable'];
        if (!$this->sms) {
            return '短信模板不存在';
        }
        if ($this->sms['status'] == 0) {
            return '相关通知未开启';
        }
        return true;
    }

    /**
     * Notes:短信内容
     */
    public function setSmsContent()
    {
        $this->content = $this->sms['content'];
        foreach ($this->sms_params as $item => $val) {
            $search_replace = '{' . $item . '}';
            $this->content = str_replace($search_replace, $val, $this->content);
        }
    }

    /**
     * Notes:是否需要短信验证码
     */
    public function setSmsCode()
    {
        if (in_array($this->sms_key, NoticeSetting::NOTICE_NEED_CODE)) {
            $code = array_intersect_key($this->sms_params, $this->variable);
            if ($code) $this->code = array_shift($code);
        }
    }

    /**
     * Notes:记录短信日志
     */
    public function createSmsLog()
    {
        $this->sms_log->message_key = $this->sms_key;
        $this->sms_log->mobile = $this->mobile;
        $this->sms_log->content = $this->content;
        $this->sms_log->code = $this->code;
        $this->sms_log->send_status = SmsLog::send_ing;
        $this->sms_log->send_time = time();
        $this->sms_log->create_time = time();
        $this->sms_log->save();
    }

    /**
     * Notes:更新短信状态（发送成功或发送失败）
     * @param $send_status int 短信状态
     * @param $result int 发送返回内容
     */
    public function updateSmsLog($send_status, $result)
    {
        $this->sms_log->send_status = $send_status;
        $this->sms_log->results = json_encode($result);
        $this->sms_log->save();
    }

}