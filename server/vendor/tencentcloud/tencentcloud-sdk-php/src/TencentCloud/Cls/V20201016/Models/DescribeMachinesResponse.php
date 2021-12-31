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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMachines返回参数结构体
 *
 * @method array getMachines() 获取机器状态信息组
 * @method void setMachines(array $Machines) 设置机器状态信息组
 * @method integer getAutoUpdate() 获取机器组是否开启自动升级功能
 * @method void setAutoUpdate(integer $AutoUpdate) 设置机器组是否开启自动升级功能
 * @method string getUpdateStartTime() 获取机器组自动升级功能预设开始时间
 * @method void setUpdateStartTime(string $UpdateStartTime) 设置机器组自动升级功能预设开始时间
 * @method string getUpdateEndTime() 获取机器组自动升级功能预设结束时间
 * @method void setUpdateEndTime(string $UpdateEndTime) 设置机器组自动升级功能预设结束时间
 * @method string getLatestAgentVersion() 获取当前用户可用最新的Loglistener版本
 * @method void setLatestAgentVersion(string $LatestAgentVersion) 设置当前用户可用最新的Loglistener版本
 * @method boolean getServiceLogging() 获取是否开启服务日志
 * @method void setServiceLogging(boolean $ServiceLogging) 设置是否开启服务日志
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMachinesResponse extends AbstractModel
{
    /**
     * @var array 机器状态信息组
     */
    public $Machines;

    /**
     * @var integer 机器组是否开启自动升级功能
     */
    public $AutoUpdate;

    /**
     * @var string 机器组自动升级功能预设开始时间
     */
    public $UpdateStartTime;

    /**
     * @var string 机器组自动升级功能预设结束时间
     */
    public $UpdateEndTime;

    /**
     * @var string 当前用户可用最新的Loglistener版本
     */
    public $LatestAgentVersion;

    /**
     * @var boolean 是否开启服务日志
     */
    public $ServiceLogging;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Machines 机器状态信息组
     * @param integer $AutoUpdate 机器组是否开启自动升级功能
     * @param string $UpdateStartTime 机器组自动升级功能预设开始时间
     * @param string $UpdateEndTime 机器组自动升级功能预设结束时间
     * @param string $LatestAgentVersion 当前用户可用最新的Loglistener版本
     * @param boolean $ServiceLogging 是否开启服务日志
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
        if (array_key_exists("Machines",$param) and $param["Machines"] !== null) {
            $this->Machines = [];
            foreach ($param["Machines"] as $key => $value){
                $obj = new MachineInfo();
                $obj->deserialize($value);
                array_push($this->Machines, $obj);
            }
        }

        if (array_key_exists("AutoUpdate",$param) and $param["AutoUpdate"] !== null) {
            $this->AutoUpdate = $param["AutoUpdate"];
        }

        if (array_key_exists("UpdateStartTime",$param) and $param["UpdateStartTime"] !== null) {
            $this->UpdateStartTime = $param["UpdateStartTime"];
        }

        if (array_key_exists("UpdateEndTime",$param) and $param["UpdateEndTime"] !== null) {
            $this->UpdateEndTime = $param["UpdateEndTime"];
        }

        if (array_key_exists("LatestAgentVersion",$param) and $param["LatestAgentVersion"] !== null) {
            $this->LatestAgentVersion = $param["LatestAgentVersion"];
        }

        if (array_key_exists("ServiceLogging",$param) and $param["ServiceLogging"] !== null) {
            $this->ServiceLogging = $param["ServiceLogging"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
