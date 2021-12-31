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
 * 访问控制规则
 *
 * @method string getRuleType() 获取requestHeader ：对请求头部进行访问控制
url ： 对访问url进行访问控制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleType(string $RuleType) 设置requestHeader ：对请求头部进行访问控制
url ： 对访问url进行访问控制
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleContent() 获取封禁内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleContent(string $RuleContent) 设置封禁内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegex() 获取on ：正则匹配
off ：字面匹配
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegex(string $Regex) 设置on ：正则匹配
off ：字面匹配
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleHeader() 获取RuleType为requestHeader时必填，否则不需要填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleHeader(string $RuleHeader) 设置RuleType为requestHeader时必填，否则不需要填
注意：此字段可能返回 null，表示取不到有效值。
 */
class AccessControlRule extends AbstractModel
{
    /**
     * @var string requestHeader ：对请求头部进行访问控制
url ： 对访问url进行访问控制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleType;

    /**
     * @var string 封禁内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleContent;

    /**
     * @var string on ：正则匹配
off ：字面匹配
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Regex;

    /**
     * @var string RuleType为requestHeader时必填，否则不需要填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleHeader;

    /**
     * @param string $RuleType requestHeader ：对请求头部进行访问控制
url ： 对访问url进行访问控制
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleContent 封禁内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Regex on ：正则匹配
off ：字面匹配
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleHeader RuleType为requestHeader时必填，否则不需要填
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

        if (array_key_exists("RuleContent",$param) and $param["RuleContent"] !== null) {
            $this->RuleContent = $param["RuleContent"];
        }

        if (array_key_exists("Regex",$param) and $param["Regex"] !== null) {
            $this->Regex = $param["Regex"];
        }

        if (array_key_exists("RuleHeader",$param) and $param["RuleHeader"] !== null) {
            $this->RuleHeader = $param["RuleHeader"];
        }
    }
}
