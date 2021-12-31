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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImageSecretInfo的信息
 *
 * @method string getRegistryServer() 获取镜像地址
 * @method void setRegistryServer(string $RegistryServer) 设置镜像地址
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getPassword() 获取仓库密码
 * @method void setPassword(string $Password) 设置仓库密码
 * @method string getEmail() 获取邮箱
 * @method void setEmail(string $Email) 设置邮箱
 */
class CloudBaseRunImageSecretInfo extends AbstractModel
{
    /**
     * @var string 镜像地址
     */
    public $RegistryServer;

    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string 仓库密码
     */
    public $Password;

    /**
     * @var string 邮箱
     */
    public $Email;

    /**
     * @param string $RegistryServer 镜像地址
     * @param string $UserName 用户名
     * @param string $Password 仓库密码
     * @param string $Email 邮箱
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
        if (array_key_exists("RegistryServer",$param) and $param["RegistryServer"] !== null) {
            $this->RegistryServer = $param["RegistryServer"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }
    }
}
