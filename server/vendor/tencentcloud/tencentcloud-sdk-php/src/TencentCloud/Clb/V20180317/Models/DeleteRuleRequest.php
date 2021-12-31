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
 * DeleteRule请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡实例ID。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例ID。
 * @method string getListenerId() 获取负载均衡监听器ID。
 * @method void setListenerId(string $ListenerId) 设置负载均衡监听器ID。
 * @method array getLocationIds() 获取要删除的转发规则的ID组成的数组。
 * @method void setLocationIds(array $LocationIds) 设置要删除的转发规则的ID组成的数组。
 * @method string getDomain() 获取要删除的转发规则的域名，已提供LocationIds参数时本参数不生效。
 * @method void setDomain(string $Domain) 设置要删除的转发规则的域名，已提供LocationIds参数时本参数不生效。
 * @method string getUrl() 获取要删除的转发规则的转发路径，已提供LocationIds参数时本参数不生效。
 * @method void setUrl(string $Url) 设置要删除的转发规则的转发路径，已提供LocationIds参数时本参数不生效。
 * @method string getNewDefaultServerDomain() 获取监听器下必须配置一个默认域名，当需要删除默认域名时，可以指定另一个域名作为新的默认域名。
 * @method void setNewDefaultServerDomain(string $NewDefaultServerDomain) 设置监听器下必须配置一个默认域名，当需要删除默认域名时，可以指定另一个域名作为新的默认域名。
 */
class DeleteRuleRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例ID。
     */
    public $LoadBalancerId;

    /**
     * @var string 负载均衡监听器ID。
     */
    public $ListenerId;

    /**
     * @var array 要删除的转发规则的ID组成的数组。
     */
    public $LocationIds;

    /**
     * @var string 要删除的转发规则的域名，已提供LocationIds参数时本参数不生效。
     */
    public $Domain;

    /**
     * @var string 要删除的转发规则的转发路径，已提供LocationIds参数时本参数不生效。
     */
    public $Url;

    /**
     * @var string 监听器下必须配置一个默认域名，当需要删除默认域名时，可以指定另一个域名作为新的默认域名。
     */
    public $NewDefaultServerDomain;

    /**
     * @param string $LoadBalancerId 负载均衡实例ID。
     * @param string $ListenerId 负载均衡监听器ID。
     * @param array $LocationIds 要删除的转发规则的ID组成的数组。
     * @param string $Domain 要删除的转发规则的域名，已提供LocationIds参数时本参数不生效。
     * @param string $Url 要删除的转发规则的转发路径，已提供LocationIds参数时本参数不生效。
     * @param string $NewDefaultServerDomain 监听器下必须配置一个默认域名，当需要删除默认域名时，可以指定另一个域名作为新的默认域名。
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

        if (array_key_exists("LocationIds",$param) and $param["LocationIds"] !== null) {
            $this->LocationIds = $param["LocationIds"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("NewDefaultServerDomain",$param) and $param["NewDefaultServerDomain"] !== null) {
            $this->NewDefaultServerDomain = $param["NewDefaultServerDomain"];
        }
    }
}
