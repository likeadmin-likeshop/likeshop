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
 * VPC信息
 *
 * @method string getVpcId() 获取私有网络的唯一ID。
 * @method void setVpcId(string $VpcId) 设置私有网络的唯一ID。
 * @method string getVpcName() 获取VPC的名称。
 * @method void setVpcName(string $VpcName) 设置VPC的名称。
 * @method string getCidrBlock() 获取VPC的CIDR。
 * @method void setCidrBlock(string $CidrBlock) 设置VPC的CIDR。
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getState() 获取VPC状态
 * @method void setState(string $State) 设置VPC状态
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getIntVpcId() 获取整型私有网络ID。
 * @method void setIntVpcId(integer $IntVpcId) 设置整型私有网络ID。
 */
class VpcInfo extends AbstractModel
{
    /**
     * @var string 私有网络的唯一ID。
     */
    public $VpcId;

    /**
     * @var string VPC的名称。
     */
    public $VpcName;

    /**
     * @var string VPC的CIDR。
     */
    public $CidrBlock;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string VPC状态
     */
    public $State;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 整型私有网络ID。
     */
    public $IntVpcId;

    /**
     * @param string $VpcId 私有网络的唯一ID。
     * @param string $VpcName VPC的名称。
     * @param string $CidrBlock VPC的CIDR。
     * @param string $Zone 可用区
     * @param string $State VPC状态
     * @param string $CreateTime 创建时间
     * @param integer $IntVpcId 整型私有网络ID。
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

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IntVpcId",$param) and $param["IntVpcId"] !== null) {
            $this->IntVpcId = $param["IntVpcId"];
        }
    }
}
