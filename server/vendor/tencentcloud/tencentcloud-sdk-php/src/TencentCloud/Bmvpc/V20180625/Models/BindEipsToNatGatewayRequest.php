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
 * BindEipsToNatGateway请求参数结构体
 *
 * @method string getNatId() 获取NAT网关ID，例如：nat-kdm476mp
 * @method void setNatId(string $NatId) 设置NAT网关ID，例如：nat-kdm476mp
 * @method string getVpcId() 获取私有网络ID，例如：vpc-kd7d06of
 * @method void setVpcId(string $VpcId) 设置私有网络ID，例如：vpc-kd7d06of
 * @method array getAssignedEips() 获取已分配的EIP列表；AssignedEips和AutoAllocEipNum至少输入一个
 * @method void setAssignedEips(array $AssignedEips) 设置已分配的EIP列表；AssignedEips和AutoAllocEipNum至少输入一个
 * @method integer getAutoAllocEipNum() 获取新建EIP数目，系统将会按您的要求生产该数目个数EIP；AssignedEips和AutoAllocEipNum至少输入一个
 * @method void setAutoAllocEipNum(integer $AutoAllocEipNum) 设置新建EIP数目，系统将会按您的要求生产该数目个数EIP；AssignedEips和AutoAllocEipNum至少输入一个
 */
class BindEipsToNatGatewayRequest extends AbstractModel
{
    /**
     * @var string NAT网关ID，例如：nat-kdm476mp
     */
    public $NatId;

    /**
     * @var string 私有网络ID，例如：vpc-kd7d06of
     */
    public $VpcId;

    /**
     * @var array 已分配的EIP列表；AssignedEips和AutoAllocEipNum至少输入一个
     */
    public $AssignedEips;

    /**
     * @var integer 新建EIP数目，系统将会按您的要求生产该数目个数EIP；AssignedEips和AutoAllocEipNum至少输入一个
     */
    public $AutoAllocEipNum;

    /**
     * @param string $NatId NAT网关ID，例如：nat-kdm476mp
     * @param string $VpcId 私有网络ID，例如：vpc-kd7d06of
     * @param array $AssignedEips 已分配的EIP列表；AssignedEips和AutoAllocEipNum至少输入一个
     * @param integer $AutoAllocEipNum 新建EIP数目，系统将会按您的要求生产该数目个数EIP；AssignedEips和AutoAllocEipNum至少输入一个
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
        if (array_key_exists("NatId",$param) and $param["NatId"] !== null) {
            $this->NatId = $param["NatId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("AssignedEips",$param) and $param["AssignedEips"] !== null) {
            $this->AssignedEips = $param["AssignedEips"];
        }

        if (array_key_exists("AutoAllocEipNum",$param) and $param["AutoAllocEipNum"] !== null) {
            $this->AutoAllocEipNum = $param["AutoAllocEipNum"];
        }
    }
}
