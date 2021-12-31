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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名https配置。
 *
 * @method string getSwitch() 获取https配置开关，on或off。开启https配置的域名在部署中状态，开关保持off。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(string $Switch) 设置https配置开关，on或off。开启https配置的域名在部署中状态，开关保持off。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttp2() 获取是否开启http2，on或off。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttp2(string $Http2) 设置是否开启http2，on或off。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOcspStapling() 获取是否开启OCSP功能，on或off。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcspStapling(string $OcspStapling) 设置是否开启OCSP功能，on或off。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVerifyClient() 获取是否开启客户端证书校验功能，on或off，开启时必选上传客户端证书信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVerifyClient(string $VerifyClient) 设置是否开启客户端证书校验功能，on或off，开启时必选上传客户端证书信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ServerCert getCertInfo() 获取服务器证书配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertInfo(ServerCert $CertInfo) 设置服务器证书配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClientCert getClientCertInfo() 获取客户端证书配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientCertInfo(ClientCert $ClientCertInfo) 设置客户端证书配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpdy() 获取是否开启Spdy，on或off。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpdy(string $Spdy) 设置是否开启Spdy，on或off。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSslStatus() 获取https证书部署状态，closed，deploying，deployed，failed分别表示已关闭，部署中，部署成功，部署失败。不可作为入参使用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSslStatus(string $SslStatus) 设置https证书部署状态，closed，deploying，deployed，failed分别表示已关闭，部署中，部署成功，部署失败。不可作为入参使用。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Hsts getHsts() 获取Hsts配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHsts(Hsts $Hsts) 设置Hsts配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class Https extends AbstractModel
{
    /**
     * @var string https配置开关，on或off。开启https配置的域名在部署中状态，开关保持off。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @var string 是否开启http2，on或off。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Http2;

    /**
     * @var string 是否开启OCSP功能，on或off。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcspStapling;

    /**
     * @var string 是否开启客户端证书校验功能，on或off，开启时必选上传客户端证书信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VerifyClient;

    /**
     * @var ServerCert 服务器证书配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertInfo;

    /**
     * @var ClientCert 客户端证书配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientCertInfo;

    /**
     * @var string 是否开启Spdy，on或off。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Spdy;

    /**
     * @var string https证书部署状态，closed，deploying，deployed，failed分别表示已关闭，部署中，部署成功，部署失败。不可作为入参使用。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SslStatus;

    /**
     * @var Hsts Hsts配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Hsts;

    /**
     * @param string $Switch https配置开关，on或off。开启https配置的域名在部署中状态，开关保持off。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Http2 是否开启http2，on或off。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OcspStapling 是否开启OCSP功能，on或off。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VerifyClient 是否开启客户端证书校验功能，on或off，开启时必选上传客户端证书信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ServerCert $CertInfo 服务器证书配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClientCert $ClientCertInfo 客户端证书配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Spdy 是否开启Spdy，on或off。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SslStatus https证书部署状态，closed，deploying，deployed，failed分别表示已关闭，部署中，部署成功，部署失败。不可作为入参使用。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Hsts $Hsts Hsts配置
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Http2",$param) and $param["Http2"] !== null) {
            $this->Http2 = $param["Http2"];
        }

        if (array_key_exists("OcspStapling",$param) and $param["OcspStapling"] !== null) {
            $this->OcspStapling = $param["OcspStapling"];
        }

        if (array_key_exists("VerifyClient",$param) and $param["VerifyClient"] !== null) {
            $this->VerifyClient = $param["VerifyClient"];
        }

        if (array_key_exists("CertInfo",$param) and $param["CertInfo"] !== null) {
            $this->CertInfo = new ServerCert();
            $this->CertInfo->deserialize($param["CertInfo"]);
        }

        if (array_key_exists("ClientCertInfo",$param) and $param["ClientCertInfo"] !== null) {
            $this->ClientCertInfo = new ClientCert();
            $this->ClientCertInfo->deserialize($param["ClientCertInfo"]);
        }

        if (array_key_exists("Spdy",$param) and $param["Spdy"] !== null) {
            $this->Spdy = $param["Spdy"];
        }

        if (array_key_exists("SslStatus",$param) and $param["SslStatus"] !== null) {
            $this->SslStatus = $param["SslStatus"];
        }

        if (array_key_exists("Hsts",$param) and $param["Hsts"] !== null) {
            $this->Hsts = new Hsts();
            $this->Hsts->deserialize($param["Hsts"]);
        }
    }
}
