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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音频流信息。
 *
 * @method integer getBitrate() 获取码率，单位：bps。
 * @method void setBitrate(integer $Bitrate) 设置码率，单位：bps。
 * @method integer getSamplingRate() 获取采样率，单位：hz。
 * @method void setSamplingRate(integer $SamplingRate) 设置采样率，单位：hz。
 * @method string getCodec() 获取编码格式。
 * @method void setCodec(string $Codec) 设置编码格式。
 */
class AudioStreamInfo extends AbstractModel
{
    /**
     * @var integer 码率，单位：bps。
     */
    public $Bitrate;

    /**
     * @var integer 采样率，单位：hz。
     */
    public $SamplingRate;

    /**
     * @var string 编码格式。
     */
    public $Codec;

    /**
     * @param integer $Bitrate 码率，单位：bps。
     * @param integer $SamplingRate 采样率，单位：hz。
     * @param string $Codec 编码格式。
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
