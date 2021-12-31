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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务实例视图信息
 *
 * @method integer getTaskInstanceIndex() 获取任务实例索引
 * @method void setTaskInstanceIndex(integer $TaskInstanceIndex) 设置任务实例索引
 * @method string getTaskInstanceState() 获取任务实例状态
 * @method void setTaskInstanceState(string $TaskInstanceState) 设置任务实例状态
 * @method integer getExitCode() 获取应用程序执行结束的exit code
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExitCode(integer $ExitCode) 设置应用程序执行结束的exit code
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStateReason() 获取任务实例状态原因，任务实例失败时，会记录失败原因
 * @method void setStateReason(string $StateReason) 设置任务实例状态原因，任务实例失败时，会记录失败原因
 * @method string getComputeNodeInstanceId() 获取任务实例运行时所在计算节点（例如CVM）的InstanceId。任务实例未运行或者完结时，本字段为空。任务实例重试时，本字段会随之变化
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComputeNodeInstanceId(string $ComputeNodeInstanceId) 设置任务实例运行时所在计算节点（例如CVM）的InstanceId。任务实例未运行或者完结时，本字段为空。任务实例重试时，本字段会随之变化
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getLaunchTime() 获取启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLaunchTime(string $LaunchTime) 设置启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunningTime() 获取开始运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningTime(string $RunningTime) 设置开始运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method RedirectInfo getRedirectInfo() 获取重定向信息
 * @method void setRedirectInfo(RedirectInfo $RedirectInfo) 设置重定向信息
 * @method string getStateDetailedReason() 获取任务实例状态原因详情，任务实例失败时，会记录失败原因
 * @method void setStateDetailedReason(string $StateDetailedReason) 设置任务实例状态原因详情，任务实例失败时，会记录失败原因
 */
class TaskInstanceView extends AbstractModel
{
    /**
     * @var integer 任务实例索引
     */
    public $TaskInstanceIndex;

    /**
     * @var string 任务实例状态
     */
    public $TaskInstanceState;

    /**
     * @var integer 应用程序执行结束的exit code
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExitCode;

    /**
     * @var string 任务实例状态原因，任务实例失败时，会记录失败原因
     */
    public $StateReason;

    /**
     * @var string 任务实例运行时所在计算节点（例如CVM）的InstanceId。任务实例未运行或者完结时，本字段为空。任务实例重试时，本字段会随之变化
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComputeNodeInstanceId;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 启动时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LaunchTime;

    /**
     * @var string 开始运行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningTime;

    /**
     * @var string 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var RedirectInfo 重定向信息
     */
    public $RedirectInfo;

    /**
     * @var string 任务实例状态原因详情，任务实例失败时，会记录失败原因
     */
    public $StateDetailedReason;

    /**
     * @param integer $TaskInstanceIndex 任务实例索引
     * @param string $TaskInstanceState 任务实例状态
     * @param integer $ExitCode 应用程序执行结束的exit code
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StateReason 任务实例状态原因，任务实例失败时，会记录失败原因
     * @param string $ComputeNodeInstanceId 任务实例运行时所在计算节点（例如CVM）的InstanceId。任务实例未运行或者完结时，本字段为空。任务实例重试时，本字段会随之变化
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
     * @param string $LaunchTime 启动时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunningTime 开始运行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param RedirectInfo $RedirectInfo 重定向信息
     * @param string $StateDetailedReason 任务实例状态原因详情，任务实例失败时，会记录失败原因
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
        if (array_key_exists("TaskInstanceIndex",$param) and $param["TaskInstanceIndex"] !== null) {
            $this->TaskInstanceIndex = $param["TaskInstanceIndex"];
        }

        if (array_key_exists("TaskInstanceState",$param) and $param["TaskInstanceState"] !== null) {
            $this->TaskInstanceState = $param["TaskInstanceState"];
        }

        if (array_key_exists("ExitCode",$param) and $param["ExitCode"] !== null) {
            $this->ExitCode = $param["ExitCode"];
        }

        if (array_key_exists("StateReason",$param) and $param["StateReason"] !== null) {
            $this->StateReason = $param["StateReason"];
        }

        if (array_key_exists("ComputeNodeInstanceId",$param) and $param["ComputeNodeInstanceId"] !== null) {
            $this->ComputeNodeInstanceId = $param["ComputeNodeInstanceId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LaunchTime",$param) and $param["LaunchTime"] !== null) {
            $this->LaunchTime = $param["LaunchTime"];
        }

        if (array_key_exists("RunningTime",$param) and $param["RunningTime"] !== null) {
            $this->RunningTime = $param["RunningTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RedirectInfo",$param) and $param["RedirectInfo"] !== null) {
            $this->RedirectInfo = new RedirectInfo();
            $this->RedirectInfo->deserialize($param["RedirectInfo"]);
        }

        if (array_key_exists("StateDetailedReason",$param) and $param["StateDetailedReason"] !== null) {
            $this->StateDetailedReason = $param["StateDetailedReason"];
        }
    }
}
