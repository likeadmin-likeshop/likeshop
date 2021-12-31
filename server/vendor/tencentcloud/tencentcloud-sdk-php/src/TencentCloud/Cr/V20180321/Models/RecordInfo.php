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
 * 录音文件详情
 *
 * @method string getBotId() 获取任务Id
 * @method void setBotId(string $BotId) 设置任务Id
 * @method string getBotName() 获取任务名称
 * @method void setBotName(string $BotName) 设置任务名称
 * @method string getBizDate() 获取任务日期
 * @method void setBizDate(string $BizDate) 设置任务日期
 * @method string getCalledPhone() 获取被叫号码
 * @method void setCalledPhone(string $CalledPhone) 设置被叫号码
 * @method string getCallStartTime() 获取开始通话时间
 * @method void setCallStartTime(string $CallStartTime) 设置开始通话时间
 * @method integer getDuration() 获取通话时长
 * @method void setDuration(integer $Duration) 设置通话时长
 * @method string getCosUrl() 获取录音文件地址
 * @method void setCosUrl(string $CosUrl) 设置录音文件地址
 * @method string getDialogueLog() 获取对话日志。JSON格式
 * @method void setDialogueLog(string $DialogueLog) 设置对话日志。JSON格式
 * @method string getCosFileName() 获取录音文件名
 * @method void setCosFileName(string $CosFileName) 设置录音文件名
 */
class RecordInfo extends AbstractModel
{
    /**
     * @var string 任务Id
     */
    public $BotId;

    /**
     * @var string 任务名称
     */
    public $BotName;

    /**
     * @var string 任务日期
     */
    public $BizDate;

    /**
     * @var string 被叫号码
     */
    public $CalledPhone;

    /**
     * @var string 开始通话时间
     */
    public $CallStartTime;

    /**
     * @var integer 通话时长
     */
    public $Duration;

    /**
     * @var string 录音文件地址
     */
    public $CosUrl;

    /**
     * @var string 对话日志。JSON格式
     */
    public $DialogueLog;

    /**
     * @var string 录音文件名
     */
    public $CosFileName;

    /**
     * @param string $BotId 任务Id
     * @param string $BotName 任务名称
     * @param string $BizDate 任务日期
     * @param string $CalledPhone 被叫号码
     * @param string $CallStartTime 开始通话时间
     * @param integer $Duration 通话时长
     * @param string $CosUrl 录音文件地址
     * @param string $DialogueLog 对话日志。JSON格式
     * @param string $CosFileName 录音文件名
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
        if (array_key_exists("BotId",$param) and $param["BotId"] !== null) {
            $this->BotId = $param["BotId"];
        }

        if (array_key_exists("BotName",$param) and $param["BotName"] !== null) {
            $this->BotName = $param["BotName"];
        }

        if (array_key_exists("BizDate",$param) and $param["BizDate"] !== null) {
            $this->BizDate = $param["BizDate"];
        }

        if (array_key_exists("CalledPhone",$param) and $param["CalledPhone"] !== null) {
            $this->CalledPhone = $param["CalledPhone"];
        }

        if (array_key_exists("CallStartTime",$param) and $param["CallStartTime"] !== null) {
            $this->CallStartTime = $param["CallStartTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("CosUrl",$param) and $param["CosUrl"] !== null) {
            $this->CosUrl = $param["CosUrl"];
        }

        if (array_key_exists("DialogueLog",$param) and $param["DialogueLog"] !== null) {
            $this->DialogueLog = $param["DialogueLog"];
        }

        if (array_key_exists("CosFileName",$param) and $param["CosFileName"] !== null) {
            $this->CosFileName = $param["CosFileName"];
        }
    }
}
