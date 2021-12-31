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
 * 专线网关对象。
 *
 * @method string getDirectConnectGatewayId() 获取专线网关`ID`。
 * @method void setDirectConnectGatewayId(string $DirectConnectGatewayId) 设置专线网关`ID`。
 * @method string getDirectConnectGatewayName() 获取专线网关名称。
 * @method void setDirectConnectGatewayName(string $DirectConnectGatewayName) 设置专线网关名称。
 * @method string getVpcId() 获取专线网关关联`VPC`实例`ID`。
 * @method void setVpcId(string $VpcId) 设置专线网关关联`VPC`实例`ID`。
 * @method string getNetworkType() 获取关联网络类型：
<li>`VPC` - 私有网络</li>
<li>`CCN` - 云联网</li>
 * @method void setNetworkType(string $NetworkType) 设置关联网络类型：
<li>`VPC` - 私有网络</li>
<li>`CCN` - 云联网</li>
 * @method string getNetworkInstanceId() 获取关联网络实例`ID`：
<li>`NetworkType`为`VPC`时，这里为私有网络实例`ID`</li>
<li>`NetworkType`为`CCN`时，这里为云联网实例`ID`</li>
 * @method void setNetworkInstanceId(string $NetworkInstanceId) 设置关联网络实例`ID`：
<li>`NetworkType`为`VPC`时，这里为私有网络实例`ID`</li>
<li>`NetworkType`为`CCN`时，这里为云联网实例`ID`</li>
 * @method string getGatewayType() 获取网关类型：
<li>NORMAL - 标准型，注：云联网只支持标准型</li>
<li>NAT - NAT型</li>
NAT类型支持网络地址转换配置，类型确定后不能修改；一个私有网络可以创建一个NAT类型的专线网关和一个非NAT类型的专线网关
 * @method void setGatewayType(string $GatewayType) 设置网关类型：
<li>NORMAL - 标准型，注：云联网只支持标准型</li>
<li>NAT - NAT型</li>
NAT类型支持网络地址转换配置，类型确定后不能修改；一个私有网络可以创建一个NAT类型的专线网关和一个非NAT类型的专线网关
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method string getDirectConnectGatewayIp() 获取专线网关IP。
 * @method void setDirectConnectGatewayIp(string $DirectConnectGatewayIp) 设置专线网关IP。
 * @method string getCcnId() 获取专线网关关联`CCN`实例`ID`。
 * @method void setCcnId(string $CcnId) 设置专线网关关联`CCN`实例`ID`。
 * @method string getCcnRouteType() 获取云联网路由学习类型：
<li>`BGP` - 自动学习。</li>
<li>`STATIC` - 静态，即用户配置。</li>
 * @method void setCcnRouteType(string $CcnRouteType) 设置云联网路由学习类型：
<li>`BGP` - 自动学习。</li>
<li>`STATIC` - 静态，即用户配置。</li>
 * @method boolean getEnableBGP() 获取是否启用BGP。
 * @method void setEnableBGP(boolean $EnableBGP) 设置是否启用BGP。
 * @method boolean getEnableBGPCommunity() 获取开启和关闭BGP的community属性。
 * @method void setEnableBGPCommunity(boolean $EnableBGPCommunity) 设置开启和关闭BGP的community属性。
 * @method string getNatGatewayId() 获取绑定的NAT网关ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNatGatewayId(string $NatGatewayId) 设置绑定的NAT网关ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVXLANSupport() 获取专线网关是否支持VXLAN架构
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVXLANSupport(array $VXLANSupport) 设置专线网关是否支持VXLAN架构
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModeType() 获取云联网路由发布模式：`standard`（标准模式）、`exquisite`（精细模式）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModeType(string $ModeType) 设置云联网路由发布模式：`standard`（标准模式）、`exquisite`（精细模式）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getLocalZone() 获取是否为localZone专线网关。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocalZone(boolean $LocalZone) 设置是否为localZone专线网关。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取专线网关所在可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置专线网关所在可用区
注意：此字段可能返回 null，表示取不到有效值。
 */
class DirectConnectGateway extends AbstractModel
{
    /**
     * @var string 专线网关`ID`。
     */
    public $DirectConnectGatewayId;

    /**
     * @var string 专线网关名称。
     */
    public $DirectConnectGatewayName;

    /**
     * @var string 专线网关关联`VPC`实例`ID`。
     */
    public $VpcId;

    /**
     * @var string 关联网络类型：
<li>`VPC` - 私有网络</li>
<li>`CCN` - 云联网</li>
     */
    public $NetworkType;

    /**
     * @var string 关联网络实例`ID`：
<li>`NetworkType`为`VPC`时，这里为私有网络实例`ID`</li>
<li>`NetworkType`为`CCN`时，这里为云联网实例`ID`</li>
     */
    public $NetworkInstanceId;

