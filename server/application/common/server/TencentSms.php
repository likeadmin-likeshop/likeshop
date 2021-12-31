<?php


namespace app\common\server;


use TencentCloud\Common\Credential;
use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;
use TencentCloud\Sms\V20190711\Models\SendSmsRequest;
use TencentCloud\Sms\V20190711\SmsClient;

class TencentSms
{
    private $app_key        = ''; //AppKey
    private $secret_key     = ''; //SecretKey
    private $appid          = ''; //Appid
    private $sign           = ''; //签名
    private $mobile         = ''; //手机号
    private $template_code  = ''; //模板编码
    private $template_param = ''; //模板参数

    /**
     * 初始化
     * TencentSms constructor.
     * @param $config
     */
    public function __construct($config)
    {
        $this->sign       = $config['sign'];
        $this->appid      = $config['app_id'];
        $this->app_key    = $config['app_key'];
        $this->secret_key = $config['secret_key'];
    }

    /**
     * @Notes: 设置模板编码
     * @Author: 张无忌
     * @param $template_code
     * @return $this
     */
    public function setTemplateCode($template_code){
        $this->template_code = $template_code;
        return $this;
    }

    /**
     * @Notes: 设置手机号
     * @Author: 张无忌
     * @param $mobile
     * @return $this
     */
    public function setMobile($mobile){
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * @Notes: 设置模板参数
     * @Author: 张无忌
     * @param string $template_param
     * @return $this
     */
    public function setTemplateParam($template_param = ''){
        $this->template_param = $template_param;
        return $this;
    }

    /**
     * @Notes: 发送短信
     * @Author: 张无忌
     */
    public function sendSms()
    {
        $cred = new Credential($this->app_key, $this->secret_key);
        $httpProfile = new HttpProfile();
        $httpProfile->setEndpoint('sms.tencentcloudapi.com');

        $clientProfile = new ClientProfile();
        $clientProfile->setHttpProfile($httpProfile);

        $client = new SmsClient($cred, "", $clientProfile);
        $req = new SendSmsRequest();

        $params = [
            'Sign'             => $this->sign,
            'SmsSdkAppid'      => $this->appid,
            'TemplateID'       => $this->template_code,
            'PhoneNumberSet'   => ['+86'.$this->mobile],
            'TemplateParamSet' => $this->template_param,
        ];

        $req->fromJsonString(json_encode($params));
        $resp = $client->SendSms($req);

//        return $resp->toJsonString();
        return json_decode($resp->toJsonString(), true);
    }
}