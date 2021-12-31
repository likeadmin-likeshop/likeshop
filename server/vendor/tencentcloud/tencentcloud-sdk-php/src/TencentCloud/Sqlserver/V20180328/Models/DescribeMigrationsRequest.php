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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMigrations请求参数结构体
 *
 * @method array getStatusSet() 获取状态集合。只要符合集合中某一状态的迁移任务，就会查出来
 * @method void setStatusSet(array $StatusSet) 设置状态集合。只要符合集合中某一状态的迁移任务，就会查出来
 * @method string getMigrateName() 获取迁移任务的名称，模糊匹配
 * @method void setMigrateName(string $MigrateName) 设置迁移任务的名称，模糊匹配
 * @method integer getLimit() 获取分页返回，每页返回的数目，取值为1-100，默认值为100
 * @method void setLimit(integer $Limit) 设置分页返回，每页返回的数目，取值为1-100，默认值为100
 * @method integer getOffset() 获取分页返回，页编号，默认值为第0页
 * @method void setOffset(integer $Offset) 设置分页返回，页编号，默认值为第0页
 * @method string getOrderBy() 获取查询结果按照关键字排序，可选值为name、createTime、startTime，endTime，status
 * @method void setOrderBy(string $OrderBy) 设置查询结果按照关键字排序，可选值为name、createTime、startTime，endTime，status
 * @method string getOrderByType() 获取排序方式，可选值为desc、asc
 * @method void setOrderByType(string $OrderByType) 设置排序方式，可选值为desc、asc
 */
class DescribeMigrationsRequest extends AbstractModel
{
    /**
     * @var array 状态集合。只要符合集合中某一状态的迁移任务，就会查出来
     */
    public $StatusSet;

    /**
     * @var string 迁移任务的名称，模糊匹配
     */
    public $MigrateName;

    /**
     * @var integer 分页返回，每页返回的数目，取值为1-100，默认值为100
     */
    public $Limit;

    /**
     * @var integer 分页返回，页编号，默认值为第0页
     */
    public $Offset;

    /**
     * @var string 查询结果按照关键字排序，可选值为name、createTime、startTime，endTime，status
     */
    public $OrderBy;

    /**
     * @var string 排序方式，可选值为desc、asc
     */
    public $OrderByType;

    /**
     * @param array $StatusSet 状态集合。只要符合集合中某一状态的迁移任务，就会查出来
     * @param string $MigrateName 迁移任务的名称，模糊匹配
     * @param integer $Limit 分页返回，每页返回的数目，取值为1-100，默认值为100
     * @param integer $Offset 分页返回，页编号，默认值为第0页
     * @param string $OrderBy 查询结果按照关键字排序，可选值为name、createTime、startTime，endTime，status
     * @param string $OrderByType 排序方式，可选值为desc、asc
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
        if (array_key_exists("StatusSet",$param) and $param["StatusSet"] !== null) {
            $this->StatusSet = $param["StatusSet"];
        }

        if (array_key_exists("MigrateName",$param) and $param["MigrateName"] !== null) {
            $this->MigrateName = $param["MigrateName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
