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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 动态消息保留时间配置
 *
 * @method integer getEnable() 获取动态消息保留时间配置开关（0: 关闭，1: 开启）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnable(integer $Enable) 设置动态消息保留时间配置开关（0: 关闭，1: 开启）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiskQuotaPercentage() 获取磁盘配额百分比触发条件，即消息达到此值触发消息保留时间变更事件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskQuotaPercentage(integer $DiskQuotaPercentage) 设置磁盘配额百分比触发条件，即消息达到此值触发消息保留时间变更事件
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStepForwardPercentage() 获取每次向前调整消息保留时间百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStepForwardPercentage(integer $StepForwardPercentage) 设置每次向前调整消息保留时间百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBottomRetention() 获取保底时长，单位分钟
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBottomRetention(integer $BottomRetention) 设置保底时长，单位分钟
注意：此字段可能返回 null，表示取不到有效值。
 */
class DynamicRetentionTime extends AbstractModel
{
    /**
     * @var integer 动态消息保留时间配置开关（0: 关闭，1: 开启）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enable;

    /**
     * @var integer 磁盘配额百分比触发条件，即消息达到此值触发消息保留时间变更事件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskQuotaPercentage;

    /**
     * @var integer 每次向前调整消息保留时间百分比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StepForwardPercentage;

    /**
     * @var integer 保底时长，单位分钟
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BottomRetention;

    /**
     * @param integer $Enable 动态消息保留时间配置开关（0: 关闭，1: 开启）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DiskQuotaPercentage 磁盘配额百分比触发条件，即消息达到此值触发消息保留时间变更事件
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StepForwardPercentage 每次向前调整消息保留时间百分比
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BottomRetention 保底时长，单位分钟
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("DiskQuotaPercentage",$param) and $param["DiskQuotaPercentage"] !== null) {
            $this->DiskQuotaPercentage = $param["DiskQuotaPercentage"];
        }

        if (array_key_exists("StepForwardPercentage",$param) and $param["StepForwardPercentage"] !== null) {
            $this->StepForwardPercentage = $param["StepForwardPercentage"];
        }

        if (array_key_exists("BottomRetention",$param) and $param["BottomRetention"] !== null) {
            $this->BottomRetention = $param["BottomRetention"];
        }
    }
}
