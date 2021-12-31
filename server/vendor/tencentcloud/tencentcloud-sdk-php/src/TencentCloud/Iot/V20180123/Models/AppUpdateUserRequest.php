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
namespace TencentCloud\Iot\V20180123\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AppUpdateUser请求参数结构体
 *
 * @method string getAccessToken() 获取访问Token
 * @method void setAccessToken(string $AccessToken) 设置访问Token
 * @method string getNickName() 获取昵称
 * @method void setNickName(string $NickName) 设置昵称
 */
class AppUpdateUserRequest extends AbstractModel
{
    /**
     * @var string 访问Token
     */
    public $AccessToken;

    /**
     * @var string 昵称
     */
    public $NickName;

    /**
     * @param string $AccessToken 访问Token
     * @param string $NickName 昵称
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
        if (array_key_exists("AccessToken",$param) and $param["AccessToken"] !== null) {
            $this->AccessToken = $param["AccessToken"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }
    }
}
