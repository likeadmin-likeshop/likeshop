<?php
require_once __DIR__.'/../../../vendor/autoload.php';
// 导入对应产品模块的client
use TencentCloud\Tci\V20190318\TciClient;

// 导入要请求接口对应的Request类
use TencentCloud\Tci\V20190318\Models\SubmitOpenClassTaskRequest;
use TencentCloud\Tci\V20190318\Models\SubmitOpenClassTask;

use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Credential;
// 导入可选配置类
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;

try {
    // 实例化一个证书对象，入参需要传入腾讯云账户secretId，secretKey
    $cred = new Credential("", "");
    //$cred = new Credential(getenv(""), getenv("");

    // 实例化一个http选项，可选的，没有特殊需求可以跳过
    $httpProfile = new HttpProfile();
    $httpProfile->setReqMethod("POST");  // post请求(默认为post请求)
    $httpProfile->setReqTimeout(30);    // 请求超时时间，单位为秒(默认60秒)
    $httpProfile->setEndpoint("tci.tencentcloudapi.com");  // 指定接入地域域名(默认就近接入)
  

    // 实例化一个client选项，可选的，没有特殊需求可以跳过
    $clientProfile = new ClientProfile();
    $clientProfile->setSignMethod("TC3-HMAC-SHA256");  // 指定签名算法(默认为HmacSHA256)
    $clientProfile->setHttpProfile($httpProfile);
    $client = new TciClient($cred, "", $clientProfile);

    // 实例化一个ecc实例信息查询请求对象,每个接口都会对应一个request对象。
    $req = new SubmitOpenClassTaskRequest();
    $req->FileContent="https://edu-test-1253131631.cos.ap-guangzhou.myqcloud.com/aieduautotest/autotest_vedio.mp4";
    $req->FileType="vod_url";
    $req->LibrarySet=["library_15603955264181591716"];


    $resp = $client->SubmitOpenClassTask($req);

    // 输出json格式的字符串回包
    print_r($resp->toJsonString());

    // 也可以取出单个值。
    // 你可以通过官网接口文档或跳转到response对象的定义处查看返回字段的定义
}
catch(TencentCloudSDKException $e) {
    echo $e;
}
