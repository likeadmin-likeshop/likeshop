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
 * ModifyL7Listener请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡实例ID，可通过接口DescribeLoadBalancers查询。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例ID，可通过接口DescribeLoadBalancers查询。
 * @method string getListenerId() 获取七层监听器实例ID，可通过接口DescribeL7Listeners查询。
 * @method void setListenerId(string $ListenerId) 设置七层监听器实例ID，可通过接口DescribeL7Listeners查询。
 * @method string getListenerName() 获取七层监听器名称。
 * @method void setListenerName(string $ListenerName) 设置七层监听器名称。
 * @method integer getSslMode() 获取认证方式：0（不认证，用于http），1（单向认证，用于https），2（双向认证，用于https）。
 * @method void setSslMode(integer $SslMode) 设置认证方式：0（不认证，用于http），1（单向认证，用于https），2（双向认证，用于https）。
 * @method string getCertId() 获取服务端证书ID。
 * @method void setCertId(string $CertId) 设置服务端证书ID。
 * @method string getCertName() 获取服务端证书名称。
 * @method void setCertName(string $CertName) 设置服务端证书名称。
 * @method string getCertContent() 获取服务端证书内容。
 * @method void setCertContent(string $CertContent) 设置服务端证书内容。
 * @method string getCertKey() 获取服务端证书密钥。
 * @method void setCertKey(string $CertKey) 设置服务端证书密钥。
 * @method string getCertCaId() 获取客户端证书ID。
 * @method void setCertCaId(string $CertCaId) 设置客户端证书ID。
 * @method string getCertCaName() 获取客户端证书名称。
 * @method void setCertCaName(string $CertCaName) 设置客户端证书名称。
 * @method string getCertCaContent() 获取客户端证书内容。
 * @method void setCertCaContent(string $CertCaContent) 设置客户端证书内容。
 * @method integer getBandwidth() 获取计费模式为按固定带宽方式时监听器的限速值，可选值：0-1000，单位：Mbps。
 * @method void setBandwidth(integer $Bandwidth) 设置计费模式为按固定带宽方式时监听器的限速值，可选值：0-1000，单位：Mbps。
 * @method integer getForwardProtocol() 获取转发协议。当监听器Protocol为https时并且SslMode为1或2时，有意义。可选的值为0：https，1：spdy，2：http2，3：spdy+http2。
 * @method void setForwardProtocol(integer $ForwardProtocol) 设置转发协议。当监听器Protocol为https时并且SslMode为1或2时，有意义。可选的值为0：https，1：spdy，2：http2，3：spdy+http2。
 */
class ModifyL7ListenerRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例ID，可通过接口DescribeLoadBalancers查询。
     */
    public $LoadBalancerId;

    /**
     * @var string 七层监听器实例ID，可通过接口DescribeL7Listeners查询。
     */
    public $ListenerId;

    /**
     * @var string 七层监听器名称。
     */
    public $ListenerName;

    /**
     * @var integer 认证方式：0（不认证，用于http），1（单向认证，用于https），2（双向认证，用于https）。
     */
    public $SslMode;

    /**
     * @var string 服务端证书ID。
     */
    public $CertId;

    /**
     * @var string 服务端证书名称。
     */
    public $CertName;

    /**
     * @var string 服务端证书内容。
     */
    public $CertContent;

    /**
     * @var string 服务端证书密钥。
     */
    public $CertKey;

    /**
     * @var string 客户端证书ID。
     */
    public $CertCaId;

    /**
     * @var string 客户端证书名称。
     */
    public $CertCaName;

    /**
     * @var string 客户端证书内容。
     */
    public $CertCaContent;

    /**
     * @var integer 计费模式为按固定带宽方式时监听器的限速值，可选值：0-1000，单位：Mbps。
     */
    public $Bandwidth;

    /**
     * @var integer 转发协议。当监听器Protocol为https时并且SslMode为1或2时，有意义。可选的值为0：https，1：spdy，2：http2，3：spdy+http2。
     */
    public $ForwardProtocol;

    /**
     * @param string $LoadBalancerId 负载均衡实例ID，可通过接口DescribeLoadBalancers查询。
     * @param string $ListenerId 七层监听器实例ID，可通过接口DescribeL7Listeners查询。
     * @param string $ListenerName 七层监听器名称。
     * @param integer $SslMode 认证方式：0（不认证，用于http），1（单向认证，用于https），2（双向认证，用于https）。
     * @param string $CertId 服务端证书ID。
     * @param string $CertName 服务端证书名称。
     * @param string $CertContent 服务端证书内容。
     * @param string $CertKey 服务端证书密钥。
     * @param string $CertCaId 客户端证书ID。
     * @param string $CertCaName 客户端证书名称。
     * @param string $CertCaContent 客户端证书内容。
     * @param integer $Bandwidth 计费模式为按固定带宽方式时监听器的限速值，可选值：0-1000，单位：Mbps。
     * @param integer $ForwardProtocol 转发协议。当监听器Protocol为https时并且SslMode为1或2时，有意义。可选的值为0：https，1：spdy，2：http2，3：spdy+http2。
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

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("SslMode",$param) and $param["SslMode"] !== null) {
            $this->SslMode = $param["SslMode"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("CertName",$param) and $param["CertName"] !== null) {
            $this->CertName = $param["CertName"];
        }

        if (array_key_exists("CertContent",$param) and $param["CertContent"] !== null) {
            $this->CertContent = $param["CertContent"];
        }

        if (array_key_exists("CertKey",$param) and $param["CertKey"] !== null) {
            $this->CertKey = $param["CertKey"];
        }

        if (array_key_exists("CertCaId",$param) and $param["CertCaId"] !== null) {
            $this->CertCaId = $param["CertCaId"];
        }

        if (array_key_exists("CertCaName",$param) and $param["CertCaName"] !== null) {
            $this->CertCaName = $param["CertCaName"];
        }

        if (array_key_exists("CertCaContent",$param) and $param["CertCaContent"] !== null) {
            $this->CertCaContent = $param["CertCaContent"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("ForwardProtocol",$param) and $param["ForwardProtocol"] !== null) {
            $this->ForwardProtocol = $param["ForwardProtocol"];
        }
    }
}
