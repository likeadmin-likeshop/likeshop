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
namespace TencentCloud\Tiems\V20190416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeServiceConfigs请求参数结构体
 *
 * @method array getFilters() 获取筛选选项，支持按照name等进行筛选
 * @method void setFilters(array $Filters) 设置筛选选项，支持按照name等进行筛选
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取返回数量，默认为20，最大值为1000
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为1000
 * @method string getOrder() 获取输出列表的排列顺序。取值范围：ASC：升序排列 DESC：降序排列
 * @method void setOrder(string $Order) 设置输出列表的排列顺序。取值范围：ASC：升序排列 DESC：降序排列
 * @method string getOrderField() 获取排序的依据字段， 取值范围 "CREATE_TIME", "UPDATE_TIME", "NAME"
 * @method void setOrderField(string $OrderField) 设置排序的依据字段， 取值范围 "CREATE_TIME", "UPDATE_TIME", "NAME"
 * @method boolean getPageByName() 获取是否按照配置名分页
 * @method void setPageByName(boolean $PageByName) 设置是否按照配置名分页
 */
class DescribeServiceConfigsRequest extends AbstractModel
{
    /**
     * @var array 筛选选项，支持按照name等进行筛选
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为1000
     */
    public $Limit;

    /**
     * @var string 输出列表的排列顺序。取值范围：ASC：升序排列 DESC：降序排列
     */
    public $Order;

    /**
     * @var string 排序的依据字段， 取值范围 "CREATE_TIME", "UPDATE_TIME", "NAME"
     */
    public $OrderField;

    /**
     * @var boolean 是否按照配置名分页
     */
    public $PageByName;

    /**
     * @param array $Filters 筛选选项，支持按照name等进行筛选
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 返回数量，默认为20，最大值为1000
     * @param string $Order 输出列表的排列顺序。取值范围：ASC：升序排列 DESC：降序排列
     * @param string $OrderField 排序的依据字段， 取值范围 "CREATE_TIME", "UPDATE_TIME", "NAME"
     * @param boolean $PageByName 是否按照配置名分页
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("PageByName",$param) and $param["PageByName"] !== null) {
            $this->PageByName = $param["PageByName"];
        }
    }
}
