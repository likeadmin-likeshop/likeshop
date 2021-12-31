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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 允许网络访问范围
 *
 * @method integer getFromPort() 获取起始端口号，最小值1025
 * @method void setFromPort(integer $FromPort) 设置起始端口号，最小值1025
 * @method string getIpRange() 获取IP 段范围，合法的 CIDR 地址类型，如所有IPv4来源：0.0.0.0/0
 * @method void setIpRange(string $IpRange) 设置IP 段范围，合法的 CIDR 地址类型，如所有IPv4来源：0.0.0.0/0
 * @method string getProtocol() 获取协议类型：TCP或者UDP
 * @method void setProtocol(string $Protocol) 设置协议类型：TCP或者UDP
 * @method integer getToPort() 获取终止端口号，最大值60000
 * @method void setToPort(integer $ToPort) 设置终止端口号，最大值60000
 */
class InboundPermission extends AbstractModel
{
    /**
     * @var integer 起始端口号，最小值1025
     */
    public $FromPort;

    /**
     * @var string IP 段范围，合法的 CIDR 地址类型，如所有IPv4来源：0.0.0.0/0
     */
    public $IpRange;

    /**
     * @var string 协议类型：TCP或者UDP
     */
    public $Protocol;

    /**
     * @var integer 终止端口号，最大值60000
     */
    public $ToPort;

    /**
     * @param integer $FromPort 起始端口号，最小值1025
     * @param string $IpRange IP 段范围，合法的 CIDR 地址类型，如所有IPv4来源：0.0.0.0/0
     * @param string $Protocol 协议类型：TCP或者UDP
     * @param integer $ToPort 终止端口号，最大值60000
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
        if (array_key_exists("FromPort",$param) and $param["FromPort"] !== null) {
            $this->FromPort = $param["FromPort"];
        }

        if (array_key_exists("IpRange",$param) and $param["IpRange"] !== null) {
            $this->IpRange = $param["IpRange"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ToPort",$param) and $param["ToPort"] !== null) {
            $this->ToPort = $param["ToPort"];
        }
    }
}
