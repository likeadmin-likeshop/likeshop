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
 * SetAuthentication请求参数结构体
 *
 * @method string getListenerId() 获取监听器ID。
 * @method void setListenerId(string $ListenerId) 设置监听器ID。
 * @method string getDomain() 获取需要进行高级配置的域名，该域名为监听器下的转发规则的域名。
 * @method void setDomain(string $Domain) 设置需要进行高级配置的域名，该域名为监听器下的转发规则的域名。
 * @method integer getBasicAuth() 获取基础认证开关，其中：
0，关闭基础认证；
1，开启基础认证。
默认为0。
 * @method void setBasicAuth(integer $BasicAuth) 设置基础认证开关，其中：
0，关闭基础认证；
1，开启基础认证。
默认为0。
 * @method integer getGaapAuth() 获取通道认证开关，用于源站对Gaap的认证，其中：
0，关闭通道认证；
1，开启通道认证。
默认为0。
 * @method void setGaapAuth(integer $GaapAuth) 设置通道认证开关，用于源站对Gaap的认证，其中：
0，关闭通道认证；
1，开启通道认证。
默认为0。
 * @method integer getRealServerAuth() 获取源站认证开关，用于Gaap对服务器的认证，其中：
0，关闭源站认证；
1，开启源站认证。
默认为0。
 * @method void setRealServerAuth(integer $RealServerAuth) 设置源站认证开关，用于Gaap对服务器的认证，其中：
0，关闭源站认证；
1，开启源站认证。
默认为0。
 * @method string getBasicAuthConfId() 获取基础认证配置ID，从证书管理页获取。
 * @method void setBasicAuthConfId(string $BasicAuthConfId) 设置基础认证配置ID，从证书管理页获取。
 * @method string getGaapCertificateId() 获取通道SSL证书ID，从证书管理页获取。
 * @method void setGaapCertificateId(string $GaapCertificateId) 设置通道SSL证书ID，从证书管理页获取。
 * @method string getRealServerCertificateId() 获取源站CA证书ID，从证书管理页获取。源站认证时，填写该参数或RealServerCertificateId参数
 * @method void setRealServerCertificateId(string $RealServerCertificateId) 设置源站CA证书ID，从证书管理页获取。源站认证时，填写该参数或RealServerCertificateId参数
 * @method string getRealServerCertificateDomain() 获取源站证书域名。
 * @method void setRealServerCertificateDomain(string $RealServerCertificateDomain) 设置源站证书域名。
 * @method array getPolyRealServerCertificateIds() 获取多源站CA证书ID，从证书管理页获取。源站认证时，填写该参数或RealServerCertificateId参数
 * @method void setPolyRealServerCertificateIds(array $PolyRealServerCertificateIds) 设置多源站CA证书ID，从证书管理页获取。源站认证时，填写该参数或RealServerCertificateId参数
 */
class SetAuthenticationRequest extends AbstractModel
{
    /**
     * @var string 监听器ID。
     */
    public $ListenerId;

    /**
     * @var string 需要进行高级配置的域名，该域名为监听器下的转发规则的域名。
     */
    public $Domain;

    /**
     * @var integer 基础认证开关，其中：
0，关闭基础认证；
1，开启基础认证。
默认为0。
     */
    public $BasicAuth;

    /**
     * @var integer 通道认证开关，用于源站对Gaap的认证，其中：
0，关闭通道认证；
1，开启通道认证。
默认为0。
     */
    public $GaapAuth;

    /**
     * @var integer 源站认证开关，用于Gaap对服务器的认证，其中：
0，关闭源站认证；
1，开启源站认证。
默认为0。
     */
    public $RealServerAuth;

    /**
     * @var string 基础认证配置ID，从证书管理页获取。
     */
    public $BasicAuthConfId;

    /**
     * @var string 通道SSL证书ID，从证书管理页获取。
     */
    public $GaapCertificateId;

    /**
     * @var string 源站CA证书ID，从证书管理页获取。源站认证时，填写该参数或RealServerCertificateId参数
     */
    public $RealServerCertificateId;

    /**
     * @var string 源站证书域名。
     */
    public $RealServerCertificateDomain;

    /**
     * @var array 多源站CA证书ID，从证书管理页获取。源站认证时，填写该参数或RealServerCertificateId参数
     */
    public $PolyRealServerCertificateIds;

    /**
     * @param string $ListenerId 监听器ID。
     * @param string $Domain 需要进行高级配置的域名，该域名为监听器下的转发规则的域名。
     * @param integer $BasicAuth 基础认证开关，其中：
0，关闭基础认证；
1，开启基础认证。
默认为0。
     * @param integer $GaapAuth 通道认证开关，用于源站对Gaap的认证，其中：
0，关闭通道认证；
1，开启通道认证。
默认为0。
     * @param integer $RealServerAuth 源站认证开关，用于Gaap对服务器的认证，其中：
0，关闭源站认证；
1，开启源站认证。
默认为0。
     * @param string $BasicAuthConfId 基础认证配置ID，从证书管理页获取。
     * @param string $GaapCertificateId 通道SSL证书ID，从证书管理页获取。
     * @param string $RealServerCertificateId 源站CA证书ID，从证书管理页获取。源站认证时，填写该参数或RealServerCertificateId参数
     * @param string $RealServerCertificateDomain 源站证书域名。
     * @param array $PolyRealServerCertificateIds 多源站CA证书ID，从证书管理页获取。源站认证时，填写该参数或RealServerCertificateId参数
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

        if (array_key_exists("BasicAuth",$param) and $param["BasicAuth"] !== null) {
            $this->BasicAuth = $param["BasicAuth"];
        }

        if (array_key_exists("GaapAuth",$param) and $param["GaapAuth"] !== null) {
            $this->GaapAuth = $param["GaapAuth"];
        }

        if (array_key_exists("RealServerAuth",$param) and $param["RealServerAuth"] !== null) {
            $this->RealServerAuth = $param["RealServerAuth"];
        }

        if (array_key_exists("BasicAuthConfId",$param) and $param["BasicAuthConfId"] !== null) {
            $this->BasicAuthConfId = $param["BasicAuthConfId"];
        }

        if (array_key_exists("GaapCertificateId",$param) and $param["GaapCertificateId"] !== null) {
            $this->GaapCertificateId = $param["GaapCertificateId"];
        }

        if (array_key_exists("RealServerCertificateId",$param) and $param["RealServerCertificateId"] !== null) {
            $this->RealServerCertificateId = $param["RealServerCertificateId"];
        }

        if (array_key_exists("RealServerCertificateDomain",$param) and $param["RealServerCertificateDomain"] !== null) {
            $this->RealServerCertificateDomain = $param["RealServerCertificateDomain"];
        }

        if (array_key_exists("PolyRealServerCertificateIds",$param) and $param["PolyRealServerCertificateIds"] !== null) {
            $this->PolyRealServerCertificateIds = $param["PolyRealServerCertificateIds"];
        }
    }
}
