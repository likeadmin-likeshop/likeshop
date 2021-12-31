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
 * 按帧标签片段列表
 *
 * @method float getStartTimeOffset() 获取按帧标签起始的偏移时间。
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置按帧标签起始的偏移时间。
 * @method float getEndTimeOffset() 获取按帧标签结束的偏移时间。
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置按帧标签结束的偏移时间。
 * @method array getTagSet() 获取时间片段内的标签列表。
 * @method void setTagSet(array $TagSet) 设置时间片段内的标签列表。
 */
class MediaAiAnalysisFrameTagSegmentItem extends AbstractModel
{
    /**
     * @var float 按帧标签起始的偏移时间。
     */
    public $StartTimeOffset;

    /**
     * @var float 按帧标签结束的偏移时间。
     */
    public $EndTimeOffset;

    /**
     * @var array 时间片段内的标签列表。
     */
    public $TagSet;

    /**
     * @param float $StartTimeOffset 按帧标签起始的偏移时间。
     * @param float $EndTimeOffset 按帧标签结束的偏移时间。
     * @param array $TagSet 时间片段内的标签列表。
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
        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new MediaAiAnalysisFrameTagItem();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }
    }
}
