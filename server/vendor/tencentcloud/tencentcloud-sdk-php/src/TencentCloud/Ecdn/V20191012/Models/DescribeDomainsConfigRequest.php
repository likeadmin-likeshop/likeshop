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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDomainsConfig请求参数结构体
 *
 * @method integer getOffset() 获取分页查询的偏移地址，默认0。
 * @method void setOffset(integer $Offset) 设置分页查询的偏移地址，默认0。
 * @method integer getLimit() 获取分页查询的域名个数，默认100。
 * @method void setLimit(integer $Limit) 设置分页查询的域名个数，默认100。
 * @method array getFilters() 获取查询条件过滤器。
 * @method void setFilters(array $Filters) 设置查询条件过滤器。
 * @method Sort getSort() 获取查询结果排序规则。
 * @method void setSort(Sort $Sort) 设置查询结果排序规则。
 */
class DescribeDomainsConfigRequest extends AbstractModel
{
    /**
     * @var integer 分页查询的偏移地址，默认0。
     */
    public $Offset;

    /**
     * @var integer 分页查询的域名个数，默认100。
     */
    public $Limit;

    /**
     * @var array 查询条件过滤器。
     */
    public $Filters;

    /**
     * @var Sort 查询结果排序规则。
     */
    public $Sort;

    /**
     * @param integer $Offset 分页查询的偏移地址，默认0。
     * @param integer $Limit 分页查询的域名个数，默认100。
     * @param array $Filters 查询条件过滤器。
     * @param Sort $Sort 查询结果排序规则。
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new DomainFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = new Sort();
            $this->Sort->deserialize($param["Sort"]);
        }
    }
}
