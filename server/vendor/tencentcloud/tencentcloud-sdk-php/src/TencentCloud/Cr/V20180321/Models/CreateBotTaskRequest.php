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
 * CreateBotTask请求参数结构体
 *
 * @method string getModule() 获取模块名。默认值（固定）：AiApi
 * @method void setModule(string $Module) 设置模块名。默认值（固定）：AiApi
 * @method string getOperation() 获取操作名。默认值（固定）：CreateTask
 * @method void setOperation(string $Operation) 设置操作名。默认值（固定）：CreateTask
 * @method string getBotName() 获取任务名称
 * @method void setBotName(string $BotName) 设置任务名称
 * @method string getFlowId() 获取对话流ID
 * @method void setFlowId(string $FlowId) 设置对话流ID
 * @method string getBanCall() 获取是否禁止拨打，默认Y
 * @method void setBanCall(string $BanCall) 设置是否禁止拨打，默认Y
 * @method string getPhoneCollection() 获取拨打线路集合
 * @method void setPhoneCollection(string $PhoneCollection) 设置拨打线路集合
 * @method CallTimeDict getCallTimeCollection() 获取产品拨打时间集合
 * @method void setCallTimeCollection(CallTimeDict $CallTimeCollection) 设置产品拨打时间集合
 * @method string getStartTimeBan() 获取禁止拨打起始时间。默认130000
 * @method void setStartTimeBan(string $StartTimeBan) 设置禁止拨打起始时间。默认130000
 * @method string getEndTimeBan() 获取禁止拨打结束时间。默认140000
 * @method void setEndTimeBan(string $EndTimeBan) 设置禁止拨打结束时间。默认140000
 * @method string getCodeType() 获取重播方式，NON：未接通、LABEL：意向分级，可多选，用竖线分隔：NON|LABEL
 * @method void setCodeType(string $CodeType) 设置重播方式，NON：未接通、LABEL：意向分级，可多选，用竖线分隔：NON|LABEL
 * @method string getCodeCollection() 获取重播值集合，A：强意向、B：中意向、C：低意向、D：无意向、E：在忙、F：未接通、G：无效号码，可多选，用竖线分隔：A|B|C|D|E|F|G
 * @method void setCodeCollection(string $CodeCollection) 设置重播值集合，A：强意向、B：中意向、C：低意向、D：无意向、E：在忙、F：未接通、G：无效号码，可多选，用竖线分隔：A|B|C|D|E|F|G
 * @method integer getCallCount() 获取继续拨打次数
 * @method void setCallCount(integer $CallCount) 设置继续拨打次数
 * @method integer getCallInterval() 获取拨打间隔
 * @method void setCallInterval(integer $CallInterval) 设置拨打间隔
 * @method string getSmsSignId() 获取未接通引用短信签名ID
 * @method void setSmsSignId(string $SmsSignId) 设置未接通引用短信签名ID
 * @method string getSmsTemplateId() 获取未接通引用短信模板ID
 * @method void setSmsTemplateId(string $SmsTemplateId) 设置未接通引用短信模板ID
 * @method string getCallType() 获取拨打方式。NORMAL - 正常拨打；TIMER - 定时拨打
 * @method void setCallType(string $CallType) 设置拨打方式。NORMAL - 正常拨打；TIMER - 定时拨打
 * @method string getCallStartDate() 获取拨打开始日期。CallType=TIMER时有值，yyyy-MM-dd
 * @method void setCallStartDate(string $CallStartDate) 设置拨打开始日期。CallType=TIMER时有值，yyyy-MM-dd
 * @method string getCallEndDate() 获取拨打结束日期。CallType=PERIOD 时有值，yyyy-MM-dd
 * @method void setCallEndDate(string $CallEndDate) 设置拨打结束日期。CallType=PERIOD 时有值，yyyy-MM-dd
 */
class CreateBotTaskRequest extends AbstractModel
{
    /**
     * @var string 模块名。默认值（固定）：AiApi
     */
    public $Module;

    /**
     * @var string 操作名。默认值（固定）：CreateTask
     */
    public $Operation;

    /**
     * @var string 任务名称
     */
    public $BotName;

    /**
     * @var string 对话流ID
     */
    public $FlowId;

    /**
     * @var string 是否禁止拨打，默认Y
     */
    public $BanCall;

    /**
     * @var string 拨打线路集合
     */
    public $PhoneCollection;

    /**
     * @var CallTimeDict 产品拨打时间集合
     */
    public $CallTimeCollection;

    /**
     * @var string 禁止拨打起始时间。默认130000
     */
    public $StartTimeBan;

    /**
     * @var string 禁止拨打结束时间。默认140000
     */
    public $EndTimeBan;

    /**
     * @var string 重播方式，NON：未接通、LABEL：意向分级，可多选，用竖线分隔：NON|LABEL
     */
    public $CodeType;

