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
 * DescribeDBBackups请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID，形如postgres-4wdeb0zv。
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID，形如postgres-4wdeb0zv。
 * @method integer getType() 获取备份方式（1-全量）。目前只支持全量，取值为1。
 * @method void setType(integer $Type) 设置备份方式（1-全量）。目前只支持全量，取值为1。
 * @method string getStartTime() 获取查询开始时间，形如2018-06-10 17:06:38，起始时间不得小于7天以前
 * @method void setStartTime(string $StartTime) 设置查询开始时间，形如2018-06-10 17:06:38，起始时间不得小于7天以前
 * @method string getEndTime() 获取查询结束时间，形如2018-06-10 17:06:38
 * @method void setEndTime(string $EndTime) 设置查询结束时间，形如2018-06-10 17:06:38
 * @method integer getLimit() 获取备份列表分页返回，每页返回数量，默认为 20，最小为1，最大值为 100。（当该参数不传或者传0时按默认值处理）
 * @method void setLimit(integer $Limit) 设置备份列表分页返回，每页返回数量，默认为 20，最小为1，最大值为 100。（当该参数不传或者传0时按默认值处理）
 * @method integer getOffset() 获取返回结果中的第几页，从第0页开始。默认为0。
 * @method void setOffset(integer $Offset) 设置返回结果中的第几页，从第0页开始。默认为0。
 */
class DescribeDBBackupsRequest extends AbstractModel
{
    /**
     * @var string 实例ID，形如postgres-4wdeb0zv。
     */
    public $DBInstanceId;

    /**
     * @var integer 备份方式（1-全量）。目前只支持全量，取值为1。
     */
    public $Type;

    /**
     * @var string 查询开始时间，形如2018-06-10 17:06:38，起始时间不得小于7天以前
     */
    public $StartTime;

    /**
     * @var string 查询结束时间，形如2018-06-10 17:06:38
     */
    public $EndTime;

    /**
     * @var integer 备份列表分页返回，每页返回数量，默认为 20，最小为1，最大值为 100。（当该参数不传或者传0时按默认值处理）
     */
    public $Limit;

    /**
     * @var integer 返回结果中的第几页，从第0页开始。默认为0。
     */
    public $Offset;

    /**
     * @param string $DBInstanceId 实例ID，形如postgres-4wdeb0zv。
     * @param integer $Type 备份方式（1-全量）。目前只支持全量，取值为1。
     * @param string $StartTime 查询开始时间，形如2018-06-10 17:06:38，起始时间不得小于7天以前
     * @param string $EndTime 查询结束时间，形如2018-06-10 17:06:38
     * @param integer $Limit 备份列表分页返回，每页返回数量，默认为 20，最小为1，最大值为 100。（当该参数不传或者传0时按默认值处理）
     * @param integer $Offset 返回结果中的第几页，从第0页开始。默认为0。
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
