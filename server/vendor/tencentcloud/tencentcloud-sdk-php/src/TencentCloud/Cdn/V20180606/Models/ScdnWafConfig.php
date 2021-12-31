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
 * waf配置类型
 *
 * @method string getSwitch() 获取on|off
 * @method void setSwitch(string $Switch) 设置on|off
 * @method string getMode() 获取intercept|observe，默认intercept
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMode(string $Mode) 设置intercept|observe，默认intercept
注意：此字段可能返回 null，表示取不到有效值。
 * @method ScdnErrorPage getErrorPage() 获取重定向的错误页面
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorPage(ScdnErrorPage $ErrorPage) 设置重定向的错误页面
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWebShellSwitch() 获取webshell拦截开关，on|off，默认off
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebShellSwitch(string $WebShellSwitch) 设置webshell拦截开关，on|off，默认off
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRules() 获取类型拦截规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRules(array $Rules) 设置类型拦截规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevel() 获取waf规则等级，可取100|200|300
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(integer $Level) 设置waf规则等级，可取100|200|300
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubRuleSwitch() 获取waf子规则开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubRuleSwitch(array $SubRuleSwitch) 设置waf子规则开关
注意：此字段可能返回 null，表示取不到有效值。
 */
class ScdnWafConfig extends AbstractModel
{
    /**
     * @var string on|off
     */
    public $Switch;

    /**
     * @var string intercept|observe，默认intercept
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mode;

    /**
     * @var ScdnErrorPage 重定向的错误页面
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorPage;

    /**
     * @var string webshell拦截开关，on|off，默认off
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebShellSwitch;

    /**
     * @var array 类型拦截规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rules;

    /**
     * @var integer waf规则等级，可取100|200|300
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var array waf子规则开关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubRuleSwitch;

    /**
     * @param string $Switch on|off
     * @param string $Mode intercept|observe，默认intercept
注意：此字段可能返回 null，表示取不到有效值。
     * @param ScdnErrorPage $ErrorPage 重定向的错误页面
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WebShellSwitch webshell拦截开关，on|off，默认off
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Rules 类型拦截规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Level waf规则等级，可取100|200|300
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubRuleSwitch waf子规则开关
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

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("ErrorPage",$param) and $param["ErrorPage"] !== null) {
            $this->ErrorPage = new ScdnErrorPage();
            $this->ErrorPage->deserialize($param["ErrorPage"]);
        }

        if (array_key_exists("WebShellSwitch",$param) and $param["WebShellSwitch"] !== null) {
            $this->WebShellSwitch = $param["WebShellSwitch"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new ScdnWafRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("SubRuleSwitch",$param) and $param["SubRuleSwitch"] !== null) {
            $this->SubRuleSwitch = [];
            foreach ($param["SubRuleSwitch"] as $key => $value){
                $obj = new WafSubRuleStatus();
                $obj->deserialize($value);
                array_push($this->SubRuleSwitch, $obj);
            }
        }
    }
}
