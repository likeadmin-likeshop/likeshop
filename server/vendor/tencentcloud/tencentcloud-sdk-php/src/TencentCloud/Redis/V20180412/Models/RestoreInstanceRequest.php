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
 * RestoreInstance请求参数结构体
 *
 * @method string getInstanceId() 获取待操作的实例ID，可通过 DescribeRedis 接口返回值中的 redisId 获取。
 * @method void setInstanceId(string $InstanceId) 设置待操作的实例ID，可通过 DescribeRedis 接口返回值中的 redisId 获取。
 * @method string getBackupId() 获取备份ID，可通过 GetRedisBackupList 接口返回值中的 backupId 获取
 * @method void setBackupId(string $BackupId) 设置备份ID，可通过 GetRedisBackupList 接口返回值中的 backupId 获取
 * @method string getPassword() 获取实例密码，恢复实例时，需要校验实例密码（免密实例不需要传密码）
 * @method void setPassword(string $Password) 设置实例密码，恢复实例时，需要校验实例密码（免密实例不需要传密码）
 */
class RestoreInstanceRequest extends AbstractModel
{
    /**
     * @var string 待操作的实例ID，可通过 DescribeRedis 接口返回值中的 redisId 获取。
     */
    public $InstanceId;

    /**
     * @var string 备份ID，可通过 GetRedisBackupList 接口返回值中的 backupId 获取
     */
    public $BackupId;

    /**
     * @var string 实例密码，恢复实例时，需要校验实例密码（免密实例不需要传密码）
     */
    public $Password;

    /**
     * @param string $InstanceId 待操作的实例ID，可通过 DescribeRedis 接口返回值中的 redisId 获取。
     * @param string $BackupId 备份ID，可通过 GetRedisBackupList 接口返回值中的 backupId 获取
     * @param string $Password 实例密码，恢复实例时，需要校验实例密码（免密实例不需要传密码）
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

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