    /**
     * @var string 网关类型：
<li>NORMAL - 标准型，注：云联网只支持标准型</li>
<li>NAT - NAT型</li>
NAT类型支持网络地址转换配置，类型确定后不能修改；一个私有网络可以创建一个NAT类型的专线网关和一个非NAT类型的专线网关
     */
    public $GatewayType;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var string 专线网关IP。
     */
    public $DirectConnectGatewayIp;

    /**
     * @var string 专线网关关联`CCN`实例`ID`。
     */
    public $CcnId;

    /**
     * @var string 云联网路由学习类型：
<li>`BGP` - 自动学习。</li>
<li>`STATIC` - 静态，即用户配置。</li>
     */
    public $CcnRouteType;

    /**
     * @var boolean 是否启用BGP。
     */
    public $EnableBGP;

    /**
     * @var boolean 开启和关闭BGP的community属性。
     */
    public $EnableBGPCommunity;

    /**
     * @var string 绑定的NAT网关ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NatGatewayId;

    /**
     * @var array 专线网关是否支持VXLAN架构
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VXLANSupport;

    /**
     * @var string 云联网路由发布模式：`standard`（标准模式）、`exquisite`（精细模式）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModeType;

    /**
     * @var boolean 是否为localZone专线网关。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocalZone;

    /**
     * @var string 专线网关所在可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @param string $DirectConnectGatewayId 专线网关`ID`。
     * @param string $DirectConnectGatewayName 专线网关名称。
     * @param string $VpcId 专线网关关联`VPC`实例`ID`。
     * @param string $NetworkType 关联网络类型：
<li>`VPC` - 私有网络</li>
<li>`CCN` - 云联网</li>
     * @param string $NetworkInstanceId 关联网络实例`ID`：
<li>`NetworkType`为`VPC`时，这里为私有网络实例`ID`</li>
<li>`NetworkType`为`CCN`时，这里为云联网实例`ID`</li>
     * @param string $GatewayType 网关类型：
<li>NORMAL - 标准型，注：云联网只支持标准型</li>
<li>NAT - NAT型</li>
NAT类型支持网络地址转换配置，类型确定后不能修改；一个私有网络可以创建一个NAT类型的专线网关和一个非NAT类型的专线网关
     * @param string $CreateTime 创建时间。
     * @param string $DirectConnectGatewayIp 专线网关IP。
     * @param string $CcnId 专线网关关联`CCN`实例`ID`。
     * @param string $CcnRouteType 云联网路由学习类型：
<li>`BGP` - 自动学习。</li>
<li>`STATIC` - 静态，即用户配置。</li>
     * @param boolean $EnableBGP 是否启用BGP。
     * @param boolean $EnableBGPCommunity 开启和关闭BGP的community属性。
     * @param string $NatGatewayId 绑定的NAT网关ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VXLANSupport 专线网关是否支持VXLAN架构
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModeType 云联网路由发布模式：`standard`（标准模式）、`exquisite`（精细模式）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $LocalZone 是否为localZone专线网关。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 专线网关所在可用区
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
        if (array_key_exists("DirectConnectGatewayId",$param) and $param["DirectConnectGatewayId"] !== null) {
            $this->DirectConnectGatewayId = $param["DirectConnectGatewayId"];
        }

        if (array_key_exists("DirectConnectGatewayName",$param) and $param["DirectConnectGatewayName"] !== null) {
            $this->DirectConnectGatewayName = $param["DirectConnectGatewayName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("NetworkInstanceId",$param) and $param["NetworkInstanceId"] !== null) {
            $this->NetworkInstanceId = $param["NetworkInstanceId"];
        }

        if (array_key_exists("GatewayType",$param) and $param["GatewayType"] !== null) {
            $this->GatewayType = $param["GatewayType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DirectConnectGatewayIp",$param) and $param["DirectConnectGatewayIp"] !== null) {
            $this->DirectConnectGatewayIp = $param["DirectConnectGatewayIp"];
        }

        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("CcnRouteType",$param) and $param["CcnRouteType"] !== null) {
            $this->CcnRouteType = $param["CcnRouteType"];
        }

        if (array_key_exists("EnableBGP",$param) and $param["EnableBGP"] !== null) {
            $this->EnableBGP = $param["EnableBGP"];
        }

        if (array_key_exists("EnableBGPCommunity",$param) and $param["EnableBGPCommunity"] !== null) {
            $this->EnableBGPCommunity = $param["EnableBGPCommunity"];
        }

        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("VXLANSupport",$param) and $param["VXLANSupport"] !== null) {
            $this->VXLANSupport = $param["VXLANSupport"];
        }

        if (array_key_exists("ModeType",$param) and $param["ModeType"] !== null) {
            $this->ModeType = $param["ModeType"];
        }

        if (array_key_exists("LocalZone",$param) and $param["LocalZone"] !== null) {
            $this->LocalZone = $param["LocalZone"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
