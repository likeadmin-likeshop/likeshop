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
 * 描述 EIP 信息
 *
 * @method string getAddressId() 获取`EIP`的`ID`，是`EIP`的唯一标识。
 * @method void setAddressId(string $AddressId) 设置`EIP`的`ID`，是`EIP`的唯一标识。
 * @method string getAddressName() 获取`EIP`名称。
 * @method void setAddressName(string $AddressName) 设置`EIP`名称。
 * @method string getAddressStatus() 获取`EIP`状态，包含'CREATING'(创建中),'BINDING'(绑定中),'BIND'(已绑定),'UNBINDING'(解绑中),'UNBIND'(已解绑),'OFFLINING'(释放中),'BIND_ENI'(绑定悬空弹性网卡)
 * @method void setAddressStatus(string $AddressStatus) 设置`EIP`状态，包含'CREATING'(创建中),'BINDING'(绑定中),'BIND'(已绑定),'UNBINDING'(解绑中),'UNBIND'(已解绑),'OFFLINING'(释放中),'BIND_ENI'(绑定悬空弹性网卡)
 * @method string getAddressIp() 获取外网IP地址
 * @method void setAddressIp(string $AddressIp) 设置外网IP地址
 * @method string getInstanceId() 获取绑定的资源实例`ID`。可能是一个`CVM`，`NAT`。
 * @method void setInstanceId(string $InstanceId) 设置绑定的资源实例`ID`。可能是一个`CVM`，`NAT`。
 * @method string getCreatedTime() 获取创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
 * @method string getNetworkInterfaceId() 获取绑定的弹性网卡ID
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) 设置绑定的弹性网卡ID
 * @method string getPrivateAddressIp() 获取绑定的资源内网ip
 * @method void setPrivateAddressIp(string $PrivateAddressIp) 设置绑定的资源内网ip
 * @method boolean getIsArrears() 获取资源隔离状态。true表示eip处于隔离状态，false表示资源处于未隔离状态
 * @method void setIsArrears(boolean $IsArrears) 设置资源隔离状态。true表示eip处于隔离状态，false表示资源处于未隔离状态
 * @method boolean getIsBlocked() 获取资源封堵状态。true表示eip处于封堵状态，false表示eip处于未封堵状态
 * @method void setIsBlocked(boolean $IsBlocked) 设置资源封堵状态。true表示eip处于封堵状态，false表示eip处于未封堵状态
 * @method boolean getIsEipDirectConnection() 获取eip是否支持直通模式。true表示eip支持直通模式，false表示资源不支持直通模式
 * @method void setIsEipDirectConnection(boolean $IsEipDirectConnection) 设置eip是否支持直通模式。true表示eip支持直通模式，false表示资源不支持直通模式
 * @method string getAddressType() 获取eip资源类型，包括"CalcIP","WanIP","EIP","AnycastEIP"。其中"CalcIP"表示设备ip，“WanIP”表示普通公网ip，“EIP”表示弹性公网ip，“AnycastEip”表示加速EIP
 * @method void setAddressType(string $AddressType) 设置eip资源类型，包括"CalcIP","WanIP","EIP","AnycastEIP"。其中"CalcIP"表示设备ip，“WanIP”表示普通公网ip，“EIP”表示弹性公网ip，“AnycastEip”表示加速EIP
 * @method boolean getCascadeRelease() 获取eip是否在解绑后自动释放。true表示eip将会在解绑后自动释放，false表示eip在解绑后不会自动释放
 * @method void setCascadeRelease(boolean $CascadeRelease) 设置eip是否在解绑后自动释放。true表示eip将会在解绑后自动释放，false表示eip在解绑后不会自动释放
 * @method AlgType getEipAlgType() 获取EIP ALG开启的协议类型。
 * @method void setEipAlgType(AlgType $EipAlgType) 设置EIP ALG开启的协议类型。
 * @method string getInternetServiceProvider() 获取弹性公网IP的运营商信息，当前可能返回值包括"CMCC","CTCC","CUCC","BGP"
 * @method void setInternetServiceProvider(string $InternetServiceProvider) 设置弹性公网IP的运营商信息，当前可能返回值包括"CMCC","CTCC","CUCC","BGP"
 * @method boolean getLocalBgp() 获取是否本地带宽EIP
 * @method void setLocalBgp(boolean $LocalBgp) 设置是否本地带宽EIP
 * @method integer getBandwidth() 获取弹性公网IP的带宽值。注意，传统账户类型账户的弹性公网IP没有带宽属性，值为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBandwidth(integer $Bandwidth) 设置弹性公网IP的带宽值。注意，传统账户类型账户的弹性公网IP没有带宽属性，值为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInternetChargeType() 获取弹性公网IP的网络计费模式。注意，传统账户类型账户的弹性公网IP没有网络计费模式属性，值为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternetChargeType(string $InternetChargeType) 设置弹性公网IP的网络计费模式。注意，传统账户类型账户的弹性公网IP没有网络计费模式属性，值为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagSet() 获取弹性公网IP关联的标签列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagSet(array $TagSet) 设置弹性公网IP关联的标签列表。
