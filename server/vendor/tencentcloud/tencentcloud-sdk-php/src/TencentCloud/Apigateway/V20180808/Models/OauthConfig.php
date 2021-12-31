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
 * Oauth授权配置信息
 *
 * @method string getPublicKey() 获取公钥，用于验证用户token。
 * @method void setPublicKey(string $PublicKey) 设置公钥，用于验证用户token。
 * @method string getTokenLocation() 获取token传递位置。
 * @method void setTokenLocation(string $TokenLocation) 设置token传递位置。
 * @method string getLoginRedirectUrl() 获取重定向地址，用于引导用户登录操作。
 * @method void setLoginRedirectUrl(string $LoginRedirectUrl) 设置重定向地址，用于引导用户登录操作。
 */
class OauthConfig extends AbstractModel
{
    /**
     * @var string 公钥，用于验证用户token。
     */
    public $PublicKey;

    /**
     * @var string token传递位置。
     */
    public $TokenLocation;

    /**
     * @var string 重定向地址，用于引导用户登录操作。
     */
    public $LoginRedirectUrl;

    /**
     * @param string $PublicKey 公钥，用于验证用户token。
     * @param string $TokenLocation token传递位置。
     * @param string $LoginRedirectUrl 重定向地址，用于引导用户登录操作。
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
        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("TokenLocation",$param) and $param["TokenLocation"] !== null) {
            $this->TokenLocation = $param["TokenLocation"];
        }

        if (array_key_exists("LoginRedirectUrl",$param) and $param["LoginRedirectUrl"] !== null) {
            $this->LoginRedirectUrl = $param["LoginRedirectUrl"];
        }
    }
}
