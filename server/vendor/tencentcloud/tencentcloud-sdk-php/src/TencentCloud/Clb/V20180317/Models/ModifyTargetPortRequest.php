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
 * ModifyTargetPort请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡实例ID。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例ID。
 * @method string getListenerId() 获取负载均衡监听器ID。
 * @method void setListenerId(string $ListenerId) 设置负载均衡监听器ID。
 * @method array getTargets() 获取要修改端口的后端服务列表。
 * @method void setTargets(array $Targets) 设置要修改端口的后端服务列表。
 * @method integer getNewPort() 获取后端服务绑定到监听器或转发规则的新端口。
 * @method void setNewPort(integer $NewPort) 设置后端服务绑定到监听器或转发规则的新端口。
 * @method string getLocationId() 获取转发规则的ID，当后端服务绑定到七层转发规则时，必须提供此参数或Domain+Url两者之一。
 * @method void setLocationId(string $LocationId) 设置转发规则的ID，当后端服务绑定到七层转发规则时，必须提供此参数或Domain+Url两者之一。
 * @method string getDomain() 获取目标规则的域名，提供LocationId参数时本参数不生效。
 * @method void setDomain(string $Domain) 设置目标规则的域名，提供LocationId参数时本参数不生效。
 * @method string getUrl() 获取目标规则的URL，提供LocationId参数时本参数不生效。
 * @method void setUrl(string $Url) 设置目标规则的URL，提供LocationId参数时本参数不生效。
 */
class ModifyTargetPortRequest extends AbstractModel
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
     * @var array 要修改端口的后端服务列表。
     */
    public $Targets;

    /**
     * @var integer 后端服务绑定到监听器或转发规则的新端口。
     */
    public $NewPort;

    /**
     * @var string 转发规则的ID，当后端服务绑定到七层转发规则时，必须提供此参数或Domain+Url两者之一。
     */
    public $LocationId;

    /**
     * @var string 目标规则的域名，提供LocationId参数时本参数不生效。
     */
    public $Domain;

    /**
     * @var string 目标规则的URL，提供LocationId参数时本参数不生效。
     */
    public $Url;

    /**
     * @param string $LoadBalancerId 负载均衡实例ID。
     * @param string $ListenerId 负载均衡监听器ID。
     * @param array $Targets 要修改端口的后端服务列表。
     * @param integer $NewPort 后端服务绑定到监听器或转发规则的新端口。
     * @param string $LocationId 转发规则的ID，当后端服务绑定到七层转发规则时，必须提供此参数或Domain+Url两者之一。
     * @param string $Domain 目标规则的域名，提供LocationId参数时本参数不生效。
     * @param string $Url 目标规则的URL，提供LocationId参数时本参数不生效。
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

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new Target();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }

        if (array_key_exists("NewPort",$param) and $param["NewPort"] !== null) {
            $this->NewPort = $param["NewPort"];
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
