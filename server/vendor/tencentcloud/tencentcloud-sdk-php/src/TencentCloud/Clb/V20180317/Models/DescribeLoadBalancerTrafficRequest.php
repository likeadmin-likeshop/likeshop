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
 * DescribeLoadBalancerTraffic请求参数结构体
 *
 * @method string getLoadBalancerRegion() 获取负载均衡所在地域，不传默认返回所有地域负载均衡。
 * @method void setLoadBalancerRegion(string $LoadBalancerRegion) 设置负载均衡所在地域，不传默认返回所有地域负载均衡。
 */
class DescribeLoadBalancerTrafficRequest extends AbstractModel
{
    /**
     * @var string 负载均衡所在地域，不传默认返回所有地域负载均衡。
     */
    public $LoadBalancerRegion;

    /**
     * @param string $LoadBalancerRegion 负载均衡所在地域，不传默认返回所有地域负载均衡。
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
        if (array_key_exists("LoadBalancerRegion",$param) and $param["LoadBalancerRegion"] !== null) {
            $this->LoadBalancerRegion = $param["LoadBalancerRegion"];
        }
    }
}
