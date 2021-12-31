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
namespace TencentCloud\Bmeip\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UnbindVpcIp请求参数结构体
 *
 * @method string getEipId() 获取Eip实例ID
 * @method void setEipId(string $EipId) 设置Eip实例ID
 * @method string getVpcId() 获取EIP归属VpcId，例如vpc-k7j1t2x1
 * @method void setVpcId(string $VpcId) 设置EIP归属VpcId，例如vpc-k7j1t2x1
 * @method string getVpcIp() 获取绑定的VPC内IP地址
 * @method void setVpcIp(string $VpcIp) 设置绑定的VPC内IP地址
 */
class UnbindVpcIpRequest extends AbstractModel
{
    /**
     * @var string Eip实例ID
     */
    public $EipId;

    /**
     * @var string EIP归属VpcId，例如vpc-k7j1t2x1
     */
    public $VpcId;

    /**
     * @var string 绑定的VPC内IP地址
     */
    public $VpcIp;

    /**
     * @param string $EipId Eip实例ID
     * @param string $VpcId EIP归属VpcId，例如vpc-k7j1t2x1
     * @param string $VpcIp 绑定的VPC内IP地址
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
        if (array_key_exists("EipId",$param) and $param["EipId"] !== null) {
            $this->EipId = $param["EipId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcIp",$param) and $param["VpcIp"] !== null) {
            $this->VpcIp = $param["VpcIp"];
        }
    }
}
