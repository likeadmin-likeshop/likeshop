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
namespace TencentCloud\Iotcloud\V20180614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReplaceTopicRule请求参数结构体
 *
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method TopicRulePayload getTopicRulePayload() 获取替换的规则包体
 * @method void setTopicRulePayload(TopicRulePayload $TopicRulePayload) 设置替换的规则包体
 * @method integer getModifyType() 获取修改类型，0：其他，1：创建行为，2：更新行为，3：删除行为
 * @method void setModifyType(integer $ModifyType) 设置修改类型，0：其他，1：创建行为，2：更新行为，3：删除行为
 * @method integer getActionIndex() 获取action增删改变更填对应topicRulePayload里面第几个action
 * @method void setActionIndex(integer $ActionIndex) 设置action增删改变更填对应topicRulePayload里面第几个action
 */
class ReplaceTopicRuleRequest extends AbstractModel
{
    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var TopicRulePayload 替换的规则包体
     */
    public $TopicRulePayload;

    /**
     * @var integer 修改类型，0：其他，1：创建行为，2：更新行为，3：删除行为
     */
    public $ModifyType;

    /**
     * @var integer action增删改变更填对应topicRulePayload里面第几个action
     */
    public $ActionIndex;

    /**
     * @param string $RuleName 规则名称
     * @param TopicRulePayload $TopicRulePayload 替换的规则包体
     * @param integer $ModifyType 修改类型，0：其他，1：创建行为，2：更新行为，3：删除行为
     * @param integer $ActionIndex action增删改变更填对应topicRulePayload里面第几个action
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

        if (array_key_exists("TopicRulePayload",$param) and $param["TopicRulePayload"] !== null) {
            $this->TopicRulePayload = new TopicRulePayload();
            $this->TopicRulePayload->deserialize($param["TopicRulePayload"]);
        }

        if (array_key_exists("ModifyType",$param) and $param["ModifyType"] !== null) {
            $this->ModifyType = $param["ModifyType"];
        }

        if (array_key_exists("ActionIndex",$param) and $param["ActionIndex"] !== null) {
            $this->ActionIndex = $param["ActionIndex"];
        }
    }
}
