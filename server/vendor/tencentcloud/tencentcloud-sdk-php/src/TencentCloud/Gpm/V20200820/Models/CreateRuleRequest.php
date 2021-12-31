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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRule请求参数结构体
 *
 * @method string getRuleName() 获取规则名称，[a-zA-Z0-9-\.]* 长度128
 * @method void setRuleName(string $RuleName) 设置规则名称，[a-zA-Z0-9-\.]* 长度128
 * @method string getRuleScript() 获取规则脚本，长度65535
 * @method void setRuleScript(string $RuleScript) 设置规则脚本，长度65535
 * @method string getRuleDesc() 获取规则描述，最长1024
 * @method void setRuleDesc(string $RuleDesc) 设置规则描述，最长1024
 * @method array getTags() 获取标签，key-value结构的数组，最多关联50组标签
 * @method void setTags(array $Tags) 设置标签，key-value结构的数组，最多关联50组标签
 */
class CreateRuleRequest extends AbstractModel
{
    /**
     * @var string 规则名称，[a-zA-Z0-9-\.]* 长度128
     */
    public $RuleName;

    /**
     * @var string 规则脚本，长度65535
     */
    public $RuleScript;

    /**
     * @var string 规则描述，最长1024
     */
    public $RuleDesc;

    /**
     * @var array 标签，key-value结构的数组，最多关联50组标签
     */
    public $Tags;

    /**
     * @param string $RuleName 规则名称，[a-zA-Z0-9-\.]* 长度128
     * @param string $RuleScript 规则脚本，长度65535
     * @param string $RuleDesc 规则描述，最长1024
     * @param array $Tags 标签，key-value结构的数组，最多关联50组标签
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

        if (array_key_exists("RuleScript",$param) and $param["RuleScript"] !== null) {
            $this->RuleScript = $param["RuleScript"];
        }

        if (array_key_exists("RuleDesc",$param) and $param["RuleDesc"] !== null) {
            $this->RuleDesc = $param["RuleDesc"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new StringKV();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
