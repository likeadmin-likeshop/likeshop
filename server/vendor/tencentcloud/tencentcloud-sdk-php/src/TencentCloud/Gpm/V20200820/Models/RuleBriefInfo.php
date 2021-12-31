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
 * 规则简单信息
 *
 * @method string getRuleName() 获取规则名称 [a-zA-Z\d-\.]*
 * @method void setRuleName(string $RuleName) 设置规则名称 [a-zA-Z\d-\.]*
 * @method array getMatchCodeList() 获取关联匹配
 * @method void setMatchCodeList(array $MatchCodeList) 设置关联匹配
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getRuleCode() 获取规则code
 * @method void setRuleCode(string $RuleCode) 设置规则code
 */
class RuleBriefInfo extends AbstractModel
{
    /**
     * @var string 规则名称 [a-zA-Z\d-\.]*
     */
    public $RuleName;

    /**
     * @var array 关联匹配
     */
    public $MatchCodeList;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 规则code
     */
    public $RuleCode;

    /**
     * @param string $RuleName 规则名称 [a-zA-Z\d-\.]*
     * @param array $MatchCodeList 关联匹配
     * @param string $CreateTime 创建时间
     * @param string $RuleCode 规则code
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

        if (array_key_exists("MatchCodeList",$param) and $param["MatchCodeList"] !== null) {
            $this->MatchCodeList = [];
            foreach ($param["MatchCodeList"] as $key => $value){
                $obj = new StringKV();
                $obj->deserialize($value);
                array_push($this->MatchCodeList, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RuleCode",$param) and $param["RuleCode"] !== null) {
            $this->RuleCode = $param["RuleCode"];
        }
    }
}
