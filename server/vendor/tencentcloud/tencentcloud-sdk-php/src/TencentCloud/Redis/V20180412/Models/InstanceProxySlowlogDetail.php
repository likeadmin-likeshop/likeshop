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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 代理慢查询详情
 *
 * @method integer getDuration() 获取慢查询耗时
 * @method void setDuration(integer $Duration) 设置慢查询耗时
 * @method string getClient() 获取客户端地址
 * @method void setClient(string $Client) 设置客户端地址
 * @method string getCommand() 获取命令
 * @method void setCommand(string $Command) 设置命令
 * @method string getCommandLine() 获取详细命令行信息
 * @method void setCommandLine(string $CommandLine) 设置详细命令行信息
 * @method string getExecuteTime() 获取执行时间
 * @method void setExecuteTime(string $ExecuteTime) 设置执行时间
 */
class InstanceProxySlowlogDetail extends AbstractModel
{
    /**
     * @var integer 慢查询耗时
     */
    public $Duration;

    /**
     * @var string 客户端地址
     */
    public $Client;

    /**
     * @var string 命令
     */
    public $Command;

    /**
     * @var string 详细命令行信息
     */
    public $CommandLine;

    /**
     * @var string 执行时间
     */
    public $ExecuteTime;

    /**
     * @param integer $Duration 慢查询耗时
     * @param string $Client 客户端地址
     * @param string $Command 命令
     * @param string $CommandLine 详细命令行信息
     * @param string $ExecuteTime 执行时间
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
        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Client",$param) and $param["Client"] !== null) {
            $this->Client = $param["Client"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("CommandLine",$param) and $param["CommandLine"] !== null) {
            $this->CommandLine = $param["CommandLine"];
        }

        if (array_key_exists("ExecuteTime",$param) and $param["ExecuteTime"] !== null) {
            $this->ExecuteTime = $param["ExecuteTime"];
        }
    }
}
