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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实时语音用量统计数据
 *
 * @method integer getMainLandDau() 获取大陆地区DAU
 * @method void setMainLandDau(integer $MainLandDau) 设置大陆地区DAU
 * @method integer getMainLandPcu() 获取大陆地区PCU
 * @method void setMainLandPcu(integer $MainLandPcu) 设置大陆地区PCU
 * @method integer getMainLandDuration() 获取大陆地区总使用时长，单位为min
 * @method void setMainLandDuration(integer $MainLandDuration) 设置大陆地区总使用时长，单位为min
 * @method integer getOverseaDau() 获取海外地区DAU
 * @method void setOverseaDau(integer $OverseaDau) 设置海外地区DAU
 * @method integer getOverseaPcu() 获取海外地区PCU
 * @method void setOverseaPcu(integer $OverseaPcu) 设置海外地区PCU
 * @method integer getOverseaDuration() 获取海外地区总使用时长，单位为min
 * @method void setOverseaDuration(integer $OverseaDuration) 设置海外地区总使用时长，单位为min
 */
class RealTimeSpeechStatisticsItem extends AbstractModel
{
    /**
     * @var integer 大陆地区DAU
     */
    public $MainLandDau;

    /**
     * @var integer 大陆地区PCU
     */
    public $MainLandPcu;

    /**
     * @var integer 大陆地区总使用时长，单位为min
     */
    public $MainLandDuration;

    /**
     * @var integer 海外地区DAU
     */
    public $OverseaDau;

    /**
     * @var integer 海外地区PCU
     */
    public $OverseaPcu;

    /**
     * @var integer 海外地区总使用时长，单位为min
     */
    public $OverseaDuration;

    /**
     * @param integer $MainLandDau 大陆地区DAU
     * @param integer $MainLandPcu 大陆地区PCU
     * @param integer $MainLandDuration 大陆地区总使用时长，单位为min
     * @param integer $OverseaDau 海外地区DAU
     * @param integer $OverseaPcu 海外地区PCU
     * @param integer $OverseaDuration 海外地区总使用时长，单位为min
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
        if (array_key_exists("MainLandDau",$param) and $param["MainLandDau"] !== null) {
            $this->MainLandDau = $param["MainLandDau"];
        }

        if (array_key_exists("MainLandPcu",$param) and $param["MainLandPcu"] !== null) {
            $this->MainLandPcu = $param["MainLandPcu"];
        }

        if (array_key_exists("MainLandDuration",$param) and $param["MainLandDuration"] !== null) {
            $this->MainLandDuration = $param["MainLandDuration"];
        }

        if (array_key_exists("OverseaDau",$param) and $param["OverseaDau"] !== null) {
            $this->OverseaDau = $param["OverseaDau"];
        }

        if (array_key_exists("OverseaPcu",$param) and $param["OverseaPcu"] !== null) {
            $this->OverseaPcu = $param["OverseaPcu"];
        }

        if (array_key_exists("OverseaDuration",$param) and $param["OverseaDuration"] !== null) {
            $this->OverseaDuration = $param["OverseaDuration"];
        }
    }
}
