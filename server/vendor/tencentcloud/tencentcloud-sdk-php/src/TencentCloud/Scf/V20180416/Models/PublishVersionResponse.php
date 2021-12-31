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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PublishVersion返回参数结构体
 *
 * @method string getFunctionVersion() 获取函数的版本
 * @method void setFunctionVersion(string $FunctionVersion) 设置函数的版本
 * @method integer getCodeSize() 获取代码大小
 * @method void setCodeSize(integer $CodeSize) 设置代码大小
 * @method integer getMemorySize() 获取最大可用内存
 * @method void setMemorySize(integer $MemorySize) 设置最大可用内存
 * @method string getDescription() 获取函数的描述
 * @method void setDescription(string $Description) 设置函数的描述
 * @method string getHandler() 获取函数的入口
 * @method void setHandler(string $Handler) 设置函数的入口
 * @method integer getTimeout() 获取函数的超时时间
 * @method void setTimeout(integer $Timeout) 设置函数的超时时间
 * @method string getRuntime() 获取函数的运行环境
 * @method void setRuntime(string $Runtime) 设置函数的运行环境
 * @method string getNamespace() 获取函数的命名空间
 * @method void setNamespace(string $Namespace) 设置函数的命名空间
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class PublishVersionResponse extends AbstractModel
{
    /**
     * @var string 函数的版本
     */
    public $FunctionVersion;

    /**
     * @var integer 代码大小
     */
    public $CodeSize;

    /**
     * @var integer 最大可用内存
     */
    public $MemorySize;

    /**
     * @var string 函数的描述
     */
    public $Description;

    /**
     * @var string 函数的入口
     */
    public $Handler;

    /**
     * @var integer 函数的超时时间
     */
    public $Timeout;

    /**
     * @var string 函数的运行环境
     */
    public $Runtime;

    /**
     * @var string 函数的命名空间
     */
    public $Namespace;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $FunctionVersion 函数的版本
     * @param integer $CodeSize 代码大小
     * @param integer $MemorySize 最大可用内存
     * @param string $Description 函数的描述
     * @param string $Handler 函数的入口
     * @param integer $Timeout 函数的超时时间
     * @param string $Runtime 函数的运行环境
     * @param string $Namespace 函数的命名空间
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("FunctionVersion",$param) and $param["FunctionVersion"] !== null) {
            $this->FunctionVersion = $param["FunctionVersion"];
        }

        if (array_key_exists("CodeSize",$param) and $param["CodeSize"] !== null) {
            $this->CodeSize = $param["CodeSize"];
        }

        if (array_key_exists("MemorySize",$param) and $param["MemorySize"] !== null) {
            $this->MemorySize = $param["MemorySize"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Handler",$param) and $param["Handler"] !== null) {
            $this->Handler = $param["Handler"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
