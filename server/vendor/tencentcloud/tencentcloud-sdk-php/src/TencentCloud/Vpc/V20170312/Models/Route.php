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
 * 路由策略对象
 *
 * @method string getDestinationCidrBlock() 获取目的网段，取值不能在私有网络网段内，例如：112.20.51.0/24。
 * @method void setDestinationCidrBlock(string $DestinationCidrBlock) 设置目的网段，取值不能在私有网络网段内，例如：112.20.51.0/24。
 * @method string getGatewayType() 获取下一跳类型，目前我们支持的类型有：
CVM：公网网关类型的云服务器；
VPN：VPN网关；
DIRECTCONNECT：专线网关；
PEERCONNECTION：对等连接；
HAVIP：高可用虚拟IP；
NAT：NAT网关; 
NORMAL_CVM：普通云服务器；
EIP：云服务器的公网IP；
LOCAL_GATEWAY：本地网关。
 * @method void setGatewayType(string $GatewayType) 设置下一跳类型，目前我们支持的类型有：
CVM：公网网关类型的云服务器；
VPN：VPN网关；
DIRECTCONNECT：专线网关；
PEERCONNECTION：对等连接；
HAVIP：高可用虚拟IP；
NAT：NAT网关; 
NORMAL_CVM：普通云服务器；
EIP：云服务器的公网IP；
LOCAL_GATEWAY：本地网关。
 * @method string getGatewayId() 获取下一跳地址，这里只需要指定不同下一跳类型的网关ID，系统会自动匹配到下一跳地址。
特别注意：当 GatewayType 为 EIP 时，GatewayId 固定值 '0'
 * @method void setGatewayId(string $GatewayId) 设置下一跳地址，这里只需要指定不同下一跳类型的网关ID，系统会自动匹配到下一跳地址。
特别注意：当 GatewayType 为 EIP 时，GatewayId 固定值 '0'
 * @method integer getRouteId() 获取路由策略ID。IPv4路由策略ID是有意义的值，IPv6路由策略是无意义的值0。后续建议完全使用字符串唯一ID `RouteItemId`操作路由策略。
 * @method void setRouteId(integer $RouteId) 设置路由策略ID。IPv4路由策略ID是有意义的值，IPv6路由策略是无意义的值0。后续建议完全使用字符串唯一ID `RouteItemId`操作路由策略。
 * @method string getRouteDescription() 获取路由策略描述。
 * @method void setRouteDescription(string $RouteDescription) 设置路由策略描述。
 * @method boolean getEnabled() 获取是否启用
 * @method void setEnabled(boolean $Enabled) 设置是否启用
 * @method string getRouteType() 获取路由类型，目前我们支持的类型有：
USER：用户路由；
NETD：网络探测路由，创建网络探测实例时，系统默认下发，不可编辑与删除；
CCN：云联网路由，系统默认下发，不可编辑与删除。
用户只能添加和操作 USER 类型的路由。
 * @method void setRouteType(string $RouteType) 设置路由类型，目前我们支持的类型有：
USER：用户路由；
NETD：网络探测路由，创建网络探测实例时，系统默认下发，不可编辑与删除；
CCN：云联网路由，系统默认下发，不可编辑与删除。
用户只能添加和操作 USER 类型的路由。
 * @method string getRouteTableId() 获取路由表实例ID，例如：rtb-azd4dt1c。
 * @method void setRouteTableId(string $RouteTableId) 设置路由表实例ID，例如：rtb-azd4dt1c。
 * @method string getDestinationIpv6CidrBlock() 获取目的IPv6网段，取值不能在私有网络网段内，例如：2402:4e00:1000:810b::/64。
 * @method void setDestinationIpv6CidrBlock(string $DestinationIpv6CidrBlock) 设置目的IPv6网段，取值不能在私有网络网段内，例如：2402:4e00:1000:810b::/64。
 * @method string getRouteItemId() 获取路由唯一策略ID。
 * @method void setRouteItemId(string $RouteItemId) 设置路由唯一策略ID。
 * @method boolean getPublishedToVbc() 获取路由策略是否发布到云联网。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublishedToVbc(boolean $PublishedToVbc) 设置路由策略是否发布到云联网。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取路由策略创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置路由策略创建时间
 */
class Route extends AbstractModel
{
    /**
     * @var string 目的网段，取值不能在私有网络网段内，例如：112.20.51.0/24。
     */
    public $DestinationCidrBlock;

    /**
     * @var string 下一跳类型，目前我们支持的类型有：
CVM：公网网关类型的云服务器；
VPN：VPN网关；
DIRECTCONNECT：专线网关；
PEERCONNECTION：对等连接；
HAVIP：高可用虚拟IP；
NAT：NAT网关; 
NORMAL_CVM：普通云服务器；
EIP：云服务器的公网IP；
LOCAL_GATEWAY：本地网关。
     */
    public $GatewayType;

