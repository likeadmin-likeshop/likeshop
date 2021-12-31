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
 * Invoke请求参数结构体
 *
 * @method string getFunctionName() 获取函数名称
 * @method void setFunctionName(string $FunctionName) 设置函数名称
 * @method string getInvocationType() 获取RequestResponse(同步) 和 Event(异步)，默认为同步
 * @method void setInvocationType(string $InvocationType) 设置RequestResponse(同步) 和 Event(异步)，默认为同步
 * @method string getQualifier() 获取触发函数的版本号或别名
 * @method void setQualifier(string $Qualifier) 设置触发函数的版本号或别名
 * @method string getClientContext() 获取运行函数时的参数，以json格式传入，最大支持的参数长度是 1M
 * @method void setClientContext(string $ClientContext) 设置运行函数时的参数，以json格式传入，最大支持的参数长度是 1M
 * @method string getLogType() 获取同步调用时指定该字段，返回值会包含4K的日志，可选值为None和Tail，默认值为None。当该值为Tail时，返回参数中的Log字段会包含对应的函数执行日志
 * @method void setLogType(string $LogType) 设置同步调用时指定该字段，返回值会包含4K的日志，可选值为None和Tail，默认值为None。当该值为Tail时，返回参数中的Log字段会包含对应的函数执行日志
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getRoutingKey() 获取函数灰度流量控制调用，以json格式传入，例如{"k":"v"}，注意kv都需要是字符串类型，最大支持的参数长度是1024字节
 * @method void setRoutingKey(string $RoutingKey) 设置函数灰度流量控制调用，以json格式传入，例如{"k":"v"}，注意kv都需要是字符串类型，最大支持的参数长度是1024字节
 */
class InvokeRequest extends AbstractModel
{
    /**
     * @var string 函数名称
     */
    public $FunctionName;

    /**
     * @var string RequestResponse(同步) 和 Event(异步)，默认为同步
     */
    public $InvocationType;

    /**
     * @var string 触发函数的版本号或别名
     */
    public $Qualifier;

    /**
     * @var string 运行函数时的参数，以json格式传入，最大支持的参数长度是 1M
     */
    public $ClientContext;

    /**
     * @var string 同步调用时指定该字段，返回值会包含4K的日志，可选值为None和Tail，默认值为None。当该值为Tail时，返回参数中的Log字段会包含对应的函数执行日志
     */
    public $LogType;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 函数灰度流量控制调用，以json格式传入，例如{"k":"v"}，注意kv都需要是字符串类型，最大支持的参数长度是1024字节
     */
    public $RoutingKey;

    /**
     * @param string $FunctionName 函数名称
     * @param string $InvocationType RequestResponse(同步) 和 Event(异步)，默认为同步
     * @param string $Qualifier 触发函数的版本号或别名
     * @param string $ClientContext 运行函数时的参数，以json格式传入，最大支持的参数长度是 1M
     * @param string $LogType 同步调用时指定该字段，返回值会包含4K的日志，可选值为None和Tail，默认值为None。当该值为Tail时，返回参数中的Log字段会包含对应的函数执行日志
     * @param string $Namespace 命名空间
     * @param string $RoutingKey 函数灰度流量控制调用，以json格式传入，例如{"k":"v"}，注意kv都需要是字符串类型，最大支持的参数长度是1024字节
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

        if (array_key_exists("InvocationType",$param) and $param["InvocationType"] !== null) {
            $this->InvocationType = $param["InvocationType"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }

        if (array_key_exists("ClientContext",$param) and $param["ClientContext"] !== null) {
            $this->ClientContext = $param["ClientContext"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("RoutingKey",$param) and $param["RoutingKey"] !== null) {
            $this->RoutingKey = $param["RoutingKey"];
        }
    }
}
