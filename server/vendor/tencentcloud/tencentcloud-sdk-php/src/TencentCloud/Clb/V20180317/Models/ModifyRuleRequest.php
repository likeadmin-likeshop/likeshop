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
 * ModifyRule请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡实例 ID。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例 ID。
 * @method string getListenerId() 获取负载均衡监听器 ID。
 * @method void setListenerId(string $ListenerId) 设置负载均衡监听器 ID。
 * @method string getLocationId() 获取要修改的转发规则的 ID。
 * @method void setLocationId(string $LocationId) 设置要修改的转发规则的 ID。
 * @method string getUrl() 获取转发规则的新的转发路径，如不需修改Url，则不需提供此参数。
 * @method void setUrl(string $Url) 设置转发规则的新的转发路径，如不需修改Url，则不需提供此参数。
 * @method HealthCheck getHealthCheck() 获取健康检查信息。
 * @method void setHealthCheck(HealthCheck $HealthCheck) 设置健康检查信息。
 * @method string getScheduler() 获取规则的请求转发方式，可选值：WRR、LEAST_CONN、IP_HASH
分别表示按权重轮询、最小连接数、按IP哈希， 默认为 WRR。
 * @method void setScheduler(string $Scheduler) 设置规则的请求转发方式，可选值：WRR、LEAST_CONN、IP_HASH
分别表示按权重轮询、最小连接数、按IP哈希， 默认为 WRR。
 * @method integer getSessionExpireTime() 获取会话保持时间。
 * @method void setSessionExpireTime(integer $SessionExpireTime) 设置会话保持时间。
 * @method string getForwardType() 获取负载均衡实例与后端服务之间的转发协议，默认HTTP，可取值：HTTP、HTTPS、TRPC。
 * @method void setForwardType(string $ForwardType) 设置负载均衡实例与后端服务之间的转发协议，默认HTTP，可取值：HTTP、HTTPS、TRPC。
 * @method string getTrpcCallee() 获取TRPC被调服务器路由，ForwardType为TRPC时必填。
 * @method void setTrpcCallee(string $TrpcCallee) 设置TRPC被调服务器路由，ForwardType为TRPC时必填。
 * @method string getTrpcFunc() 获取TRPC调用服务接口，ForwardType为TRPC时必填。
 * @method void setTrpcFunc(string $TrpcFunc) 设置TRPC调用服务接口，ForwardType为TRPC时必填。
 */
class ModifyRuleRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例 ID。
     */
    public $LoadBalancerId;

    /**
     * @var string 负载均衡监听器 ID。
     */
    public $ListenerId;

    /**
     * @var string 要修改的转发规则的 ID。
     */
    public $LocationId;

    /**
     * @var string 转发规则的新的转发路径，如不需修改Url，则不需提供此参数。
     */
    public $Url;

    /**
     * @var HealthCheck 健康检查信息。
     */
    public $HealthCheck;

    /**
     * @var string 规则的请求转发方式，可选值：WRR、LEAST_CONN、IP_HASH
分别表示按权重轮询、最小连接数、按IP哈希， 默认为 WRR。
     */
    public $Scheduler;

    /**
     * @var integer 会话保持时间。
     */
    public $SessionExpireTime;

    /**
     * @var string 负载均衡实例与后端服务之间的转发协议，默认HTTP，可取值：HTTP、HTTPS、TRPC。
     */
    public $ForwardType;

    /**
     * @var string TRPC被调服务器路由，ForwardType为TRPC时必填。
     */
    public $TrpcCallee;

    /**
     * @var string TRPC调用服务接口，ForwardType为TRPC时必填。
     */
    public $TrpcFunc;

    /**
     * @param string $LoadBalancerId 负载均衡实例 ID。
     * @param string $ListenerId 负载均衡监听器 ID。
     * @param string $LocationId 要修改的转发规则的 ID。
     * @param string $Url 转发规则的新的转发路径，如不需修改Url，则不需提供此参数。
     * @param HealthCheck $HealthCheck 健康检查信息。
     * @param string $Scheduler 规则的请求转发方式，可选值：WRR、LEAST_CONN、IP_HASH
分别表示按权重轮询、最小连接数、按IP哈希， 默认为 WRR。
     * @param integer $SessionExpireTime 会话保持时间。
     * @param string $ForwardType 负载均衡实例与后端服务之间的转发协议，默认HTTP，可取值：HTTP、HTTPS、TRPC。
     * @param string $TrpcCallee TRPC被调服务器路由，ForwardType为TRPC时必填。
     * @param string $TrpcFunc TRPC调用服务接口，ForwardType为TRPC时必填。
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

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new HealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("SessionExpireTime",$param) and $param["SessionExpireTime"] !== null) {
            $this->SessionExpireTime = $param["SessionExpireTime"];
        }

        if (array_key_exists("ForwardType",$param) and $param["ForwardType"] !== null) {
            $this->ForwardType = $param["ForwardType"];
        }

        if (array_key_exists("TrpcCallee",$param) and $param["TrpcCallee"] !== null) {
            $this->TrpcCallee = $param["TrpcCallee"];
        }

        if (array_key_exists("TrpcFunc",$param) and $param["TrpcFunc"] !== null) {
            $this->TrpcFunc = $param["TrpcFunc"];
        }
    }
}
