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
 * HTTP/HTTPS转发规则（输入）
 *
 * @method string getDomain() 获取转发规则的域名。长度限制为：1~80。
 * @method void setDomain(string $Domain) 设置转发规则的域名。长度限制为：1~80。
 * @method string getUrl() 获取转发规则的路径。长度限制为：1~200。
 * @method void setUrl(string $Url) 设置转发规则的路径。长度限制为：1~200。
 * @method integer getSessionExpireTime() 获取会话保持时间。设置为0表示关闭会话保持，开启会话保持可取值30~3600，单位：秒。
 * @method void setSessionExpireTime(integer $SessionExpireTime) 设置会话保持时间。设置为0表示关闭会话保持，开启会话保持可取值30~3600，单位：秒。
 * @method HealthCheck getHealthCheck() 获取健康检查信息。详情请参见：[健康检查](https://cloud.tencent.com/document/product/214/6097)
 * @method void setHealthCheck(HealthCheck $HealthCheck) 设置健康检查信息。详情请参见：[健康检查](https://cloud.tencent.com/document/product/214/6097)
 * @method CertificateInput getCertificate() 获取证书信息
 * @method void setCertificate(CertificateInput $Certificate) 设置证书信息
 * @method string getScheduler() 获取规则的请求转发方式，可选值：WRR、LEAST_CONN、IP_HASH
分别表示按权重轮询、最小连接数、按IP哈希， 默认为 WRR。
 * @method void setScheduler(string $Scheduler) 设置规则的请求转发方式，可选值：WRR、LEAST_CONN、IP_HASH
分别表示按权重轮询、最小连接数、按IP哈希， 默认为 WRR。
 * @method string getForwardType() 获取负载均衡与后端服务之间的转发协议，目前支持 HTTP/HTTPS/TRPC
 * @method void setForwardType(string $ForwardType) 设置负载均衡与后端服务之间的转发协议，目前支持 HTTP/HTTPS/TRPC
 * @method boolean getDefaultServer() 获取是否将该域名设为默认域名，注意，一个监听器下只能设置一个默认域名。
 * @method void setDefaultServer(boolean $DefaultServer) 设置是否将该域名设为默认域名，注意，一个监听器下只能设置一个默认域名。
 * @method boolean getHttp2() 获取是否开启Http2，注意，只有HTTPS域名才能开启Http2。
 * @method void setHttp2(boolean $Http2) 设置是否开启Http2，注意，只有HTTPS域名才能开启Http2。
 * @method string getTargetType() 获取后端目标类型，NODE表示绑定普通节点，TARGETGROUP表示绑定目标组
 * @method void setTargetType(string $TargetType) 设置后端目标类型，NODE表示绑定普通节点，TARGETGROUP表示绑定目标组
 * @method string getTrpcCallee() 获取TRPC被调服务器路由，ForwardType为TRPC时必填
 * @method void setTrpcCallee(string $TrpcCallee) 设置TRPC被调服务器路由，ForwardType为TRPC时必填
 * @method string getTrpcFunc() 获取TRPC调用服务接口，ForwardType为TRPC时必填
 * @method void setTrpcFunc(string $TrpcFunc) 设置TRPC调用服务接口，ForwardType为TRPC时必填
 * @method boolean getQuic() 获取是否开启QUIC，注意，只有HTTPS域名才能开启QUIC
 * @method void setQuic(boolean $Quic) 设置是否开启QUIC，注意，只有HTTPS域名才能开启QUIC
 */
class RuleInput extends AbstractModel
{
    /**
     * @var string 转发规则的域名。长度限制为：1~80。
     */
    public $Domain;

    /**
     * @var string 转发规则的路径。长度限制为：1~200。
     */
    public $Url;

    /**
     * @var integer 会话保持时间。设置为0表示关闭会话保持，开启会话保持可取值30~3600，单位：秒。
     */
    public $SessionExpireTime;

    /**
     * @var HealthCheck 健康检查信息。详情请参见：[健康检查](https://cloud.tencent.com/document/product/214/6097)
     */
    public $HealthCheck;

    /**
     * @var CertificateInput 证书信息
     */
    public $Certificate;

    /**
     * @var string 规则的请求转发方式，可选值：WRR、LEAST_CONN、IP_HASH
分别表示按权重轮询、最小连接数、按IP哈希， 默认为 WRR。
     */
    public $Scheduler;

    /**
     * @var string 负载均衡与后端服务之间的转发协议，目前支持 HTTP/HTTPS/TRPC
     */
    public $ForwardType;

    /**
     * @var boolean 是否将该域名设为默认域名，注意，一个监听器下只能设置一个默认域名。
     */
    public $DefaultServer;

    /**
     * @var boolean 是否开启Http2，注意，只有HTTPS域名才能开启Http2。
     */
    public $Http2;

    /**
     * @var string 后端目标类型，NODE表示绑定普通节点，TARGETGROUP表示绑定目标组
     */
    public $TargetType;

    /**
     * @var string TRPC被调服务器路由，ForwardType为TRPC时必填
     */
    public $TrpcCallee;

    /**
     * @var string TRPC调用服务接口，ForwardType为TRPC时必填
     */
    public $TrpcFunc;

    /**
     * @var boolean 是否开启QUIC，注意，只有HTTPS域名才能开启QUIC
     */
    public $Quic;

    /**
     * @param string $Domain 转发规则的域名。长度限制为：1~80。
     * @param string $Url 转发规则的路径。长度限制为：1~200。
     * @param integer $SessionExpireTime 会话保持时间。设置为0表示关闭会话保持，开启会话保持可取值30~3600，单位：秒。
     * @param HealthCheck $HealthCheck 健康检查信息。详情请参见：[健康检查](https://cloud.tencent.com/document/product/214/6097)
     * @param CertificateInput $Certificate 证书信息
     * @param string $Scheduler 规则的请求转发方式，可选值：WRR、LEAST_CONN、IP_HASH
分别表示按权重轮询、最小连接数、按IP哈希， 默认为 WRR。
     * @param string $ForwardType 负载均衡与后端服务之间的转发协议，目前支持 HTTP/HTTPS/TRPC
     * @param boolean $DefaultServer 是否将该域名设为默认域名，注意，一个监听器下只能设置一个默认域名。
     * @param boolean $Http2 是否开启Http2，注意，只有HTTPS域名才能开启Http2。
     * @param string $TargetType 后端目标类型，NODE表示绑定普通节点，TARGETGROUP表示绑定目标组
     * @param string $TrpcCallee TRPC被调服务器路由，ForwardType为TRPC时必填
     * @param string $TrpcFunc TRPC调用服务接口，ForwardType为TRPC时必填
     * @param boolean $Quic 是否开启QUIC，注意，只有HTTPS域名才能开启QUIC
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("SessionExpireTime",$param) and $param["SessionExpireTime"] !== null) {
            $this->SessionExpireTime = $param["SessionExpireTime"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new HealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = new CertificateInput();
            $this->Certificate->deserialize($param["Certificate"]);
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("ForwardType",$param) and $param["ForwardType"] !== null) {
            $this->ForwardType = $param["ForwardType"];
        }

        if (array_key_exists("DefaultServer",$param) and $param["DefaultServer"] !== null) {
            $this->DefaultServer = $param["DefaultServer"];
        }

        if (array_key_exists("Http2",$param) and $param["Http2"] !== null) {
            $this->Http2 = $param["Http2"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("TrpcCallee",$param) and $param["TrpcCallee"] !== null) {
            $this->TrpcCallee = $param["TrpcCallee"];
        }

        if (array_key_exists("TrpcFunc",$param) and $param["TrpcFunc"] !== null) {
            $this->TrpcFunc = $param["TrpcFunc"];
        }

        if (array_key_exists("Quic",$param) and $param["Quic"] !== null) {
            $this->Quic = $param["Quic"];
        }
    }
}
