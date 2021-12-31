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
 * 微服务网关API限流规则
 *
 * @method string getRuleId() 获取rule Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(string $RuleId) 设置rule Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiId() 获取API ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiId(string $ApiId) 设置API ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleName() 获取限流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置限流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxQps() 获取最大限流qps
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxQps(integer $MaxQps) 设置最大限流qps
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUsableStatus() 获取生效/禁用, enabled/disabled
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsableStatus(string $UsableStatus) 设置生效/禁用, enabled/disabled
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleContent() 获取规则内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleContent(string $RuleContent) 设置规则内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTsfRuleId() 获取Tsf Rule ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTsfRuleId(string $TsfRuleId) 设置Tsf Rule ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedTime(string $UpdatedTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApiRateLimitRule extends AbstractModel
{
    /**
     * @var string rule Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string API ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiId;

    /**
     * @var string 限流名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @var integer 最大限流qps
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxQps;

    /**
     * @var string 生效/禁用, enabled/disabled
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsableStatus;

    /**
     * @var string 规则内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleContent;

    /**
     * @var string Tsf Rule ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TsfRuleId;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedTime;

    /**
     * @param string $RuleId rule Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiId API ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleName 限流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxQps 最大限流qps
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UsableStatus 生效/禁用, enabled/disabled
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleContent 规则内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TsfRuleId Tsf Rule ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedTime 更新时间
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

        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("MaxQps",$param) and $param["MaxQps"] !== null) {
            $this->MaxQps = $param["MaxQps"];
        }

        if (array_key_exists("UsableStatus",$param) and $param["UsableStatus"] !== null) {
            $this->UsableStatus = $param["UsableStatus"];
        }

        if (array_key_exists("RuleContent",$param) and $param["RuleContent"] !== null) {
            $this->RuleContent = $param["RuleContent"];
        }

        if (array_key_exists("TsfRuleId",$param) and $param["TsfRuleId"] !== null) {
            $this->TsfRuleId = $param["TsfRuleId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }
    }
}
