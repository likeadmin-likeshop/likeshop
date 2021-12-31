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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询策略输出的模板策略组信息
 *
 * @method integer getGroupId() 获取策略组id
 * @method void setGroupId(integer $GroupId) 设置策略组id
 * @method string getGroupName() 获取策略组名称
 * @method void setGroupName(string $GroupName) 设置策略组名称
 * @method string getViewName() 获取策略类型
 * @method void setViewName(string $ViewName) 设置策略类型
 * @method string getRemark() 获取策略组说明
 * @method void setRemark(string $Remark) 设置策略组说明
 * @method string getLastEditUin() 获取最后编辑的用户uin
 * @method void setLastEditUin(string $LastEditUin) 设置最后编辑的用户uin
 * @method integer getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInsertTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInsertTime(integer $InsertTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsUnionRule() 获取是否且规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsUnionRule(integer $IsUnionRule) 设置是否且规则
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribePolicyGroupInfoConditionTpl extends AbstractModel
{
    /**
     * @var integer 策略组id
     */
    public $GroupId;

    /**
     * @var string 策略组名称
     */
    public $GroupName;

    /**
     * @var string 策略类型
     */
    public $ViewName;

    /**
     * @var string 策略组说明
     */
    public $Remark;

    /**
     * @var string 最后编辑的用户uin
     */
    public $LastEditUin;

    /**
     * @var integer 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InsertTime;

    /**
     * @var integer 是否且规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsUnionRule;

    /**
     * @param integer $GroupId 策略组id
     * @param string $GroupName 策略组名称
     * @param string $ViewName 策略类型
     * @param string $Remark 策略组说明
     * @param string $LastEditUin 最后编辑的用户uin
     * @param integer $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InsertTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsUnionRule 是否且规则
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("LastEditUin",$param) and $param["LastEditUin"] !== null) {
            $this->LastEditUin = $param["LastEditUin"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("IsUnionRule",$param) and $param["IsUnionRule"] !== null) {
            $this->IsUnionRule = $param["IsUnionRule"];
        }
    }
}
