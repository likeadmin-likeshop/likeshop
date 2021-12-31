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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全策略规则（出参）
 *
 * @method string getAction() 获取策略：允许（ACCEPT）或拒绝（DROP）
 * @method void setAction(string $Action) 设置策略：允许（ACCEPT）或拒绝（DROP）
 * @method string getSourceCidr() 获取请求来源Ip或Ip段
 * @method void setSourceCidr(string $SourceCidr) 设置请求来源Ip或Ip段
 * @method string getAliasName() 获取规则别名
 * @method void setAliasName(string $AliasName) 设置规则别名
 * @method string getDestPortRange() 获取目标端口范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDestPortRange(string $DestPortRange) 设置目标端口范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleId() 获取规则ID
 * @method void setRuleId(string $RuleId) 设置规则ID
 * @method string getProtocol() 获取要匹配的协议类型（TCP/UDP）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置要匹配的协议类型（TCP/UDP）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPolicyId() 获取安全策略ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyId(string $PolicyId) 设置安全策略ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class SecurityPolicyRuleOut extends AbstractModel
{
    /**
     * @var string 策略：允许（ACCEPT）或拒绝（DROP）
     */
    public $Action;

    /**
     * @var string 请求来源Ip或Ip段
     */
    public $SourceCidr;

    /**
     * @var string 规则别名
     */
    public $AliasName;

    /**
     * @var string 目标端口范围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DestPortRange;

    /**
     * @var string 规则ID
     */
    public $RuleId;

    /**
     * @var string 要匹配的协议类型（TCP/UDP）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var string 安全策略ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyId;

    /**
     * @param string $Action 策略：允许（ACCEPT）或拒绝（DROP）
     * @param string $SourceCidr 请求来源Ip或Ip段
     * @param string $AliasName 规则别名
     * @param string $DestPortRange 目标端口范围
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleId 规则ID
     * @param string $Protocol 要匹配的协议类型（TCP/UDP）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PolicyId 安全策略ID
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("SourceCidr",$param) and $param["SourceCidr"] !== null) {
            $this->SourceCidr = $param["SourceCidr"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("DestPortRange",$param) and $param["DestPortRange"] !== null) {
            $this->DestPortRange = $param["DestPortRange"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }
    }
}
