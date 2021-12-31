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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddUser返回参数结构体
 *
 * @method integer getUin() 获取子用户 UIN
 * @method void setUin(integer $Uin) 设置子用户 UIN
 * @method string getName() 获取子用户用户名
 * @method void setName(string $Name) 设置子用户用户名
 * @method string getPassword() 获取如果输入参数组合为自动生成随机密码，则返回生成的密码
 * @method void setPassword(string $Password) 设置如果输入参数组合为自动生成随机密码，则返回生成的密码
 * @method string getSecretId() 获取子用户密钥 ID
 * @method void setSecretId(string $SecretId) 设置子用户密钥 ID
 * @method string getSecretKey() 获取子用户密钥 Key
 * @method void setSecretKey(string $SecretKey) 设置子用户密钥 Key
 * @method integer getUid() 获取子用户 UID
 * @method void setUid(integer $Uid) 设置子用户 UID
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class AddUserResponse extends AbstractModel
{
    /**
     * @var integer 子用户 UIN
     */
    public $Uin;

    /**
     * @var string 子用户用户名
     */
    public $Name;

    /**
     * @var string 如果输入参数组合为自动生成随机密码，则返回生成的密码
     */
    public $Password;

    /**
     * @var string 子用户密钥 ID
     */
    public $SecretId;

    /**
     * @var string 子用户密钥 Key
     */
    public $SecretKey;

    /**
     * @var integer 子用户 UID
     */
    public $Uid;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Uin 子用户 UIN
     * @param string $Name 子用户用户名
     * @param string $Password 如果输入参数组合为自动生成随机密码，则返回生成的密码
     * @param string $SecretId 子用户密钥 ID
     * @param string $SecretKey 子用户密钥 Key
     * @param integer $Uid 子用户 UID
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
