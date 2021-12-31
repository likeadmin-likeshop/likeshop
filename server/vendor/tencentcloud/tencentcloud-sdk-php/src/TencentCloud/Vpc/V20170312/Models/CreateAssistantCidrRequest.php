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
 * CreateAssistantCidr请求参数结构体
 *
 * @method string getVpcId() 获取`VPC`实例`ID`。形如：`vpc-6v2ht8q5`
 * @method void setVpcId(string $VpcId) 设置`VPC`实例`ID`。形如：`vpc-6v2ht8q5`
 * @method array getCidrBlocks() 获取CIDR数组，格式如["10.0.0.0/16", "172.16.0.0/16"]
 * @method void setCidrBlocks(array $CidrBlocks) 设置CIDR数组，格式如["10.0.0.0/16", "172.16.0.0/16"]
 */
class CreateAssistantCidrRequest extends AbstractModel
{
    /**
     * @var string `VPC`实例`ID`。形如：`vpc-6v2ht8q5`
     */
    public $VpcId;

    /**
     * @var array CIDR数组，格式如["10.0.0.0/16", "172.16.0.0/16"]
     */
    public $CidrBlocks;

    /**
     * @param string $VpcId `VPC`实例`ID`。形如：`vpc-6v2ht8q5`
     * @param array $CidrBlocks CIDR数组，格式如["10.0.0.0/16", "172.16.0.0/16"]
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

        if (array_key_exists("CidrBlocks",$param) and $param["CidrBlocks"] !== null) {
            $this->CidrBlocks = $param["CidrBlocks"];
        }
    }
}
