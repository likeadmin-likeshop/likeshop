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
 * 证书相关信息
 *
 * @method string getSSLMode() 获取认证类型，UNIDIRECTIONAL：单向认证，MUTUAL：双向认证
 * @method void setSSLMode(string $SSLMode) 设置认证类型，UNIDIRECTIONAL：单向认证，MUTUAL：双向认证
 * @method string getCertId() 获取服务端证书的 ID。
 * @method void setCertId(string $CertId) 设置服务端证书的 ID。
 * @method string getCertCaId() 获取客户端证书的 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertCaId(string $CertCaId) 设置客户端证书的 ID。
注意：此字段可能返回 null，表示取不到有效值。
 */
class CertificateOutput extends AbstractModel
{
    /**
     * @var string 认证类型，UNIDIRECTIONAL：单向认证，MUTUAL：双向认证
     */
    public $SSLMode;

    /**
     * @var string 服务端证书的 ID。
     */
    public $CertId;

    /**
     * @var string 客户端证书的 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertCaId;

    /**
     * @param string $SSLMode 认证类型，UNIDIRECTIONAL：单向认证，MUTUAL：双向认证
     * @param string $CertId 服务端证书的 ID。
     * @param string $CertCaId 客户端证书的 ID。
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
        if (array_key_exists("SSLMode",$param) and $param["SSLMode"] !== null) {
            $this->SSLMode = $param["SSLMode"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("CertCaId",$param) and $param["CertCaId"] !== null) {
            $this->CertCaId = $param["CertCaId"];
        }
    }
}
