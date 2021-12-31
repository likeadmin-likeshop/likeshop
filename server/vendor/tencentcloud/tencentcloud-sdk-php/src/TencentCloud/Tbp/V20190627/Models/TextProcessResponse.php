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
namespace TencentCloud\Tbp\V20190627\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TextProcess返回参数结构体
 *
 * @method string getDialogStatus() 获取当前会话状态{会话开始: START; 会话中: COUTINUE; 会话结束: COMPLETE}。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDialogStatus(string $DialogStatus) 设置当前会话状态{会话开始: START; 会话中: COUTINUE; 会话结束: COMPLETE}。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBotName() 获取匹配到的机器人名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBotName(string $BotName) 设置匹配到的机器人名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIntentName() 获取匹配到的意图名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntentName(string $IntentName) 设置匹配到的意图名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSlotInfoList() 获取槽位信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlotInfoList(array $SlotInfoList) 设置槽位信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInputText() 获取原始的用户说法。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputText(string $InputText) 设置原始的用户说法。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResponseMessage getResponseMessage() 获取机器人应答。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseMessage(ResponseMessage $ResponseMessage) 设置机器人应答。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionAttributes() 获取透传字段，由用户自定义的WebService服务返回。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionAttributes(string $SessionAttributes) 设置透传字段，由用户自定义的WebService服务返回。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResultType() 获取结果类型 {中间逻辑出错:0; 任务型机器人:1; 问答型机器人:2; 闲聊型机器人:3; 未匹配上，返回预设兜底话术:5; 未匹配上，返回相似问题列表:6}。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultType(string $ResultType) 设置结果类型 {中间逻辑出错:0; 任务型机器人:1; 问答型机器人:2; 闲聊型机器人:3; 未匹配上，返回预设兜底话术:5; 未匹配上，返回相似问题列表:6}。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class TextProcessResponse extends AbstractModel
{
    /**
     * @var string 当前会话状态{会话开始: START; 会话中: COUTINUE; 会话结束: COMPLETE}。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DialogStatus;

    /**
     * @var string 匹配到的机器人名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BotName;

    /**
     * @var string 匹配到的意图名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntentName;

    /**
     * @var array 槽位信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SlotInfoList;

    /**
     * @var string 原始的用户说法。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputText;

    /**
     * @var ResponseMessage 机器人应答。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseMessage;

    /**
     * @var string 透传字段，由用户自定义的WebService服务返回。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionAttributes;

    /**
     * @var string 结果类型 {中间逻辑出错:0; 任务型机器人:1; 问答型机器人:2; 闲聊型机器人:3; 未匹配上，返回预设兜底话术:5; 未匹配上，返回相似问题列表:6}。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultType;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DialogStatus 当前会话状态{会话开始: START; 会话中: COUTINUE; 会话结束: COMPLETE}。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BotName 匹配到的机器人名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IntentName 匹配到的意图名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SlotInfoList 槽位信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InputText 原始的用户说法。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResponseMessage $ResponseMessage 机器人应答。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionAttributes 透传字段，由用户自定义的WebService服务返回。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResultType 结果类型 {中间逻辑出错:0; 任务型机器人:1; 问答型机器人:2; 闲聊型机器人:3; 未匹配上，返回预设兜底话术:5; 未匹配上，返回相似问题列表:6}。
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

        if (array_key_exists("SlotInfoList",$param) and $param["SlotInfoList"] !== null) {
            $this->SlotInfoList = [];
            foreach ($param["SlotInfoList"] as $key => $value){
                $obj = new SlotInfo();
                $obj->deserialize($value);
                array_push($this->SlotInfoList, $obj);
            }
        }

        if (array_key_exists("InputText",$param) and $param["InputText"] !== null) {
            $this->InputText = $param["InputText"];
        }

        if (array_key_exists("ResponseMessage",$param) and $param["ResponseMessage"] !== null) {
            $this->ResponseMessage = new ResponseMessage();
            $this->ResponseMessage->deserialize($param["ResponseMessage"]);
        }

        if (array_key_exists("SessionAttributes",$param) and $param["SessionAttributes"] !== null) {
            $this->SessionAttributes = $param["SessionAttributes"];
        }

        if (array_key_exists("ResultType",$param) and $param["ResultType"] !== null) {
            $this->ResultType = $param["ResultType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
