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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 授权认证信息
 *
 * @method string getScene() 获取授权场景，例如COS
 * @method void setScene(string $Scene) 设置授权场景，例如COS
 * @method string getSecretId() 获取SecretId
 * @method void setSecretId(string $SecretId) 设置SecretId
 * @method string getSecretKey() 获取SecretKey
 * @method void setSecretKey(string $SecretKey) 设置SecretKey
 */
class Authentication extends AbstractModel
{
    /**
     * @var string 授权场景，例如COS
     */
    public $Scene;

    /**
     * @var string SecretId
     */
    public $SecretId;

    /**
     * @var string SecretKey
     */
    public $SecretKey;

    /**
     * @param string $Scene 授权场景，例如COS
     * @param string $SecretId SecretId
     * @param string $SecretKey SecretKey
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
        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }
    }
}
