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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 托管设备带外信息
 *
 * @method string getInstanceId() 获取物理机ID
 * @method void setInstanceId(string $InstanceId) 设置物理机ID
 * @method string getOutBandIp() 获取带外IP
 * @method void setOutBandIp(string $OutBandIp) 设置带外IP
 * @method string getVpnIp() 获取VPN的IP
 * @method void setVpnIp(string $VpnIp) 设置VPN的IP
 * @method integer getVpnPort() 获取VPN的端口
 * @method void setVpnPort(integer $VpnPort) 设置VPN的端口
 */
class HostedDeviceOutBandInfo extends AbstractModel
{
    /**
     * @var string 物理机ID
     */
    public $InstanceId;

    /**
     * @var string 带外IP
     */
    public $OutBandIp;

    /**
     * @var string VPN的IP
     */
    public $VpnIp;

    /**
     * @var integer VPN的端口
     */
    public $VpnPort;

    /**
     * @param string $InstanceId 物理机ID
     * @param string $OutBandIp 带外IP
     * @param string $VpnIp VPN的IP
     * @param integer $VpnPort VPN的端口
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("OutBandIp",$param) and $param["OutBandIp"] !== null) {
            $this->OutBandIp = $param["OutBandIp"];
        }

        if (array_key_exists("VpnIp",$param) and $param["VpnIp"] !== null) {
            $this->VpnIp = $param["VpnIp"];
        }

        if (array_key_exists("VpnPort",$param) and $param["VpnPort"] !== null) {
            $this->VpnPort = $param["VpnPort"];
        }
    }
}
