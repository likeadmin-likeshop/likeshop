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
 * QueryRecordList请求参数结构体
 *
 * @method string getModule() 获取模块名。AiApi
 * @method void setModule(string $Module) 设置模块名。AiApi
 * @method string getOperation() 获取操作名。QueryRecordList
 * @method void setOperation(string $Operation) 设置操作名。QueryRecordList
 * @method integer getOffset() 获取偏移值
 * @method void setOffset(integer $Offset) 设置偏移值
 * @method integer getLimit() 获取偏移位移，最大20
 * @method void setLimit(integer $Limit) 设置偏移位移，最大20
 * @method string getBotId() 获取任务ID，二者必填一个
 * @method void setBotId(string $BotId) 设置任务ID，二者必填一个
 * @method string getBotName() 获取任务名称，二者必填一个
 * @method void setBotName(string $BotName) 设置任务名称，二者必填一个
 * @method string getCalledPhone() 获取被叫号码
 * @method void setCalledPhone(string $CalledPhone) 设置被叫号码
 * @method string getStartBizDate() 获取开始日期
 * @method void setStartBizDate(string $StartBizDate) 设置开始日期
 * @method string getEndBizDate() 获取结束日期
 * @method void setEndBizDate(string $EndBizDate) 设置结束日期
 */
class QueryRecordListRequest extends AbstractModel
{
    /**
     * @var string 模块名。AiApi
     */
    public $Module;

    /**
     * @var string 操作名。QueryRecordList
     */
    public $Operation;

    /**
     * @var integer 偏移值
     */
    public $Offset;

    /**
     * @var integer 偏移位移，最大20
     */
    public $Limit;

    /**
     * @var string 任务ID，二者必填一个
     */
    public $BotId;

    /**
     * @var string 任务名称，二者必填一个
     */
    public $BotName;

    /**
     * @var string 被叫号码
     */
    public $CalledPhone;

    /**
     * @var string 开始日期
     */
    public $StartBizDate;

    /**
     * @var string 结束日期
     */
    public $EndBizDate;

    /**
     * @param string $Module 模块名。AiApi
     * @param string $Operation 操作名。QueryRecordList
     * @param integer $Offset 偏移值
     * @param integer $Limit 偏移位移，最大20
     * @param string $BotId 任务ID，二者必填一个
     * @param string $BotName 任务名称，二者必填一个
     * @param string $CalledPhone 被叫号码
     * @param string $StartBizDate 开始日期
     * @param string $EndBizDate 结束日期
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("BotId",$param) and $param["BotId"] !== null) {
            $this->BotId = $param["BotId"];
        }

        if (array_key_exists("BotName",$param) and $param["BotName"] !== null) {
            $this->BotName = $param["BotName"];
        }

        if (array_key_exists("CalledPhone",$param) and $param["CalledPhone"] !== null) {
            $this->CalledPhone = $param["CalledPhone"];
        }

        if (array_key_exists("StartBizDate",$param) and $param["StartBizDate"] !== null) {
            $this->StartBizDate = $param["StartBizDate"];
        }

        if (array_key_exists("EndBizDate",$param) and $param["EndBizDate"] !== null) {
            $this->EndBizDate = $param["EndBizDate"];
        }
    }
}
