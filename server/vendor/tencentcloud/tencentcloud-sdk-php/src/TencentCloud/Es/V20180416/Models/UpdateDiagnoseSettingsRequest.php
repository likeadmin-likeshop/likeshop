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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateDiagnoseSettings请求参数结构体
 *
 * @method string getInstanceId() 获取ES实例ID
 * @method void setInstanceId(string $InstanceId) 设置ES实例ID
 * @method integer getStatus() 获取0：开启智能运维；-1：关闭智能运维
 * @method void setStatus(integer $Status) 设置0：开启智能运维；-1：关闭智能运维
 * @method string getCronTime() 获取智能运维每天定时巡检时间
 * @method void setCronTime(string $CronTime) 设置智能运维每天定时巡检时间
 */
class UpdateDiagnoseSettingsRequest extends AbstractModel
{
    /**
     * @var string ES实例ID
     */
    public $InstanceId;

    /**
     * @var integer 0：开启智能运维；-1：关闭智能运维
     */
    public $Status;

    /**
     * @var string 智能运维每天定时巡检时间
     */
    public $CronTime;

    /**
     * @param string $InstanceId ES实例ID
     * @param integer $Status 0：开启智能运维；-1：关闭智能运维
     * @param string $CronTime 智能运维每天定时巡检时间
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CronTime",$param) and $param["CronTime"] !== null) {
            $this->CronTime = $param["CronTime"];
        }
    }
}
