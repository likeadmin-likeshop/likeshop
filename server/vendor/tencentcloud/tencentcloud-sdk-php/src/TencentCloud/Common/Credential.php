<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace TencentCloud\Common;

/**
 * 证书类，保存认证相关参数
 * @package TencentCloud\Common
 */
class Credential
{
    /**
     * @var string secretId
     */
    private $secretId;

    /**
     * @var string secretKey
     */
    private $secretKey;

    /**
     * @var string token
     */
    private $token;

    /**
     * Credential constructor.
     * @param string $secretId   secretId
     * @param string $secretKey  secretKey
     * @param string $token token
     */
    public function __construct($secretId, $secretKey, $token = null)
    {
        $this->secretId = $secretId;
        $this->secretKey = $secretKey;
        $this->token = $token;
    }

    /**
     * 设置secretId
     * @param string $secretId secretId
     */
    public function  setSecretId($secretId)
    {
        $this->secretId = $secretId;
    }

    /**
     * 设置secretKey
     * @param string $secretKey secretKey
     */
    public function setSecretKey($secretKey)
    {
        $this->secretKey = $secretKey;
    }

    /**
     * @param string $token 要设置的token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * 获取secretId
     * @return string secretId
     */
    public function getSecretId()
    {
        return $this->secretId;
    }

    /**
     * 获取secretKey
     * @return string secretKey
     */
    public function getSecretKey()
    {
        return $this->secretKey;
    }

    /**
     * 获取token
     * @return null|string token
     */
    public function getToken()
    {
        return $this->token;
    }
}
