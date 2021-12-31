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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HAVIP对象。
 *
 * @method string getHaVipId() 获取HAVIP的ID，是HAVIP的唯一标识。
 * @method void setHaVipId(string $HaVipId) 设置HAVIP的ID，是HAVIP的唯一标识。
 * @method string getHaVipName() 获取HAVIP名称。
 * @method void setHaVipName(string $HaVipName) 设置HAVIP名称。
 * @method string getVip() 获取虚拟IP地址。
 * @method void setVip(string $Vip) 设置虚拟IP地址。
 * @method string getVpcId() 获取HAVIP所在私有网络ID。
 * @method void setVpcId(string $VpcId) 设置HAVIP所在私有网络ID。
 * @method string getSubnetId() 获取HAVIP所在子网ID。
 * @method void setSubnetId(string $SubnetId) 设置HAVIP所在子网ID。
 * @method string getNetworkInterfaceId() 获取HAVIP关联弹性网卡ID。
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) 设置HAVIP关联弹性网卡ID。
 * @method string getInstanceId() 获取被绑定的实例ID。
 * @method void setInstanceId(string $InstanceId) 设置被绑定的实例ID。
 * @method string getAddressIp() 获取绑定EIP。
 * @method void setAddressIp(string $AddressIp) 设置绑定EIP。
 * @method string getState() 获取状态：
AVAILABLE：运行中。
UNBIND：未绑定。
 * @method void setState(string $State) 设置状态：
AVAILABLE：运行中。
UNBIND：未绑定。
 * @method string getCreatedTime() 获取创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
 * @method string getBusiness() 获取使用havip的业务标识。
 * @method void setBusiness(string $Business) 设置使用havip的业务标识。
 */
class HaVip extends AbstractModel
{
    /**
     * @var string HAVIP的ID，是HAVIP的唯一标识。
     */
    public $HaVipId;

    /**
     * @var string HAVIP名称。
     */
    public $HaVipName;

    /**
     * @var string 虚拟IP地址。
     */
    public $Vip;

    /**
     * @var string HAVIP所在私有网络ID。
     */
    public $VpcId;

    /**
     * @var string HAVIP所在子网ID。
     */
    public $SubnetId;

    /**
     * @var string HAVIP关联弹性网卡ID。
     */
    public $NetworkInterfaceId;

    /**
     * @var string 被绑定的实例ID。
     */
    public $InstanceId;

    /**
     * @var string 绑定EIP。
     */
    public $AddressIp;

    /**
     * @var string 状态：
AVAILABLE：运行中。
UNBIND：未绑定。
     */
    public $State;

    /**
     * @var string 创建时间。
     */
    public $CreatedTime;

    /**
     * @var string 使用havip的业务标识。
     */
    public $Business;

    /**
     * @param string $HaVipId HAVIP的ID，是HAVIP的唯一标识。
     * @param string $HaVipName HAVIP名称。
     * @param string $Vip 虚拟IP地址。
     * @param string $VpcId HAVIP所在私有网络ID。
     * @param string $SubnetId HAVIP所在子网ID。
     * @param string $NetworkInterfaceId HAVIP关联弹性网卡ID。
     * @param string $InstanceId 被绑定的实例ID。
     * @param string $AddressIp 绑定EIP。
     * @param string $State 状态：
AVAILABLE：运行中。
UNBIND：未绑定。
     * @param string $CreatedTime 创建时间。
     * @param string $Business 使用havip的业务标识。
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
        if (array_key_exists("HaVipId",$param) and $param["HaVipId"] !== null) {
            $this->HaVipId = $param["HaVipId"];
        }

        if (array_key_exists("HaVipName",$param) and $param["HaVipName"] !== null) {
            $this->HaVipName = $param["HaVipName"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AddressIp",$param) and $param["AddressIp"] !== null) {
            $this->AddressIp = $param["AddressIp"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }
    }
}
