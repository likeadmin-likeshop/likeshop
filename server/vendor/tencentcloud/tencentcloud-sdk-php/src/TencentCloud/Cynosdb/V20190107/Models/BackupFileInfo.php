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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份文件信息
 *
 * @method integer getSnapshotId() 获取快照文件ID，用于回滚
 * @method void setSnapshotId(integer $SnapshotId) 设置快照文件ID，用于回滚
 * @method string getFileName() 获取快照文件名
 * @method void setFileName(string $FileName) 设置快照文件名
 * @method integer getFileSize() 获取快照文件大小
 * @method void setFileSize(integer $FileSize) 设置快照文件大小
 * @method string getStartTime() 获取快照备份开始时间
 * @method void setStartTime(string $StartTime) 设置快照备份开始时间
 * @method string getFinishTime() 获取快照备份完成时间
 * @method void setFinishTime(string $FinishTime) 设置快照备份完成时间
 * @method string getBackupType() 获取备份类型：snapshot，快照备份；timepoint，时间点备份
 * @method void setBackupType(string $BackupType) 设置备份类型：snapshot，快照备份；timepoint，时间点备份
 * @method string getBackupMethod() 获取备份方式：auto，自动备份；manual，手动备份
 * @method void setBackupMethod(string $BackupMethod) 设置备份方式：auto，自动备份；manual，手动备份
 * @method string getBackupStatus() 获取备份文件状态：success：备份成功；fail：备份失败；creating：备份文件创建中；deleting：备份文件删除中
 * @method void setBackupStatus(string $BackupStatus) 设置备份文件状态：success：备份成功；fail：备份失败；creating：备份文件创建中；deleting：备份文件删除中
 * @method string getSnapshotTime() 获取备份文件时间
 * @method void setSnapshotTime(string $SnapshotTime) 设置备份文件时间
 */
class BackupFileInfo extends AbstractModel
{
    /**
     * @var integer 快照文件ID，用于回滚
     */
    public $SnapshotId;

    /**
     * @var string 快照文件名
     */
    public $FileName;

    /**
     * @var integer 快照文件大小
     */
    public $FileSize;

    /**
     * @var string 快照备份开始时间
     */
    public $StartTime;

    /**
     * @var string 快照备份完成时间
     */
    public $FinishTime;

    /**
     * @var string 备份类型：snapshot，快照备份；timepoint，时间点备份
     */
    public $BackupType;

    /**
     * @var string 备份方式：auto，自动备份；manual，手动备份
     */
    public $BackupMethod;

    /**
     * @var string 备份文件状态：success：备份成功；fail：备份失败；creating：备份文件创建中；deleting：备份文件删除中
     */
    public $BackupStatus;

    /**
     * @var string 备份文件时间
     */
    public $SnapshotTime;

    /**
     * @param integer $SnapshotId 快照文件ID，用于回滚
     * @param string $FileName 快照文件名
     * @param integer $FileSize 快照文件大小
     * @param string $StartTime 快照备份开始时间
     * @param string $FinishTime 快照备份完成时间
     * @param string $BackupType 备份类型：snapshot，快照备份；timepoint，时间点备份
     * @param string $BackupMethod 备份方式：auto，自动备份；manual，手动备份
     * @param string $BackupStatus 备份文件状态：success：备份成功；fail：备份失败；creating：备份文件创建中；deleting：备份文件删除中
     * @param string $SnapshotTime 备份文件时间
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
        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("BackupStatus",$param) and $param["BackupStatus"] !== null) {
            $this->BackupStatus = $param["BackupStatus"];
        }

        if (array_key_exists("SnapshotTime",$param) and $param["SnapshotTime"] !== null) {
            $this->SnapshotTime = $param["SnapshotTime"];
        }
    }
}
