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
 * DescribeAutoBackupConfig返回参数结构体
 *
 * @method integer getAutoBackupType() 获取备份类型。自动备份类型： 1 “定时回档”
 * @method void setAutoBackupType(integer $AutoBackupType) 设置备份类型。自动备份类型： 1 “定时回档”
 * @method array getWeekDays() 获取Monday，Tuesday，Wednesday，Thursday，Friday，Saturday，Sunday。
 * @method void setWeekDays(array $WeekDays) 设置Monday，Tuesday，Wednesday，Thursday，Friday，Saturday，Sunday。
 * @method string getTimePeriod() 获取时间段。
 * @method void setTimePeriod(string $TimePeriod) 设置时间段。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAutoBackupConfigResponse extends AbstractModel
{
    /**
     * @var integer 备份类型。自动备份类型： 1 “定时回档”
     */
    public $AutoBackupType;

    /**
     * @var array Monday，Tuesday，Wednesday，Thursday，Friday，Saturday，Sunday。
     */
    public $WeekDays;

    /**
     * @var string 时间段。
     */
    public $TimePeriod;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AutoBackupType 备份类型。自动备份类型： 1 “定时回档”
     * @param array $WeekDays Monday，Tuesday，Wednesday，Thursday，Friday，Saturday，Sunday。
     * @param string $TimePeriod 时间段。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AutoBackupType",$param) and $param["AutoBackupType"] !== null) {
            $this->AutoBackupType = $param["AutoBackupType"];
        }

        if (array_key_exists("WeekDays",$param) and $param["WeekDays"] !== null) {
            $this->WeekDays = $param["WeekDays"];
        }

        if (array_key_exists("TimePeriod",$param) and $param["TimePeriod"] !== null) {
            $this->TimePeriod = $param["TimePeriod"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
