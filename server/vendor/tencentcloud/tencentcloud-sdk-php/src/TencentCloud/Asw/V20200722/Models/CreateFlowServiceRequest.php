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
namespace TencentCloud\Asw\V20200722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFlowService请求参数结构体
 *
 * @method string getDefinition() 获取定义文本（JSON格式）
 * @method void setDefinition(string $Definition) 设置定义文本（JSON格式）
 * @method string getFlowServiceName() 获取状态机所属服务名
 * @method void setFlowServiceName(string $FlowServiceName) 设置状态机所属服务名
 * @method boolean getIsNewRole() 获取是不是新的角色
 * @method void setIsNewRole(boolean $IsNewRole) 设置是不是新的角色
 * @method string getType() 获取状态机类型（EXPRESS，STANDARD）
 * @method void setType(string $Type) 设置状态机类型（EXPRESS，STANDARD）
 * @method string getFlowServiceChineseName() 获取状态机所属服务中文名
 * @method void setFlowServiceChineseName(string $FlowServiceChineseName) 设置状态机所属服务中文名
 * @method string getRoleResource() 获取角色资源名, 比如: qcs::cam::uin/20103392:roleName/SomeRoleForYourStateMachine
 * @method void setRoleResource(string $RoleResource) 设置角色资源名, 比如: qcs::cam::uin/20103392:roleName/SomeRoleForYourStateMachine
 * @method string getDescription() 获取备注
 * @method void setDescription(string $Description) 设置备注
 * @method boolean getEnableCLS() 获取是否开启CLS日志投递功能
 * @method void setEnableCLS(boolean $EnableCLS) 设置是否开启CLS日志投递功能
 * @method string getInput() 获取该状态机的默认输入
 * @method void setInput(string $Input) 设置该状态机的默认输入
 */
class CreateFlowServiceRequest extends AbstractModel
{
    /**
     * @var string 定义文本（JSON格式）
     */
    public $Definition;

    /**
     * @var string 状态机所属服务名
     */
    public $FlowServiceName;

    /**
     * @var boolean 是不是新的角色
     */
    public $IsNewRole;

    /**
     * @var string 状态机类型（EXPRESS，STANDARD）
     */
    public $Type;

    /**
     * @var string 状态机所属服务中文名
     */
    public $FlowServiceChineseName;

    /**
     * @var string 角色资源名, 比如: qcs::cam::uin/20103392:roleName/SomeRoleForYourStateMachine
     */
    public $RoleResource;

    /**
     * @var string 备注
     */
    public $Description;

    /**
     * @var boolean 是否开启CLS日志投递功能
     */
    public $EnableCLS;

    /**
     * @var string 该状态机的默认输入
     */
    public $Input;

    /**
     * @param string $Definition 定义文本（JSON格式）
     * @param string $FlowServiceName 状态机所属服务名
     * @param boolean $IsNewRole 是不是新的角色
     * @param string $Type 状态机类型（EXPRESS，STANDARD）
     * @param string $FlowServiceChineseName 状态机所属服务中文名
     * @param string $RoleResource 角色资源名, 比如: qcs::cam::uin/20103392:roleName/SomeRoleForYourStateMachine
     * @param string $Description 备注
     * @param boolean $EnableCLS 是否开启CLS日志投递功能
     * @param string $Input 该状态机的默认输入
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("FlowServiceName",$param) and $param["FlowServiceName"] !== null) {
            $this->FlowServiceName = $param["FlowServiceName"];
        }

        if (array_key_exists("IsNewRole",$param) and $param["IsNewRole"] !== null) {
            $this->IsNewRole = $param["IsNewRole"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("FlowServiceChineseName",$param) and $param["FlowServiceChineseName"] !== null) {
            $this->FlowServiceChineseName = $param["FlowServiceChineseName"];
        }

        if (array_key_exists("RoleResource",$param) and $param["RoleResource"] !== null) {
            $this->RoleResource = $param["RoleResource"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EnableCLS",$param) and $param["EnableCLS"] !== null) {
            $this->EnableCLS = $param["EnableCLS"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }
    }
}
