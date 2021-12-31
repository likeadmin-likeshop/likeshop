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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAuditRules请求参数结构体
 *
 * @method string getRuleId() 获取审计规则 ID。
 * @method void setRuleId(string $RuleId) 设置审计规则 ID。
 * @method string getRuleName() 获取审计规则名称。支持按审计规则名称进行模糊匹配查询。
 * @method void setRuleName(string $RuleName) 设置审计规则名称。支持按审计规则名称进行模糊匹配查询。
 * @method integer getLimit() 获取分页大小参数。默认值为 20，最小值为 1，最大值为 100。
 * @method void setLimit(integer $Limit) 设置分页大小参数。默认值为 20，最小值为 1，最大值为 100。
 * @method integer getOffset() 获取分页偏移量。
 * @method void setOffset(integer $Offset) 设置分页偏移量。
 */
class DescribeAuditRulesRequest extends AbstractModel
{
    /**
     * @var string 审计规则 ID。
     */
    public $RuleId;

    /**
     * @var string 审计规则名称。支持按审计规则名称进行模糊匹配查询。
     */
    public $RuleName;

    /**
     * @var integer 分页大小参数。默认值为 20，最小值为 1，最大值为 100。
     */
    public $Limit;

    /**
     * @var integer 分页偏移量。
     */
    public $Offset;

    /**
     * @param string $RuleId 审计规则 ID。
     * @param string $RuleName 审计规则名称。支持按审计规则名称进行模糊匹配查询。
     * @param integer $Limit 分页大小参数。默认值为 20，最小值为 1，最大值为 100。
     * @param integer $Offset 分页偏移量。
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
