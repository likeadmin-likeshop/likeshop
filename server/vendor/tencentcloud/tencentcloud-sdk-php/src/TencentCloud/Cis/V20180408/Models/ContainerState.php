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
namespace TencentCloud\Cis\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器状态
 *
 * @method string getStartTime() 获取容器运行开始时间
 * @method void setStartTime(string $StartTime) 设置容器运行开始时间
 * @method string getState() 获取容器状态
 * @method void setState(string $State) 设置容器状态
 * @method string getReason() 获取状态详情
 * @method void setReason(string $Reason) 设置状态详情
 * @method string getFinishTime() 获取容器运行结束时间
 * @method void setFinishTime(string $FinishTime) 设置容器运行结束时间
 * @method integer getExitCode() 获取容器运行退出码
 * @method void setExitCode(integer $ExitCode) 设置容器运行退出码
 */
class ContainerState extends AbstractModel
{
    /**
     * @var string 容器运行开始时间
     */
    public $StartTime;

    /**
     * @var string 容器状态
     */
    public $State;

    /**
     * @var string 状态详情
     */
    public $Reason;

    /**
     * @var string 容器运行结束时间
     */
    public $FinishTime;

    /**
     * @var integer 容器运行退出码
     */
    public $ExitCode;

    /**
     * @param string $StartTime 容器运行开始时间
     * @param string $State 容器状态
     * @param string $Reason 状态详情
     * @param string $FinishTime 容器运行结束时间
     * @param integer $ExitCode 容器运行退出码
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("ExitCode",$param) and $param["ExitCode"] !== null) {
            $this->ExitCode = $param["ExitCode"];
        }
    }
}
