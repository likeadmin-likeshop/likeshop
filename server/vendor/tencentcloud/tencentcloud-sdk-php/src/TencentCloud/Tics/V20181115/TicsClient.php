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

namespace TencentCloud\Tics\V20181115;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tics\V20181115\Models as Models;

/**
 * @method Models\DescribeDomainInfoResponse DescribeDomainInfo(Models\DescribeDomainInfoRequest $req) 提供域名相关的基础信息以及与攻击事件（团伙、家族）、恶意文件等相关联信息。
 * @method Models\DescribeFileInfoResponse DescribeFileInfo(Models\DescribeFileInfoRequest $req) 提供文件相关的基础信息以及与攻击事件（团伙、家族）、恶意文件等相关联信息。
 * @method Models\DescribeIpInfoResponse DescribeIpInfo(Models\DescribeIpInfoRequest $req) 提供IP相关的基础信息以及与攻击事件（团伙、家族）、恶意文件等相关联信息。
 * @method Models\DescribeThreatInfoResponse DescribeThreatInfo(Models\DescribeThreatInfoRequest $req) 提供IP和域名相关威胁情报信息查询，这些信息可以辅助检测失陷主机、帮助SIEM/SOC等系统做研判决策、帮助运营团队对设备报警的编排处理。
 */

class TicsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tics.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tics";

    /**
     * @var string
     */
    protected $version = "2018-11-15";

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
        $respClass = "TencentCloud"."\\".ucfirst("tics")."\\"."V20181115\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
