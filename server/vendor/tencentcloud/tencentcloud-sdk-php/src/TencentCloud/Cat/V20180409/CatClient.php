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

namespace TencentCloud\Cat\V20180409;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cat\V20180409\Models as Models;

/**
 * @method Models\BindAlarmPolicyResponse BindAlarmPolicy(Models\BindAlarmPolicyRequest $req) 绑定拨测任务和告警策略组
 * @method Models\CreateAgentGroupResponse CreateAgentGroup(Models\CreateAgentGroupRequest $req) 添加拨测分组
 * @method Models\CreateTaskExResponse CreateTaskEx(Models\CreateTaskExRequest $req) 创建拨测任务(扩展)
 * @method Models\DeleteAgentGroupResponse DeleteAgentGroup(Models\DeleteAgentGroupRequest $req) 删除拨测分组
 * @method Models\DeleteTasksResponse DeleteTasks(Models\DeleteTasksRequest $req) 删除多个拨测任务
 * @method Models\DescribeAgentGroupsResponse DescribeAgentGroups(Models\DescribeAgentGroupsRequest $req) 查询拨测分组列表
 * @method Models\DescribeAgentsResponse DescribeAgents(Models\DescribeAgentsRequest $req) 查询本用户可选的拨测点列表
 * @method Models\DescribeAlarmTopicResponse DescribeAlarmTopic(Models\DescribeAlarmTopicRequest $req) 查询用户的告警主题列表
 * @method Models\DescribeAlarmsResponse DescribeAlarms(Models\DescribeAlarmsRequest $req) 查询拨测告警列表
 * @method Models\DescribeAlarmsByTaskResponse DescribeAlarmsByTask(Models\DescribeAlarmsByTaskRequest $req) 按任务查询拨测告警列表
 * @method Models\DescribeCatLogsResponse DescribeCatLogs(Models\DescribeCatLogsRequest $req) 查询拨测流水
 * @method Models\DescribeTaskDetailResponse DescribeTaskDetail(Models\DescribeTaskDetailRequest $req) 查询拨测任务信息
 * @method Models\DescribeTasksByTypeResponse DescribeTasksByType(Models\DescribeTasksByTypeRequest $req) 按类型查询拨测任务列表
 * @method Models\DescribeUserLimitResponse DescribeUserLimit(Models\DescribeUserLimitRequest $req) 获取用户可用资源限制
 * @method Models\GetAvailRatioHistoryResponse GetAvailRatioHistory(Models\GetAvailRatioHistoryRequest $req) 获取指定时刻的可用率地图信息
 * @method Models\GetDailyAvailRatioResponse GetDailyAvailRatio(Models\GetDailyAvailRatioRequest $req) 获取一天的整体可用率信息
 * @method Models\GetRealAvailRatioResponse GetRealAvailRatio(Models\GetRealAvailRatioRequest $req) 获取实时可用率信息
 * @method Models\GetRespTimeTrendExResponse GetRespTimeTrendEx(Models\GetRespTimeTrendExRequest $req) 查询拨测任务的走势数据
 * @method Models\GetResultSummaryResponse GetResultSummary(Models\GetResultSummaryRequest $req) 获取任务列表的实时数据
 * @method Models\GetReturnCodeHistoryResponse GetReturnCodeHistory(Models\GetReturnCodeHistoryRequest $req) 查询拨测任务的历史返回码信息
 * @method Models\GetReturnCodeInfoResponse GetReturnCodeInfo(Models\GetReturnCodeInfoRequest $req) 查询拨测任务的返回码统计信息
 * @method Models\GetTaskTotalNumberResponse GetTaskTotalNumber(Models\GetTaskTotalNumberRequest $req) 获取AppId下的拨测任务总数
 * @method Models\ModifyAgentGroupResponse ModifyAgentGroup(Models\ModifyAgentGroupRequest $req) 修改拨测分组
 * @method Models\ModifyTaskExResponse ModifyTaskEx(Models\ModifyTaskExRequest $req) 修改拨测任务(扩展)
 * @method Models\PauseTaskResponse PauseTask(Models\PauseTaskRequest $req) 暂停拨测任务
 * @method Models\RunTaskResponse RunTask(Models\RunTaskRequest $req) 运行拨测任务
 * @method Models\VerifyResultResponse VerifyResult(Models\VerifyResultRequest $req) 验证拨测任务，结果验证查询（验证成功的，才建议创建拨测任务）
 */

class CatClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cat.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cat";

    /**
     * @var string
     */
    protected $version = "2018-04-09";

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
        $respClass = "TencentCloud"."\\".ucfirst("cat")."\\"."V20180409\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
