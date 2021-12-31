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
 * ModifyDirectConnectTunnelExtra请求参数结构体
 *
 * @method string getDirectConnectTunnelId() 获取专用通道ID
 * @method void setDirectConnectTunnelId(string $DirectConnectTunnelId) 设置专用通道ID
 * @method integer getVlan() 获取专用通道的Vlan
 * @method void setVlan(integer $Vlan) 设置专用通道的Vlan
 * @method BgpPeer getBgpPeer() 获取用户侧BGP，Asn，AuthKey
 * @method void setBgpPeer(BgpPeer $BgpPeer) 设置用户侧BGP，Asn，AuthKey
 * @method RouteFilterPrefix getRouteFilterPrefixes() 获取用户侧过滤网段地址
 * @method void setRouteFilterPrefixes(RouteFilterPrefix $RouteFilterPrefixes) 设置用户侧过滤网段地址
 * @method string getTencentAddress() 获取腾讯侧互联IP
 * @method void setTencentAddress(string $TencentAddress) 设置腾讯侧互联IP
 * @method string getTencentBackupAddress() 获取腾讯侧备用互联IP
 * @method void setTencentBackupAddress(string $TencentBackupAddress) 设置腾讯侧备用互联IP
 * @method string getCustomerAddress() 获取用户侧互联IP
 * @method void setCustomerAddress(string $CustomerAddress) 设置用户侧互联IP
 * @method integer getBandwidth() 获取专用通道带宽值
 * @method void setBandwidth(integer $Bandwidth) 设置专用通道带宽值
 * @method boolean getEnableBGPCommunity() 获取BGP community开关
 * @method void setEnableBGPCommunity(boolean $EnableBGPCommunity) 设置BGP community开关
 * @method integer getBfdEnable() 获取是否开启BFD
 * @method void setBfdEnable(integer $BfdEnable) 设置是否开启BFD
 * @method integer getNqaEnable() 获取是否开启NQA
 * @method void setNqaEnable(integer $NqaEnable) 设置是否开启NQA
 * @method BFDInfo getBfdInfo() 获取BFD配置信息
 * @method void setBfdInfo(BFDInfo $BfdInfo) 设置BFD配置信息
 * @method NQAInfo getNqaInfo() 获取NQA配置信息
 * @method void setNqaInfo(NQAInfo $NqaInfo) 设置NQA配置信息
 * @method integer getIPv6Enable() 获取0：停用IPv6
1: 启用IPv6
 * @method void setIPv6Enable(integer $IPv6Enable) 设置0：停用IPv6
1: 启用IPv6
 * @method array getCustomerIDCRoutes() 获取去往用户侧的路由信息
 * @method void setCustomerIDCRoutes(array $CustomerIDCRoutes) 设置去往用户侧的路由信息
 * @method integer getJumboEnable() 获取是否开启巨帧
1：开启
0：不开启
 * @method void setJumboEnable(integer $JumboEnable) 设置是否开启巨帧
1：开启
0：不开启
 */
class ModifyDirectConnectTunnelExtraRequest extends AbstractModel
{
    /**
     * @var string 专用通道ID
     */
    public $DirectConnectTunnelId;

    /**
     * @var integer 专用通道的Vlan
     */
    public $Vlan;

    /**
     * @var BgpPeer 用户侧BGP，Asn，AuthKey
     */
    public $BgpPeer;

    /**
     * @var RouteFilterPrefix 用户侧过滤网段地址
     */
    public $RouteFilterPrefixes;

    /**
     * @var string 腾讯侧互联IP
     */
    public $TencentAddress;

    /**
     * @var string 腾讯侧备用互联IP
     */
    public $TencentBackupAddress;

    /**
     * @var string 用户侧互联IP
     */
    public $CustomerAddress;

    /**
     * @var integer 专用通道带宽值
     */
    public $Bandwidth;

    /**
     * @var boolean BGP community开关
     */
    public $EnableBGPCommunity;

    /**
     * @var integer 是否开启BFD
     */
    public $BfdEnable;

    /**
     * @var integer 是否开启NQA
     */
    public $NqaEnable;

    /**
     * @var BFDInfo BFD配置信息
     */
    public $BfdInfo;

    /**
     * @var NQAInfo NQA配置信息
     */
    public $NqaInfo;

    /**
     * @var integer 0：停用IPv6
1: 启用IPv6
     */
    public $IPv6Enable;

