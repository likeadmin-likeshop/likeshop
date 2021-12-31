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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DisassociateSecurityGroups请求参数结构体
 *
 * @method string getProduct() 获取数据库引擎名称：mariadb,cdb,cynosdb,dcdb,redis,mongodb 等。
 * @method void setProduct(string $Product) 设置数据库引擎名称：mariadb,cdb,cynosdb,dcdb,redis,mongodb 等。
 * @method string getSecurityGroupId() 获取安全组Id。
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置安全组Id。
 * @method array getInstanceIds() 获取实例ID列表，一个或者多个实例Id组成的数组。
 * @method void setInstanceIds(array $InstanceIds) 设置实例ID列表，一个或者多个实例Id组成的数组。
 */
class DisassociateSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string 数据库引擎名称：mariadb,cdb,cynosdb,dcdb,redis,mongodb 等。
     */
    public $Product;

    /**
     * @var string 安全组Id。
     */
    public $SecurityGroupId;

    /**
     * @var array 实例ID列表，一个或者多个实例Id组成的数组。
     */
    public $InstanceIds;

    /**
     * @param string $Product 数据库引擎名称：mariadb,cdb,cynosdb,dcdb,redis,mongodb 等。
     * @param string $SecurityGroupId 安全组Id。
     * @param array $InstanceIds 实例ID列表，一个或者多个实例Id组成的数组。
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
