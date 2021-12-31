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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ES cos自动备份信息
 *
 * @method boolean getIsAutoBackup() 获取是否开启cos自动备份
 * @method void setIsAutoBackup(boolean $IsAutoBackup) 设置是否开启cos自动备份
 * @method string getBackupTime() 获取自动备份执行时间（精确到小时）, e.g. "22:00"
 * @method void setBackupTime(string $BackupTime) 设置自动备份执行时间（精确到小时）, e.g. "22:00"
 */
class CosBackup extends AbstractModel
{
    /**
     * @var boolean 是否开启cos自动备份
     */
    public $IsAutoBackup;

    /**
     * @var string 自动备份执行时间（精确到小时）, e.g. "22:00"
     */
    public $BackupTime;

    /**
     * @param boolean $IsAutoBackup 是否开启cos自动备份
     * @param string $BackupTime 自动备份执行时间（精确到小时）, e.g. "22:00"
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
        if (array_key_exists("IsAutoBackup",$param) and $param["IsAutoBackup"] !== null) {
            $this->IsAutoBackup = $param["IsAutoBackup"];
        }

        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }
    }
}
