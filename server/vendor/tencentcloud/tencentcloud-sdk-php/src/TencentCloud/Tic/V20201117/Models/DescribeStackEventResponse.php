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
namespace TencentCloud\Tic\V20201117\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStackEvent返回参数结构体
 *
 * @method string getEventId() 获取事件ID
 * @method void setEventId(string $EventId) 设置事件ID
 * @method string getVersionId() 获取版本ID
 * @method void setVersionId(string $VersionId) 设置版本ID
 * @method string getStackId() 获取资源栈ID
 * @method void setStackId(string $StackId) 设置资源栈ID
 * @method string getType() 获取事件类型
 * @method void setType(string $Type) 设置事件类型
 * @method string getStatus() 获取事件状态
 * @method void setStatus(string $Status) 设置事件状态
 * @method string getEventMessage() 获取状态信息
 * @method void setEventMessage(string $EventMessage) 设置状态信息
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getConsoleLog() 获取控制台输出文本
 * @method void setConsoleLog(string $ConsoleLog) 设置控制台输出文本
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeStackEventResponse extends AbstractModel
{
    /**
     * @var string 事件ID
     */
    public $EventId;

    /**
     * @var string 版本ID
     */
    public $VersionId;

    /**
     * @var string 资源栈ID
     */
    public $StackId;

    /**
     * @var string 事件类型
     */
    public $Type;

    /**
     * @var string 事件状态
     */
    public $Status;

    /**
     * @var string 状态信息
     */
    public $EventMessage;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 控制台输出文本
     */
    public $ConsoleLog;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $EventId 事件ID
     * @param string $VersionId 版本ID
     * @param string $StackId 资源栈ID
     * @param string $Type 事件类型
     * @param string $Status 事件状态
     * @param string $EventMessage 状态信息
     * @param string $CreateTime 创建时间
     * @param string $ConsoleLog 控制台输出文本
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("StackId",$param) and $param["StackId"] !== null) {
            $this->StackId = $param["StackId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EventMessage",$param) and $param["EventMessage"] !== null) {
            $this->EventMessage = $param["EventMessage"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ConsoleLog",$param) and $param["ConsoleLog"] !== null) {
            $this->ConsoleLog = $param["ConsoleLog"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
