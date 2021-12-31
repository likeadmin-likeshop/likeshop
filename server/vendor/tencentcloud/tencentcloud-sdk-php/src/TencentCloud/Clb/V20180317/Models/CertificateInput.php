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
 * 证书信息
 *
 * @method string getSSLMode() 获取认证类型，UNIDIRECTIONAL：单向认证，MUTUAL：双向认证
 * @method void setSSLMode(string $SSLMode) 设置认证类型，UNIDIRECTIONAL：单向认证，MUTUAL：双向认证
 * @method string getCertId() 获取服务端证书的 ID，如果不填写此项则必须上传证书，包括 CertContent，CertKey，CertName。
 * @method void setCertId(string $CertId) 设置服务端证书的 ID，如果不填写此项则必须上传证书，包括 CertContent，CertKey，CertName。
 * @method string getCertCaId() 获取客户端证书的 ID，当监听器采用双向认证，即 SSLMode=MUTUAL 时，如果不填写此项则必须上传客户端证书，包括 CertCaContent，CertCaName。
 * @method void setCertCaId(string $CertCaId) 设置客户端证书的 ID，当监听器采用双向认证，即 SSLMode=MUTUAL 时，如果不填写此项则必须上传客户端证书，包括 CertCaContent，CertCaName。
 * @method string getCertName() 获取上传服务端证书的名称，如果没有 CertId，则此项必传。
 * @method void setCertName(string $CertName) 设置上传服务端证书的名称，如果没有 CertId，则此项必传。
 * @method string getCertKey() 获取上传服务端证书的 key，如果没有 CertId，则此项必传。
 * @method void setCertKey(string $CertKey) 设置上传服务端证书的 key，如果没有 CertId，则此项必传。
 * @method string getCertContent() 获取上传服务端证书的内容，如果没有 CertId，则此项必传。
 * @method void setCertContent(string $CertContent) 设置上传服务端证书的内容，如果没有 CertId，则此项必传。
 * @method string getCertCaName() 获取上传客户端 CA 证书的名称，如果 SSLMode=mutual，如果没有 CertCaId，则此项必传。
 * @method void setCertCaName(string $CertCaName) 设置上传客户端 CA 证书的名称，如果 SSLMode=mutual，如果没有 CertCaId，则此项必传。
 * @method string getCertCaContent() 获取上传客户端证书的内容，如果 SSLMode=mutual，如果没有 CertCaId，则此项必传。
 * @method void setCertCaContent(string $CertCaContent) 设置上传客户端证书的内容，如果 SSLMode=mutual，如果没有 CertCaId，则此项必传。
 */
class CertificateInput extends AbstractModel
{
    /**
     * @var string 认证类型，UNIDIRECTIONAL：单向认证，MUTUAL：双向认证
     */
    public $SSLMode;

    /**
     * @var string 服务端证书的 ID，如果不填写此项则必须上传证书，包括 CertContent，CertKey，CertName。
     */
    public $CertId;

    /**
     * @var string 客户端证书的 ID，当监听器采用双向认证，即 SSLMode=MUTUAL 时，如果不填写此项则必须上传客户端证书，包括 CertCaContent，CertCaName。
     */
    public $CertCaId;

    /**
     * @var string 上传服务端证书的名称，如果没有 CertId，则此项必传。
     */
    public $CertName;

    /**
     * @var string 上传服务端证书的 key，如果没有 CertId，则此项必传。
     */
    public $CertKey;

    /**
     * @var string 上传服务端证书的内容，如果没有 CertId，则此项必传。
     */
    public $CertContent;

    /**
     * @var string 上传客户端 CA 证书的名称，如果 SSLMode=mutual，如果没有 CertCaId，则此项必传。
     */
    public $CertCaName;

    /**
     * @var string 上传客户端证书的内容，如果 SSLMode=mutual，如果没有 CertCaId，则此项必传。
     */
    public $CertCaContent;

    /**
     * @param string $SSLMode 认证类型，UNIDIRECTIONAL：单向认证，MUTUAL：双向认证
     * @param string $CertId 服务端证书的 ID，如果不填写此项则必须上传证书，包括 CertContent，CertKey，CertName。
     * @param string $CertCaId 客户端证书的 ID，当监听器采用双向认证，即 SSLMode=MUTUAL 时，如果不填写此项则必须上传客户端证书，包括 CertCaContent，CertCaName。
     * @param string $CertName 上传服务端证书的名称，如果没有 CertId，则此项必传。
     * @param string $CertKey 上传服务端证书的 key，如果没有 CertId，则此项必传。
     * @param string $CertContent 上传服务端证书的内容，如果没有 CertId，则此项必传。
     * @param string $CertCaName 上传客户端 CA 证书的名称，如果 SSLMode=mutual，如果没有 CertCaId，则此项必传。
     * @param string $CertCaContent 上传客户端证书的内容，如果 SSLMode=mutual，如果没有 CertCaId，则此项必传。
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
        if (array_key_exists("SSLMode",$param) and $param["SSLMode"] !== null) {
            $this->SSLMode = $param["SSLMode"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("CertCaId",$param) and $param["CertCaId"] !== null) {
            $this->CertCaId = $param["CertCaId"];
        }

        if (array_key_exists("CertName",$param) and $param["CertName"] !== null) {
            $this->CertName = $param["CertName"];
        }

        if (array_key_exists("CertKey",$param) and $param["CertKey"] !== null) {
            $this->CertKey = $param["CertKey"];
        }

        if (array_key_exists("CertContent",$param) and $param["CertContent"] !== null) {
            $this->CertContent = $param["CertContent"];
        }

        if (array_key_exists("CertCaName",$param) and $param["CertCaName"] !== null) {
            $this->CertCaName = $param["CertCaName"];
        }

        if (array_key_exists("CertCaContent",$param) and $param["CertCaContent"] !== null) {
            $this->CertCaContent = $param["CertCaContent"];
        }
    }
}
