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
 * 视频拆条片段。
 *
 * @method string getFileId() 获取文件 ID。仅当处理的是点播文件并且拆条生成的子片段为点播文件时有效。
 * @method void setFileId(string $FileId) 设置文件 ID。仅当处理的是点播文件并且拆条生成的子片段为点播文件时有效。
 * @method string getSegmentUrl() 获取视频拆条片段 Url。
 * @method void setSegmentUrl(string $SegmentUrl) 设置视频拆条片段 Url。
 * @method float getConfidence() 获取拆条片段置信度。取值：0~100。
 * @method void setConfidence(float $Confidence) 设置拆条片段置信度。取值：0~100。
 * @method float getStartTimeOffset() 获取拆条片段起始的偏移时间，单位：秒。
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置拆条片段起始的偏移时间，单位：秒。
 * @method float getEndTimeOffset() 获取拆条片段终止的偏移时间，单位：秒。
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置拆条片段终止的偏移时间，单位：秒。
 * @method string getCovImgUrl() 获取拆条封面图片 Url。
 * @method void setCovImgUrl(string $CovImgUrl) 设置拆条封面图片 Url。
 * @method string getSpecialInfo() 获取特殊字段，请忽略。
 * @method void setSpecialInfo(string $SpecialInfo) 设置特殊字段，请忽略。
 */
class AiRecognitionTaskSegmentSegmentItem extends AbstractModel
{
    /**
     * @var string 文件 ID。仅当处理的是点播文件并且拆条生成的子片段为点播文件时有效。
     */
    public $FileId;

    /**
     * @var string 视频拆条片段 Url。
     */
    public $SegmentUrl;

    /**
     * @var float 拆条片段置信度。取值：0~100。
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
     * @var string 拆条封面图片 Url。
     */
    public $CovImgUrl;

    /**
     * @var string 特殊字段，请忽略。
     */
    public $SpecialInfo;

    /**
     * @param string $FileId 文件 ID。仅当处理的是点播文件并且拆条生成的子片段为点播文件时有效。
     * @param string $SegmentUrl 视频拆条片段 Url。
     * @param float $Confidence 拆条片段置信度。取值：0~100。
     * @param float $StartTimeOffset 拆条片段起始的偏移时间，单位：秒。
     * @param float $EndTimeOffset 拆条片段终止的偏移时间，单位：秒。
     * @param string $CovImgUrl 拆条封面图片 Url。
     * @param string $SpecialInfo 特殊字段，请忽略。
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("SegmentUrl",$param) and $param["SegmentUrl"] !== null) {
            $this->SegmentUrl = $param["SegmentUrl"];
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

        if (array_key_exists("CovImgUrl",$param) and $param["CovImgUrl"] !== null) {
            $this->CovImgUrl = $param["CovImgUrl"];
        }

        if (array_key_exists("SpecialInfo",$param) and $param["SpecialInfo"] !== null) {
            $this->SpecialInfo = $param["SpecialInfo"];
        }
    }
}
