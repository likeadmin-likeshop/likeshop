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
 * UpdateDescription请求参数结构体
 *
 * @method string getSecretName() 获取指定需要更新描述信息的凭据名。
 * @method void setSecretName(string $SecretName) 设置指定需要更新描述信息的凭据名。
 * @method string getDescription() 获取新的描述信息，最大长度2048个字节。
 * @method void setDescription(string $Description) 设置新的描述信息，最大长度2048个字节。
 */
class UpdateDescriptionRequest extends AbstractModel
{
    /**
     * @var string 指定需要更新描述信息的凭据名。
     */
    public $SecretName;

    /**
     * @var string 新的描述信息，最大长度2048个字节。
     */
    public $Description;

    /**
     * @param string $SecretName 指定需要更新描述信息的凭据名。
     * @param string $Description 新的描述信息，最大长度2048个字节。
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
    }
}
