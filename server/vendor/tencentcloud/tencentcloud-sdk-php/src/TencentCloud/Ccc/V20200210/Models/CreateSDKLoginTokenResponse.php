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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSDKLoginToken返回参数结构体
 *
 * @method string getToken() 获取SDK 登录 Token。
 * @method void setToken(string $Token) 设置SDK 登录 Token。
 * @method integer getExpiredTime() 获取过期时间戳，Unix 时间戳。
 * @method void setExpiredTime(integer $ExpiredTime) 设置过期时间戳，Unix 时间戳。
 * @method string getSdkURL() 获取SDK 加载路径会随着 SDK 的发布而变动。
 * @method void setSdkURL(string $SdkURL) 设置SDK 加载路径会随着 SDK 的发布而变动。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateSDKLoginTokenResponse extends AbstractModel
{
    /**
     * @var string SDK 登录 Token。
     */
    public $Token;

    /**
     * @var integer 过期时间戳，Unix 时间戳。
     */
    public $ExpiredTime;

    /**
     * @var string SDK 加载路径会随着 SDK 的发布而变动。
     */
    public $SdkURL;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Token SDK 登录 Token。
     * @param integer $ExpiredTime 过期时间戳，Unix 时间戳。
     * @param string $SdkURL SDK 加载路径会随着 SDK 的发布而变动。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("SdkURL",$param) and $param["SdkURL"] !== null) {
            $this->SdkURL = $param["SdkURL"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
