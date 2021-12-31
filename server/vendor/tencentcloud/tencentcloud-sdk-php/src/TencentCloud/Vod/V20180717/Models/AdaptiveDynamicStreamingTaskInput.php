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
 * 对视频转自适应码流的输入参数类型
 *
 * @method integer getDefinition() 获取转自适应码流模板 ID。
 * @method void setDefinition(integer $Definition) 设置转自适应码流模板 ID。
 * @method array getWatermarkSet() 获取水印列表，支持多张图片或文字水印，最大可支持 10 张。
 * @method void setWatermarkSet(array $WatermarkSet) 设置水印列表，支持多张图片或文字水印，最大可支持 10 张。
 * @method array getSubtitleSet() 获取字幕列表，元素为字幕 ID，支持多个字幕，最大可支持16个。
 * @method void setSubtitleSet(array $SubtitleSet) 设置字幕列表，元素为字幕 ID，支持多个字幕，最大可支持16个。
 */
class AdaptiveDynamicStreamingTaskInput extends AbstractModel
{
    /**
     * @var integer 转自适应码流模板 ID。
     */
    public $Definition;

    /**
     * @var array 水印列表，支持多张图片或文字水印，最大可支持 10 张。
     */
    public $WatermarkSet;

    /**
     * @var array 字幕列表，元素为字幕 ID，支持多个字幕，最大可支持16个。
     */
    public $SubtitleSet;

    /**
     * @param integer $Definition 转自适应码流模板 ID。
     * @param array $WatermarkSet 水印列表，支持多张图片或文字水印，最大可支持 10 张。
     * @param array $SubtitleSet 字幕列表，元素为字幕 ID，支持多个字幕，最大可支持16个。
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("WatermarkSet",$param) and $param["WatermarkSet"] !== null) {
            $this->WatermarkSet = [];
            foreach ($param["WatermarkSet"] as $key => $value){
                $obj = new WatermarkInput();
                $obj->deserialize($value);
                array_push($this->WatermarkSet, $obj);
            }
        }

        if (array_key_exists("SubtitleSet",$param) and $param["SubtitleSet"] !== null) {
            $this->SubtitleSet = $param["SubtitleSet"];
        }
    }
}
