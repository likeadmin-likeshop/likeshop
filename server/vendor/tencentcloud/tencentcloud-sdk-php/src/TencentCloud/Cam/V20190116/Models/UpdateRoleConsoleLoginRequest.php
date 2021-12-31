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
 * UpdateRoleConsoleLogin请求参数结构体
 *
 * @method integer getConsoleLogin() 获取是否可登录，可登录：1，不可登录：0
 * @method void setConsoleLogin(integer $ConsoleLogin) 设置是否可登录，可登录：1，不可登录：0
 * @method integer getRoleId() 获取角色ID
 * @method void setRoleId(integer $RoleId) 设置角色ID
 * @method string getRoleName() 获取角色名
 * @method void setRoleName(string $RoleName) 设置角色名
 */
class UpdateRoleConsoleLoginRequest extends AbstractModel
{
    /**
     * @var integer 是否可登录，可登录：1，不可登录：0
     */
    public $ConsoleLogin;

    /**
     * @var integer 角色ID
     */
    public $RoleId;

    /**
     * @var string 角色名
     */
    public $RoleName;

    /**
     * @param integer $ConsoleLogin 是否可登录，可登录：1，不可登录：0
     * @param integer $RoleId 角色ID
     * @param string $RoleName 角色名
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
        if (array_key_exists("ConsoleLogin",$param) and $param["ConsoleLogin"] !== null) {
            $this->ConsoleLogin = $param["ConsoleLogin"];
        }

        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }
    }
}
