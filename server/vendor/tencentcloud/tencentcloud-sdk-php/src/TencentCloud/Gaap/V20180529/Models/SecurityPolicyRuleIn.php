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
 * 安全策略规则（入参）
 *
 * @method string getSourceCidr() 获取请求来源IP或IP段。
 * @method void setSourceCidr(string $SourceCidr) 设置请求来源IP或IP段。
 * @method string getAction() 获取策略：允许（ACCEPT）或拒绝（DROP）
 * @method void setAction(string $Action) 设置策略：允许（ACCEPT）或拒绝（DROP）
 * @method string getAliasName() 获取规则别名
 * @method void setAliasName(string $AliasName) 设置规则别名
 * @method string getProtocol() 获取协议：TCP或UDP，ALL表示所有协议
 * @method void setProtocol(string $Protocol) 设置协议：TCP或UDP，ALL表示所有协议
 * @method string getDestPortRange() 获取目标端口，填写格式举例：
单个端口: 80
多个端口: 80,443
连续端口: 3306-20000
所有端口: ALL
 * @method void setDestPortRange(string $DestPortRange) 设置目标端口，填写格式举例：
单个端口: 80
多个端口: 80,443
连续端口: 3306-20000
所有端口: ALL
 */
class SecurityPolicyRuleIn extends AbstractModel
{
    /**
     * @var string 请求来源IP或IP段。
     */
    public $SourceCidr;

    /**
     * @var string 策略：允许（ACCEPT）或拒绝（DROP）
     */
    public $Action;

    /**
     * @var string 规则别名
     */
    public $AliasName;

    /**
     * @var string 协议：TCP或UDP，ALL表示所有协议
     */
    public $Protocol;

    /**
     * @var string 目标端口，填写格式举例：
单个端口: 80
多个端口: 80,443
连续端口: 3306-20000
所有端口: ALL
     */
    public $DestPortRange;

    /**
     * @param string $SourceCidr 请求来源IP或IP段。
     * @param string $Action 策略：允许（ACCEPT）或拒绝（DROP）
     * @param string $AliasName 规则别名
     * @param string $Protocol 协议：TCP或UDP，ALL表示所有协议
     * @param string $DestPortRange 目标端口，填写格式举例：
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
        if (array_key_exists("SourceCidr",$param) and $param["SourceCidr"] !== null) {
            $this->SourceCidr = $param["SourceCidr"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("DestPortRange",$param) and $param["DestPortRange"] !== null) {
            $this->DestPortRange = $param["DestPortRange"];
        }
    }
}
