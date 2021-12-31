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

namespace TencentCloud\Cws\V20180312;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cws\V20180312\Models as Models;

/**
 * @method Models\CreateMonitorsResponse CreateMonitors(Models\CreateMonitorsRequest $req) 本接口（CreateMonitors）用于新增一个或多个站点的监测任务。
 * @method Models\CreateSitesResponse CreateSites(Models\CreateSitesRequest $req) 本接口（CreateSites）用于新增一个或多个站点。
 * @method Models\CreateSitesScansResponse CreateSitesScans(Models\CreateSitesScansRequest $req) 本接口（CreateSitesScans）用于新增一个或多个站点的单次扫描任务。
 * @method Models\CreateVulsMisinformationResponse CreateVulsMisinformation(Models\CreateVulsMisinformationRequest $req) 本接口（CreateVulsMisinformation）可以用于新增一个或多个漏洞误报信息。
 * @method Models\CreateVulsReportResponse CreateVulsReport(Models\CreateVulsReportRequest $req) 本接口 (CreateVulsReport) 用于生成漏洞报告并返回下载链接。
 * @method Models\DeleteMonitorsResponse DeleteMonitors(Models\DeleteMonitorsRequest $req) 本接口 (DeleteMonitors) 用于删除用户监控任务。
 * @method Models\DeleteSitesResponse DeleteSites(Models\DeleteSitesRequest $req) 本接口 (DeleteSites) 用于删除站点。
 * @method Models\DescribeConfigResponse DescribeConfig(Models\DescribeConfigRequest $req) 本接口 (DescribeConfig) 用于查询用户配置的详细信息。
 * @method Models\DescribeMonitorsResponse DescribeMonitors(Models\DescribeMonitorsRequest $req) 本接口 (DescribeMonitors) 用于查询一个或多个监控任务的详细信息。
 * @method Models\DescribeSiteQuotaResponse DescribeSiteQuota(Models\DescribeSiteQuotaRequest $req) 本接口 (DescribeSiteQuota) 用于查询用户购买的扫描次数总数和已使用数。
 * @method Models\DescribeSitesResponse DescribeSites(Models\DescribeSitesRequest $req) 本接口 (DescribeSites) 用于查询一个或多个站点的详细信息。
 * @method Models\DescribeSitesVerificationResponse DescribeSitesVerification(Models\DescribeSitesVerificationRequest $req) 本接口 (DescribeSitesVerification) 用于查询一个或多个待验证站点的验证信息。
 * @method Models\DescribeVulsResponse DescribeVuls(Models\DescribeVulsRequest $req) 本接口 (DescribeVuls) 用于查询一个或多个漏洞的详细信息。
 * @method Models\DescribeVulsNumberResponse DescribeVulsNumber(Models\DescribeVulsNumberRequest $req) 本接口 (DescribeVulsNumber) 用于查询用户网站的漏洞总计数量。
 * @method Models\DescribeVulsNumberTimelineResponse DescribeVulsNumberTimeline(Models\DescribeVulsNumberTimelineRequest $req) 本接口 (DescribeVulsNumberTimeline) 用于查询漏洞数随时间变化统计信息。
 * @method Models\ModifyConfigAttributeResponse ModifyConfigAttribute(Models\ModifyConfigAttributeRequest $req) 本接口 (ModifyConfigAttribute) 用于修改用户配置的属性。
 * @method Models\ModifyMonitorAttributeResponse ModifyMonitorAttribute(Models\ModifyMonitorAttributeRequest $req) 本接口 (ModifyMonitorAttribute) 用于修改监测任务的属性。
 * @method Models\ModifySiteAttributeResponse ModifySiteAttribute(Models\ModifySiteAttributeRequest $req) 本接口 (ModifySiteAttribute) 用于修改站点的属性。
 * @method Models\VerifySitesResponse VerifySites(Models\VerifySitesRequest $req) 本接口 (VerifySites) 用于验证一个或多个待验证站点。
 */

class CwsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cws.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cws";

    /**
     * @var string
     */
    protected $version = "2018-03-12";

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
        $respClass = "TencentCloud"."\\".ucfirst("cws")."\\"."V20180312\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
