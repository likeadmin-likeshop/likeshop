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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 微服务网关单元化规则项
 *
 * @method string getRelationship() 获取逻辑关系：AND/OR
 * @method void setRelationship(string $Relationship) 设置逻辑关系：AND/OR
 * @method string getDestNamespaceId() 获取目的地命名空间ID
 * @method void setDestNamespaceId(string $DestNamespaceId) 设置目的地命名空间ID
 * @method string getDestNamespaceName() 获取目的地命名空间名称
 * @method void setDestNamespaceName(string $DestNamespaceName) 设置目的地命名空间名称
 * @method string getName() 获取规则项名称
 * @method void setName(string $Name) 设置规则项名称
 * @method string getId() 获取规则项ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置规则项ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnitRuleId() 获取单元化规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitRuleId(string $UnitRuleId) 设置单元化规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPriority() 获取规则顺序，越小优先级越高：默认为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPriority(integer $Priority) 设置规则顺序，越小优先级越高：默认为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取规则描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置规则描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUnitRuleTagList() 获取规则标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitRuleTagList(array $UnitRuleTagList) 设置规则标签列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class UnitRuleItem extends AbstractModel
{
    /**
     * @var string 逻辑关系：AND/OR
     */
    public $Relationship;

    /**
     * @var string 目的地命名空间ID
     */
    public $DestNamespaceId;

    /**
     * @var string 目的地命名空间名称
     */
    public $DestNamespaceName;

    /**
     * @var string 规则项名称
     */
    public $Name;

    /**
     * @var string 规则项ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 单元化规则ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitRuleId;

    /**
     * @var integer 规则顺序，越小优先级越高：默认为0
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Priority;

    /**
     * @var string 规则描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var array 规则标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitRuleTagList;

    /**
     * @param string $Relationship 逻辑关系：AND/OR
     * @param string $DestNamespaceId 目的地命名空间ID
     * @param string $DestNamespaceName 目的地命名空间名称
     * @param string $Name 规则项名称
     * @param string $Id 规则项ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UnitRuleId 单元化规则ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Priority 规则顺序，越小优先级越高：默认为0
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 规则描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UnitRuleTagList 规则标签列表
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
        if (array_key_exists("Relationship",$param) and $param["Relationship"] !== null) {
            $this->Relationship = $param["Relationship"];
        }

        if (array_key_exists("DestNamespaceId",$param) and $param["DestNamespaceId"] !== null) {
            $this->DestNamespaceId = $param["DestNamespaceId"];
        }

        if (array_key_exists("DestNamespaceName",$param) and $param["DestNamespaceName"] !== null) {
            $this->DestNamespaceName = $param["DestNamespaceName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("UnitRuleId",$param) and $param["UnitRuleId"] !== null) {
            $this->UnitRuleId = $param["UnitRuleId"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("UnitRuleTagList",$param) and $param["UnitRuleTagList"] !== null) {
            $this->UnitRuleTagList = [];
            foreach ($param["UnitRuleTagList"] as $key => $value){
                $obj = new UnitRuleTag();
                $obj->deserialize($value);
                array_push($this->UnitRuleTagList, $obj);
            }
        }
    }
}
