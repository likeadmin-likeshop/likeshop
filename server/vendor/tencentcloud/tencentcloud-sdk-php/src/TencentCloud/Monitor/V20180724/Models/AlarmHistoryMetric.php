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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警历史的指标信息
 *
 * @method string getQceNamespace() 获取云产品监控类型查询数据使用的命名空间
 * @method void setQceNamespace(string $QceNamespace) 设置云产品监控类型查询数据使用的命名空间
 * @method string getMetricName() 获取指标名
 * @method void setMetricName(string $MetricName) 设置指标名
 * @method integer getPeriod() 获取统计周期
 * @method void setPeriod(integer $Period) 设置统计周期
 * @method string getValue() 获取触发告警的数值
 * @method void setValue(string $Value) 设置触发告警的数值
 * @method string getDescription() 获取指标的展示名
 * @method void setDescription(string $Description) 设置指标的展示名
 */
class AlarmHistoryMetric extends AbstractModel
{
    /**
     * @var string 云产品监控类型查询数据使用的命名空间
     */
    public $QceNamespace;

    /**
     * @var string 指标名
     */
    public $MetricName;

    /**
     * @var integer 统计周期
     */
    public $Period;

    /**
     * @var string 触发告警的数值
     */
    public $Value;

    /**
     * @var string 指标的展示名
     */
    public $Description;

    /**
     * @param string $QceNamespace 云产品监控类型查询数据使用的命名空间
     * @param string $MetricName 指标名
     * @param integer $Period 统计周期
     * @param string $Value 触发告警的数值
     * @param string $Description 指标的展示名
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
        if (array_key_exists("QceNamespace",$param) and $param["QceNamespace"] !== null) {
            $this->QceNamespace = $param["QceNamespace"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
