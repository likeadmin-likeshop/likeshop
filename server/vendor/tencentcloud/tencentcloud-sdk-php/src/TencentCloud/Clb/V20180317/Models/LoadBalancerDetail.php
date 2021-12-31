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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 负载均衡详细信息
 *
 * @method string getLoadBalancerId() 获取负载均衡实例 ID。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例 ID。
 * @method string getLoadBalancerName() 获取负载均衡实例的名称。
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置负载均衡实例的名称。
 * @method string getLoadBalancerType() 获取负载均衡实例的网络类型：
Public：公网属性， Private：内网属性。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置负载均衡实例的网络类型：
Public：公网属性， Private：内网属性。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取负载均衡实例的状态，包括
0：创建中，1：正常运行。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置负载均衡实例的状态，包括
0：创建中，1：正常运行。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddress() 获取负载均衡实例的 VIP 。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddress(string $Address) 设置负载均衡实例的 VIP 。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddressIPv6() 获取负载均衡实例 VIP 的IPv6地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddressIPv6(string $AddressIPv6) 设置负载均衡实例 VIP 的IPv6地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddressIPVersion() 获取负载均衡实例IP版本，IPv4 | IPv6。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddressIPVersion(string $AddressIPVersion) 设置负载均衡实例IP版本，IPv4 | IPv6。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIPv6Mode() 获取负载均衡实例IPv6地址类型，IPv6Nat64 | IPv6FullChain。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIPv6Mode(string $IPv6Mode) 设置负载均衡实例IPv6地址类型，IPv6Nat64 | IPv6FullChain。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取负载均衡实例所在可用区。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置负载均衡实例所在可用区。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddressIsp() 获取负载均衡实例IP地址所属的ISP。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddressIsp(string $AddressIsp) 设置负载均衡实例IP地址所属的ISP。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取负载均衡实例所属私有网络的 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置负载均衡实例所属私有网络的 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProjectId() 获取负载均衡实例所属的项目 ID， 0 表示默认项目。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(integer $ProjectId) 设置负载均衡实例所属的项目 ID， 0 表示默认项目。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取负载均衡实例的创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置负载均衡实例的创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeType() 获取负载均衡实例的计费类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeType(string $ChargeType) 设置负载均衡实例的计费类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method InternetAccessible getNetworkAttributes() 获取负载均衡实例的网络属性。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkAttributes(InternetAccessible $NetworkAttributes) 设置负载均衡实例的网络属性。
注意：此字段可能返回 null，表示取不到有效值。
 * @method LBChargePrepaid getPrepaidAttributes() 获取负载均衡实例的预付费相关属性。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrepaidAttributes(LBChargePrepaid $PrepaidAttributes) 设置负载均衡实例的预付费相关属性。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExtraInfo getExtraInfo() 获取暂做保留，一般用户无需关注。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraInfo(ExtraInfo $ExtraInfo) 设置暂做保留，一般用户无需关注。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigId() 获取负载均衡维度的个性化配置ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigId(string $ConfigId) 设置负载均衡维度的个性化配置ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取负载均衡实例的标签信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置负载均衡实例的标签信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getListenerId() 获取负载均衡监听器 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setListenerId(string $ListenerId) 设置负载均衡监听器 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取监听器协议。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置监听器协议。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取监听器端口。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置监听器端口。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLocationId() 获取转发规则的 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocationId(string $LocationId) 设置转发规则的 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomain() 获取转发规则的域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置转发规则的域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取转发规则的路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置转发规则的路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetId() 获取后端目标ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetId(string $TargetId) 设置后端目标ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetAddress() 获取后端目标的IP地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetAddress(string $TargetAddress) 设置后端目标的IP地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTargetPort() 获取后端目标监听端口。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetPort(integer $TargetPort) 设置后端目标监听端口。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTargetWeight() 获取后端目标转发权重。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetWeight(integer $TargetWeight) 设置后端目标转发权重。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsolation() 获取0：表示未被隔离，1：表示被隔离。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolation(integer $Isolation) 设置0：表示未被隔离，1：表示被隔离。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSecurityGroup() 获取负载均衡绑定的安全组列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityGroup(array $SecurityGroup) 设置负载均衡绑定的安全组列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLoadBalancerPassToTarget() 获取负载均衡安全组上移特性是否开启标识。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerPassToTarget(integer $LoadBalancerPassToTarget) 设置负载均衡安全组上移特性是否开启标识。
注意：此字段可能返回 null，表示取不到有效值。
 */
class LoadBalancerDetail extends AbstractModel
{
    /**
     * @var string 负载均衡实例 ID。
     */
    public $LoadBalancerId;

    /**
     * @var string 负载均衡实例的名称。
     */
    public $LoadBalancerName;

