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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 光照统计结果
 *
 * @method array getLightDistribution() 获取各个时间点的光线值
 * @method void setLightDistribution(array $LightDistribution) 设置各个时间点的光线值
 * @method array getLightLevelRatio() 获取光照程度比例统计结果
 * @method void setLightLevelRatio(array $LightLevelRatio) 设置光照程度比例统计结果
 */
class LightStatistic extends AbstractModel
{
    /**
     * @var array 各个时间点的光线值
     */
    public $LightDistribution;

    /**
     * @var array 光照程度比例统计结果
     */
    public $LightLevelRatio;

    /**
     * @param array $LightDistribution 各个时间点的光线值
     * @param array $LightLevelRatio 光照程度比例统计结果
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
        if (array_key_exists("LightDistribution",$param) and $param["LightDistribution"] !== null) {
            $this->LightDistribution = [];
            foreach ($param["LightDistribution"] as $key => $value){
                $obj = new LightDistributionStatistic();
                $obj->deserialize($value);
                array_push($this->LightDistribution, $obj);
            }
        }

        if (array_key_exists("LightLevelRatio",$param) and $param["LightLevelRatio"] !== null) {
            $this->LightLevelRatio = [];
            foreach ($param["LightLevelRatio"] as $key => $value){
                $obj = new LightLevelRatioStatistic();
                $obj->deserialize($value);
                array_push($this->LightLevelRatio, $obj);
            }
        }
    }
}
