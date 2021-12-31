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
namespace TencentCloud\Tione\V20191022\Models;
use TencentCloud\Common\AbstractModel;

/**
 *  二级状态流水
 *
 * @method string getStartTime() 获取状态开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置状态开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取状态结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置状态结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusMessage() 获取状态详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusMessage(string $StatusMessage) 设置状态详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class SecondaryStatusTransition extends AbstractModel
{
    /**
     * @var string 状态开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 状态结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 状态名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 状态详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusMessage;

    /**
     * @param string $StartTime 状态开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 状态结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusMessage 状态详情
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusMessage",$param) and $param["StatusMessage"] !== null) {
            $this->StatusMessage = $param["StatusMessage"];
        }
    }
}
