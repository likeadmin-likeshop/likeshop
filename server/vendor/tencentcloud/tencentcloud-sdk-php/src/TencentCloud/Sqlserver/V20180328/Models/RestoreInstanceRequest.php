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
 * RestoreInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，形如mssql-j8kv137v
 * @method void setInstanceId(string $InstanceId) 设置实例ID，形如mssql-j8kv137v
 * @method integer getBackupId() 获取备份文件ID，该ID可以通过DescribeBackups接口返回数据中的Id字段获得
 * @method void setBackupId(integer $BackupId) 设置备份文件ID，该ID可以通过DescribeBackups接口返回数据中的Id字段获得
 * @method string getTargetInstanceId() 获取备份恢复到的同一个APPID下的实例ID，不填则恢复到原实例ID
 * @method void setTargetInstanceId(string $TargetInstanceId) 设置备份恢复到的同一个APPID下的实例ID，不填则恢复到原实例ID
 * @method array getRenameRestore() 获取按照ReNameRestoreDatabase中的库进行恢复，并重命名，不填则按照默认方式命名恢复的库，且恢复所有的库。
 * @method void setRenameRestore(array $RenameRestore) 设置按照ReNameRestoreDatabase中的库进行恢复，并重命名，不填则按照默认方式命名恢复的库，且恢复所有的库。
 */
class RestoreInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例ID，形如mssql-j8kv137v
     */
    public $InstanceId;

    /**
     * @var integer 备份文件ID，该ID可以通过DescribeBackups接口返回数据中的Id字段获得
     */
    public $BackupId;

    /**
     * @var string 备份恢复到的同一个APPID下的实例ID，不填则恢复到原实例ID
     */
    public $TargetInstanceId;

    /**
     * @var array 按照ReNameRestoreDatabase中的库进行恢复，并重命名，不填则按照默认方式命名恢复的库，且恢复所有的库。
     */
    public $RenameRestore;

    /**
     * @param string $InstanceId 实例ID，形如mssql-j8kv137v
     * @param integer $BackupId 备份文件ID，该ID可以通过DescribeBackups接口返回数据中的Id字段获得
     * @param string $TargetInstanceId 备份恢复到的同一个APPID下的实例ID，不填则恢复到原实例ID
     * @param array $RenameRestore 按照ReNameRestoreDatabase中的库进行恢复，并重命名，不填则按照默认方式命名恢复的库，且恢复所有的库。
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

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("TargetInstanceId",$param) and $param["TargetInstanceId"] !== null) {
            $this->TargetInstanceId = $param["TargetInstanceId"];
        }

        if (array_key_exists("RenameRestore",$param) and $param["RenameRestore"] !== null) {
            $this->RenameRestore = [];
            foreach ($param["RenameRestore"] as $key => $value){
                $obj = new RenameRestoreDatabase();
                $obj->deserialize($value);
                array_push($this->RenameRestore, $obj);
            }
        }
    }
}
