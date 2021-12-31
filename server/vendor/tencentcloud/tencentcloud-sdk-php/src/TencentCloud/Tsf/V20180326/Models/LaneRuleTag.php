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
 * 泳道规则标签
 *
 * @method string getTagId() 获取标签ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagId(string $TagId) 设置标签ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTagName() 获取标签名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagName(string $TagName) 设置标签名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTagOperator() 获取标签操作符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagOperator(string $TagOperator) 设置标签操作符
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTagValue() 获取标签值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagValue(string $TagValue) 设置标签值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLaneRuleId() 获取泳道规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLaneRuleId(string $LaneRuleId) 设置泳道规则ID
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
class LaneRuleTag extends AbstractModel
{
    /**
     * @var string 标签ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagId;

    /**
     * @var string 标签名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagName;

    /**
     * @var string 标签操作符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagOperator;

    /**
     * @var string 标签值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagValue;

    /**
     * @var string 泳道规则ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LaneRuleId;

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
     * @param string $TagId 标签ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TagName 标签名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TagOperator 标签操作符
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TagValue 标签值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LaneRuleId 泳道规则ID
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
        if (array_key_exists("TagId",$param) and $param["TagId"] !== null) {
            $this->TagId = $param["TagId"];
        }

        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            $this->TagName = $param["TagName"];
        }

        if (array_key_exists("TagOperator",$param) and $param["TagOperator"] !== null) {
            $this->TagOperator = $param["TagOperator"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }

        if (array_key_exists("LaneRuleId",$param) and $param["LaneRuleId"] !== null) {
            $this->LaneRuleId = $param["LaneRuleId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
