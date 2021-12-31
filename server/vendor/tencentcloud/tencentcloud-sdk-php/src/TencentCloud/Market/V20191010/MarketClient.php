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

namespace TencentCloud\Market\V20191010;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Market\V20191010\Models as Models;

/**
 * @method Models\FlowProductRemindResponse FlowProductRemind(Models\FlowProductRemindRequest $req) 计量商品用量提醒，用于服务商调用云服务，云服务向客户发送提醒信息
 * @method Models\GetCateTreeResponse GetCateTree(Models\GetCateTreeRequest $req) 获取分类名称
 * @method Models\GetUsagePlanUsageAmountResponse GetUsagePlanUsageAmount(Models\GetUsagePlanUsageAmountRequest $req) 该接口可以根据InstanceId查询实例的api的使用情况。
 */

class MarketClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "market.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "market";

    /**
     * @var string
     */
    protected $version = "2019-10-10";

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
        $respClass = "TencentCloud"."\\".ucfirst("market")."\\"."V20191010\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
