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
namespace TencentCloud\Bmvpc\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRouteTables请求参数结构体
 *
 * @method array getRouteTableIds() 获取路由表实例ID，例如：rtb-azd4dt1c。
 * @method void setRouteTableIds(array $RouteTableIds) 设置路由表实例ID，例如：rtb-azd4dt1c。
 * @method array getFilters() 获取过滤条件，参数不支持同时指定RouteTableIds和Filters。
route-table-id - String - （过滤条件）路由表实例ID。
route-table-name - String - （过滤条件）路由表名称。
route-table-id-like - String - （模糊过滤条件）路由表实例ID。
route-table-name-like - String - （模糊过滤条件）路由表名称。
vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。
zone - String - （过滤条件）可用区。
 * @method void setFilters(array $Filters) 设置过滤条件，参数不支持同时指定RouteTableIds和Filters。
route-table-id - String - （过滤条件）路由表实例ID。
route-table-name - String - （过滤条件）路由表名称。
route-table-id-like - String - （模糊过滤条件）路由表实例ID。
route-table-name-like - String - （模糊过滤条件）路由表名称。
vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。
zone - String - （过滤条件）可用区。
 * @method integer getOffset() 获取初始行的偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置初始行的偏移量，默认为0。
 * @method integer getLimit() 获取每页行数，默认为20。
 * @method void setLimit(integer $Limit) 设置每页行数，默认为20。
 * @method string getOrderField() 获取排序字段, 支持按“RouteTableId”，“VpcId”, "RouteTableName", "CreateTime"
 * @method void setOrderField(string $OrderField) 设置排序字段, 支持按“RouteTableId”，“VpcId”, "RouteTableName", "CreateTime"
 * @method string getOrderDirection() 获取排序方向, “asc”、“desc”
 * @method void setOrderDirection(string $OrderDirection) 设置排序方向, “asc”、“desc”
 */
class DescribeRouteTablesRequest extends AbstractModel
{
    /**
     * @var array 路由表实例ID，例如：rtb-azd4dt1c。
     */
    public $RouteTableIds;

    /**
     * @var array 过滤条件，参数不支持同时指定RouteTableIds和Filters。
route-table-id - String - （过滤条件）路由表实例ID。
route-table-name - String - （过滤条件）路由表名称。
route-table-id-like - String - （模糊过滤条件）路由表实例ID。
route-table-name-like - String - （模糊过滤条件）路由表名称。
vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。
zone - String - （过滤条件）可用区。
     */
    public $Filters;

    /**
     * @var integer 初始行的偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 每页行数，默认为20。
     */
    public $Limit;

    /**
     * @var string 排序字段, 支持按“RouteTableId”，“VpcId”, "RouteTableName", "CreateTime"
     */
    public $OrderField;

    /**
     * @var string 排序方向, “asc”、“desc”
     */
    public $OrderDirection;

    /**
     * @param array $RouteTableIds 路由表实例ID，例如：rtb-azd4dt1c。
     * @param array $Filters 过滤条件，参数不支持同时指定RouteTableIds和Filters。
route-table-id - String - （过滤条件）路由表实例ID。
route-table-name - String - （过滤条件）路由表名称。
route-table-id-like - String - （模糊过滤条件）路由表实例ID。
route-table-name-like - String - （模糊过滤条件）路由表名称。
vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。
zone - String - （过滤条件）可用区。
     * @param integer $Offset 初始行的偏移量，默认为0。
     * @param integer $Limit 每页行数，默认为20。
     * @param string $OrderField 排序字段, 支持按“RouteTableId”，“VpcId”, "RouteTableName", "CreateTime"
     * @param string $OrderDirection 排序方向, “asc”、“desc”
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
        if (array_key_exists("RouteTableIds",$param) and $param["RouteTableIds"] !== null) {
            $this->RouteTableIds = $param["RouteTableIds"];
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
