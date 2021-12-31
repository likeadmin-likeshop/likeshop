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
 * 审计策略
 *
 * @method string getPolicyId() 获取审计策略 ID。
 * @method void setPolicyId(string $PolicyId) 设置审计策略 ID。
 * @method string getStatus() 获取审计策略的状态。可能返回的值为：
"creating" - 创建中;
"running" - 运行中;
"paused" - 暂停中;
"failed" - 创建失败。
 * @method void setStatus(string $Status) 设置审计策略的状态。可能返回的值为：
"creating" - 创建中;
"running" - 运行中;
"paused" - 暂停中;
"failed" - 创建失败。
 * @method string getInstanceId() 获取数据库实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置数据库实例 ID。
 * @method string getCreateTime() 获取审计策略创建时间。格式为 : "2019-03-20 17:09:13"。
 * @method void setCreateTime(string $CreateTime) 设置审计策略创建时间。格式为 : "2019-03-20 17:09:13"。
 * @method string getModifyTime() 获取审计策略最后修改时间。格式为 : "2019-03-20 17:09:13"。
 * @method void setModifyTime(string $ModifyTime) 设置审计策略最后修改时间。格式为 : "2019-03-20 17:09:13"。
 * @method string getPolicyName() 获取审计策略名称。
 * @method void setPolicyName(string $PolicyName) 设置审计策略名称。
 * @method string getRuleId() 获取审计规则 ID。
 * @method void setRuleId(string $RuleId) 设置审计规则 ID。
 * @method string getRuleName() 获取审计规则名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置审计规则名称。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AuditPolicy extends AbstractModel
{
    /**
     * @var string 审计策略 ID。
     */
    public $PolicyId;

    /**
     * @var string 审计策略的状态。可能返回的值为：
"creating" - 创建中;
"running" - 运行中;
"paused" - 暂停中;
"failed" - 创建失败。
     */
    public $Status;

    /**
     * @var string 数据库实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 审计策略创建时间。格式为 : "2019-03-20 17:09:13"。
     */
    public $CreateTime;

    /**
     * @var string 审计策略最后修改时间。格式为 : "2019-03-20 17:09:13"。
     */
    public $ModifyTime;

    /**
     * @var string 审计策略名称。
     */
    public $PolicyName;

    /**
     * @var string 审计规则 ID。
     */
    public $RuleId;

    /**
     * @var string 审计规则名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @param string $PolicyId 审计策略 ID。
     * @param string $Status 审计策略的状态。可能返回的值为：
"creating" - 创建中;
"running" - 运行中;
"paused" - 暂停中;
"failed" - 创建失败。
     * @param string $InstanceId 数据库实例 ID。
     * @param string $CreateTime 审计策略创建时间。格式为 : "2019-03-20 17:09:13"。
     * @param string $ModifyTime 审计策略最后修改时间。格式为 : "2019-03-20 17:09:13"。
     * @param string $PolicyName 审计策略名称。
     * @param string $RuleId 审计规则 ID。
     * @param string $RuleName 审计规则名称。
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }
    }
}
