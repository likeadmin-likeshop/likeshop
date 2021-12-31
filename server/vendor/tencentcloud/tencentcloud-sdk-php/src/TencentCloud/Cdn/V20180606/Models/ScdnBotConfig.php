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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * bot配置类型
 *
 * @method string getSwitch() 获取on|off
 * @method void setSwitch(string $Switch) 设置on|off
 * @method array getBotCookie() 获取Bot cookie策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBotCookie(array $BotCookie) 设置Bot cookie策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBotJavaScript() 获取Bot Js策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBotJavaScript(array $BotJavaScript) 设置Bot Js策略
注意：此字段可能返回 null，表示取不到有效值。
 */
class ScdnBotConfig extends AbstractModel
{
    /**
     * @var string on|off
     */
    public $Switch;

    /**
     * @var array Bot cookie策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BotCookie;

    /**
     * @var array Bot Js策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BotJavaScript;

    /**
     * @param string $Switch on|off
     * @param array $BotCookie Bot cookie策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BotJavaScript Bot Js策略
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("BotCookie",$param) and $param["BotCookie"] !== null) {
            $this->BotCookie = [];
            foreach ($param["BotCookie"] as $key => $value){
                $obj = new BotCookie();
                $obj->deserialize($value);
                array_push($this->BotCookie, $obj);
            }
        }

        if (array_key_exists("BotJavaScript",$param) and $param["BotJavaScript"] !== null) {
            $this->BotJavaScript = [];
            foreach ($param["BotJavaScript"] as $key => $value){
                $obj = new BotJavaScript();
                $obj->deserialize($value);
                array_push($this->BotJavaScript, $obj);
            }
        }
    }
}
