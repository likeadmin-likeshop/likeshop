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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 环境角色集合
 *
 * @method string getEnvironmentId() 获取环境（命名空间）。
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境（命名空间）。
 * @method string getRoleName() 获取角色名称。
 * @method void setRoleName(string $RoleName) 设置角色名称。
 * @method array getPermissions() 获取授权项，最多只能包含produce、consume两项的非空字符串数组。
 * @method void setPermissions(array $Permissions) 设置授权项，最多只能包含produce、consume两项的非空字符串数组。
 * @method string getRoleDescribe() 获取角色描述。
 * @method void setRoleDescribe(string $RoleDescribe) 设置角色描述。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method string getUpdateTime() 获取更新时间。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间。
 */
class EnvironmentRole extends AbstractModel
{
    /**
     * @var string 环境（命名空间）。
     */
    public $EnvironmentId;

    /**
     * @var string 角色名称。
     */
    public $RoleName;

    /**
     * @var array 授权项，最多只能包含produce、consume两项的非空字符串数组。
     */
    public $Permissions;

    /**
     * @var string 角色描述。
     */
    public $RoleDescribe;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var string 更新时间。
     */
    public $UpdateTime;

    /**
     * @param string $EnvironmentId 环境（命名空间）。
     * @param string $RoleName 角色名称。
     * @param array $Permissions 授权项，最多只能包含produce、consume两项的非空字符串数组。
     * @param string $RoleDescribe 角色描述。
     * @param string $CreateTime 创建时间。
     * @param string $UpdateTime 更新时间。
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("Permissions",$param) and $param["Permissions"] !== null) {
            $this->Permissions = $param["Permissions"];
        }

        if (array_key_exists("RoleDescribe",$param) and $param["RoleDescribe"] !== null) {
            $this->RoleDescribe = $param["RoleDescribe"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
