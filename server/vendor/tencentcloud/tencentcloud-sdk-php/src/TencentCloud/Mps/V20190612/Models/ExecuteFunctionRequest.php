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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExecuteFunction请求参数结构体
 *
 * @method string getFunctionName() 获取调用后端接口名称。
 * @method void setFunctionName(string $FunctionName) 设置调用后端接口名称。
 * @method string getFunctionArg() 获取接口参数，具体参数格式调用时与后端协调。
 * @method void setFunctionArg(string $FunctionArg) 设置接口参数，具体参数格式调用时与后端协调。
 */
class ExecuteFunctionRequest extends AbstractModel
{
    /**
     * @var string 调用后端接口名称。
     */
    public $FunctionName;

    /**
     * @var string 接口参数，具体参数格式调用时与后端协调。
     */
    public $FunctionArg;

    /**
     * @param string $FunctionName 调用后端接口名称。
     * @param string $FunctionArg 接口参数，具体参数格式调用时与后端协调。
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
        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("FunctionArg",$param) and $param["FunctionArg"] !== null) {
            $this->FunctionArg = $param["FunctionArg"];
        }
    }
}
