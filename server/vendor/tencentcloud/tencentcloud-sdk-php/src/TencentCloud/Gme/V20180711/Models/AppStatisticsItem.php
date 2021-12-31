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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用用量统计数据
 *
 * @method RealTimeSpeechStatisticsItem getRealtimeSpeechStatisticsItem() 获取实时语音统计数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealtimeSpeechStatisticsItem(RealTimeSpeechStatisticsItem $RealtimeSpeechStatisticsItem) 设置实时语音统计数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method VoiceMessageStatisticsItem getVoiceMessageStatisticsItem() 获取语音消息统计数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVoiceMessageStatisticsItem(VoiceMessageStatisticsItem $VoiceMessageStatisticsItem) 设置语音消息统计数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method VoiceFilterStatisticsItem getVoiceFilterStatisticsItem() 获取语音过滤统计数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVoiceFilterStatisticsItem(VoiceFilterStatisticsItem $VoiceFilterStatisticsItem) 设置语音过滤统计数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDate() 获取统计时间
 * @method void setDate(string $Date) 设置统计时间
 */
class AppStatisticsItem extends AbstractModel
{
    /**
     * @var RealTimeSpeechStatisticsItem 实时语音统计数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealtimeSpeechStatisticsItem;

    /**
     * @var VoiceMessageStatisticsItem 语音消息统计数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VoiceMessageStatisticsItem;

    /**
     * @var VoiceFilterStatisticsItem 语音过滤统计数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VoiceFilterStatisticsItem;

    /**
     * @var string 统计时间
     */
    public $Date;

    /**
     * @param RealTimeSpeechStatisticsItem $RealtimeSpeechStatisticsItem 实时语音统计数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param VoiceMessageStatisticsItem $VoiceMessageStatisticsItem 语音消息统计数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param VoiceFilterStatisticsItem $VoiceFilterStatisticsItem 语音过滤统计数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Date 统计时间
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
        if (array_key_exists("RealtimeSpeechStatisticsItem",$param) and $param["RealtimeSpeechStatisticsItem"] !== null) {
            $this->RealtimeSpeechStatisticsItem = new RealTimeSpeechStatisticsItem();
            $this->RealtimeSpeechStatisticsItem->deserialize($param["RealtimeSpeechStatisticsItem"]);
        }

        if (array_key_exists("VoiceMessageStatisticsItem",$param) and $param["VoiceMessageStatisticsItem"] !== null) {
            $this->VoiceMessageStatisticsItem = new VoiceMessageStatisticsItem();
            $this->VoiceMessageStatisticsItem->deserialize($param["VoiceMessageStatisticsItem"]);
        }

        if (array_key_exists("VoiceFilterStatisticsItem",$param) and $param["VoiceFilterStatisticsItem"] !== null) {
            $this->VoiceFilterStatisticsItem = new VoiceFilterStatisticsItem();
            $this->VoiceFilterStatisticsItem->deserialize($param["VoiceFilterStatisticsItem"]);
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }
    }
}
