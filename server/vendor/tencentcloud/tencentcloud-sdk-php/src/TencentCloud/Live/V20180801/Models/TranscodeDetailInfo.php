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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 转码详细信息。
 *
 * @method string getStreamName() 获取流名称。
 * @method void setStreamName(string $StreamName) 设置流名称。
 * @method string getStartTime() 获取开始时间（北京时间），格式：yyyy-mm-dd HH:MM。
 * @method void setStartTime(string $StartTime) 设置开始时间（北京时间），格式：yyyy-mm-dd HH:MM。
 * @method string getEndTime() 获取结束时间（北京时间），格式：yyyy-mm-dd HH:MM。
 * @method void setEndTime(string $EndTime) 设置结束时间（北京时间），格式：yyyy-mm-dd HH:MM。
 * @method integer getDuration() 获取转码时长，单位：分钟。
注意：因推流过程中可能有中断重推情况，此处时长为真实转码时长累加值，并非结束时间和开始时间的间隔。
 * @method void setDuration(integer $Duration) 设置转码时长，单位：分钟。
注意：因推流过程中可能有中断重推情况，此处时长为真实转码时长累加值，并非结束时间和开始时间的间隔。
 * @method string getModuleCodec() 获取编码方式，带模块，
示例：
liveprocessor_H264：直播转码-H264，
liveprocessor_H265： 直播转码-H265，
topspeed_H264：极速高清-H264，
topspeed_H265：极速高清-H265。
 * @method void setModuleCodec(string $ModuleCodec) 设置编码方式，带模块，
示例：
liveprocessor_H264：直播转码-H264，
liveprocessor_H265： 直播转码-H265，
topspeed_H264：极速高清-H264，
topspeed_H265：极速高清-H265。
 * @method integer getBitrate() 获取码率。
 * @method void setBitrate(integer $Bitrate) 设置码率。
 * @method string getType() 获取类型，包含：转码（Transcode），混流（MixStream），水印（WaterMark）。
 * @method void setType(string $Type) 设置类型，包含：转码（Transcode），混流（MixStream），水印（WaterMark）。
 * @method string getPushDomain() 获取推流域名。
 * @method void setPushDomain(string $PushDomain) 设置推流域名。
 * @method string getResolution() 获取分辨率。
 * @method void setResolution(string $Resolution) 设置分辨率。
 */
class TranscodeDetailInfo extends AbstractModel
{
    /**
     * @var string 流名称。
     */
    public $StreamName;

    /**
     * @var string 开始时间（北京时间），格式：yyyy-mm-dd HH:MM。
     */
    public $StartTime;

    /**
     * @var string 结束时间（北京时间），格式：yyyy-mm-dd HH:MM。
     */
    public $EndTime;

    /**
     * @var integer 转码时长，单位：分钟。
注意：因推流过程中可能有中断重推情况，此处时长为真实转码时长累加值，并非结束时间和开始时间的间隔。
     */
    public $Duration;

    /**
     * @var string 编码方式，带模块，
示例：
liveprocessor_H264：直播转码-H264，
liveprocessor_H265： 直播转码-H265，
topspeed_H264：极速高清-H264，
topspeed_H265：极速高清-H265。
     */
    public $ModuleCodec;

    /**
     * @var integer 码率。
     */
    public $Bitrate;

    /**
     * @var string 类型，包含：转码（Transcode），混流（MixStream），水印（WaterMark）。
     */
    public $Type;

    /**
     * @var string 推流域名。
     */
    public $PushDomain;

    /**
     * @var string 分辨率。
     */
    public $Resolution;

    /**
     * @param string $StreamName 流名称。
     * @param string $StartTime 开始时间（北京时间），格式：yyyy-mm-dd HH:MM。
     * @param string $EndTime 结束时间（北京时间），格式：yyyy-mm-dd HH:MM。
     * @param integer $Duration 转码时长，单位：分钟。
注意：因推流过程中可能有中断重推情况，此处时长为真实转码时长累加值，并非结束时间和开始时间的间隔。
     * @param string $ModuleCodec 编码方式，带模块，
示例：
liveprocessor_H264：直播转码-H264，
liveprocessor_H265： 直播转码-H265，
topspeed_H264：极速高清-H264，
topspeed_H265：极速高清-H265。
     * @param integer $Bitrate 码率。
     * @param string $Type 类型，包含：转码（Transcode），混流（MixStream），水印（WaterMark）。
     * @param string $PushDomain 推流域名。
     * @param string $Resolution 分辨率。
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
        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ModuleCodec",$param) and $param["ModuleCodec"] !== null) {
            $this->ModuleCodec = $param["ModuleCodec"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PushDomain",$param) and $param["PushDomain"] !== null) {
            $this->PushDomain = $param["PushDomain"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }
    }
}
