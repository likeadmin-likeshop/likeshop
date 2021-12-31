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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名 https 加速配置，默认为关闭状态
 *
 * @method string getSwitch() 获取https 配置开关
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(string $Switch) 设置https 配置开关
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttp2() 获取http2 配置开关
on：开启
off：关闭
初次启用 https 加速会默认开启 http2 配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttp2(string $Http2) 设置http2 配置开关
on：开启
off：关闭
初次启用 https 加速会默认开启 http2 配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOcspStapling() 获取OCSP 配置开关
on：开启
off：关闭
默认为关闭状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcspStapling(string $OcspStapling) 设置OCSP 配置开关
on：开启
off：关闭
默认为关闭状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVerifyClient() 获取客户端证书校验功能
on：开启
off：关闭
默认为关闭状态，开启时需要上传客户端证书信息，该配置项目前在灰度中，尚未全量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVerifyClient(string $VerifyClient) 设置客户端证书校验功能
on：开启
off：关闭
默认为关闭状态，开启时需要上传客户端证书信息，该配置项目前在灰度中，尚未全量
注意：此字段可能返回 null，表示取不到有效值。
 * @method ServerCert getCertInfo() 获取服务端证书配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertInfo(ServerCert $CertInfo) 设置服务端证书配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClientCert getClientCertInfo() 获取客户端证书配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientCertInfo(ClientCert $ClientCertInfo) 设置客户端证书配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpdy() 获取Spdy 配置开关
on：开启
off：关闭
默认为关闭状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpdy(string $Spdy) 设置Spdy 配置开关
on：开启
off：关闭
默认为关闭状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSslStatus() 获取https 证书部署状态
closed：已关闭
deploying：部署中
deployed：部署成功
failed：部署失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSslStatus(string $SslStatus) 设置https 证书部署状态
closed：已关闭
deploying：部署中
deployed：部署成功
failed：部署失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method Hsts getHsts() 获取Hsts配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHsts(Hsts $Hsts) 设置Hsts配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTlsVersion() 获取Tls版本设置，仅支持部分Advance域名，支持设置 TLSv1, TLSV1.1, TLSV1.2, TLSv1.3，修改时必须开启连续的版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTlsVersion(array $TlsVersion) 设置Tls版本设置，仅支持部分Advance域名，支持设置 TLSv1, TLSV1.1, TLSV1.2, TLSv1.3，修改时必须开启连续的版本
注意：此字段可能返回 null，表示取不到有效值。
 */
class Https extends AbstractModel
{
    /**
     * @var string https 配置开关
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @var string http2 配置开关
on：开启
off：关闭
初次启用 https 加速会默认开启 http2 配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Http2;

    /**
     * @var string OCSP 配置开关
on：开启
off：关闭
默认为关闭状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcspStapling;

    /**
     * @var string 客户端证书校验功能
on：开启
off：关闭
默认为关闭状态，开启时需要上传客户端证书信息，该配置项目前在灰度中，尚未全量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VerifyClient;

    /**
     * @var ServerCert 服务端证书配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertInfo;

    /**
     * @var ClientCert 客户端证书配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientCertInfo;

    /**
     * @var string Spdy 配置开关
on：开启
off：关闭
默认为关闭状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Spdy;

    /**
     * @var string https 证书部署状态
closed：已关闭
deploying：部署中
deployed：部署成功
failed：部署失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SslStatus;

    /**
     * @var Hsts Hsts配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Hsts;

    /**
     * @var array Tls版本设置，仅支持部分Advance域名，支持设置 TLSv1, TLSV1.1, TLSV1.2, TLSv1.3，修改时必须开启连续的版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TlsVersion;

    /**
     * @param string $Switch https 配置开关
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Http2 http2 配置开关
on：开启
off：关闭
初次启用 https 加速会默认开启 http2 配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OcspStapling OCSP 配置开关
on：开启
off：关闭
默认为关闭状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VerifyClient 客户端证书校验功能
on：开启
off：关闭
默认为关闭状态，开启时需要上传客户端证书信息，该配置项目前在灰度中，尚未全量
注意：此字段可能返回 null，表示取不到有效值。
     * @param ServerCert $CertInfo 服务端证书配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClientCert $ClientCertInfo 客户端证书配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Spdy Spdy 配置开关
on：开启
off：关闭
默认为关闭状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SslStatus https 证书部署状态
closed：已关闭
deploying：部署中
deployed：部署成功
failed：部署失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param Hsts $Hsts Hsts配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TlsVersion Tls版本设置，仅支持部分Advance域名，支持设置 TLSv1, TLSV1.1, TLSV1.2, TLSv1.3，修改时必须开启连续的版本
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

        if (array_key_exists("TlsVersion",$param) and $param["TlsVersion"] !== null) {
            $this->TlsVersion = $param["TlsVersion"];
        }
    }
}
