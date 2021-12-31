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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可用性监控任务状态及告警信息
 *
 * @method integer getTaskId() 获取任务ID
 * @method void setTaskId(integer $TaskId) 设置任务ID
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method integer getPeriod() 获取任务周期，单位为分钟。目前支持1，5，15，30几种取值
 * @method void setPeriod(integer $Period) 设置任务周期，单位为分钟。目前支持1，5，15，30几种取值
 * @method string getCatTypeName() 获取拨测类型。http, https, ping, tcp, udp, smtp, pop3, dns 之一
 * @method void setCatTypeName(string $CatTypeName) 设置拨测类型。http, https, ping, tcp, udp, smtp, pop3, dns 之一
 * @method integer getStatus() 获取任务状态。1表示暂停，2表示运行中，0为初始态
 * @method void setStatus(integer $Status) 设置任务状态。1表示暂停，2表示运行中，0为初始态
 * @method string getCgiUrl() 获取拨测任务的URL
 * @method void setCgiUrl(string $CgiUrl) 设置拨测任务的URL
 * @method string getAddTime() 获取任务创建时间
 * @method void setAddTime(string $AddTime) 设置任务创建时间
 * @method integer getAlarmStatus() 获取告警状态。1 故障，0 正常
 * @method void setAlarmStatus(integer $AlarmStatus) 设置告警状态。1 故障，0 正常
 * @method string getStatusInfo() 获取告警状态描述，统计信息
 * @method void setStatusInfo(string $StatusInfo) 设置告警状态描述，统计信息
 * @method string getUpdateTime() 获取任务更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置任务更新时间
 */
class TaskAlarm extends AbstractModel
{
    /**
     * @var integer 任务ID
     */
    public $TaskId;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var integer 任务周期，单位为分钟。目前支持1，5，15，30几种取值
     */
    public $Period;

    /**
     * @var string 拨测类型。http, https, ping, tcp, udp, smtp, pop3, dns 之一
     */
    public $CatTypeName;

    /**
     * @var integer 任务状态。1表示暂停，2表示运行中，0为初始态
     */
    public $Status;

    /**
     * @var string 拨测任务的URL
     */
    public $CgiUrl;

    /**
     * @var string 任务创建时间
     */
    public $AddTime;

    /**
     * @var integer 告警状态。1 故障，0 正常
     */
    public $AlarmStatus;

    /**
     * @var string 告警状态描述，统计信息
     */
    public $StatusInfo;

    /**
     * @var string 任务更新时间
     */
    public $UpdateTime;

    /**
     * @param integer $TaskId 任务ID
     * @param string $TaskName 任务名称
     * @param integer $Period 任务周期，单位为分钟。目前支持1，5，15，30几种取值
     * @param string $CatTypeName 拨测类型。http, https, ping, tcp, udp, smtp, pop3, dns 之一
     * @param integer $Status 任务状态。1表示暂停，2表示运行中，0为初始态
     * @param string $CgiUrl 拨测任务的URL
     * @param string $AddTime 任务创建时间
     * @param integer $AlarmStatus 告警状态。1 故障，0 正常
     * @param string $StatusInfo 告警状态描述，统计信息
     * @param string $UpdateTime 任务更新时间
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("CatTypeName",$param) and $param["CatTypeName"] !== null) {
            $this->CatTypeName = $param["CatTypeName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CgiUrl",$param) and $param["CgiUrl"] !== null) {
            $this->CgiUrl = $param["CgiUrl"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("AlarmStatus",$param) and $param["AlarmStatus"] !== null) {
            $this->AlarmStatus = $param["AlarmStatus"];
        }

        if (array_key_exists("StatusInfo",$param) and $param["StatusInfo"] !== null) {
            $this->StatusInfo = $param["StatusInfo"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
