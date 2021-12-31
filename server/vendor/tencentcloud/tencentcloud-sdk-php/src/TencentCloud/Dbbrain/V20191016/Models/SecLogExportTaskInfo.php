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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全审计日志导出任务信息
 *
 * @method integer getAsyncRequestId() 获取异步任务Id。
 * @method void setAsyncRequestId(integer $AsyncRequestId) 设置异步任务Id。
 * @method string getStartTime() 获取任务开始时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置任务开始时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取任务结束时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置任务结束时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取任务创建时间。
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间。
 * @method string getStatus() 获取任务状态。
 * @method void setStatus(string $Status) 设置任务状态。
 * @method integer getProgress() 获取任务执行进度。
 * @method void setProgress(integer $Progress) 设置任务执行进度。
 * @method string getLogStartTime() 获取导出日志开始时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogStartTime(string $LogStartTime) 设置导出日志开始时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogEndTime() 获取导出日志结束时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogEndTime(string $LogEndTime) 设置导出日志结束时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalSize() 获取日志文件总大小，单位KB。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalSize(integer $TotalSize) 设置日志文件总大小，单位KB。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDangerLevels() 获取风险等级列表。0 无风险；1 低风险；2 中风险；3 高风险。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDangerLevels(array $DangerLevels) 设置风险等级列表。0 无风险；1 低风险；2 中风险；3 高风险。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SecLogExportTaskInfo extends AbstractModel
{
    /**
     * @var integer 异步任务Id。
     */
    public $AsyncRequestId;

    /**
     * @var string 任务开始时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 任务结束时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 任务创建时间。
     */
    public $CreateTime;

    /**
     * @var string 任务状态。
     */
    public $Status;

    /**
     * @var integer 任务执行进度。
     */
    public $Progress;

    /**
     * @var string 导出日志开始时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogStartTime;

    /**
     * @var string 导出日志结束时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogEndTime;

    /**
     * @var integer 日志文件总大小，单位KB。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalSize;

    /**
     * @var array 风险等级列表。0 无风险；1 低风险；2 中风险；3 高风险。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DangerLevels;

    /**
     * @param integer $AsyncRequestId 异步任务Id。
     * @param string $StartTime 任务开始时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 任务结束时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 任务创建时间。
     * @param string $Status 任务状态。
     * @param integer $Progress 任务执行进度。
     * @param string $LogStartTime 导出日志开始时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogEndTime 导出日志结束时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalSize 日志文件总大小，单位KB。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DangerLevels 风险等级列表。0 无风险；1 低风险；2 中风险；3 高风险。
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
        if (array_key_exists("AsyncRequestId",$param) and $param["AsyncRequestId"] !== null) {
            $this->AsyncRequestId = $param["AsyncRequestId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("LogStartTime",$param) and $param["LogStartTime"] !== null) {
            $this->LogStartTime = $param["LogStartTime"];
        }

        if (array_key_exists("LogEndTime",$param) and $param["LogEndTime"] !== null) {
            $this->LogEndTime = $param["LogEndTime"];
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }

        if (array_key_exists("DangerLevels",$param) and $param["DangerLevels"] !== null) {
            $this->DangerLevels = $param["DangerLevels"];
        }
    }
}
