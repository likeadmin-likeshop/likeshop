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
 * 智能精彩片段信息
 *
 * @method string getHighlightUrl() 获取智能精彩集锦地址。
 * @method void setHighlightUrl(string $HighlightUrl) 设置智能精彩集锦地址。
 * @method string getCovImgUrl() 获取智能精彩集锦封面地址。
 * @method void setCovImgUrl(string $CovImgUrl) 设置智能精彩集锦封面地址。
 * @method float getConfidence() 获取智能精彩集锦的可信度，取值范围是 0 到 100。
 * @method void setConfidence(float $Confidence) 设置智能精彩集锦的可信度，取值范围是 0 到 100。
 * @method float getDuration() 获取智能精彩集锦持续时间。
 * @method void setDuration(float $Duration) 设置智能精彩集锦持续时间。
 * @method array getSegmentSet() 获取智能精彩集锦子片段列表，精彩集锦片段由这些子片段拼接生成。
 * @method void setSegmentSet(array $SegmentSet) 设置智能精彩集锦子片段列表，精彩集锦片段由这些子片段拼接生成。
 */
class MediaAiAnalysisHighlightItem extends AbstractModel
{
    /**
     * @var string 智能精彩集锦地址。
     */
    public $HighlightUrl;

    /**
     * @var string 智能精彩集锦封面地址。
     */
    public $CovImgUrl;

    /**
     * @var float 智能精彩集锦的可信度，取值范围是 0 到 100。
     */
    public $Confidence;

    /**
     * @var float 智能精彩集锦持续时间。
     */
    public $Duration;

    /**
     * @var array 智能精彩集锦子片段列表，精彩集锦片段由这些子片段拼接生成。
     */
    public $SegmentSet;

    /**
     * @param string $HighlightUrl 智能精彩集锦地址。
     * @param string $CovImgUrl 智能精彩集锦封面地址。
     * @param float $Confidence 智能精彩集锦的可信度，取值范围是 0 到 100。
     * @param float $Duration 智能精彩集锦持续时间。
     * @param array $SegmentSet 智能精彩集锦子片段列表，精彩集锦片段由这些子片段拼接生成。
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
        if (array_key_exists("HighlightUrl",$param) and $param["HighlightUrl"] !== null) {
            $this->HighlightUrl = $param["HighlightUrl"];
        }

        if (array_key_exists("CovImgUrl",$param) and $param["CovImgUrl"] !== null) {
            $this->CovImgUrl = $param["CovImgUrl"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new HighlightSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }
    }
}
