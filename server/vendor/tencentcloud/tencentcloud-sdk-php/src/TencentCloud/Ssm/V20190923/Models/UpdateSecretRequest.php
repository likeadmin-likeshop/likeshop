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
 * UpdateSecret请求参数结构体
 *
 * @method string getSecretName() 获取指定需要更新凭据内容的名称。
 * @method void setSecretName(string $SecretName) 设置指定需要更新凭据内容的名称。
 * @method string getVersionId() 获取指定需要更新凭据内容的版本号。
 * @method void setVersionId(string $VersionId) 设置指定需要更新凭据内容的版本号。
 * @method string getSecretBinary() 获取新的凭据内容为二进制的场景使用该字段，并使用base64进行编码。SecretBinary 和 SecretString 只能一个不为空。
 * @method void setSecretBinary(string $SecretBinary) 设置新的凭据内容为二进制的场景使用该字段，并使用base64进行编码。SecretBinary 和 SecretString 只能一个不为空。
 * @method string getSecretString() 获取新的凭据内容为文本的场景使用该字段，不需要base64编码。SecretBinary 和 SecretString 只能一个不为空。
 * @method void setSecretString(string $SecretString) 设置新的凭据内容为文本的场景使用该字段，不需要base64编码。SecretBinary 和 SecretString 只能一个不为空。
 */
class UpdateSecretRequest extends AbstractModel
{
    /**
     * @var string 指定需要更新凭据内容的名称。
     */
    public $SecretName;

    /**
     * @var string 指定需要更新凭据内容的版本号。
     */
    public $VersionId;

    /**
     * @var string 新的凭据内容为二进制的场景使用该字段，并使用base64进行编码。SecretBinary 和 SecretString 只能一个不为空。
     */
    public $SecretBinary;

    /**
     * @var string 新的凭据内容为文本的场景使用该字段，不需要base64编码。SecretBinary 和 SecretString 只能一个不为空。
     */
    public $SecretString;

    /**
     * @param string $SecretName 指定需要更新凭据内容的名称。
     * @param string $VersionId 指定需要更新凭据内容的版本号。
     * @param string $SecretBinary 新的凭据内容为二进制的场景使用该字段，并使用base64进行编码。SecretBinary 和 SecretString 只能一个不为空。
     * @param string $SecretString 新的凭据内容为文本的场景使用该字段，不需要base64编码。SecretBinary 和 SecretString 只能一个不为空。
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
