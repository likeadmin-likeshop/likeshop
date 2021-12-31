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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCheckConfigAssetList请求参数结构体
 *
 * @method string getId() 获取检查项UUID
 * @method void setId(string $Id) 设置检查项UUID
 * @method integer getOffset() 获取页码
 * @method void setOffset(integer $Offset) 设置页码
 * @method integer getLimit() 获取每页列表数
 * @method void setLimit(integer $Limit) 设置每页列表数
 * @method array getSearch() 获取db搜索条件
 * @method void setSearch(array $Search) 设置db搜索条件
 * @method array getFilter() 获取ES过滤条件
 * @method void setFilter(array $Filter) 设置ES过滤条件
 */
class DescribeCheckConfigAssetListRequest extends AbstractModel
{
    /**
     * @var string 检查项UUID
     */
    public $Id;

    /**
     * @var integer 页码
     */
    public $Offset;

    /**
     * @var integer 每页列表数
     */
    public $Limit;

    /**
     * @var array db搜索条件
     */
    public $Search;

    /**
     * @var array ES过滤条件
     */
    public $Filter;

    /**
     * @param string $Id 检查项UUID
     * @param integer $Offset 页码
     * @param integer $Limit 每页列表数
     * @param array $Search db搜索条件
     * @param array $Filter ES过滤条件
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Search",$param) and $param["Search"] !== null) {
            $this->Search = [];
            foreach ($param["Search"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Search, $obj);
            }
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = [];
            foreach ($param["Filter"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filter, $obj);
            }
        }
    }
}
