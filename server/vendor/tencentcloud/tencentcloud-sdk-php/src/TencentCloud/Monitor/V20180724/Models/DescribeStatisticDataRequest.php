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
 * DescribeStatisticData请求参数结构体
 *
 * @method string getModule() 获取所属模块，固定值，为monitor
 * @method void setModule(string $Module) 设置所属模块，固定值，为monitor
 * @method string getNamespace() 获取命名空间，目前只支持QCE/TKE
 * @method void setNamespace(string $Namespace) 设置命名空间，目前只支持QCE/TKE
 * @method array getMetricNames() 获取指标名列表
 * @method void setMetricNames(array $MetricNames) 设置指标名列表
 * @method array getConditions() 获取维度条件，操作符支持=、in
 * @method void setConditions(array $Conditions) 设置维度条件，操作符支持=、in
 * @method integer getPeriod() 获取统计粒度。默认取值为300，单位为s
 * @method void setPeriod(integer $Period) 设置统计粒度。默认取值为300，单位为s
 * @method string getStartTime() 获取起始时间，默认为当前时间，如2020-12-08T19:51:23+08:00
 * @method void setStartTime(string $StartTime) 设置起始时间，默认为当前时间，如2020-12-08T19:51:23+08:00
 * @method string getEndTime() 获取结束时间，默认为当前时间，如2020-12-08T19:51:23+08:00
 * @method void setEndTime(string $EndTime) 设置结束时间，默认为当前时间，如2020-12-08T19:51:23+08:00
 * @method array getGroupBys() 获取按指定维度groupBy
 * @method void setGroupBys(array $GroupBys) 设置按指定维度groupBy
 */
class DescribeStatisticDataRequest extends AbstractModel
{
    /**
     * @var string 所属模块，固定值，为monitor
     */
    public $Module;

    /**
     * @var string 命名空间，目前只支持QCE/TKE
     */
    public $Namespace;

    /**
     * @var array 指标名列表
     */
    public $MetricNames;

    /**
     * @var array 维度条件，操作符支持=、in
     */
    public $Conditions;

    /**
     * @var integer 统计粒度。默认取值为300，单位为s
     */
    public $Period;

    /**
     * @var string 起始时间，默认为当前时间，如2020-12-08T19:51:23+08:00
     */
    public $StartTime;

    /**
     * @var string 结束时间，默认为当前时间，如2020-12-08T19:51:23+08:00
     */
    public $EndTime;

    /**
     * @var array 按指定维度groupBy
     */
    public $GroupBys;

    /**
     * @param string $Module 所属模块，固定值，为monitor
     * @param string $Namespace 命名空间，目前只支持QCE/TKE
     * @param array $MetricNames 指标名列表
     * @param array $Conditions 维度条件，操作符支持=、in
     * @param integer $Period 统计粒度。默认取值为300，单位为s
     * @param string $StartTime 起始时间，默认为当前时间，如2020-12-08T19:51:23+08:00
     * @param string $EndTime 结束时间，默认为当前时间，如2020-12-08T19:51:23+08:00
     * @param array $GroupBys 按指定维度groupBy
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("MetricNames",$param) and $param["MetricNames"] !== null) {
            $this->MetricNames = $param["MetricNames"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new MidQueryCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("GroupBys",$param) and $param["GroupBys"] !== null) {
            $this->GroupBys = $param["GroupBys"];
        }
    }
}
