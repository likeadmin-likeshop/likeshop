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

namespace TencentCloud\Taf\V20200210;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Taf\V20200210\Models as Models;

/**
 * @method Models\DetectFraudKOLResponse DetectFraudKOL(Models\DetectFraudKOLRequest $req) DetectFraudKOL
 * @method Models\EnhanceTaDegreeResponse EnhanceTaDegree(Models\EnhanceTaDegreeRequest $req) 流量反欺诈-虚假TA识别
 * @method Models\RecognizeCustomizedAudienceResponse RecognizeCustomizedAudience(Models\RecognizeCustomizedAudienceRequest $req) 流量反欺诈-流量验准定制版
 * @method Models\RecognizeEffectiveFlowResponse RecognizeEffectiveFlow(Models\RecognizeEffectiveFlowRequest $req) 该服务已不再对外提供能力

筛选敏感易骚扰人群
 * @method Models\RecognizePreciseTargetAudienceResponse RecognizePreciseTargetAudience(Models\RecognizePreciseTargetAudienceRequest $req) 流量反欺诈-流量验准高级版
 * @method Models\RecognizeTargetAudienceResponse RecognizeTargetAudience(Models\RecognizeTargetAudienceRequest $req) 流量反欺诈-流量验准
 * @method Models\SendTrafficSecuritySmsMessageResponse SendTrafficSecuritySmsMessage(Models\SendTrafficSecuritySmsMessageRequest $req) SendTrafficSecuritySmsMessage
 */

class TafClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "taf.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "taf";

    /**
     * @var string
     */
    protected $version = "2020-02-10";

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
        $respClass = "TencentCloud"."\\".ucfirst("taf")."\\"."V20200210\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
