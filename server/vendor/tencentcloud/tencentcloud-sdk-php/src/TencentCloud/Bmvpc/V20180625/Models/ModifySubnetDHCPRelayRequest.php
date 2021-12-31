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
namespace TencentCloud\Bmvpc\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySubnetDHCPRelay请求参数结构体
 *
 * @method string getVpcId() 获取私有网络ID
 * @method void setVpcId(string $VpcId) 设置私有网络ID
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method boolean getEnableDHCP() 获取是否开启DHCP Relay
 * @method void setEnableDHCP(boolean $EnableDHCP) 设置是否开启DHCP Relay
 * @method array getServerIps() 获取DHCP服务器IP
 * @method void setServerIps(array $ServerIps) 设置DHCP服务器IP
 * @method integer getReservedIpCount() 获取预留IP个数
 * @method void setReservedIpCount(integer $ReservedIpCount) 设置预留IP个数
 */
class ModifySubnetDHCPRelayRequest extends AbstractModel
{
    /**
     * @var string 私有网络ID
     */
    public $VpcId;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var boolean 是否开启DHCP Relay
     */
    public $EnableDHCP;

    /**
     * @var array DHCP服务器IP
     */
    public $ServerIps;

    /**
     * @var integer 预留IP个数
     */
    public $ReservedIpCount;

    /**
     * @param string $VpcId 私有网络ID
     * @param string $SubnetId 子网ID
     * @param boolean $EnableDHCP 是否开启DHCP Relay
     * @param array $ServerIps DHCP服务器IP
     * @param integer $ReservedIpCount 预留IP个数
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("EnableDHCP",$param) and $param["EnableDHCP"] !== null) {
            $this->EnableDHCP = $param["EnableDHCP"];
        }

        if (array_key_exists("ServerIps",$param) and $param["ServerIps"] !== null) {
            $this->ServerIps = $param["ServerIps"];
        }

        if (array_key_exists("ReservedIpCount",$param) and $param["ReservedIpCount"] !== null) {
            $this->ReservedIpCount = $param["ReservedIpCount"];
        }
    }
}
