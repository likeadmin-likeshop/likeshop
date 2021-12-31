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
 * script实例。
 *
 * @method string getScriptId() 获取脚本Id，长度36字节。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptId(string $ScriptId) 设置脚本Id，长度36字节。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScriptName() 获取脚本名称，长度0-25。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptName(string $ScriptName) 设置脚本名称，长度0-25。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScriptDesc() 获取脚本描述，长度0-50。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptDesc(string $ScriptDesc) 设置脚本描述，长度0-50。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取默认关联数据库。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置默认关联数据库。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSQLStatement() 获取SQL描述，长度0-10000。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSQLStatement(string $SQLStatement) 设置SQL描述，长度0-10000。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取更新时间戳， 单位：ms。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间戳， 单位：ms。
注意：此字段可能返回 null，表示取不到有效值。
 */
class Script extends AbstractModel
{
    /**
     * @var string 脚本Id，长度36字节。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptId;

    /**
     * @var string 脚本名称，长度0-25。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptName;

    /**
     * @var string 脚本描述，长度0-50。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptDesc;

    /**
     * @var string 默认关联数据库。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var string SQL描述，长度0-10000。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SQLStatement;

    /**
     * @var integer 更新时间戳， 单位：ms。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param string $ScriptId 脚本Id，长度36字节。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScriptName 脚本名称，长度0-25。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScriptDesc 脚本描述，长度0-50。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName 默认关联数据库。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SQLStatement SQL描述，长度0-10000。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime 更新时间戳， 单位：ms。
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
        if (array_key_exists("ScriptId",$param) and $param["ScriptId"] !== null) {
            $this->ScriptId = $param["ScriptId"];
        }

        if (array_key_exists("ScriptName",$param) and $param["ScriptName"] !== null) {
            $this->ScriptName = $param["ScriptName"];
        }

        if (array_key_exists("ScriptDesc",$param) and $param["ScriptDesc"] !== null) {
            $this->ScriptDesc = $param["ScriptDesc"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("SQLStatement",$param) and $param["SQLStatement"] !== null) {
            $this->SQLStatement = $param["SQLStatement"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
