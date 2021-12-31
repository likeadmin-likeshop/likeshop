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
 * DescribeMetricData出参
 *
 * @method array getDimensions() 获取实例对象维度组合
 * @method void setDimensions(array $Dimensions) 设置实例对象维度组合
 * @method array getValues() 获取数据点列表
 * @method void setValues(array $Values) 设置数据点列表
 */
class MetricDataPoint extends AbstractModel
{
    /**
     * @var array 实例对象维度组合
     */
    public $Dimensions;

    /**
     * @var array 数据点列表
     */
    public $Values;

    /**
     * @param array $Dimensions 实例对象维度组合
     * @param array $Values 数据点列表
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
        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = [];
            foreach ($param["Dimensions"] as $key => $value){
                $obj = new Dimension();
                $obj->deserialize($value);
                array_push($this->Dimensions, $obj);
            }
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = [];
            foreach ($param["Values"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->Values, $obj);
            }
        }
    }
}
