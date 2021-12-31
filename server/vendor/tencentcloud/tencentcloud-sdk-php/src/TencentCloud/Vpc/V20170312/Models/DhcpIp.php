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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述 DhcpIp 信息
 *
 * @method string getDhcpIpId() 获取`DhcpIp`的`ID`，是`DhcpIp`的唯一标识。
 * @method void setDhcpIpId(string $DhcpIpId) 设置`DhcpIp`的`ID`，是`DhcpIp`的唯一标识。
 * @method string getVpcId() 获取`DhcpIp`所在私有网络`ID`。
 * @method void setVpcId(string $VpcId) 设置`DhcpIp`所在私有网络`ID`。
 * @method string getSubnetId() 获取`DhcpIp`所在子网`ID`。
 * @method void setSubnetId(string $SubnetId) 设置`DhcpIp`所在子网`ID`。
 * @method string getDhcpIpName() 获取`DhcpIp`的名称。
 * @method void setDhcpIpName(string $DhcpIpName) 设置`DhcpIp`的名称。
 * @method string getPrivateIpAddress() 获取IP地址。
 * @method void setPrivateIpAddress(string $PrivateIpAddress) 设置IP地址。
 * @method string getAddressIp() 获取绑定`EIP`。
 * @method void setAddressIp(string $AddressIp) 设置绑定`EIP`。
 * @method string getNetworkInterfaceId() 获取`DhcpIp`关联弹性网卡`ID`。
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) 设置`DhcpIp`关联弹性网卡`ID`。
 * @method string getInstanceId() 获取被绑定的实例`ID`。
 * @method void setInstanceId(string $InstanceId) 设置被绑定的实例`ID`。
 * @method string getState() 获取状态：
<li>`AVAILABLE`：运行中</li>
<li>`UNBIND`：未绑定</li>
 * @method void setState(string $State) 设置状态：
<li>`AVAILABLE`：运行中</li>
<li>`UNBIND`：未绑定</li>
 * @method string getCreatedTime() 获取创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
 */
class DhcpIp extends AbstractModel
{
    /**
     * @var string `DhcpIp`的`ID`，是`DhcpIp`的唯一标识。
     */
    public $DhcpIpId;

    /**
     * @var string `DhcpIp`所在私有网络`ID`。
     */
    public $VpcId;

    /**
     * @var string `DhcpIp`所在子网`ID`。
     */
    public $SubnetId;

    /**
     * @var string `DhcpIp`的名称。
     */
    public $DhcpIpName;

    /**
     * @var string IP地址。
     */
    public $PrivateIpAddress;

    /**
     * @var string 绑定`EIP`。
     */
    public $AddressIp;

    /**
     * @var string `DhcpIp`关联弹性网卡`ID`。
     */
    public $NetworkInterfaceId;

    /**
     * @var string 被绑定的实例`ID`。
     */
    public $InstanceId;

    /**
     * @var string 状态：
<li>`AVAILABLE`：运行中</li>
<li>`UNBIND`：未绑定</li>
     */
    public $State;

    /**
     * @var string 创建时间。
     */
    public $CreatedTime;

    /**
     * @param string $DhcpIpId `DhcpIp`的`ID`，是`DhcpIp`的唯一标识。
     * @param string $VpcId `DhcpIp`所在私有网络`ID`。
     * @param string $SubnetId `DhcpIp`所在子网`ID`。
     * @param string $DhcpIpName `DhcpIp`的名称。
     * @param string $PrivateIpAddress IP地址。
     * @param string $AddressIp 绑定`EIP`。
     * @param string $NetworkInterfaceId `DhcpIp`关联弹性网卡`ID`。
     * @param string $InstanceId 被绑定的实例`ID`。
     * @param string $State 状态：
<li>`AVAILABLE`：运行中</li>
<li>`UNBIND`：未绑定</li>
     * @param string $CreatedTime 创建时间。
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
        if (array_key_exists("DhcpIpId",$param) and $param["DhcpIpId"] !== null) {
            $this->DhcpIpId = $param["DhcpIpId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DhcpIpName",$param) and $param["DhcpIpName"] !== null) {
            $this->DhcpIpName = $param["DhcpIpName"];
        }

        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            $this->PrivateIpAddress = $param["PrivateIpAddress"];
        }

        if (array_key_exists("AddressIp",$param) and $param["AddressIp"] !== null) {
            $this->AddressIp = $param["AddressIp"];
        }

        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
