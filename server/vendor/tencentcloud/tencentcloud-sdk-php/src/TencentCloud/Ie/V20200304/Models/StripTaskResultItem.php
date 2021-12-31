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
 * 智能拆条结果项
 *
 * @method string getSegmentUrl() 获取视频拆条片段地址。
 * @method void setSegmentUrl(string $SegmentUrl) 设置视频拆条片段地址。
 * @method string getCovImgUrl() 获取拆条封面图片地址。
 * @method void setCovImgUrl(string $CovImgUrl) 设置拆条封面图片地址。
 * @method float getConfidence() 获取置信度，取值范围是 0 到 100。
 * @method void setConfidence(float $Confidence) 设置置信度，取值范围是 0 到 100。
 * @method float getStartTimeOffset() 获取拆条片段起始的偏移时间，单位：秒。
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置拆条片段起始的偏移时间，单位：秒。
 * @method float getEndTimeOffset() 获取拆条片段终止的偏移时间，单位：秒。
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置拆条片段终止的偏移时间，单位：秒。
 */
class StripTaskResultItem extends AbstractModel
{
    /**
     * @var string 视频拆条片段地址。
     */
    public $SegmentUrl;

    /**
     * @var string 拆条封面图片地址。
     */
    public $CovImgUrl;

    /**
     * @var float 置信度，取值范围是 0 到 100。
     */
    public $Confidence;

    /**
     * @var float 拆条片段起始的偏移时间，单位：秒。
     */
    public $StartTimeOffset;

    /**
     * @var float 拆条片段终止的偏移时间，单位：秒。
     */
    public $EndTimeOffset;

    /**
     * @param string $SegmentUrl 视频拆条片段地址。
     * @param string $CovImgUrl 拆条封面图片地址。
     * @param float $Confidence 置信度，取值范围是 0 到 100。
     * @param float $StartTimeOffset 拆条片段起始的偏移时间，单位：秒。
     * @param float $EndTimeOffset 拆条片段终止的偏移时间，单位：秒。
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
        if (array_key_exists("SegmentUrl",$param) and $param["SegmentUrl"] !== null) {
            $this->SegmentUrl = $param["SegmentUrl"];
        }

        if (array_key_exists("CovImgUrl",$param) and $param["CovImgUrl"] !== null) {
            $this->CovImgUrl = $param["CovImgUrl"];
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
