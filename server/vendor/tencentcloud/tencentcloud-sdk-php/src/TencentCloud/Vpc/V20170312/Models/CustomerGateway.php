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
 * 对端网关
 *
 * @method string getCustomerGatewayId() 获取用户网关唯一ID
 * @method void setCustomerGatewayId(string $CustomerGatewayId) 设置用户网关唯一ID
 * @method string getCustomerGatewayName() 获取网关名称
 * @method void setCustomerGatewayName(string $CustomerGatewayName) 设置网关名称
 * @method string getIpAddress() 获取公网地址
 * @method void setIpAddress(string $IpAddress) 设置公网地址
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 */
class CustomerGateway extends AbstractModel
{
    /**
     * @var string 用户网关唯一ID
     */
    public $CustomerGatewayId;

    /**
     * @var string 网关名称
     */
    public $CustomerGatewayName;

    /**
     * @var string 公网地址
     */
    public $IpAddress;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @param string $CustomerGatewayId 用户网关唯一ID
     * @param string $CustomerGatewayName 网关名称
     * @param string $IpAddress 公网地址
     * @param string $CreatedTime 创建时间
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
        if (array_key_exists("CustomerGatewayId",$param) and $param["CustomerGatewayId"] !== null) {
            $this->CustomerGatewayId = $param["CustomerGatewayId"];
        }

        if (array_key_exists("CustomerGatewayName",$param) and $param["CustomerGatewayName"] !== null) {
            $this->CustomerGatewayName = $param["CustomerGatewayName"];
        }

        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            $this->IpAddress = $param["IpAddress"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
