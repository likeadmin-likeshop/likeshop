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
 * DescribeDBSlowlogs请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID，形如postgres-lnp6j617
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID，形如postgres-lnp6j617
 * @method string getStartTime() 获取查询起始时间，形如2018-06-10 17:06:38，起始时间不得小于7天以前
 * @method void setStartTime(string $StartTime) 设置查询起始时间，形如2018-06-10 17:06:38，起始时间不得小于7天以前
 * @method string getEndTime() 获取查询结束时间，形如2018-06-10 17:06:38
 * @method void setEndTime(string $EndTime) 设置查询结束时间，形如2018-06-10 17:06:38
 * @method string getDatabaseName() 获取数据库名字
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名字
 * @method string getOrderBy() 获取按照何种指标排序，取值为sum_calls或者sum_cost_time。sum_calls-总调用次数；sum_cost_time-总的花费时间
 * @method void setOrderBy(string $OrderBy) 设置按照何种指标排序，取值为sum_calls或者sum_cost_time。sum_calls-总调用次数；sum_cost_time-总的花费时间
 * @method string getOrderByType() 获取排序规则。desc-降序；asc-升序
 * @method void setOrderByType(string $OrderByType) 设置排序规则。desc-降序；asc-升序
 * @method integer getLimit() 获取分页返回结果，每页最大返回数量，取值为1-100，默认20
 * @method void setLimit(integer $Limit) 设置分页返回结果，每页最大返回数量，取值为1-100，默认20
 * @method integer getOffset() 获取分页返回结果，返回结果的第几页，从0开始计数
 * @method void setOffset(integer $Offset) 设置分页返回结果，返回结果的第几页，从0开始计数
 */
class DescribeDBSlowlogsRequest extends AbstractModel
{
    /**
     * @var string 实例ID，形如postgres-lnp6j617
     */
    public $DBInstanceId;

    /**
     * @var string 查询起始时间，形如2018-06-10 17:06:38，起始时间不得小于7天以前
     */
    public $StartTime;

    /**
     * @var string 查询结束时间，形如2018-06-10 17:06:38
     */
    public $EndTime;

    /**
     * @var string 数据库名字
     */
    public $DatabaseName;

    /**
     * @var string 按照何种指标排序，取值为sum_calls或者sum_cost_time。sum_calls-总调用次数；sum_cost_time-总的花费时间
     */
    public $OrderBy;

    /**
     * @var string 排序规则。desc-降序；asc-升序
     */
    public $OrderByType;

    /**
     * @var integer 分页返回结果，每页最大返回数量，取值为1-100，默认20
     */
    public $Limit;

    /**
     * @var integer 分页返回结果，返回结果的第几页，从0开始计数
     */
    public $Offset;

    /**
     * @param string $DBInstanceId 实例ID，形如postgres-lnp6j617
     * @param string $StartTime 查询起始时间，形如2018-06-10 17:06:38，起始时间不得小于7天以前
     * @param string $EndTime 查询结束时间，形如2018-06-10 17:06:38
     * @param string $DatabaseName 数据库名字
     * @param string $OrderBy 按照何种指标排序，取值为sum_calls或者sum_cost_time。sum_calls-总调用次数；sum_cost_time-总的花费时间
     * @param string $OrderByType 排序规则。desc-降序；asc-升序
     * @param integer $Limit 分页返回结果，每页最大返回数量，取值为1-100，默认20
     * @param integer $Offset 分页返回结果，返回结果的第几页，从0开始计数
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
