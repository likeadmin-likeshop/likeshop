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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自动化助手客户端信息
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method string getVersion() 获取Agent 版本号。
 * @method void setVersion(string $Version) 设置Agent 版本号。
 * @method string getLastHeartbeatTime() 获取上次心跳时间
 * @method void setLastHeartbeatTime(string $LastHeartbeatTime) 设置上次心跳时间
 * @method string getAgentStatus() 获取Agent状态，取值范围：
<li> Online：在线
<li> Offline：离线
 * @method void setAgentStatus(string $AgentStatus) 设置Agent状态，取值范围：
<li> Online：在线
<li> Offline：离线
 * @method string getEnvironment() 获取Agent运行环境
 * @method void setEnvironment(string $Environment) 设置Agent运行环境
 */
class AutomationAgentInfo extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var string Agent 版本号。
     */
    public $Version;

    /**
     * @var string 上次心跳时间
     */
    public $LastHeartbeatTime;

    /**
     * @var string Agent状态，取值范围：
<li> Online：在线
<li> Offline：离线
     */
    public $AgentStatus;

    /**
     * @var string Agent运行环境
     */
    public $Environment;

    /**
     * @param string $InstanceId 实例ID。
     * @param string $Version Agent 版本号。
     * @param string $LastHeartbeatTime 上次心跳时间
     * @param string $AgentStatus Agent状态，取值范围：
<li> Online：在线
<li> Offline：离线
     * @param string $Environment Agent运行环境
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("LastHeartbeatTime",$param) and $param["LastHeartbeatTime"] !== null) {
            $this->LastHeartbeatTime = $param["LastHeartbeatTime"];
        }

        if (array_key_exists("AgentStatus",$param) and $param["AgentStatus"] !== null) {
            $this->AgentStatus = $param["AgentStatus"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
