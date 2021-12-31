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
 * prometheus 报警规则集
 *
 * @method string getRuleId() 获取规则 ID
 * @method void setRuleId(string $RuleId) 设置规则 ID
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method integer getRuleState() 获取规则状态码
 * @method void setRuleState(integer $RuleState) 设置规则状态码
 * @method string getType() 获取规则类别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置规则类别
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabels() 获取规则标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置规则标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAnnotations() 获取规则注释列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnnotations(array $Annotations) 设置规则注释列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpr() 获取规则表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpr(string $Expr) 设置规则表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDuration() 获取规则报警持续时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(string $Duration) 设置规则报警持续时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReceivers() 获取报警接收组列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceivers(array $Receivers) 设置报警接收组列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHealth() 获取规则运行健康状态，取值如下：
<li>unknown 未知状态</li>
<li>pending 加载中</li>
<li>ok 运行正常</li>
<li>err 运行错误</li>
 * @method void setHealth(string $Health) 设置规则运行健康状态，取值如下：
<li>unknown 未知状态</li>
<li>pending 加载中</li>
<li>ok 运行正常</li>
<li>err 运行错误</li>
 * @method string getCreatedAt() 获取规则创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置规则创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取规则更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置规则更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusRuleSet extends AbstractModel
{
    /**
     * @var string 规则 ID
     */
    public $RuleId;

    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var integer 规则状态码
     */
    public $RuleState;

    /**
     * @var string 规则类别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var array 规则标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @var array 规则注释列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Annotations;

    /**
     * @var string 规则表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Expr;

    /**
     * @var string 规则报警持续时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var array 报警接收组列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Receivers;

    /**
     * @var string 规则运行健康状态，取值如下：
<li>unknown 未知状态</li>
<li>pending 加载中</li>
<li>ok 运行正常</li>
<li>err 运行错误</li>
     */
    public $Health;

    /**
     * @var string 规则创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string 规则更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @param string $RuleId 规则 ID
     * @param string $RuleName 规则名称
     * @param integer $RuleState 规则状态码
     * @param string $Type 规则类别
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Labels 规则标签列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Annotations 规则注释列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Expr 规则表达式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Duration 规则报警持续时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Receivers 报警接收组列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Health 规则运行健康状态，取值如下：
<li>unknown 未知状态</li>
<li>pending 加载中</li>
<li>ok 运行正常</li>
<li>err 运行错误</li>
     * @param string $CreatedAt 规则创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt 规则更新时间
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

        if (array_key_exists("RuleState",$param) and $param["RuleState"] !== null) {
            $this->RuleState = $param["RuleState"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new PrometheusRuleKV();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Annotations",$param) and $param["Annotations"] !== null) {
            $this->Annotations = [];
            foreach ($param["Annotations"] as $key => $value){
                $obj = new PrometheusRuleKV();
                $obj->deserialize($value);
                array_push($this->Annotations, $obj);
            }
        }

        if (array_key_exists("Expr",$param) and $param["Expr"] !== null) {
            $this->Expr = $param["Expr"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Receivers",$param) and $param["Receivers"] !== null) {
            $this->Receivers = $param["Receivers"];
        }

        if (array_key_exists("Health",$param) and $param["Health"] !== null) {
            $this->Health = $param["Health"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
