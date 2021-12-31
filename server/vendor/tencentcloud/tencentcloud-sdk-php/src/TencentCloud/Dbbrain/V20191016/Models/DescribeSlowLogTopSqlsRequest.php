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
namespace TencentCloud\Dbbrain\V20191016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSlowLogTopSqls请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID 。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID 。
 * @method string getStartTime() 获取开始时间，如“2019-09-10 12:13:14”。
 * @method void setStartTime(string $StartTime) 设置开始时间，如“2019-09-10 12:13:14”。
 * @method string getEndTime() 获取截止时间，如“2019-09-10 12:13:14”，截止时间与开始时间的间隔最大可为7天。
 * @method void setEndTime(string $EndTime) 设置截止时间，如“2019-09-10 12:13:14”，截止时间与开始时间的间隔最大可为7天。
 * @method string getSortBy() 获取排序键，目前支持 QueryTime,ExecTimes,RowsSent,LockTime以及RowsExamined 等排序键。
 * @method void setSortBy(string $SortBy) 设置排序键，目前支持 QueryTime,ExecTimes,RowsSent,LockTime以及RowsExamined 等排序键。
 * @method string getOrderBy() 获取排序方式，支持ASC（升序）以及DESC（降序）。
 * @method void setOrderBy(string $OrderBy) 设置排序方式，支持ASC（升序）以及DESC（降序）。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method array getSchemaList() 获取数据库名称数组。
 * @method void setSchemaList(array $SchemaList) 设置数据库名称数组。
 * @method string getProduct() 获取服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL，默认为"mysql"。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL，默认为"mysql"。
 */
class DescribeSlowLogTopSqlsRequest extends AbstractModel
{
    /**
     * @var string 实例 ID 。
     */
    public $InstanceId;

    /**
     * @var string 开始时间，如“2019-09-10 12:13:14”。
     */
    public $StartTime;

    /**
     * @var string 截止时间，如“2019-09-10 12:13:14”，截止时间与开始时间的间隔最大可为7天。
     */
    public $EndTime;

    /**
     * @var string 排序键，目前支持 QueryTime,ExecTimes,RowsSent,LockTime以及RowsExamined 等排序键。
     */
    public $SortBy;

    /**
     * @var string 排序方式，支持ASC（升序）以及DESC（降序）。
     */
    public $OrderBy;

    /**
     * @var integer 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var array 数据库名称数组。
     */
    public $SchemaList;

    /**
     * @var string 服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL，默认为"mysql"。
     */
    public $Product;

    /**
     * @param string $InstanceId 实例 ID 。
     * @param string $StartTime 开始时间，如“2019-09-10 12:13:14”。
     * @param string $EndTime 截止时间，如“2019-09-10 12:13:14”，截止时间与开始时间的间隔最大可为7天。
     * @param string $SortBy 排序键，目前支持 QueryTime,ExecTimes,RowsSent,LockTime以及RowsExamined 等排序键。
     * @param string $OrderBy 排序方式，支持ASC（升序）以及DESC（降序）。
     * @param integer $Limit 返回数量，默认为20，最大值为100。
     * @param integer $Offset 偏移量，默认为0。
     * @param array $SchemaList 数据库名称数组。
     * @param string $Product 服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL，默认为"mysql"。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SchemaList",$param) and $param["SchemaList"] !== null) {
            $this->SchemaList = [];
            foreach ($param["SchemaList"] as $key => $value){
                $obj = new SchemaItem();
                $obj->deserialize($value);
                array_push($this->SchemaList, $obj);
            }
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