    /**
     * @var string 负载均衡实例的网络类型：
Public：公网属性， Private：内网属性。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerType;

    /**
     * @var integer 负载均衡实例的状态，包括
0：创建中，1：正常运行。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 负载均衡实例的 VIP 。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Address;

    /**
     * @var string 负载均衡实例 VIP 的IPv6地址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddressIPv6;

    /**
     * @var string 负载均衡实例IP版本，IPv4 | IPv6。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddressIPVersion;

    /**
     * @var string 负载均衡实例IPv6地址类型，IPv6Nat64 | IPv6FullChain。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IPv6Mode;

    /**
     * @var string 负载均衡实例所在可用区。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var string 负载均衡实例IP地址所属的ISP。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddressIsp;

    /**
     * @var string 负载均衡实例所属私有网络的 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var integer 负载均衡实例所属的项目 ID， 0 表示默认项目。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 负载均衡实例的创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 负载均衡实例的计费类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeType;

    /**
     * @var InternetAccessible 负载均衡实例的网络属性。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkAttributes;

    /**
     * @var LBChargePrepaid 负载均衡实例的预付费相关属性。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrepaidAttributes;

    /**
     * @var ExtraInfo 暂做保留，一般用户无需关注。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraInfo;

    /**
     * @var string 负载均衡维度的个性化配置ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigId;

    /**
     * @var array 负载均衡实例的标签信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 负载均衡监听器 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ListenerId;

    /**
     * @var string 监听器协议。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var integer 监听器端口。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string 转发规则的 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocationId;

    /**
     * @var string 转发规则的域名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var string 转发规则的路径。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var string 后端目标ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetId;

    /**
     * @var string 后端目标的IP地址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetAddress;

    /**
     * @var integer 后端目标监听端口。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetPort;

    /**
     * @var integer 后端目标转发权重。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetWeight;

    /**
     * @var integer 0：表示未被隔离，1：表示被隔离。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Isolation;

    /**
     * @var array 负载均衡绑定的安全组列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityGroup;

    /**
     * @var integer 负载均衡安全组上移特性是否开启标识。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerPassToTarget;

    /**
     * @param string $LoadBalancerId 负载均衡实例 ID。
     * @param string $LoadBalancerName 负载均衡实例的名称。
     * @param string $LoadBalancerType 负载均衡实例的网络类型：
Public：公网属性， Private：内网属性。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 负载均衡实例的状态，包括
0：创建中，1：正常运行。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Address 负载均衡实例的 VIP 。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AddressIPv6 负载均衡实例 VIP 的IPv6地址。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AddressIPVersion 负载均衡实例IP版本，IPv4 | IPv6。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IPv6Mode 负载均衡实例IPv6地址类型，IPv6Nat64 | IPv6FullChain。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 负载均衡实例所在可用区。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AddressIsp 负载均衡实例IP地址所属的ISP。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 负载均衡实例所属私有网络的 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProjectId 负载均衡实例所属的项目 ID， 0 表示默认项目。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 负载均衡实例的创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeType 负载均衡实例的计费类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param InternetAccessible $NetworkAttributes 负载均衡实例的网络属性。
注意：此字段可能返回 null，表示取不到有效值。
     * @param LBChargePrepaid $PrepaidAttributes 负载均衡实例的预付费相关属性。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExtraInfo $ExtraInfo 暂做保留，一般用户无需关注。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigId 负载均衡维度的个性化配置ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 负载均衡实例的标签信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ListenerId 负载均衡监听器 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol 监听器协议。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port 监听器端口。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LocationId 转发规则的 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Domain 转发规则的域名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 转发规则的路径。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetId 后端目标ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetAddress 后端目标的IP地址。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TargetPort 后端目标监听端口。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TargetWeight 后端目标转发权重。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Isolation 0：表示未被隔离，1：表示被隔离。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SecurityGroup 负载均衡绑定的安全组列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LoadBalancerPassToTarget 负载均衡安全组上移特性是否开启标识。
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("AddressIPv6",$param) and $param["AddressIPv6"] !== null) {
            $this->AddressIPv6 = $param["AddressIPv6"];
        }

        if (array_key_exists("AddressIPVersion",$param) and $param["AddressIPVersion"] !== null) {
            $this->AddressIPVersion = $param["AddressIPVersion"];
        }

        if (array_key_exists("IPv6Mode",$param) and $param["IPv6Mode"] !== null) {
            $this->IPv6Mode = $param["IPv6Mode"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("AddressIsp",$param) and $param["AddressIsp"] !== null) {
            $this->AddressIsp = $param["AddressIsp"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("NetworkAttributes",$param) and $param["NetworkAttributes"] !== null) {
            $this->NetworkAttributes = new InternetAccessible();
            $this->NetworkAttributes->deserialize($param["NetworkAttributes"]);
        }

        if (array_key_exists("PrepaidAttributes",$param) and $param["PrepaidAttributes"] !== null) {
            $this->PrepaidAttributes = new LBChargePrepaid();
            $this->PrepaidAttributes->deserialize($param["PrepaidAttributes"]);
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = new ExtraInfo();
            $this->ExtraInfo->deserialize($param["ExtraInfo"]);
        }

        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            $this->TargetId = $param["TargetId"];
        }

        if (array_key_exists("TargetAddress",$param) and $param["TargetAddress"] !== null) {
            $this->TargetAddress = $param["TargetAddress"];
        }

        if (array_key_exists("TargetPort",$param) and $param["TargetPort"] !== null) {
            $this->TargetPort = $param["TargetPort"];
        }

        if (array_key_exists("TargetWeight",$param) and $param["TargetWeight"] !== null) {
            $this->TargetWeight = $param["TargetWeight"];
        }

        if (array_key_exists("Isolation",$param) and $param["Isolation"] !== null) {
            $this->Isolation = $param["Isolation"];
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("LoadBalancerPassToTarget",$param) and $param["LoadBalancerPassToTarget"] !== null) {
            $this->LoadBalancerPassToTarget = $param["LoadBalancerPassToTarget"];
        }
    }
}
