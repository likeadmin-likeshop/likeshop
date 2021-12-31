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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计算环境
 *
 * @method string getEnvType() 获取计算环境管理类型
 * @method void setEnvType(string $EnvType) 设置计算环境管理类型
 * @method EnvData getEnvData() 获取计算环境具体参数
 * @method void setEnvData(EnvData $EnvData) 设置计算环境具体参数
 * @method array getMountDataDisks() 获取数据盘挂载选项
 * @method void setMountDataDisks(array $MountDataDisks) 设置数据盘挂载选项
 * @method AgentRunningMode getAgentRunningMode() 获取agent运行模式，适用于Windows系统
 * @method void setAgentRunningMode(AgentRunningMode $AgentRunningMode) 设置agent运行模式，适用于Windows系统
 */
class AnonymousComputeEnv extends AbstractModel
{
    /**
     * @var string 计算环境管理类型
     */
    public $EnvType;

    /**
     * @var EnvData 计算环境具体参数
     */
    public $EnvData;

    /**
     * @var array 数据盘挂载选项
     */
    public $MountDataDisks;

    /**
     * @var AgentRunningMode agent运行模式，适用于Windows系统
     */
    public $AgentRunningMode;

    /**
     * @param string $EnvType 计算环境管理类型
     * @param EnvData $EnvData 计算环境具体参数
     * @param array $MountDataDisks 数据盘挂载选项
     * @param AgentRunningMode $AgentRunningMode agent运行模式，适用于Windows系统
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
        if (array_key_exists("EnvType",$param) and $param["EnvType"] !== null) {
            $this->EnvType = $param["EnvType"];
        }

        if (array_key_exists("EnvData",$param) and $param["EnvData"] !== null) {
            $this->EnvData = new EnvData();
            $this->EnvData->deserialize($param["EnvData"]);
        }

        if (array_key_exists("MountDataDisks",$param) and $param["MountDataDisks"] !== null) {
            $this->MountDataDisks = [];
            foreach ($param["MountDataDisks"] as $key => $value){
                $obj = new MountDataDisk();
                $obj->deserialize($value);
                array_push($this->MountDataDisks, $obj);
            }
        }

        if (array_key_exists("AgentRunningMode",$param) and $param["AgentRunningMode"] !== null) {
            $this->AgentRunningMode = new AgentRunningMode();
            $this->AgentRunningMode->deserialize($param["AgentRunningMode"]);
        }
    }
}
