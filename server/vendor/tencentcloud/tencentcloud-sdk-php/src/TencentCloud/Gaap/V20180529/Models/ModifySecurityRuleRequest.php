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
 * ModifySecurityRule请求参数结构体
 *
 * @method string getRuleId() 获取规则ID
 * @method void setRuleId(string $RuleId) 设置规则ID
 * @method string getAliasName() 获取规则名：不得超过30个字符，超过部分会被截断。
 * @method void setAliasName(string $AliasName) 设置规则名：不得超过30个字符，超过部分会被截断。
 * @method string getPolicyId() 获取安全策略ID
 * @method void setPolicyId(string $PolicyId) 设置安全策略ID
 * @method string getRuleAction() 获取安全规则动作
 * @method void setRuleAction(string $RuleAction) 设置安全规则动作
 * @method string getSourceCidr() 获取规则关联地址，格式需要满足CIDR网络地址规范
 * @method void setSourceCidr(string $SourceCidr) 设置规则关联地址，格式需要满足CIDR网络地址规范
 * @method string getProtocol() 获取协议类型
 * @method void setProtocol(string $Protocol) 设置协议类型
 * @method string getDestPortRange() 获取端口范围，支持以下格式
单个端口: 80
多个端口: 80,443
连续端口: 3306-20000
所有端口: ALL
 * @method void setDestPortRange(string $DestPortRange) 设置端口范围，支持以下格式
单个端口: 80
多个端口: 80,443
连续端口: 3306-20000
所有端口: ALL
 */
class ModifySecurityRuleRequest extends AbstractModel
{
    /**
     * @var string 规则ID
     */
    public $RuleId;

    /**
     * @var string 规则名：不得超过30个字符，超过部分会被截断。
     */
    public $AliasName;

    /**
     * @var string 安全策略ID
     */
    public $PolicyId;

    /**
     * @var string 安全规则动作
     */
    public $RuleAction;

    /**
     * @var string 规则关联地址，格式需要满足CIDR网络地址规范
     */
    public $SourceCidr;

    /**
     * @var string 协议类型
     */
    public $Protocol;

    /**
     * @var string 端口范围，支持以下格式
单个端口: 80
多个端口: 80,443
连续端口: 3306-20000
所有端口: ALL
     */
    public $DestPortRange;

    /**
     * @param string $RuleId 规则ID
     * @param string $AliasName 规则名：不得超过30个字符，超过部分会被截断。
     * @param string $PolicyId 安全策略ID
     * @param string $RuleAction 安全规则动作
     * @param string $SourceCidr 规则关联地址，格式需要满足CIDR网络地址规范
     * @param string $Protocol 协议类型
     * @param string $DestPortRange 端口范围，支持以下格式
单个端口: 80
多个端口: 80,443
连续端口: 3306-20000
所有端口: ALL
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

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("SourceCidr",$param) and $param["SourceCidr"] !== null) {
            $this->SourceCidr = $param["SourceCidr"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("DestPortRange",$param) and $param["DestPortRange"] !== null) {
            $this->DestPortRange = $param["DestPortRange"];
        }
    }
}
