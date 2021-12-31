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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMaintainPeriodConfig请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getMaintainStartTime() 获取维护开始时间，单位为秒，如3:00为10800
 * @method void setMaintainStartTime(integer $MaintainStartTime) 设置维护开始时间，单位为秒，如3:00为10800
 * @method integer getMaintainDuration() 获取维护持续时间，单位为秒，如1小时为3600
 * @method void setMaintainDuration(integer $MaintainDuration) 设置维护持续时间，单位为秒，如1小时为3600
 * @method array getMaintainWeekDays() 获取每周维护日期
 * @method void setMaintainWeekDays(array $MaintainWeekDays) 设置每周维护日期
 */
class ModifyMaintainPeriodConfigRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 维护开始时间，单位为秒，如3:00为10800
     */
    public $MaintainStartTime;

    /**
     * @var integer 维护持续时间，单位为秒，如1小时为3600
     */
    public $MaintainDuration;

    /**
     * @var array 每周维护日期
     */
    public $MaintainWeekDays;

    /**
     * @param string $InstanceId 实例ID
     * @param integer $MaintainStartTime 维护开始时间，单位为秒，如3:00为10800
     * @param integer $MaintainDuration 维护持续时间，单位为秒，如1小时为3600
     * @param array $MaintainWeekDays 每周维护日期
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

        if (array_key_exists("MaintainStartTime",$param) and $param["MaintainStartTime"] !== null) {
            $this->MaintainStartTime = $param["MaintainStartTime"];
        }

        if (array_key_exists("MaintainDuration",$param) and $param["MaintainDuration"] !== null) {
            $this->MaintainDuration = $param["MaintainDuration"];
        }

        if (array_key_exists("MaintainWeekDays",$param) and $param["MaintainWeekDays"] !== null) {
            $this->MaintainWeekDays = $param["MaintainWeekDays"];
        }
    }
}
