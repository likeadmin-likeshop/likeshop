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

namespace TencentCloud\Smpn\V20190822;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Smpn\V20190822\Models as Models;

/**
 * @method Models\CreateSmpnEpaResponse CreateSmpnEpa(Models\CreateSmpnEpaRequest $req) 企业号码认证
 * @method Models\DescribeSmpnChpResponse DescribeSmpnChp(Models\DescribeSmpnChpRequest $req) 查询号码的标记和标记次数
 * @method Models\DescribeSmpnFnrResponse DescribeSmpnFnr(Models\DescribeSmpnFnrRequest $req) 虚假号码识别
 * @method Models\DescribeSmpnMhmResponse DescribeSmpnMhm(Models\DescribeSmpnMhmRequest $req) 号码营销监控
 * @method Models\DescribeSmpnMrlResponse DescribeSmpnMrl(Models\DescribeSmpnMrlRequest $req) 查询号码恶意标记等级
 */

class SmpnClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "smpn.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "smpn";

    /**
     * @var string
     */
    protected $version = "2019-08-22";

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
        $respClass = "TencentCloud"."\\".ucfirst("smpn")."\\"."V20190822\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