注意：此字段可能返回 null，表示取不到有效值。
 */
class Address extends AbstractModel
{
    /**
     * @var string `EIP`的`ID`，是`EIP`的唯一标识。
     */
    public $AddressId;

    /**
     * @var string `EIP`名称。
     */
    public $AddressName;

    /**
     * @var string `EIP`状态，包含'CREATING'(创建中),'BINDING'(绑定中),'BIND'(已绑定),'UNBINDING'(解绑中),'UNBIND'(已解绑),'OFFLINING'(释放中),'BIND_ENI'(绑定悬空弹性网卡)
     */
    public $AddressStatus;

    /**
     * @var string 外网IP地址
     */
    public $AddressIp;

    /**
     * @var string 绑定的资源实例`ID`。可能是一个`CVM`，`NAT`。
     */
    public $InstanceId;

    /**
     * @var string 创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
     */
    public $CreatedTime;

    /**
     * @var string 绑定的弹性网卡ID
     */
    public $NetworkInterfaceId;

    /**
     * @var string 绑定的资源内网ip
     */
    public $PrivateAddressIp;

    /**
     * @var boolean 资源隔离状态。true表示eip处于隔离状态，false表示资源处于未隔离状态
     */
    public $IsArrears;

    /**
     * @var boolean 资源封堵状态。true表示eip处于封堵状态，false表示eip处于未封堵状态
     */
    public $IsBlocked;

    /**
     * @var boolean eip是否支持直通模式。true表示eip支持直通模式，false表示资源不支持直通模式
     */
    public $IsEipDirectConnection;

    /**
     * @var string eip资源类型，包括"CalcIP","WanIP","EIP","AnycastEIP"。其中"CalcIP"表示设备ip，“WanIP”表示普通公网ip，“EIP”表示弹性公网ip，“AnycastEip”表示加速EIP
     */
    public $AddressType;

    /**
     * @var boolean eip是否在解绑后自动释放。true表示eip将会在解绑后自动释放，false表示eip在解绑后不会自动释放
     */
    public $CascadeRelease;

    /**
     * @var AlgType EIP ALG开启的协议类型。
     */
    public $EipAlgType;

    /**
     * @var string 弹性公网IP的运营商信息，当前可能返回值包括"CMCC","CTCC","CUCC","BGP"
     */
    public $InternetServiceProvider;

    /**
     * @var boolean 是否本地带宽EIP
     */
    public $LocalBgp;

