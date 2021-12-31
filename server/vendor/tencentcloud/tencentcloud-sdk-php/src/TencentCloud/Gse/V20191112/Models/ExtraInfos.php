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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例类型限额配置额外信息
 *
 * @method string getInstanceType() 获取实例类型，例如S5.LARGE8
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置实例类型，例如S5.LARGE8
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalInstances() 获取实例限额数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalInstances(integer $TotalInstances) 设置实例限额数
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExtraInfos extends AbstractModel
{
    /**
     * @var string 实例类型，例如S5.LARGE8
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var integer 实例限额数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalInstances;

    /**
     * @param string $InstanceType 实例类型，例如S5.LARGE8
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalInstances 实例限额数
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("TotalInstances",$param) and $param["TotalInstances"] !== null) {
            $this->TotalInstances = $param["TotalInstances"];
        }
    }
}