    /**
     * @var string 重播值集合，A：强意向、B：中意向、C：低意向、D：无意向、E：在忙、F：未接通、G：无效号码，可多选，用竖线分隔：A|B|C|D|E|F|G
     */
    public $CodeCollection;

    /**
     * @var integer 继续拨打次数
     */
    public $CallCount;

    /**
     * @var integer 拨打间隔
     */
    public $CallInterval;

    /**
     * @var string 未接通引用短信签名ID
     */
    public $SmsSignId;

    /**
     * @var string 未接通引用短信模板ID
     */
    public $SmsTemplateId;

    /**
     * @var string 拨打方式。NORMAL - 正常拨打；TIMER - 定时拨打
     */
    public $CallType;

    /**
     * @var string 拨打开始日期。CallType=TIMER时有值，yyyy-MM-dd
     */
    public $CallStartDate;

    /**
     * @var string 拨打结束日期。CallType=PERIOD 时有值，yyyy-MM-dd
     */
    public $CallEndDate;

    /**
     * @param string $Module 模块名。默认值（固定）：AiApi
     * @param string $Operation 操作名。默认值（固定）：CreateTask
     * @param string $BotName 任务名称
     * @param string $FlowId 对话流ID
     * @param string $BanCall 是否禁止拨打，默认Y
     * @param string $PhoneCollection 拨打线路集合
     * @param CallTimeDict $CallTimeCollection 产品拨打时间集合
     * @param string $StartTimeBan 禁止拨打起始时间。默认130000
     * @param string $EndTimeBan 禁止拨打结束时间。默认140000
     * @param string $CodeType 重播方式，NON：未接通、LABEL：意向分级，可多选，用竖线分隔：NON|LABEL
     * @param string $CodeCollection 重播值集合，A：强意向、B：中意向、C：低意向、D：无意向、E：在忙、F：未接通、G：无效号码，可多选，用竖线分隔：A|B|C|D|E|F|G
     * @param integer $CallCount 继续拨打次数
     * @param integer $CallInterval 拨打间隔
     * @param string $SmsSignId 未接通引用短信签名ID
     * @param string $SmsTemplateId 未接通引用短信模板ID
     * @param string $CallType 拨打方式。NORMAL - 正常拨打；TIMER - 定时拨打
     * @param string $CallStartDate 拨打开始日期。CallType=TIMER时有值，yyyy-MM-dd
     * @param string $CallEndDate 拨打结束日期。CallType=PERIOD 时有值，yyyy-MM-dd
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("BotName",$param) and $param["BotName"] !== null) {
            $this->BotName = $param["BotName"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("BanCall",$param) and $param["BanCall"] !== null) {
            $this->BanCall = $param["BanCall"];
        }

        if (array_key_exists("PhoneCollection",$param) and $param["PhoneCollection"] !== null) {
            $this->PhoneCollection = $param["PhoneCollection"];
        }

        if (array_key_exists("CallTimeCollection",$param) and $param["CallTimeCollection"] !== null) {
            $this->CallTimeCollection = new CallTimeDict();
            $this->CallTimeCollection->deserialize($param["CallTimeCollection"]);
        }

        if (array_key_exists("StartTimeBan",$param) and $param["StartTimeBan"] !== null) {
            $this->StartTimeBan = $param["StartTimeBan"];
        }

        if (array_key_exists("EndTimeBan",$param) and $param["EndTimeBan"] !== null) {
            $this->EndTimeBan = $param["EndTimeBan"];
        }

        if (array_key_exists("CodeType",$param) and $param["CodeType"] !== null) {
            $this->CodeType = $param["CodeType"];
        }

        if (array_key_exists("CodeCollection",$param) and $param["CodeCollection"] !== null) {
            $this->CodeCollection = $param["CodeCollection"];
        }

        if (array_key_exists("CallCount",$param) and $param["CallCount"] !== null) {
            $this->CallCount = $param["CallCount"];
        }

        if (array_key_exists("CallInterval",$param) and $param["CallInterval"] !== null) {
            $this->CallInterval = $param["CallInterval"];
        }

        if (array_key_exists("SmsSignId",$param) and $param["SmsSignId"] !== null) {
            $this->SmsSignId = $param["SmsSignId"];
        }

        if (array_key_exists("SmsTemplateId",$param) and $param["SmsTemplateId"] !== null) {
            $this->SmsTemplateId = $param["SmsTemplateId"];
        }

        if (array_key_exists("CallType",$param) and $param["CallType"] !== null) {
            $this->CallType = $param["CallType"];
        }

        if (array_key_exists("CallStartDate",$param) and $param["CallStartDate"] !== null) {
            $this->CallStartDate = $param["CallStartDate"];
        }

        if (array_key_exists("CallEndDate",$param) and $param["CallEndDate"] !== null) {
            $this->CallEndDate = $param["CallEndDate"];
        }
    }
}
