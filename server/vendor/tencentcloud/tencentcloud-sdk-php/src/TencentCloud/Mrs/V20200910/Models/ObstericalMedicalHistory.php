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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 孕产史
 *
 * @method string getMarriageHistory() 获取婚史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMarriageHistory(string $MarriageHistory) 设置婚史
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFertilityHistory() 获取孕史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFertilityHistory(string $FertilityHistory) 设置孕史
注意：此字段可能返回 null，表示取不到有效值。
 */
class ObstericalMedicalHistory extends AbstractModel
{
    /**
     * @var string 婚史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MarriageHistory;

    /**
     * @var string 孕史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FertilityHistory;

    /**
     * @param string $MarriageHistory 婚史
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FertilityHistory 孕史
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
        if (array_key_exists("MarriageHistory",$param) and $param["MarriageHistory"] !== null) {
            $this->MarriageHistory = $param["MarriageHistory"];
        }

        if (array_key_exists("FertilityHistory",$param) and $param["FertilityHistory"] !== null) {
            $this->FertilityHistory = $param["FertilityHistory"];
        }
    }
}
