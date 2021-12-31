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

namespace TencentCloud\Oceanus\V20190422;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Oceanus\V20190422\Models as Models;

/**
 * @method Models\CreateJobResponse CreateJob(Models\CreateJobRequest $req) 新建作业接口，一个 AppId 最多允许创建1000个作业
 * @method Models\CreateJobConfigResponse CreateJobConfig(Models\CreateJobConfigRequest $req) 创建作业配置，一个作业最多有100个配置版本
 * @method Models\CreateResourceResponse CreateResource(Models\CreateResourceRequest $req) 创建资源接口
 * @method Models\CreateResourceConfigResponse CreateResourceConfig(Models\CreateResourceConfigRequest $req) 创建资源配置接口
 * @method Models\DeleteResourceConfigsResponse DeleteResourceConfigs(Models\DeleteResourceConfigsRequest $req) 删除资源版本
 * @method Models\DeleteResourcesResponse DeleteResources(Models\DeleteResourcesRequest $req) 删除资源接口
 * @method Models\DeleteTableConfigResponse DeleteTableConfig(Models\DeleteTableConfigRequest $req) 删除作业表配置
 * @method Models\DescribeJobConfigsResponse DescribeJobConfigs(Models\DescribeJobConfigsRequest $req) 查询作业配置列表，一次最多查询100个
 * @method Models\DescribeJobsResponse DescribeJobs(Models\DescribeJobsRequest $req) 查询作业
 * @method Models\DescribeResourceConfigsResponse DescribeResourceConfigs(Models\DescribeResourceConfigsRequest $req) 描述资源配置接口
 * @method Models\DescribeResourceRelatedJobsResponse DescribeResourceRelatedJobs(Models\DescribeResourceRelatedJobsRequest $req) 获取资源关联作业信息
 * @method Models\DescribeResourcesResponse DescribeResources(Models\DescribeResourcesRequest $req) 描述资源接口
 * @method Models\DescribeSystemResourcesResponse DescribeSystemResources(Models\DescribeSystemResourcesRequest $req) 描述系统资源接口
 * @method Models\RunJobsResponse RunJobs(Models\RunJobsRequest $req) 批量启动或者恢复作业，批量操作数量上限20
 * @method Models\StopJobsResponse StopJobs(Models\StopJobsRequest $req) 批量停止作业，批量操作数量上限为20
 */

class OceanusClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "oceanus.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "oceanus";

    /**
     * @var string
     */
    protected $version = "2019-04-22";

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
        $respClass = "TencentCloud"."\\".ucfirst("oceanus")."\\"."V20190422\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
