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
 * 视频片头片尾识别输出。
 *
 * @method float getHeadConfidence() 获取片头识别置信度。取值：0~100。
 * @method void setHeadConfidence(float $HeadConfidence) 设置片头识别置信度。取值：0~100。
 * @method float getHeadTimeOffset() 获取视频片头的结束时间点，单位：秒。
 * @method void setHeadTimeOffset(float $HeadTimeOffset) 设置视频片头的结束时间点，单位：秒。
 * @method float getTailConfidence() 获取片尾识别置信度。取值：0~100。
 * @method void setTailConfidence(float $TailConfidence) 设置片尾识别置信度。取值：0~100。
 * @method float getTailTimeOffset() 获取视频片尾的开始时间点，单位：秒。
 * @method void setTailTimeOffset(float $TailTimeOffset) 设置视频片尾的开始时间点，单位：秒。
 */
class AiRecognitionTaskHeadTailResultOutput extends AbstractModel
{
    /**
     * @var float 片头识别置信度。取值：0~100。
     */
    public $HeadConfidence;

    /**
     * @var float 视频片头的结束时间点，单位：秒。
     */
    public $HeadTimeOffset;

    /**
     * @var float 片尾识别置信度。取值：0~100。
     */
    public $TailConfidence;

    /**
     * @var float 视频片尾的开始时间点，单位：秒。
     */
    public $TailTimeOffset;

    /**
     * @param float $HeadConfidence 片头识别置信度。取值：0~100。
     * @param float $HeadTimeOffset 视频片头的结束时间点，单位：秒。
     * @param float $TailConfidence 片尾识别置信度。取值：0~100。
     * @param float $TailTimeOffset 视频片尾的开始时间点，单位：秒。
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
        if (array_key_exists("HeadConfidence",$param) and $param["HeadConfidence"] !== null) {
            $this->HeadConfidence = $param["HeadConfidence"];
        }

        if (array_key_exists("HeadTimeOffset",$param) and $param["HeadTimeOffset"] !== null) {
            $this->HeadTimeOffset = $param["HeadTimeOffset"];
        }

        if (array_key_exists("TailConfidence",$param) and $param["TailConfidence"] !== null) {
            $this->TailConfidence = $param["TailConfidence"];
        }

        if (array_key_exists("TailTimeOffset",$param) and $param["TailTimeOffset"] !== null) {
            $this->TailTimeOffset = $param["TailTimeOffset"];
        }
    }
}
