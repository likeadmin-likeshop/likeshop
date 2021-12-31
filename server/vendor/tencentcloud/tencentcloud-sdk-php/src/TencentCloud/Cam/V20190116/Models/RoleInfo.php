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
 * 角色详细信息
 *
 * @method string getRoleId() 获取角色ID
 * @method void setRoleId(string $RoleId) 设置角色ID
 * @method string getRoleName() 获取角色名称
 * @method void setRoleName(string $RoleName) 设置角色名称
 * @method string getPolicyDocument() 获取角色的策略文档
 * @method void setPolicyDocument(string $PolicyDocument) 设置角色的策略文档
 * @method string getDescription() 获取角色描述
 * @method void setDescription(string $Description) 设置角色描述
 * @method string getAddTime() 获取角色的创建时间
 * @method void setAddTime(string $AddTime) 设置角色的创建时间
 * @method string getUpdateTime() 获取角色的最近一次时间
 * @method void setUpdateTime(string $UpdateTime) 设置角色的最近一次时间
 * @method integer getConsoleLogin() 获取角色是否允许登录
 * @method void setConsoleLogin(integer $ConsoleLogin) 设置角色是否允许登录
 * @method string getRoleType() 获取角色类型，取user、system或service_linked
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleType(string $RoleType) 设置角色类型，取user、system或service_linked
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSessionDuration() 获取有效时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionDuration(integer $SessionDuration) 设置有效时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeletionTaskId() 获取服务相关角色删除TaskId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeletionTaskId(string $DeletionTaskId) 设置服务相关角色删除TaskId
注意：此字段可能返回 null，表示取不到有效值。
 */
class RoleInfo extends AbstractModel
{
    /**
     * @var string 角色ID
     */
    public $RoleId;

    /**
     * @var string 角色名称
     */
    public $RoleName;

    /**
     * @var string 角色的策略文档
     */
    public $PolicyDocument;

    /**
     * @var string 角色描述
     */
    public $Description;

    /**
     * @var string 角色的创建时间
     */
    public $AddTime;

    /**
     * @var string 角色的最近一次时间
     */
    public $UpdateTime;

    /**
     * @var integer 角色是否允许登录
     */
    public $ConsoleLogin;

    /**
     * @var string 角色类型，取user、system或service_linked
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleType;

    /**
     * @var integer 有效时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionDuration;

    /**
     * @var string 服务相关角色删除TaskId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeletionTaskId;

    /**
     * @param string $RoleId 角色ID
     * @param string $RoleName 角色名称
     * @param string $PolicyDocument 角色的策略文档
     * @param string $Description 角色描述
     * @param string $AddTime 角色的创建时间
     * @param string $UpdateTime 角色的最近一次时间
     * @param integer $ConsoleLogin 角色是否允许登录
     * @param string $RoleType 角色类型，取user、system或service_linked
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SessionDuration 有效时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeletionTaskId 服务相关角色删除TaskId
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("PolicyDocument",$param) and $param["PolicyDocument"] !== null) {
            $this->PolicyDocument = $param["PolicyDocument"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ConsoleLogin",$param) and $param["ConsoleLogin"] !== null) {
            $this->ConsoleLogin = $param["ConsoleLogin"];
        }

        if (array_key_exists("RoleType",$param) and $param["RoleType"] !== null) {
            $this->RoleType = $param["RoleType"];
        }

        if (array_key_exists("SessionDuration",$param) and $param["SessionDuration"] !== null) {
            $this->SessionDuration = $param["SessionDuration"];
        }

        if (array_key_exists("DeletionTaskId",$param) and $param["DeletionTaskId"] !== null) {
            $this->DeletionTaskId = $param["DeletionTaskId"];
        }
    }
}
