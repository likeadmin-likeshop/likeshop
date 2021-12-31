<?php
require_once __DIR__.'/../../../vendor/autoload.php';
// 导入对应产品模块的client
use TencentCloud\Sms\V20190711\SmsClient;
// 导入要请求接口对应的Request类
use TencentCloud\Sms\V20190711\Models\SendStatusStatisticsRequest;
use TencentCloud\Common\Exception\TencentCloudSDKException;
use TencentCloud\Common\Credential;
// 导入可选配置类
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Profile\HttpProfile;

try {
    /* 必要步骤：
	 * 实例化一个认证对象，入参需要传入腾讯云账户密钥对secretId，secretKey。
	 * 这里采用的是从环境变量读取的方式，需要在环境变量中先设置这两个值。
	 * 你也可以直接在代码中写死密钥对，但是小心不要将代码复制、上传或者分享给他人，
	 * 以免泄露密钥对危及你的财产安全。
	 * CAM密匙查询: https://console.cloud.tencent.com/cam/capi*/

    $cred = new Credential("xxx", "xxx");
    //$cred = new Credential(getenv("TENCENTCLOUD_SECRET_ID"), getenv("TENCENTCLOUD_SECRET_KEY"));

    // 实例化一个http选项，可选的，没有特殊需求可以跳过
    $httpProfile = new HttpProfile();
    $httpProfile->setReqMethod("GET");  // post请求(默认为post请求)
    $httpProfile->setReqTimeout(30);    // 请求超时时间，单位为秒(默认60秒)
    $httpProfile->setEndpoint("sms.tencentcloudapi.com");  // 指定接入地域域名(默认就近接入)

    // 实例化一个client选项，可选的，没有特殊需求可以跳过
    $clientProfile = new ClientProfile();
    $clientProfile->setSignMethod("TC3-HMAC-SHA256");  // 指定签名算法(默认为HmacSHA256)
    $clientProfile->setHttpProfile($httpProfile);

    // 实例化要请求产品(以sms为例)的client对象,clientProfile是可选的
    $client = new SmsClient($cred, "ap-shanghai", $clientProfile);

    // 实例化一个 sms 发送短信请求对象,每个接口都会对应一个request对象。
    $req = new SendStatusStatisticsRequest();

    /* 填充请求参数,这里request对象的成员变量即对应接口的入参
     * 你可以通过官网接口文档或跳转到request对象的定义处查看请求参数的定义
     * 基本类型的设置:
	 * 帮助链接：
	 * 短信控制台: https://console.cloud.tencent.com/sms/smslist
	 * sms helper: https://cloud.tencent.com/document/product/382/3773 */

    /* 短信应用ID: 短信SdkAppid在 [短信控制台] 添加应用后生成的实际SdkAppid，示例如1400006666 */
    $req->SmsSdkAppid = "1400787878";
    /* 拉取最大条数，最多100条 */
    $req->Limit = 10;
    /* 偏移量 注：目前固定设置为0 */
    $req->Offset = 0;
    /* 开始时间，yyyymmddhh 需要拉取的起始时间，精确到小时 */
    $req->StartDateTime = "2019122500";
    /* 结束时间，yyyymmddhh 需要拉取的截止时间，精确到小时
	 * 注：EndDataTime 必须大于 StartDateTime */
    $req->EndDataTime = "2019122523";

    // 通过client对象调用DescribeInstances方法发起请求。注意请求方法名与请求对象是对应的
    // 返回的resp是一个DescribeInstancesResponse类的实例，与请求对象对应
    $resp = $client->SendStatusStatistics($req);

    // 输出json格式的字符串回包
    print_r($resp->toJsonString());

    // 也可以取出单个值。
    // 你可以通过官网接口文档或跳转到response对象的定义处查看返回字段的定义
    print_r($resp->TotalCount);
}
catch(TencentCloudSDKException $e) {
    echo $e;
}
