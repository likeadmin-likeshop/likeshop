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

namespace TencentCloud\Tsw\V20210412;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tsw\V20210412\Models as Models;

/**
 * @method Models\DescribeComponentAlertObjectResponse DescribeComponentAlertObject(Models\DescribeComponentAlertObjectRequest $req) 获取告警对象-组件告警
 * @method Models\DescribeServiceAlertObjectResponse DescribeServiceAlertObject(Models\DescribeServiceAlertObjectRequest $req) 获取告警对象-服务告警表
 * @method Models\DescribeTokenResponse DescribeToken(Models\DescribeTokenRequest $req) 查询token
 */

class TswClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tsw.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tsw";

    /**
     * @var string
     */
    protected $version = "2021-04-12";

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
        $respClass = "TencentCloud"."\\".ucfirst("tsw")."\\"."V20210412\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
