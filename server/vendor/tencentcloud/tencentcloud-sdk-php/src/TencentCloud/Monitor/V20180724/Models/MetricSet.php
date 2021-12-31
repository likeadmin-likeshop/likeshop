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
 * 对业务指标的单位及支持统计周期的描述
 *
 * @method string getNamespace() 获取命名空间，每个云产品会有一个命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间，每个云产品会有一个命名空间
 * @method string getMetricName() 获取指标名称
 * @method void setMetricName(string $MetricName) 设置指标名称
 * @method string getUnit() 获取指标使用的单位
 * @method void setUnit(string $Unit) 设置指标使用的单位
 * @method string getUnitCname() 获取指标使用的单位
 * @method void setUnitCname(string $UnitCname) 设置指标使用的单位
 * @method array getPeriod() 获取指标支持的统计周期，单位是秒，如60、300
 * @method void setPeriod(array $Period) 设置指标支持的统计周期，单位是秒，如60、300
 * @method array getPeriods() 获取统计周期内指标方式
 * @method void setPeriods(array $Periods) 设置统计周期内指标方式
 * @method MetricObjectMeaning getMeaning() 获取统计指标含义解释
 * @method void setMeaning(MetricObjectMeaning $Meaning) 设置统计指标含义解释
 * @method array getDimensions() 获取维度描述信息
 * @method void setDimensions(array $Dimensions) 设置维度描述信息
 */
class MetricSet extends AbstractModel
{
    /**
     * @var string 命名空间，每个云产品会有一个命名空间
     */
    public $Namespace;

    /**
     * @var string 指标名称
     */
    public $MetricName;

    /**
     * @var string 指标使用的单位
     */
    public $Unit;

    /**
     * @var string 指标使用的单位
     */
    public $UnitCname;

    /**
     * @var array 指标支持的统计周期，单位是秒，如60、300
     */
    public $Period;

    /**
     * @var array 统计周期内指标方式
     */
    public $Periods;

    /**
     * @var MetricObjectMeaning 统计指标含义解释
     */
    public $Meaning;

    /**
     * @var array 维度描述信息
     */
    public $Dimensions;

    /**
     * @param string $Namespace 命名空间，每个云产品会有一个命名空间
     * @param string $MetricName 指标名称
     * @param string $Unit 指标使用的单位
     * @param string $UnitCname 指标使用的单位
     * @param array $Period 指标支持的统计周期，单位是秒，如60、300
     * @param array $Periods 统计周期内指标方式
     * @param MetricObjectMeaning $Meaning 统计指标含义解释
     * @param array $Dimensions 维度描述信息
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("UnitCname",$param) and $param["UnitCname"] !== null) {
            $this->UnitCname = $param["UnitCname"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Periods",$param) and $param["Periods"] !== null) {
            $this->Periods = [];
            foreach ($param["Periods"] as $key => $value){
                $obj = new PeriodsSt();
                $obj->deserialize($value);
                array_push($this->Periods, $obj);
            }
        }

        if (array_key_exists("Meaning",$param) and $param["Meaning"] !== null) {
            $this->Meaning = new MetricObjectMeaning();
            $this->Meaning->deserialize($param["Meaning"]);
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = [];
            foreach ($param["Dimensions"] as $key => $value){
                $obj = new DimensionsDesc();
                $obj->deserialize($value);
                array_push($this->Dimensions, $obj);
            }
        }
    }
}
