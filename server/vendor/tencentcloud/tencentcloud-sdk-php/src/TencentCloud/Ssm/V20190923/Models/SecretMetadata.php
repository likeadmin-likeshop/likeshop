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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 凭据的基础信息
 *
 * @method string getSecretName() 获取凭据名称。
 * @method void setSecretName(string $SecretName) 设置凭据名称。
 * @method string getDescription() 获取凭据的描述信息。
 * @method void setDescription(string $Description) 设置凭据的描述信息。
 * @method string getKmsKeyId() 获取用于加密凭据的KMS KeyId。
 * @method void setKmsKeyId(string $KmsKeyId) 设置用于加密凭据的KMS KeyId。
 * @method integer getCreateUin() 获取创建者UIN。
 * @method void setCreateUin(integer $CreateUin) 设置创建者UIN。
 * @method string getStatus() 获取凭据状态：Enabled、Disabled、PendingDelete
 * @method void setStatus(string $Status) 设置凭据状态：Enabled、Disabled、PendingDelete
 * @method integer getDeleteTime() 获取凭据删除日期，对于status为PendingDelete 的有效，unix时间戳。
 * @method void setDeleteTime(integer $DeleteTime) 设置凭据删除日期，对于status为PendingDelete 的有效，unix时间戳。
 * @method integer getCreateTime() 获取凭据创建时间，unix时间戳。
 * @method void setCreateTime(integer $CreateTime) 设置凭据创建时间，unix时间戳。
 * @method string getKmsKeyType() 获取用于加密凭据的KMS CMK类型，DEFAULT 表示SecretsManager 创建的默认密钥， CUSTOMER 表示用户指定的密钥。
 * @method void setKmsKeyType(string $KmsKeyType) 设置用于加密凭据的KMS CMK类型，DEFAULT 表示SecretsManager 创建的默认密钥， CUSTOMER 表示用户指定的密钥。
 */
class SecretMetadata extends AbstractModel
{
    /**
     * @var string 凭据名称。
     */
    public $SecretName;

    /**
     * @var string 凭据的描述信息。
     */
    public $Description;

    /**
     * @var string 用于加密凭据的KMS KeyId。
     */
    public $KmsKeyId;

    /**
     * @var integer 创建者UIN。
     */
    public $CreateUin;

    /**
     * @var string 凭据状态：Enabled、Disabled、PendingDelete
     */
    public $Status;

    /**
     * @var integer 凭据删除日期，对于status为PendingDelete 的有效，unix时间戳。
     */
    public $DeleteTime;

    /**
     * @var integer 凭据创建时间，unix时间戳。
     */
    public $CreateTime;

    /**
     * @var string 用于加密凭据的KMS CMK类型，DEFAULT 表示SecretsManager 创建的默认密钥， CUSTOMER 表示用户指定的密钥。
     */
    public $KmsKeyType;

    /**
     * @param string $SecretName 凭据名称。
     * @param string $Description 凭据的描述信息。
     * @param string $KmsKeyId 用于加密凭据的KMS KeyId。
     * @param integer $CreateUin 创建者UIN。
     * @param string $Status 凭据状态：Enabled、Disabled、PendingDelete
     * @param integer $DeleteTime 凭据删除日期，对于status为PendingDelete 的有效，unix时间戳。
     * @param integer $CreateTime 凭据创建时间，unix时间戳。
     * @param string $KmsKeyType 用于加密凭据的KMS CMK类型，DEFAULT 表示SecretsManager 创建的默认密钥， CUSTOMER 表示用户指定的密钥。
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
        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DeleteTime",$param) and $param["DeleteTime"] !== null) {
            $this->DeleteTime = $param["DeleteTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("KmsKeyType",$param) and $param["KmsKeyType"] !== null) {
            $this->KmsKeyType = $param["KmsKeyType"];
        }
    }
}
