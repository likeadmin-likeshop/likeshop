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
 * 结构体，主叫呼叫预处理操作，根据不同操作确认是否呼通被叫。如需使用，本结构体需要与 keyList 结构体配合使用，此时这两个参数都为必填项
 *
 * @method string getReadPrompt() 获取呼叫主叫以后，给主叫用户的语音提示，播放该提示时用户所有按键无效
 * @method void setReadPrompt(string $ReadPrompt) 设置呼叫主叫以后，给主叫用户的语音提示，播放该提示时用户所有按键无效
 * @method string getInterruptPrompt() 获取可中断提示，播放该提示时，用户可以按键
 * @method void setInterruptPrompt(string $InterruptPrompt) 设置可中断提示，播放该提示时，用户可以按键
 * @method array getKeyList() 获取对应按键操作,如果没有结构体里定义按键操作用户按键以后都从 interruptPrompt 重新播放
 * @method void setKeyList(array $KeyList) 设置对应按键操作,如果没有结构体里定义按键操作用户按键以后都从 interruptPrompt 重新播放
 * @method string getRepeatTimes() 获取最多重复播放次数，超过该次数拆线
 * @method void setRepeatTimes(string $RepeatTimes) 设置最多重复播放次数，超过该次数拆线
 * @method string getKeyPressUrl() 获取用户按键回调通知地址，如果为空不回调
 * @method void setKeyPressUrl(string $KeyPressUrl) 设置用户按键回调通知地址，如果为空不回调
 * @method string getPromptGender() 获取提示音男声女声：1女声，2男声。默认女声
 * @method void setPromptGender(string $PromptGender) 设置提示音男声女声：1女声，2男声。默认女声
 */
class RreCallerHandle extends AbstractModel
{
    /**
     * @var string 呼叫主叫以后，给主叫用户的语音提示，播放该提示时用户所有按键无效
     */
    public $ReadPrompt;

    /**
     * @var string 可中断提示，播放该提示时，用户可以按键
     */
    public $InterruptPrompt;

    /**
     * @var array 对应按键操作,如果没有结构体里定义按键操作用户按键以后都从 interruptPrompt 重新播放
     */
    public $KeyList;

    /**
     * @var string 最多重复播放次数，超过该次数拆线
     */
    public $RepeatTimes;

    /**
     * @var string 用户按键回调通知地址，如果为空不回调
     */
    public $KeyPressUrl;

    /**
     * @var string 提示音男声女声：1女声，2男声。默认女声
     */
    public $PromptGender;

    /**
     * @param string $ReadPrompt 呼叫主叫以后，给主叫用户的语音提示，播放该提示时用户所有按键无效
     * @param string $InterruptPrompt 可中断提示，播放该提示时，用户可以按键
     * @param array $KeyList 对应按键操作,如果没有结构体里定义按键操作用户按键以后都从 interruptPrompt 重新播放
     * @param string $RepeatTimes 最多重复播放次数，超过该次数拆线
     * @param string $KeyPressUrl 用户按键回调通知地址，如果为空不回调
     * @param string $PromptGender 提示音男声女声：1女声，2男声。默认女声
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
        if (array_key_exists("ReadPrompt",$param) and $param["ReadPrompt"] !== null) {
            $this->ReadPrompt = $param["ReadPrompt"];
        }

        if (array_key_exists("InterruptPrompt",$param) and $param["InterruptPrompt"] !== null) {
            $this->InterruptPrompt = $param["InterruptPrompt"];
        }

        if (array_key_exists("KeyList",$param) and $param["KeyList"] !== null) {
            $this->KeyList = [];
            foreach ($param["KeyList"] as $key => $value){
                $obj = new KeyList();
                $obj->deserialize($value);
                array_push($this->KeyList, $obj);
            }
        }

        if (array_key_exists("RepeatTimes",$param) and $param["RepeatTimes"] !== null) {
            $this->RepeatTimes = $param["RepeatTimes"];
        }

        if (array_key_exists("KeyPressUrl",$param) and $param["KeyPressUrl"] !== null) {
            $this->KeyPressUrl = $param["KeyPressUrl"];
        }

        if (array_key_exists("PromptGender",$param) and $param["PromptGender"] !== null) {
            $this->PromptGender = $param["PromptGender"];
        }
    }
}
