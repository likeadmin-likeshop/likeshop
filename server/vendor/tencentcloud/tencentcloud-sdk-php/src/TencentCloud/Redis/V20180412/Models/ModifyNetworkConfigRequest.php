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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNetworkConfig请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getOperation() 获取操作类型：changeVip——修改实例VIP；changeVpc——修改实例子网；changeBaseToVpc——基础网络转VPC网络
 * @method void setOperation(string $Operation) 设置操作类型：changeVip——修改实例VIP；changeVpc——修改实例子网；changeBaseToVpc——基础网络转VPC网络
 * @method string getVip() 获取VIP地址，changeVip的时候填写，不填则默认分配
 * @method void setVip(string $Vip) 设置VIP地址，changeVip的时候填写，不填则默认分配
 * @method string getVpcId() 获取私有网络ID，changeVpc、changeBaseToVpc的时候需要提供
 * @method void setVpcId(string $VpcId) 设置私有网络ID，changeVpc、changeBaseToVpc的时候需要提供
 * @method string getSubnetId() 获取子网ID，changeVpc、changeBaseToVpc的时候需要提供
 * @method void setSubnetId(string $SubnetId) 设置子网ID，changeVpc、changeBaseToVpc的时候需要提供
 */
class ModifyNetworkConfigRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 操作类型：changeVip——修改实例VIP；changeVpc——修改实例子网；changeBaseToVpc——基础网络转VPC网络
     */
    public $Operation;

    /**
     * @var string VIP地址，changeVip的时候填写，不填则默认分配
     */
    public $Vip;

    /**
     * @var string 私有网络ID，changeVpc、changeBaseToVpc的时候需要提供
     */
    public $VpcId;

    /**
     * @var string 子网ID，changeVpc、changeBaseToVpc的时候需要提供
     */
    public $SubnetId;

    /**
     * @param string $InstanceId 实例ID
     * @param string $Operation 操作类型：changeVip——修改实例VIP；changeVpc——修改实例子网；changeBaseToVpc——基础网络转VPC网络
     * @param string $Vip VIP地址，changeVip的时候填写，不填则默认分配
     * @param string $VpcId 私有网络ID，changeVpc、changeBaseToVpc的时候需要提供
     * @param string $SubnetId 子网ID，changeVpc、changeBaseToVpc的时候需要提供
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }
    }
}
