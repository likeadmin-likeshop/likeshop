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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份信息
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getBackupType() 获取备份方式，0-自动备份，1-手动备份
 * @method void setBackupType(integer $BackupType) 设置备份方式，0-自动备份，1-手动备份
 * @method string getBackupName() 获取备份名称
 * @method void setBackupName(string $BackupName) 设置备份名称
 * @method string getBackupDesc() 获取备份备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupDesc(string $BackupDesc) 设置备份备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBackupSize() 获取备份文件大小，单位KB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupSize(integer $BackupSize) 设置备份文件大小，单位KB
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取备份开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置备份开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取备份结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置备份结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取备份状态，1-备份中，2-备份成功
 * @method void setStatus(integer $Status) 设置备份状态，1-备份中，2-备份成功
 * @method integer getBackupMethod() 获取备份方法，0-逻辑备份，1-物理备份
 * @method void setBackupMethod(integer $BackupMethod) 设置备份方法，0-逻辑备份，1-物理备份
 */
class BackupInfo extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 备份方式，0-自动备份，1-手动备份
     */
    public $BackupType;

    /**
     * @var string 备份名称
     */
    public $BackupName;

    /**
     * @var string 备份备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupDesc;

    /**
     * @var integer 备份文件大小，单位KB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupSize;

    /**
     * @var string 备份开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 备份结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var integer 备份状态，1-备份中，2-备份成功
     */
    public $Status;

    /**
     * @var integer 备份方法，0-逻辑备份，1-物理备份
     */
    public $BackupMethod;

    /**
     * @param string $InstanceId 实例ID
     * @param integer $BackupType 备份方式，0-自动备份，1-手动备份
     * @param string $BackupName 备份名称
     * @param string $BackupDesc 备份备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BackupSize 备份文件大小，单位KB
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 备份开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 备份结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 备份状态，1-备份中，2-备份成功
     * @param integer $BackupMethod 备份方法，0-逻辑备份，1-物理备份
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

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }

        if (array_key_exists("BackupDesc",$param) and $param["BackupDesc"] !== null) {
            $this->BackupDesc = $param["BackupDesc"];
        }

        if (array_key_exists("BackupSize",$param) and $param["BackupSize"] !== null) {
            $this->BackupSize = $param["BackupSize"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }
    }
}
