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
 * DetachRolePolicy请求参数结构体
 *
 * @method integer getPolicyId() 获取策略ID，入参PolicyId与PolicyName二选一
 * @method void setPolicyId(integer $PolicyId) 设置策略ID，入参PolicyId与PolicyName二选一
 * @method string getDetachRoleId() 获取角色ID，用于指定角色，入参 AttachRoleId 与 AttachRoleName 二选一
 * @method void setDetachRoleId(string $DetachRoleId) 设置角色ID，用于指定角色，入参 AttachRoleId 与 AttachRoleName 二选一
 * @method string getDetachRoleName() 获取角色名称，用于指定角色，入参 AttachRoleId 与 AttachRoleName 二选一
 * @method void setDetachRoleName(string $DetachRoleName) 设置角色名称，用于指定角色，入参 AttachRoleId 与 AttachRoleName 二选一
 * @method string getPolicyName() 获取策略名，入参PolicyId与PolicyName二选一
 * @method void setPolicyName(string $PolicyName) 设置策略名，入参PolicyId与PolicyName二选一
 */
class DetachRolePolicyRequest extends AbstractModel
{
    /**
     * @var integer 策略ID，入参PolicyId与PolicyName二选一
     */
    public $PolicyId;

    /**
     * @var string 角色ID，用于指定角色，入参 AttachRoleId 与 AttachRoleName 二选一
     */
    public $DetachRoleId;

    /**
     * @var string 角色名称，用于指定角色，入参 AttachRoleId 与 AttachRoleName 二选一
     */
    public $DetachRoleName;

    /**
     * @var string 策略名，入参PolicyId与PolicyName二选一
     */
    public $PolicyName;

    /**
     * @param integer $PolicyId 策略ID，入参PolicyId与PolicyName二选一
     * @param string $DetachRoleId 角色ID，用于指定角色，入参 AttachRoleId 与 AttachRoleName 二选一
     * @param string $DetachRoleName 角色名称，用于指定角色，入参 AttachRoleId 与 AttachRoleName 二选一
     * @param string $PolicyName 策略名，入参PolicyId与PolicyName二选一
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

        if (array_key_exists("DetachRoleId",$param) and $param["DetachRoleId"] !== null) {
            $this->DetachRoleId = $param["DetachRoleId"];
        }

        if (array_key_exists("DetachRoleName",$param) and $param["DetachRoleName"] !== null) {
            $this->DetachRoleName = $param["DetachRoleName"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }
    }
}
