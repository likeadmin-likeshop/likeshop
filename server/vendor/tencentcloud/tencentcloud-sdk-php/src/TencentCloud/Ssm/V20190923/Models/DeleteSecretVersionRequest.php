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
 * DeleteSecretVersion请求参数结构体
 *
 * @method string getSecretName() 获取指定凭据名称。
 * @method void setSecretName(string $SecretName) 设置指定凭据名称。
 * @method string getVersionId() 获取指定该名称下需要删除的凭据的版本号。
 * @method void setVersionId(string $VersionId) 设置指定该名称下需要删除的凭据的版本号。
 */
class DeleteSecretVersionRequest extends AbstractModel
{
    /**
     * @var string 指定凭据名称。
     */
    public $SecretName;

    /**
     * @var string 指定该名称下需要删除的凭据的版本号。
     */
    public $VersionId;

    /**
     * @param string $SecretName 指定凭据名称。
     * @param string $VersionId 指定该名称下需要删除的凭据的版本号。
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
    }
}
