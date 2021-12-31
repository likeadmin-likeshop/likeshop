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
 * 通用混流输出参数。
 *
 * @method string getOutputStreamName() 获取输出流名称。
 * @method void setOutputStreamName(string $OutputStreamName) 设置输出流名称。
 * @method integer getOutputStreamType() 获取输出流类型，取值范围[0,1]。
不填默认为0。
当输出流为输入流 list 中的一条时，填写0。
当期望生成的混流结果成为一条新流时，该值填为1。
该值为1时，output_stream_id 不能出现在 input_stram_list 中，且直播后台中，不能存在相同 ID 的流。
 * @method void setOutputStreamType(integer $OutputStreamType) 设置输出流类型，取值范围[0,1]。
不填默认为0。
当输出流为输入流 list 中的一条时，填写0。
当期望生成的混流结果成为一条新流时，该值填为1。
该值为1时，output_stream_id 不能出现在 input_stram_list 中，且直播后台中，不能存在相同 ID 的流。
 * @method integer getOutputStreamBitRate() 获取输出流比特率。取值范围[1，50000]。
不填的情况下，系统会自动判断。
 * @method void setOutputStreamBitRate(integer $OutputStreamBitRate) 设置输出流比特率。取值范围[1，50000]。
不填的情况下，系统会自动判断。
 * @method integer getOutputStreamGop() 获取输出流GOP大小。取值范围[1,10]。
不填的情况下，系统会自动判断。
 * @method void setOutputStreamGop(integer $OutputStreamGop) 设置输出流GOP大小。取值范围[1,10]。
不填的情况下，系统会自动判断。
 * @method integer getOutputStreamFrameRate() 获取输出流帧率大小。取值范围[1,60]。
不填的情况下，系统会自动判断。
 * @method void setOutputStreamFrameRate(integer $OutputStreamFrameRate) 设置输出流帧率大小。取值范围[1,60]。
不填的情况下，系统会自动判断。
 * @method integer getOutputAudioBitRate() 获取输出流音频比特率。取值范围[1,500]
不填的情况下，系统会自动判断。
 * @method void setOutputAudioBitRate(integer $OutputAudioBitRate) 设置输出流音频比特率。取值范围[1,500]
不填的情况下，系统会自动判断。
 * @method integer getOutputAudioSampleRate() 获取输出流音频采样率。取值范围[96000, 88200, 64000, 48000, 44100, 32000,24000, 22050, 16000, 12000, 11025, 8000]。
不填的情况下，系统会自动判断。
 * @method void setOutputAudioSampleRate(integer $OutputAudioSampleRate) 设置输出流音频采样率。取值范围[96000, 88200, 64000, 48000, 44100, 32000,24000, 22050, 16000, 12000, 11025, 8000]。
不填的情况下，系统会自动判断。
 * @method integer getOutputAudioChannels() 获取输出流音频声道数。取值范围[1,2]。
不填的情况下，系统会自动判断。
 * @method void setOutputAudioChannels(integer $OutputAudioChannels) 设置输出流音频声道数。取值范围[1,2]。
不填的情况下，系统会自动判断。
 * @method string getMixSei() 获取输出流中的sei信息。如果无特殊需要，不填。
 * @method void setMixSei(string $MixSei) 设置输出流中的sei信息。如果无特殊需要，不填。
 */
class CommonMixOutputParams extends AbstractModel
{
    /**
     * @var string 输出流名称。
     */
    public $OutputStreamName;

    /**
     * @var integer 输出流类型，取值范围[0,1]。
不填默认为0。
当输出流为输入流 list 中的一条时，填写0。
当期望生成的混流结果成为一条新流时，该值填为1。
该值为1时，output_stream_id 不能出现在 input_stram_list 中，且直播后台中，不能存在相同 ID 的流。
     */
    public $OutputStreamType;

    /**
     * @var integer 输出流比特率。取值范围[1，50000]。
不填的情况下，系统会自动判断。
     */
    public $OutputStreamBitRate;

