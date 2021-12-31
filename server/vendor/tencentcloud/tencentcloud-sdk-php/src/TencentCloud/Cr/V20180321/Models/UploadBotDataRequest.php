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
 * UploadBotData请求参数结构体
 *
 * @method string getModule() 获取模块名。默认值（固定）：AiApi
 * @method void setModule(string $Module) 设置模块名。默认值（固定）：AiApi
 * @method string getOperation() 获取操作名。默认值（固定）：UploadData
 * @method void setOperation(string $Operation) 设置操作名。默认值（固定）：UploadData
 * @method string getData() 获取任务数据。JSON格式
 * @method void setData(string $Data) 设置任务数据。JSON格式
 * @method string getBotId() 获取任务ID，二者必填一个
 * @method void setBotId(string $BotId) 设置任务ID，二者必填一个
 * @method string getBotName() 获取任务名称，二者必填一个
 * @method void setBotName(string $BotName) 设置任务名称，二者必填一个
 */
class UploadBotDataRequest extends AbstractModel
{
    /**
     * @var string 模块名。默认值（固定）：AiApi
     */
    public $Module;

    /**
     * @var string 操作名。默认值（固定）：UploadData
     */
    public $Operation;

    /**
     * @var string 任务数据。JSON格式
     */
    public $Data;

    /**
     * @var string 任务ID，二者必填一个
     */
    public $BotId;

    /**
     * @var string 任务名称，二者必填一个
     */
    public $BotName;

    /**
     * @param string $Module 模块名。默认值（固定）：AiApi
     * @param string $Operation 操作名。默认值（固定）：UploadData
     * @param string $Data 任务数据。JSON格式
     * @param string $BotId 任务ID，二者必填一个
     * @param string $BotName 任务名称，二者必填一个
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

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("BotId",$param) and $param["BotId"] !== null) {
            $this->BotId = $param["BotId"];
        }

        if (array_key_exists("BotName",$param) and $param["BotName"] !== null) {
            $this->BotName = $param["BotName"];
        }
    }
}
