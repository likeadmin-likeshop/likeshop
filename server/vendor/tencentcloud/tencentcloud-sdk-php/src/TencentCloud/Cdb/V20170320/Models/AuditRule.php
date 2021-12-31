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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 审计规则
 *
 * @method string getRuleId() 获取审计规则 Id。
 * @method void setRuleId(string $RuleId) 设置审计规则 Id。
 * @method string getCreateTime() 获取审计规则创建时间。格式为 : "2019-03-20 17:09:13"。
 * @method void setCreateTime(string $CreateTime) 设置审计规则创建时间。格式为 : "2019-03-20 17:09:13"。
 * @method string getModifyTime() 获取审计规则最后修改时间。格式为 : "2019-03-20 17:09:13"。
 * @method void setModifyTime(string $ModifyTime) 设置审计规则最后修改时间。格式为 : "2019-03-20 17:09:13"。
 * @method string getRuleName() 获取审计规则名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置审计规则名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取审计规则描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置审计规则描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRuleFilters() 获取审计规则过滤条件。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleFilters(array $RuleFilters) 设置审计规则过滤条件。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAuditAll() 获取是否开启全审计。
 * @method void setAuditAll(boolean $AuditAll) 设置是否开启全审计。
 */
class AuditRule extends AbstractModel
{
    /**
     * @var string 审计规则 Id。
     */
    public $RuleId;

    /**
     * @var string 审计规则创建时间。格式为 : "2019-03-20 17:09:13"。
     */
    public $CreateTime;

    /**
     * @var string 审计规则最后修改时间。格式为 : "2019-03-20 17:09:13"。
     */
    public $ModifyTime;

    /**
     * @var string 审计规则名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @var string 审计规则描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var array 审计规则过滤条件。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleFilters;

    /**
     * @var boolean 是否开启全审计。
     */
    public $AuditAll;

    /**
     * @param string $RuleId 审计规则 Id。
     * @param string $CreateTime 审计规则创建时间。格式为 : "2019-03-20 17:09:13"。
     * @param string $ModifyTime 审计规则最后修改时间。格式为 : "2019-03-20 17:09:13"。
     * @param string $RuleName 审计规则名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 审计规则描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RuleFilters 审计规则过滤条件。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AuditAll 是否开启全审计。
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RuleFilters",$param) and $param["RuleFilters"] !== null) {
            $this->RuleFilters = [];
            foreach ($param["RuleFilters"] as $key => $value){
                $obj = new AuditFilter();
                $obj->deserialize($value);
                array_push($this->RuleFilters, $obj);
            }
        }

        if (array_key_exists("AuditAll",$param) and $param["AuditAll"] !== null) {
            $this->AuditAll = $param["AuditAll"];
        }
    }
}
