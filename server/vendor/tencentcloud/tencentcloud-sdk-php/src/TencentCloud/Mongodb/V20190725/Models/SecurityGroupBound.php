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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全组规则
 *
 * @method string getAction() 获取执行规则。ACCEPT或DROP
 * @method void setAction(string $Action) 设置执行规则。ACCEPT或DROP
 * @method string getCidrIp() 获取ip段。
 * @method void setCidrIp(string $CidrIp) 设置ip段。
 * @method string getPortRange() 获取端口范围
 * @method void setPortRange(string $PortRange) 设置端口范围
 * @method string getIpProtocol() 获取传输层协议。tcp，udp或ALL
 * @method void setIpProtocol(string $IpProtocol) 设置传输层协议。tcp，udp或ALL
 * @method string getId() 获取安全组id代表的地址集合
 * @method void setId(string $Id) 设置安全组id代表的地址集合
 * @method string getAddressModule() 获取地址组id代表的地址集合
 * @method void setAddressModule(string $AddressModule) 设置地址组id代表的地址集合
 * @method string getServiceModule() 获取服务组id代表的协议和端口集合
 * @method void setServiceModule(string $ServiceModule) 设置服务组id代表的协议和端口集合
 * @method string getDesc() 获取描述
 * @method void setDesc(string $Desc) 设置描述
 */
class SecurityGroupBound extends AbstractModel
{
    /**
     * @var string 执行规则。ACCEPT或DROP
     */
    public $Action;

    /**
     * @var string ip段。
     */
    public $CidrIp;

    /**
     * @var string 端口范围
     */
    public $PortRange;

    /**
     * @var string 传输层协议。tcp，udp或ALL
     */
    public $IpProtocol;

    /**
     * @var string 安全组id代表的地址集合
     */
    public $Id;

    /**
     * @var string 地址组id代表的地址集合
     */
    public $AddressModule;

    /**
     * @var string 服务组id代表的协议和端口集合
     */
    public $ServiceModule;

    /**
     * @var string 描述
     */
    public $Desc;

    /**
     * @param string $Action 执行规则。ACCEPT或DROP
     * @param string $CidrIp ip段。
     * @param string $PortRange 端口范围
     * @param string $IpProtocol 传输层协议。tcp，udp或ALL
     * @param string $Id 安全组id代表的地址集合
     * @param string $AddressModule 地址组id代表的地址集合
     * @param string $ServiceModule 服务组id代表的协议和端口集合
     * @param string $Desc 描述
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AddressModule",$param) and $param["AddressModule"] !== null) {
            $this->AddressModule = $param["AddressModule"];
        }

        if (array_key_exists("ServiceModule",$param) and $param["ServiceModule"] !== null) {
            $this->ServiceModule = $param["ServiceModule"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
