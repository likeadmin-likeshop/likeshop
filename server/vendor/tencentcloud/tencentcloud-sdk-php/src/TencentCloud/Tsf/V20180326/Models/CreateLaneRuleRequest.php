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
 * CreateLaneRule请求参数结构体
 *
 * @method string getRuleName() 获取泳道规则名称
 * @method void setRuleName(string $RuleName) 设置泳道规则名称
 * @method string getRemark() 获取泳道规则备注
 * @method void setRemark(string $Remark) 设置泳道规则备注
 * @method array getRuleTagList() 获取泳道规则标签列表
 * @method void setRuleTagList(array $RuleTagList) 设置泳道规则标签列表
 * @method string getRuleTagRelationship() 获取泳道规则标签关系
 * @method void setRuleTagRelationship(string $RuleTagRelationship) 设置泳道规则标签关系
 * @method string getLaneId() 获取泳道Id
 * @method void setLaneId(string $LaneId) 设置泳道Id
 */
class CreateLaneRuleRequest extends AbstractModel
{
    /**
     * @var string 泳道规则名称
     */
    public $RuleName;

    /**
     * @var string 泳道规则备注
     */
    public $Remark;

    /**
     * @var array 泳道规则标签列表
     */
    public $RuleTagList;

    /**
     * @var string 泳道规则标签关系
     */
    public $RuleTagRelationship;

    /**
     * @var string 泳道Id
     */
    public $LaneId;

    /**
     * @param string $RuleName 泳道规则名称
     * @param string $Remark 泳道规则备注
     * @param array $RuleTagList 泳道规则标签列表
     * @param string $RuleTagRelationship 泳道规则标签关系
     * @param string $LaneId 泳道Id
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
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
    }
}
