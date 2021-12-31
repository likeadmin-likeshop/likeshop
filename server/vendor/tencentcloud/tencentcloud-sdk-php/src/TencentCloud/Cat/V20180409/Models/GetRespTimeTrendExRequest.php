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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetRespTimeTrendEx请求参数结构体
 *
 * @method integer getTaskId() 获取验证成功的拨测任务id
 * @method void setTaskId(integer $TaskId) 设置验证成功的拨测任务id
 * @method string getDate() 获取统计数据的发生日期。格式如：2017-05-09
 * @method void setDate(string $Date) 设置统计数据的发生日期。格式如：2017-05-09
 * @method integer getPeriod() 获取数据的采集周期，单位分钟。取值可为 1, 5, 15, 30
 * @method void setPeriod(integer $Period) 设置数据的采集周期，单位分钟。取值可为 1, 5, 15, 30
 * @method DimensionsDetail getDimensions() 获取可为 Isp, Province
 * @method void setDimensions(DimensionsDetail $Dimensions) 设置可为 Isp, Province
 * @method string getMetricName() 获取可为  totalTime, parseTime, connectTime, sendTime, waitTime, receiveTime, availRatio。缺省值为 totalTime
 * @method void setMetricName(string $MetricName) 设置可为  totalTime, parseTime, connectTime, sendTime, waitTime, receiveTime, availRatio。缺省值为 totalTime
 */
class GetRespTimeTrendExRequest extends AbstractModel
{
    /**
     * @var integer 验证成功的拨测任务id
     */
    public $TaskId;

    /**
     * @var string 统计数据的发生日期。格式如：2017-05-09
     */
    public $Date;

    /**
     * @var integer 数据的采集周期，单位分钟。取值可为 1, 5, 15, 30
     */
    public $Period;

    /**
     * @var DimensionsDetail 可为 Isp, Province
     */
    public $Dimensions;

    /**
     * @var string 可为  totalTime, parseTime, connectTime, sendTime, waitTime, receiveTime, availRatio。缺省值为 totalTime
     */
    public $MetricName;

    /**
     * @param integer $TaskId 验证成功的拨测任务id
     * @param string $Date 统计数据的发生日期。格式如：2017-05-09
     * @param integer $Period 数据的采集周期，单位分钟。取值可为 1, 5, 15, 30
     * @param DimensionsDetail $Dimensions 可为 Isp, Province
     * @param string $MetricName 可为  totalTime, parseTime, connectTime, sendTime, waitTime, receiveTime, availRatio。缺省值为 totalTime
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = new DimensionsDetail();
            $this->Dimensions->deserialize($param["Dimensions"]);
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }
    }
}
