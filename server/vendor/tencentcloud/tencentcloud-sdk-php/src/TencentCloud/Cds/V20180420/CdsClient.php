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

namespace TencentCloud\Cds\V20180420;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cds\V20180420\Models as Models;

/**
 * @method Models\DescribeDasbImageIdsResponse DescribeDasbImageIds(Models\DescribeDasbImageIdsRequest $req) 获取镜像列表
 * @method Models\DescribeDbauditInstanceTypeResponse DescribeDbauditInstanceType(Models\DescribeDbauditInstanceTypeRequest $req) 本接口 (DescribeDbauditInstanceType) 用于查询可售卖的产品规格列表。
 * @method Models\DescribeDbauditInstancesResponse DescribeDbauditInstances(Models\DescribeDbauditInstancesRequest $req) 本接口 (DescribeDbauditInstances) 用于查询数据安全审计实例列表
 * @method Models\DescribeDbauditUsedRegionsResponse DescribeDbauditUsedRegions(Models\DescribeDbauditUsedRegionsRequest $req) 本接口 (DescribeDbauditUsedRegions) 用于查询可售卖地域列表。
 * @method Models\InquiryPriceDbauditInstanceResponse InquiryPriceDbauditInstance(Models\InquiryPriceDbauditInstanceRequest $req) 用于查询数据安全审计产品实例价格
 * @method Models\ModifyDbauditInstancesRenewFlagResponse ModifyDbauditInstancesRenewFlag(Models\ModifyDbauditInstancesRenewFlagRequest $req) 本接口 (ModifyDbauditInstancesRenewFlag) 用于修改数据安全审计产品实例续费标识
 */

class CdsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cds.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cds";

    /**
     * @var string
     */
    protected $version = "2018-04-20";

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
        $respClass = "TencentCloud"."\\".ucfirst("cds")."\\"."V20180420\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
