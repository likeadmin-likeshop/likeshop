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
 * DescribeL7Rules请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡实例ID，可通过接口DescribeLoadBalancers查询。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例ID，可通过接口DescribeLoadBalancers查询。
 * @method string getListenerId() 获取七层监听器ID，可通过接口DescribeL7Listeners查询。
 * @method void setListenerId(string $ListenerId) 设置七层监听器ID，可通过接口DescribeL7Listeners查询。
 * @method array getDomainIds() 获取转发域名ID列表，可通过接口DescribeL7Rules查询。
 * @method void setDomainIds(array $DomainIds) 设置转发域名ID列表，可通过接口DescribeL7Rules查询。
 */
class DescribeL7RulesRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例ID，可通过接口DescribeLoadBalancers查询。
     */
    public $LoadBalancerId;

    /**
     * @var string 七层监听器ID，可通过接口DescribeL7Listeners查询。
     */
    public $ListenerId;

    /**
     * @var array 转发域名ID列表，可通过接口DescribeL7Rules查询。
     */
    public $DomainIds;

    /**
     * @param string $LoadBalancerId 负载均衡实例ID，可通过接口DescribeLoadBalancers查询。
     * @param string $ListenerId 七层监听器ID，可通过接口DescribeL7Listeners查询。
     * @param array $DomainIds 转发域名ID列表，可通过接口DescribeL7Rules查询。
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

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("DomainIds",$param) and $param["DomainIds"] !== null) {
            $this->DomainIds = $param["DomainIds"];
        }
    }
}
