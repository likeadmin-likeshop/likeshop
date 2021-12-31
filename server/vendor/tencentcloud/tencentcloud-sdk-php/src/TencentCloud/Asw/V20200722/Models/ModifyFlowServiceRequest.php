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
 * ModifyFlowService请求参数结构体
 *
 * @method string getFlowServiceResource() 获取状态机资源名
 * @method void setFlowServiceResource(string $FlowServiceResource) 设置状态机资源名
 * @method string getDefinition() 获取定义JSON
 * @method void setDefinition(string $Definition) 设置定义JSON
 * @method string getFlowServiceName() 获取状态机所属服务名
 * @method void setFlowServiceName(string $FlowServiceName) 设置状态机所属服务名
 * @method string getFlowServiceChineseName() 获取状态机所属服务中文名
 * @method void setFlowServiceChineseName(string $FlowServiceChineseName) 设置状态机所属服务中文名
 * @method boolean getIsNewRole() 获取是否是新角色
 * @method void setIsNewRole(boolean $IsNewRole) 设置是否是新角色
 * @method string getType() 获取状态机类型
 * @method void setType(string $Type) 设置状态机类型
 * @method string getRoleResource() 获取角色资源名
 * @method void setRoleResource(string $RoleResource) 设置角色资源名
 * @method string getDescription() 获取状态机备注
 * @method void setDescription(string $Description) 设置状态机备注
 * @method boolean getEnableCLS() 获取是否允许日志投递
 * @method void setEnableCLS(boolean $EnableCLS) 设置是否允许日志投递
 */
class ModifyFlowServiceRequest extends AbstractModel
{
    /**
     * @var string 状态机资源名
     */
    public $FlowServiceResource;

    /**
     * @var string 定义JSON
     */
    public $Definition;

    /**
     * @var string 状态机所属服务名
     */
    public $FlowServiceName;

    /**
     * @var string 状态机所属服务中文名
     */
    public $FlowServiceChineseName;

    /**
     * @var boolean 是否是新角色
     */
    public $IsNewRole;

    /**
     * @var string 状态机类型
     */
    public $Type;

    /**
     * @var string 角色资源名
     */
    public $RoleResource;

    /**
     * @var string 状态机备注
     */
    public $Description;

    /**
     * @var boolean 是否允许日志投递
     */
    public $EnableCLS;

    /**
     * @param string $FlowServiceResource 状态机资源名
     * @param string $Definition 定义JSON
     * @param string $FlowServiceName 状态机所属服务名
     * @param string $FlowServiceChineseName 状态机所属服务中文名
     * @param boolean $IsNewRole 是否是新角色
     * @param string $Type 状态机类型
     * @param string $RoleResource 角色资源名
     * @param string $Description 状态机备注
     * @param boolean $EnableCLS 是否允许日志投递
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
        if (array_key_exists("FlowServiceResource",$param) and $param["FlowServiceResource"] !== null) {
            $this->FlowServiceResource = $param["FlowServiceResource"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("FlowServiceName",$param) and $param["FlowServiceName"] !== null) {
            $this->FlowServiceName = $param["FlowServiceName"];
        }

        if (array_key_exists("FlowServiceChineseName",$param) and $param["FlowServiceChineseName"] !== null) {
            $this->FlowServiceChineseName = $param["FlowServiceChineseName"];
        }

        if (array_key_exists("IsNewRole",$param) and $param["IsNewRole"] !== null) {
            $this->IsNewRole = $param["IsNewRole"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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
    }
}
