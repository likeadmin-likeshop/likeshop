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
 * 监控数据点
 *
 * @method array getDimensions() 获取实例对象维度组合
 * @method void setDimensions(array $Dimensions) 设置实例对象维度组合
 * @method array getTimestamps() 获取时间戳数组，表示那些时间点有数据，缺失的时间戳，没有数据点，可以理解为掉点了
 * @method void setTimestamps(array $Timestamps) 设置时间戳数组，表示那些时间点有数据，缺失的时间戳，没有数据点，可以理解为掉点了
 * @method array getValues() 获取监控值数组，该数组和Timestamps一一对应
 * @method void setValues(array $Values) 设置监控值数组，该数组和Timestamps一一对应
 */
class DataPoint extends AbstractModel
{
    /**
     * @var array 实例对象维度组合
     */
    public $Dimensions;

    /**
     * @var array 时间戳数组，表示那些时间点有数据，缺失的时间戳，没有数据点，可以理解为掉点了
     */
    public $Timestamps;

    /**
     * @var array 监控值数组，该数组和Timestamps一一对应
     */
    public $Values;

    /**
     * @param array $Dimensions 实例对象维度组合
     * @param array $Timestamps 时间戳数组，表示那些时间点有数据，缺失的时间戳，没有数据点，可以理解为掉点了
     * @param array $Values 监控值数组，该数组和Timestamps一一对应
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

        if (array_key_exists("Timestamps",$param) and $param["Timestamps"] !== null) {
            $this->Timestamps = $param["Timestamps"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
