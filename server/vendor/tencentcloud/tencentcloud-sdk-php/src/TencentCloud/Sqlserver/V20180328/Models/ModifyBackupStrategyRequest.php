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
 * ModifyBackupStrategy请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getBackupType() 获取备份类型，当前只支持按天备份，取值为daily
 * @method void setBackupType(string $BackupType) 设置备份类型，当前只支持按天备份，取值为daily
 * @method integer getBackupTime() 获取备份时间点，取值为0-23的整数
 * @method void setBackupTime(integer $BackupTime) 设置备份时间点，取值为0-23的整数
 * @method integer getBackupDay() 获取BackupType取值为daily时，表示备份间隔天数。当前取值只能为1
 * @method void setBackupDay(integer $BackupDay) 设置BackupType取值为daily时，表示备份间隔天数。当前取值只能为1
 */
class ModifyBackupStrategyRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 备份类型，当前只支持按天备份，取值为daily
     */
    public $BackupType;

    /**
     * @var integer 备份时间点，取值为0-23的整数
     */
    public $BackupTime;

    /**
     * @var integer BackupType取值为daily时，表示备份间隔天数。当前取值只能为1
     */
    public $BackupDay;

    /**
     * @param string $InstanceId 实例ID
     * @param string $BackupType 备份类型，当前只支持按天备份，取值为daily
     * @param integer $BackupTime 备份时间点，取值为0-23的整数
     * @param integer $BackupDay BackupType取值为daily时，表示备份间隔天数。当前取值只能为1
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

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }

        if (array_key_exists("BackupDay",$param) and $param["BackupDay"] !== null) {
            $this->BackupDay = $param["BackupDay"];
        }
    }
}
