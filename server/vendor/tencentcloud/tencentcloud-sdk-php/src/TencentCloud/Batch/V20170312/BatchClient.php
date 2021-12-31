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

namespace TencentCloud\Batch\V20170312;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Batch\V20170312\Models as Models;

/**
 * @method Models\AttachInstancesResponse AttachInstances(Models\AttachInstancesRequest $req) 此接口可将已存在实例添加到计算环境中。
实例需要满足如下条件：<br/>
1.实例不在批量计算系统中。<br/>
2.实例状态要求处于运行中。<br/>
3.支持预付费实例，按小时后付费实例，专享子机实例。不支持竞价实例。<br/>

此接口会将加入到计算环境中的实例重设UserData和重装操作系统。
 * @method Models\CreateComputeEnvResponse CreateComputeEnv(Models\CreateComputeEnvRequest $req) 用于创建计算环境
 * @method Models\CreateCpmComputeEnvResponse CreateCpmComputeEnv(Models\CreateCpmComputeEnvRequest $req) 创建黑石计算环境
 * @method Models\CreateTaskTemplateResponse CreateTaskTemplate(Models\CreateTaskTemplateRequest $req) 用于创建任务模板
 * @method Models\DeleteComputeEnvResponse DeleteComputeEnv(Models\DeleteComputeEnvRequest $req) 用于删除计算环境
 * @method Models\DeleteJobResponse DeleteJob(Models\DeleteJobRequest $req) 用于删除作业记录。
删除作业的效果相当于删除作业相关的所有信息。删除成功后，作业相关的所有信息都无法查询。
待删除的作业必须处于完结状态，且其内部包含的所有任务实例也必须处于完结状态，否则会禁止操作。完结状态，是指处于 SUCCEED 或 FAILED 状态。
 * @method Models\DeleteTaskTemplatesResponse DeleteTaskTemplates(Models\DeleteTaskTemplatesRequest $req) 用于删除任务模板信息
 * @method Models\DescribeAvailableCvmInstanceTypesResponse DescribeAvailableCvmInstanceTypes(Models\DescribeAvailableCvmInstanceTypesRequest $req) 查看可用的CVM机型配置信息
 * @method Models\DescribeComputeEnvResponse DescribeComputeEnv(Models\DescribeComputeEnvRequest $req) 用于查询计算环境的详细信息
 * @method Models\DescribeComputeEnvActivitiesResponse DescribeComputeEnvActivities(Models\DescribeComputeEnvActivitiesRequest $req) 用于查询计算环境的活动信息
 * @method Models\DescribeComputeEnvCreateInfoResponse DescribeComputeEnvCreateInfo(Models\DescribeComputeEnvCreateInfoRequest $req) 查看计算环境的创建信息。
 * @method Models\DescribeComputeEnvCreateInfosResponse DescribeComputeEnvCreateInfos(Models\DescribeComputeEnvCreateInfosRequest $req) 用于查看计算环境创建信息列表，包括名称、描述、类型、环境参数、通知及期望节点数等。
 * @method Models\DescribeComputeEnvsResponse DescribeComputeEnvs(Models\DescribeComputeEnvsRequest $req) 用于查看计算环境列表
 * @method Models\DescribeCpmOsInfoResponse DescribeCpmOsInfo(Models\DescribeCpmOsInfoRequest $req) 创建黑石计算环境时，查询批量计算环境支持的黑石操作系统信息
 * @method Models\DescribeCvmZoneInstanceConfigInfosResponse DescribeCvmZoneInstanceConfigInfos(Models\DescribeCvmZoneInstanceConfigInfosRequest $req) 获取批量计算可用区机型配置信息
 * @method Models\DescribeInstanceCategoriesResponse DescribeInstanceCategories(Models\DescribeInstanceCategoriesRequest $req) 目前对CVM现有实例族分类，每一类包含若干实例族。该接口用于查询实例分类信息。
 * @method Models\DescribeJobResponse DescribeJob(Models\DescribeJobRequest $req) 用于查看一个作业的详细信息，包括内部任务（Task）和依赖（Dependence）信息。
 * @method Models\DescribeJobSubmitInfoResponse DescribeJobSubmitInfo(Models\DescribeJobSubmitInfoRequest $req) 用于查询指定作业的提交信息，其返回内容包括 JobId 和 SubmitJob 接口中作为输入参数的作业提交信息
 * @method Models\DescribeJobsResponse DescribeJobs(Models\DescribeJobsRequest $req) 用于查询若干个作业的概览信息
 * @method Models\DescribeTaskResponse DescribeTask(Models\DescribeTaskRequest $req) 用于查询指定任务的详细信息，包括任务内部的任务实例信息。
 * @method Models\DescribeTaskLogsResponse DescribeTaskLogs(Models\DescribeTaskLogsRequest $req) 用于获取任务多个实例标准输出和标准错误日志。
 * @method Models\DescribeTaskTemplatesResponse DescribeTaskTemplates(Models\DescribeTaskTemplatesRequest $req) 用于查询任务模板信息
 * @method Models\DetachInstancesResponse DetachInstances(Models\DetachInstancesRequest $req) 将添加到计算环境中的实例从计算环境中移出。若是由批量计算自动创建的计算节点实例则不允许移出。
 * @method Models\ModifyComputeEnvResponse ModifyComputeEnv(Models\ModifyComputeEnvRequest $req) 用于修改计算环境属性
 * @method Models\ModifyTaskTemplateResponse ModifyTaskTemplate(Models\ModifyTaskTemplateRequest $req) 用于修改任务模板
 * @method Models\RetryJobsResponse RetryJobs(Models\RetryJobsRequest $req) 用于重试作业中失败的任务实例。
当且仅当作业处于“FAILED”状态，支持重试操作。重试操作成功后，作业会按照“DAG”中指定的任务依赖关系，依次重试各个任务中失败的任务实例。任务实例的历史信息将被重置，如同首次运行一样，参与后续的调度和执行。
 * @method Models\SubmitJobResponse SubmitJob(Models\SubmitJobRequest $req) 用于提交一个作业
 * @method Models\TerminateComputeNodeResponse TerminateComputeNode(Models\TerminateComputeNodeRequest $req) 用于销毁计算节点。
对于状态为CREATED、CREATION_FAILED、RUNNING和ABNORMAL的节点，允许销毁处理。
 * @method Models\TerminateComputeNodesResponse TerminateComputeNodes(Models\TerminateComputeNodesRequest $req) 用于批量销毁计算节点，不允许重复销毁同一个节点。
 * @method Models\TerminateJobResponse TerminateJob(Models\TerminateJobRequest $req) 用于终止作业。
当作业处于“SUBMITTED”状态时，禁止终止操作；当作业处于“SUCCEED”状态时，终止操作不会生效。
终止作业是一个异步过程。整个终止过程的耗时和任务总数成正比。终止的效果相当于所含的所有任务实例进行TerminateTaskInstance操作。具体效果和用法可参考TerminateTaskInstance。
 * @method Models\TerminateTaskInstanceResponse TerminateTaskInstance(Models\TerminateTaskInstanceRequest $req) 用于终止任务实例。
对于状态已经为“SUCCEED”和“FAILED”的任务实例，不做处理。
对于状态为“SUBMITTED”、“PENDING”、“RUNNABLE”的任务实例，状态将置为“FAILED”状态。
对于状态为“STARTING”、“RUNNING”、“FAILED_INTERRUPTED”的任务实例，分区两种情况：如果未显示指定计算环境，会先销毁CVM服务器，然后将状态置为“FAILED”，具有一定耗时；如果指定了计算环境EnvId，任务实例状态置为“FAILED”，并重启执行该任务的CVM服务器，具有一定的耗时。
对于状态为“FAILED_INTERRUPTED”的任务实例，终止操作实际成功之后，相关资源和配额才会释放。
 */

class BatchClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "batch.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "batch";

    /**
     * @var string
     */
    protected $version = "2017-03-12";

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
        $respClass = "TencentCloud"."\\".ucfirst("batch")."\\"."V20170312\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
