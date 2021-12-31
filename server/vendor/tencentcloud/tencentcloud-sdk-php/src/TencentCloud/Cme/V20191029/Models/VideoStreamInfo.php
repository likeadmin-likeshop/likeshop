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
 * 视频流信息。
 *
 * @method integer getBitrate() 获取码率，单位：bps。
 * @method void setBitrate(integer $Bitrate) 设置码率，单位：bps。
 * @method integer getHeight() 获取高度，单位：px。
 * @method void setHeight(integer $Height) 设置高度，单位：px。
 * @method integer getWidth() 获取宽度，单位：px。
 * @method void setWidth(integer $Width) 设置宽度，单位：px。
 * @method string getCodec() 获取编码格式。
 * @method void setCodec(string $Codec) 设置编码格式。
 * @method integer getFps() 获取帧率，单位：hz。
 * @method void setFps(integer $Fps) 设置帧率，单位：hz。
 */
class VideoStreamInfo extends AbstractModel
{
    /**
     * @var integer 码率，单位：bps。
     */
    public $Bitrate;

    /**
     * @var integer 高度，单位：px。
     */
    public $Height;

    /**
     * @var integer 宽度，单位：px。
     */
    public $Width;

    /**
     * @var string 编码格式。
     */
    public $Codec;

    /**
     * @var integer 帧率，单位：hz。
     */
    public $Fps;

    /**
     * @param integer $Bitrate 码率，单位：bps。
     * @param integer $Height 高度，单位：px。
     * @param integer $Width 宽度，单位：px。
     * @param string $Codec 编码格式。
     * @param integer $Fps 帧率，单位：hz。
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

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }
    }
}
