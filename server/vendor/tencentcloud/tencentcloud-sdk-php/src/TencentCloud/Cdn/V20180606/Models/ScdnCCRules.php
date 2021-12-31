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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * scdn 的自定义 cc 规则
 *
 * @method string getRuleType() 获取规则类型：
all：所有文件生效
file：指定文件后缀生效
directory：指定路径生效
path：指定绝对路径生效
index：首页
 * @method void setRuleType(string $RuleType) 设置规则类型：
all：所有文件生效
file：指定文件后缀生效
directory：指定路径生效
path：指定绝对路径生效
index：首页
 * @method array getRuleValue() 获取规则值
 * @method void setRuleValue(array $RuleValue) 设置规则值
 * @method integer getQps() 获取规则限频
 * @method void setQps(integer $Qps) 设置规则限频
 * @method integer getDetectionTime() 获取探测时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetectionTime(integer $DetectionTime) 设置探测时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFrequencyLimit() 获取限频阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrequencyLimit(integer $FrequencyLimit) 设置限频阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPunishmentSwitch() 获取IP 惩罚开关，可选on|off
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPunishmentSwitch(string $PunishmentSwitch) 设置IP 惩罚开关，可选on|off
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPunishmentTime() 获取IP 惩罚时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPunishmentTime(integer $PunishmentTime) 设置IP 惩罚时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAction() 获取执行动作，intercept|redirect
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAction(string $Action) 设置执行动作，intercept|redirect
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRedirectUrl() 获取动作为 redirect 时，重定向的url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedirectUrl(string $RedirectUrl) 设置动作为 redirect 时，重定向的url
注意：此字段可能返回 null，表示取不到有效值。
 */
class ScdnCCRules extends AbstractModel
{
    /**
     * @var string 规则类型：
all：所有文件生效
file：指定文件后缀生效
directory：指定路径生效
path：指定绝对路径生效
index：首页
     */
    public $RuleType;

    /**
     * @var array 规则值
     */
    public $RuleValue;

    /**
     * @var integer 规则限频
     */
    public $Qps;

    /**
     * @var integer 探测时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetectionTime;

    /**
     * @var integer 限频阈值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrequencyLimit;

    /**
     * @var string IP 惩罚开关，可选on|off
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PunishmentSwitch;

    /**
     * @var integer IP 惩罚时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PunishmentTime;

    /**
     * @var string 执行动作，intercept|redirect
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Action;

    /**
     * @var string 动作为 redirect 时，重定向的url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RedirectUrl;

    /**
     * @param string $RuleType 规则类型：
all：所有文件生效
file：指定文件后缀生效
directory：指定路径生效
path：指定绝对路径生效
index：首页
     * @param array $RuleValue 规则值
     * @param integer $Qps 规则限频
     * @param integer $DetectionTime 探测时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FrequencyLimit 限频阈值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PunishmentSwitch IP 惩罚开关，可选on|off
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PunishmentTime IP 惩罚时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Action 执行动作，intercept|redirect
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RedirectUrl 动作为 redirect 时，重定向的url
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RuleValue",$param) and $param["RuleValue"] !== null) {
            $this->RuleValue = $param["RuleValue"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("DetectionTime",$param) and $param["DetectionTime"] !== null) {
            $this->DetectionTime = $param["DetectionTime"];
        }

        if (array_key_exists("FrequencyLimit",$param) and $param["FrequencyLimit"] !== null) {
            $this->FrequencyLimit = $param["FrequencyLimit"];
        }

        if (array_key_exists("PunishmentSwitch",$param) and $param["PunishmentSwitch"] !== null) {
            $this->PunishmentSwitch = $param["PunishmentSwitch"];
        }

        if (array_key_exists("PunishmentTime",$param) and $param["PunishmentTime"] !== null) {
            $this->PunishmentTime = $param["PunishmentTime"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("RedirectUrl",$param) and $param["RedirectUrl"] !== null) {
            $this->RedirectUrl = $param["RedirectUrl"];
        }
    }
}
