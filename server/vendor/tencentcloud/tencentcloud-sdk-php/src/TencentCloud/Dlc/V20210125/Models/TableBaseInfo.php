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
 * 数据表配置信息
 *
 * @method string getDatabaseName() 获取该数据表所属数据库名字
 * @method void setDatabaseName(string $DatabaseName) 设置该数据表所属数据库名字
 * @method string getTableName() 获取数据表名字
 * @method void setTableName(string $TableName) 设置数据表名字
 * @method string getDatasourceConnectionName() 获取该数据表所属数据源名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) 设置该数据表所属数据源名字
注意：此字段可能返回 null，表示取不到有效值。
 */
class TableBaseInfo extends AbstractModel
{
    /**
     * @var string 该数据表所属数据库名字
     */
    public $DatabaseName;

    /**
     * @var string 数据表名字
     */
    public $TableName;

    /**
     * @var string 该数据表所属数据源名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceConnectionName;

    /**
     * @param string $DatabaseName 该数据表所属数据库名字
     * @param string $TableName 数据表名字
     * @param string $DatasourceConnectionName 该数据表所属数据源名字
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("DatasourceConnectionName",$param) and $param["DatasourceConnectionName"] !== null) {
            $this->DatasourceConnectionName = $param["DatasourceConnectionName"];
        }
    }
}
