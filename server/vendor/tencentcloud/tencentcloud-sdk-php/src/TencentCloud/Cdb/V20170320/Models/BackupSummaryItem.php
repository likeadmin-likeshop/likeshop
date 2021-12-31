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
 * 实例备份统计项
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method integer getAutoBackupCount() 获取该实例自动数据备份的个数。
 * @method void setAutoBackupCount(integer $AutoBackupCount) 设置该实例自动数据备份的个数。
 * @method integer getAutoBackupVolume() 获取该实例自动数据备份的容量。
 * @method void setAutoBackupVolume(integer $AutoBackupVolume) 设置该实例自动数据备份的容量。
 * @method integer getManualBackupCount() 获取该实例手动数据备份的个数。
 * @method void setManualBackupCount(integer $ManualBackupCount) 设置该实例手动数据备份的个数。
 * @method integer getManualBackupVolume() 获取该实例手动数据备份的容量。
 * @method void setManualBackupVolume(integer $ManualBackupVolume) 设置该实例手动数据备份的容量。
 * @method integer getDataBackupCount() 获取该实例总的数据备份（包含自动备份和手动备份）个数。
 * @method void setDataBackupCount(integer $DataBackupCount) 设置该实例总的数据备份（包含自动备份和手动备份）个数。
 * @method integer getDataBackupVolume() 获取该实例总的数据备份容量。
 * @method void setDataBackupVolume(integer $DataBackupVolume) 设置该实例总的数据备份容量。
 * @method integer getBinlogBackupCount() 获取该实例日志备份的个数。
 * @method void setBinlogBackupCount(integer $BinlogBackupCount) 设置该实例日志备份的个数。
 * @method integer getBinlogBackupVolume() 获取该实例日志备份的容量。
 * @method void setBinlogBackupVolume(integer $BinlogBackupVolume) 设置该实例日志备份的容量。
 * @method integer getBackupVolume() 获取该实例的总备份（包含数据备份和日志备份）占用容量。
 * @method void setBackupVolume(integer $BackupVolume) 设置该实例的总备份（包含数据备份和日志备份）占用容量。
 */
class BackupSummaryItem extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var integer 该实例自动数据备份的个数。
     */
    public $AutoBackupCount;

    /**
     * @var integer 该实例自动数据备份的容量。
     */
    public $AutoBackupVolume;

    /**
     * @var integer 该实例手动数据备份的个数。
     */
    public $ManualBackupCount;

    /**
     * @var integer 该实例手动数据备份的容量。
     */
    public $ManualBackupVolume;

    /**
     * @var integer 该实例总的数据备份（包含自动备份和手动备份）个数。
     */
    public $DataBackupCount;

    /**
     * @var integer 该实例总的数据备份容量。
     */
    public $DataBackupVolume;

    /**
     * @var integer 该实例日志备份的个数。
     */
    public $BinlogBackupCount;

    /**
     * @var integer 该实例日志备份的容量。
     */
    public $BinlogBackupVolume;

    /**
     * @var integer 该实例的总备份（包含数据备份和日志备份）占用容量。
     */
    public $BackupVolume;

    /**
     * @param string $InstanceId 实例ID。
     * @param integer $AutoBackupCount 该实例自动数据备份的个数。
     * @param integer $AutoBackupVolume 该实例自动数据备份的容量。
     * @param integer $ManualBackupCount 该实例手动数据备份的个数。
     * @param integer $ManualBackupVolume 该实例手动数据备份的容量。
     * @param integer $DataBackupCount 该实例总的数据备份（包含自动备份和手动备份）个数。
     * @param integer $DataBackupVolume 该实例总的数据备份容量。
     * @param integer $BinlogBackupCount 该实例日志备份的个数。
     * @param integer $BinlogBackupVolume 该实例日志备份的容量。
     * @param integer $BackupVolume 该实例的总备份（包含数据备份和日志备份）占用容量。
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

        if (array_key_exists("AutoBackupCount",$param) and $param["AutoBackupCount"] !== null) {
            $this->AutoBackupCount = $param["AutoBackupCount"];
        }

        if (array_key_exists("AutoBackupVolume",$param) and $param["AutoBackupVolume"] !== null) {
            $this->AutoBackupVolume = $param["AutoBackupVolume"];
        }

        if (array_key_exists("ManualBackupCount",$param) and $param["ManualBackupCount"] !== null) {
            $this->ManualBackupCount = $param["ManualBackupCount"];
        }

        if (array_key_exists("ManualBackupVolume",$param) and $param["ManualBackupVolume"] !== null) {
            $this->ManualBackupVolume = $param["ManualBackupVolume"];
        }

        if (array_key_exists("DataBackupCount",$param) and $param["DataBackupCount"] !== null) {
            $this->DataBackupCount = $param["DataBackupCount"];
        }

        if (array_key_exists("DataBackupVolume",$param) and $param["DataBackupVolume"] !== null) {
            $this->DataBackupVolume = $param["DataBackupVolume"];
        }

        if (array_key_exists("BinlogBackupCount",$param) and $param["BinlogBackupCount"] !== null) {
            $this->BinlogBackupCount = $param["BinlogBackupCount"];
        }

        if (array_key_exists("BinlogBackupVolume",$param) and $param["BinlogBackupVolume"] !== null) {
            $this->BinlogBackupVolume = $param["BinlogBackupVolume"];
        }

        if (array_key_exists("BackupVolume",$param) and $param["BackupVolume"] !== null) {
            $this->BackupVolume = $param["BackupVolume"];
        }
    }
}
