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
 * 容器实例中容器结构体
 *
 * @method string getCommand() 获取容器启动命令
 * @method void setCommand(string $Command) 设置容器启动命令
 * @method array getArgs() 获取容器启动参数
 * @method void setArgs(array $Args) 设置容器启动参数
 * @method array getEnvironmentVars() 获取容器环境变量
 * @method void setEnvironmentVars(array $EnvironmentVars) 设置容器环境变量
 * @method string getImage() 获取镜像
 * @method void setImage(string $Image) 设置镜像
 * @method string getName() 获取容器名，由小写字母、数字和 - 组成，由小写字母开头，小写字母或数字结尾，且长度不超过 63个字符
 * @method void setName(string $Name) 设置容器名，由小写字母、数字和 - 组成，由小写字母开头，小写字母或数字结尾，且长度不超过 63个字符
 * @method float getCpu() 获取CPU，单位：核
 * @method void setCpu(float $Cpu) 设置CPU，单位：核
 * @method float getMemory() 获取内存，单位：Gi
 * @method void setMemory(float $Memory) 设置内存，单位：Gi
 * @method integer getRestartCount() 获取重启次数
 * @method void setRestartCount(integer $RestartCount) 设置重启次数
 * @method ContainerState getCurrentState() 获取当前状态
 * @method void setCurrentState(ContainerState $CurrentState) 设置当前状态
 * @method ContainerState getPreviousState() 获取上一次状态
 * @method void setPreviousState(ContainerState $PreviousState) 设置上一次状态
 * @method string getWorkingDir() 获取容器工作目录
 * @method void setWorkingDir(string $WorkingDir) 设置容器工作目录
 * @method string getContainerId() 获取容器ID
 * @method void setContainerId(string $ContainerId) 设置容器ID
 */
class Container extends AbstractModel
{
    /**
     * @var string 容器启动命令
     */
    public $Command;

    /**
     * @var array 容器启动参数
     */
    public $Args;

    /**
     * @var array 容器环境变量
     */
    public $EnvironmentVars;

    /**
     * @var string 镜像
     */
    public $Image;

    /**
     * @var string 容器名，由小写字母、数字和 - 组成，由小写字母开头，小写字母或数字结尾，且长度不超过 63个字符
     */
    public $Name;

    /**
     * @var float CPU，单位：核
     */
    public $Cpu;

    /**
     * @var float 内存，单位：Gi
     */
    public $Memory;

    /**
     * @var integer 重启次数
     */
    public $RestartCount;

    /**
     * @var ContainerState 当前状态
     */
    public $CurrentState;

    /**
     * @var ContainerState 上一次状态
     */
    public $PreviousState;

    /**
     * @var string 容器工作目录
     */
    public $WorkingDir;

    /**
     * @var string 容器ID
     */
    public $ContainerId;

    /**
     * @param string $Command 容器启动命令
     * @param array $Args 容器启动参数
     * @param array $EnvironmentVars 容器环境变量
     * @param string $Image 镜像
     * @param string $Name 容器名，由小写字母、数字和 - 组成，由小写字母开头，小写字母或数字结尾，且长度不超过 63个字符
     * @param float $Cpu CPU，单位：核
     * @param float $Memory 内存，单位：Gi
     * @param integer $RestartCount 重启次数
     * @param ContainerState $CurrentState 当前状态
     * @param ContainerState $PreviousState 上一次状态
     * @param string $WorkingDir 容器工作目录
     * @param string $ContainerId 容器ID
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
        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("Args",$param) and $param["Args"] !== null) {
            $this->Args = $param["Args"];
        }

        if (array_key_exists("EnvironmentVars",$param) and $param["EnvironmentVars"] !== null) {
            $this->EnvironmentVars = [];
            foreach ($param["EnvironmentVars"] as $key => $value){
                $obj = new EnvironmentVar();
                $obj->deserialize($value);
                array_push($this->EnvironmentVars, $obj);
            }
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("RestartCount",$param) and $param["RestartCount"] !== null) {
            $this->RestartCount = $param["RestartCount"];
        }

        if (array_key_exists("CurrentState",$param) and $param["CurrentState"] !== null) {
            $this->CurrentState = new ContainerState();
            $this->CurrentState->deserialize($param["CurrentState"]);
        }

        if (array_key_exists("PreviousState",$param) and $param["PreviousState"] !== null) {
            $this->PreviousState = new ContainerState();
            $this->PreviousState->deserialize($param["PreviousState"]);
        }

        if (array_key_exists("WorkingDir",$param) and $param["WorkingDir"] !== null) {
            $this->WorkingDir = $param["WorkingDir"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }
    }
}
