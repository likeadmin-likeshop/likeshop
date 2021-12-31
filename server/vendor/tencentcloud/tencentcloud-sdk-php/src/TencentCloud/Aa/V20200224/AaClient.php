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

namespace TencentCloud\Aa\V20200224;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Aa\V20200224\Models as Models;

/**
 * @method Models\ManageMarketingRiskResponse ManageMarketingRisk(Models\ManageMarketingRiskRequest $req) 活动防刷、注册保护、登录保护等营销产品的高级版本
 * @method Models\QueryActivityAntiRushResponse QueryActivityAntiRush(Models\QueryActivityAntiRushRequest $req) 腾讯云活动防刷（ActivityAntiRush，AA）是针对电商、O2O、P2P、游戏、支付等行业在促销活动中遇到“羊毛党”恶意刷取优惠福利的行为时，通过防刷引擎，精准识别出“薅羊毛”恶意行为的活动防刷服务，避免了企业被刷带来的巨大经济损失。
 * @method Models\QueryActivityAntiRushAdvancedResponse QueryActivityAntiRushAdvanced(Models\QueryActivityAntiRushAdvancedRequest $req) 活动防刷高级版，支持对网赚众包、网赚防刷、引流反诈骗场景的检测识别
 */

class AaClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "aa.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "aa";

    /**
     * @var string
     */
    protected $version = "2020-02-24";

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
        $respClass = "TencentCloud"."\\".ucfirst("aa")."\\"."V20200224\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
