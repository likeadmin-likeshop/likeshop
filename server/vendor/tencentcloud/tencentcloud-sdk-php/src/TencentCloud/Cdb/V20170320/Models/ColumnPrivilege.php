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
 * 列权限信息
 *
 * @method string getDatabase() 获取数据库名
 * @method void setDatabase(string $Database) 设置数据库名
 * @method string getTable() 获取数据库表名
 * @method void setTable(string $Table) 设置数据库表名
 * @method string getColumn() 获取数据库列名
 * @method void setColumn(string $Column) 设置数据库列名
 * @method array getPrivileges() 获取权限信息
 * @method void setPrivileges(array $Privileges) 设置权限信息
 */
class ColumnPrivilege extends AbstractModel
{
    /**
     * @var string 数据库名
     */
    public $Database;

    /**
     * @var string 数据库表名
     */
    public $Table;

    /**
     * @var string 数据库列名
     */
    public $Column;

    /**
     * @var array 权限信息
     */
    public $Privileges;

    /**
     * @param string $Database 数据库名
     * @param string $Table 数据库表名
     * @param string $Column 数据库列名
     * @param array $Privileges 权限信息
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
        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("Column",$param) and $param["Column"] !== null) {
            $this->Column = $param["Column"];
        }

        if (array_key_exists("Privileges",$param) and $param["Privileges"] !== null) {
            $this->Privileges = $param["Privileges"];
        }
    }
}
