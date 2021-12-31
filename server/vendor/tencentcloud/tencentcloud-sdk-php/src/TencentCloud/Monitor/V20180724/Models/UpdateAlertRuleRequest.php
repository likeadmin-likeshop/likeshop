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
 * UpdateAlertRule请求参数结构体
 *
 * @method string getRuleId() 获取Prometheus 报警规则 ID
 * @method void setRuleId(string $RuleId) 设置Prometheus 报警规则 ID
 * @method string getInstanceId() 获取Prometheus 实例 ID
 * @method void setInstanceId(string $InstanceId) 设置Prometheus 实例 ID
 * @method integer getRuleState() 获取规则状态码，取值如下：
<li>1=RuleDeleted</li>
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
默认状态码为 2 启用。
 * @method void setRuleState(integer $RuleState) 设置规则状态码，取值如下：
<li>1=RuleDeleted</li>
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
默认状态码为 2 启用。
 * @method string getRuleName() 获取报警规则名称
 * @method void setRuleName(string $RuleName) 设置报警规则名称
 * @method string getExpr() 获取报警规则表达式
 * @method void setExpr(string $Expr) 设置报警规则表达式
 * @method string getDuration() 获取报警规则持续时间
 * @method void setDuration(string $Duration) 设置报警规则持续时间
 * @method array getReceivers() 获取报警规则接收组列表
 * @method void setReceivers(array $Receivers) 设置报警规则接收组列表
 * @method array getLabels() 获取报警规则标签列表
 * @method void setLabels(array $Labels) 设置报警规则标签列表
 * @method array getAnnotations() 获取报警规则注释列表。

告警对象和告警消息是 Prometheus Rule Annotations 的特殊字段，需要通过 annotations 来传递，对应的 Key 分别为summary/description。
 * @method void setAnnotations(array $Annotations) 设置报警规则注释列表。

告警对象和告警消息是 Prometheus Rule Annotations 的特殊字段，需要通过 annotations 来传递，对应的 Key 分别为summary/description。
 * @method string getType() 获取报警策略模板分类
 * @method void setType(string $Type) 设置报警策略模板分类
 */
class UpdateAlertRuleRequest extends AbstractModel
{
    /**
     * @var string Prometheus 报警规则 ID
     */
    public $RuleId;

    /**
     * @var string Prometheus 实例 ID
     */
    public $InstanceId;

    /**
     * @var integer 规则状态码，取值如下：
<li>1=RuleDeleted</li>
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
默认状态码为 2 启用。
     */
    public $RuleState;

    /**
     * @var string 报警规则名称
     */
    public $RuleName;

    /**
     * @var string 报警规则表达式
     */
    public $Expr;

    /**
     * @var string 报警规则持续时间
     */
    public $Duration;

    /**
     * @var array 报警规则接收组列表
     */
    public $Receivers;

    /**
     * @var array 报警规则标签列表
     */
    public $Labels;

    /**
     * @var array 报警规则注释列表。

告警对象和告警消息是 Prometheus Rule Annotations 的特殊字段，需要通过 annotations 来传递，对应的 Key 分别为summary/description。
     */
    public $Annotations;

    /**
     * @var string 报警策略模板分类
     */
    public $Type;

    /**
     * @param string $RuleId Prometheus 报警规则 ID
     * @param string $InstanceId Prometheus 实例 ID
     * @param integer $RuleState 规则状态码，取值如下：
<li>1=RuleDeleted</li>
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
默认状态码为 2 启用。
     * @param string $RuleName 报警规则名称
     * @param string $Expr 报警规则表达式
     * @param string $Duration 报警规则持续时间
     * @param array $Receivers 报警规则接收组列表
     * @param array $Labels 报警规则标签列表
     * @param array $Annotations 报警规则注释列表。

告警对象和告警消息是 Prometheus Rule Annotations 的特殊字段，需要通过 annotations 来传递，对应的 Key 分别为summary/description。
     * @param string $Type 报警策略模板分类
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RuleState",$param) and $param["RuleState"] !== null) {
            $this->RuleState = $param["RuleState"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
