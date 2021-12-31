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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 水印周期配置。
 *
 * @method float getStartTime() 获取水印在视频里第一次出现的播放时间点，单位：秒。
 * @method void setStartTime(float $StartTime) 设置水印在视频里第一次出现的播放时间点，单位：秒。
 * @method float getDisplayDuration() 获取在一个水印周期内，水印显示的持续时间，单位：秒。
 * @method void setDisplayDuration(float $DisplayDuration) 设置在一个水印周期内，水印显示的持续时间，单位：秒。
 * @method float getCycleDuration() 获取一个水印周期的持续时间，单位：秒。
填 0 表示水印只持续一个水印周期（即在整个视频里只显示 DisplayDuration 秒）。
 * @method void setCycleDuration(float $CycleDuration) 设置一个水印周期的持续时间，单位：秒。
填 0 表示水印只持续一个水印周期（即在整个视频里只显示 DisplayDuration 秒）。
 */
class WatermarkCycleConfigForUpdate extends AbstractModel
{
    /**
     * @var float 水印在视频里第一次出现的播放时间点，单位：秒。
     */
    public $StartTime;

    /**
     * @var float 在一个水印周期内，水印显示的持续时间，单位：秒。
     */
    public $DisplayDuration;

    /**
     * @var float 一个水印周期的持续时间，单位：秒。
填 0 表示水印只持续一个水印周期（即在整个视频里只显示 DisplayDuration 秒）。
     */
    public $CycleDuration;

    /**
     * @param float $StartTime 水印在视频里第一次出现的播放时间点，单位：秒。
     * @param float $DisplayDuration 在一个水印周期内，水印显示的持续时间，单位：秒。
     * @param float $CycleDuration 一个水印周期的持续时间，单位：秒。
填 0 表示水印只持续一个水印周期（即在整个视频里只显示 DisplayDuration 秒）。
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("DisplayDuration",$param) and $param["DisplayDuration"] !== null) {
            $this->DisplayDuration = $param["DisplayDuration"];
        }

        if (array_key_exists("CycleDuration",$param) and $param["CycleDuration"] !== null) {
            $this->CycleDuration = $param["CycleDuration"];
        }
    }
}
