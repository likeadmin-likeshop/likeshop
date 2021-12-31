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
 * 视频转码播放信息（2017 版）
 *
 * @method string getUrl() 获取播放地址。
 * @method void setUrl(string $Url) 设置播放地址。
 * @method integer getDefinition() 获取转码规格 ID，参见[转码参数模板](https://cloud.tencent.com/document/product/266/33476)。
 * @method void setDefinition(integer $Definition) 设置转码规格 ID，参见[转码参数模板](https://cloud.tencent.com/document/product/266/33476)。
 * @method integer getBitrate() 获取视频流码率平均值与音频流码率平均值之和， 单位：bps。
 * @method void setBitrate(integer $Bitrate) 设置视频流码率平均值与音频流码率平均值之和， 单位：bps。
 * @method integer getHeight() 获取视频流高度的最大值，单位：px。
 * @method void setHeight(integer $Height) 设置视频流高度的最大值，单位：px。
 * @method integer getWidth() 获取视频流宽度的最大值，单位：px。
 * @method void setWidth(integer $Width) 设置视频流宽度的最大值，单位：px。
 */
class TranscodePlayInfo2017 extends AbstractModel
{
    /**
     * @var string 播放地址。
     */
    public $Url;

    /**
     * @var integer 转码规格 ID，参见[转码参数模板](https://cloud.tencent.com/document/product/266/33476)。
     */
    public $Definition;

    /**
     * @var integer 视频流码率平均值与音频流码率平均值之和， 单位：bps。
     */
    public $Bitrate;

    /**
     * @var integer 视频流高度的最大值，单位：px。
     */
    public $Height;

    /**
     * @var integer 视频流宽度的最大值，单位：px。
     */
    public $Width;

    /**
     * @param string $Url 播放地址。
     * @param integer $Definition 转码规格 ID，参见[转码参数模板](https://cloud.tencent.com/document/product/266/33476)。
     * @param integer $Bitrate 视频流码率平均值与音频流码率平均值之和， 单位：bps。
     * @param integer $Height 视频流高度的最大值，单位：px。
     * @param integer $Width 视频流宽度的最大值，单位：px。
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
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
    }
}
