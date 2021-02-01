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
namespace app\common\behavior;
use app\common\model\{
    SmsLog,
    SmsConfig,
    DevMessage
};
use app\common\server\Alisms;

class SmsSend{
    protected $sms_key = '';        //短信KEY
    protected $mobile = '';         //发送手机号码
    protected $sms_params = '';     //发送参数
    protected $config = '';         //短信配置
    protected $code = '';           //验证码（短信key为注册、找回密码）
    protected $sms = '';            //短信内容
    protected $content = '';        //短信准备发送内容
    protected $sms_log = '';        //短信记录model

    public function run($params)
    {

        $this->sms_key = $params['key'];
        $this->sms_params = $params['params'];
        $this->mobile = $params['mobile'];

        $result = $this->getSmsConfig($params['key']);

        if(true !== $result){
            return $result;
        }
        //短信内容
        $this->setSmsContent();
        //短信验证码
        $this->setSmsCode();
        $this->sms_log = new SmsLog();
        $this->createSmsLog();


        $alisms = new Alisms($this->config);
        $res = $alisms->setMobile($this->mobile)
            ->setTemplateCode($this->sms->template_code)
            ->setTemplateParam($this->sms_params)
            ->sendSms();

        if(isset($res['Code']) && $res['Code'] == 'OK'){

            $send_status = SmsLog::send_success;
            $this->updateSmsLog($send_status,$res);

            return true;
        }else{
            $send_status = SmsLog::send_fail;
            $this->updateSmsLog($send_status,$res);

            $message = $res['Message'] ?? $res;
            return '短信配置错误：'. $message;
        }




    }

    /**
     * Notes:获取短信配置
     */
    public function getSmsConfig(){
        $able_send = config('project.sms');
        $this->config = SmsConfig::get(['status'=>1]);
        //短信是否开启
        if(!$this->config || true != $able_send){

            return '短信功能未开启';
        }
        //获取短信内容
        $dev_message = new DevMessage();
        $this->sms = $dev_message->alias('d')
            ->join('dev_message_extend e','d.id = e.message_id')
            ->where(['key'=>$this->sms_key,'message_type'=>1,'status'=>1])
            ->field('d.name,e.*')
            ->find();

        if(!$this->sms){

            return '短信模板不存在';
        }
        $this->sms->variable = $this->sms->variable ? json_decode($this->sms->variable,true) : '';

        return true;
    }

    /**
     * Notes:短信内容
     */
    public function setSmsContent(){
        $this->content = $this->sms->content;
        foreach ($this->sms_params as $item => $val){
            $search_replace = '{'.$item.'}';
            $this->content = str_replace($search_replace,$val,$this->content);
        }
    }

    /**
     * Notes:是否需要短信验证码
     */
    public function setSmsCode(){
        $code_key = DevMessage::CODE_KEY;
        if(in_array($this->sms_key,$code_key)){
            $code = array_intersect_key($this->sms_params,$this->sms->variable);
            if($code) $this->code = array_shift($code);

        }
    }

    /**
     * Notes:记录短信日志
     */
    public function createSmsLog(){
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
    public function updateSmsLog($send_status,$result){
        $this->sms_log->send_status = $send_status;
        $this->sms_log->results = json_encode($result);
        $this->sms_log->save();
    }





}