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
 * ModifyBackupName请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，格式如：mssql-3l3fgqn7
 * @method void setInstanceId(string $InstanceId) 设置实例ID，格式如：mssql-3l3fgqn7
 * @method integer getBackupId() 获取要修改名称的备份ID，可通过 [DescribeBackups](https://cloud.tencent.com/document/product/238/19943)  接口获取。
 * @method void setBackupId(integer $BackupId) 设置要修改名称的备份ID，可通过 [DescribeBackups](https://cloud.tencent.com/document/product/238/19943)  接口获取。
 * @method string getBackupName() 获取修改的备份名称
 * @method void setBackupName(string $BackupName) 设置修改的备份名称
 */
class ModifyBackupNameRequest extends AbstractModel
{
    /**
     * @var string 实例ID，格式如：mssql-3l3fgqn7
     */
    public $InstanceId;

    /**
     * @var integer 要修改名称的备份ID，可通过 [DescribeBackups](https://cloud.tencent.com/document/product/238/19943)  接口获取。
     */
    public $BackupId;

    /**
     * @var string 修改的备份名称
     */
    public $BackupName;

    /**
     * @param string $InstanceId 实例ID，格式如：mssql-3l3fgqn7
     * @param integer $BackupId 要修改名称的备份ID，可通过 [DescribeBackups](https://cloud.tencent.com/document/product/238/19943)  接口获取。
     * @param string $BackupName 修改的备份名称
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

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }
    }
}
