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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLaneRules请求参数结构体
 *
 * @method integer getLimit() 获取每页展示的条数
 * @method void setLimit(integer $Limit) 设置每页展示的条数
 * @method integer getOffset() 获取翻页偏移量
 * @method void setOffset(integer $Offset) 设置翻页偏移量
 * @method string getSearchWord() 获取搜索关键词
 * @method void setSearchWord(string $SearchWord) 设置搜索关键词
 * @method string getRuleId() 获取泳道规则ID（用于精确搜索）
 * @method void setRuleId(string $RuleId) 设置泳道规则ID（用于精确搜索）
 */
class DescribeLaneRulesRequest extends AbstractModel
{
    /**
     * @var integer 每页展示的条数
     */
    public $Limit;

    /**
     * @var integer 翻页偏移量
     */
    public $Offset;

    /**
     * @var string 搜索关键词
     */
    public $SearchWord;

    /**
     * @var string 泳道规则ID（用于精确搜索）
     */
    public $RuleId;

    /**
     * @param integer $Limit 每页展示的条数
     * @param integer $Offset 翻页偏移量
     * @param string $SearchWord 搜索关键词
     * @param string $RuleId 泳道规则ID（用于精确搜索）
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
