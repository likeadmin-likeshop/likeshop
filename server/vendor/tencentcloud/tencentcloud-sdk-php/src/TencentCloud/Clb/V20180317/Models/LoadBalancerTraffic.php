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
 * 负载均衡流量数据。
 *
 * @method string getLoadBalancerId() 获取负载均衡ID
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡ID
 * @method string getLoadBalancerName() 获取负载均衡名字
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置负载均衡名字
 * @method string getRegion() 获取负载均衡所在地域
 * @method void setRegion(string $Region) 设置负载均衡所在地域
 * @method string getVip() 获取负载均衡的vip
 * @method void setVip(string $Vip) 设置负载均衡的vip
 * @method float getOutBandwidth() 获取最大出带宽，单位：Mbps
 * @method void setOutBandwidth(float $OutBandwidth) 设置最大出带宽，单位：Mbps
 */
class LoadBalancerTraffic extends AbstractModel
{
    /**
     * @var string 负载均衡ID
     */
    public $LoadBalancerId;

    /**
     * @var string 负载均衡名字
     */
    public $LoadBalancerName;

    /**
     * @var string 负载均衡所在地域
     */
    public $Region;

    /**
     * @var string 负载均衡的vip
     */
    public $Vip;

    /**
     * @var float 最大出带宽，单位：Mbps
     */
    public $OutBandwidth;

    /**
     * @param string $LoadBalancerId 负载均衡ID
     * @param string $LoadBalancerName 负载均衡名字
     * @param string $Region 负载均衡所在地域
     * @param string $Vip 负载均衡的vip
     * @param float $OutBandwidth 最大出带宽，单位：Mbps
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("OutBandwidth",$param) and $param["OutBandwidth"] !== null) {
            $this->OutBandwidth = $param["OutBandwidth"];
        }
    }
}
