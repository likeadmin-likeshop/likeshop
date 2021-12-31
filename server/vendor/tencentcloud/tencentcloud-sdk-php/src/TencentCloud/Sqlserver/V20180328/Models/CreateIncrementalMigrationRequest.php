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
 * CreateIncrementalMigration请求参数结构体
 *
 * @method string getInstanceId() 获取导入目标实例ID
 * @method void setInstanceId(string $InstanceId) 设置导入目标实例ID
 * @method string getBackupMigrationId() 获取备份导入任务ID，由CreateBackupMigration接口返回
 * @method void setBackupMigrationId(string $BackupMigrationId) 设置备份导入任务ID，由CreateBackupMigration接口返回
 * @method array getBackupFiles() 获取增量备份文件，全量备份任务UploadType是COS_URL时这里填URL，是COS_UPLOAD这里填备份文件的名字；只支持1个备份文件，但1个备份文件内可包含多个库
 * @method void setBackupFiles(array $BackupFiles) 设置增量备份文件，全量备份任务UploadType是COS_URL时这里填URL，是COS_UPLOAD这里填备份文件的名字；只支持1个备份文件，但1个备份文件内可包含多个库
 * @method string getIsRecovery() 获取是否需要恢复，NO-不需要，YES-需要，默认不需要
 * @method void setIsRecovery(string $IsRecovery) 设置是否需要恢复，NO-不需要，YES-需要，默认不需要
 */
class CreateIncrementalMigrationRequest extends AbstractModel
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
     * @var array 增量备份文件，全量备份任务UploadType是COS_URL时这里填URL，是COS_UPLOAD这里填备份文件的名字；只支持1个备份文件，但1个备份文件内可包含多个库
     */
    public $BackupFiles;

    /**
     * @var string 是否需要恢复，NO-不需要，YES-需要，默认不需要
     */
    public $IsRecovery;

    /**
     * @param string $InstanceId 导入目标实例ID
     * @param string $BackupMigrationId 备份导入任务ID，由CreateBackupMigration接口返回
     * @param array $BackupFiles 增量备份文件，全量备份任务UploadType是COS_URL时这里填URL，是COS_UPLOAD这里填备份文件的名字；只支持1个备份文件，但1个备份文件内可包含多个库
     * @param string $IsRecovery 是否需要恢复，NO-不需要，YES-需要，默认不需要
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

        if (array_key_exists("BackupFiles",$param) and $param["BackupFiles"] !== null) {
            $this->BackupFiles = $param["BackupFiles"];
        }

        if (array_key_exists("IsRecovery",$param) and $param["IsRecovery"] !== null) {
            $this->IsRecovery = $param["IsRecovery"];
        }
    }
}
