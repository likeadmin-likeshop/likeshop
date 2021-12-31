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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartBackupMigration请求参数结构体
 *
 * @method string getInstanceId() 获取导入目标实例ID
 * @method void setInstanceId(string $InstanceId) 设置导入目标实例ID
 * @method string getBackupMigrationId() 获取备份导入任务ID，由CreateBackupMigration接口返回
 * @method void setBackupMigrationId(string $BackupMigrationId) 设置备份导入任务ID，由CreateBackupMigration接口返回
 */
class StartBackupMigrationRequest extends AbstractModel
{
    /**
     * @var string 导入目标实例ID
     */
    public $InstanceId;

    /**
     * @var string 备份导入任务ID，由CreateBackupMigration接口返回
     */
    public $BackupMigrationId;

    /**
     * @param string $InstanceId 导入目标实例ID
     * @param string $BackupMigrationId 备份导入任务ID，由CreateBackupMigration接口返回
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

        if (array_key_exists("BackupMigrationId",$param) and $param["BackupMigrationId"] !== null) {
            $this->BackupMigrationId = $param["BackupMigrationId"];
        }
    }
}
