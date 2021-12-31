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
 * 片头片尾识别结果项
 *
 * @method float getOpeningTimeOffset() 获取视频片头的结束时间点，单位：秒。
 * @method void setOpeningTimeOffset(float $OpeningTimeOffset) 设置视频片头的结束时间点，单位：秒。
 * @method float getOpeningConfidence() 获取片头识别置信度，取值范围是 0 到 100。
 * @method void setOpeningConfidence(float $OpeningConfidence) 设置片头识别置信度，取值范围是 0 到 100。
 * @method float getEndingTimeOffset() 获取视频片尾的开始时间点，单位：秒。
 * @method void setEndingTimeOffset(float $EndingTimeOffset) 设置视频片尾的开始时间点，单位：秒。
 * @method float getEndingConfidence() 获取片尾识别置信度，取值范围是 0 到 100。
 * @method void setEndingConfidence(float $EndingConfidence) 设置片尾识别置信度，取值范围是 0 到 100。
 */
class OpeningEndingTaskResultItem extends AbstractModel
{
    /**
     * @var float 视频片头的结束时间点，单位：秒。
     */
    public $OpeningTimeOffset;

    /**
     * @var float 片头识别置信度，取值范围是 0 到 100。
     */
    public $OpeningConfidence;

    /**
     * @var float 视频片尾的开始时间点，单位：秒。
     */
    public $EndingTimeOffset;

    /**
     * @var float 片尾识别置信度，取值范围是 0 到 100。
     */
    public $EndingConfidence;

    /**
     * @param float $OpeningTimeOffset 视频片头的结束时间点，单位：秒。
     * @param float $OpeningConfidence 片头识别置信度，取值范围是 0 到 100。
     * @param float $EndingTimeOffset 视频片尾的开始时间点，单位：秒。
     * @param float $EndingConfidence 片尾识别置信度，取值范围是 0 到 100。
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
        if (array_key_exists("OpeningTimeOffset",$param) and $param["OpeningTimeOffset"] !== null) {
            $this->OpeningTimeOffset = $param["OpeningTimeOffset"];
        }

        if (array_key_exists("OpeningConfidence",$param) and $param["OpeningConfidence"] !== null) {
            $this->OpeningConfidence = $param["OpeningConfidence"];
        }

        if (array_key_exists("EndingTimeOffset",$param) and $param["EndingTimeOffset"] !== null) {
            $this->EndingTimeOffset = $param["EndingTimeOffset"];
        }

        if (array_key_exists("EndingConfidence",$param) and $param["EndingConfidence"] !== null) {
            $this->EndingConfidence = $param["EndingConfidence"];
        }
    }
}
