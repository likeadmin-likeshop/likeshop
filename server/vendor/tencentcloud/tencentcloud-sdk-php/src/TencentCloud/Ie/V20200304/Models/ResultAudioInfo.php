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
 * 结果媒体文件的视频流信息
 *
 * @method integer getStreamId() 获取流在媒体文件中的流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStreamId(integer $StreamId) 设置流在媒体文件中的流ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDuration() 获取流的时长，单位：毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(integer $Duration) 设置流的时长，单位：毫秒
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResultAudioInfo extends AbstractModel
{
    /**
     * @var integer 流在媒体文件中的流ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StreamId;

    /**
     * @var integer 流的时长，单位：毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @param integer $StreamId 流在媒体文件中的流ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Duration 流的时长，单位：毫秒
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
        if (array_key_exists("StreamId",$param) and $param["StreamId"] !== null) {
            $this->StreamId = $param["StreamId"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
