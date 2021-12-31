<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace TencentCloud\Faceid\V20180301;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Faceid\V20180301\Models as Models;

/**
 * @method Models\BankCard2EVerificationResponse BankCard2EVerification(Models\BankCard2EVerificationRequest $req) 本接口用于校验姓名和银行卡号的真实性和一致性。
 * @method Models\BankCard4EVerificationResponse BankCard4EVerification(Models\BankCard4EVerificationRequest $req) 本接口用于输入银行卡号、姓名、开户证件号、开户手机号，校验信息的真实性和一致性。
 * @method Models\BankCardVerificationResponse BankCardVerification(Models\BankCardVerificationRequest $req) 本接口用于银行卡号、姓名、开户证件号信息的真实性和一致性。
 * @method Models\CheckBankCardInformationResponse CheckBankCardInformation(Models\CheckBankCardInformationRequest $req) 银行卡基础信息查询
 * @method Models\CheckIdCardInformationResponse CheckIdCardInformation(Models\CheckIdCardInformationRequest $req) 传入身份证人像面照片，识别身份证照片上的信息，并将姓名、身份证号、身份证人像照片与公安权威库的证件照进行比对，是否属于同一个人，从而验证身份证信息的真实性。
 * @method Models\CheckPhoneAndNameResponse CheckPhoneAndName(Models\CheckPhoneAndNameRequest $req) 手机号二要素核验接口用于校验手机号和姓名的真实性和一致性，支持的手机号段详情请查阅<a href="https://cloud.tencent.com/document/product/1007/46063">运营商类</a>文档。

 * @method Models\DetectAuthResponse DetectAuth(Models\DetectAuthRequest $req) 每次调用人脸核身SaaS化服务前，需先调用本接口获取BizToken，用来串联核身流程，在验证完成后，用于获取验证结果信息。
 * @method Models\EncryptedPhoneVerificationResponse EncryptedPhoneVerification(Models\EncryptedPhoneVerificationRequest $req) 本接口用于校验手机号、姓名和身份证号的真实性和一致性，入参支持MD5加密传输。
 * @method Models\GetActionSequenceResponse GetActionSequence(Models\GetActionSequenceRequest $req) 使用动作活体检测模式前，需调用本接口获取动作顺序。
 * @method Models\GetDetectInfoResponse GetDetectInfo(Models\GetDetectInfoRequest $req) 完成验证后，用BizToken调用本接口获取结果信息，BizToken生成后三天内（3\*24\*3,600秒）可多次拉取。
 * @method Models\GetDetectInfoEnhancedResponse GetDetectInfoEnhanced(Models\GetDetectInfoEnhancedRequest $req) 完成验证后，用BizToken调用本接口获取结果信息，BizToken生成后三天内（3\*24\*3,600秒）可多次拉取。
 * @method Models\GetEidResultResponse GetEidResult(Models\GetEidResultRequest $req) 完成验证后，用EidToken调用本接口获取结果信息，EidToken生成后三天内（3\*24\*3,600秒）可多次拉取。
 * @method Models\GetEidTokenResponse GetEidToken(Models\GetEidTokenRequest $req) 每次调用E证通小程序服务前，需先调用本接口获取EidToken，用来串联核身流程，在验证完成后，用于获取验证结果信息。
 * @method Models\GetFaceIdResultResponse GetFaceIdResult(Models\GetFaceIdResultRequest $req) 完成验证后，用FaceIdToken调用本接口获取结果信息，FaceIdToken生成后三天内（3\*24\*3,600秒）可多次拉取。
 * @method Models\GetFaceIdTokenResponse GetFaceIdToken(Models\GetFaceIdTokenRequest $req) 每次调用人脸核身SDK服务前，需先调用本接口获取SDKToken，用来串联核身流程，在验证完成后，用于获取验证结果信息，该token仅能核身一次。
 * @method Models\GetLiveCodeResponse GetLiveCode(Models\GetLiveCodeRequest $req) 使用数字活体检测模式前，需调用本接口获取数字验证码。
 * @method Models\GetRealNameAuthResultResponse GetRealNameAuthResult(Models\GetRealNameAuthResultRequest $req) 获取微信实名认证结果
 * @method Models\GetRealNameAuthTokenResponse GetRealNameAuthToken(Models\GetRealNameAuthTokenRequest $req) 该接口仅限微信公众号中使用，传入姓名和身份证号获取回调URL，在微信公众号中打开验证姓名和身份证号与微信实名的信息是否一致。

 * @method Models\IdCardOCRVerificationResponse IdCardOCRVerification(Models\IdCardOCRVerificationRequest $req) 本接口用于校验姓名和身份证号的真实性和一致性，您可以通过输入姓名和身份证号或传入身份证人像面照片提供所需验证信息。
 * @method Models\IdCardVerificationResponse IdCardVerification(Models\IdCardVerificationRequest $req) 传入姓名和身份证号，校验两者的真实性和一致性。
 * @method Models\ImageRecognitionResponse ImageRecognition(Models\ImageRecognitionRequest $req) 传入照片和身份信息，判断该照片与公安权威库的证件照是否属于同一个人。
 * @method Models\LivenessResponse Liveness(Models\LivenessRequest $req) 活体检测
 * @method Models\LivenessCompareResponse LivenessCompare(Models\LivenessCompareRequest $req) 传入视频和照片，先判断视频中是否为真人，判断为真人后，再判断该视频中的人与上传照片是否属于同一个人。
 * @method Models\LivenessRecognitionResponse LivenessRecognition(Models\LivenessRecognitionRequest $req) 传入视频和身份信息，先判断视频中是否为真人，判断为真人后，再判断该视频中的人与公安权威库的证件照是否属于同一个人。
 * @method Models\MinorsVerificationResponse MinorsVerification(Models\MinorsVerificationRequest $req) 未成年人守护接口是通过传入手机号或姓名和身份证号，结合权威数据源和腾讯健康守护可信模型，判断该信息是否真实且年满18周岁。腾讯健康守护可信模型覆盖了上十亿手机库源，覆盖率高、准确率高，如果不在库中的手机号，还可以通过姓名+身份证进行兜底验证。
 * @method Models\MobileNetworkTimeVerificationResponse MobileNetworkTimeVerification(Models\MobileNetworkTimeVerificationRequest $req) 本接口用于查询手机号在网时长，输入手机号进行查询。
 * @method Models\MobileStatusResponse MobileStatus(Models\MobileStatusRequest $req) 本接口用于验证手机号的状态，您可以输入手机号进行查询。
 * @method Models\PhoneVerificationResponse PhoneVerification(Models\PhoneVerificationRequest $req) 本接口用于校验手机号、姓名和身份证号的真实性和一致性。支持的手机号段详情请查阅<a href="https://cloud.tencent.com/document/product/1007/46063">运营商类</a>文档。
 */

class FaceidClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "faceid.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "faceid";

    /**
     * @var string
     */
    protected $version = "2018-03-01";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("faceid")."\\"."V20180301\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
