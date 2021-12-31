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
 * ModifyDomainAttributes请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡实例ID。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例ID。
 * @method string getListenerId() 获取负载均衡监听器ID。
 * @method void setListenerId(string $ListenerId) 设置负载均衡监听器ID。
 * @method string getDomain() 获取域名（必须是已经创建的转发规则下的域名）。
 * @method void setDomain(string $Domain) 设置域名（必须是已经创建的转发规则下的域名）。
 * @method string getNewDomain() 获取要修改的新域名。
 * @method void setNewDomain(string $NewDomain) 设置要修改的新域名。
 * @method CertificateInput getCertificate() 获取域名相关的证书信息，注意，仅对启用SNI的监听器适用。
 * @method void setCertificate(CertificateInput $Certificate) 设置域名相关的证书信息，注意，仅对启用SNI的监听器适用。
 * @method boolean getHttp2() 获取是否开启Http2，注意，只有HTTPS域名才能开启Http2。
 * @method void setHttp2(boolean $Http2) 设置是否开启Http2，注意，只有HTTPS域名才能开启Http2。
 * @method boolean getDefaultServer() 获取是否设为默认域名，注意，一个监听器下只能设置一个默认域名。
 * @method void setDefaultServer(boolean $DefaultServer) 设置是否设为默认域名，注意，一个监听器下只能设置一个默认域名。
 * @method string getNewDefaultServerDomain() 获取监听器下必须配置一个默认域名，若要关闭原默认域名，必须同时指定另一个域名作为新的默认域名。
 * @method void setNewDefaultServerDomain(string $NewDefaultServerDomain) 设置监听器下必须配置一个默认域名，若要关闭原默认域名，必须同时指定另一个域名作为新的默认域名。
 */
class ModifyDomainAttributesRequest extends AbstractModel
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
     * @var string 域名（必须是已经创建的转发规则下的域名）。
     */
    public $Domain;

    /**
     * @var string 要修改的新域名。
     */
    public $NewDomain;

    /**
     * @var CertificateInput 域名相关的证书信息，注意，仅对启用SNI的监听器适用。
     */
    public $Certificate;

    /**
     * @var boolean 是否开启Http2，注意，只有HTTPS域名才能开启Http2。
     */
    public $Http2;

    /**
     * @var boolean 是否设为默认域名，注意，一个监听器下只能设置一个默认域名。
     */
    public $DefaultServer;

    /**
     * @var string 监听器下必须配置一个默认域名，若要关闭原默认域名，必须同时指定另一个域名作为新的默认域名。
     */
    public $NewDefaultServerDomain;

    /**
     * @param string $LoadBalancerId 负载均衡实例ID。
     * @param string $ListenerId 负载均衡监听器ID。
     * @param string $Domain 域名（必须是已经创建的转发规则下的域名）。
     * @param string $NewDomain 要修改的新域名。
     * @param CertificateInput $Certificate 域名相关的证书信息，注意，仅对启用SNI的监听器适用。
     * @param boolean $Http2 是否开启Http2，注意，只有HTTPS域名才能开启Http2。
     * @param boolean $DefaultServer 是否设为默认域名，注意，一个监听器下只能设置一个默认域名。
     * @param string $NewDefaultServerDomain 监听器下必须配置一个默认域名，若要关闭原默认域名，必须同时指定另一个域名作为新的默认域名。
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

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("NewDomain",$param) and $param["NewDomain"] !== null) {
            $this->NewDomain = $param["NewDomain"];
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = new CertificateInput();
            $this->Certificate->deserialize($param["Certificate"]);
        }

        if (array_key_exists("Http2",$param) and $param["Http2"] !== null) {
            $this->Http2 = $param["Http2"];
        }

        if (array_key_exists("DefaultServer",$param) and $param["DefaultServer"] !== null) {
            $this->DefaultServer = $param["DefaultServer"];
        }

        if (array_key_exists("NewDefaultServerDomain",$param) and $param["NewDefaultServerDomain"] !== null) {
            $this->NewDefaultServerDomain = $param["NewDefaultServerDomain"];
        }
    }
}
