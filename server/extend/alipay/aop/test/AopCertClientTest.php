<?php

require_once '../AopCertClient.php';
require_once '../AopCertification.php';
require_once '../request/AlipayTradeQueryRequest.php';
require_once '../request/AlipayTradeWapPayRequest.php';
require_once '../request/AlipayTradeAppPayRequest.php';


/**
 * 证书类型AopCertClient功能方法使用测试，特别注意支付宝根证书预计2037年会过期，请在适当时间下载更新支付更证书
 * 1、execute 证书模式调用示例
 * 2、sdkExecute 证书模式调用示例
 * 3、pageExecute 证书模式调用示例
 */


//1、execute 使用
$aop = new AopCertClient ();
$appCertPath = "应用证书路径（要确保证书文件可读），例如：/home/admin/cert/appCertPublicKey.crt";
$alipayCertPath = "支付宝公钥证书路径（要确保证书文件可读），例如：/home/admin/cert/alipayCertPublicKey_RSA2.crt";
$rootCertPath = "支付宝根证书路径（要确保证书文件可读），例如：/home/admin/cert/alipayRootCert.crt";

$aop->gatewayUrl = 'https://openapi.alipay.com/gateway.do';
$aop->appId = '你的appid';
$aop->rsaPrivateKey = '你的应用私钥';
$aop->alipayrsaPublicKey = $aop->getPublicKey($alipayCertPath);//调用getPublicKey从支付宝公钥证书中提取公钥
$aop->apiVersion = '1.0';
$aop->signType = 'RSA2';
$aop->postCharset = 'utf-8';
$aop->format = 'json';
$aop->isCheckAlipayPublicCert = true;//是否校验自动下载的支付宝公钥证书，如果开启校验要保证支付宝根证书在有效期内
$aop->appCertSN = $aop->getCertSN($appCertPath);//调用getCertSN获取证书序列号
$aop->alipayRootCertSN = $aop->getRootCertSN($rootCertPath);//调用getRootCertSN获取支付宝根证书序列号

$request = new AlipayTradeQueryRequest ();
$request->setBizContent("{" .
    "\"out_trade_no\":\"20150320010101001\"," .
    "\"trade_no\":\"2014112611001004680 073956707\"," .
    "\"org_pid\":\"2088101117952222\"," .
    "      \"query_options\":[" .
    "        \"TRADE_SETTE_INFO\"" .
    "      ]" .
    "  }");
$result = $aop->execute($request);
var_dump($result);


//2、sdkExecute 测试
$aop = new AopCertClient ();
$appCertPath = "应用证书路径（要确保证书文件可读），例如：/home/admin/cert/appCertPublicKey.crt";
$alipayCertPath = "支付宝公钥证书路径（要确保证书文件可读），例如：/home/admin/cert/alipayCertPublicKey_RSA2.crt";
$rootCertPath = "支付宝根证书路径（要确保证书文件可读），例如：/home/admin/cert/alipayRootCert.crt";

$aop->gatewayUrl = 'https://openapi.alipay.com/gateway.do';
$aop->appId = '你的appid';
$aop->rsaPrivateKey = '你的应用私钥';
$aop->alipayrsaPublicKey = $aop->getPublicKey($alipayCertPath);
$aop->apiVersion = '1.0';
$aop->signType = 'RSA2';
$aop->postCharset = 'utf-8';
$aop->format = 'json';
$aop->isCheckAlipayPublicCert = true;//是否校验自动下载的支付宝公钥证书，如果开启校验要保证支付宝根证书在有效期内
$aop->appCertSN = $aop->getCertSN($appCertPath);//调用getCertSN获取证书序列号
$aop->alipayRootCertSN = $aop->getRootCertSN($rootCertPath);//调用getRootCertSN获取支付宝根证书序列号


