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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTable请求参数结构体
 *
 * @method string getTableName() 获取查询对象表名称
 * @method void setTableName(string $TableName) 设置查询对象表名称
 * @method string getDatabaseName() 获取查询表所在的数据库名称。
 * @method void setDatabaseName(string $DatabaseName) 设置查询表所在的数据库名称。
 * @method string getDatasourceConnectionName() 获取查询表所在的数据源名称
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) 设置查询表所在的数据源名称
 */
class DescribeTableRequest extends AbstractModel
{
    /**
     * @var string 查询对象表名称
     */
    public $TableName;

    /**
     * @var string 查询表所在的数据库名称。
     */
    public $DatabaseName;

    /**
     * @var string 查询表所在的数据源名称
     */
    public $DatasourceConnectionName;

    /**
     * @param string $TableName 查询对象表名称
     * @param string $DatabaseName 查询表所在的数据库名称。
     * @param string $DatasourceConnectionName 查询表所在的数据源名称
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
        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("DatasourceConnectionName",$param) and $param["DatasourceConnectionName"] !== null) {
            $this->DatasourceConnectionName = $param["DatasourceConnectionName"];
        }
    }
}
