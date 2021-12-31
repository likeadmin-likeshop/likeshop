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
 * 计算环境的创建或销毁活动
 *
 * @method string getActivityId() 获取活动ID
 * @method void setActivityId(string $ActivityId) 设置活动ID
 * @method string getComputeNodeId() 获取计算节点ID
 * @method void setComputeNodeId(string $ComputeNodeId) 设置计算节点ID
 * @method string getComputeNodeActivityType() 获取计算节点活动类型，创建或者销毁
 * @method void setComputeNodeActivityType(string $ComputeNodeActivityType) 设置计算节点活动类型，创建或者销毁
 * @method string getEnvId() 获取计算环境ID
 * @method void setEnvId(string $EnvId) 设置计算环境ID
 * @method string getCause() 获取起因
 * @method void setCause(string $Cause) 设置起因
 * @method string getActivityState() 获取活动状态
 * @method void setActivityState(string $ActivityState) 设置活动状态
 * @method string getStateReason() 获取状态原因
 * @method void setStateReason(string $StateReason) 设置状态原因
 * @method string getStartTime() 获取活动开始时间
 * @method void setStartTime(string $StartTime) 设置活动开始时间
 * @method string getEndTime() 获取活动结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置活动结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取云服务器实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置云服务器实例ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class Activity extends AbstractModel
{
    /**
     * @var string 活动ID
     */
    public $ActivityId;

    /**
     * @var string 计算节点ID
     */
    public $ComputeNodeId;

    /**
     * @var string 计算节点活动类型，创建或者销毁
     */
    public $ComputeNodeActivityType;

    /**
     * @var string 计算环境ID
     */
    public $EnvId;

    /**
     * @var string 起因
     */
    public $Cause;

    /**
     * @var string 活动状态
     */
    public $ActivityState;

    /**
     * @var string 状态原因
     */
    public $StateReason;

    /**
     * @var string 活动开始时间
     */
    public $StartTime;

    /**
     * @var string 活动结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 云服务器实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @param string $ActivityId 活动ID
     * @param string $ComputeNodeId 计算节点ID
     * @param string $ComputeNodeActivityType 计算节点活动类型，创建或者销毁
     * @param string $EnvId 计算环境ID
     * @param string $Cause 起因
     * @param string $ActivityState 活动状态
     * @param string $StateReason 状态原因
     * @param string $StartTime 活动开始时间
     * @param string $EndTime 活动结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 云服务器实例ID
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("ComputeNodeId",$param) and $param["ComputeNodeId"] !== null) {
            $this->ComputeNodeId = $param["ComputeNodeId"];
        }

        if (array_key_exists("ComputeNodeActivityType",$param) and $param["ComputeNodeActivityType"] !== null) {
            $this->ComputeNodeActivityType = $param["ComputeNodeActivityType"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Cause",$param) and $param["Cause"] !== null) {
            $this->Cause = $param["Cause"];
        }

        if (array_key_exists("ActivityState",$param) and $param["ActivityState"] !== null) {
            $this->ActivityState = $param["ActivityState"];
        }

        if (array_key_exists("StateReason",$param) and $param["StateReason"] !== null) {
            $this->StateReason = $param["StateReason"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
