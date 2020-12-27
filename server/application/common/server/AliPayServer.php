<?php
// +----------------------------------------------------------------------
// | LikeShop有特色的全开源社交分销电商系统
// +----------------------------------------------------------------------
// | 欢迎阅读学习系统程序代码，建议反馈是我们前进的动力
// | 商业用途务必购买系统授权，以免引起不必要的法律纠纷
// | 禁止对系统程序代码以任何目的，任何形式的再发布
// | 微信公众号：好象科技
// | 访问官网：http://www.likemarket.net
// | 访问社区：http://bbs.likemarket.net
// | 访问手册：http://doc.likemarket.net
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
            'rsaPrivateKey' => ConfigServer::get('alipay', 'rsaPrivateKey','MIIEpQIBAAKCAQEArW+wYzwCPpD5e0HE7zb9AEWawJksGwgtbbBL1IeuSxz6Cp/SFizPt//7Gikuce1YbXcX60eUayhzS6Oij/+cS8AUMq1wzf0RfcBo+o9dXV3PX7ElOyudhJfzY8LCj6OQKmNpCVqlOVJ0cYi0+1G+uwAyrQJwzBzvw/FxMQHXgdhBSqu2kos8je24BxVp7eQ5LOAv+Vwqw3xnEVlPiZg/OeK1/esCn+qxj/lKSuSGXBxBoZ9foMU2kA+b4sRO6RMz7jBwSJ6Cc9DvU20jbY/rOPAbQX3/CbIYF79QIu/ITEQ5t0+tbCnDqEOoG7yTOCKxoS397YQPXN2+CjE5tNZ+EQIDAQABAoIBAQCfk8Brze8SujmSWzVkFOg8s85rn4Oha6jA4BElf6Gyovq9g8e9d4W3+uODcpi1YniWX5m2dant3s4Wrn0ImVuppxXuev7ryQmq9rqgsABrw8DmfwuOodbRBS6Af9acaxZeqhEe9jRHxcI2JF7BTrl7PfdikHhQld9WHnTTbqpnYJg0HNJmOVVGowyVGKoRQzvYrsz8mRqS+vDlBYM2RiQvO5a7CHOaAribWUexw6YZJtBbMy3eaeCnWQWRxDuIV4wGmm6nEGGDPO/WtVFutdj44MOanCafiSzSCTVtqdt9M2PW44bY07Wem0c35RRh3d09ou9hj8suM6mmlQ+HdDNBAoGBAO3tkV+2Bbb+P8jUGIut6RDSUEBRVvk2iGTUjfBuxjEfNvYt0HrVVHWAAt4xITrxY7MDTZQ8NHKplZh2HZh4DVJolIaoghdiIXZQEz7fQqr8InJ3MRGs/fBQd23P7grvuBCTjDB70hr3EBgctlwBT9H+jkvFik24HWC5lp1pAMmNAoGBALqcGdG2JNjBSCHN34KgCpbfE59i2D8RViWX+erh7QdW8Kt92PPjA4SiM5PgP5oFpEHrlqanj0IAaummuJ92dgbjvta36BP4pNiWgpjz9SaiajH0XYe17T8dXqRUIXCS8eCEGpSCDVHFDJ2VyXzcXo1lDBYOxzcuzRFHKuVDwKuVAoGAWMk2XokGSOtH0iGTp0wWlPhmihnQYt8+tqG69eXgf6QuVl9yVOQWyGIkr9WVmPFLSxoIcTCmQcOW13X8RVFHZ2EvS7DGGwO7iPMIu4WE01mTYTOpU/dCK9NbPddB9ULPZSAqSE1scjOQBe9w/ZRfvPVJFG161tXF4LpgwgzVBmECgYEAo56xiM5TGnbGf1Va79bR0h2AwBTUFOBnj4jkyc0UnoXdehBbROS8tfPek39hZPQjZOVjb3alxrJFC99yK+ebb0kLkIsqAzDVoU6+7cuiHSD1Sh3AUHj0r41Z6W4W7/T3/er2v1YUxain+hhW1ZMHmKSL519Hz5vKlKa49tLkQc0CgYEAmF3Yb2c6D/Iy3n4mCORbGckEmxSTTLvD+Js3KQzS09JbMsqVrb9FqvA2uXwWl056vvkWL46oqqXYDOY+CAp+jgWmO9fwAJasI8aFEM4+F7lcOVn0YqdvJo70dNLz+pq866/u8XgCEs2GcU0Rgxr6wmQQNBrk1nl35p1/l9aIX9w='),
            'alipayrsaPublicKey' => ConfigServer::get('alipay', 'alipayrsaPublicKey','MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAih1bRsS4Sf1S3u+oYeMvyBFGHV73ZWC4RKYDeogdMhunUzTlnXZ50L8wl/RXUSHYN3kj4QRvCAFUQtbd+nW2P3zpkVuq7ws34d2eYMuodCtMkQUaoarOuoC34GZA7D1G+b0C89cGpdTN95URe3eLuC9j15XqUS9RFKuKsEJriT2HAwBmfVCCEdQ2iz0sAkeKGnqlcfLNnLkHzLmAqhyrmBOYRwS5dPjEvIMtlVnqyXsyqaEg1FqXN4q+qh9Z1EmvkikVgiZH2EP/anP/e0RxlqYQqhFgoAGQ51MoJPeonEYbVHgUlmkHr329fOcHjCBvqVISxe/wWxbtN7hUn6kf6wIDAQAB')
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