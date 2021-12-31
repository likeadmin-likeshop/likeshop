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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自适应转码流参数模板
 *
 * @method VideoTemplateInfo getVideo() 获取视频参数信息。
 * @method void setVideo(VideoTemplateInfo $Video) 设置视频参数信息。
 * @method AudioTemplateInfo getAudio() 获取音频参数信息。
 * @method void setAudio(AudioTemplateInfo $Audio) 设置音频参数信息。
 * @method integer getRemoveAudio() 获取是否移除音频流，取值范围：
<li>0：否，</li>
<li>1：是。</li>
 * @method void setRemoveAudio(integer $RemoveAudio) 设置是否移除音频流，取值范围：
<li>0：否，</li>
<li>1：是。</li>
 * @method integer getRemoveVideo() 获取是否移除视频流，取值范围：
<li>0：否，</li>
<li>1：是。</li>
 * @method void setRemoveVideo(integer $RemoveVideo) 设置是否移除视频流，取值范围：
<li>0：否，</li>
<li>1：是。</li>
 */
class AdaptiveStreamTemplate extends AbstractModel
{
    /**
     * @var VideoTemplateInfo 视频参数信息。
     */
    public $Video;

    /**
     * @var AudioTemplateInfo 音频参数信息。
     */
    public $Audio;

    /**
     * @var integer 是否移除音频流，取值范围：
<li>0：否，</li>
<li>1：是。</li>
     */
    public $RemoveAudio;

    /**
     * @var integer 是否移除视频流，取值范围：
<li>0：否，</li>
<li>1：是。</li>
     */
    public $RemoveVideo;

    /**
     * @param VideoTemplateInfo $Video 视频参数信息。
     * @param AudioTemplateInfo $Audio 音频参数信息。
     * @param integer $RemoveAudio 是否移除音频流，取值范围：
<li>0：否，</li>
<li>1：是。</li>
     * @param integer $RemoveVideo 是否移除视频流，取值范围：
<li>0：否，</li>
<li>1：是。</li>
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
        if (array_key_exists("Video",$param) and $param["Video"] !== null) {
            $this->Video = new VideoTemplateInfo();
            $this->Video->deserialize($param["Video"]);
        }

        if (array_key_exists("Audio",$param) and $param["Audio"] !== null) {
            $this->Audio = new AudioTemplateInfo();
            $this->Audio->deserialize($param["Audio"]);
        }

        if (array_key_exists("RemoveAudio",$param) and $param["RemoveAudio"] !== null) {
            $this->RemoveAudio = $param["RemoveAudio"];
        }

        if (array_key_exists("RemoveVideo",$param) and $param["RemoveVideo"] !== null) {
            $this->RemoveVideo = $param["RemoveVideo"];
        }
    }
}
