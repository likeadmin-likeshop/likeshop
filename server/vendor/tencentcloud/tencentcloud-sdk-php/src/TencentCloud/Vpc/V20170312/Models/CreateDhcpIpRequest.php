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
 * CreateDhcpIp请求参数结构体
 *
 * @method string getVpcId() 获取私有网络`ID`。
 * @method void setVpcId(string $VpcId) 设置私有网络`ID`。
 * @method string getSubnetId() 获取子网`ID`。
 * @method void setSubnetId(string $SubnetId) 设置子网`ID`。
 * @method string getDhcpIpName() 获取`DhcpIp`名称。
 * @method void setDhcpIpName(string $DhcpIpName) 设置`DhcpIp`名称。
 * @method integer getSecondaryPrivateIpAddressCount() 获取新申请的内网IP地址个数。总数不能超过64个。
 * @method void setSecondaryPrivateIpAddressCount(integer $SecondaryPrivateIpAddressCount) 设置新申请的内网IP地址个数。总数不能超过64个。
 */
class CreateDhcpIpRequest extends AbstractModel
{
    /**
     * @var string 私有网络`ID`。
     */
    public $VpcId;

    /**
     * @var string 子网`ID`。
     */
    public $SubnetId;

    /**
     * @var string `DhcpIp`名称。
     */
    public $DhcpIpName;

    /**
     * @var integer 新申请的内网IP地址个数。总数不能超过64个。
     */
    public $SecondaryPrivateIpAddressCount;

    /**
     * @param string $VpcId 私有网络`ID`。
     * @param string $SubnetId 子网`ID`。
     * @param string $DhcpIpName `DhcpIp`名称。
     * @param integer $SecondaryPrivateIpAddressCount 新申请的内网IP地址个数。总数不能超过64个。
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

        if (array_key_exists("DhcpIpName",$param) and $param["DhcpIpName"] !== null) {
            $this->DhcpIpName = $param["DhcpIpName"];
        }

        if (array_key_exists("SecondaryPrivateIpAddressCount",$param) and $param["SecondaryPrivateIpAddressCount"] !== null) {
            $this->SecondaryPrivateIpAddressCount = $param["SecondaryPrivateIpAddressCount"];
        }
    }
}
