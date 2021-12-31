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
 * 视频打点信息
 *
 * @method float getTimeOffset() 获取打点的视频偏移时间，单位：秒。
 * @method void setTimeOffset(float $TimeOffset) 设置打点的视频偏移时间，单位：秒。
 * @method string getContent() 获取打点的内容字符串，限制 1-128 个字符。
 * @method void setContent(string $Content) 设置打点的内容字符串，限制 1-128 个字符。
 */
class MediaKeyFrameDescItem extends AbstractModel
{
    /**
     * @var float 打点的视频偏移时间，单位：秒。
     */
    public $TimeOffset;

    /**
     * @var string 打点的内容字符串，限制 1-128 个字符。
     */
    public $Content;

    /**
     * @param float $TimeOffset 打点的视频偏移时间，单位：秒。
     * @param string $Content 打点的内容字符串，限制 1-128 个字符。
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
        if (array_key_exists("TimeOffset",$param) and $param["TimeOffset"] !== null) {
            $this->TimeOffset = $param["TimeOffset"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
