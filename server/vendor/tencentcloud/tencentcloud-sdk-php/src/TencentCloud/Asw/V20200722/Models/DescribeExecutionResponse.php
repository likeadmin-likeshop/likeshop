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
namespace TencentCloud\Asw\V20200722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeExecution返回参数结构体
 *
 * @method string getExecutionResourceName() 获取执行资源名
 * @method void setExecutionResourceName(string $ExecutionResourceName) 设置执行资源名
 * @method string getName() 获取资源名称
 * @method void setName(string $Name) 设置资源名称
 * @method string getStartDate() 获取执行开始时间，毫秒
 * @method void setStartDate(string $StartDate) 设置执行开始时间，毫秒
 * @method string getStopDate() 获取执行结束时间，毫秒
 * @method void setStopDate(string $StopDate) 设置执行结束时间，毫秒
 * @method string getStateMachineResourceName() 获取状态机资源名
 * @method void setStateMachineResourceName(string $StateMachineResourceName) 设置状态机资源名
 * @method string getStatus() 获取执行状态。INIT，RUNNING，SUCCEED，FAILED，TERMINATED
 * @method void setStatus(string $Status) 设置执行状态。INIT，RUNNING，SUCCEED，FAILED，TERMINATED
 * @method string getInput() 获取执行的输入
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInput(string $Input) 设置执行的输入
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutput() 获取执行的输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutput(string $Output) 设置执行的输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionDefinition() 获取启动执行时，状态机的定义
 * @method void setExecutionDefinition(string $ExecutionDefinition) 设置启动执行时，状态机的定义
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeExecutionResponse extends AbstractModel
{
    /**
     * @var string 执行资源名
     */
    public $ExecutionResourceName;

    /**
     * @var string 资源名称
     */
    public $Name;

    /**
     * @var string 执行开始时间，毫秒
     */
    public $StartDate;

    /**
     * @var string 执行结束时间，毫秒
     */
    public $StopDate;

    /**
     * @var string 状态机资源名
     */
    public $StateMachineResourceName;

    /**
     * @var string 执行状态。INIT，RUNNING，SUCCEED，FAILED，TERMINATED
     */
    public $Status;

    /**
     * @var string 执行的输入
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Input;

    /**
     * @var string 执行的输出
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Output;

    /**
     * @var string 启动执行时，状态机的定义
     */
    public $ExecutionDefinition;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ExecutionResourceName 执行资源名
     * @param string $Name 资源名称
     * @param string $StartDate 执行开始时间，毫秒
     * @param string $StopDate 执行结束时间，毫秒
     * @param string $StateMachineResourceName 状态机资源名
     * @param string $Status 执行状态。INIT，RUNNING，SUCCEED，FAILED，TERMINATED
     * @param string $Input 执行的输入
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Output 执行的输出
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionDefinition 启动执行时，状态机的定义
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ExecutionResourceName",$param) and $param["ExecutionResourceName"] !== null) {
            $this->ExecutionResourceName = $param["ExecutionResourceName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("StopDate",$param) and $param["StopDate"] !== null) {
            $this->StopDate = $param["StopDate"];
        }

        if (array_key_exists("StateMachineResourceName",$param) and $param["StateMachineResourceName"] !== null) {
            $this->StateMachineResourceName = $param["StateMachineResourceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = $param["Output"];
        }

        if (array_key_exists("ExecutionDefinition",$param) and $param["ExecutionDefinition"] !== null) {
            $this->ExecutionDefinition = $param["ExecutionDefinition"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
