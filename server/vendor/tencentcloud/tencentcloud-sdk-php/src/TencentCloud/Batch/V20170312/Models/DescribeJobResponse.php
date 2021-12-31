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
 * DescribeJob返回参数结构体
 *
 * @method string getJobId() 获取作业ID
 * @method void setJobId(string $JobId) 设置作业ID
 * @method string getJobName() 获取作业名称
 * @method void setJobName(string $JobName) 设置作业名称
 * @method string getZone() 获取可用区信息
 * @method void setZone(string $Zone) 设置可用区信息
 * @method integer getPriority() 获取作业优先级
 * @method void setPriority(integer $Priority) 设置作业优先级
 * @method string getJobState() 获取作业状态
 * @method void setJobState(string $JobState) 设置作业状态
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method array getTaskSet() 获取任务视图信息
 * @method void setTaskSet(array $TaskSet) 设置任务视图信息
 * @method array getDependenceSet() 获取任务间依赖信息
 * @method void setDependenceSet(array $DependenceSet) 设置任务间依赖信息
 * @method TaskMetrics getTaskMetrics() 获取任务统计指标
 * @method void setTaskMetrics(TaskMetrics $TaskMetrics) 设置任务统计指标
 * @method TaskInstanceMetrics getTaskInstanceMetrics() 获取任务实例统计指标
 * @method void setTaskInstanceMetrics(TaskInstanceMetrics $TaskInstanceMetrics) 设置任务实例统计指标
 * @method string getStateReason() 获取作业失败原因
 * @method void setStateReason(string $StateReason) 设置作业失败原因
 * @method array getTags() 获取作业绑定的标签列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置作业绑定的标签列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNextAction() 获取下一步动作
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNextAction(string $NextAction) 设置下一步动作
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeJobResponse extends AbstractModel
{
    /**
     * @var string 作业ID
     */
    public $JobId;

    /**
     * @var string 作业名称
     */
    public $JobName;

    /**
     * @var string 可用区信息
     */
    public $Zone;

    /**
     * @var integer 作业优先级
     */
    public $Priority;

    /**
     * @var string 作业状态
     */
    public $JobState;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var array 任务视图信息
     */
    public $TaskSet;

    /**
     * @var array 任务间依赖信息
     */
    public $DependenceSet;

    /**
     * @var TaskMetrics 任务统计指标
     */
    public $TaskMetrics;

    /**
     * @var TaskInstanceMetrics 任务实例统计指标
     */
    public $TaskInstanceMetrics;

    /**
     * @var string 作业失败原因
     */
    public $StateReason;

    /**
     * @var array 作业绑定的标签列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 下一步动作
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NextAction;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $JobId 作业ID
     * @param string $JobName 作业名称
     * @param string $Zone 可用区信息
     * @param integer $Priority 作业优先级
     * @param string $JobState 作业状态
     * @param string $CreateTime 创建时间
     * @param string $EndTime 结束时间
     * @param array $TaskSet 任务视图信息
     * @param array $DependenceSet 任务间依赖信息
     * @param TaskMetrics $TaskMetrics 任务统计指标
     * @param TaskInstanceMetrics $TaskInstanceMetrics 任务实例统计指标
     * @param string $StateReason 作业失败原因
     * @param array $Tags 作业绑定的标签列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NextAction 下一步动作
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("JobState",$param) and $param["JobState"] !== null) {
            $this->JobState = $param["JobState"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskSet",$param) and $param["TaskSet"] !== null) {
            $this->TaskSet = [];
            foreach ($param["TaskSet"] as $key => $value){
                $obj = new TaskView();
                $obj->deserialize($value);
                array_push($this->TaskSet, $obj);
            }
        }

        if (array_key_exists("DependenceSet",$param) and $param["DependenceSet"] !== null) {
            $this->DependenceSet = [];
            foreach ($param["DependenceSet"] as $key => $value){
                $obj = new Dependence();
                $obj->deserialize($value);
                array_push($this->DependenceSet, $obj);
            }
        }

        if (array_key_exists("TaskMetrics",$param) and $param["TaskMetrics"] !== null) {
            $this->TaskMetrics = new TaskMetrics();
            $this->TaskMetrics->deserialize($param["TaskMetrics"]);
        }

        if (array_key_exists("TaskInstanceMetrics",$param) and $param["TaskInstanceMetrics"] !== null) {
            $this->TaskInstanceMetrics = new TaskInstanceMetrics();
            $this->TaskInstanceMetrics->deserialize($param["TaskInstanceMetrics"]);
        }

        if (array_key_exists("StateReason",$param) and $param["StateReason"] !== null) {
            $this->StateReason = $param["StateReason"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("NextAction",$param) and $param["NextAction"] !== null) {
            $this->NextAction = $param["NextAction"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
