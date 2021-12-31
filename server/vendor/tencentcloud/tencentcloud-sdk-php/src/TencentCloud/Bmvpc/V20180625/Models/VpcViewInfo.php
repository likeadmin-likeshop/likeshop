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
 * VPC视图信息
 *
 * @method string getVpcId() 获取私有网络ID
 * @method void setVpcId(string $VpcId) 设置私有网络ID
 * @method string getVpcName() 获取私有网络名称
 * @method void setVpcName(string $VpcName) 设置私有网络名称
 * @method string getCidrBlock() 获取私有网络CIDR
 * @method void setCidrBlock(string $CidrBlock) 设置私有网络CIDR
 * @method string getZone() 获取私有网络所在可用区
 * @method void setZone(string $Zone) 设置私有网络所在可用区
 * @method integer getLbNum() 获取外网负载均衡个数
 * @method void setLbNum(integer $LbNum) 设置外网负载均衡个数
 * @method integer getEipNum() 获取弹性公网IP个数
 * @method void setEipNum(integer $EipNum) 设置弹性公网IP个数
 * @method integer getNatNum() 获取NAT网关个数
 * @method void setNatNum(integer $NatNum) 设置NAT网关个数
 * @method array getSubnetSet() 获取子网列表
 * @method void setSubnetSet(array $SubnetSet) 设置子网列表
 */
class VpcViewInfo extends AbstractModel
{
    /**
     * @var string 私有网络ID
     */
    public $VpcId;

    /**
     * @var string 私有网络名称
     */
    public $VpcName;

    /**
     * @var string 私有网络CIDR
     */
    public $CidrBlock;

    /**
     * @var string 私有网络所在可用区
     */
    public $Zone;

    /**
     * @var integer 外网负载均衡个数
     */
    public $LbNum;

    /**
     * @var integer 弹性公网IP个数
     */
    public $EipNum;

    /**
     * @var integer NAT网关个数
     */
    public $NatNum;

    /**
     * @var array 子网列表
     */
    public $SubnetSet;

    /**
     * @param string $VpcId 私有网络ID
     * @param string $VpcName 私有网络名称
     * @param string $CidrBlock 私有网络CIDR
     * @param string $Zone 私有网络所在可用区
     * @param integer $LbNum 外网负载均衡个数
     * @param integer $EipNum 弹性公网IP个数
     * @param integer $NatNum NAT网关个数
     * @param array $SubnetSet 子网列表
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

        if (array_key_exists("LbNum",$param) and $param["LbNum"] !== null) {
            $this->LbNum = $param["LbNum"];
        }

        if (array_key_exists("EipNum",$param) and $param["EipNum"] !== null) {
            $this->EipNum = $param["EipNum"];
        }

        if (array_key_exists("NatNum",$param) and $param["NatNum"] !== null) {
            $this->NatNum = $param["NatNum"];
        }

        if (array_key_exists("SubnetSet",$param) and $param["SubnetSet"] !== null) {
            $this->SubnetSet = [];
            foreach ($param["SubnetSet"] as $key => $value){
                $obj = new VpcSubnetViewInfo();
                $obj->deserialize($value);
                array_push($this->SubnetSet, $obj);
            }
        }
    }
}
