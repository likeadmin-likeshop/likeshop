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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPassword请求参数结构体
 *
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method string getName() 获取用户名称
 * @method void setName(string $Name) 设置用户名称
 * @method string getPassword() 获取用户当前密码
 * @method void setPassword(string $Password) 设置用户当前密码
 * @method string getPasswordNew() 获取用户新密码
 * @method void setPasswordNew(string $PasswordNew) 设置用户新密码
 */
class ModifyPasswordRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var string 用户名称
     */
    public $Name;

    /**
     * @var string 用户当前密码
     */
    public $Password;

    /**
     * @var string 用户新密码
     */
    public $PasswordNew;

    /**
     * @param string $InstanceId 实例Id
     * @param string $Name 用户名称
     * @param string $Password 用户当前密码
     * @param string $PasswordNew 用户新密码
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("PasswordNew",$param) and $param["PasswordNew"] !== null) {
            $this->PasswordNew = $param["PasswordNew"];
        }
    }
}
