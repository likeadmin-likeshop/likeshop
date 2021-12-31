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
 * https 加速服务端证书配置：
+ 支持使用托管至 SSL 证书管理的证书进行部署
+ 支持上传 PEM 格式的证书进行部署
注意：上传 PEM 证书时，需要进行 Base 64 编码
 *
 * @method string getCertId() 获取服务器证书 ID
在 SSL 证书管理进行证书托管时自动生成
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertId(string $CertId) 设置服务器证书 ID
在 SSL 证书管理进行证书托管时自动生成
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertName() 获取服务器证书名称
在 SSL 证书管理进行证书托管时自动生成
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertName(string $CertName) 设置服务器证书名称
在 SSL 证书管理进行证书托管时自动生成
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertificate() 获取服务器证书信息
上传自有证书时必填，需要包含完整的证书链
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertificate(string $Certificate) 设置服务器证书信息
上传自有证书时必填，需要包含完整的证书链
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivateKey() 获取服务器密钥信息
上传自有证书时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateKey(string $PrivateKey) 设置服务器密钥信息
上传自有证书时必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取证书过期时间
作为入参配置时无需填充
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置证书过期时间
作为入参配置时无需填充
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeployTime() 获取证书颁发时间
作为入参配置时无需填充
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployTime(string $DeployTime) 设置证书颁发时间
作为入参配置时无需填充
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取证书备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置证书备注信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServerCert extends AbstractModel
{
    /**
     * @var string 服务器证书 ID
在 SSL 证书管理进行证书托管时自动生成
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertId;

    /**
     * @var string 服务器证书名称
在 SSL 证书管理进行证书托管时自动生成
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertName;

    /**
     * @var string 服务器证书信息
上传自有证书时必填，需要包含完整的证书链
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Certificate;

    /**
     * @var string 服务器密钥信息
上传自有证书时必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateKey;

    /**
     * @var string 证书过期时间
作为入参配置时无需填充
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string 证书颁发时间
作为入参配置时无需填充
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeployTime;

    /**
     * @var string 证书备注信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @param string $CertId 服务器证书 ID
在 SSL 证书管理进行证书托管时自动生成
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CertName 服务器证书名称
在 SSL 证书管理进行证书托管时自动生成
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Certificate 服务器证书信息
上传自有证书时必填，需要包含完整的证书链
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrivateKey 服务器密钥信息
上传自有证书时必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime 证书过期时间
作为入参配置时无需填充
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeployTime 证书颁发时间
作为入参配置时无需填充
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 证书备注信息
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
        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("CertName",$param) and $param["CertName"] !== null) {
            $this->CertName = $param["CertName"];
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = $param["Certificate"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("DeployTime",$param) and $param["DeployTime"] !== null) {
            $this->DeployTime = $param["DeployTime"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
