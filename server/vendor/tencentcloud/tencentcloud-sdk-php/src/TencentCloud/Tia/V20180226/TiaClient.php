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

namespace TencentCloud\Tia\V20180226;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tia\V20180226\Models as Models;

/**
 * @method Models\CreateJobResponse CreateJob(Models\CreateJobRequest $req) 创建训练任务
 * @method Models\CreateModelResponse CreateModel(Models\CreateModelRequest $req) 部署模型，用以对外提供服务。有两种部署模式：`无服务器模式` 和 `集群模式`。`无服务器模式` 下，模型文件被部署到无服务器云函数，即 [SCF](https://cloud.tencent.com/product/scf)，用户可以在其控制台上进一步操作。`集群模式` 下，模型文件被部署到 TI-A 的计算集群中。
 * @method Models\DeleteJobResponse DeleteJob(Models\DeleteJobRequest $req) 删除训练任务
 * @method Models\DeleteModelResponse DeleteModel(Models\DeleteModelRequest $req) 删除指定的部署模型。模型有两种部署模式：`无服务器模式` 和 `集群模式`。`无服务器模式` 下，模型文件被部署到无服务器云函数，即 [SCF](https://cloud.tencent.com/product/scf)，用户可以在其控制台上进一步操作。`集群模式` 下，模型文件被部署到 TI-A 的计算集群中。
 * @method Models\DescribeJobResponse DescribeJob(Models\DescribeJobRequest $req) 获取训练任务详情
 * @method Models\DescribeModelResponse DescribeModel(Models\DescribeModelRequest $req) 描述已经部署的某个模型。而模型部署有两种模式：`无服务器模式` 和 `集群模式`。`无服务器模式` 下，模型文件被部署到无服务器云函数，即 [SCF](https://cloud.tencent.com/product/scf)，用户可以在其控制台上进一步操作。`集群模式` 下，模型文件被部署到 TI-A 的计算集群中。
 * @method Models\InstallAgentResponse InstallAgent(Models\InstallAgentRequest $req) 安装agent
 * @method Models\ListJobsResponse ListJobs(Models\ListJobsRequest $req) 列举训练任务
 * @method Models\ListModelsResponse ListModels(Models\ListModelsRequest $req) 用以列举已经部署的模型。而部署有两种模式：`无服务器模式` 和 `集群模式`。`无服务器模式` 下，模型文件被部署到无服务器云函数，即 [SCF](https://cloud.tencent.com/product/scf)，用户可以在其控制台上进一步操作。`集群模式` 下，模型文件被部署到 TI-A 的计算集群中。不同部署模式下的模型分开列出。
 * @method Models\QueryLogsResponse QueryLogs(Models\QueryLogsRequest $req) 查询 TI-A 训练任务的日志
 */

class TiaClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tia.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tia";

    /**
     * @var string
     */
    protected $version = "2018-02-26";

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
        $respClass = "TencentCloud"."\\".ucfirst("tia")."\\"."V20180226\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
