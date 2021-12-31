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
 * VPN网关对象。
 *
 * @method string getVpnGatewayId() 获取网关实例ID。
 * @method void setVpnGatewayId(string $VpnGatewayId) 设置网关实例ID。
 * @method string getVpcId() 获取VPC实例ID。
 * @method void setVpcId(string $VpcId) 设置VPC实例ID。
 * @method string getVpnGatewayName() 获取网关实例名称。
 * @method void setVpnGatewayName(string $VpnGatewayName) 设置网关实例名称。
 * @method string getVpcCidrBlock() 获取VPC网段
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置VPC网段
 * @method string getVpcName() 获取VPC名称
 * @method void setVpcName(string $VpcName) 设置VPC名称
 * @method integer getInternetMaxBandwidthOut() 获取网关出带宽。
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置网关出带宽。
 * @method string getState() 获取网关实例状态
 * @method void setState(string $State) 设置网关实例状态
 * @method string getPublicIpAddress() 获取网关公网IP。
 * @method void setPublicIpAddress(string $PublicIpAddress) 设置网关公网IP。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method string getZone() 获取可用区，如：ap-guangzhou
 * @method void setZone(string $Zone) 设置可用区，如：ap-guangzhou
 * @method integer getVpnConnNum() 获取VPN网关的通道数
 * @method void setVpnConnNum(integer $VpnConnNum) 设置VPN网关的通道数
 */
class VpnGateway extends AbstractModel
{
    /**
     * @var string 网关实例ID。
     */
    public $VpnGatewayId;

    /**
     * @var string VPC实例ID。
     */
    public $VpcId;

    /**
     * @var string 网关实例名称。
     */
    public $VpnGatewayName;

    /**
     * @var string VPC网段
     */
    public $VpcCidrBlock;

    /**
     * @var string VPC名称
     */
    public $VpcName;

    /**
     * @var integer 网关出带宽。
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string 网关实例状态
     */
    public $State;

    /**
     * @var string 网关公网IP。
     */
    public $PublicIpAddress;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var string 可用区，如：ap-guangzhou
     */
    public $Zone;

    /**
     * @var integer VPN网关的通道数
     */
    public $VpnConnNum;

    /**
     * @param string $VpnGatewayId 网关实例ID。
     * @param string $VpcId VPC实例ID。
     * @param string $VpnGatewayName 网关实例名称。
     * @param string $VpcCidrBlock VPC网段
     * @param string $VpcName VPC名称
     * @param integer $InternetMaxBandwidthOut 网关出带宽。
     * @param string $State 网关实例状态
     * @param string $PublicIpAddress 网关公网IP。
     * @param string $CreateTime 创建时间。
     * @param string $Zone 可用区，如：ap-guangzhou
     * @param integer $VpnConnNum VPN网关的通道数
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
        if (array_key_exists("VpnGatewayId",$param) and $param["VpnGatewayId"] !== null) {
            $this->VpnGatewayId = $param["VpnGatewayId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpnGatewayName",$param) and $param["VpnGatewayName"] !== null) {
            $this->VpnGatewayName = $param["VpnGatewayName"];
        }

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("PublicIpAddress",$param) and $param["PublicIpAddress"] !== null) {
            $this->PublicIpAddress = $param["PublicIpAddress"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpnConnNum",$param) and $param["VpnConnNum"] !== null) {
            $this->VpnConnNum = $param["VpnConnNum"];
        }
    }
}
