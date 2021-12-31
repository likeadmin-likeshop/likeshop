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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLoadBalancerSnatIps请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡唯一性ID，例如：lb-12345678。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡唯一性ID，例如：lb-12345678。
 * @method array getSnatIps() 获取添加SnatIp信息，可指定IP申请，或者指定子网自动申请。
 * @method void setSnatIps(array $SnatIps) 设置添加SnatIp信息，可指定IP申请，或者指定子网自动申请。
 */
class CreateLoadBalancerSnatIpsRequest extends AbstractModel
{
    /**
     * @var string 负载均衡唯一性ID，例如：lb-12345678。
     */
    public $LoadBalancerId;

    /**
     * @var array 添加SnatIp信息，可指定IP申请，或者指定子网自动申请。
     */
    public $SnatIps;

    /**
     * @param string $LoadBalancerId 负载均衡唯一性ID，例如：lb-12345678。
     * @param array $SnatIps 添加SnatIp信息，可指定IP申请，或者指定子网自动申请。
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

        if (array_key_exists("SnatIps",$param) and $param["SnatIps"] !== null) {
            $this->SnatIps = [];
            foreach ($param["SnatIps"] as $key => $value){
                $obj = new SnatIp();
                $obj->deserialize($value);
                array_push($this->SnatIps, $obj);
            }
        }
    }
}
