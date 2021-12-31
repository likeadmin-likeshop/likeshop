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
 * DescribeFlowServiceDetail返回参数结构体
 *
 * @method string getFlowServiceName() 获取状态机所属服务名
 * @method void setFlowServiceName(string $FlowServiceName) 设置状态机所属服务名
 * @method string getStatus() 获取状态机状态
 * @method void setStatus(string $Status) 设置状态机状态
 * @method string getDefinition() 获取定义文本（JSON格式）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefinition(string $Definition) 设置定义文本（JSON格式）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRoleResource() 获取角色资源名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleResource(string $RoleResource) 设置角色资源名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取状态机的类型，可以为 （EXPRESS/STANDARD）
 * @method void setType(string $Type) 设置状态机的类型，可以为 （EXPRESS/STANDARD）
 * @method string getCreateDate() 获取生成时间
 * @method void setCreateDate(string $CreateDate) 设置生成时间
 * @method string getDescription() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlowServiceChineseName() 获取状态机所属服务中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowServiceChineseName(string $FlowServiceChineseName) 设置状态机所属服务中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableCLS() 获取是否开启日志CLS服务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableCLS(boolean $EnableCLS) 设置是否开启日志CLS服务
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCLSUrl() 获取CLS日志查看地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCLSUrl(string $CLSUrl) 设置CLS日志查看地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlowInput() 获取工作流提示输入
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowInput(string $FlowInput) 设置工作流提示输入
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeFlowServiceDetailResponse extends AbstractModel
{
    /**
     * @var string 状态机所属服务名
     */
    public $FlowServiceName;

    /**
     * @var string 状态机状态
     */
    public $Status;

    /**
     * @var string 定义文本（JSON格式）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Definition;

    /**
     * @var string 角色资源名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleResource;

    /**
     * @var string 状态机的类型，可以为 （EXPRESS/STANDARD）
     */
    public $Type;

    /**
     * @var string 生成时间
     */
    public $CreateDate;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 状态机所属服务中文名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowServiceChineseName;

    /**
     * @var boolean 是否开启日志CLS服务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableCLS;

    /**
     * @var string CLS日志查看地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CLSUrl;

    /**
     * @var string 工作流提示输入
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowInput;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $FlowServiceName 状态机所属服务名
     * @param string $Status 状态机状态
     * @param string $Definition 定义文本（JSON格式）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RoleResource 角色资源名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 状态机的类型，可以为 （EXPRESS/STANDARD）
     * @param string $CreateDate 生成时间
     * @param string $Description 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlowServiceChineseName 状态机所属服务中文名
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableCLS 是否开启日志CLS服务
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CLSUrl CLS日志查看地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlowInput 工作流提示输入
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("FlowServiceName",$param) and $param["FlowServiceName"] !== null) {
            $this->FlowServiceName = $param["FlowServiceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("RoleResource",$param) and $param["RoleResource"] !== null) {
            $this->RoleResource = $param["RoleResource"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CreateDate",$param) and $param["CreateDate"] !== null) {
            $this->CreateDate = $param["CreateDate"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("FlowServiceChineseName",$param) and $param["FlowServiceChineseName"] !== null) {
            $this->FlowServiceChineseName = $param["FlowServiceChineseName"];
        }

        if (array_key_exists("EnableCLS",$param) and $param["EnableCLS"] !== null) {
            $this->EnableCLS = $param["EnableCLS"];
        }

        if (array_key_exists("CLSUrl",$param) and $param["CLSUrl"] !== null) {
            $this->CLSUrl = $param["CLSUrl"];
        }

        if (array_key_exists("FlowInput",$param) and $param["FlowInput"] !== null) {
            $this->FlowInput = $param["FlowInput"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
