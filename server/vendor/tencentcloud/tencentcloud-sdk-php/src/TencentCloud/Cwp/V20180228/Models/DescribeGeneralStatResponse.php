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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGeneralStat返回参数结构体
 *
 * @method integer getMachinesAll() 获取云主机总数
 * @method void setMachinesAll(integer $MachinesAll) 设置云主机总数
 * @method integer getMachinesUninstalled() 获取云主机没有安装主机安全客户端的总数
 * @method void setMachinesUninstalled(integer $MachinesUninstalled) 设置云主机没有安装主机安全客户端的总数
 * @method integer getAgentsAll() 获取主机安全客户端总数的总数
 * @method void setAgentsAll(integer $AgentsAll) 设置主机安全客户端总数的总数
 * @method integer getAgentsOnline() 获取主机安全客户端在线的总数
 * @method void setAgentsOnline(integer $AgentsOnline) 设置主机安全客户端在线的总数
 * @method integer getAgentsOffline() 获取主机安全客户端离线的总数
 * @method void setAgentsOffline(integer $AgentsOffline) 设置主机安全客户端离线的总数
 * @method integer getAgentsPro() 获取主机安全客户端专业版的总数
 * @method void setAgentsPro(integer $AgentsPro) 设置主机安全客户端专业版的总数
 * @method integer getAgentsBasic() 获取主机安全客户端基础版的总数
 * @method void setAgentsBasic(integer $AgentsBasic) 设置主机安全客户端基础版的总数
 * @method integer getAgentsProExpireWithInSevenDays() 获取7天内到期的预付费专业版总数
 * @method void setAgentsProExpireWithInSevenDays(integer $AgentsProExpireWithInSevenDays) 设置7天内到期的预付费专业版总数
 * @method integer getRiskMachine() 获取风险主机总数
 * @method void setRiskMachine(integer $RiskMachine) 设置风险主机总数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeGeneralStatResponse extends AbstractModel
{
    /**
     * @var integer 云主机总数
     */
    public $MachinesAll;

    /**
     * @var integer 云主机没有安装主机安全客户端的总数
     */
    public $MachinesUninstalled;

    /**
     * @var integer 主机安全客户端总数的总数
     */
    public $AgentsAll;

    /**
     * @var integer 主机安全客户端在线的总数
     */
    public $AgentsOnline;

    /**
     * @var integer 主机安全客户端离线的总数
     */
    public $AgentsOffline;

    /**
     * @var integer 主机安全客户端专业版的总数
     */
    public $AgentsPro;

    /**
     * @var integer 主机安全客户端基础版的总数
     */
    public $AgentsBasic;

    /**
     * @var integer 7天内到期的预付费专业版总数
     */
    public $AgentsProExpireWithInSevenDays;

    /**
     * @var integer 风险主机总数
     */
    public $RiskMachine;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $MachinesAll 云主机总数
     * @param integer $MachinesUninstalled 云主机没有安装主机安全客户端的总数
     * @param integer $AgentsAll 主机安全客户端总数的总数
     * @param integer $AgentsOnline 主机安全客户端在线的总数
     * @param integer $AgentsOffline 主机安全客户端离线的总数
     * @param integer $AgentsPro 主机安全客户端专业版的总数
     * @param integer $AgentsBasic 主机安全客户端基础版的总数
     * @param integer $AgentsProExpireWithInSevenDays 7天内到期的预付费专业版总数
     * @param integer $RiskMachine 风险主机总数
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
        if (array_key_exists("MachinesAll",$param) and $param["MachinesAll"] !== null) {
            $this->MachinesAll = $param["MachinesAll"];
        }

        if (array_key_exists("MachinesUninstalled",$param) and $param["MachinesUninstalled"] !== null) {
            $this->MachinesUninstalled = $param["MachinesUninstalled"];
        }

        if (array_key_exists("AgentsAll",$param) and $param["AgentsAll"] !== null) {
            $this->AgentsAll = $param["AgentsAll"];
        }

        if (array_key_exists("AgentsOnline",$param) and $param["AgentsOnline"] !== null) {
            $this->AgentsOnline = $param["AgentsOnline"];
        }

        if (array_key_exists("AgentsOffline",$param) and $param["AgentsOffline"] !== null) {
            $this->AgentsOffline = $param["AgentsOffline"];
        }

        if (array_key_exists("AgentsPro",$param) and $param["AgentsPro"] !== null) {
            $this->AgentsPro = $param["AgentsPro"];
        }

        if (array_key_exists("AgentsBasic",$param) and $param["AgentsBasic"] !== null) {
            $this->AgentsBasic = $param["AgentsBasic"];
        }

        if (array_key_exists("AgentsProExpireWithInSevenDays",$param) and $param["AgentsProExpireWithInSevenDays"] !== null) {
            $this->AgentsProExpireWithInSevenDays = $param["AgentsProExpireWithInSevenDays"];
        }

        if (array_key_exists("RiskMachine",$param) and $param["RiskMachine"] !== null) {
            $this->RiskMachine = $param["RiskMachine"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
