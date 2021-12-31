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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateApiKey请求参数结构体
 *
 * @method string getSecretName() 获取用户自定义密钥名称。
 * @method void setSecretName(string $SecretName) 设置用户自定义密钥名称。
 * @method string getAccessKeyType() 获取密钥类型，支持 auto 和 manual（自定义密钥），默认为 auto。
 * @method void setAccessKeyType(string $AccessKeyType) 设置密钥类型，支持 auto 和 manual（自定义密钥），默认为 auto。
 * @method string getAccessKeyId() 获取用户自定义密钥 ID，AccessKeyType 为 manual 时必传。长度为5 - 50字符，由字母、数字、英文下划线组成。
 * @method void setAccessKeyId(string $AccessKeyId) 设置用户自定义密钥 ID，AccessKeyType 为 manual 时必传。长度为5 - 50字符，由字母、数字、英文下划线组成。
 * @method string getAccessKeySecret() 获取用户自定义密钥 Key，AccessKeyType 为 manual 时必传。长度为10 - 50字符，由字母、数字、英文下划线。
 * @method void setAccessKeySecret(string $AccessKeySecret) 设置用户自定义密钥 Key，AccessKeyType 为 manual 时必传。长度为10 - 50字符，由字母、数字、英文下划线。
 */
class CreateApiKeyRequest extends AbstractModel
{
    /**
     * @var string 用户自定义密钥名称。
     */
    public $SecretName;

    /**
     * @var string 密钥类型，支持 auto 和 manual（自定义密钥），默认为 auto。
     */
    public $AccessKeyType;

    /**
     * @var string 用户自定义密钥 ID，AccessKeyType 为 manual 时必传。长度为5 - 50字符，由字母、数字、英文下划线组成。
     */
    public $AccessKeyId;

    /**
     * @var string 用户自定义密钥 Key，AccessKeyType 为 manual 时必传。长度为10 - 50字符，由字母、数字、英文下划线。
     */
    public $AccessKeySecret;

    /**
     * @param string $SecretName 用户自定义密钥名称。
     * @param string $AccessKeyType 密钥类型，支持 auto 和 manual（自定义密钥），默认为 auto。
     * @param string $AccessKeyId 用户自定义密钥 ID，AccessKeyType 为 manual 时必传。长度为5 - 50字符，由字母、数字、英文下划线组成。
     * @param string $AccessKeySecret 用户自定义密钥 Key，AccessKeyType 为 manual 时必传。长度为10 - 50字符，由字母、数字、英文下划线。
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

        if (array_key_exists("AccessKeyType",$param) and $param["AccessKeyType"] !== null) {
            $this->AccessKeyType = $param["AccessKeyType"];
        }

        if (array_key_exists("AccessKeyId",$param) and $param["AccessKeyId"] !== null) {
            $this->AccessKeyId = $param["AccessKeyId"];
        }

        if (array_key_exists("AccessKeySecret",$param) and $param["AccessKeySecret"] !== null) {
            $this->AccessKeySecret = $param["AccessKeySecret"];
        }
    }
}
