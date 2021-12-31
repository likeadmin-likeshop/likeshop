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
 * PutSecretValue请求参数结构体
 *
 * @method string getSecretName() 获取指定需要增加版本的凭据名称。
 * @method void setSecretName(string $SecretName) 设置指定需要增加版本的凭据名称。
 * @method string getVersionId() 获取指定新增加的版本号，最长64 字节，使用字母、数字或者 - _ . 的组合并且以字母或数字开头。
 * @method void setVersionId(string $VersionId) 设置指定新增加的版本号，最长64 字节，使用字母、数字或者 - _ . 的组合并且以字母或数字开头。
 * @method string getSecretBinary() 获取二进制凭据信息，使用base64编码。SecretBinary 和 SecretString 必须且只能设置一个。
 * @method void setSecretBinary(string $SecretBinary) 设置二进制凭据信息，使用base64编码。SecretBinary 和 SecretString 必须且只能设置一个。
 * @method string getSecretString() 获取文本类型凭据信息明文（不需要进行base64编码），SecretBinary 和 SecretString 必须且只能设置一个。
 * @method void setSecretString(string $SecretString) 设置文本类型凭据信息明文（不需要进行base64编码），SecretBinary 和 SecretString 必须且只能设置一个。
 */
class PutSecretValueRequest extends AbstractModel
{
    /**
     * @var string 指定需要增加版本的凭据名称。
     */
    public $SecretName;

    /**
     * @var string 指定新增加的版本号，最长64 字节，使用字母、数字或者 - _ . 的组合并且以字母或数字开头。
     */
    public $VersionId;

    /**
     * @var string 二进制凭据信息，使用base64编码。SecretBinary 和 SecretString 必须且只能设置一个。
     */
    public $SecretBinary;

    /**
     * @var string 文本类型凭据信息明文（不需要进行base64编码），SecretBinary 和 SecretString 必须且只能设置一个。
     */
    public $SecretString;

    /**
     * @param string $SecretName 指定需要增加版本的凭据名称。
     * @param string $VersionId 指定新增加的版本号，最长64 字节，使用字母、数字或者 - _ . 的组合并且以字母或数字开头。
     * @param string $SecretBinary 二进制凭据信息，使用base64编码。SecretBinary 和 SecretString 必须且只能设置一个。
     * @param string $SecretString 文本类型凭据信息明文（不需要进行base64编码），SecretBinary 和 SecretString 必须且只能设置一个。
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

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("SecretBinary",$param) and $param["SecretBinary"] !== null) {
            $this->SecretBinary = $param["SecretBinary"];
        }

        if (array_key_exists("SecretString",$param) and $param["SecretString"] !== null) {
            $this->SecretString = $param["SecretString"];
        }
    }
}
