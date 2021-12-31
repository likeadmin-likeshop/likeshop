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
 * 告警策略指标触发条件
 *
 * @method integer getIsUnionRule() 获取指标触发与或条件，0=或，1=与
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsUnionRule(integer $IsUnionRule) 设置指标触发与或条件，0=或，1=与
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRules() 获取告警触发条件列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRules(array $Rules) 设置告警触发条件列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlarmPolicyCondition extends AbstractModel
{
    /**
     * @var integer 指标触发与或条件，0=或，1=与
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsUnionRule;

    /**
     * @var array 告警触发条件列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rules;

    /**
     * @param integer $IsUnionRule 指标触发与或条件，0=或，1=与
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Rules 告警触发条件列表
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
        if (array_key_exists("IsUnionRule",$param) and $param["IsUnionRule"] !== null) {
            $this->IsUnionRule = $param["IsUnionRule"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new AlarmPolicyRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}
