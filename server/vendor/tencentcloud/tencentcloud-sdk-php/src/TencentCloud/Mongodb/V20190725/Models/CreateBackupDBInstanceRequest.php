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
 * CreateBackupDBInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method integer getBackupMethod() 获取0-逻辑备份，1-物理备份
 * @method void setBackupMethod(integer $BackupMethod) 设置0-逻辑备份，1-物理备份
 * @method string getBackupRemark() 获取备份备注
 * @method void setBackupRemark(string $BackupRemark) 设置备份备注
 */
class CreateBackupDBInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var integer 0-逻辑备份，1-物理备份
     */
    public $BackupMethod;

    /**
     * @var string 备份备注
     */
    public $BackupRemark;

    /**
     * @param string $InstanceId 实例id
     * @param integer $BackupMethod 0-逻辑备份，1-物理备份
     * @param string $BackupRemark 备份备注
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

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("BackupRemark",$param) and $param["BackupRemark"] !== null) {
            $this->BackupRemark = $param["BackupRemark"];
        }
    }
}
