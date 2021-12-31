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
 * CreateAuditRule请求参数结构体
 *
 * @method string getRuleName() 获取审计规则名称。
 * @method void setRuleName(string $RuleName) 设置审计规则名称。
 * @method string getDescription() 获取审计规则描述。
 * @method void setDescription(string $Description) 设置审计规则描述。
 * @method array getRuleFilters() 获取审计规则过滤条件。若设置了过滤条件，则不会开启全审计。
 * @method void setRuleFilters(array $RuleFilters) 设置审计规则过滤条件。若设置了过滤条件，则不会开启全审计。
 * @method boolean getAuditAll() 获取是否开启全审计。支持值包括：false – 不开启全审计，true – 开启全审计。用户未设置审计规则过滤条件时，默认开启全审计。
 * @method void setAuditAll(boolean $AuditAll) 设置是否开启全审计。支持值包括：false – 不开启全审计，true – 开启全审计。用户未设置审计规则过滤条件时，默认开启全审计。
 */
class CreateAuditRuleRequest extends AbstractModel
{
    /**
     * @var string 审计规则名称。
     */
    public $RuleName;

    /**
     * @var string 审计规则描述。
     */
    public $Description;

    /**
     * @var array 审计规则过滤条件。若设置了过滤条件，则不会开启全审计。
     */
    public $RuleFilters;

    /**
     * @var boolean 是否开启全审计。支持值包括：false – 不开启全审计，true – 开启全审计。用户未设置审计规则过滤条件时，默认开启全审计。
     */
    public $AuditAll;

    /**
     * @param string $RuleName 审计规则名称。
     * @param string $Description 审计规则描述。
     * @param array $RuleFilters 审计规则过滤条件。若设置了过滤条件，则不会开启全审计。
     * @param boolean $AuditAll 是否开启全审计。支持值包括：false – 不开启全审计，true – 开启全审计。用户未设置审计规则过滤条件时，默认开启全审计。
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RuleFilters",$param) and $param["RuleFilters"] !== null) {
            $this->RuleFilters = [];
            foreach ($param["RuleFilters"] as $key => $value){
                $obj = new AuditFilter();
                $obj->deserialize($value);
                array_push($this->RuleFilters, $obj);
            }
        }

        if (array_key_exists("AuditAll",$param) and $param["AuditAll"] !== null) {
            $this->AuditAll = $param["AuditAll"];
        }
    }
}
