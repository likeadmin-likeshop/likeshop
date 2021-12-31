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
 * GetPolicy返回参数结构体
 *
 * @method string getPolicyName() 获取策略名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyName(string $PolicyName) 设置策略名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取策略描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置策略描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取1 表示自定义策略，2 表示预设策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置1 表示自定义策略，2 表示预设策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddTime(string $AddTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取最近更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置最近更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPolicyDocument() 获取策略文档
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyDocument(string $PolicyDocument) 设置策略文档
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPresetAlias() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPresetAlias(string $PresetAlias) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsServiceLinkedRolePolicy() 获取是否服务相关策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsServiceLinkedRolePolicy(integer $IsServiceLinkedRolePolicy) 设置是否服务相关策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetPolicyResponse extends AbstractModel
{
    /**
     * @var string 策略名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyName;

    /**
     * @var string 策略描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 1 表示自定义策略，2 表示预设策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddTime;

    /**
     * @var string 最近更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 策略文档
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyDocument;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PresetAlias;

    /**
     * @var integer 是否服务相关策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsServiceLinkedRolePolicy;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $PolicyName 策略名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 策略描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 1 表示自定义策略，2 表示预设策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AddTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 最近更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PolicyDocument 策略文档
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PresetAlias 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsServiceLinkedRolePolicy 是否服务相关策略
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
        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("PolicyDocument",$param) and $param["PolicyDocument"] !== null) {
            $this->PolicyDocument = $param["PolicyDocument"];
        }

        if (array_key_exists("PresetAlias",$param) and $param["PresetAlias"] !== null) {
            $this->PresetAlias = $param["PresetAlias"];
        }

        if (array_key_exists("IsServiceLinkedRolePolicy",$param) and $param["IsServiceLinkedRolePolicy"] !== null) {
            $this->IsServiceLinkedRolePolicy = $param["IsServiceLinkedRolePolicy"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