    /**
     * @var string 下一跳地址，这里只需要指定不同下一跳类型的网关ID，系统会自动匹配到下一跳地址。
特别注意：当 GatewayType 为 EIP 时，GatewayId 固定值 '0'
     */
    public $GatewayId;

    /**
     * @var integer 路由策略ID。IPv4路由策略ID是有意义的值，IPv6路由策略是无意义的值0。后续建议完全使用字符串唯一ID `RouteItemId`操作路由策略。
     */
    public $RouteId;

    /**
     * @var string 路由策略描述。
     */
    public $RouteDescription;

    /**
     * @var boolean 是否启用
     */
    public $Enabled;

    /**
     * @var string 路由类型，目前我们支持的类型有：
USER：用户路由；
NETD：网络探测路由，创建网络探测实例时，系统默认下发，不可编辑与删除；
CCN：云联网路由，系统默认下发，不可编辑与删除。
用户只能添加和操作 USER 类型的路由。
     */
    public $RouteType;

    /**
     * @var string 路由表实例ID，例如：rtb-azd4dt1c。
     */
    public $RouteTableId;

    /**
     * @var string 目的IPv6网段，取值不能在私有网络网段内，例如：2402:4e00:1000:810b::/64。
     */
    public $DestinationIpv6CidrBlock;

    /**
     * @var string 路由唯一策略ID。
     */
    public $RouteItemId;

    /**
     * @var boolean 路由策略是否发布到云联网。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublishedToVbc;

    /**
     * @var string 路由策略创建时间
     */
    public $CreatedTime;

    /**
     * @param string $DestinationCidrBlock 目的网段，取值不能在私有网络网段内，例如：112.20.51.0/24。
     * @param string $GatewayType 下一跳类型，目前我们支持的类型有：
CVM：公网网关类型的云服务器；
VPN：VPN网关；
DIRECTCONNECT：专线网关；
PEERCONNECTION：对等连接；
HAVIP：高可用虚拟IP；
NAT：NAT网关; 
NORMAL_CVM：普通云服务器；
EIP：云服务器的公网IP；
LOCAL_GATEWAY：本地网关。
     * @param string $GatewayId 下一跳地址，这里只需要指定不同下一跳类型的网关ID，系统会自动匹配到下一跳地址。
特别注意：当 GatewayType 为 EIP 时，GatewayId 固定值 '0'
     * @param integer $RouteId 路由策略ID。IPv4路由策略ID是有意义的值，IPv6路由策略是无意义的值0。后续建议完全使用字符串唯一ID `RouteItemId`操作路由策略。
     * @param string $RouteDescription 路由策略描述。
     * @param boolean $Enabled 是否启用
     * @param string $RouteType 路由类型，目前我们支持的类型有：
USER：用户路由；
NETD：网络探测路由，创建网络探测实例时，系统默认下发，不可编辑与删除；
CCN：云联网路由，系统默认下发，不可编辑与删除。
用户只能添加和操作 USER 类型的路由。
     * @param string $RouteTableId 路由表实例ID，例如：rtb-azd4dt1c。
     * @param string $DestinationIpv6CidrBlock 目的IPv6网段，取值不能在私有网络网段内，例如：2402:4e00:1000:810b::/64。
     * @param string $RouteItemId 路由唯一策略ID。
     * @param boolean $PublishedToVbc 路由策略是否发布到云联网。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 路由策略创建时间
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
        if (array_key_exists("DestinationCidrBlock",$param) and $param["DestinationCidrBlock"] !== null) {
            $this->DestinationCidrBlock = $param["DestinationCidrBlock"];
        }

        if (array_key_exists("GatewayType",$param) and $param["GatewayType"] !== null) {
            $this->GatewayType = $param["GatewayType"];
        }

        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
            $this->RouteId = $param["RouteId"];
        }

        if (array_key_exists("RouteDescription",$param) and $param["RouteDescription"] !== null) {
            $this->RouteDescription = $param["RouteDescription"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("RouteType",$param) and $param["RouteType"] !== null) {
            $this->RouteType = $param["RouteType"];
        }

        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }

        if (array_key_exists("DestinationIpv6CidrBlock",$param) and $param["DestinationIpv6CidrBlock"] !== null) {
            $this->DestinationIpv6CidrBlock = $param["DestinationIpv6CidrBlock"];
        }

        if (array_key_exists("RouteItemId",$param) and $param["RouteItemId"] !== null) {
            $this->RouteItemId = $param["RouteItemId"];
        }

        if (array_key_exists("PublishedToVbc",$param) and $param["PublishedToVbc"] !== null) {
            $this->PublishedToVbc = $param["PublishedToVbc"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
