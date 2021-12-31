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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全出入口规则
 *
 * @method string getAction() 获取策略，ACCEPT 或者 DROP
 * @method void setAction(string $Action) 设置策略，ACCEPT 或者 DROP
 * @method string getCidrIp() 获取来源 IP 或 IP 段，例如192.168.0.0/16
 * @method void setCidrIp(string $CidrIp) 设置来源 IP 或 IP 段，例如192.168.0.0/16
 * @method string getPortRange() 获取端口
 * @method void setPortRange(string $PortRange) 设置端口
 * @method string getIpProtocol() 获取网络协议，支持 UDP、TCP 等
 * @method void setIpProtocol(string $IpProtocol) 设置网络协议，支持 UDP、TCP 等
 */
class SecurityGroupBound extends AbstractModel
{
    /**
     * @var string 策略，ACCEPT 或者 DROP
     */
    public $Action;

    /**
     * @var string 来源 IP 或 IP 段，例如192.168.0.0/16
     */
    public $CidrIp;

    /**
     * @var string 端口
     */
    public $PortRange;

    /**
     * @var string 网络协议，支持 UDP、TCP 等
     */
    public $IpProtocol;

    /**
     * @param string $Action 策略，ACCEPT 或者 DROP
     * @param string $CidrIp 来源 IP 或 IP 段，例如192.168.0.0/16
     * @param string $PortRange 端口
     * @param string $IpProtocol 网络协议，支持 UDP、TCP 等
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

        if (array_key_exists("CidrIp",$param) and $param["CidrIp"] !== null) {
            $this->CidrIp = $param["CidrIp"];
        }

        if (array_key_exists("PortRange",$param) and $param["PortRange"] !== null) {
            $this->PortRange = $param["PortRange"];
        }

        if (array_key_exists("IpProtocol",$param) and $param["IpProtocol"] !== null) {
            $this->IpProtocol = $param["IpProtocol"];
        }
    }
}
