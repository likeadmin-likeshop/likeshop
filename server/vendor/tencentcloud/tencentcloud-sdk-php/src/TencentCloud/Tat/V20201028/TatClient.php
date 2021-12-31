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

namespace TencentCloud\Tat\V20201028;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tat\V20201028\Models as Models;

/**
 * @method Models\CreateCommandResponse CreateCommand(Models\CreateCommandRequest $req) 此接口用于创建命令。
 * @method Models\DeleteCommandResponse DeleteCommand(Models\DeleteCommandRequest $req) 此接口用于删除命令。
 * @method Models\DescribeAutomationAgentStatusResponse DescribeAutomationAgentStatus(Models\DescribeAutomationAgentStatusRequest $req) 此接口用于查询自动化助手客户端的状态。
 * @method Models\DescribeCommandsResponse DescribeCommands(Models\DescribeCommandsRequest $req) 此接口用于查询命令详情。
 * @method Models\DescribeInvocationTasksResponse DescribeInvocationTasks(Models\DescribeInvocationTasksRequest $req) 此接口用于查询执行任务详情。
 * @method Models\DescribeInvocationsResponse DescribeInvocations(Models\DescribeInvocationsRequest $req) 此接口用于查询执行活动详情。
 * @method Models\DescribeRegionsResponse DescribeRegions(Models\DescribeRegionsRequest $req) 此接口用于查询 TAT 产品后台地域列表。
RegionState 为 AVAILABLE，代表该地域的 TAT 后台服务已经可用；未返回，代表该地域的 TAT 后台服务尚不可用。
 * @method Models\InvokeCommandResponse InvokeCommand(Models\InvokeCommandRequest $req) 在指定的实例上触发命令，调用成功返回执行活动ID（inv-xxxxxxxx），每个执行活动内部有一个或多个执行任务（invt-xxxxxxxx），每个执行任务代表命令在一台 CVM 或一台 Lighthouse 上的执行记录。

* 如果指定实例未安装 agent，或 agent 不在线，返回失败
* 如果命令类型与 agent 运行环境不符，返回失败
* 指定的实例需要处于 VPC 网络
* 指定的实例需要处于 RUNNING 状态
* 不可同时指定 CVM 和 Lighthouse
 * @method Models\ModifyCommandResponse ModifyCommand(Models\ModifyCommandRequest $req) 此接口用于修改命令。
 * @method Models\PreviewReplacedCommandContentResponse PreviewReplacedCommandContent(Models\PreviewReplacedCommandContentRequest $req) 此接口用于预览自定义参数替换后的命令内容。不会触发真实执行。
 * @method Models\RunCommandResponse RunCommand(Models\RunCommandRequest $req) 执行命令，调用成功返回执行活动ID（inv-xxxxxxxx），每个执行活动内部有一个或多个执行任务（invt-xxxxxxxx），每个执行任务代表命令在一台 CVM 或一台 Lighthouse 上的执行记录。

* 如果指定实例未安装 agent，或 agent 不在线，返回失败
* 如果命令类型与 agent 运行环境不符，返回失败
* 指定的实例需要处于 VPC 网络
* 指定的实例需要处于 `RUNNING` 状态
* 不可同时指定 CVM 和 Lighthouse
 */

class TatClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tat.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tat";

    /**
     * @var string
     */
    protected $version = "2020-10-28";

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
        $respClass = "TencentCloud"."\\".ucfirst("tat")."\\"."V20201028\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
