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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupTables请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例ID相同。
 * @method void setInstanceId(string $InstanceId) 设置实例ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例ID相同。
 * @method string getStartTime() 获取开始时间，格式为：2017-07-12 10:29:20。
 * @method void setStartTime(string $StartTime) 设置开始时间，格式为：2017-07-12 10:29:20。
 * @method string getDatabaseName() 获取指定的数据库名。
 * @method void setDatabaseName(string $DatabaseName) 设置指定的数据库名。
 * @method string getSearchTable() 获取要查询的数据表名前缀。
 * @method void setSearchTable(string $SearchTable) 设置要查询的数据表名前缀。
 * @method integer getOffset() 获取分页偏移。
 * @method void setOffset(integer $Offset) 设置分页偏移。
 * @method integer getLimit() 获取分页大小，最小值为1，最大值为2000。
 * @method void setLimit(integer $Limit) 设置分页大小，最小值为1，最大值为2000。
 */
class DescribeBackupTablesRequest extends AbstractModel
{
    /**
     * @var string 实例ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例ID相同。
     */
    public $InstanceId;

    /**
     * @var string 开始时间，格式为：2017-07-12 10:29:20。
     */
    public $StartTime;

    /**
     * @var string 指定的数据库名。
     */
    public $DatabaseName;

    /**
     * @var string 要查询的数据表名前缀。
     */
    public $SearchTable;

    /**
     * @var integer 分页偏移。
     */
    public $Offset;

    /**
     * @var integer 分页大小，最小值为1，最大值为2000。
     */
    public $Limit;

    /**
     * @param string $InstanceId 实例ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例ID相同。
     * @param string $StartTime 开始时间，格式为：2017-07-12 10:29:20。
     * @param string $DatabaseName 指定的数据库名。
     * @param string $SearchTable 要查询的数据表名前缀。
     * @param integer $Offset 分页偏移。
     * @param integer $Limit 分页大小，最小值为1，最大值为2000。
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

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("SearchTable",$param) and $param["SearchTable"] !== null) {
            $this->SearchTable = $param["SearchTable"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
