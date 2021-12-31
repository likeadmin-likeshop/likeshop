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
 * DescribeRules请求参数结构体
 *
 * @method integer getPageNumber() 获取当前页号，不传则返回第一页
 * @method void setPageNumber(integer $PageNumber) 设置当前页号，不传则返回第一页
 * @method integer getPageSize() 获取单页大小，最大 30，不填默认30
 * @method void setPageSize(integer $PageSize) 设置单页大小，最大 30，不填默认30
 * @method string getSearchType() 获取查询类型（可选）：match表示通过matchCode或者matchName来搜索，rule表示通过ruleCode或者ruleName来搜索，其余类型不做过滤处理。
 * @method void setSearchType(string $SearchType) 设置查询类型（可选）：match表示通过matchCode或者matchName来搜索，rule表示通过ruleCode或者ruleName来搜索，其余类型不做过滤处理。
 * @method string getKeyword() 获取查询关键词，针对SearchType进行具体过滤的内容。
 * @method void setKeyword(string $Keyword) 设置查询关键词，针对SearchType进行具体过滤的内容。
 * @method array getTags() 获取标签列表，用于过滤。
 * @method void setTags(array $Tags) 设置标签列表，用于过滤。
 */
class DescribeRulesRequest extends AbstractModel
{
    /**
     * @var integer 当前页号，不传则返回第一页
     */
    public $PageNumber;

    /**
     * @var integer 单页大小，最大 30，不填默认30
     */
    public $PageSize;

    /**
     * @var string 查询类型（可选）：match表示通过matchCode或者matchName来搜索，rule表示通过ruleCode或者ruleName来搜索，其余类型不做过滤处理。
     */
    public $SearchType;

    /**
     * @var string 查询关键词，针对SearchType进行具体过滤的内容。
     */
    public $Keyword;

    /**
     * @var array 标签列表，用于过滤。
     */
    public $Tags;

    /**
     * @param integer $PageNumber 当前页号，不传则返回第一页
     * @param integer $PageSize 单页大小，最大 30，不填默认30
     * @param string $SearchType 查询类型（可选）：match表示通过matchCode或者matchName来搜索，rule表示通过ruleCode或者ruleName来搜索，其余类型不做过滤处理。
     * @param string $Keyword 查询关键词，针对SearchType进行具体过滤的内容。
     * @param array $Tags 标签列表，用于过滤。
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("SearchType",$param) and $param["SearchType"] !== null) {
            $this->SearchType = $param["SearchType"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
