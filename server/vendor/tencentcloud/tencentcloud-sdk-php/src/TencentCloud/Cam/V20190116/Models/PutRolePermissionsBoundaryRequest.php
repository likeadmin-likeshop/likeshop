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
 * PutRolePermissionsBoundary请求参数结构体
 *
 * @method integer getPolicyId() 获取策略ID
 * @method void setPolicyId(integer $PolicyId) 设置策略ID
 * @method string getRoleId() 获取角色ID（与角色名至少填一个）
 * @method void setRoleId(string $RoleId) 设置角色ID（与角色名至少填一个）
 * @method string getRoleName() 获取角色名（与角色ID至少填一个）
 * @method void setRoleName(string $RoleName) 设置角色名（与角色ID至少填一个）
 */
class PutRolePermissionsBoundaryRequest extends AbstractModel
{
    /**
     * @var integer 策略ID
     */
    public $PolicyId;

    /**
     * @var string 角色ID（与角色名至少填一个）
     */
    public $RoleId;

    /**
     * @var string 角色名（与角色ID至少填一个）
     */
    public $RoleName;

    /**
     * @param integer $PolicyId 策略ID
     * @param string $RoleId 角色ID（与角色名至少填一个）
     * @param string $RoleName 角色名（与角色ID至少填一个）
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }
    }
}
