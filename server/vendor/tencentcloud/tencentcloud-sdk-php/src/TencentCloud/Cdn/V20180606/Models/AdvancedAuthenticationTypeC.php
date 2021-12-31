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
 * 时间戳防盗链高级版模式C配置。
 *
 * @method string getAccessKey() 获取访问密钥。
 * @method void setAccessKey(string $AccessKey) 设置访问密钥。
 * @method string getSecretKey() 获取鉴权密钥。
 * @method void setSecretKey(string $SecretKey) 设置鉴权密钥。
 */
class AdvancedAuthenticationTypeC extends AbstractModel
{
    /**
     * @var string 访问密钥。
     */
    public $AccessKey;

    /**
     * @var string 鉴权密钥。
     */
    public $SecretKey;

    /**
     * @param string $AccessKey 访问密钥。
     * @param string $SecretKey 鉴权密钥。
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
        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }
    }
}
