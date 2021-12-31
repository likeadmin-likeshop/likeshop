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
namespace TencentCloud\Ams\V20200608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 媒体审核配置
 *
 * @method integer getAudioFrequency() 获取音频截帧频率。默认一分钟
 * @method void setAudioFrequency(integer $AudioFrequency) 设置音频截帧频率。默认一分钟
 * @method integer getImageFrequency() 获取图片取帧频率, 单位（秒/帧），默认 5， 可选 1 ～ 300
 * @method void setImageFrequency(integer $ImageFrequency) 设置图片取帧频率, 单位（秒/帧），默认 5， 可选 1 ～ 300
 * @method string getCallbackUrl() 获取异步回调地址。
 * @method void setCallbackUrl(string $CallbackUrl) 设置异步回调地址。
 * @method FileOutput getSegmentOutput() 获取临时文件存储位置
 * @method void setSegmentOutput(FileOutput $SegmentOutput) 设置临时文件存储位置
 * @method boolean getUseOCR() 获取是否使用OCR，默认为true
 * @method void setUseOCR(boolean $UseOCR) 设置是否使用OCR，默认为true
 * @method boolean getUseAudio() 获取是否使用音频。（音频场景下，该值永远为true）
 * @method void setUseAudio(boolean $UseAudio) 设置是否使用音频。（音频场景下，该值永远为true）
 */
class MediaModerationConfig extends AbstractModel
{
    /**
     * @var integer 音频截帧频率。默认一分钟
     */
    public $AudioFrequency;

    /**
     * @var integer 图片取帧频率, 单位（秒/帧），默认 5， 可选 1 ～ 300
     */
    public $ImageFrequency;

    /**
     * @var string 异步回调地址。
     */
    public $CallbackUrl;

    /**
     * @var FileOutput 临时文件存储位置
     */
    public $SegmentOutput;

    /**
     * @var boolean 是否使用OCR，默认为true
     */
    public $UseOCR;

    /**
     * @var boolean 是否使用音频。（音频场景下，该值永远为true）
     */
    public $UseAudio;

    /**
     * @param integer $AudioFrequency 音频截帧频率。默认一分钟
     * @param integer $ImageFrequency 图片取帧频率, 单位（秒/帧），默认 5， 可选 1 ～ 300
     * @param string $CallbackUrl 异步回调地址。
     * @param FileOutput $SegmentOutput 临时文件存储位置
     * @param boolean $UseOCR 是否使用OCR，默认为true
     * @param boolean $UseAudio 是否使用音频。（音频场景下，该值永远为true）
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
        if (array_key_exists("AudioFrequency",$param) and $param["AudioFrequency"] !== null) {
            $this->AudioFrequency = $param["AudioFrequency"];
        }

        if (array_key_exists("ImageFrequency",$param) and $param["ImageFrequency"] !== null) {
            $this->ImageFrequency = $param["ImageFrequency"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("SegmentOutput",$param) and $param["SegmentOutput"] !== null) {
            $this->SegmentOutput = new FileOutput();
            $this->SegmentOutput->deserialize($param["SegmentOutput"]);
        }

        if (array_key_exists("UseOCR",$param) and $param["UseOCR"] !== null) {
            $this->UseOCR = $param["UseOCR"];
        }

        if (array_key_exists("UseAudio",$param) and $param["UseAudio"] !== null) {
            $this->UseAudio = $param["UseAudio"];
        }
    }
}
