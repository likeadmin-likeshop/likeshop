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
 * 输出的视频流信息
 *
 * @method string getCodec() 获取视频流的编码格式，可选值：
<li>libx264：H.264 编码 </li>
默认值：libx264。
 * @method void setCodec(string $Codec) 设置视频流的编码格式，可选值：
<li>libx264：H.264 编码 </li>
默认值：libx264。
 * @method integer getFps() 获取视频帧率，取值范围：[0, 60]，单位：Hz。
默认值：0，表示和第一个视频轨的第一个视频片段的视频帧率一致。
 * @method void setFps(integer $Fps) 设置视频帧率，取值范围：[0, 60]，单位：Hz。
默认值：0，表示和第一个视频轨的第一个视频片段的视频帧率一致。
 */
class OutputVideoStream extends AbstractModel
{
    /**
     * @var string 视频流的编码格式，可选值：
<li>libx264：H.264 编码 </li>
默认值：libx264。
     */
    public $Codec;

    /**
     * @var integer 视频帧率，取值范围：[0, 60]，单位：Hz。
默认值：0，表示和第一个视频轨的第一个视频片段的视频帧率一致。
     */
    public $Fps;

    /**
     * @param string $Codec 视频流的编码格式，可选值：
<li>libx264：H.264 编码 </li>
默认值：libx264。
     * @param integer $Fps 视频帧率，取值范围：[0, 60]，单位：Hz。
默认值：0，表示和第一个视频轨的第一个视频片段的视频帧率一致。
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
        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }
    }
}
