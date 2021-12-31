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
 * ModifyRule请求参数结构体
 *
 * @method string getRuleCode() 获取规则code
 * @method void setRuleCode(string $RuleCode) 设置规则code
 * @method string getRuleName() 获取规则名称，只能包含数字、字母、. 和 -
 * @method void setRuleName(string $RuleName) 设置规则名称，只能包含数字、字母、. 和 -
 * @method string getRuleDesc() 获取规则描述，最长1024
 * @method void setRuleDesc(string $RuleDesc) 设置规则描述，最长1024
 * @method array getTags() 获取标签，key-value结构的数组，最多关联50组标签
 * @method void setTags(array $Tags) 设置标签，key-value结构的数组，最多关联50组标签
 */
class ModifyRuleRequest extends AbstractModel
{
    /**
     * @var string 规则code
     */
    public $RuleCode;

    /**
     * @var string 规则名称，只能包含数字、字母、. 和 -
     */
    public $RuleName;

    /**
     * @var string 规则描述，最长1024
     */
    public $RuleDesc;

    /**
     * @var array 标签，key-value结构的数组，最多关联50组标签
     */
    public $Tags;

    /**
     * @param string $RuleCode 规则code
     * @param string $RuleName 规则名称，只能包含数字、字母、. 和 -
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
        if (array_key_exists("RuleCode",$param) and $param["RuleCode"] !== null) {
            $this->RuleCode = $param["RuleCode"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
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
