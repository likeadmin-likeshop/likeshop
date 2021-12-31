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
 * 创建VPC下默认子网
 *
 * @method string getSubnetName() 获取子网名称
 * @method void setSubnetName(string $SubnetName) 设置子网名称
 * @method string getCidrBlock() 获取子网的CIDR
 * @method void setCidrBlock(string $CidrBlock) 设置子网的CIDR
 * @method string getZone() 获取子网的可用区
 * @method void setZone(string $Zone) 设置子网的可用区
 */
class VpcSubnetCreateInfo extends AbstractModel
{
    /**
     * @var string 子网名称
     */
    public $SubnetName;

    /**
     * @var string 子网的CIDR
     */
    public $CidrBlock;

    /**
     * @var string 子网的可用区
     */
    public $Zone;

    /**
     * @param string $SubnetName 子网名称
     * @param string $CidrBlock 子网的CIDR
     * @param string $Zone 子网的可用区
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
        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
