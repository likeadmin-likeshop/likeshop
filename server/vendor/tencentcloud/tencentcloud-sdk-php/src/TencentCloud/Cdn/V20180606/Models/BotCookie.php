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
 * Bot cookie策略
 *
 * @method string getSwitch() 获取on|off
 * @method void setSwitch(string $Switch) 设置on|off
 * @method string getRuleType() 获取规则类型，当前只有all
 * @method void setRuleType(string $RuleType) 设置规则类型，当前只有all
 * @method array getRuleValue() 获取规则值，['*']
 * @method void setRuleValue(array $RuleValue) 设置规则值，['*']
 * @method string getAction() 获取执行动作，monitor|intercept|redirect|captcha
 * @method void setAction(string $Action) 设置执行动作，monitor|intercept|redirect|captcha
 * @method string getRedirectUrl() 获取重定向时设置的重定向页面
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedirectUrl(string $RedirectUrl) 设置重定向时设置的重定向页面
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class BotCookie extends AbstractModel
{
    /**
     * @var string on|off
     */
    public $Switch;

    /**
     * @var string 规则类型，当前只有all
     */
    public $RuleType;

    /**
     * @var array 规则值，['*']
     */
    public $RuleValue;

    /**
     * @var string 执行动作，monitor|intercept|redirect|captcha
     */
    public $Action;

    /**
     * @var string 重定向时设置的重定向页面
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RedirectUrl;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param string $Switch on|off
     * @param string $RuleType 规则类型，当前只有all
     * @param array $RuleValue 规则值，['*']
     * @param string $Action 执行动作，monitor|intercept|redirect|captcha
     * @param string $RedirectUrl 重定向时设置的重定向页面
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RuleValue",$param) and $param["RuleValue"] !== null) {
            $this->RuleValue = $param["RuleValue"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("RedirectUrl",$param) and $param["RedirectUrl"] !== null) {
            $this->RedirectUrl = $param["RedirectUrl"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
