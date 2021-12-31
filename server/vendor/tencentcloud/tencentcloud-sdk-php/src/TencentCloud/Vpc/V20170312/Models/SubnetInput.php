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
 * 子网对象
 *
 * @method string getCidrBlock() 获取子网的`CIDR`。
 * @method void setCidrBlock(string $CidrBlock) 设置子网的`CIDR`。
 * @method string getSubnetName() 获取子网名称。
 * @method void setSubnetName(string $SubnetName) 设置子网名称。
 * @method string getZone() 获取可用区。形如：`ap-guangzhou-2`。
 * @method void setZone(string $Zone) 设置可用区。形如：`ap-guangzhou-2`。
 * @method string getRouteTableId() 获取指定关联路由表，形如：`rtb-3ryrwzuu`。
 * @method void setRouteTableId(string $RouteTableId) 设置指定关联路由表，形如：`rtb-3ryrwzuu`。
 */
class SubnetInput extends AbstractModel
{
    /**
     * @var string 子网的`CIDR`。
     */
    public $CidrBlock;

    /**
     * @var string 子网名称。
     */
    public $SubnetName;

    /**
     * @var string 可用区。形如：`ap-guangzhou-2`。
     */
    public $Zone;

    /**
     * @var string 指定关联路由表，形如：`rtb-3ryrwzuu`。
     */
    public $RouteTableId;

    /**
     * @param string $CidrBlock 子网的`CIDR`。
     * @param string $SubnetName 子网名称。
     * @param string $Zone 可用区。形如：`ap-guangzhou-2`。
     * @param string $RouteTableId 指定关联路由表，形如：`rtb-3ryrwzuu`。
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
        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }
    }
}
