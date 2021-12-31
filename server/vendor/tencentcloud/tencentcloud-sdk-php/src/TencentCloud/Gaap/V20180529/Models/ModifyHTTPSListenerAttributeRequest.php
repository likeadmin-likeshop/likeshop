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
 * ModifyHTTPSListenerAttribute请求参数结构体
 *
 * @method string getListenerId() 获取监听器ID
 * @method void setListenerId(string $ListenerId) 设置监听器ID
 * @method string getProxyId() 获取通道ID， 若为单通道监听器，此项必须填写
 * @method void setProxyId(string $ProxyId) 设置通道ID， 若为单通道监听器，此项必须填写
 * @method string getListenerName() 获取修改后的监听器名称
 * @method void setListenerName(string $ListenerName) 设置修改后的监听器名称
 * @method string getForwardProtocol() 获取监听器后端转发与源站之间的协议类型
 * @method void setForwardProtocol(string $ForwardProtocol) 设置监听器后端转发与源站之间的协议类型
 * @method string getCertificateId() 获取修改后的监听器服务器证书ID
 * @method void setCertificateId(string $CertificateId) 设置修改后的监听器服务器证书ID
 * @method string getClientCertificateId() 获取修改后的监听器客户端证书ID，不支持多客户端证书，多客户端证书新采用PolyClientCertificateIds字段
 * @method void setClientCertificateId(string $ClientCertificateId) 设置修改后的监听器客户端证书ID，不支持多客户端证书，多客户端证书新采用PolyClientCertificateIds字段
 * @method array getPolyClientCertificateIds() 获取新字段,修改后的监听器客户端证书ID
 * @method void setPolyClientCertificateIds(array $PolyClientCertificateIds) 设置新字段,修改后的监听器客户端证书ID
 */
class ModifyHTTPSListenerAttributeRequest extends AbstractModel
{
    /**
     * @var string 监听器ID
     */
    public $ListenerId;

    /**
     * @var string 通道ID， 若为单通道监听器，此项必须填写
     */
    public $ProxyId;

    /**
     * @var string 修改后的监听器名称
     */
    public $ListenerName;

    /**
     * @var string 监听器后端转发与源站之间的协议类型
     */
    public $ForwardProtocol;

    /**
     * @var string 修改后的监听器服务器证书ID
     */
    public $CertificateId;

    /**
     * @var string 修改后的监听器客户端证书ID，不支持多客户端证书，多客户端证书新采用PolyClientCertificateIds字段
     */
    public $ClientCertificateId;

    /**
     * @var array 新字段,修改后的监听器客户端证书ID
     */
    public $PolyClientCertificateIds;

    /**
     * @param string $ListenerId 监听器ID
     * @param string $ProxyId 通道ID， 若为单通道监听器，此项必须填写
     * @param string $ListenerName 修改后的监听器名称
     * @param string $ForwardProtocol 监听器后端转发与源站之间的协议类型
     * @param string $CertificateId 修改后的监听器服务器证书ID
     * @param string $ClientCertificateId 修改后的监听器客户端证书ID，不支持多客户端证书，多客户端证书新采用PolyClientCertificateIds字段
     * @param array $PolyClientCertificateIds 新字段,修改后的监听器客户端证书ID
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

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("ForwardProtocol",$param) and $param["ForwardProtocol"] !== null) {
            $this->ForwardProtocol = $param["ForwardProtocol"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("ClientCertificateId",$param) and $param["ClientCertificateId"] !== null) {
            $this->ClientCertificateId = $param["ClientCertificateId"];
        }

        if (array_key_exists("PolyClientCertificateIds",$param) and $param["PolyClientCertificateIds"] !== null) {
            $this->PolyClientCertificateIds = $param["PolyClientCertificateIds"];
        }
    }
}
