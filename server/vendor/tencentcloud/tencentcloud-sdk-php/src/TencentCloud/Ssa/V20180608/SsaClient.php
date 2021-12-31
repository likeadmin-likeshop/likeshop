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

namespace TencentCloud\Ssa\V20180608;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ssa\V20180608\Models as Models;

/**
 * @method Models\DescribeAssetDetailResponse DescribeAssetDetail(Models\DescribeAssetDetailRequest $req) 资产安全页资产详情
 * @method Models\DescribeAssetListResponse DescribeAssetList(Models\DescribeAssetListRequest $req) 资产安全资产列表
 * @method Models\DescribeAssetsMappingListResponse DescribeAssetsMappingList(Models\DescribeAssetsMappingListRequest $req) 资产测绘-测绘列表
 * @method Models\DescribeCheckConfigAssetListResponse DescribeCheckConfigAssetList(Models\DescribeCheckConfigAssetListRequest $req) 云安全配置管理资产组列表
 * @method Models\DescribeCheckConfigDetailResponse DescribeCheckConfigDetail(Models\DescribeCheckConfigDetailRequest $req) 云安全配置检查项详情
 * @method Models\DescribeComplianceAssetListResponse DescribeComplianceAssetList(Models\DescribeComplianceAssetListRequest $req) 合规管理-资产列表
 * @method Models\DescribeComplianceDetailResponse DescribeComplianceDetail(Models\DescribeComplianceDetailRequest $req) 合规管理检查项详情
 * @method Models\DescribeComplianceListResponse DescribeComplianceList(Models\DescribeComplianceListRequest $req) 合规管理总览页检查项列表
 * @method Models\DescribeConfigListResponse DescribeConfigList(Models\DescribeConfigListRequest $req) 云配置检查项总览页检查项列表
 * @method Models\DescribeEventDetailResponse DescribeEventDetail(Models\DescribeEventDetailRequest $req) 获取安全事件详情
 * @method Models\DescribeLeakDetectionListResponse DescribeLeakDetectionList(Models\DescribeLeakDetectionListRequest $req) 获取泄露列表
 * @method Models\DescribeSafetyEventListResponse DescribeSafetyEventList(Models\DescribeSafetyEventListRequest $req) 获取安全事件列表
 * @method Models\DescribeVulDetailResponse DescribeVulDetail(Models\DescribeVulDetailRequest $req) 漏洞列表页，获取漏洞详情信息
 * @method Models\DescribeVulListResponse DescribeVulList(Models\DescribeVulListRequest $req) 漏洞管理页，获取漏洞列表
 * @method Models\SaDivulgeDataQueryPubResponse SaDivulgeDataQueryPub(Models\SaDivulgeDataQueryPubRequest $req) 查询【通用字段】【泄露监测数据列表】
 */

class SsaClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ssa.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ssa";

    /**
     * @var string
     */
    protected $version = "2018-06-08";

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
        $respClass = "TencentCloud"."\\".ucfirst("ssa")."\\"."V20180608\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
