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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备操作日志
 *
 * @method integer getId() 获取日志的ID
 * @method void setId(integer $Id) 设置日志的ID
 * @method string getInstanceId() 获取设备ID
 * @method void setInstanceId(string $InstanceId) 设置设备ID
 * @method integer getTaskId() 获取日志对应的操作任务ID
 * @method void setTaskId(integer $TaskId) 设置日志对应的操作任务ID
 * @method string getTaskName() 获取操作任务名称
 * @method void setTaskName(string $TaskName) 设置操作任务名称
 * @method string getTaskDescription() 获取操作任务中文名称
 * @method void setTaskDescription(string $TaskDescription) 设置操作任务中文名称
 * @method string getStartTime() 获取操作开始时间
 * @method void setStartTime(string $StartTime) 设置操作开始时间
 * @method string getEndTime() 获取操作结束时间
 * @method void setEndTime(string $EndTime) 设置操作结束时间
 * @method integer getStatus() 获取操作状态，0: 正在执行中；1：任务成功； 2: 任务失败。
 * @method void setStatus(integer $Status) 设置操作状态，0: 正在执行中；1：任务成功； 2: 任务失败。
 * @method string getOpUin() 获取操作者
 * @method void setOpUin(string $OpUin) 设置操作者
 * @method string getLogDescription() 获取操作描述
 * @method void setLogDescription(string $LogDescription) 设置操作描述
 */
class DeviceOperationLog extends AbstractModel
{
    /**
     * @var integer 日志的ID
     */
    public $Id;

    /**
     * @var string 设备ID
     */
    public $InstanceId;

    /**
     * @var integer 日志对应的操作任务ID
     */
    public $TaskId;

    /**
     * @var string 操作任务名称
     */
    public $TaskName;

    /**
     * @var string 操作任务中文名称
     */
    public $TaskDescription;

    /**
     * @var string 操作开始时间
     */
    public $StartTime;

    /**
     * @var string 操作结束时间
     */
    public $EndTime;

    /**
     * @var integer 操作状态，0: 正在执行中；1：任务成功； 2: 任务失败。
     */
    public $Status;

    /**
     * @var string 操作者
     */
    public $OpUin;

    /**
     * @var string 操作描述
     */
    public $LogDescription;

    /**
     * @param integer $Id 日志的ID
     * @param string $InstanceId 设备ID
     * @param integer $TaskId 日志对应的操作任务ID
     * @param string $TaskName 操作任务名称
     * @param string $TaskDescription 操作任务中文名称
     * @param string $StartTime 操作开始时间
     * @param string $EndTime 操作结束时间
     * @param integer $Status 操作状态，0: 正在执行中；1：任务成功； 2: 任务失败。
     * @param string $OpUin 操作者
     * @param string $LogDescription 操作描述
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskDescription",$param) and $param["TaskDescription"] !== null) {
            $this->TaskDescription = $param["TaskDescription"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OpUin",$param) and $param["OpUin"] !== null) {
            $this->OpUin = $param["OpUin"];
        }

        if (array_key_exists("LogDescription",$param) and $param["LogDescription"] !== null) {
            $this->LogDescription = $param["LogDescription"];
        }
    }
}
