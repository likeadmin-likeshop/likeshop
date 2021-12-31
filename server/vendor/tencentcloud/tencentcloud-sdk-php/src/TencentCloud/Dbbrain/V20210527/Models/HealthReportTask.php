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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 健康报告任务详情。
 *
 * @method integer getAsyncRequestId() 获取异步任务请求 ID。
 * @method void setAsyncRequestId(integer $AsyncRequestId) 设置异步任务请求 ID。
 * @method string getSource() 获取任务的触发来源，支持的取值包括："DAILY_INSPECTION" - 实例巡检；"SCHEDULED" - 定时生成；"MANUAL" - 手动触发。
 * @method void setSource(string $Source) 设置任务的触发来源，支持的取值包括："DAILY_INSPECTION" - 实例巡检；"SCHEDULED" - 定时生成；"MANUAL" - 手动触发。
 * @method integer getProgress() 获取任务完成进度，单位%。
 * @method void setProgress(integer $Progress) 设置任务完成进度，单位%。
 * @method string getCreateTime() 获取任务创建时间。
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间。
 * @method string getStartTime() 获取任务开始执行时间。
 * @method void setStartTime(string $StartTime) 设置任务开始执行时间。
 * @method string getEndTime() 获取任务完成执行时间。
 * @method void setEndTime(string $EndTime) 设置任务完成执行时间。
 * @method InstanceBasicInfo getInstanceInfo() 获取任务所属实例的基础信息。
 * @method void setInstanceInfo(InstanceBasicInfo $InstanceInfo) 设置任务所属实例的基础信息。
 * @method HealthStatus getHealthStatus() 获取健康报告中的健康信息。
 * @method void setHealthStatus(HealthStatus $HealthStatus) 设置健康报告中的健康信息。
 */
class HealthReportTask extends AbstractModel
{
    /**
     * @var integer 异步任务请求 ID。
     */
    public $AsyncRequestId;

    /**
     * @var string 任务的触发来源，支持的取值包括："DAILY_INSPECTION" - 实例巡检；"SCHEDULED" - 定时生成；"MANUAL" - 手动触发。
     */
    public $Source;

    /**
     * @var integer 任务完成进度，单位%。
     */
    public $Progress;

    /**
     * @var string 任务创建时间。
     */
    public $CreateTime;

    /**
     * @var string 任务开始执行时间。
     */
    public $StartTime;

    /**
     * @var string 任务完成执行时间。
     */
    public $EndTime;

    /**
     * @var InstanceBasicInfo 任务所属实例的基础信息。
     */
    public $InstanceInfo;

    /**
     * @var HealthStatus 健康报告中的健康信息。
     */
    public $HealthStatus;

    /**
     * @param integer $AsyncRequestId 异步任务请求 ID。
     * @param string $Source 任务的触发来源，支持的取值包括："DAILY_INSPECTION" - 实例巡检；"SCHEDULED" - 定时生成；"MANUAL" - 手动触发。
     * @param integer $Progress 任务完成进度，单位%。
     * @param string $CreateTime 任务创建时间。
     * @param string $StartTime 任务开始执行时间。
     * @param string $EndTime 任务完成执行时间。
     * @param InstanceBasicInfo $InstanceInfo 任务所属实例的基础信息。
     * @param HealthStatus $HealthStatus 健康报告中的健康信息。
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
        if (array_key_exists("AsyncRequestId",$param) and $param["AsyncRequestId"] !== null) {
            $this->AsyncRequestId = $param["AsyncRequestId"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("InstanceInfo",$param) and $param["InstanceInfo"] !== null) {
            $this->InstanceInfo = new InstanceBasicInfo();
            $this->InstanceInfo->deserialize($param["InstanceInfo"]);
        }

        if (array_key_exists("HealthStatus",$param) and $param["HealthStatus"] !== null) {
            $this->HealthStatus = new HealthStatus();
            $this->HealthStatus->deserialize($param["HealthStatus"]);
        }
    }
}
