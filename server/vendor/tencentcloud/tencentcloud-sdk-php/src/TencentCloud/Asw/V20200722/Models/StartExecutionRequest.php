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
namespace TencentCloud\Asw\V20200722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartExecution请求参数结构体
 *
 * @method string getStateMachineResourceName() 获取状态机资源名
 * @method void setStateMachineResourceName(string $StateMachineResourceName) 设置状态机资源名
 * @method string getInput() 获取输入参数
 * @method void setInput(string $Input) 设置输入参数
 * @method string getName() 获取本次执行名。如果不填，系统会自动生成。如果填，应保证状态机下唯一
 * @method void setName(string $Name) 设置本次执行名。如果不填，系统会自动生成。如果填，应保证状态机下唯一
 */
class StartExecutionRequest extends AbstractModel
{
    /**
     * @var string 状态机资源名
     */
    public $StateMachineResourceName;

    /**
     * @var string 输入参数
     */
    public $Input;

    /**
     * @var string 本次执行名。如果不填，系统会自动生成。如果填，应保证状态机下唯一
     */
    public $Name;

    /**
     * @param string $StateMachineResourceName 状态机资源名
     * @param string $Input 输入参数
     * @param string $Name 本次执行名。如果不填，系统会自动生成。如果填，应保证状态机下唯一
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
        if (array_key_exists("StateMachineResourceName",$param) and $param["StateMachineResourceName"] !== null) {
            $this->StateMachineResourceName = $param["StateMachineResourceName"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
