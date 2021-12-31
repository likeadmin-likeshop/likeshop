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
 * DescribeRepositories请求参数结构体
 *
 * @method string getSearchWord() 获取查询关键字（按照仓库名称搜索）
 * @method void setSearchWord(string $SearchWord) 设置查询关键字（按照仓库名称搜索）
 * @method integer getOffset() 获取查询起始偏移
 * @method void setOffset(integer $Offset) 设置查询起始偏移
 * @method integer getLimit() 获取返回数量限制
 * @method void setLimit(integer $Limit) 设置返回数量限制
 * @method string getRepositoryType() 获取仓库类型（默认仓库：default，私有仓库：private）
 * @method void setRepositoryType(string $RepositoryType) 设置仓库类型（默认仓库：default，私有仓库：private）
 */
class DescribeRepositoriesRequest extends AbstractModel
{
    /**
     * @var string 查询关键字（按照仓库名称搜索）
     */
    public $SearchWord;

    /**
     * @var integer 查询起始偏移
     */
    public $Offset;

    /**
     * @var integer 返回数量限制
     */
    public $Limit;

    /**
     * @var string 仓库类型（默认仓库：default，私有仓库：private）
     */
    public $RepositoryType;

    /**
     * @param string $SearchWord 查询关键字（按照仓库名称搜索）
     * @param integer $Offset 查询起始偏移
     * @param integer $Limit 返回数量限制
     * @param string $RepositoryType 仓库类型（默认仓库：default，私有仓库：private）
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
        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("RepositoryType",$param) and $param["RepositoryType"] !== null) {
            $this->RepositoryType = $param["RepositoryType"];
        }
    }
}
