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
 * CreateVpc请求参数结构体
 *
 * @method string getVpcName() 获取私有网络的名称
 * @method void setVpcName(string $VpcName) 设置私有网络的名称
 * @method string getCidrBlock() 获取私有网络的CIDR
 * @method void setCidrBlock(string $CidrBlock) 设置私有网络的CIDR
 * @method string getZone() 获取私有网络的可用区
 * @method void setZone(string $Zone) 设置私有网络的可用区
 * @method array getSubnetSet() 获取子网信息
 * @method void setSubnetSet(array $SubnetSet) 设置子网信息
 * @method boolean getEnableMonitoring() 获取是否启用内网监控
 * @method void setEnableMonitoring(boolean $EnableMonitoring) 设置是否启用内网监控
 */
class CreateVpcRequest extends AbstractModel
{
    /**
     * @var string 私有网络的名称
     */
    public $VpcName;

    /**
     * @var string 私有网络的CIDR
     */
    public $CidrBlock;

    /**
     * @var string 私有网络的可用区
     */
    public $Zone;

    /**
     * @var array 子网信息
     */
    public $SubnetSet;

    /**
     * @var boolean 是否启用内网监控
     */
    public $EnableMonitoring;

    /**
     * @param string $VpcName 私有网络的名称
     * @param string $CidrBlock 私有网络的CIDR
     * @param string $Zone 私有网络的可用区
     * @param array $SubnetSet 子网信息
     * @param boolean $EnableMonitoring 是否启用内网监控
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
        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SubnetSet",$param) and $param["SubnetSet"] !== null) {
            $this->SubnetSet = [];
            foreach ($param["SubnetSet"] as $key => $value){
                $obj = new VpcSubnetCreateInfo();
                $obj->deserialize($value);
                array_push($this->SubnetSet, $obj);
            }
        }

        if (array_key_exists("EnableMonitoring",$param) and $param["EnableMonitoring"] !== null) {
            $this->EnableMonitoring = $param["EnableMonitoring"];
        }
    }
}
