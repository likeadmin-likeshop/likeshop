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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 普通设备的录像详情
 *
 * @method string getRecordTaskId() 获取录像任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordTaskId(string $RecordTaskId) 设置录像任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecordPlanId() 获取录制计划ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordPlanId(string $RecordPlanId) 设置录制计划ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartTime() 获取本录制片段开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(integer $StartTime) 设置本录制片段开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEndTime() 获取本录制片段结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(integer $EndTime) 设置本录制片段结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEventId() 获取录制模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventId(integer $EventId) 设置录制模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVideoUrl() 获取本录制片段对应的录制文件URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoUrl(string $VideoUrl) 设置本录制片段对应的录制文件URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRecordStatus() 获取本录制片段当前的录制状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordStatus(integer $RecordStatus) 设置本录制片段当前的录制状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class RecordTaskItem extends AbstractModel
{
    /**
     * @var string 录像任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordTaskId;

    /**
     * @var string 录制计划ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordPlanId;

    /**
     * @var integer 本录制片段开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var integer 本录制片段结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var integer 录制模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventId;

    /**
     * @var string 本录制片段对应的录制文件URL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoUrl;

    /**
     * @var integer 本录制片段当前的录制状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordStatus;

    /**
     * @param string $RecordTaskId 录像任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecordPlanId 录制计划ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartTime 本录制片段开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EndTime 本录制片段结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EventId 录制模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VideoUrl 本录制片段对应的录制文件URL
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RecordStatus 本录制片段当前的录制状态
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
        if (array_key_exists("RecordTaskId",$param) and $param["RecordTaskId"] !== null) {
            $this->RecordTaskId = $param["RecordTaskId"];
        }

        if (array_key_exists("RecordPlanId",$param) and $param["RecordPlanId"] !== null) {
            $this->RecordPlanId = $param["RecordPlanId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }

        if (array_key_exists("RecordStatus",$param) and $param["RecordStatus"] !== null) {
            $this->RecordStatus = $param["RecordStatus"];
        }
    }
}
