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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetAccountPassword请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，形如：dcdbt-ow728lmc。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，形如：dcdbt-ow728lmc。
 * @method string getUserName() 获取登录用户名。
 * @method void setUserName(string $UserName) 设置登录用户名。
 * @method string getHost() 获取用户允许的访问 host，用户名+host唯一确定一个账号。
 * @method void setHost(string $Host) 设置用户允许的访问 host，用户名+host唯一确定一个账号。
 * @method string getPassword() 获取新密码，由字母、数字或常见符号组成，不能包含分号、单引号和双引号，长度为6~32位。
 * @method void setPassword(string $Password) 设置新密码，由字母、数字或常见符号组成，不能包含分号、单引号和双引号，长度为6~32位。
 */
class ResetAccountPasswordRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，形如：dcdbt-ow728lmc。
     */
    public $InstanceId;

    /**
     * @var string 登录用户名。
     */
    public $UserName;

    /**
     * @var string 用户允许的访问 host，用户名+host唯一确定一个账号。
     */
    public $Host;

    /**
     * @var string 新密码，由字母、数字或常见符号组成，不能包含分号、单引号和双引号，长度为6~32位。
     */
    public $Password;

    /**
     * @param string $InstanceId 实例 ID，形如：dcdbt-ow728lmc。
     * @param string $UserName 登录用户名。
     * @param string $Host 用户允许的访问 host，用户名+host唯一确定一个账号。
     * @param string $Password 新密码，由字母、数字或常见符号组成，不能包含分号、单引号和双引号，长度为6~32位。
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

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
