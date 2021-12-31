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
namespace TencentCloud\Bda\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频基础信息
 *
 * @method integer getFrameWidth() 获取视频宽度
 * @method void setFrameWidth(integer $FrameWidth) 设置视频宽度
 * @method integer getFrameHeight() 获取视频高度
 * @method void setFrameHeight(integer $FrameHeight) 设置视频高度
 * @method integer getFramesPerSecond() 获取视频帧速率(FPS)
 * @method void setFramesPerSecond(integer $FramesPerSecond) 设置视频帧速率(FPS)
 * @method float getDuration() 获取视频时长
 * @method void setDuration(float $Duration) 设置视频时长
 * @method integer getTotalFrames() 获取视频帧数
 * @method void setTotalFrames(integer $TotalFrames) 设置视频帧数
 */
class VideoBasicInformation extends AbstractModel
{
    /**
     * @var integer 视频宽度
     */
    public $FrameWidth;

    /**
     * @var integer 视频高度
     */
    public $FrameHeight;

    /**
     * @var integer 视频帧速率(FPS)
     */
    public $FramesPerSecond;

    /**
     * @var float 视频时长
     */
    public $Duration;

    /**
     * @var integer 视频帧数
     */
    public $TotalFrames;

    /**
     * @param integer $FrameWidth 视频宽度
     * @param integer $FrameHeight 视频高度
     * @param integer $FramesPerSecond 视频帧速率(FPS)
     * @param float $Duration 视频时长
     * @param integer $TotalFrames 视频帧数
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
        if (array_key_exists("FrameWidth",$param) and $param["FrameWidth"] !== null) {
            $this->FrameWidth = $param["FrameWidth"];
        }

        if (array_key_exists("FrameHeight",$param) and $param["FrameHeight"] !== null) {
            $this->FrameHeight = $param["FrameHeight"];
        }

        if (array_key_exists("FramesPerSecond",$param) and $param["FramesPerSecond"] !== null) {
            $this->FramesPerSecond = $param["FramesPerSecond"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("TotalFrames",$param) and $param["TotalFrames"] !== null) {
            $this->TotalFrames = $param["TotalFrames"];
        }
    }
}
