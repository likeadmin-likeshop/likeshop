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
namespace TencentCloud\Tbp\V20190311\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 槽位信息
 *
 * @method string getSlotName() 获取槽位名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlotName(string $SlotName) 设置槽位名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSlotValue() 获取槽位值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlotValue(string $SlotValue) 设置槽位值
注意：此字段可能返回 null，表示取不到有效值。
 */
class SlotInfo extends AbstractModel
{
    /**
     * @var string 槽位名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SlotName;

    /**
     * @var string 槽位值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SlotValue;

    /**
     * @param string $SlotName 槽位名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SlotValue 槽位值
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
        if (array_key_exists("SlotName",$param) and $param["SlotName"] !== null) {
            $this->SlotName = $param["SlotName"];
        }

        if (array_key_exists("SlotValue",$param) and $param["SlotValue"] !== null) {
            $this->SlotValue = $param["SlotValue"];
        }
    }
}
