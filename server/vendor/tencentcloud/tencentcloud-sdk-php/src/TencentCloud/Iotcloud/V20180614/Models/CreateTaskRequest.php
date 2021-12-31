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
namespace TencentCloud\Iotcloud\V20180614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTask请求参数结构体
 *
 * @method string getTaskType() 获取任务类型，取值为 “UpdateShadow” 或者 “PublishMessage”
 * @method void setTaskType(string $TaskType) 设置任务类型，取值为 “UpdateShadow” 或者 “PublishMessage”
 * @method string getProductId() 获取执行任务的产品ID
 * @method void setProductId(string $ProductId) 设置执行任务的产品ID
 * @method string getDeviceNameFilter() 获取执行任务的设备名的正则表达式
 * @method void setDeviceNameFilter(string $DeviceNameFilter) 设置执行任务的设备名的正则表达式
 * @method integer getScheduleTimeInSeconds() 获取任务开始执行的时间。 取值为 Unix 时间戳，单位秒，且需大于等于当前时间时间戳，0为系统当前时间时间戳，即立即执行，最大为当前时间86400秒后，超过则取值为当前时间86400秒后
 * @method void setScheduleTimeInSeconds(integer $ScheduleTimeInSeconds) 设置任务开始执行的时间。 取值为 Unix 时间戳，单位秒，且需大于等于当前时间时间戳，0为系统当前时间时间戳，即立即执行，最大为当前时间86400秒后，超过则取值为当前时间86400秒后
 * @method Task getTasks() 获取任务描述细节，描述见下 Task
 * @method void setTasks(Task $Tasks) 设置任务描述细节，描述见下 Task
 * @method integer getMaxExecutionTimeInSeconds() 获取最长执行时间，单位秒，被调度后超过此时间仍未有结果则视为任务失败。取值为0-86400，默认为86400
 * @method void setMaxExecutionTimeInSeconds(integer $MaxExecutionTimeInSeconds) 设置最长执行时间，单位秒，被调度后超过此时间仍未有结果则视为任务失败。取值为0-86400，默认为86400
 */
class CreateTaskRequest extends AbstractModel
{
    /**
     * @var string 任务类型，取值为 “UpdateShadow” 或者 “PublishMessage”
     */
    public $TaskType;

    /**
     * @var string 执行任务的产品ID
     */
    public $ProductId;

    /**
     * @var string 执行任务的设备名的正则表达式
     */
    public $DeviceNameFilter;

    /**
     * @var integer 任务开始执行的时间。 取值为 Unix 时间戳，单位秒，且需大于等于当前时间时间戳，0为系统当前时间时间戳，即立即执行，最大为当前时间86400秒后，超过则取值为当前时间86400秒后
     */
    public $ScheduleTimeInSeconds;

    /**
     * @var Task 任务描述细节，描述见下 Task
     */
    public $Tasks;

    /**
     * @var integer 最长执行时间，单位秒，被调度后超过此时间仍未有结果则视为任务失败。取值为0-86400，默认为86400
     */
    public $MaxExecutionTimeInSeconds;

    /**
     * @param string $TaskType 任务类型，取值为 “UpdateShadow” 或者 “PublishMessage”
     * @param string $ProductId 执行任务的产品ID
     * @param string $DeviceNameFilter 执行任务的设备名的正则表达式
     * @param integer $ScheduleTimeInSeconds 任务开始执行的时间。 取值为 Unix 时间戳，单位秒，且需大于等于当前时间时间戳，0为系统当前时间时间戳，即立即执行，最大为当前时间86400秒后，超过则取值为当前时间86400秒后
     * @param Task $Tasks 任务描述细节，描述见下 Task
     * @param integer $MaxExecutionTimeInSeconds 最长执行时间，单位秒，被调度后超过此时间仍未有结果则视为任务失败。取值为0-86400，默认为86400
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceNameFilter",$param) and $param["DeviceNameFilter"] !== null) {
            $this->DeviceNameFilter = $param["DeviceNameFilter"];
        }

        if (array_key_exists("ScheduleTimeInSeconds",$param) and $param["ScheduleTimeInSeconds"] !== null) {
            $this->ScheduleTimeInSeconds = $param["ScheduleTimeInSeconds"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = new Task();
            $this->Tasks->deserialize($param["Tasks"]);
        }

        if (array_key_exists("MaxExecutionTimeInSeconds",$param) and $param["MaxExecutionTimeInSeconds"] !== null) {
            $this->MaxExecutionTimeInSeconds = $param["MaxExecutionTimeInSeconds"];
        }
    }
}
