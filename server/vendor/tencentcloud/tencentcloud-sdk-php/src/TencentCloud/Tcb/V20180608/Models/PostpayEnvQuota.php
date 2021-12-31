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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 按量付费免费配额信息
 *
 * @method string getResourceType() 获取资源类型
 * @method void setResourceType(string $ResourceType) 设置资源类型
 * @method string getMetricName() 获取指标名
 * @method void setMetricName(string $MetricName) 设置指标名
 * @method integer getValue() 获取配额值
 * @method void setValue(integer $Value) 设置配额值
 * @method string getStartTime() 获取配额生效时间
为空表示没有时间限制
 * @method void setStartTime(string $StartTime) 设置配额生效时间
为空表示没有时间限制
 * @method string getEndTime() 获取配额失效时间
为空表示没有时间限制
 * @method void setEndTime(string $EndTime) 设置配额失效时间
为空表示没有时间限制
 */
class PostpayEnvQuota extends AbstractModel
{
    /**
     * @var string 资源类型
     */
    public $ResourceType;

    /**
     * @var string 指标名
     */
    public $MetricName;

    /**
     * @var integer 配额值
     */
    public $Value;

    /**
     * @var string 配额生效时间
为空表示没有时间限制
     */
    public $StartTime;

    /**
     * @var string 配额失效时间
为空表示没有时间限制
     */
    public $EndTime;

    /**
     * @param string $ResourceType 资源类型
     * @param string $MetricName 指标名
     * @param integer $Value 配额值
     * @param string $StartTime 配额生效时间
为空表示没有时间限制
     * @param string $EndTime 配额失效时间
为空表示没有时间限制
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
