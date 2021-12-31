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
 * 获取黑石负载均衡七层监听器时返回的七层监听器信息。
 *
 * @method string getListenerId() 获取七层监听器实例ID。
 * @method void setListenerId(string $ListenerId) 设置七层监听器实例ID。
 * @method string getListenerName() 获取七层监听器名称。
 * @method void setListenerName(string $ListenerName) 设置七层监听器名称。
 * @method string getProtocol() 获取七层监听器协议类型，可选值：http,https。
 * @method void setProtocol(string $Protocol) 设置七层监听器协议类型，可选值：http,https。
 * @method integer getLoadBalancerPort() 获取七层监听器的监听端口。
 * @method void setLoadBalancerPort(integer $LoadBalancerPort) 设置七层监听器的监听端口。
 * @method integer getBandwidth() 获取计费模式为按固定带宽方式时监听器的限速值，单位：Mbps。
 * @method void setBandwidth(integer $Bandwidth) 设置计费模式为按固定带宽方式时监听器的限速值，单位：Mbps。
 * @method string getListenerType() 获取监听器的类别：L4Listener（四层监听器），L7Listener（七层监听器）。
 * @method void setListenerType(string $ListenerType) 设置监听器的类别：L4Listener（四层监听器），L7Listener（七层监听器）。
 * @method integer getSslMode() 获取七层监听器的认证方式：0（不认证，用于http），1（单向认证，用于https），2（双向认证，用于https）。
 * @method void setSslMode(integer $SslMode) 设置七层监听器的认证方式：0（不认证，用于http），1（单向认证，用于https），2（双向认证，用于https）。
 * @method string getCertId() 获取七层监听器关联的服务端证书ID。
 * @method void setCertId(string $CertId) 设置七层监听器关联的服务端证书ID。
 * @method string getCertCaId() 获取七层监听器关联的客户端证书ID。
 * @method void setCertCaId(string $CertCaId) 设置七层监听器关联的客户端证书ID。
 * @method integer getStatus() 获取监听器当前状态（0代表创建中，1代表正常运行，2代表创建失败，3代表删除中，4代表删除失败）。
 * @method void setStatus(integer $Status) 设置监听器当前状态（0代表创建中，1代表正常运行，2代表创建失败，3代表删除中，4代表删除失败）。
 * @method string getAddTimestamp() 获取创建时间戳。
 * @method void setAddTimestamp(string $AddTimestamp) 设置创建时间戳。
 * @method integer getForwardProtocol() 获取https转发类型。0：https。1：spdy。2：http2。3：spdy+http2。
 * @method void setForwardProtocol(integer $ForwardProtocol) 设置https转发类型。0：https。1：spdy。2：http2。3：spdy+http2。
 */
class L7Listener extends AbstractModel
{
    /**
     * @var string 七层监听器实例ID。
     */
    public $ListenerId;

    /**
     * @var string 七层监听器名称。
     */
    public $ListenerName;

    /**
     * @var string 七层监听器协议类型，可选值：http,https。
     */
    public $Protocol;

    /**
     * @var integer 七层监听器的监听端口。
     */
    public $LoadBalancerPort;

    /**
     * @var integer 计费模式为按固定带宽方式时监听器的限速值，单位：Mbps。
     */
    public $Bandwidth;

    /**
     * @var string 监听器的类别：L4Listener（四层监听器），L7Listener（七层监听器）。
     */
    public $ListenerType;

    /**
     * @var integer 七层监听器的认证方式：0（不认证，用于http），1（单向认证，用于https），2（双向认证，用于https）。
     */
    public $SslMode;

    /**
     * @var string 七层监听器关联的服务端证书ID。
     */
    public $CertId;

    /**
     * @var string 七层监听器关联的客户端证书ID。
     */
    public $CertCaId;

    /**
     * @var integer 监听器当前状态（0代表创建中，1代表正常运行，2代表创建失败，3代表删除中，4代表删除失败）。
     */
    public $Status;

    /**
     * @var string 创建时间戳。
     */
    public $AddTimestamp;

    /**
     * @var integer https转发类型。0：https。1：spdy。2：http2。3：spdy+http2。
     */
    public $ForwardProtocol;

    /**
     * @param string $ListenerId 七层监听器实例ID。
     * @param string $ListenerName 七层监听器名称。
     * @param string $Protocol 七层监听器协议类型，可选值：http,https。
     * @param integer $LoadBalancerPort 七层监听器的监听端口。
     * @param integer $Bandwidth 计费模式为按固定带宽方式时监听器的限速值，单位：Mbps。
     * @param string $ListenerType 监听器的类别：L4Listener（四层监听器），L7Listener（七层监听器）。
     * @param integer $SslMode 七层监听器的认证方式：0（不认证，用于http），1（单向认证，用于https），2（双向认证，用于https）。
     * @param string $CertId 七层监听器关联的服务端证书ID。
     * @param string $CertCaId 七层监听器关联的客户端证书ID。
     * @param integer $Status 监听器当前状态（0代表创建中，1代表正常运行，2代表创建失败，3代表删除中，4代表删除失败）。
     * @param string $AddTimestamp 创建时间戳。
     * @param integer $ForwardProtocol https转发类型。0：https。1：spdy。2：http2。3：spdy+http2。
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AddTimestamp",$param) and $param["AddTimestamp"] !== null) {
            $this->AddTimestamp = $param["AddTimestamp"];
        }

        if (array_key_exists("ForwardProtocol",$param) and $param["ForwardProtocol"] !== null) {
            $this->ForwardProtocol = $param["ForwardProtocol"];
        }
    }
}
