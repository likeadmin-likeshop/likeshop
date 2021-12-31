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
 * 获取流量镜像的监听器列表信息时返回的与流量镜像绑定的监听器信息。
 *
 * @method string getListenerId() 获取监听器ID。
 * @method void setListenerId(string $ListenerId) 设置监听器ID。
 * @method string getListenerName() 获取监听器名称。
 * @method void setListenerName(string $ListenerName) 设置监听器名称。
 * @method string getProtocol() 获取七层监听器协议类型，可选值：http,https。
 * @method void setProtocol(string $Protocol) 设置七层监听器协议类型，可选值：http,https。
 * @method integer getLoadBalancerPort() 获取监听器的监听端口。
 * @method void setLoadBalancerPort(integer $LoadBalancerPort) 设置监听器的监听端口。
 * @method integer getBandwidth() 获取当前带宽。
 * @method void setBandwidth(integer $Bandwidth) 设置当前带宽。
 * @method integer getMaxBandwidth() 获取带宽上限。
 * @method void setMaxBandwidth(integer $MaxBandwidth) 设置带宽上限。
 * @method string getListenerType() 获取监听器类型。
 * @method void setListenerType(string $ListenerType) 设置监听器类型。
 * @method integer getSslMode() 获取认证方式：0（不认证，用于http），1（单向认证，用于https），2（双向认证，用于https）。
 * @method void setSslMode(integer $SslMode) 设置认证方式：0（不认证，用于http），1（单向认证，用于https），2（双向认证，用于https）。
 * @method string getCertId() 获取服务端证书ID。
 * @method void setCertId(string $CertId) 设置服务端证书ID。
 * @method string getCertCaId() 获取客户端证书ID。
 * @method void setCertCaId(string $CertCaId) 设置客户端证书ID。
 * @method string getAddTimestamp() 获取添加时间。
 * @method void setAddTimestamp(string $AddTimestamp) 设置添加时间。
 * @method string getLoadBalancerId() 获取负载均衡ID。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡ID。
 * @method string getVpcName() 获取私有网络名称。
 * @method void setVpcName(string $VpcName) 设置私有网络名称。
 * @method string getVpcCidrBlock() 获取私有网络Cidr。
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置私有网络Cidr。
 * @method array getLoadBalancerVips() 获取负载均衡的VIP。
 * @method void setLoadBalancerVips(array $LoadBalancerVips) 设置负载均衡的VIP。
 * @method string getLoadBalancerName() 获取负载均衡名称。
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置负载均衡名称。
 * @method array getLoadBalancerVipv6s() 获取负载均衡的IPV6的VIP。
 * @method void setLoadBalancerVipv6s(array $LoadBalancerVipv6s) 设置负载均衡的IPV6的VIP。
 * @method string getIpProtocolType() 获取支持的IP协议类型。ipv4或者是ipv6。
 * @method void setIpProtocolType(string $IpProtocolType) 设置支持的IP协议类型。ipv4或者是ipv6。
 */
class TrafficMirrorListener extends AbstractModel
{
    /**
     * @var string 监听器ID。
     */
    public $ListenerId;

    /**
     * @var string 监听器名称。
     */
    public $ListenerName;

    /**
     * @var string 七层监听器协议类型，可选值：http,https。
     */
    public $Protocol;

    /**
     * @var integer 监听器的监听端口。
     */
    public $LoadBalancerPort;

    /**
     * @var integer 当前带宽。
     */
    public $Bandwidth;

    /**
     * @var integer 带宽上限。
     */
    public $MaxBandwidth;

    /**
     * @var string 监听器类型。
     */
    public $ListenerType;

    /**
     * @var integer 认证方式：0（不认证，用于http），1（单向认证，用于https），2（双向认证，用于https）。
     */
    public $SslMode;

    /**
     * @var string 服务端证书ID。
     */
    public $CertId;

    /**
     * @var string 客户端证书ID。
     */
    public $CertCaId;

    /**
     * @var string 添加时间。
     */
    public $AddTimestamp;

    /**
     * @var string 负载均衡ID。
     */
    public $LoadBalancerId;

    /**
     * @var string 私有网络名称。
     */
    public $VpcName;

    /**
     * @var string 私有网络Cidr。
     */
    public $VpcCidrBlock;

    /**
     * @var array 负载均衡的VIP。
     */
    public $LoadBalancerVips;

    /**
     * @var string 负载均衡名称。
     */
    public $LoadBalancerName;

    /**
     * @var array 负载均衡的IPV6的VIP。
     */
    public $LoadBalancerVipv6s;

    /**
     * @var string 支持的IP协议类型。ipv4或者是ipv6。
     */
    public $IpProtocolType;

    /**
     * @param string $ListenerId 监听器ID。
     * @param string $ListenerName 监听器名称。
     * @param string $Protocol 七层监听器协议类型，可选值：http,https。
     * @param integer $LoadBalancerPort 监听器的监听端口。
     * @param integer $Bandwidth 当前带宽。
     * @param integer $MaxBandwidth 带宽上限。
     * @param string $ListenerType 监听器类型。
     * @param integer $SslMode 认证方式：0（不认证，用于http），1（单向认证，用于https），2（双向认证，用于https）。
     * @param string $CertId 服务端证书ID。
     * @param string $CertCaId 客户端证书ID。
     * @param string $AddTimestamp 添加时间。
     * @param string $LoadBalancerId 负载均衡ID。
     * @param string $VpcName 私有网络名称。
     * @param string $VpcCidrBlock 私有网络Cidr。
     * @param array $LoadBalancerVips 负载均衡的VIP。
     * @param string $LoadBalancerName 负载均衡名称。
     * @param array $LoadBalancerVipv6s 负载均衡的IPV6的VIP。
     * @param string $IpProtocolType 支持的IP协议类型。ipv4或者是ipv6。
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

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("LoadBalancerPort",$param) and $param["LoadBalancerPort"] !== null) {
            $this->LoadBalancerPort = $param["LoadBalancerPort"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("MaxBandwidth",$param) and $param["MaxBandwidth"] !== null) {
            $this->MaxBandwidth = $param["MaxBandwidth"];
        }

        if (array_key_exists("ListenerType",$param) and $param["ListenerType"] !== null) {
            $this->ListenerType = $param["ListenerType"];
        }

        if (array_key_exists("SslMode",$param) and $param["SslMode"] !== null) {
            $this->SslMode = $param["SslMode"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("CertCaId",$param) and $param["CertCaId"] !== null) {
            $this->CertCaId = $param["CertCaId"];
        }

        if (array_key_exists("AddTimestamp",$param) and $param["AddTimestamp"] !== null) {
            $this->AddTimestamp = $param["AddTimestamp"];
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("LoadBalancerVips",$param) and $param["LoadBalancerVips"] !== null) {
            $this->LoadBalancerVips = $param["LoadBalancerVips"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("LoadBalancerVipv6s",$param) and $param["LoadBalancerVipv6s"] !== null) {
            $this->LoadBalancerVipv6s = $param["LoadBalancerVipv6s"];
        }

        if (array_key_exists("IpProtocolType",$param) and $param["IpProtocolType"] !== null) {
            $this->IpProtocolType = $param["IpProtocolType"];
        }
    }
}
