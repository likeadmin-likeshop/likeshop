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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述防火墙规则信息。
 *
 * @method string getProtocol() 获取协议，取值：TCP，UDP，ICMP，ALL。
 * @method void setProtocol(string $Protocol) 设置协议，取值：TCP，UDP，ICMP，ALL。
 * @method string getPort() 获取端口，取值：ALL，单独的端口，逗号分隔的离散端口，减号分隔的端口范围。
 * @method void setPort(string $Port) 设置端口，取值：ALL，单独的端口，逗号分隔的离散端口，减号分隔的端口范围。
 * @method string getCidrBlock() 获取网段或 IP (互斥)。默认为 0.0.0.0/0，表示所有来源。
 * @method void setCidrBlock(string $CidrBlock) 设置网段或 IP (互斥)。默认为 0.0.0.0/0，表示所有来源。
 * @method string getAction() 获取取值：ACCEPT，DROP。默认为 ACCEPT。
 * @method void setAction(string $Action) 设置取值：ACCEPT，DROP。默认为 ACCEPT。
 * @method string getFirewallRuleDescription() 获取防火墙规则描述。
 * @method void setFirewallRuleDescription(string $FirewallRuleDescription) 设置防火墙规则描述。
 */
class FirewallRule extends AbstractModel
{
    /**
     * @var string 协议，取值：TCP，UDP，ICMP，ALL。
     */
    public $Protocol;

    /**
     * @var string 端口，取值：ALL，单独的端口，逗号分隔的离散端口，减号分隔的端口范围。
     */
    public $Port;

    /**
     * @var string 网段或 IP (互斥)。默认为 0.0.0.0/0，表示所有来源。
     */
    public $CidrBlock;

    /**
     * @var string 取值：ACCEPT，DROP。默认为 ACCEPT。
     */
    public $Action;

    /**
     * @var string 防火墙规则描述。
     */
    public $FirewallRuleDescription;

    /**
     * @param string $Protocol 协议，取值：TCP，UDP，ICMP，ALL。
     * @param string $Port 端口，取值：ALL，单独的端口，逗号分隔的离散端口，减号分隔的端口范围。
     * @param string $CidrBlock 网段或 IP (互斥)。默认为 0.0.0.0/0，表示所有来源。
     * @param string $Action 取值：ACCEPT，DROP。默认为 ACCEPT。
     * @param string $FirewallRuleDescription 防火墙规则描述。
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("FirewallRuleDescription",$param) and $param["FirewallRuleDescription"] !== null) {
            $this->FirewallRuleDescription = $param["FirewallRuleDescription"];
        }
    }
}
