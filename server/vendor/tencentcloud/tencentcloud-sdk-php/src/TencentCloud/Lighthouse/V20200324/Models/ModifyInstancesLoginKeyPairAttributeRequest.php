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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstancesLoginKeyPairAttribute请求参数结构体
 *
 * @method array getInstanceIds() 获取实例 ID 列表。每次请求批量实例的上限为 100。
 * @method void setInstanceIds(array $InstanceIds) 设置实例 ID 列表。每次请求批量实例的上限为 100。
 * @method string getPermitLogin() 获取是否允许使用默认密钥对登录，YES：允许登录；NO：禁止登录
 * @method void setPermitLogin(string $PermitLogin) 设置是否允许使用默认密钥对登录，YES：允许登录；NO：禁止登录
 */
class ModifyInstancesLoginKeyPairAttributeRequest extends AbstractModel
{
    /**
     * @var array 实例 ID 列表。每次请求批量实例的上限为 100。
     */
    public $InstanceIds;

    /**
     * @var string 是否允许使用默认密钥对登录，YES：允许登录；NO：禁止登录
     */
    public $PermitLogin;

    /**
     * @param array $InstanceIds 实例 ID 列表。每次请求批量实例的上限为 100。
     * @param string $PermitLogin 是否允许使用默认密钥对登录，YES：允许登录；NO：禁止登录
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

        if (array_key_exists("PermitLogin",$param) and $param["PermitLogin"] !== null) {
            $this->PermitLogin = $param["PermitLogin"];
        }
    }
}
