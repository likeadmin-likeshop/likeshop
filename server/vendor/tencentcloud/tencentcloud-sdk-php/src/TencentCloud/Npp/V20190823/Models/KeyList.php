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
namespace TencentCloud\Npp\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 对应按键操作,如果没有结构体里定义按键操作用户按键以后都从 interruptPrompt 重新播放
 *
 * @method string getKey() 获取用户按键（0-9、*、#、A-D)
 * @method void setKey(string $Key) 设置用户按键（0-9、*、#、A-D)
 * @method string getOperate() 获取1: 呼通被叫 2：interruptPrompt 重播提示 3：拆线
 * @method void setOperate(string $Operate) 设置1: 呼通被叫 2：interruptPrompt 重播提示 3：拆线
 */
class KeyList extends AbstractModel
{
    /**
     * @var string 用户按键（0-9、*、#、A-D)
     */
    public $Key;

    /**
     * @var string 1: 呼通被叫 2：interruptPrompt 重播提示 3：拆线
     */
    public $Operate;

    /**
     * @param string $Key 用户按键（0-9、*、#、A-D)
     * @param string $Operate 1: 呼通被叫 2：interruptPrompt 重播提示 3：拆线
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = $param["Operate"];
        }
    }
}
