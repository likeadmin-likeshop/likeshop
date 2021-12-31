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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询旁路转码计费时长。
查询时间小于等于1天时，返回每5分钟粒度的数据；查询时间大于1天时，返回按天汇总的数据。
 *
 * @method string getTimeKey() 获取本组数据对应的时间点，格式如：2020-09-07或2020-09-07 00:05:05。
 * @method void setTimeKey(string $TimeKey) 设置本组数据对应的时间点，格式如：2020-09-07或2020-09-07 00:05:05。
 * @method integer getAudioTime() 获取语音时长，单位：秒。
 * @method void setAudioTime(integer $AudioTime) 设置语音时长，单位：秒。
 * @method integer getVideoTimeSd() 获取视频时长-标清SD，单位：秒。
 * @method void setVideoTimeSd(integer $VideoTimeSd) 设置视频时长-标清SD，单位：秒。
 * @method integer getVideoTimeHd() 获取视频时长-高清HD，单位：秒。
 * @method void setVideoTimeHd(integer $VideoTimeHd) 设置视频时长-高清HD，单位：秒。
 * @method integer getVideoTimeFhd() 获取视频时长-全高清FHD，单位：秒。
 * @method void setVideoTimeFhd(integer $VideoTimeFhd) 设置视频时长-全高清FHD，单位：秒。
 */
class SdkAppIdTrtcMcuTranscodeTimeUsage extends AbstractModel
{
    /**
     * @var string 本组数据对应的时间点，格式如：2020-09-07或2020-09-07 00:05:05。
     */
    public $TimeKey;

    /**
     * @var integer 语音时长，单位：秒。
     */
    public $AudioTime;

    /**
     * @var integer 视频时长-标清SD，单位：秒。
     */
    public $VideoTimeSd;

    /**
     * @var integer 视频时长-高清HD，单位：秒。
     */
    public $VideoTimeHd;

    /**
     * @var integer 视频时长-全高清FHD，单位：秒。
     */
    public $VideoTimeFhd;

    /**
     * @param string $TimeKey 本组数据对应的时间点，格式如：2020-09-07或2020-09-07 00:05:05。
     * @param integer $AudioTime 语音时长，单位：秒。
     * @param integer $VideoTimeSd 视频时长-标清SD，单位：秒。
     * @param integer $VideoTimeHd 视频时长-高清HD，单位：秒。
     * @param integer $VideoTimeFhd 视频时长-全高清FHD，单位：秒。
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
        if (array_key_exists("TimeKey",$param) and $param["TimeKey"] !== null) {
            $this->TimeKey = $param["TimeKey"];
        }

        if (array_key_exists("AudioTime",$param) and $param["AudioTime"] !== null) {
            $this->AudioTime = $param["AudioTime"];
        }

        if (array_key_exists("VideoTimeSd",$param) and $param["VideoTimeSd"] !== null) {
            $this->VideoTimeSd = $param["VideoTimeSd"];
        }

        if (array_key_exists("VideoTimeHd",$param) and $param["VideoTimeHd"] !== null) {
            $this->VideoTimeHd = $param["VideoTimeHd"];
        }

        if (array_key_exists("VideoTimeFhd",$param) and $param["VideoTimeFhd"] !== null) {
            $this->VideoTimeFhd = $param["VideoTimeFhd"];
        }
    }
}
