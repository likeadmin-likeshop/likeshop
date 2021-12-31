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
 * NAT子网信息
 *
 * @method string getName() 获取子网名称
 * @method void setName(string $Name) 设置子网名称
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method integer getSubnetNatType() 获取NAT子网类型，其中0表示绑定部分IP的NAT子网，1表示绑定全部IP的NAT子网，2表示绑定网关方式的NAT子网
 * @method void setSubnetNatType(integer $SubnetNatType) 设置NAT子网类型，其中0表示绑定部分IP的NAT子网，1表示绑定全部IP的NAT子网，2表示绑定网关方式的NAT子网
 * @method string getCidrBlock() 获取子网网段
 * @method void setCidrBlock(string $CidrBlock) 设置子网网段
 */
class NatSubnetInfo extends AbstractModel
{
    /**
     * @var string 子网名称
     */
    public $Name;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var integer NAT子网类型，其中0表示绑定部分IP的NAT子网，1表示绑定全部IP的NAT子网，2表示绑定网关方式的NAT子网
     */
    public $SubnetNatType;

    /**
     * @var string 子网网段
     */
    public $CidrBlock;

    /**
     * @param string $Name 子网名称
     * @param string $SubnetId 子网ID
     * @param integer $SubnetNatType NAT子网类型，其中0表示绑定部分IP的NAT子网，1表示绑定全部IP的NAT子网，2表示绑定网关方式的NAT子网
     * @param string $CidrBlock 子网网段
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetNatType",$param) and $param["SubnetNatType"] !== null) {
            $this->SubnetNatType = $param["SubnetNatType"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }
    }
}
