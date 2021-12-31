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

namespace TencentCloud\Yunsou\V20191115;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Yunsou\V20191115\Models as Models;

/**
 * @method Models\DataManipulationResponse DataManipulation(Models\DataManipulationRequest $req) 上传云搜数据的API接口。

 * @method Models\DataSearchResponse DataSearch(Models\DataSearchRequest $req) 用于检索云搜中的数据。
 */

class YunsouClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "yunsou.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "yunsou";

    /**
     * @var string
     */
    protected $version = "2019-11-15";

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
        $respClass = "TencentCloud"."\\".ucfirst("yunsou")."\\"."V20191115\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
