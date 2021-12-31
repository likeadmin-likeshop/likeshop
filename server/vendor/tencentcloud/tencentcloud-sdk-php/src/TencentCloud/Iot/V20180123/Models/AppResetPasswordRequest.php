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
 * AppResetPassword请求参数结构体
 *
 * @method string getAccessToken() 获取访问Token
 * @method void setAccessToken(string $AccessToken) 设置访问Token
 * @method string getOldPassword() 获取旧密码
 * @method void setOldPassword(string $OldPassword) 设置旧密码
 * @method string getNewPassword() 获取新密码
 * @method void setNewPassword(string $NewPassword) 设置新密码
 */
class AppResetPasswordRequest extends AbstractModel
{
    /**
     * @var string 访问Token
     */
    public $AccessToken;

    /**
     * @var string 旧密码
     */
    public $OldPassword;

    /**
     * @var string 新密码
     */
    public $NewPassword;

    /**
     * @param string $AccessToken 访问Token
     * @param string $OldPassword 旧密码
     * @param string $NewPassword 新密码
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

        if (array_key_exists("OldPassword",$param) and $param["OldPassword"] !== null) {
            $this->OldPassword = $param["OldPassword"];
        }

        if (array_key_exists("NewPassword",$param) and $param["NewPassword"] !== null) {
            $this->NewPassword = $param["NewPassword"];
        }
    }
}
