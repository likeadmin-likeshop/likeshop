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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * prometheus告警历史
 *
 * @method string getRuleName() 获取告警名称
 * @method void setRuleName(string $RuleName) 设置告警名称
 * @method string getStartTime() 获取告警开始时间
 * @method void setStartTime(string $StartTime) 设置告警开始时间
 * @method string getContent() 获取告警内容
 * @method void setContent(string $Content) 设置告警内容
 * @method string getState() 获取告警状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(string $State) 设置告警状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleItem() 获取触发的规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleItem(string $RuleItem) 设置触发的规则名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicId() 获取告警渠道的id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicId(string $TopicId) 设置告警渠道的id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopicName() 获取告警渠道的名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicName(string $TopicName) 设置告警渠道的名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusAlertHistoryItem extends AbstractModel
{
    /**
     * @var string 告警名称
     */
    public $RuleName;

    /**
     * @var string 告警开始时间
     */
    public $StartTime;

    /**
     * @var string 告警内容
     */
    public $Content;

    /**
     * @var string 告警状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var string 触发的规则名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleItem;

    /**
     * @var string 告警渠道的id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicId;

    /**
     * @var string 告警渠道的名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicName;

    /**
     * @param string $RuleName 告警名称
     * @param string $StartTime 告警开始时间
     * @param string $Content 告警内容
     * @param string $State 告警状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleItem 触发的规则名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicId 告警渠道的id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TopicName 告警渠道的名称
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("RuleItem",$param) and $param["RuleItem"] !== null) {
            $this->RuleItem = $param["RuleItem"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }
    }
}
