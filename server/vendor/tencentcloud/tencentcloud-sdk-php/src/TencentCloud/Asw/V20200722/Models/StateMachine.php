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
 * 状态机
 *
 * @method string getFlowServiceResource() 获取状态机资源
 * @method void setFlowServiceResource(string $FlowServiceResource) 设置状态机资源
 * @method string getType() 获取状态机类型。EXPRESS，STANDARD
 * @method void setType(string $Type) 设置状态机类型。EXPRESS，STANDARD
 * @method string getFlowServiceName() 获取状态机名称
 * @method void setFlowServiceName(string $FlowServiceName) 设置状态机名称
 * @method string getFlowServiceChineseName() 获取状态机中文名
 * @method void setFlowServiceChineseName(string $FlowServiceChineseName) 设置状态机中文名
 * @method string getCreateDate() 获取创建时间。timestamp
 * @method void setCreateDate(string $CreateDate) 设置创建时间。timestamp
 * @method string getModifyDate() 获取修改时间。timestamp
 * @method void setModifyDate(string $ModifyDate) 设置修改时间。timestamp
 * @method string getStatus() 获取状态机状态
 * @method void setStatus(string $Status) 设置状态机状态
 * @method string getCreator() 获取创建者的subAccountUin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreator(string $Creator) 设置创建者的subAccountUin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifier() 获取修改者的subAccountUin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifier(string $Modifier) 设置修改者的subAccountUin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlowServiceId() 获取状态机id
 * @method void setFlowServiceId(string $FlowServiceId) 设置状态机id
 * @method string getTemplateId() 获取模板id
 * @method void setTemplateId(string $TemplateId) 设置模板id
 * @method string getDescription() 获取备注
 * @method void setDescription(string $Description) 设置备注
 */
class StateMachine extends AbstractModel
{
    /**
     * @var string 状态机资源
     */
    public $FlowServiceResource;

    /**
     * @var string 状态机类型。EXPRESS，STANDARD
     */
    public $Type;

    /**
     * @var string 状态机名称
     */
    public $FlowServiceName;

    /**
     * @var string 状态机中文名
     */
    public $FlowServiceChineseName;

    /**
     * @var string 创建时间。timestamp
     */
    public $CreateDate;

    /**
     * @var string 修改时间。timestamp
     */
    public $ModifyDate;

    /**
     * @var string 状态机状态
     */
    public $Status;

    /**
     * @var string 创建者的subAccountUin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creator;

    /**
     * @var string 修改者的subAccountUin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Modifier;

    /**
     * @var string 状态机id
     */
    public $FlowServiceId;

    /**
     * @var string 模板id
     */
    public $TemplateId;

    /**
     * @var string 备注
     */
    public $Description;

    /**
     * @param string $FlowServiceResource 状态机资源
     * @param string $Type 状态机类型。EXPRESS，STANDARD
     * @param string $FlowServiceName 状态机名称
     * @param string $FlowServiceChineseName 状态机中文名
     * @param string $CreateDate 创建时间。timestamp
     * @param string $ModifyDate 修改时间。timestamp
     * @param string $Status 状态机状态
     * @param string $Creator 创建者的subAccountUin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Modifier 修改者的subAccountUin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlowServiceId 状态机id
     * @param string $TemplateId 模板id
     * @param string $Description 备注
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("FlowServiceName",$param) and $param["FlowServiceName"] !== null) {
            $this->FlowServiceName = $param["FlowServiceName"];
        }

        if (array_key_exists("FlowServiceChineseName",$param) and $param["FlowServiceChineseName"] !== null) {
            $this->FlowServiceChineseName = $param["FlowServiceChineseName"];
        }

        if (array_key_exists("CreateDate",$param) and $param["CreateDate"] !== null) {
            $this->CreateDate = $param["CreateDate"];
        }

        if (array_key_exists("ModifyDate",$param) and $param["ModifyDate"] !== null) {
            $this->ModifyDate = $param["ModifyDate"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("Modifier",$param) and $param["Modifier"] !== null) {
            $this->Modifier = $param["Modifier"];
        }

        if (array_key_exists("FlowServiceId",$param) and $param["FlowServiceId"] !== null) {
            $this->FlowServiceId = $param["FlowServiceId"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
