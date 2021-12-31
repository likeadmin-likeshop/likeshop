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
 * CreateSegmentationTask请求参数结构体
 *
 * @method string getVideoUrl() 获取需要分割的视频URL，可外网访问。
 * @method void setVideoUrl(string $VideoUrl) 设置需要分割的视频URL，可外网访问。
 * @method string getBackgroundImageUrl() 获取背景图片URL。 
可以将视频背景替换为输入的图片。 
如果不输入背景图片，则输出人像区域mask。
 * @method void setBackgroundImageUrl(string $BackgroundImageUrl) 设置背景图片URL。 
可以将视频背景替换为输入的图片。 
如果不输入背景图片，则输出人像区域mask。
 * @method string getConfig() 获取预留字段，后期用于展示更多识别信息。
 * @method void setConfig(string $Config) 设置预留字段，后期用于展示更多识别信息。
 */
class CreateSegmentationTaskRequest extends AbstractModel
{
    /**
     * @var string 需要分割的视频URL，可外网访问。
     */
    public $VideoUrl;

    /**
     * @var string 背景图片URL。 
可以将视频背景替换为输入的图片。 
如果不输入背景图片，则输出人像区域mask。
     */
    public $BackgroundImageUrl;

    /**
     * @var string 预留字段，后期用于展示更多识别信息。
     */
    public $Config;

    /**
     * @param string $VideoUrl 需要分割的视频URL，可外网访问。
     * @param string $BackgroundImageUrl 背景图片URL。 
可以将视频背景替换为输入的图片。 
如果不输入背景图片，则输出人像区域mask。
     * @param string $Config 预留字段，后期用于展示更多识别信息。
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
        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }

        if (array_key_exists("BackgroundImageUrl",$param) and $param["BackgroundImageUrl"] !== null) {
            $this->BackgroundImageUrl = $param["BackgroundImageUrl"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }
    }
}
