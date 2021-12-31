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
namespace TencentCloud\Tbp\V20190311\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Reset返回参数结构体
 *
 * @method string getDialogStatus() 获取当前会话状态。取值:"start"/"continue"/"complete"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDialogStatus(string $DialogStatus) 设置当前会话状态。取值:"start"/"continue"/"complete"
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBotName() 获取匹配到的机器人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBotName(string $BotName) 设置匹配到的机器人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIntentName() 获取匹配到的意图名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntentName(string $IntentName) 设置匹配到的意图名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResponseText() 获取机器人回答
 * @method void setResponseText(string $ResponseText) 设置机器人回答
 * @method array getSlotInfoList() 获取语义解析的槽位结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlotInfoList(array $SlotInfoList) 设置语义解析的槽位结果列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionAttributes() 获取透传字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionAttributes(string $SessionAttributes) 设置透传字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQuestion() 获取用户说法。该说法是用户原生说法或ASR识别结果，未经过语义优化
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuestion(string $Question) 设置用户说法。该说法是用户原生说法或ASR识别结果，未经过语义优化
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWaveUrl() 获取tts合成pcm音频存储链接。仅当请求参数NeedTts=true时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWaveUrl(string $WaveUrl) 设置tts合成pcm音频存储链接。仅当请求参数NeedTts=true时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWaveData() 获取tts合成的pcm音频。二进制数组经过base64编码(暂时不返回)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWaveData(string $WaveData) 设置tts合成的pcm音频。二进制数组经过base64编码(暂时不返回)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ResetResponse extends AbstractModel
{
    /**
     * @var string 当前会话状态。取值:"start"/"continue"/"complete"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DialogStatus;

    /**
     * @var string 匹配到的机器人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BotName;

    /**
     * @var string 匹配到的意图名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntentName;

    /**
     * @var string 机器人回答
     */
    public $ResponseText;

    /**
     * @var array 语义解析的槽位结果列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SlotInfoList;

    /**
     * @var string 透传字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionAttributes;

    /**
     * @var string 用户说法。该说法是用户原生说法或ASR识别结果，未经过语义优化
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Question;

    /**
     * @var string tts合成pcm音频存储链接。仅当请求参数NeedTts=true时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WaveUrl;

    /**
     * @var string tts合成的pcm音频。二进制数组经过base64编码(暂时不返回)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WaveData;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DialogStatus 当前会话状态。取值:"start"/"continue"/"complete"
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BotName 匹配到的机器人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IntentName 匹配到的意图名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResponseText 机器人回答
     * @param array $SlotInfoList 语义解析的槽位结果列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionAttributes 透传字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Question 用户说法。该说法是用户原生说法或ASR识别结果，未经过语义优化
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WaveUrl tts合成pcm音频存储链接。仅当请求参数NeedTts=true时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WaveData tts合成的pcm音频。二进制数组经过base64编码(暂时不返回)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("DialogStatus",$param) and $param["DialogStatus"] !== null) {
            $this->DialogStatus = $param["DialogStatus"];
        }

        if (array_key_exists("BotName",$param) and $param["BotName"] !== null) {
            $this->BotName = $param["BotName"];
        }

        if (array_key_exists("IntentName",$param) and $param["IntentName"] !== null) {
            $this->IntentName = $param["IntentName"];
        }

        if (array_key_exists("ResponseText",$param) and $param["ResponseText"] !== null) {
            $this->ResponseText = $param["ResponseText"];
        }

        if (array_key_exists("SlotInfoList",$param) and $param["SlotInfoList"] !== null) {
            $this->SlotInfoList = [];
            foreach ($param["SlotInfoList"] as $key => $value){
                $obj = new SlotInfo();
                $obj->deserialize($value);
                array_push($this->SlotInfoList, $obj);
            }
        }

        if (array_key_exists("SessionAttributes",$param) and $param["SessionAttributes"] !== null) {
            $this->SessionAttributes = $param["SessionAttributes"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("WaveUrl",$param) and $param["WaveUrl"] !== null) {
            $this->WaveUrl = $param["WaveUrl"];
        }

        if (array_key_exists("WaveData",$param) and $param["WaveData"] !== null) {
            $this->WaveData = $param["WaveData"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
