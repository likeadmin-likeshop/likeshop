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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDirectConnectTunnel请求参数结构体
 *
 * @method string getDirectConnectId() 获取专线 ID，例如：dc-kd7d06of
 * @method void setDirectConnectId(string $DirectConnectId) 设置专线 ID，例如：dc-kd7d06of
 * @method string getDirectConnectTunnelName() 获取专用通道名称
 * @method void setDirectConnectTunnelName(string $DirectConnectTunnelName) 设置专用通道名称
 * @method string getDirectConnectOwnerAccount() 获取物理专线 owner，缺省为当前客户（物理专线 owner）
共享专线时这里需要填写共享专线的开发商账号 ID
 * @method void setDirectConnectOwnerAccount(string $DirectConnectOwnerAccount) 设置物理专线 owner，缺省为当前客户（物理专线 owner）
共享专线时这里需要填写共享专线的开发商账号 ID
 * @method string getNetworkType() 获取网络类型，分别为VPC、BMVPC，CCN，默认是VPC
VPC：私有网络
BMVPC：黑石网络
CCN：云联网
 * @method void setNetworkType(string $NetworkType) 设置网络类型，分别为VPC、BMVPC，CCN，默认是VPC
VPC：私有网络
BMVPC：黑石网络
CCN：云联网
 * @method string getNetworkRegion() 获取网络地域
 * @method void setNetworkRegion(string $NetworkRegion) 设置网络地域
 * @method string getVpcId() 获取私有网络统一 ID 或者黑石网络统一 ID
 * @method void setVpcId(string $VpcId) 设置私有网络统一 ID 或者黑石网络统一 ID
 * @method string getDirectConnectGatewayId() 获取专线网关 ID，例如 dcg-d545ddf
 * @method void setDirectConnectGatewayId(string $DirectConnectGatewayId) 设置专线网关 ID，例如 dcg-d545ddf
 * @method integer getBandwidth() 获取专线带宽，单位：Mbps
默认是物理专线带宽值
 * @method void setBandwidth(integer $Bandwidth) 设置专线带宽，单位：Mbps
默认是物理专线带宽值
 * @method string getRouteType() 获取BGP ：BGP路由
STATIC：静态
默认为 BGP 路由
 * @method void setRouteType(string $RouteType) 设置BGP ：BGP路由
STATIC：静态
默认为 BGP 路由
 * @method BgpPeer getBgpPeer() 获取BgpPeer，用户侧bgp信息，包括Asn和AuthKey
 * @method void setBgpPeer(BgpPeer $BgpPeer) 设置BgpPeer，用户侧bgp信息，包括Asn和AuthKey
 * @method array getRouteFilterPrefixes() 获取静态路由，用户IDC的网段地址
 * @method void setRouteFilterPrefixes(array $RouteFilterPrefixes) 设置静态路由，用户IDC的网段地址
 * @method integer getVlan() 获取vlan，范围：0 ~ 3000
0：不开启子接口
默认值是非0
 * @method void setVlan(integer $Vlan) 设置vlan，范围：0 ~ 3000
0：不开启子接口
默认值是非0
 * @method string getTencentAddress() 获取TencentAddress，腾讯侧互联 IP
 * @method void setTencentAddress(string $TencentAddress) 设置TencentAddress，腾讯侧互联 IP
 * @method string getCustomerAddress() 获取CustomerAddress，用户侧互联 IP
 * @method void setCustomerAddress(string $CustomerAddress) 设置CustomerAddress，用户侧互联 IP
 * @method string getTencentBackupAddress() 获取TencentBackupAddress，腾讯侧备用互联 IP
 * @method void setTencentBackupAddress(string $TencentBackupAddress) 设置TencentBackupAddress，腾讯侧备用互联 IP
 * @method string getCloudAttachId() 获取高速上云服务ID
 * @method void setCloudAttachId(string $CloudAttachId) 设置高速上云服务ID
 */
class CreateDirectConnectTunnelRequest extends AbstractModel
{
    /**
     * @var string 专线 ID，例如：dc-kd7d06of
     */
    public $DirectConnectId;

    /**
     * @var string 专用通道名称
     */
    public $DirectConnectTunnelName;

    /**
     * @var string 物理专线 owner，缺省为当前客户（物理专线 owner）
共享专线时这里需要填写共享专线的开发商账号 ID
     */
    public $DirectConnectOwnerAccount;

    /**
     * @var string 网络类型，分别为VPC、BMVPC，CCN，默认是VPC
VPC：私有网络
BMVPC：黑石网络
CCN：云联网
     */
    public $NetworkType;

    /**
     * @var string 网络地域
     */
    public $NetworkRegion;

    /**
     * @var string 私有网络统一 ID 或者黑石网络统一 ID
     */
    public $VpcId;

    /**
     * @var string 专线网关 ID，例如 dcg-d545ddf
     */
    public $DirectConnectGatewayId;

    /**
     * @var integer 专线带宽，单位：Mbps
默认是物理专线带宽值
     */
    public $Bandwidth;

