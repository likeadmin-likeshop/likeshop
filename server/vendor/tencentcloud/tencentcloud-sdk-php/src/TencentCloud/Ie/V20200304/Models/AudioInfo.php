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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音频参数信息
 *
 * @method integer getBitrate() 获取音频码率，取值范围：0 和 [26, 256]，单位：kbps。
注意：当取值为 0，表示音频码率和原始音频保持一致。
 * @method void setBitrate(integer $Bitrate) 设置音频码率，取值范围：0 和 [26, 256]，单位：kbps。
注意：当取值为 0，表示音频码率和原始音频保持一致。
 * @method string getCodec() 获取音频编码器，可选项：aac,mp3,ac3,flac,mp2。
 * @method void setCodec(string $Codec) 设置音频编码器，可选项：aac,mp3,ac3,flac,mp2。
 * @method integer getChannel() 获取声道数，可选项：
1：单声道，
2：双声道，
6：立体声。
 * @method void setChannel(integer $Channel) 设置声道数，可选项：
1：单声道，
2：双声道，
6：立体声。
 * @method integer getSampleRate() 获取采样率，单位：Hz。可选项：32000，44100,48000
 * @method void setSampleRate(integer $SampleRate) 设置采样率，单位：Hz。可选项：32000，44100,48000
 * @method Denoise getDenoise() 获取音频降噪信息
 * @method void setDenoise(Denoise $Denoise) 设置音频降噪信息
 * @method integer getEnableMuteAudio() 获取开启添加静音，可选项：
0：不开启，
1：开启，
默认不开启
 * @method void setEnableMuteAudio(integer $EnableMuteAudio) 设置开启添加静音，可选项：
0：不开启，
1：开启，
默认不开启
 * @method LoudnessInfo getLoudnessInfo() 获取音频响度信息
 * @method void setLoudnessInfo(LoudnessInfo $LoudnessInfo) 设置音频响度信息
 * @method AudioEnhance getAudioEnhance() 获取音频音效增强
 * @method void setAudioEnhance(AudioEnhance $AudioEnhance) 设置音频音效增强
 * @method RemoveReverb getRemoveReverb() 获取去除混音
 * @method void setRemoveReverb(RemoveReverb $RemoveReverb) 设置去除混音
 */
class AudioInfo extends AbstractModel
{
    /**
     * @var integer 音频码率，取值范围：0 和 [26, 256]，单位：kbps。
注意：当取值为 0，表示音频码率和原始音频保持一致。
     */
    public $Bitrate;

    /**
     * @var string 音频编码器，可选项：aac,mp3,ac3,flac,mp2。
     */
    public $Codec;

    /**
     * @var integer 声道数，可选项：
1：单声道，
2：双声道，
6：立体声。
     */
    public $Channel;

    /**
     * @var integer 采样率，单位：Hz。可选项：32000，44100,48000
     */
    public $SampleRate;

    /**
     * @var Denoise 音频降噪信息
     */
    public $Denoise;

    /**
     * @var integer 开启添加静音，可选项：
0：不开启，
1：开启，
默认不开启
     */
    public $EnableMuteAudio;

    /**
     * @var LoudnessInfo 音频响度信息
     */
    public $LoudnessInfo;

    /**
     * @var AudioEnhance 音频音效增强
     */
    public $AudioEnhance;

    /**
     * @var RemoveReverb 去除混音
     */
    public $RemoveReverb;

    /**
     * @param integer $Bitrate 音频码率，取值范围：0 和 [26, 256]，单位：kbps。
注意：当取值为 0，表示音频码率和原始音频保持一致。
     * @param string $Codec 音频编码器，可选项：aac,mp3,ac3,flac,mp2。
     * @param integer $Channel 声道数，可选项：
1：单声道，
2：双声道，
6：立体声。
     * @param integer $SampleRate 采样率，单位：Hz。可选项：32000，44100,48000
     * @param Denoise $Denoise 音频降噪信息
     * @param integer $EnableMuteAudio 开启添加静音，可选项：
0：不开启，
1：开启，
默认不开启
     * @param LoudnessInfo $LoudnessInfo 音频响度信息
     * @param AudioEnhance $AudioEnhance 音频音效增强
     * @param RemoveReverb $RemoveReverb 去除混音
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

        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("Denoise",$param) and $param["Denoise"] !== null) {
            $this->Denoise = new Denoise();
            $this->Denoise->deserialize($param["Denoise"]);
        }

        if (array_key_exists("EnableMuteAudio",$param) and $param["EnableMuteAudio"] !== null) {
            $this->EnableMuteAudio = $param["EnableMuteAudio"];
        }

        if (array_key_exists("LoudnessInfo",$param) and $param["LoudnessInfo"] !== null) {
            $this->LoudnessInfo = new LoudnessInfo();
            $this->LoudnessInfo->deserialize($param["LoudnessInfo"]);
        }

        if (array_key_exists("AudioEnhance",$param) and $param["AudioEnhance"] !== null) {
            $this->AudioEnhance = new AudioEnhance();
            $this->AudioEnhance->deserialize($param["AudioEnhance"]);
        }

        if (array_key_exists("RemoveReverb",$param) and $param["RemoveReverb"] !== null) {
            $this->RemoveReverb = new RemoveReverb();
            $this->RemoveReverb->deserialize($param["RemoveReverb"]);
        }
    }
}
