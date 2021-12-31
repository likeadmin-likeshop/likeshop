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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EnableVpcCniNetworkType请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getVpcCniType() 获取开启vpc-cni的模式，tke-route-eni开启的是策略路由模式，tke-direct-eni开启的是独立网卡模式
 * @method void setVpcCniType(string $VpcCniType) 设置开启vpc-cni的模式，tke-route-eni开启的是策略路由模式，tke-direct-eni开启的是独立网卡模式
 * @method boolean getEnableStaticIp() 获取是否开启固定IP模式
 * @method void setEnableStaticIp(boolean $EnableStaticIp) 设置是否开启固定IP模式
 * @method array getSubnets() 获取使用的容器子网
 * @method void setSubnets(array $Subnets) 设置使用的容器子网
 * @method integer getExpiredSeconds() 获取在固定IP模式下，Pod销毁后退还IP的时间，传参必须大于300；不传默认IP永不销毁。
 * @method void setExpiredSeconds(integer $ExpiredSeconds) 设置在固定IP模式下，Pod销毁后退还IP的时间，传参必须大于300；不传默认IP永不销毁。
 */
class EnableVpcCniNetworkTypeRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 开启vpc-cni的模式，tke-route-eni开启的是策略路由模式，tke-direct-eni开启的是独立网卡模式
     */
    public $VpcCniType;

    /**
     * @var boolean 是否开启固定IP模式
     */
    public $EnableStaticIp;

    /**
     * @var array 使用的容器子网
     */
    public $Subnets;

    /**
     * @var integer 在固定IP模式下，Pod销毁后退还IP的时间，传参必须大于300；不传默认IP永不销毁。
     */
    public $ExpiredSeconds;

    /**
     * @param string $ClusterId 集群ID
     * @param string $VpcCniType 开启vpc-cni的模式，tke-route-eni开启的是策略路由模式，tke-direct-eni开启的是独立网卡模式
     * @param boolean $EnableStaticIp 是否开启固定IP模式
     * @param array $Subnets 使用的容器子网
     * @param integer $ExpiredSeconds 在固定IP模式下，Pod销毁后退还IP的时间，传参必须大于300；不传默认IP永不销毁。
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("VpcCniType",$param) and $param["VpcCniType"] !== null) {
            $this->VpcCniType = $param["VpcCniType"];
        }

        if (array_key_exists("EnableStaticIp",$param) and $param["EnableStaticIp"] !== null) {
            $this->EnableStaticIp = $param["EnableStaticIp"];
        }

        if (array_key_exists("Subnets",$param) and $param["Subnets"] !== null) {
            $this->Subnets = $param["Subnets"];
        }

        if (array_key_exists("ExpiredSeconds",$param) and $param["ExpiredSeconds"] !== null) {
            $this->ExpiredSeconds = $param["ExpiredSeconds"];
        }
    }
}