    /**
     * @var integer 弹性公网IP的带宽值。注意，传统账户类型账户的弹性公网IP没有带宽属性，值为空。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bandwidth;

    /**
     * @var string 弹性公网IP的网络计费模式。注意，传统账户类型账户的弹性公网IP没有网络计费模式属性，值为空。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternetChargeType;

    /**
     * @var array 弹性公网IP关联的标签列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagSet;

    /**
     * @param string $AddressId `EIP`的`ID`，是`EIP`的唯一标识。
     * @param string $AddressName `EIP`名称。
     * @param string $AddressStatus `EIP`状态，包含'CREATING'(创建中),'BINDING'(绑定中),'BIND'(已绑定),'UNBINDING'(解绑中),'UNBIND'(已解绑),'OFFLINING'(释放中),'BIND_ENI'(绑定悬空弹性网卡)
     * @param string $AddressIp 外网IP地址
     * @param string $InstanceId 绑定的资源实例`ID`。可能是一个`CVM`，`NAT`。
     * @param string $CreatedTime 创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
     * @param string $NetworkInterfaceId 绑定的弹性网卡ID
     * @param string $PrivateAddressIp 绑定的资源内网ip
     * @param boolean $IsArrears 资源隔离状态。true表示eip处于隔离状态，false表示资源处于未隔离状态
     * @param boolean $IsBlocked 资源封堵状态。true表示eip处于封堵状态，false表示eip处于未封堵状态
     * @param boolean $IsEipDirectConnection eip是否支持直通模式。true表示eip支持直通模式，false表示资源不支持直通模式
     * @param string $AddressType eip资源类型，包括"CalcIP","WanIP","EIP","AnycastEIP"。其中"CalcIP"表示设备ip，“WanIP”表示普通公网ip，“EIP”表示弹性公网ip，“AnycastEip”表示加速EIP
     * @param boolean $CascadeRelease eip是否在解绑后自动释放。true表示eip将会在解绑后自动释放，false表示eip在解绑后不会自动释放
     * @param AlgType $EipAlgType EIP ALG开启的协议类型。
     * @param string $InternetServiceProvider 弹性公网IP的运营商信息，当前可能返回值包括"CMCC","CTCC","CUCC","BGP"
     * @param boolean $LocalBgp 是否本地带宽EIP
     * @param integer $Bandwidth 弹性公网IP的带宽值。注意，传统账户类型账户的弹性公网IP没有带宽属性，值为空。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InternetChargeType 弹性公网IP的网络计费模式。注意，传统账户类型账户的弹性公网IP没有网络计费模式属性，值为空。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagSet 弹性公网IP关联的标签列表。
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
        if (array_key_exists("AddressId",$param) and $param["AddressId"] !== null) {
            $this->AddressId = $param["AddressId"];
        }

        if (array_key_exists("AddressName",$param) and $param["AddressName"] !== null) {
            $this->AddressName = $param["AddressName"];
        }

        if (array_key_exists("AddressStatus",$param) and $param["AddressStatus"] !== null) {
            $this->AddressStatus = $param["AddressStatus"];
        }

        if (array_key_exists("AddressIp",$param) and $param["AddressIp"] !== null) {
            $this->AddressIp = $param["AddressIp"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("PrivateAddressIp",$param) and $param["PrivateAddressIp"] !== null) {
            $this->PrivateAddressIp = $param["PrivateAddressIp"];
        }

        if (array_key_exists("IsArrears",$param) and $param["IsArrears"] !== null) {
            $this->IsArrears = $param["IsArrears"];
        }

        if (array_key_exists("IsBlocked",$param) and $param["IsBlocked"] !== null) {
            $this->IsBlocked = $param["IsBlocked"];
        }

        if (array_key_exists("IsEipDirectConnection",$param) and $param["IsEipDirectConnection"] !== null) {
            $this->IsEipDirectConnection = $param["IsEipDirectConnection"];
        }

        if (array_key_exists("AddressType",$param) and $param["AddressType"] !== null) {
            $this->AddressType = $param["AddressType"];
        }

        if (array_key_exists("CascadeRelease",$param) and $param["CascadeRelease"] !== null) {
            $this->CascadeRelease = $param["CascadeRelease"];
        }

        if (array_key_exists("EipAlgType",$param) and $param["EipAlgType"] !== null) {
            $this->EipAlgType = new AlgType();
            $this->EipAlgType->deserialize($param["EipAlgType"]);
        }

        if (array_key_exists("InternetServiceProvider",$param) and $param["InternetServiceProvider"] !== null) {
            $this->InternetServiceProvider = $param["InternetServiceProvider"];
        }

        if (array_key_exists("LocalBgp",$param) and $param["LocalBgp"] !== null) {
            $this->LocalBgp = $param["LocalBgp"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("InternetChargeType",$param) and $param["InternetChargeType"] !== null) {
            $this->InternetChargeType = $param["InternetChargeType"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }
    }
}
