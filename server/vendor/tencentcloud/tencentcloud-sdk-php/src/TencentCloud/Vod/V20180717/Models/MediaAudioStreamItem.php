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
 * 点播文件音频流信息
 *
 * @method integer getBitrate() 获取音频流的码率，单位：bps。
 * @method void setBitrate(integer $Bitrate) 设置音频流的码率，单位：bps。
 * @method integer getSamplingRate() 获取音频流的采样率，单位：hz。
 * @method void setSamplingRate(integer $SamplingRate) 设置音频流的采样率，单位：hz。
 * @method string getCodec() 获取音频流的编码格式，例如 aac。
 * @method void setCodec(string $Codec) 设置音频流的编码格式，例如 aac。
 */
class MediaAudioStreamItem extends AbstractModel
{
    /**
     * @var integer 音频流的码率，单位：bps。
     */
    public $Bitrate;

    /**
     * @var integer 音频流的采样率，单位：hz。
     */
    public $SamplingRate;

    /**
     * @var string 音频流的编码格式，例如 aac。
     */
    public $Codec;

    /**
     * @param integer $Bitrate 音频流的码率，单位：bps。
     * @param integer $SamplingRate 音频流的采样率，单位：hz。
     * @param string $Codec 音频流的编码格式，例如 aac。
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
        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("SamplingRate",$param) and $param["SamplingRate"] !== null) {
            $this->SamplingRate = $param["SamplingRate"];
        }

        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }
    }
}
