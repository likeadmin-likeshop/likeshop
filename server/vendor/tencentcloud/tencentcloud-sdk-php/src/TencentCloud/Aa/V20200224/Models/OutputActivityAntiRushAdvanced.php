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
namespace TencentCloud\Aa\V20200224\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 活动防刷高级版业务出参。
 *
 * @method integer getCode() 获取返回码。0表示成功，非0标识失败错误码。
 * @method void setCode(integer $Code) 设置返回码。0表示成功，非0标识失败错误码。
 * @method string getMessage() 获取UTF-8编码，出错消息。
 * @method void setMessage(string $Message) 设置UTF-8编码，出错消息。
 * @method OutputActivityAntiRushAdvancedValue getValue() 获取服务调用结果。
 * @method void setValue(OutputActivityAntiRushAdvancedValue $Value) 设置服务调用结果。
 */
class OutputActivityAntiRushAdvanced extends AbstractModel
{
    /**
     * @var integer 返回码。0表示成功，非0标识失败错误码。
     */
    public $Code;

    /**
     * @var string UTF-8编码，出错消息。
     */
    public $Message;

    /**
     * @var OutputActivityAntiRushAdvancedValue 服务调用结果。
     */
    public $Value;

    /**
     * @param integer $Code 返回码。0表示成功，非0标识失败错误码。
     * @param string $Message UTF-8编码，出错消息。
     * @param OutputActivityAntiRushAdvancedValue $Value 服务调用结果。
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = new OutputActivityAntiRushAdvancedValue();
            $this->Value->deserialize($param["Value"]);
        }
    }
}
