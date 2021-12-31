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
 * VPC视图子网信息
 *
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method string getSubnetName() 获取子网名称
 * @method void setSubnetName(string $SubnetName) 设置子网名称
 * @method string getCidrBlock() 获取子网CIDR
 * @method void setCidrBlock(string $CidrBlock) 设置子网CIDR
 * @method integer getCpmNum() 获取子网下设备个数
 * @method void setCpmNum(integer $CpmNum) 设置子网下设备个数
 * @method integer getLbNum() 获取内网负载均衡个数
 * @method void setLbNum(integer $LbNum) 设置内网负载均衡个数
 * @method string getZone() 获取子网所在可用区
 * @method void setZone(string $Zone) 设置子网所在可用区
 */
class VpcSubnetViewInfo extends AbstractModel
{
    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var string 子网名称
     */
    public $SubnetName;

    /**
     * @var string 子网CIDR
     */
    public $CidrBlock;

    /**
     * @var integer 子网下设备个数
     */
    public $CpmNum;

    /**
     * @var integer 内网负载均衡个数
     */
    public $LbNum;

    /**
     * @var string 子网所在可用区
     */
    public $Zone;

    /**
     * @param string $SubnetId 子网ID
     * @param string $SubnetName 子网名称
     * @param string $CidrBlock 子网CIDR
     * @param integer $CpmNum 子网下设备个数
     * @param integer $LbNum 内网负载均衡个数
     * @param string $Zone 子网所在可用区
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

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("CpmNum",$param) and $param["CpmNum"] !== null) {
            $this->CpmNum = $param["CpmNum"];
        }

        if (array_key_exists("LbNum",$param) and $param["LbNum"] !== null) {
            $this->LbNum = $param["LbNum"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
