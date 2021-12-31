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
 * 告警条件模版
 *
 * @method string getTemplateName() 获取模版名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateName(string $TemplateName) 设置模版名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method AlarmPolicyCondition getCondition() 获取指标触发条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCondition(AlarmPolicyCondition $Condition) 设置指标触发条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method AlarmPolicyEventCondition getEventCondition() 获取事件触发条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventCondition(AlarmPolicyEventCondition $EventCondition) 设置事件触发条件
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConditionsTemp extends AbstractModel
{
    /**
     * @var string 模版名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateName;

    /**
     * @var AlarmPolicyCondition 指标触发条件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Condition;

    /**
     * @var AlarmPolicyEventCondition 事件触发条件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventCondition;

    /**
     * @param string $TemplateName 模版名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param AlarmPolicyCondition $Condition 指标触发条件
注意：此字段可能返回 null，表示取不到有效值。
     * @param AlarmPolicyEventCondition $EventCondition 事件触发条件
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
        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = new AlarmPolicyCondition();
            $this->Condition->deserialize($param["Condition"]);
        }

        if (array_key_exists("EventCondition",$param) and $param["EventCondition"] !== null) {
            $this->EventCondition = new AlarmPolicyEventCondition();
            $this->EventCondition->deserialize($param["EventCondition"]);
        }
    }
}
