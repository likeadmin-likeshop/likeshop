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

namespace app\common\server;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

class Alisms
{
    private $app_key = '';
    private $secret_key = '';
    private $sign = '';
    private $mobile = '';
    private $template_code = '';
    private $template_param = '';

    public function __construct($config)
    {
        $this->sign = $config['sign'];
        $this->app_key = $config['app_key'];
        $this->secret_key = $config['secret_key'];
    }
    public function setTemplateCode($template_code){
        $this->template_code = $template_code;
        return $this;
    }

    public function setMobile($mobile){
        $this->mobile = $mobile;
        return $this;
    }

    public function setTemplateParam($template_param = ''){
        $this->template_param = json_encode($template_param);
        return $this;
    }

    public function sendSms(){
        try {
            AlibabaCloud::accessKeyClient($this->app_key, $this->secret_key)
                ->regionId('cn-hangzhou')
                ->asDefaultClient();

            $result = AlibabaCloud::rpc()
                ->product('Dysmsapi')
                // ->scheme('https') // https | http
                ->version('2017-05-25')
                ->action('SendSms')
                ->method('POST')
                ->host('dysmsapi.aliyuncs.com')
                ->options([
                    'query' => [
                        'RegionId' => "cn-hangzhou",
                        'PhoneNumbers' => $this->mobile,       //发送手机号
                        'SignName' => $this->sign,            //短信签名
                        'TemplateCode' => $this->template_code,    //短信模板CODE
                        'TemplateParam' => $this->template_param, //自定义随机数
                    ],
                ])
                ->request();
            return $result->toArray();
        } catch (ClientException $e) {
            return $e->getErrorMessage() . PHP_EOL;
        } catch (ServerException $e) {
            return $e->getErrorMessage() . PHP_EOL;
        }
    }

}