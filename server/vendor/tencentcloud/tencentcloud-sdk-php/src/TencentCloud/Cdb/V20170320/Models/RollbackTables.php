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
 * 用于回档的数据库表详情
 *
 * @method string getDatabase() 获取数据库名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabase(string $Database) 设置数据库名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTable() 获取数据库表详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTable(array $Table) 设置数据库表详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class RollbackTables extends AbstractModel
{
    /**
     * @var string 数据库名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Database;

    /**
     * @var array 数据库表详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Table;

    /**
     * @param string $Database 数据库名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Table 数据库表详情
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
        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = [];
            foreach ($param["Table"] as $key => $value){
                $obj = new RollbackTableName();
                $obj->deserialize($value);
                array_push($this->Table, $obj);
            }
        }
    }
}
