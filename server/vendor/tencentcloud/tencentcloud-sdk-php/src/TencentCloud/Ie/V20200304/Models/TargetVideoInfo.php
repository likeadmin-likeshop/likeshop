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
 * 目标视频信息。
 *
 * @method integer getWidth() 获取视频宽度，单位像素
 * @method void setWidth(integer $Width) 设置视频宽度，单位像素
 * @method integer getHeight() 获取视频高度，单位像素
 * @method void setHeight(integer $Height) 设置视频高度，单位像素
 * @method integer getFrameRate() 获取视频帧率，范围在1到120之间
 * @method void setFrameRate(integer $FrameRate) 设置视频帧率，范围在1到120之间
 */
class TargetVideoInfo extends AbstractModel
{
    /**
     * @var integer 视频宽度，单位像素
     */
    public $Width;

    /**
     * @var integer 视频高度，单位像素
     */
    public $Height;

    /**
     * @var integer 视频帧率，范围在1到120之间
     */
    public $FrameRate;

    /**
     * @param integer $Width 视频宽度，单位像素
     * @param integer $Height 视频高度，单位像素
     * @param integer $FrameRate 视频帧率，范围在1到120之间
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
        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("FrameRate",$param) and $param["FrameRate"] !== null) {
            $this->FrameRate = $param["FrameRate"];
        }
    }
}
