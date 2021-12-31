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

namespace TencentCloud\Asw\V20200722;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Asw\V20200722\Models as Models;

/**
 * @method Models\CreateFlowServiceResponse CreateFlowService(Models\CreateFlowServiceRequest $req) 该接口用于生成状态机服务
 * @method Models\DescribeExecutionResponse DescribeExecution(Models\DescribeExecutionRequest $req) 查询执行详细信息
 * @method Models\DescribeExecutionHistoryResponse DescribeExecutionHistory(Models\DescribeExecutionHistoryRequest $req) 一次执行会有很多步骤，经过很多节点，这个接口描述某一次执行的事件的历史
 * @method Models\DescribeExecutionsResponse DescribeExecutions(Models\DescribeExecutionsRequest $req) 对状态机的执行历史进行描述.
 * @method Models\DescribeFlowServiceDetailResponse DescribeFlowServiceDetail(Models\DescribeFlowServiceDetailRequest $req) 查询该用户指定状态机下的详情数据。
 * @method Models\DescribeFlowServicesResponse DescribeFlowServices(Models\DescribeFlowServicesRequest $req) 查询指定用户下所有状态机，以列表形式返回
 * @method Models\ModifyFlowServiceResponse ModifyFlowService(Models\ModifyFlowServiceRequest $req) 该接口用于修改状态机
 * @method Models\StartExecutionResponse StartExecution(Models\StartExecutionRequest $req) 为指定的状态机启动一次执行
 * @method Models\StopExecutionResponse StopExecution(Models\StopExecutionRequest $req) 终止某个状态机
 */

class AswClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "asw.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "asw";

    /**
     * @var string
     */
    protected $version = "2020-07-22";

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
        $respClass = "TencentCloud"."\\".ucfirst("asw")."\\"."V20200722\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