    /**
     * @var string BGP ：BGP路由
STATIC：静态
默认为 BGP 路由
     */
    public $RouteType;

    /**
     * @var BgpPeer BgpPeer，用户侧bgp信息，包括Asn和AuthKey
     */
    public $BgpPeer;

    /**
     * @var array 静态路由，用户IDC的网段地址
     */
    public $RouteFilterPrefixes;

    /**
     * @var integer vlan，范围：0 ~ 3000
0：不开启子接口
默认值是非0
     */
    public $Vlan;

    /**
     * @var string TencentAddress，腾讯侧互联 IP
     */
    public $TencentAddress;

    /**
     * @var string CustomerAddress，用户侧互联 IP
     */
    public $CustomerAddress;

    /**
     * @var string TencentBackupAddress，腾讯侧备用互联 IP
     */
    public $TencentBackupAddress;

    /**
     * @var string 高速上云服务ID
     */
    public $CloudAttachId;

    /**
     * @param string $DirectConnectId 专线 ID，例如：dc-kd7d06of
     * @param string $DirectConnectTunnelName 专用通道名称
     * @param string $DirectConnectOwnerAccount 物理专线 owner，缺省为当前客户（物理专线 owner）
共享专线时这里需要填写共享专线的开发商账号 ID
     * @param string $NetworkType 网络类型，分别为VPC、BMVPC，CCN，默认是VPC
VPC：私有网络
BMVPC：黑石网络
CCN：云联网
     * @param string $NetworkRegion 网络地域
     * @param string $VpcId 私有网络统一 ID 或者黑石网络统一 ID
     * @param string $DirectConnectGatewayId 专线网关 ID，例如 dcg-d545ddf
     * @param integer $Bandwidth 专线带宽，单位：Mbps
默认是物理专线带宽值
     * @param string $RouteType BGP ：BGP路由
STATIC：静态
默认为 BGP 路由
     * @param BgpPeer $BgpPeer BgpPeer，用户侧bgp信息，包括Asn和AuthKey
     * @param array $RouteFilterPrefixes 静态路由，用户IDC的网段地址
     * @param integer $Vlan vlan，范围：0 ~ 3000
0：不开启子接口
默认值是非0
     * @param string $TencentAddress TencentAddress，腾讯侧互联 IP
     * @param string $CustomerAddress CustomerAddress，用户侧互联 IP
     * @param string $TencentBackupAddress TencentBackupAddress，腾讯侧备用互联 IP
     * @param string $CloudAttachId 高速上云服务ID
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
        if (array_key_exists("DirectConnectId",$param) and $param["DirectConnectId"] !== null) {
            $this->DirectConnectId = $param["DirectConnectId"];
        }

        if (array_key_exists("DirectConnectTunnelName",$param) and $param["DirectConnectTunnelName"] !== null) {
            $this->DirectConnectTunnelName = $param["DirectConnectTunnelName"];
        }

        if (array_key_exists("DirectConnectOwnerAccount",$param) and $param["DirectConnectOwnerAccount"] !== null) {
            $this->DirectConnectOwnerAccount = $param["DirectConnectOwnerAccount"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("NetworkRegion",$param) and $param["NetworkRegion"] !== null) {
            $this->NetworkRegion = $param["NetworkRegion"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("DirectConnectGatewayId",$param) and $param["DirectConnectGatewayId"] !== null) {
            $this->DirectConnectGatewayId = $param["DirectConnectGatewayId"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("RouteType",$param) and $param["RouteType"] !== null) {
            $this->RouteType = $param["RouteType"];
        }

        if (array_key_exists("BgpPeer",$param) and $param["BgpPeer"] !== null) {
            $this->BgpPeer = new BgpPeer();
            $this->BgpPeer->deserialize($param["BgpPeer"]);
        }

        if (array_key_exists("RouteFilterPrefixes",$param) and $param["RouteFilterPrefixes"] !== null) {
            $this->RouteFilterPrefixes = [];
            foreach ($param["RouteFilterPrefixes"] as $key => $value){
                $obj = new RouteFilterPrefix();
                $obj->deserialize($value);
                array_push($this->RouteFilterPrefixes, $obj);
            }
        }

        if (array_key_exists("Vlan",$param) and $param["Vlan"] !== null) {
            $this->Vlan = $param["Vlan"];
        }

        if (array_key_exists("TencentAddress",$param) and $param["TencentAddress"] !== null) {
            $this->TencentAddress = $param["TencentAddress"];
        }

        if (array_key_exists("CustomerAddress",$param) and $param["CustomerAddress"] !== null) {
            $this->CustomerAddress = $param["CustomerAddress"];
        }

        if (array_key_exists("TencentBackupAddress",$param) and $param["TencentBackupAddress"] !== null) {
            $this->TencentBackupAddress = $param["TencentBackupAddress"];
        }

        if (array_key_exists("CloudAttachId",$param) and $param["CloudAttachId"] !== null) {
            $this->CloudAttachId = $param["CloudAttachId"];
        }
    }
}
