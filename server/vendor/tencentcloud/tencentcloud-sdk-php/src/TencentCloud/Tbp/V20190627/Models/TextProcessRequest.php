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
 * TextProcess请求参数结构体
 *
 * @method string getBotId() 获取机器人标识，用于定义抽象机器人。
 * @method void setBotId(string $BotId) 设置机器人标识，用于定义抽象机器人。
 * @method string getBotEnv() 获取机器人版本，取值"dev"或"release"，{调试版本：dev；线上版本：release}。
 * @method void setBotEnv(string $BotEnv) 设置机器人版本，取值"dev"或"release"，{调试版本：dev；线上版本：release}。
 * @method string getTerminalId() 获取终端标识，每个终端(或线程)对应一个，区分并发多用户。
 * @method void setTerminalId(string $TerminalId) 设置终端标识，每个终端(或线程)对应一个，区分并发多用户。
 * @method string getInputText() 获取请求的文本。
 * @method void setInputText(string $InputText) 设置请求的文本。
 * @method string getSessionAttributes() 获取透传字段，透传给用户自定义的WebService服务。
 * @method void setSessionAttributes(string $SessionAttributes) 设置透传字段，透传给用户自定义的WebService服务。
 * @method string getPlatformType() 获取平台类型，{小程序：MiniProgram；小微：XiaoWei；公众号：OfficialAccount；企业微信: WXWork}。
 * @method void setPlatformType(string $PlatformType) 设置平台类型，{小程序：MiniProgram；小微：XiaoWei；公众号：OfficialAccount；企业微信: WXWork}。
 * @method string getPlatformId() 获取当PlatformType为微信公众号或企业微信时，传递对应微信公众号或企业微信的唯一标识
 * @method void setPlatformId(string $PlatformId) 设置当PlatformType为微信公众号或企业微信时，传递对应微信公众号或企业微信的唯一标识
 */
class TextProcessRequest extends AbstractModel
{
    /**
     * @var string 机器人标识，用于定义抽象机器人。
     */
    public $BotId;

    /**
     * @var string 机器人版本，取值"dev"或"release"，{调试版本：dev；线上版本：release}。
     */
    public $BotEnv;

    /**
     * @var string 终端标识，每个终端(或线程)对应一个，区分并发多用户。
     */
    public $TerminalId;

    /**
     * @var string 请求的文本。
     */
    public $InputText;

    /**
     * @var string 透传字段，透传给用户自定义的WebService服务。
     */
    public $SessionAttributes;

    /**
     * @var string 平台类型，{小程序：MiniProgram；小微：XiaoWei；公众号：OfficialAccount；企业微信: WXWork}。
     */
    public $PlatformType;

    /**
     * @var string 当PlatformType为微信公众号或企业微信时，传递对应微信公众号或企业微信的唯一标识
     */
    public $PlatformId;

    /**
     * @param string $BotId 机器人标识，用于定义抽象机器人。
     * @param string $BotEnv 机器人版本，取值"dev"或"release"，{调试版本：dev；线上版本：release}。
     * @param string $TerminalId 终端标识，每个终端(或线程)对应一个，区分并发多用户。
     * @param string $InputText 请求的文本。
     * @param string $SessionAttributes 透传字段，透传给用户自定义的WebService服务。
     * @param string $PlatformType 平台类型，{小程序：MiniProgram；小微：XiaoWei；公众号：OfficialAccount；企业微信: WXWork}。
     * @param string $PlatformId 当PlatformType为微信公众号或企业微信时，传递对应微信公众号或企业微信的唯一标识
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

        if (array_key_exists("BotEnv",$param) and $param["BotEnv"] !== null) {
            $this->BotEnv = $param["BotEnv"];
        }

        if (array_key_exists("TerminalId",$param) and $param["TerminalId"] !== null) {
            $this->TerminalId = $param["TerminalId"];
        }

        if (array_key_exists("InputText",$param) and $param["InputText"] !== null) {
            $this->InputText = $param["InputText"];
        }

        if (array_key_exists("SessionAttributes",$param) and $param["SessionAttributes"] !== null) {
            $this->SessionAttributes = $param["SessionAttributes"];
        }

        if (array_key_exists("PlatformType",$param) and $param["PlatformType"] !== null) {
            $this->PlatformType = $param["PlatformType"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }
    }
}
