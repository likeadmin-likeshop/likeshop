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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例的备份数组
 *
 * @method string getStartTime() 获取开始备份的时间
 * @method void setStartTime(string $StartTime) 设置开始备份的时间
 * @method string getBackupId() 获取备份ID
 * @method void setBackupId(string $BackupId) 设置备份ID
 * @method string getBackupType() 获取备份类型。 manualBackupInstance：用户发起的手动备份； systemBackupInstance：凌晨系统发起的备份
 * @method void setBackupType(string $BackupType) 设置备份类型。 manualBackupInstance：用户发起的手动备份； systemBackupInstance：凌晨系统发起的备份
 * @method integer getStatus() 获取备份状态。  1:"备份被其它流程锁定";  2:"备份正常，没有被任何流程锁定";  -1:"备份已过期"； 3:"备份正在被导出";  4:"备份导出成功"
 * @method void setStatus(integer $Status) 设置备份状态。  1:"备份被其它流程锁定";  2:"备份正常，没有被任何流程锁定";  -1:"备份已过期"； 3:"备份正在被导出";  4:"备份导出成功"
 * @method string getRemark() 获取备份的备注信息
 * @method void setRemark(string $Remark) 设置备份的备注信息
 * @method integer getLocked() 获取备份是否被锁定，0：未被锁定；1：已被锁定
 * @method void setLocked(integer $Locked) 设置备份是否被锁定，0：未被锁定；1：已被锁定
 */
class RedisBackupSet extends AbstractModel
{
    /**
     * @var string 开始备份的时间
     */
    public $StartTime;

    /**
     * @var string 备份ID
     */
    public $BackupId;

    /**
     * @var string 备份类型。 manualBackupInstance：用户发起的手动备份； systemBackupInstance：凌晨系统发起的备份
     */
    public $BackupType;

    /**
     * @var integer 备份状态。  1:"备份被其它流程锁定";  2:"备份正常，没有被任何流程锁定";  -1:"备份已过期"； 3:"备份正在被导出";  4:"备份导出成功"
     */
    public $Status;

    /**
     * @var string 备份的备注信息
     */
    public $Remark;

    /**
     * @var integer 备份是否被锁定，0：未被锁定；1：已被锁定
     */
    public $Locked;

    /**
     * @param string $StartTime 开始备份的时间
     * @param string $BackupId 备份ID
     * @param string $BackupType 备份类型。 manualBackupInstance：用户发起的手动备份； systemBackupInstance：凌晨系统发起的备份
     * @param integer $Status 备份状态。  1:"备份被其它流程锁定";  2:"备份正常，没有被任何流程锁定";  -1:"备份已过期"； 3:"备份正在被导出";  4:"备份导出成功"
     * @param string $Remark 备份的备注信息
     * @param integer $Locked 备份是否被锁定，0：未被锁定；1：已被锁定
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Locked",$param) and $param["Locked"] !== null) {
            $this->Locked = $param["Locked"];
        }
    }
}
