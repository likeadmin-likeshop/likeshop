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
 * 智能精彩集锦片段列表。
 *
 * @method float getConfidence() 获取置信度。
 * @method void setConfidence(float $Confidence) 设置置信度。
 * @method float getStartTimeOffset() 获取片段起始时间偏移。
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置片段起始时间偏移。
 * @method float getEndTimeOffset() 获取片段结束时间偏移。
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置片段结束时间偏移。
 */
class HighlightSegmentItem extends AbstractModel
{
    /**
     * @var float 置信度。
     */
    public $Confidence;

    /**
     * @var float 片段起始时间偏移。
     */
    public $StartTimeOffset;

    /**
     * @var float 片段结束时间偏移。
     */
    public $EndTimeOffset;

    /**
     * @param float $Confidence 置信度。
     * @param float $StartTimeOffset 片段起始时间偏移。
     * @param float $EndTimeOffset 片段结束时间偏移。
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }
    }
}