$request = new AlipayTradeAppPayRequest ();
$request->setBizContent("{" .
    "\"timeout_express\":\"90m\"," .
    "\"total_amount\":\"9.00\"," .
    "\"product_code\":\"QUICK_MSECURITY_PAY\"," .
    "\"body\":\"Iphone6 16G\"," .
    "\"subject\":\"大乐透\"," .
    "\"out_trade_no\":\"70501111111S001111119\"," .
    "\"time_expire\":\"2016-12-31 10:05\"," .
    "\"goods_type\":\"0\"," .
    "\"promo_params\":\"{\\\"storeIdType\\\":\\\"1\\\"}\"," .
    "\"passback_params\":\"merchantBizType%3d3C%26merchantBizNo%3d2016010101111\"," .
    "\"extend_params\":{" .
    "\"sys_service_provider_id\":\"2088511833207846\"," .
    "\"hb_fq_num\":\"3\"," .
    "\"hb_fq_seller_percent\":\"100\"," .
    "\"industry_reflux_info\":\"{\\\\\\\"scene_code\\\\\\\":\\\\\\\"metro_tradeorder\\\\\\\",\\\\\\\"channel\\\\\\\":\\\\\\\"xxxx\\\\\\\",\\\\\\\"scene_data\\\\\\\":{\\\\\\\"asset_name\\\\\\\":\\\\\\\"ALIPAY\\\\\\\"}}\"," .
    "\"card_type\":\"S0JP0000\"" .
    "    }," .
    "\"merchant_order_no\":\"20161008001\"," .
    "\"enable_pay_channels\":\"pcredit,moneyFund,debitCardExpress\"," .
    "\"store_id\":\"NJ_001\"," .
    "\"specified_channel\":\"pcredit\"," .
    "\"disable_pay_channels\":\"pcredit,moneyFund,debitCardExpress\"," .
    "      \"goods_detail\":[{" .
    "        \"goods_id\":\"apple-01\"," .
    "\"alipay_goods_id\":\"20010001\"," .
    "\"goods_name\":\"ipad\"," .
    "\"quantity\":1," .
    "\"price\":2000," .
    "\"goods_category\":\"34543238\"," .
    "\"categories_tree\":\"124868003|126232002|126252004\"," .
    "\"body\":\"特价手机\"," .
    "\"show_url\":\"http://www.alipay.com/xxx.jpg\"" .
    "        }]," .
    "\"ext_user_info\":{" .
    "\"name\":\"李明\"," .
    "\"mobile\":\"16587658765\"," .
    "\"cert_type\":\"IDENTITY_CARD\"," .
    "\"cert_no\":\"362334768769238881\"," .
    "\"min_age\":\"18\"," .
    "\"fix_buyer\":\"F\"," .
    "\"need_check_info\":\"F\"" .
    "    }," .
    "\"business_params\":\"{\\\"data\\\":\\\"123\\\"}\"," .
    "\"agreement_sign_params\":{" .
    "\"personal_product_code\":\"CYCLE_PAY_AUTH_P\"," .
    "\"sign_scene\":\"INDUSTRY|DIGITAL_MEDIA\"," .
    "\"external_agreement_no\":\"test20190701\"," .
    "\"external_logon_id\":\"13852852877\"," .
    "\"access_params\":{" .
    "\"channel\":\"ALIPAYAPP\"" .
    "      }," .
    "\"sub_merchant\":{" .
    "\"sub_merchant_id\":\"2088123412341234\"," .
    "\"sub_merchant_name\":\"滴滴出行\"," .
    "\"sub_merchant_service_name\":\"滴滴出行免密支付\"," .
    "\"sub_merchant_service_description\":\"免密付车费，单次最高500\"" .
    "      }," .
    "\"period_rule_params\":{" .
    "\"period_type\":\"DAY\"," .
    "\"period\":3," .
    "\"execute_time\":\"2019-01-23\"," .
    "\"single_amount\":10.99," .
    "\"total_amount\":600," .
    "\"total_payments\":12" .
    "      }" .
    "    }" .
    "  }");
$result = $aop->sdkExecute($request);
$responseNode = str_replace(".", "_", $request->getApiMethodName()) . "_response";
echo $responseNode;
$resultCode = $result->$responseNode->code;
if (!empty($resultCode) && $resultCode == 10000) {
    echo "成功";
} else {
    echo "失败";
}


//3、pageExecute 测试
$aop = new AopCertClient ();
$appCertPath = "应用证书路径（要确保证书文件可读），例如：/home/admin/cert/appCertPublicKey.crt";
$alipayCertPath = "支付宝公钥证书路径（要确保证书文件可读），例如：/home/admin/cert/alipayCertPublicKey_RSA2.crt";
$rootCertPath = "支付宝根证书路径（要确保证书文件可读），例如：/home/admin/cert/alipayRootCert.crt";

$aop->gatewayUrl = 'https://openapi.alipay.com/gateway.do';
$aop->appId = '你的appid';
$aop->rsaPrivateKey = '你的应用私钥';
$aop->alipayrsaPublicKey = $aop->getPublicKey($alipayCertPath);
$aop->apiVersion = '1.0';
$aop->signType = 'RSA2';
$aop->postCharset = 'utf-8';
$aop->format = 'json';
$aop->isCheckAlipayPublicCert = true;//是否校验自动下载的支付宝公钥证书，如果开启校验要保证支付宝根证书在有效期内
$aop->appCertSN = $aop->getCertSN($appCertPath);//调用getCertSN获取证书序列号
$aop->alipayRootCertSN = $aop->getRootCertSN($rootCertPath);//调用getRootCertSN获取支付宝根证书序列号

$request = new AlipayTradeWapPayRequest ();
$request->setBizContent("{" .
    "    \"body\":\"对一笔交易的具体描述信息。如果是多种商品，请将商品描述字符串累加传给body。\"," .
    "    \"subject\":\"测试\"," .
    "    \"out_trade_no\":\"70501111111S001111119\"," .
    "    \"timeout_express\":\"90m\"," .
    "    \"total_amount\":9.00," .
    "    \"product_code\":\"QUICK_WAP_WAY\"" .
    "  }");
$result = $aop->pageExecute($request);
echo $result;


