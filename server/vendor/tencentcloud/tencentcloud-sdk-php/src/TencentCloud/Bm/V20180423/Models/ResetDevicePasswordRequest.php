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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetDevicePassword请求参数结构体
 *
 * @method array getInstanceIds() 获取需要重置密码的服务器ID列表
 * @method void setInstanceIds(array $InstanceIds) 设置需要重置密码的服务器ID列表
 * @method string getPassword() 获取新密码
 * @method void setPassword(string $Password) 设置新密码
 */
class ResetDevicePasswordRequest extends AbstractModel
{
    /**
     * @var array 需要重置密码的服务器ID列表
     */
    public $InstanceIds;

    /**
     * @var string 新密码
     */
    public $Password;

    /**
     * @param array $InstanceIds 需要重置密码的服务器ID列表
     * @param string $Password 新密码
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
