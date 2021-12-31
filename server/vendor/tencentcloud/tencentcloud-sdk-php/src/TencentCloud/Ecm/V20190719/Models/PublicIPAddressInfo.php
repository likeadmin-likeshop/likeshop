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
 * 实例的公网ip相关信息。
 *
 * @method string getChargeMode() 获取计费模式。
 * @method void setChargeMode(string $ChargeMode) 设置计费模式。
 * @method string getPublicIPAddress() 获取实例的公网ip。
 * @method void setPublicIPAddress(string $PublicIPAddress) 设置实例的公网ip。
 * @method ISP getISP() 获取实例的公网ip所属的运营商。
 * @method void setISP(ISP $ISP) 设置实例的公网ip所属的运营商。
 * @method integer getMaxBandwidthOut() 获取实例的最大出带宽上限，单位为Mbps。
 * @method void setMaxBandwidthOut(integer $MaxBandwidthOut) 设置实例的最大出带宽上限，单位为Mbps。
 * @method integer getMaxBandwidthIn() 获取实例的最大入带宽上限，单位为Mbps。
 * @method void setMaxBandwidthIn(integer $MaxBandwidthIn) 设置实例的最大入带宽上限，单位为Mbps。
 */
class PublicIPAddressInfo extends AbstractModel
{
    /**
     * @var string 计费模式。
     */
    public $ChargeMode;

    /**
     * @var string 实例的公网ip。
     */
    public $PublicIPAddress;

    /**
     * @var ISP 实例的公网ip所属的运营商。
     */
    public $ISP;

    /**
     * @var integer 实例的最大出带宽上限，单位为Mbps。
     */
    public $MaxBandwidthOut;

    /**
     * @var integer 实例的最大入带宽上限，单位为Mbps。
     */
    public $MaxBandwidthIn;

    /**
     * @param string $ChargeMode 计费模式。
     * @param string $PublicIPAddress 实例的公网ip。
     * @param ISP $ISP 实例的公网ip所属的运营商。
     * @param integer $MaxBandwidthOut 实例的最大出带宽上限，单位为Mbps。
     * @param integer $MaxBandwidthIn 实例的最大入带宽上限，单位为Mbps。
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
        if (array_key_exists("ChargeMode",$param) and $param["ChargeMode"] !== null) {
            $this->ChargeMode = $param["ChargeMode"];
        }

        if (array_key_exists("PublicIPAddress",$param) and $param["PublicIPAddress"] !== null) {
            $this->PublicIPAddress = $param["PublicIPAddress"];
        }

        if (array_key_exists("ISP",$param) and $param["ISP"] !== null) {
            $this->ISP = new ISP();
            $this->ISP->deserialize($param["ISP"]);
        }

        if (array_key_exists("MaxBandwidthOut",$param) and $param["MaxBandwidthOut"] !== null) {
            $this->MaxBandwidthOut = $param["MaxBandwidthOut"];
        }

        if (array_key_exists("MaxBandwidthIn",$param) and $param["MaxBandwidthIn"] !== null) {
            $this->MaxBandwidthIn = $param["MaxBandwidthIn"];
        }
    }
}
