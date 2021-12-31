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
 * VPC内网IP对象。
 *
 * @method string getPrivateIpAddress() 获取`VPC`内网`IP`。
 * @method void setPrivateIpAddress(string $PrivateIpAddress) 设置`VPC`内网`IP`。
 * @method string getCidrBlock() 获取所属子网`CIDR`。
 * @method void setCidrBlock(string $CidrBlock) 设置所属子网`CIDR`。
 * @method string getPrivateIpAddressType() 获取内网`IP`类型。
 * @method void setPrivateIpAddressType(string $PrivateIpAddressType) 设置内网`IP`类型。
 * @method string getCreatedTime() 获取`IP`申请时间。
 * @method void setCreatedTime(string $CreatedTime) 设置`IP`申请时间。
 */
class VpcPrivateIpAddress extends AbstractModel
{
    /**
     * @var string `VPC`内网`IP`。
     */
    public $PrivateIpAddress;

    /**
     * @var string 所属子网`CIDR`。
     */
    public $CidrBlock;

    /**
     * @var string 内网`IP`类型。
     */
    public $PrivateIpAddressType;

    /**
     * @var string `IP`申请时间。
     */
    public $CreatedTime;

    /**
     * @param string $PrivateIpAddress `VPC`内网`IP`。
     * @param string $CidrBlock 所属子网`CIDR`。
     * @param string $PrivateIpAddressType 内网`IP`类型。
     * @param string $CreatedTime `IP`申请时间。
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
        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            $this->PrivateIpAddress = $param["PrivateIpAddress"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("PrivateIpAddressType",$param) and $param["PrivateIpAddressType"] !== null) {
            $this->PrivateIpAddressType = $param["PrivateIpAddressType"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
