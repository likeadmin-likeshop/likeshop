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
 * DescribeComplianceAssetList请求参数结构体
 *
 * @method integer getOffset() 获取页码
 * @method void setOffset(integer $Offset) 设置页码
 * @method integer getLimit() 获取每页数量
 * @method void setLimit(integer $Limit) 设置每页数量
 * @method string getId() 获取检查项uuid
 * @method void setId(string $Id) 设置检查项uuid
 * @method array getFilter() 获取过滤条件
 * @method void setFilter(array $Filter) 设置过滤条件
 * @method array getSearch() 获取查询条件
 * @method void setSearch(array $Search) 设置查询条件
 */
class DescribeComplianceAssetListRequest extends AbstractModel
{
    /**
     * @var integer 页码
     */
    public $Offset;

    /**
     * @var integer 每页数量
     */
    public $Limit;

    /**
     * @var string 检查项uuid
     */
    public $Id;

    /**
     * @var array 过滤条件
     */
    public $Filter;

    /**
     * @var array 查询条件
     */
    public $Search;

    /**
     * @param integer $Offset 页码
     * @param integer $Limit 每页数量
     * @param string $Id 检查项uuid
     * @param array $Filter 过滤条件
     * @param array $Search 查询条件
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = [];
            foreach ($param["Filter"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filter, $obj);
            }
        }

        if (array_key_exists("Search",$param) and $param["Search"] !== null) {
            $this->Search = [];
            foreach ($param["Search"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Search, $obj);
            }
        }
    }
}
