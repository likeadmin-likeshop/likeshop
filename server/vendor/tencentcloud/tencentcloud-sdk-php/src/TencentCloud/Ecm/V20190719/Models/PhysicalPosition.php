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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 物理位置信息
 *
 * @method string getPosId() 获取机位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPosId(string $PosId) 设置机位
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRackId() 获取机架
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRackId(string $RackId) 设置机架
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSwitchId() 获取交换机
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitchId(string $SwitchId) 设置交换机
注意：此字段可能返回 null，表示取不到有效值。
 */
class PhysicalPosition extends AbstractModel
{
    /**
     * @var string 机位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PosId;

    /**
     * @var string 机架
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RackId;

    /**
     * @var string 交换机
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SwitchId;

    /**
     * @param string $PosId 机位
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RackId 机架
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SwitchId 交换机
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
        if (array_key_exists("PosId",$param) and $param["PosId"] !== null) {
            $this->PosId = $param["PosId"];
        }

        if (array_key_exists("RackId",$param) and $param["RackId"] !== null) {
            $this->RackId = $param["RackId"];
        }

        if (array_key_exists("SwitchId",$param) and $param["SwitchId"] !== null) {
            $this->SwitchId = $param["SwitchId"];
        }
    }
}
