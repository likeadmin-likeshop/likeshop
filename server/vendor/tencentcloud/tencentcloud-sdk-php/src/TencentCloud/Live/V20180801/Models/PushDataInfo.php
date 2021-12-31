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
 * 推流数据信息
 *
 * @method string getStreamName() 获取流名称。
 * @method void setStreamName(string $StreamName) 设置流名称。
 * @method string getAppName() 获取推流路径。
 * @method void setAppName(string $AppName) 设置推流路径。
 * @method string getClientIp() 获取推流客户端 IP。
 * @method void setClientIp(string $ClientIp) 设置推流客户端 IP。
 * @method string getServerIp() 获取接流服务器 IP。
 * @method void setServerIp(string $ServerIp) 设置接流服务器 IP。
 * @method integer getVideoFps() 获取推流视频帧率，单位: Hz。
 * @method void setVideoFps(integer $VideoFps) 设置推流视频帧率，单位: Hz。
 * @method integer getVideoSpeed() 获取推流视频码率，单位: bps。
 * @method void setVideoSpeed(integer $VideoSpeed) 设置推流视频码率，单位: bps。
 * @method integer getAudioFps() 获取推流音频帧率，单位: Hz。
 * @method void setAudioFps(integer $AudioFps) 设置推流音频帧率，单位: Hz。
 * @method integer getAudioSpeed() 获取推流音频码率，单位: bps。
 * @method void setAudioSpeed(integer $AudioSpeed) 设置推流音频码率，单位: bps。
 * @method string getPushDomain() 获取推流域名。
 * @method void setPushDomain(string $PushDomain) 设置推流域名。
 * @method string getBeginPushTime() 获取推流开始时间。
 * @method void setBeginPushTime(string $BeginPushTime) 设置推流开始时间。
 * @method string getAcodec() 获取音频编码格式，
例："AAC"。
 * @method void setAcodec(string $Acodec) 设置音频编码格式，
例："AAC"。
 * @method string getVcodec() 获取视频编码格式，
例："H264"。
 * @method void setVcodec(string $Vcodec) 设置视频编码格式，
例："H264"。
 * @method string getResolution() 获取分辨率。
 * @method void setResolution(string $Resolution) 设置分辨率。
 * @method integer getAsampleRate() 获取采样率。
 * @method void setAsampleRate(integer $AsampleRate) 设置采样率。
 * @method integer getMetaAudioSpeed() 获取metadata 中的音频码率，单位: Kbps。
 * @method void setMetaAudioSpeed(integer $MetaAudioSpeed) 设置metadata 中的音频码率，单位: Kbps。
 * @method integer getMetaVideoSpeed() 获取metadata 中的视频码率，单位: Kbps。
 * @method void setMetaVideoSpeed(integer $MetaVideoSpeed) 设置metadata 中的视频码率，单位: Kbps。
 * @method integer getMetaFps() 获取metadata 中的帧率。
 * @method void setMetaFps(integer $MetaFps) 设置metadata 中的帧率。
 */
class PushDataInfo extends AbstractModel
{
    /**
     * @var string 流名称。
     */
    public $StreamName;

    /**
     * @var string 推流路径。
     */
    public $AppName;

    /**
     * @var string 推流客户端 IP。
     */
    public $ClientIp;

    /**
     * @var string 接流服务器 IP。
     */
    public $ServerIp;

    /**
     * @var integer 推流视频帧率，单位: Hz。
     */
    public $VideoFps;

    /**
     * @var integer 推流视频码率，单位: bps。
     */
    public $VideoSpeed;

    /**
     * @var integer 推流音频帧率，单位: Hz。
     */
    public $AudioFps;

    /**
     * @var integer 推流音频码率，单位: bps。
     */
    public $AudioSpeed;

    /**
     * @var string 推流域名。
     */
    public $PushDomain;

    /**
     * @var string 推流开始时间。
     */
    public $BeginPushTime;

    /**
     * @var string 音频编码格式，
例："AAC"。
     */
    public $Acodec;

    /**
     * @var string 视频编码格式，
例："H264"。
     */
    public $Vcodec;

    /**
     * @var string 分辨率。
     */
    public $Resolution;

    /**
     * @var integer 采样率。
     */
    public $AsampleRate;

    /**
     * @var integer metadata 中的音频码率，单位: Kbps。
     */
    public $MetaAudioSpeed;

    /**
     * @var integer metadata 中的视频码率，单位: Kbps。
     */
    public $MetaVideoSpeed;

    /**
     * @var integer metadata 中的帧率。
     */
    public $MetaFps;

    /**
     * @param string $StreamName 流名称。
     * @param string $AppName 推流路径。
     * @param string $ClientIp 推流客户端 IP。
     * @param string $ServerIp 接流服务器 IP。
     * @param integer $VideoFps 推流视频帧率，单位: Hz。
     * @param integer $VideoSpeed 推流视频码率，单位: bps。
     * @param integer $AudioFps 推流音频帧率，单位: Hz。
     * @param integer $AudioSpeed 推流音频码率，单位: bps。
     * @param string $PushDomain 推流域名。
     * @param string $BeginPushTime 推流开始时间。
     * @param string $Acodec 音频编码格式，
例："AAC"。
     * @param string $Vcodec 视频编码格式，
例："H264"。
     * @param string $Resolution 分辨率。
     * @param integer $AsampleRate 采样率。
     * @param integer $MetaAudioSpeed metadata 中的音频码率，单位: Kbps。
     * @param integer $MetaVideoSpeed metadata 中的视频码率，单位: Kbps。
     * @param integer $MetaFps metadata 中的帧率。
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

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("ServerIp",$param) and $param["ServerIp"] !== null) {
            $this->ServerIp = $param["ServerIp"];
        }

        if (array_key_exists("VideoFps",$param) and $param["VideoFps"] !== null) {
            $this->VideoFps = $param["VideoFps"];
        }

        if (array_key_exists("VideoSpeed",$param) and $param["VideoSpeed"] !== null) {
            $this->VideoSpeed = $param["VideoSpeed"];
        }

        if (array_key_exists("AudioFps",$param) and $param["AudioFps"] !== null) {
            $this->AudioFps = $param["AudioFps"];
        }

        if (array_key_exists("AudioSpeed",$param) and $param["AudioSpeed"] !== null) {
            $this->AudioSpeed = $param["AudioSpeed"];
        }

        if (array_key_exists("PushDomain",$param) and $param["PushDomain"] !== null) {
            $this->PushDomain = $param["PushDomain"];
        }

        if (array_key_exists("BeginPushTime",$param) and $param["BeginPushTime"] !== null) {
            $this->BeginPushTime = $param["BeginPushTime"];
        }

        if (array_key_exists("Acodec",$param) and $param["Acodec"] !== null) {
            $this->Acodec = $param["Acodec"];
        }

        if (array_key_exists("Vcodec",$param) and $param["Vcodec"] !== null) {
            $this->Vcodec = $param["Vcodec"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("AsampleRate",$param) and $param["AsampleRate"] !== null) {
            $this->AsampleRate = $param["AsampleRate"];
        }

        if (array_key_exists("MetaAudioSpeed",$param) and $param["MetaAudioSpeed"] !== null) {
            $this->MetaAudioSpeed = $param["MetaAudioSpeed"];
        }

        if (array_key_exists("MetaVideoSpeed",$param) and $param["MetaVideoSpeed"] !== null) {
            $this->MetaVideoSpeed = $param["MetaVideoSpeed"];
        }

        if (array_key_exists("MetaFps",$param) and $param["MetaFps"] !== null) {
            $this->MetaFps = $param["MetaFps"];
        }
    }
}
