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
 * DescribeSubnetAvailableIps请求参数结构体
 *
 * @method string getSubnetId() 获取私有网络子网ID
 * @method void setSubnetId(string $SubnetId) 设置私有网络子网ID
 * @method string getCidr() 获取CIDR前缀，例如10.0.1
 * @method void setCidr(string $Cidr) 设置CIDR前缀，例如10.0.1
 */
class DescribeSubnetAvailableIpsRequest extends AbstractModel
{
    /**
     * @var string 私有网络子网ID
     */
    public $SubnetId;

    /**
     * @var string CIDR前缀，例如10.0.1
     */
    public $Cidr;

    /**
     * @param string $SubnetId 私有网络子网ID
     * @param string $Cidr CIDR前缀，例如10.0.1
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
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Cidr",$param) and $param["Cidr"] !== null) {
            $this->Cidr = $param["Cidr"];
        }
    }
}
