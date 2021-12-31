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
 * AssociateDirectConnectGatewayNatGateway请求参数结构体
 *
 * @method string getVpcId() 获取专线网关ID。
 * @method void setVpcId(string $VpcId) 设置专线网关ID。
 * @method string getNatGatewayId() 获取NAT网关ID。
 * @method void setNatGatewayId(string $NatGatewayId) 设置NAT网关ID。
 * @method string getDirectConnectGatewayId() 获取VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
 * @method void setDirectConnectGatewayId(string $DirectConnectGatewayId) 设置VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
 */
class AssociateDirectConnectGatewayNatGatewayRequest extends AbstractModel
{
    /**
     * @var string 专线网关ID。
     */
    public $VpcId;

    /**
     * @var string NAT网关ID。
     */
    public $NatGatewayId;

    /**
     * @var string VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
     */
    public $DirectConnectGatewayId;

    /**
     * @param string $VpcId 专线网关ID。
     * @param string $NatGatewayId NAT网关ID。
     * @param string $DirectConnectGatewayId VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
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

        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("DirectConnectGatewayId",$param) and $param["DirectConnectGatewayId"] !== null) {
            $this->DirectConnectGatewayId = $param["DirectConnectGatewayId"];
        }
    }
}
