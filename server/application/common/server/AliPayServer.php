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

// | Author: LikeShopTeam-段誉
// +----------------------------------------------------------------------


namespace app\common\server;


use alipay\aop\AopClient;
use alipay\aop\request\AlipayTradeAppPayRequest;

class AliPayServer
{

    public function __construct()
    {
        $this->config = self::getAliConfig();
    }


    public static function getAliConfig()
    {
        $config = [
            'gatewayUrl' => ConfigServer::get('alipay', 'gatewayUrl','https://openapi.alipaydev.com/gateway.do'),
            'appId' => ConfigServer::get('alipay', 'appId', '2016091500517906'),
            'rsaPrivateKey' => ConfigServer::get('alipay', 'rsaPrivateKey',''),
            'alipayrsaPublicKey' => ConfigServer::get('alipay', 'alipayrsaPublicKey','')
        ];
        return $config;
    }


    /**
     * Desc: 支付宝app支付
     * User: 意象信息科技 mjf
     * @param $data
     * @param $notify_url
     * @return string
     */
    public function appAlipay($data, $notify_url)
    {
        $aop = new AopClient();
        $aop->gatewayUrl = $this->config['gatewayUrl'];
        $aop->appId = $this->config['appId'];
        $aop->rsaPrivateKey = $this->config['rsaPrivateKey'];
        $aop->format = "json";
        $aop->postCharset = "UTF-8";
        $aop->signType = "RSA2";
        $aop->alipayrsaPublicKey = $this->config['alipayrsaPublicKey'];

        $request = new AlipayTradeAppPayRequest();
        $request->setNotifyUrl($notify_url);
        $request->setBizContent(json_encode($data, JSON_UNESCAPED_UNICODE));
        $response = $aop->sdkExecute($request);
        return $response;
    }
}