    /**
     * @var array 去往用户侧的路由信息
     */
    public $CustomerIDCRoutes;

    /**
     * @var integer 是否开启巨帧
1：开启
0：不开启
     */
    public $JumboEnable;

    /**
     * @param string $DirectConnectTunnelId 专用通道ID
     * @param integer $Vlan 专用通道的Vlan
     * @param BgpPeer $BgpPeer 用户侧BGP，Asn，AuthKey
     * @param RouteFilterPrefix $RouteFilterPrefixes 用户侧过滤网段地址
     * @param string $TencentAddress 腾讯侧互联IP
     * @param string $TencentBackupAddress 腾讯侧备用互联IP
     * @param string $CustomerAddress 用户侧互联IP
     * @param integer $Bandwidth 专用通道带宽值
     * @param boolean $EnableBGPCommunity BGP community开关
     * @param integer $BfdEnable 是否开启BFD
     * @param integer $NqaEnable 是否开启NQA
     * @param BFDInfo $BfdInfo BFD配置信息
     * @param NQAInfo $NqaInfo NQA配置信息
     * @param integer $IPv6Enable 0：停用IPv6
1: 启用IPv6
     * @param array $CustomerIDCRoutes 去往用户侧的路由信息
     * @param integer $JumboEnable 是否开启巨帧
1：开启
0：不开启
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
        if (array_key_exists("DirectConnectTunnelId",$param) and $param["DirectConnectTunnelId"] !== null) {
            $this->DirectConnectTunnelId = $param["DirectConnectTunnelId"];
        }

        if (array_key_exists("Vlan",$param) and $param["Vlan"] !== null) {
            $this->Vlan = $param["Vlan"];
        }

        if (array_key_exists("BgpPeer",$param) and $param["BgpPeer"] !== null) {
            $this->BgpPeer = new BgpPeer();
            $this->BgpPeer->deserialize($param["BgpPeer"]);
        }

        if (array_key_exists("RouteFilterPrefixes",$param) and $param["RouteFilterPrefixes"] !== null) {
            $this->RouteFilterPrefixes = new RouteFilterPrefix();
            $this->RouteFilterPrefixes->deserialize($param["RouteFilterPrefixes"]);
        }

        if (array_key_exists("TencentAddress",$param) and $param["TencentAddress"] !== null) {
            $this->TencentAddress = $param["TencentAddress"];
        }

        if (array_key_exists("TencentBackupAddress",$param) and $param["TencentBackupAddress"] !== null) {
            $this->TencentBackupAddress = $param["TencentBackupAddress"];
        }

        if (array_key_exists("CustomerAddress",$param) and $param["CustomerAddress"] !== null) {
            $this->CustomerAddress = $param["CustomerAddress"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("EnableBGPCommunity",$param) and $param["EnableBGPCommunity"] !== null) {
            $this->EnableBGPCommunity = $param["EnableBGPCommunity"];
        }

        if (array_key_exists("BfdEnable",$param) and $param["BfdEnable"] !== null) {
            $this->BfdEnable = $param["BfdEnable"];
        }

        if (array_key_exists("NqaEnable",$param) and $param["NqaEnable"] !== null) {
            $this->NqaEnable = $param["NqaEnable"];
        }

        if (array_key_exists("BfdInfo",$param) and $param["BfdInfo"] !== null) {
            $this->BfdInfo = new BFDInfo();
            $this->BfdInfo->deserialize($param["BfdInfo"]);
        }

        if (array_key_exists("NqaInfo",$param) and $param["NqaInfo"] !== null) {
            $this->NqaInfo = new NQAInfo();
            $this->NqaInfo->deserialize($param["NqaInfo"]);
        }

        if (array_key_exists("IPv6Enable",$param) and $param["IPv6Enable"] !== null) {
            $this->IPv6Enable = $param["IPv6Enable"];
        }

        if (array_key_exists("CustomerIDCRoutes",$param) and $param["CustomerIDCRoutes"] !== null) {
            $this->CustomerIDCRoutes = [];
            foreach ($param["CustomerIDCRoutes"] as $key => $value){
                $obj = new RouteFilterPrefix();
                $obj->deserialize($value);
                array_push($this->CustomerIDCRoutes, $obj);
            }
        }

        if (array_key_exists("JumboEnable",$param) and $param["JumboEnable"] !== null) {
            $this->JumboEnable = $param["JumboEnable"];
        }
    }
}
