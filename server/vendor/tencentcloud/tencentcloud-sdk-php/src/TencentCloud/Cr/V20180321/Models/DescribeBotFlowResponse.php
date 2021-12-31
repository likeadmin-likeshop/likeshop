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
namespace TencentCloud\Cr\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBotFlow返回参数结构体
 *
 * @method array getBotFlowList() 获取机器人对话流列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBotFlowList(array $BotFlowList) 设置机器人对话流列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSmsSignList() 获取短信签名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSmsSignList(array $SmsSignList) 设置短信签名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSmsTemplateList() 获取短信模板列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSmsTemplateList(array $SmsTemplateList) 设置短信模板列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBotFlowResponse extends AbstractModel
{
    /**
     * @var array 机器人对话流列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BotFlowList;

    /**
     * @var array 短信签名列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SmsSignList;

    /**
     * @var array 短信模板列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SmsTemplateList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $BotFlowList 机器人对话流列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SmsSignList 短信签名列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SmsTemplateList 短信模板列表
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
        if (array_key_exists("BotFlowList",$param) and $param["BotFlowList"] !== null) {
            $this->BotFlowList = [];
            foreach ($param["BotFlowList"] as $key => $value){
                $obj = new BotFlow();
                $obj->deserialize($value);
                array_push($this->BotFlowList, $obj);
            }
        }

        if (array_key_exists("SmsSignList",$param) and $param["SmsSignList"] !== null) {
            $this->SmsSignList = [];
            foreach ($param["SmsSignList"] as $key => $value){
                $obj = new SmsSign();
                $obj->deserialize($value);
                array_push($this->SmsSignList, $obj);
            }
        }

        if (array_key_exists("SmsTemplateList",$param) and $param["SmsTemplateList"] !== null) {
            $this->SmsTemplateList = [];
            foreach ($param["SmsTemplateList"] as $key => $value){
                $obj = new SmsTemplate();
                $obj->deserialize($value);
                array_push($this->SmsTemplateList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
