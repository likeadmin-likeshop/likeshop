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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceInstances请求参数结构体
 *
 * @method array getPids() 获取资源类别id数组，13624：加固专业版，12750：企业版。空数组表示返回全部资源。
 * @method void setPids(array $Pids) 设置资源类别id数组，13624：加固专业版，12750：企业版。空数组表示返回全部资源。
 * @method array getFilters() 获取支持通过资源id，pid进行查询
 * @method void setFilters(array $Filters) 设置支持通过资源id，pid进行查询
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取数量限制，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置数量限制，默认为20，最大值为100。
 * @method string getOrderField() 获取按某个字段排序，目前支持CreateTime、ExpireTime其中的一个排序。
 * @method void setOrderField(string $OrderField) 设置按某个字段排序，目前支持CreateTime、ExpireTime其中的一个排序。
 * @method string getOrderDirection() 获取升序（asc）还是降序（desc），默认：desc。
 * @method void setOrderDirection(string $OrderDirection) 设置升序（asc）还是降序（desc），默认：desc。
 */
class DescribeResourceInstancesRequest extends AbstractModel
{
    /**
     * @var array 资源类别id数组，13624：加固专业版，12750：企业版。空数组表示返回全部资源。
     */
    public $Pids;

    /**
     * @var array 支持通过资源id，pid进行查询
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 数量限制，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var string 按某个字段排序，目前支持CreateTime、ExpireTime其中的一个排序。
     */
    public $OrderField;

    /**
     * @var string 升序（asc）还是降序（desc），默认：desc。
     */
    public $OrderDirection;

    /**
     * @param array $Pids 资源类别id数组，13624：加固专业版，12750：企业版。空数组表示返回全部资源。
     * @param array $Filters 支持通过资源id，pid进行查询
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 数量限制，默认为20，最大值为100。
     * @param string $OrderField 按某个字段排序，目前支持CreateTime、ExpireTime其中的一个排序。
     * @param string $OrderDirection 升序（asc）还是降序（desc），默认：desc。
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
        if (array_key_exists("Pids",$param) and $param["Pids"] !== null) {
            $this->Pids = $param["Pids"];
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

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }
    }
}
