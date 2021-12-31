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
 * DescribeTask返回参数结构体
 *
 * @method string getJobId() 获取作业ID
 * @method void setJobId(string $JobId) 设置作业ID
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getTaskState() 获取任务状态
 * @method void setTaskState(string $TaskState) 设置任务状态
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getTaskInstanceTotalCount() 获取任务实例总数
 * @method void setTaskInstanceTotalCount(integer $TaskInstanceTotalCount) 设置任务实例总数
 * @method array getTaskInstanceSet() 获取任务实例信息
 * @method void setTaskInstanceSet(array $TaskInstanceSet) 设置任务实例信息
 * @method TaskInstanceMetrics getTaskInstanceMetrics() 获取任务实例统计指标
 * @method void setTaskInstanceMetrics(TaskInstanceMetrics $TaskInstanceMetrics) 设置任务实例统计指标
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTaskResponse extends AbstractModel
{
    /**
     * @var string 作业ID
     */
    public $JobId;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 任务状态
     */
    public $TaskState;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 任务实例总数
     */
    public $TaskInstanceTotalCount;

    /**
     * @var array 任务实例信息
     */
    public $TaskInstanceSet;

    /**
     * @var TaskInstanceMetrics 任务实例统计指标
     */
    public $TaskInstanceMetrics;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $JobId 作业ID
     * @param string $TaskName 任务名称
     * @param string $TaskState 任务状态
     * @param string $CreateTime 创建时间
     * @param string $EndTime 结束时间
     * @param integer $TaskInstanceTotalCount 任务实例总数
     * @param array $TaskInstanceSet 任务实例信息
     * @param TaskInstanceMetrics $TaskInstanceMetrics 任务实例统计指标
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

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskState",$param) and $param["TaskState"] !== null) {
            $this->TaskState = $param["TaskState"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskInstanceTotalCount",$param) and $param["TaskInstanceTotalCount"] !== null) {
            $this->TaskInstanceTotalCount = $param["TaskInstanceTotalCount"];
        }

        if (array_key_exists("TaskInstanceSet",$param) and $param["TaskInstanceSet"] !== null) {
            $this->TaskInstanceSet = [];
            foreach ($param["TaskInstanceSet"] as $key => $value){
                $obj = new TaskInstanceView();
                $obj->deserialize($value);
                array_push($this->TaskInstanceSet, $obj);
            }
        }

        if (array_key_exists("TaskInstanceMetrics",$param) and $param["TaskInstanceMetrics"] !== null) {
            $this->TaskInstanceMetrics = new TaskInstanceMetrics();
            $this->TaskInstanceMetrics->deserialize($param["TaskInstanceMetrics"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
