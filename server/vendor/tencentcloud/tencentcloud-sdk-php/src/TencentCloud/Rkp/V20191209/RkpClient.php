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

namespace TencentCloud\Rkp\V20191209;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Rkp\V20191209\Models as Models;

/**
 * @method Models\GetOpenIdResponse GetOpenId(Models\GetOpenIdRequest $req) 根据DevicceToken查询OpenID。
 * @method Models\GetTokenResponse GetToken(Models\GetTokenRequest $req) 获取token接口。
 * @method Models\QueryDevAndRiskResponse QueryDevAndRisk(Models\QueryDevAndRiskRequest $req) 腾讯天御设备风险查询接口，输入由客户应用自主采集的设备信息， 通过腾讯大数据风控能力，可以准确根据输入设备信息，还原设备库中的设备ID，并且识别设备的风险，解决客户业务过程中的设备风险，降低企业损失。
 */

class RkpClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "rkp.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "rkp";

    /**
     * @var string
     */
    protected $version = "2019-12-09";

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
        $respClass = "TencentCloud"."\\".ucfirst("rkp")."\\"."V20191209\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
