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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyScheduledAction请求参数结构体
 *
 * @method string getScheduledActionId() 获取待修改的定时任务ID
 * @method void setScheduledActionId(string $ScheduledActionId) 设置待修改的定时任务ID
 * @method string getScheduledActionName() 获取定时任务名称。名称仅支持中文、英文、数字、下划线、分隔符"-"、小数点，最大长度不能超60个字节。同一伸缩组下必须唯一。
 * @method void setScheduledActionName(string $ScheduledActionName) 设置定时任务名称。名称仅支持中文、英文、数字、下划线、分隔符"-"、小数点，最大长度不能超60个字节。同一伸缩组下必须唯一。
 * @method integer getMaxSize() 获取当定时任务触发时，设置的伸缩组最大实例数。
 * @method void setMaxSize(integer $MaxSize) 设置当定时任务触发时，设置的伸缩组最大实例数。
 * @method integer getMinSize() 获取当定时任务触发时，设置的伸缩组最小实例数。
 * @method void setMinSize(integer $MinSize) 设置当定时任务触发时，设置的伸缩组最小实例数。
 * @method integer getDesiredCapacity() 获取当定时任务触发时，设置的伸缩组期望实例数。
 * @method void setDesiredCapacity(integer $DesiredCapacity) 设置当定时任务触发时，设置的伸缩组期望实例数。
 * @method string getStartTime() 获取定时任务的首次触发时间，取值为`北京时间`（UTC+8），按照`ISO8601`标准，格式：`YYYY-MM-DDThh:mm:ss+08:00`。
 * @method void setStartTime(string $StartTime) 设置定时任务的首次触发时间，取值为`北京时间`（UTC+8），按照`ISO8601`标准，格式：`YYYY-MM-DDThh:mm:ss+08:00`。
 * @method string getEndTime() 获取定时任务的结束时间，取值为`北京时间`（UTC+8），按照`ISO8601`标准，格式：`YYYY-MM-DDThh:mm:ss+08:00`。<br>此参数与`Recurrence`需要同时指定，到达结束时间之后，定时任务将不再生效。
 * @method void setEndTime(string $EndTime) 设置定时任务的结束时间，取值为`北京时间`（UTC+8），按照`ISO8601`标准，格式：`YYYY-MM-DDThh:mm:ss+08:00`。<br>此参数与`Recurrence`需要同时指定，到达结束时间之后，定时任务将不再生效。
 * @method string getRecurrence() 获取定时任务的重复方式。为标准 Cron 格式<br>此参数与`EndTime`需要同时指定。
 * @method void setRecurrence(string $Recurrence) 设置定时任务的重复方式。为标准 Cron 格式<br>此参数与`EndTime`需要同时指定。
 */
class ModifyScheduledActionRequest extends AbstractModel
{
    /**
     * @var string 待修改的定时任务ID
     */
    public $ScheduledActionId;

    /**
     * @var string 定时任务名称。名称仅支持中文、英文、数字、下划线、分隔符"-"、小数点，最大长度不能超60个字节。同一伸缩组下必须唯一。
     */
    public $ScheduledActionName;

    /**
     * @var integer 当定时任务触发时，设置的伸缩组最大实例数。
     */
    public $MaxSize;

    /**
     * @var integer 当定时任务触发时，设置的伸缩组最小实例数。
     */
    public $MinSize;

    /**
     * @var integer 当定时任务触发时，设置的伸缩组期望实例数。
     */
    public $DesiredCapacity;

    /**
     * @var string 定时任务的首次触发时间，取值为`北京时间`（UTC+8），按照`ISO8601`标准，格式：`YYYY-MM-DDThh:mm:ss+08:00`。
     */
    public $StartTime;

    /**
     * @var string 定时任务的结束时间，取值为`北京时间`（UTC+8），按照`ISO8601`标准，格式：`YYYY-MM-DDThh:mm:ss+08:00`。<br>此参数与`Recurrence`需要同时指定，到达结束时间之后，定时任务将不再生效。
     */
    public $EndTime;

    /**
     * @var string 定时任务的重复方式。为标准 Cron 格式<br>此参数与`EndTime`需要同时指定。
     */
    public $Recurrence;

    /**
     * @param string $ScheduledActionId 待修改的定时任务ID
     * @param string $ScheduledActionName 定时任务名称。名称仅支持中文、英文、数字、下划线、分隔符"-"、小数点，最大长度不能超60个字节。同一伸缩组下必须唯一。
     * @param integer $MaxSize 当定时任务触发时，设置的伸缩组最大实例数。
     * @param integer $MinSize 当定时任务触发时，设置的伸缩组最小实例数。
     * @param integer $DesiredCapacity 当定时任务触发时，设置的伸缩组期望实例数。
     * @param string $StartTime 定时任务的首次触发时间，取值为`北京时间`（UTC+8），按照`ISO8601`标准，格式：`YYYY-MM-DDThh:mm:ss+08:00`。
     * @param string $EndTime 定时任务的结束时间，取值为`北京时间`（UTC+8），按照`ISO8601`标准，格式：`YYYY-MM-DDThh:mm:ss+08:00`。<br>此参数与`Recurrence`需要同时指定，到达结束时间之后，定时任务将不再生效。
     * @param string $Recurrence 定时任务的重复方式。为标准 Cron 格式<br>此参数与`EndTime`需要同时指定。
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
        if (array_key_exists("ScheduledActionId",$param) and $param["ScheduledActionId"] !== null) {
            $this->ScheduledActionId = $param["ScheduledActionId"];
        }

        if (array_key_exists("ScheduledActionName",$param) and $param["ScheduledActionName"] !== null) {
            $this->ScheduledActionName = $param["ScheduledActionName"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }

        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            $this->MinSize = $param["MinSize"];
        }

        if (array_key_exists("DesiredCapacity",$param) and $param["DesiredCapacity"] !== null) {
            $this->DesiredCapacity = $param["DesiredCapacity"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Recurrence",$param) and $param["Recurrence"] !== null) {
            $this->Recurrence = $param["Recurrence"];
        }
    }
}
