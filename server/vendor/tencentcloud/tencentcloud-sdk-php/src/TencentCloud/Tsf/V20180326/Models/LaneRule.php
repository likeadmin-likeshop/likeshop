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
 * 泳道规则
 *
 * @method string getRuleId() 获取泳道规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(string $RuleId) 设置泳道规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleName() 获取泳道规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置泳道规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPriority() 获取优先级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPriority(integer $Priority) 设置优先级
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRuleTagList() 获取泳道规则标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleTagList(array $RuleTagList) 设置泳道规则标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleTagRelationship() 获取泳道规则标签关系
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleTagRelationship(string $RuleTagRelationship) 设置泳道规则标签关系
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLaneId() 获取泳道ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLaneId(string $LaneId) 设置泳道ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnable() 获取开启状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnable(boolean $Enable) 设置开启状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class LaneRule extends AbstractModel
{
    /**
     * @var string 泳道规则ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string 泳道规则名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @var integer 优先级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Priority;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var array 泳道规则标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleTagList;

    /**
     * @var string 泳道规则标签关系
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleTagRelationship;

    /**
     * @var string 泳道ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LaneId;

    /**
     * @var boolean 开启状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enable;

    /**
     * @var integer 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param string $RuleId 泳道规则ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleName 泳道规则名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Priority 优先级
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RuleTagList 泳道规则标签列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleTagRelationship 泳道规则标签关系
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LaneId 泳道ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Enable 开启状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime 更新时间
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("RuleTagList",$param) and $param["RuleTagList"] !== null) {
            $this->RuleTagList = [];
            foreach ($param["RuleTagList"] as $key => $value){
                $obj = new LaneRuleTag();
                $obj->deserialize($value);
                array_push($this->RuleTagList, $obj);
            }
        }

        if (array_key_exists("RuleTagRelationship",$param) and $param["RuleTagRelationship"] !== null) {
            $this->RuleTagRelationship = $param["RuleTagRelationship"];
        }

        if (array_key_exists("LaneId",$param) and $param["LaneId"] !== null) {
            $this->LaneId = $param["LaneId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
