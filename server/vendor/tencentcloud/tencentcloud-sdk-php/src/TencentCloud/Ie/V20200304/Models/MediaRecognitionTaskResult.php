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
 * 媒体识别任务处理结果
 *
 * @method FrameTagResult getFrameTagResults() 获取帧标签识别结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrameTagResults(FrameTagResult $FrameTagResults) 设置帧标签识别结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method SubtitleResult getSubtitleResults() 获取语音字幕识别结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubtitleResults(SubtitleResult $SubtitleResults) 设置语音字幕识别结果
注意：此字段可能返回 null，表示取不到有效值。
 */
class MediaRecognitionTaskResult extends AbstractModel
{
    /**
     * @var FrameTagResult 帧标签识别结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrameTagResults;

    /**
     * @var SubtitleResult 语音字幕识别结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubtitleResults;

    /**
     * @param FrameTagResult $FrameTagResults 帧标签识别结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param SubtitleResult $SubtitleResults 语音字幕识别结果
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("FrameTagResults",$param) and $param["FrameTagResults"] !== null) {
            $this->FrameTagResults = new FrameTagResult();
            $this->FrameTagResults->deserialize($param["FrameTagResults"]);
        }

        if (array_key_exists("SubtitleResults",$param) and $param["SubtitleResults"] !== null) {
            $this->SubtitleResults = new SubtitleResult();
            $this->SubtitleResults->deserialize($param["SubtitleResults"]);
        }
    }
}
