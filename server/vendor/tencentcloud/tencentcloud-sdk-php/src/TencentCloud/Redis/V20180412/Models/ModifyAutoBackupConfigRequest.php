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
 * ModifyAutoBackupConfig请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method array getWeekDays() 获取日期 Monday，Tuesday，Wednesday，Thursday，Friday，Saturday，Sunday
 * @method void setWeekDays(array $WeekDays) 设置日期 Monday，Tuesday，Wednesday，Thursday，Friday，Saturday，Sunday
 * @method string getTimePeriod() 获取时间段 00:00-01:00, 01:00-02:00...... 23:00-00:00
 * @method void setTimePeriod(string $TimePeriod) 设置时间段 00:00-01:00, 01:00-02:00...... 23:00-00:00
 * @method integer getAutoBackupType() 获取自动备份类型： 1 “定时回档”
 * @method void setAutoBackupType(integer $AutoBackupType) 设置自动备份类型： 1 “定时回档”
 */
class ModifyAutoBackupConfigRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var array 日期 Monday，Tuesday，Wednesday，Thursday，Friday，Saturday，Sunday
     */
    public $WeekDays;

    /**
     * @var string 时间段 00:00-01:00, 01:00-02:00...... 23:00-00:00
     */
    public $TimePeriod;

    /**
     * @var integer 自动备份类型： 1 “定时回档”
     */
    public $AutoBackupType;

    /**
     * @param string $InstanceId 实例ID
     * @param array $WeekDays 日期 Monday，Tuesday，Wednesday，Thursday，Friday，Saturday，Sunday
     * @param string $TimePeriod 时间段 00:00-01:00, 01:00-02:00...... 23:00-00:00
     * @param integer $AutoBackupType 自动备份类型： 1 “定时回档”
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

        if (array_key_exists("WeekDays",$param) and $param["WeekDays"] !== null) {
            $this->WeekDays = $param["WeekDays"];
        }

        if (array_key_exists("TimePeriod",$param) and $param["TimePeriod"] !== null) {
            $this->TimePeriod = $param["TimePeriod"];
        }

        if (array_key_exists("AutoBackupType",$param) and $param["AutoBackupType"] !== null) {
            $this->AutoBackupType = $param["AutoBackupType"];
        }
    }
}
