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

namespace TencentCloud\Tione\V20191022;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tione\V20191022\Models as Models;

/**
 * @method Models\CreateCodeRepositoryResponse CreateCodeRepository(Models\CreateCodeRepositoryRequest $req) 创建存储库
 * @method Models\CreateNotebookInstanceResponse CreateNotebookInstance(Models\CreateNotebookInstanceRequest $req) 创建Notebook实例
 * @method Models\CreateNotebookLifecycleScriptResponse CreateNotebookLifecycleScript(Models\CreateNotebookLifecycleScriptRequest $req) 创建Notebook生命周期脚本
 * @method Models\CreatePresignedNotebookInstanceUrlResponse CreatePresignedNotebookInstanceUrl(Models\CreatePresignedNotebookInstanceUrlRequest $req) 创建Notebook授权Url
 * @method Models\CreateTrainingJobResponse CreateTrainingJob(Models\CreateTrainingJobRequest $req) 创建训练任务
 * @method Models\DeleteCodeRepositoryResponse DeleteCodeRepository(Models\DeleteCodeRepositoryRequest $req) 删除存储库
 * @method Models\DeleteNotebookInstanceResponse DeleteNotebookInstance(Models\DeleteNotebookInstanceRequest $req) 删除notebook实例
 * @method Models\DeleteNotebookLifecycleScriptResponse DeleteNotebookLifecycleScript(Models\DeleteNotebookLifecycleScriptRequest $req) 删除Notebook生命周期脚本
 * @method Models\DescribeCodeRepositoriesResponse DescribeCodeRepositories(Models\DescribeCodeRepositoriesRequest $req) 查询存储库列表
 * @method Models\DescribeCodeRepositoryResponse DescribeCodeRepository(Models\DescribeCodeRepositoryRequest $req) 查询存储库详情
 * @method Models\DescribeNotebookInstanceResponse DescribeNotebookInstance(Models\DescribeNotebookInstanceRequest $req) 查询Notebook实例详情
 * @method Models\DescribeNotebookInstancesResponse DescribeNotebookInstances(Models\DescribeNotebookInstancesRequest $req) 查询Notebook实例列表
 * @method Models\DescribeNotebookLifecycleScriptResponse DescribeNotebookLifecycleScript(Models\DescribeNotebookLifecycleScriptRequest $req) 查看notebook生命周期脚本详情
 * @method Models\DescribeNotebookLifecycleScriptsResponse DescribeNotebookLifecycleScripts(Models\DescribeNotebookLifecycleScriptsRequest $req) 查看notebook生命周期脚本列表
 * @method Models\DescribeNotebookSummaryResponse DescribeNotebookSummary(Models\DescribeNotebookSummaryRequest $req) 查询Notebook概览数据
 * @method Models\DescribeTrainingJobResponse DescribeTrainingJob(Models\DescribeTrainingJobRequest $req) 查询训练任务
 * @method Models\DescribeTrainingJobsResponse DescribeTrainingJobs(Models\DescribeTrainingJobsRequest $req) 查询训练任务列表
 * @method Models\StartNotebookInstanceResponse StartNotebookInstance(Models\StartNotebookInstanceRequest $req) 启动Notebook实例
 * @method Models\StopNotebookInstanceResponse StopNotebookInstance(Models\StopNotebookInstanceRequest $req) 停止Notebook实例
 * @method Models\StopTrainingJobResponse StopTrainingJob(Models\StopTrainingJobRequest $req) 停止训练任务
 * @method Models\UpdateCodeRepositoryResponse UpdateCodeRepository(Models\UpdateCodeRepositoryRequest $req) 更新存储库
 * @method Models\UpdateNotebookInstanceResponse UpdateNotebookInstance(Models\UpdateNotebookInstanceRequest $req) 更新Notebook实例
 * @method Models\UpdateNotebookLifecycleScriptResponse UpdateNotebookLifecycleScript(Models\UpdateNotebookLifecycleScriptRequest $req) 更新notebook生命周期脚本
 */

class TioneClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tione.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tione";

    /**
     * @var string
     */
    protected $version = "2019-10-22";

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
        $respClass = "TencentCloud"."\\".ucfirst("tione")."\\"."V20191022\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
