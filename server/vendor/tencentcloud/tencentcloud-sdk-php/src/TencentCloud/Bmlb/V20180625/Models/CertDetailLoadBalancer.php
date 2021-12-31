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
namespace TencentCloud\Bmlb\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取证书信息时返回的所用在的负载均衡信息。
 *
 * @method string getLoadBalancerId() 获取黑石负载均衡实例ID。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置黑石负载均衡实例ID。
 * @method string getLoadBalancerName() 获取黑石负载均衡实例名称。
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置黑石负载均衡实例名称。
 * @method string getVpcId() 获取该黑石负载均衡所在的VpcId。
 * @method void setVpcId(string $VpcId) 设置该黑石负载均衡所在的VpcId。
 * @method integer getRegionId() 获取该黑石负载均衡所在的regionId。
 * @method void setRegionId(integer $RegionId) 设置该黑石负载均衡所在的regionId。
 */
class CertDetailLoadBalancer extends AbstractModel
{
    /**
     * @var string 黑石负载均衡实例ID。
     */
    public $LoadBalancerId;

    /**
     * @var string 黑石负载均衡实例名称。
     */
    public $LoadBalancerName;

    /**
     * @var string 该黑石负载均衡所在的VpcId。
     */
    public $VpcId;

    /**
     * @var integer 该黑石负载均衡所在的regionId。
     */
    public $RegionId;

    /**
     * @param string $LoadBalancerId 黑石负载均衡实例ID。
     * @param string $LoadBalancerName 黑石负载均衡实例名称。
     * @param string $VpcId 该黑石负载均衡所在的VpcId。
     * @param integer $RegionId 该黑石负载均衡所在的regionId。
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }
    }
}
