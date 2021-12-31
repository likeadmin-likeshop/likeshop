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
 * ListAttachedRolePolicies请求参数结构体
 *
 * @method integer getPage() 获取页码，从 1 开始
 * @method void setPage(integer $Page) 设置页码，从 1 开始
 * @method integer getRp() 获取每页行数，不能大于200
 * @method void setRp(integer $Rp) 设置每页行数，不能大于200
 * @method string getRoleId() 获取角色 ID。用于指定角色，入参 RoleId 与 RoleName 二选一
 * @method void setRoleId(string $RoleId) 设置角色 ID。用于指定角色，入参 RoleId 与 RoleName 二选一
 * @method string getRoleName() 获取角色名。用于指定角色，入参 RoleId 与 RoleName 二选一
 * @method void setRoleName(string $RoleName) 设置角色名。用于指定角色，入参 RoleId 与 RoleName 二选一
 * @method string getPolicyType() 获取按策略类型过滤，User表示仅查询自定义策略，QCS表示仅查询预设策略
 * @method void setPolicyType(string $PolicyType) 设置按策略类型过滤，User表示仅查询自定义策略，QCS表示仅查询预设策略
 */
class ListAttachedRolePoliciesRequest extends AbstractModel
{
    /**
     * @var integer 页码，从 1 开始
     */
    public $Page;

    /**
     * @var integer 每页行数，不能大于200
     */
    public $Rp;

    /**
     * @var string 角色 ID。用于指定角色，入参 RoleId 与 RoleName 二选一
     */
    public $RoleId;

    /**
     * @var string 角色名。用于指定角色，入参 RoleId 与 RoleName 二选一
     */
    public $RoleName;

    /**
     * @var string 按策略类型过滤，User表示仅查询自定义策略，QCS表示仅查询预设策略
     */
    public $PolicyType;

    /**
     * @param integer $Page 页码，从 1 开始
     * @param integer $Rp 每页行数，不能大于200
     * @param string $RoleId 角色 ID。用于指定角色，入参 RoleId 与 RoleName 二选一
     * @param string $RoleName 角色名。用于指定角色，入参 RoleId 与 RoleName 二选一
     * @param string $PolicyType 按策略类型过滤，User表示仅查询自定义策略，QCS表示仅查询预设策略
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
        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Rp",$param) and $param["Rp"] !== null) {
            $this->Rp = $param["Rp"];
        }

        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }
    }
}
