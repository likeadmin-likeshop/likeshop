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
 * ModifyDirectConnectTunnelAttribute请求参数结构体
 *
 * @method string getDirectConnectTunnelId() 获取专用通道ID
 * @method void setDirectConnectTunnelId(string $DirectConnectTunnelId) 设置专用通道ID
 * @method string getDirectConnectTunnelName() 获取专用通道名称
 * @method void setDirectConnectTunnelName(string $DirectConnectTunnelName) 设置专用通道名称
 * @method BgpPeer getBgpPeer() 获取用户侧BGP，包括Asn，AuthKey
 * @method void setBgpPeer(BgpPeer $BgpPeer) 设置用户侧BGP，包括Asn，AuthKey
 * @method array getRouteFilterPrefixes() 获取用户侧网段地址
 * @method void setRouteFilterPrefixes(array $RouteFilterPrefixes) 设置用户侧网段地址
 * @method string getTencentAddress() 获取腾讯侧互联IP
 * @method void setTencentAddress(string $TencentAddress) 设置腾讯侧互联IP
 * @method string getCustomerAddress() 获取用户侧互联IP
 * @method void setCustomerAddress(string $CustomerAddress) 设置用户侧互联IP
 * @method integer getBandwidth() 获取专用通道带宽值，单位为M。
 * @method void setBandwidth(integer $Bandwidth) 设置专用通道带宽值，单位为M。
 * @method string getTencentBackupAddress() 获取腾讯侧备用互联IP
 * @method void setTencentBackupAddress(string $TencentBackupAddress) 设置腾讯侧备用互联IP
 */
class ModifyDirectConnectTunnelAttributeRequest extends AbstractModel
{
    /**
     * @var string 专用通道ID
     */
    public $DirectConnectTunnelId;

    /**
     * @var string 专用通道名称
     */
    public $DirectConnectTunnelName;

    /**
     * @var BgpPeer 用户侧BGP，包括Asn，AuthKey
     */
    public $BgpPeer;

    /**
     * @var array 用户侧网段地址
     */
    public $RouteFilterPrefixes;

    /**
     * @var string 腾讯侧互联IP
     */
    public $TencentAddress;

    /**
     * @var string 用户侧互联IP
     */
    public $CustomerAddress;

    /**
     * @var integer 专用通道带宽值，单位为M。
     */
    public $Bandwidth;

    /**
     * @var string 腾讯侧备用互联IP
     */
    public $TencentBackupAddress;

    /**
     * @param string $DirectConnectTunnelId 专用通道ID
     * @param string $DirectConnectTunnelName 专用通道名称
     * @param BgpPeer $BgpPeer 用户侧BGP，包括Asn，AuthKey
     * @param array $RouteFilterPrefixes 用户侧网段地址
     * @param string $TencentAddress 腾讯侧互联IP
     * @param string $CustomerAddress 用户侧互联IP
     * @param integer $Bandwidth 专用通道带宽值，单位为M。
     * @param string $TencentBackupAddress 腾讯侧备用互联IP
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

        if (array_key_exists("DirectConnectTunnelName",$param) and $param["DirectConnectTunnelName"] !== null) {
            $this->DirectConnectTunnelName = $param["DirectConnectTunnelName"];
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

        if (array_key_exists("TencentAddress",$param) and $param["TencentAddress"] !== null) {
            $this->TencentAddress = $param["TencentAddress"];
        }

        if (array_key_exists("CustomerAddress",$param) and $param["CustomerAddress"] !== null) {
            $this->CustomerAddress = $param["CustomerAddress"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("TencentBackupAddress",$param) and $param["TencentBackupAddress"] !== null) {
            $this->TencentBackupAddress = $param["TencentBackupAddress"];
        }
    }
}
