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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRule请求参数结构体
 *
 * @method string getListenerId() 获取7层监听器ID
 * @method void setListenerId(string $ListenerId) 设置7层监听器ID
 * @method string getDomain() 获取转发规则的域名
 * @method void setDomain(string $Domain) 设置转发规则的域名
 * @method string getPath() 获取转发规则的路径
 * @method void setPath(string $Path) 设置转发规则的路径
 * @method string getRealServerType() 获取转发规则对应源站的类型，支持IP和DOMAIN类型。
 * @method void setRealServerType(string $RealServerType) 设置转发规则对应源站的类型，支持IP和DOMAIN类型。
 * @method string getScheduler() 获取规则转发源站调度策略，支持轮询（rr），加权轮询（wrr），最小连接数（lc）。
 * @method void setScheduler(string $Scheduler) 设置规则转发源站调度策略，支持轮询（rr），加权轮询（wrr），最小连接数（lc）。
 * @method integer getHealthCheck() 获取规则是否开启健康检查，1开启，0关闭。
 * @method void setHealthCheck(integer $HealthCheck) 设置规则是否开启健康检查，1开启，0关闭。
 * @method RuleCheckParams getCheckParams() 获取源站健康检查相关参数
 * @method void setCheckParams(RuleCheckParams $CheckParams) 设置源站健康检查相关参数
 * @method string getForwardProtocol() 获取加速通道转发到源站的协议类型：支持HTTP或HTTPS。
不传递该字段时表示使用对应监听器的ForwardProtocol。
 * @method void setForwardProtocol(string $ForwardProtocol) 设置加速通道转发到源站的协议类型：支持HTTP或HTTPS。
不传递该字段时表示使用对应监听器的ForwardProtocol。
 * @method string getForwardHost() 获取加速通道转发到远照的host，不设置该参数时，使用默认的host设置，即客户端发起的http请求的host。
 * @method void setForwardHost(string $ForwardHost) 设置加速通道转发到远照的host，不设置该参数时，使用默认的host设置，即客户端发起的http请求的host。
 */
class CreateRuleRequest extends AbstractModel
{
    /**
     * @var string 7层监听器ID
     */
    public $ListenerId;

    /**
     * @var string 转发规则的域名
     */
    public $Domain;

    /**
     * @var string 转发规则的路径
     */
    public $Path;

    /**
     * @var string 转发规则对应源站的类型，支持IP和DOMAIN类型。
     */
    public $RealServerType;

    /**
     * @var string 规则转发源站调度策略，支持轮询（rr），加权轮询（wrr），最小连接数（lc）。
     */
    public $Scheduler;

    /**
     * @var integer 规则是否开启健康检查，1开启，0关闭。
     */
    public $HealthCheck;

    /**
     * @var RuleCheckParams 源站健康检查相关参数
     */
    public $CheckParams;

    /**
     * @var string 加速通道转发到源站的协议类型：支持HTTP或HTTPS。
不传递该字段时表示使用对应监听器的ForwardProtocol。
     */
    public $ForwardProtocol;

    /**
     * @var string 加速通道转发到远照的host，不设置该参数时，使用默认的host设置，即客户端发起的http请求的host。
     */
    public $ForwardHost;

    /**
     * @param string $ListenerId 7层监听器ID
     * @param string $Domain 转发规则的域名
     * @param string $Path 转发规则的路径
     * @param string $RealServerType 转发规则对应源站的类型，支持IP和DOMAIN类型。
     * @param string $Scheduler 规则转发源站调度策略，支持轮询（rr），加权轮询（wrr），最小连接数（lc）。
     * @param integer $HealthCheck 规则是否开启健康检查，1开启，0关闭。
     * @param RuleCheckParams $CheckParams 源站健康检查相关参数
     * @param string $ForwardProtocol 加速通道转发到源站的协议类型：支持HTTP或HTTPS。
不传递该字段时表示使用对应监听器的ForwardProtocol。
     * @param string $ForwardHost 加速通道转发到远照的host，不设置该参数时，使用默认的host设置，即客户端发起的http请求的host。
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("RealServerType",$param) and $param["RealServerType"] !== null) {
            $this->RealServerType = $param["RealServerType"];
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = $param["HealthCheck"];
        }

        if (array_key_exists("CheckParams",$param) and $param["CheckParams"] !== null) {
            $this->CheckParams = new RuleCheckParams();
            $this->CheckParams->deserialize($param["CheckParams"]);
        }

        if (array_key_exists("ForwardProtocol",$param) and $param["ForwardProtocol"] !== null) {
            $this->ForwardProtocol = $param["ForwardProtocol"];
        }

        if (array_key_exists("ForwardHost",$param) and $param["ForwardHost"] !== null) {
            $this->ForwardHost = $param["ForwardHost"];
        }
    }
}
