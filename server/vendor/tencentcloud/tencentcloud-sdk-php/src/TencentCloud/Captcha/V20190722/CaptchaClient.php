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

namespace TencentCloud\Captcha\V20190722;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Captcha\V20190722\Models as Models;

/**
 * @method Models\DescribeCaptchaAppIdInfoResponse DescribeCaptchaAppIdInfo(Models\DescribeCaptchaAppIdInfoRequest $req) 查询安全验证码应用APPId信息
 * @method Models\DescribeCaptchaDataResponse DescribeCaptchaData(Models\DescribeCaptchaDataRequest $req) 安全验证码分类查询数据接口，请求量type=0、通过量type=1、验证量type=2、拦截量type=3  分钟级查询
 * @method Models\DescribeCaptchaDataSumResponse DescribeCaptchaDataSum(Models\DescribeCaptchaDataSumRequest $req) 安全验证码查询请求数据概况，例如：按照时间段查询数据  昨日请求量、昨日恶意比例、昨日验证量、昨日通过量、昨日恶意拦截量……
 * @method Models\DescribeCaptchaMiniDataResponse DescribeCaptchaMiniData(Models\DescribeCaptchaMiniDataRequest $req) 安全验证码小程序插件分类查询数据接口，请求量type=0、通过量type=1、验证量type=2、拦截量type=3 小时级查询（五小时左右延迟）
 * @method Models\DescribeCaptchaMiniDataSumResponse DescribeCaptchaMiniDataSum(Models\DescribeCaptchaMiniDataSumRequest $req) 安全验证码小程序插件查询请求数据概况
 * @method Models\DescribeCaptchaMiniOperDataResponse DescribeCaptchaMiniOperData(Models\DescribeCaptchaMiniOperDataRequest $req) 安全验证码小程序插件用户操作数据查询
 * @method Models\DescribeCaptchaMiniResultResponse DescribeCaptchaMiniResult(Models\DescribeCaptchaMiniResultRequest $req) 核查验证码小程序插件票据结果
 * @method Models\DescribeCaptchaMiniRiskResultResponse DescribeCaptchaMiniRiskResult(Models\DescribeCaptchaMiniRiskResultRequest $req) 核查验证码小程序插件票据接入风控结果(Beta)
 * @method Models\DescribeCaptchaOperDataResponse DescribeCaptchaOperData(Models\DescribeCaptchaOperDataRequest $req) 安全验证码用户操作数据查询，验证码加载耗时type = 1 、拦截情况type = 2、 一周通过平均尝试次数 type = 3、尝试次数分布 type = 4
 * @method Models\DescribeCaptchaResultResponse DescribeCaptchaResult(Models\DescribeCaptchaResultRequest $req) 核查验证码票据结果
 * @method Models\DescribeCaptchaTicketDataResponse DescribeCaptchaTicketData(Models\DescribeCaptchaTicketDataRequest $req) 安全验证码用户操作票据数据查询
 * @method Models\DescribeCaptchaUserAllAppIdResponse DescribeCaptchaUserAllAppId(Models\DescribeCaptchaUserAllAppIdRequest $req) 安全验证码获取用户注册所有APPId和应用名称
 * @method Models\UpdateCaptchaAppIdInfoResponse UpdateCaptchaAppIdInfo(Models\UpdateCaptchaAppIdInfoRequest $req) 更新验证码应用APPId信息
 */

class CaptchaClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "captcha.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "captcha";

    /**
     * @var string
     */
    protected $version = "2019-07-22";

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
        $respClass = "TencentCloud"."\\".ucfirst("captcha")."\\"."V20190722\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
