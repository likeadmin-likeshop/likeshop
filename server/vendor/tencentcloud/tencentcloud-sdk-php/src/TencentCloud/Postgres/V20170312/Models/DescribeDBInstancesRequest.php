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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstances请求参数结构体
 *
 * @method array getFilters() 获取按照一个或者多个过滤条件进行查询，目前支持的过滤条件有：
db-instance-id：按照实例ID过滤，类型为string
db-instance-name：按照实例名过滤，类型为string
db-project-id：按照项目ID过滤，类型为integer
db-pay-mode：按照付费模式过滤，类型为string
db-tag-key：按照标签键过滤，类型为string
 * @method void setFilters(array $Filters) 设置按照一个或者多个过滤条件进行查询，目前支持的过滤条件有：
db-instance-id：按照实例ID过滤，类型为string
db-instance-name：按照实例名过滤，类型为string
db-project-id：按照项目ID过滤，类型为integer
db-pay-mode：按照付费模式过滤，类型为string
db-tag-key：按照标签键过滤，类型为string
 * @method integer getLimit() 获取每页显示数量，取值范围为1-100，默认为返回10条。
 * @method void setLimit(integer $Limit) 设置每页显示数量，取值范围为1-100，默认为返回10条。
 * @method string getOrderBy() 获取排序指标，如实例名、创建时间等，支持DBInstanceId,CreateTime,Name,EndTime
 * @method void setOrderBy(string $OrderBy) 设置排序指标，如实例名、创建时间等，支持DBInstanceId,CreateTime,Name,EndTime
 * @method integer getOffset() 获取页码偏移量，从0开始。
 * @method void setOffset(integer $Offset) 设置页码偏移量，从0开始。
 * @method string getOrderByType() 获取排序方式，包括升序：asc、降序：desc。
 * @method void setOrderByType(string $OrderByType) 设置排序方式，包括升序：asc、降序：desc。
 */
class DescribeDBInstancesRequest extends AbstractModel
{
    /**
     * @var array 按照一个或者多个过滤条件进行查询，目前支持的过滤条件有：
db-instance-id：按照实例ID过滤，类型为string
db-instance-name：按照实例名过滤，类型为string
db-project-id：按照项目ID过滤，类型为integer
db-pay-mode：按照付费模式过滤，类型为string
db-tag-key：按照标签键过滤，类型为string
     */
    public $Filters;

    /**
     * @var integer 每页显示数量，取值范围为1-100，默认为返回10条。
     */
    public $Limit;

    /**
     * @var string 排序指标，如实例名、创建时间等，支持DBInstanceId,CreateTime,Name,EndTime
     */
    public $OrderBy;

    /**
     * @var integer 页码偏移量，从0开始。
     */
    public $Offset;

    /**
     * @var string 排序方式，包括升序：asc、降序：desc。
     */
    public $OrderByType;

    /**
     * @param array $Filters 按照一个或者多个过滤条件进行查询，目前支持的过滤条件有：
db-instance-id：按照实例ID过滤，类型为string
db-instance-name：按照实例名过滤，类型为string
db-project-id：按照项目ID过滤，类型为integer
db-pay-mode：按照付费模式过滤，类型为string
db-tag-key：按照标签键过滤，类型为string
     * @param integer $Limit 每页显示数量，取值范围为1-100，默认为返回10条。
     * @param string $OrderBy 排序指标，如实例名、创建时间等，支持DBInstanceId,CreateTime,Name,EndTime
     * @param integer $Offset 页码偏移量，从0开始。
     * @param string $OrderByType 排序方式，包括升序：asc、降序：desc。
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
