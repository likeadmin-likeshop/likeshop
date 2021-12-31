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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全组出站规则
 *
 * @method string getAction() 获取策略，ACCEPT或者DROP。
 * @method void setAction(string $Action) 设置策略，ACCEPT或者DROP。
 * @method string getAddressModule() 获取地址组id代表的地址集合。
 * @method void setAddressModule(string $AddressModule) 设置地址组id代表的地址集合。
 * @method string getCidrIp() 获取来源Ip或Ip段，例如192.168.0.0/16。
 * @method void setCidrIp(string $CidrIp) 设置来源Ip或Ip段，例如192.168.0.0/16。
 * @method string getDesc() 获取描述。
 * @method void setDesc(string $Desc) 设置描述。
 * @method string getIpProtocol() 获取网络协议，支持udp、tcp等。
 * @method void setIpProtocol(string $IpProtocol) 设置网络协议，支持udp、tcp等。
 * @method string getPortRange() 获取端口。
 * @method void setPortRange(string $PortRange) 设置端口。
 * @method string getServiceModule() 获取服务组id代表的协议和端口集合。
 * @method void setServiceModule(string $ServiceModule) 设置服务组id代表的协议和端口集合。
 * @method string getId() 获取安全组id代表的地址集合。
 * @method void setId(string $Id) 设置安全组id代表的地址集合。
 */
class Outbound extends AbstractModel
{
    /**
     * @var string 策略，ACCEPT或者DROP。
     */
    public $Action;

    /**
     * @var string 地址组id代表的地址集合。
     */
    public $AddressModule;

    /**
     * @var string 来源Ip或Ip段，例如192.168.0.0/16。
     */
    public $CidrIp;

    /**
     * @var string 描述。
     */
    public $Desc;

    /**
     * @var string 网络协议，支持udp、tcp等。
     */
    public $IpProtocol;

    /**
     * @var string 端口。
     */
    public $PortRange;

    /**
     * @var string 服务组id代表的协议和端口集合。
     */
    public $ServiceModule;

    /**
     * @var string 安全组id代表的地址集合。
     */
    public $Id;

    /**
     * @param string $Action 策略，ACCEPT或者DROP。
     * @param string $AddressModule 地址组id代表的地址集合。
     * @param string $CidrIp 来源Ip或Ip段，例如192.168.0.0/16。
     * @param string $Desc 描述。
     * @param string $IpProtocol 网络协议，支持udp、tcp等。
     * @param string $PortRange 端口。
     * @param string $ServiceModule 服务组id代表的协议和端口集合。
     * @param string $Id 安全组id代表的地址集合。
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

        if (array_key_exists("AddressModule",$param) and $param["AddressModule"] !== null) {
            $this->AddressModule = $param["AddressModule"];
        }

        if (array_key_exists("CidrIp",$param) and $param["CidrIp"] !== null) {
            $this->CidrIp = $param["CidrIp"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("IpProtocol",$param) and $param["IpProtocol"] !== null) {
            $this->IpProtocol = $param["IpProtocol"];
        }

        if (array_key_exists("PortRange",$param) and $param["PortRange"] !== null) {
            $this->PortRange = $param["PortRange"];
        }

        if (array_key_exists("ServiceModule",$param) and $param["ServiceModule"] !== null) {
            $this->ServiceModule = $param["ServiceModule"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
