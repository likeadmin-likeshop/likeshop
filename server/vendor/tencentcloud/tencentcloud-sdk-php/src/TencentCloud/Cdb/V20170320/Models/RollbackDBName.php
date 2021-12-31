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
 * 用于回档的数据库名
 *
 * @method string getDatabaseName() 获取回档前的原数据库名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置回档前的原数据库名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNewDatabaseName() 获取回档后的新数据库名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNewDatabaseName(string $NewDatabaseName) 设置回档后的新数据库名
注意：此字段可能返回 null，表示取不到有效值。
 */
class RollbackDBName extends AbstractModel
{
    /**
     * @var string 回档前的原数据库名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var string 回档后的新数据库名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NewDatabaseName;

    /**
     * @param string $DatabaseName 回档前的原数据库名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NewDatabaseName 回档后的新数据库名
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

        if (array_key_exists("NewDatabaseName",$param) and $param["NewDatabaseName"] !== null) {
            $this->NewDatabaseName = $param["NewDatabaseName"];
        }
    }
}
