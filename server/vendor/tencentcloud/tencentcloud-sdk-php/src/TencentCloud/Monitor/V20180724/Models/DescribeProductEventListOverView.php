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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProductEventList返回的OverView对象
 *
 * @method integer getStatusChangeAmount() 获取状态变更的事件数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusChangeAmount(integer $StatusChangeAmount) 设置状态变更的事件数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUnConfigAlarmAmount() 获取告警状态未配置的事件数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnConfigAlarmAmount(integer $UnConfigAlarmAmount) 设置告警状态未配置的事件数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUnNormalEventAmount() 获取异常事件数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnNormalEventAmount(integer $UnNormalEventAmount) 设置异常事件数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUnRecoverAmount() 获取未恢复的事件数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnRecoverAmount(integer $UnRecoverAmount) 设置未恢复的事件数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeProductEventListOverView extends AbstractModel
{
    /**
     * @var integer 状态变更的事件数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusChangeAmount;

    /**
     * @var integer 告警状态未配置的事件数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnConfigAlarmAmount;

    /**
     * @var integer 异常事件数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnNormalEventAmount;

    /**
     * @var integer 未恢复的事件数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnRecoverAmount;

    /**
     * @param integer $StatusChangeAmount 状态变更的事件数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UnConfigAlarmAmount 告警状态未配置的事件数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UnNormalEventAmount 异常事件数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UnRecoverAmount 未恢复的事件数量
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
        if (array_key_exists("StatusChangeAmount",$param) and $param["StatusChangeAmount"] !== null) {
            $this->StatusChangeAmount = $param["StatusChangeAmount"];
        }

        if (array_key_exists("UnConfigAlarmAmount",$param) and $param["UnConfigAlarmAmount"] !== null) {
            $this->UnConfigAlarmAmount = $param["UnConfigAlarmAmount"];
        }

        if (array_key_exists("UnNormalEventAmount",$param) and $param["UnNormalEventAmount"] !== null) {
            $this->UnNormalEventAmount = $param["UnNormalEventAmount"];
        }

        if (array_key_exists("UnRecoverAmount",$param) and $param["UnRecoverAmount"] !== null) {
            $this->UnRecoverAmount = $param["UnRecoverAmount"];
        }
    }
}
