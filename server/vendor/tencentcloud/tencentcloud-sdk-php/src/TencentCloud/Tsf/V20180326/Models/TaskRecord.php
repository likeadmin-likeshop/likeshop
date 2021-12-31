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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务定义
 *
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getTaskType() 获取任务类型
 * @method void setTaskType(string $TaskType) 设置任务类型
 * @method string getExecuteType() 获取执行类型
 * @method void setExecuteType(string $ExecuteType) 设置执行类型
 * @method string getTaskContent() 获取任务内容，长度限制65535字节
 * @method void setTaskContent(string $TaskContent) 设置任务内容，长度限制65535字节
 * @method string getGroupId() 获取分组ID
 * @method void setGroupId(string $GroupId) 设置分组ID
 * @method integer getTimeOut() 获取超时时间
 * @method void setTimeOut(integer $TimeOut) 设置超时时间
 * @method integer getRetryCount() 获取重试次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryCount(integer $RetryCount) 设置重试次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetryInterval() 获取重试间隔
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryInterval(integer $RetryInterval) 设置重试间隔
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskRule getTaskRule() 获取触发规则
 * @method void setTaskRule(TaskRule $TaskRule) 设置触发规则
 * @method string getTaskState() 获取是否启用任务,ENABLED/DISABLED
 * @method void setTaskState(string $TaskState) 设置是否启用任务,ENABLED/DISABLED
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getSuccessOperator() 获取判断任务成功的操作符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessOperator(string $SuccessOperator) 设置判断任务成功的操作符
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSuccessRatio() 获取判断任务成功的阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessRatio(integer $SuccessRatio) 设置判断任务成功的阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getShardCount() 获取分片数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShardCount(integer $ShardCount) 设置分片数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method AdvanceSettings getAdvanceSettings() 获取高级设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvanceSettings(AdvanceSettings $AdvanceSettings) 设置高级设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getShardArguments() 获取分片参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShardArguments(array $ShardArguments) 设置分片参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBelongFlowIds() 获取所属工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBelongFlowIds(array $BelongFlowIds) 设置所属工作流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskLogId() 获取任务历史ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskLogId(string $TaskLogId) 设置任务历史ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerType() 获取触发类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerType(string $TriggerType) 设置触发类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskArgument() 获取任务参数，长度限制10000个字符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskArgument(string $TaskArgument) 设置任务参数，长度限制10000个字符
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskRecord extends AbstractModel
{
    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 任务类型
     */
    public $TaskType;

    /**
     * @var string 执行类型
     */
    public $ExecuteType;

    /**
     * @var string 任务内容，长度限制65535字节
     */
    public $TaskContent;

    /**
     * @var string 分组ID
     */
    public $GroupId;

    /**
     * @var integer 超时时间
     */
    public $TimeOut;

    /**
     * @var integer 重试次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetryCount;

    /**
     * @var integer 重试间隔
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetryInterval;

    /**
     * @var TaskRule 触发规则
     */
    public $TaskRule;

    /**
     * @var string 是否启用任务,ENABLED/DISABLED
     */
    public $TaskState;

    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 判断任务成功的操作符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessOperator;

    /**
     * @var integer 判断任务成功的阈值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessRatio;

    /**
     * @var integer 分片数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShardCount;

    /**
     * @var AdvanceSettings 高级设置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdvanceSettings;

    /**
     * @var array 分片参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShardArguments;

    /**
     * @var array 所属工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BelongFlowIds;

    /**
     * @var string 任务历史ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskLogId;

    /**
     * @var string 触发类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerType;

    /**
     * @var string 任务参数，长度限制10000个字符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskArgument;

    /**
     * @param string $TaskName 任务名称
     * @param string $TaskType 任务类型
     * @param string $ExecuteType 执行类型
     * @param string $TaskContent 任务内容，长度限制65535字节
     * @param string $GroupId 分组ID
     * @param integer $TimeOut 超时时间
     * @param integer $RetryCount 重试次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetryInterval 重试间隔
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskRule $TaskRule 触发规则
     * @param string $TaskState 是否启用任务,ENABLED/DISABLED
     * @param string $TaskId 任务ID
     * @param string $SuccessOperator 判断任务成功的操作符
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SuccessRatio 判断任务成功的阈值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ShardCount 分片数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param AdvanceSettings $AdvanceSettings 高级设置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ShardArguments 分片参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BelongFlowIds 所属工作流ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskLogId 任务历史ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerType 触发类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskArgument 任务参数，长度限制10000个字符
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ExecuteType",$param) and $param["ExecuteType"] !== null) {
            $this->ExecuteType = $param["ExecuteType"];
        }

        if (array_key_exists("TaskContent",$param) and $param["TaskContent"] !== null) {
            $this->TaskContent = $param["TaskContent"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("TimeOut",$param) and $param["TimeOut"] !== null) {
            $this->TimeOut = $param["TimeOut"];
        }

        if (array_key_exists("RetryCount",$param) and $param["RetryCount"] !== null) {
            $this->RetryCount = $param["RetryCount"];
        }

        if (array_key_exists("RetryInterval",$param) and $param["RetryInterval"] !== null) {
            $this->RetryInterval = $param["RetryInterval"];
        }

        if (array_key_exists("TaskRule",$param) and $param["TaskRule"] !== null) {
            $this->TaskRule = new TaskRule();
            $this->TaskRule->deserialize($param["TaskRule"]);
        }

        if (array_key_exists("TaskState",$param) and $param["TaskState"] !== null) {
            $this->TaskState = $param["TaskState"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("SuccessOperator",$param) and $param["SuccessOperator"] !== null) {
            $this->SuccessOperator = $param["SuccessOperator"];
        }

        if (array_key_exists("SuccessRatio",$param) and $param["SuccessRatio"] !== null) {
            $this->SuccessRatio = $param["SuccessRatio"];
        }

        if (array_key_exists("ShardCount",$param) and $param["ShardCount"] !== null) {
            $this->ShardCount = $param["ShardCount"];
        }

        if (array_key_exists("AdvanceSettings",$param) and $param["AdvanceSettings"] !== null) {
            $this->AdvanceSettings = new AdvanceSettings();
            $this->AdvanceSettings->deserialize($param["AdvanceSettings"]);
        }

        if (array_key_exists("ShardArguments",$param) and $param["ShardArguments"] !== null) {
            $this->ShardArguments = [];
            foreach ($param["ShardArguments"] as $key => $value){
                $obj = new ShardArgument();
                $obj->deserialize($value);
                array_push($this->ShardArguments, $obj);
            }
        }

        if (array_key_exists("BelongFlowIds",$param) and $param["BelongFlowIds"] !== null) {
            $this->BelongFlowIds = $param["BelongFlowIds"];
        }

        if (array_key_exists("TaskLogId",$param) and $param["TaskLogId"] !== null) {
            $this->TaskLogId = $param["TaskLogId"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("TaskArgument",$param) and $param["TaskArgument"] !== null) {
            $this->TaskArgument = $param["TaskArgument"];
        }
    }
}
