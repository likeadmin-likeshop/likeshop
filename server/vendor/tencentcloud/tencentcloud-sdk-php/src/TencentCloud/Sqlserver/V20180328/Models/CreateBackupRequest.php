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
 * CreateBackup请求参数结构体
 *
 * @method integer getStrategy() 获取备份策略(0-实例备份 1-多库备份)
 * @method void setStrategy(integer $Strategy) 设置备份策略(0-实例备份 1-多库备份)
 * @method array getDBNames() 获取需要备份库名的列表(多库备份才填写)
 * @method void setDBNames(array $DBNames) 设置需要备份库名的列表(多库备份才填写)
 * @method string getInstanceId() 获取实例ID，形如mssql-i1z41iwd
 * @method void setInstanceId(string $InstanceId) 设置实例ID，形如mssql-i1z41iwd
 * @method string getBackupName() 获取备份名称，若不填则自动生成“实例ID_备份开始时间戳”
 * @method void setBackupName(string $BackupName) 设置备份名称，若不填则自动生成“实例ID_备份开始时间戳”
 */
class CreateBackupRequest extends AbstractModel
{
    /**
     * @var integer 备份策略(0-实例备份 1-多库备份)
     */
    public $Strategy;

    /**
     * @var array 需要备份库名的列表(多库备份才填写)
     */
    public $DBNames;

    /**
     * @var string 实例ID，形如mssql-i1z41iwd
     */
    public $InstanceId;

    /**
     * @var string 备份名称，若不填则自动生成“实例ID_备份开始时间戳”
     */
    public $BackupName;

    /**
     * @param integer $Strategy 备份策略(0-实例备份 1-多库备份)
     * @param array $DBNames 需要备份库名的列表(多库备份才填写)
     * @param string $InstanceId 实例ID，形如mssql-i1z41iwd
     * @param string $BackupName 备份名称，若不填则自动生成“实例ID_备份开始时间戳”
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
        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("DBNames",$param) and $param["DBNames"] !== null) {
            $this->DBNames = $param["DBNames"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }
    }
}
