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
namespace app\common\behavior;

use app\common\logic\NoticeLogic;
use app\common\model\{NoticeSetting, SmsLog, SmsConfig};
use app\common\server\Alisms;
use app\common\server\TencentSms;
use think\Exception;

class SmsSend
{
    protected $channel = 0;         //发短信渠道[1=阿里短信, 2=腾讯短信]
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
            // 设置短信参数
            $params['scene']  = $params['key'];
            $this->sms_key    = $params['key'];
            $this->sms_params = $params['params'];
            $this->mobile     = $params['mobile'];
            $result           = $this->getSmsConfig($params['key']);
            if ($result !== true) return $result;

            $this->sms_log = new SmsLog();
            $this->setSmsContent();  //短信内容
            $this->setSmsCode();     //短信验证码
            $this->createSmsLog();   //增加短信记录

            //增加通知记录
            $this->notice_id = NoticeLogic::addNoticeLog($params, $this->sms, NoticeSetting::SMS_NOTICE, $this->content);

            if ($this->channel == 1) {
                // 阿里云短信
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
            } elseif ($this->channel == 2) {
                // 腾讯云短信
                $res = (new TencentSms($this->config))
                    ->setMobile($this->mobile)
                    ->setTemplateCode($this->sms['template_code'])
                    ->setTemplateParam($this->handleTcParams())
                    ->sendSms();

                if (isset($res['SendStatusSet']) && $res['SendStatusSet'][0]['Code'] == 'Ok') {
                    $send_status = SmsLog::send_success;
                    $this->updateSmsLog($send_status, $res);
                    return true;
                } else {
                    $send_status = SmsLog::send_fail;
                    $this->updateSmsLog($send_status, $res);
                    $message = $res['SendStatusSet'][0]['Message'] ?? json_encode($res);
                    throw new Exception('短信配置错误：' . $message);
                }
            }

            throw new Exception('短信渠道不存在');
        } catch (\Exception $e) {
            $this->updateSmsLog(SmsLog::send_fail, $e->getMessage());
            NoticeLogic::updateNotice($this->notice_id,  $e->getMessage());
        }
    }

    /**
     * Notes: 获取短信配置 (场景是否开启)
     * @param $scene (场景编号)
     * @return bool|string
     */
    public function getSmsConfig($scene)
    {
        // 短信是否开启
        $able_send    = config('project.sms');
        $this->config = SmsConfig::get(['status' => 1]);
        if (!$this->config || true != $able_send) {
            return '短信功能未开启';
        }

        // 获取短信内容
        $this->channel  = $this->config['id'];
        $sms_scene      = NoticeSetting::where('scene', $scene)->find();
        $this->sms      = $sms_scene['sms_notice'];
        $this->variable = $sms_scene['variable'];
        if (!$this->sms) { return '短信模板不存在'; }
        if ($this->sms['status'] == 0) { return '相关通知未开启'; }

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



    /**
     * @notes 腾讯云参数
     * @return array
     * @author 段誉
     * @date 2021/8/4 14:10
     */
    public function handleTcParams()
    {
        //腾讯云特殊处理
        $arr = [];
        $content = $this->sms['content'];
        foreach ($this->sms_params as $item => $val) {
            $search = '{' . $item . '}';
            if(strpos($content, $search) !== false
                && !in_array($item, $arr)
            ) {
                //arr => 获的数组[nickname, order_sn] //顺序可能是乱的
                $arr[] = $item;
            }
        }

        //arr2 => 获得数组[nickname, order_sn] //调整好顺序的变量名数组
        $arr2 = [];
        if (!empty($arr)) {
            foreach ($arr as $v) {
                $key = strpos($content, $v);
                $arr2[$key] = $v;
            }
        }
        //格式化 arr2 => 以小到大的排序的数组
        ksort($arr2);
        $arr3 = array_values($arr2);

        //arr4 => 获取到变量数组的对应的值 [mofung, 123456789]
        $arr4 = [];
        foreach ($arr3 as $v2) {
            if(isset($this->sms_params[$v2])) {
                $arr4[] = $this->sms_params[$v2];
            }
        }
        return $arr4;
    }

}