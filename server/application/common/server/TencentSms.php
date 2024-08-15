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