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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TopicRule结构
 *
 * @method string getRuleName() 获取规则名称。
 * @method void setRuleName(string $RuleName) 设置规则名称。
 * @method string getSql() 获取规则的SQL语句，如： SELECT * FROM 'pid/dname/event'，然后对其进行base64编码，得：U0VMRUNUICogRlJPTSAncGlkL2RuYW1lL2V2ZW50Jw==
 * @method void setSql(string $Sql) 设置规则的SQL语句，如： SELECT * FROM 'pid/dname/event'，然后对其进行base64编码，得：U0VMRUNUICogRlJPTSAncGlkL2RuYW1lL2V2ZW50Jw==
 * @method string getDescription() 获取规则描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置规则描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActions() 获取行为的JSON字符串。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActions(string $Actions) 设置行为的JSON字符串。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getRuleDisabled() 获取是否禁用规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleDisabled(boolean $RuleDisabled) 设置是否禁用规则
注意：此字段可能返回 null，表示取不到有效值。
 */
class TopicRule extends AbstractModel
{
    /**
     * @var string 规则名称。
     */
    public $RuleName;

    /**
     * @var string 规则的SQL语句，如： SELECT * FROM 'pid/dname/event'，然后对其进行base64编码，得：U0VMRUNUICogRlJPTSAncGlkL2RuYW1lL2V2ZW50Jw==
     */
    public $Sql;

    /**
     * @var string 规则描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 行为的JSON字符串。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Actions;

    /**
     * @var boolean 是否禁用规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleDisabled;

    /**
     * @param string $RuleName 规则名称。
     * @param string $Sql 规则的SQL语句，如： SELECT * FROM 'pid/dname/event'，然后对其进行base64编码，得：U0VMRUNUICogRlJPTSAncGlkL2RuYW1lL2V2ZW50Jw==
     * @param string $Description 规则描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Actions 行为的JSON字符串。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $RuleDisabled 是否禁用规则
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Actions",$param) and $param["Actions"] !== null) {
            $this->Actions = $param["Actions"];
        }

        if (array_key_exists("RuleDisabled",$param) and $param["RuleDisabled"] !== null) {
            $this->RuleDisabled = $param["RuleDisabled"];
        }
    }
}