    /**
     * @var integer 输出流GOP大小。取值范围[1,10]。
不填的情况下，系统会自动判断。
     */
    public $OutputStreamGop;

    /**
     * @var integer 输出流帧率大小。取值范围[1,60]。
不填的情况下，系统会自动判断。
     */
    public $OutputStreamFrameRate;

    /**
     * @var integer 输出流音频比特率。取值范围[1,500]
不填的情况下，系统会自动判断。
     */
    public $OutputAudioBitRate;

    /**
     * @var integer 输出流音频采样率。取值范围[96000, 88200, 64000, 48000, 44100, 32000,24000, 22050, 16000, 12000, 11025, 8000]。
不填的情况下，系统会自动判断。
     */
    public $OutputAudioSampleRate;

    /**
     * @var integer 输出流音频声道数。取值范围[1,2]。
不填的情况下，系统会自动判断。
     */
    public $OutputAudioChannels;

    /**
     * @var string 输出流中的sei信息。如果无特殊需要，不填。
     */
    public $MixSei;

    /**
     * @param string $OutputStreamName 输出流名称。
     * @param integer $OutputStreamType 输出流类型，取值范围[0,1]。
不填默认为0。
当输出流为输入流 list 中的一条时，填写0。
当期望生成的混流结果成为一条新流时，该值填为1。
该值为1时，output_stream_id 不能出现在 input_stram_list 中，且直播后台中，不能存在相同 ID 的流。
     * @param integer $OutputStreamBitRate 输出流比特率。取值范围[1，50000]。
不填的情况下，系统会自动判断。
     * @param integer $OutputStreamGop 输出流GOP大小。取值范围[1,10]。
不填的情况下，系统会自动判断。
     * @param integer $OutputStreamFrameRate 输出流帧率大小。取值范围[1,60]。
不填的情况下，系统会自动判断。
     * @param integer $OutputAudioBitRate 输出流音频比特率。取值范围[1,500]
不填的情况下，系统会自动判断。
     * @param integer $OutputAudioSampleRate 输出流音频采样率。取值范围[96000, 88200, 64000, 48000, 44100, 32000,24000, 22050, 16000, 12000, 11025, 8000]。
不填的情况下，系统会自动判断。
     * @param integer $OutputAudioChannels 输出流音频声道数。取值范围[1,2]。
不填的情况下，系统会自动判断。
     * @param string $MixSei 输出流中的sei信息。如果无特殊需要，不填。
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
        if (array_key_exists("OutputStreamName",$param) and $param["OutputStreamName"] !== null) {
            $this->OutputStreamName = $param["OutputStreamName"];
        }

        if (array_key_exists("OutputStreamType",$param) and $param["OutputStreamType"] !== null) {
            $this->OutputStreamType = $param["OutputStreamType"];
        }

        if (array_key_exists("OutputStreamBitRate",$param) and $param["OutputStreamBitRate"] !== null) {
            $this->OutputStreamBitRate = $param["OutputStreamBitRate"];
        }

        if (array_key_exists("OutputStreamGop",$param) and $param["OutputStreamGop"] !== null) {
            $this->OutputStreamGop = $param["OutputStreamGop"];
        }

        if (array_key_exists("OutputStreamFrameRate",$param) and $param["OutputStreamFrameRate"] !== null) {
            $this->OutputStreamFrameRate = $param["OutputStreamFrameRate"];
        }

        if (array_key_exists("OutputAudioBitRate",$param) and $param["OutputAudioBitRate"] !== null) {
            $this->OutputAudioBitRate = $param["OutputAudioBitRate"];
        }

        if (array_key_exists("OutputAudioSampleRate",$param) and $param["OutputAudioSampleRate"] !== null) {
            $this->OutputAudioSampleRate = $param["OutputAudioSampleRate"];
        }

        if (array_key_exists("OutputAudioChannels",$param) and $param["OutputAudioChannels"] !== null) {
            $this->OutputAudioChannels = $param["OutputAudioChannels"];
        }

        if (array_key_exists("MixSei",$param) and $param["MixSei"] !== null) {
            $this->MixSei = $param["MixSei"];
        }
    }
}
