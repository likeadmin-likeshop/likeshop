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
 * 用于回档的实例详情
 *
 * @method string getInstanceId() 获取云数据库实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置云数据库实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStrategy() 获取回档策略。可选值为：table、db、full；默认值为full。table - 急速回档模式，仅导入所选中表级别的备份和binlog，如有跨表操作，且关联表未被同时选中，将会导致回档失败，该模式下参数Databases必须为空；db - 快速模式，仅导入所选中库级别的备份和binlog，如有跨库操作，且关联库未被同时选中，将会导致回档失败；full - 普通回档模式，将导入整个实例的备份和binlog，速度较慢。
 * @method void setStrategy(string $Strategy) 设置回档策略。可选值为：table、db、full；默认值为full。table - 急速回档模式，仅导入所选中表级别的备份和binlog，如有跨表操作，且关联表未被同时选中，将会导致回档失败，该模式下参数Databases必须为空；db - 快速模式，仅导入所选中库级别的备份和binlog，如有跨库操作，且关联库未被同时选中，将会导致回档失败；full - 普通回档模式，将导入整个实例的备份和binlog，速度较慢。
 * @method string getRollbackTime() 获取数据库回档时间，时间格式为：yyyy-mm-dd hh:mm:ss
 * @method void setRollbackTime(string $RollbackTime) 设置数据库回档时间，时间格式为：yyyy-mm-dd hh:mm:ss
 * @method array getDatabases() 获取待回档的数据库信息，表示整库回档
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabases(array $Databases) 设置待回档的数据库信息，表示整库回档
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTables() 获取待回档的数据库表信息，表示按表回档
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTables(array $Tables) 设置待回档的数据库表信息，表示按表回档
注意：此字段可能返回 null，表示取不到有效值。
 */
class RollbackInstancesInfo extends AbstractModel
{
    /**
     * @var string 云数据库实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 回档策略。可选值为：table、db、full；默认值为full。table - 急速回档模式，仅导入所选中表级别的备份和binlog，如有跨表操作，且关联表未被同时选中，将会导致回档失败，该模式下参数Databases必须为空；db - 快速模式，仅导入所选中库级别的备份和binlog，如有跨库操作，且关联库未被同时选中，将会导致回档失败；full - 普通回档模式，将导入整个实例的备份和binlog，速度较慢。
     */
    public $Strategy;

    /**
     * @var string 数据库回档时间，时间格式为：yyyy-mm-dd hh:mm:ss
     */
    public $RollbackTime;

    /**
     * @var array 待回档的数据库信息，表示整库回档
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Databases;

    /**
     * @var array 待回档的数据库表信息，表示按表回档
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tables;

    /**
     * @param string $InstanceId 云数据库实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Strategy 回档策略。可选值为：table、db、full；默认值为full。table - 急速回档模式，仅导入所选中表级别的备份和binlog，如有跨表操作，且关联表未被同时选中，将会导致回档失败，该模式下参数Databases必须为空；db - 快速模式，仅导入所选中库级别的备份和binlog，如有跨库操作，且关联库未被同时选中，将会导致回档失败；full - 普通回档模式，将导入整个实例的备份和binlog，速度较慢。
     * @param string $RollbackTime 数据库回档时间，时间格式为：yyyy-mm-dd hh:mm:ss
     * @param array $Databases 待回档的数据库信息，表示整库回档
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tables 待回档的数据库表信息，表示按表回档
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("RollbackTime",$param) and $param["RollbackTime"] !== null) {
            $this->RollbackTime = $param["RollbackTime"];
        }

        if (array_key_exists("Databases",$param) and $param["Databases"] !== null) {
            $this->Databases = [];
            foreach ($param["Databases"] as $key => $value){
                $obj = new RollbackDBName();
                $obj->deserialize($value);
                array_push($this->Databases, $obj);
            }
        }

        if (array_key_exists("Tables",$param) and $param["Tables"] !== null) {
            $this->Tables = [];
            foreach ($param["Tables"] as $key => $value){
                $obj = new RollbackTables();
                $obj->deserialize($value);
                array_push($this->Tables, $obj);
            }
        }
    }
}
