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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 端口列表
 *
 * @method integer getId() 获取唯一ID。
 * @method void setId(integer $Id) 设置唯一ID。
 * @method string getUuid() 获取云镜客户端唯一UUID。
 * @method void setUuid(string $Uuid) 设置云镜客户端唯一UUID。
 * @method integer getPort() 获取开放端口号。
 * @method void setPort(integer $Port) 设置开放端口号。
 * @method string getMachineIp() 获取主机IP。
 * @method void setMachineIp(string $MachineIp) 设置主机IP。
 * @method string getMachineName() 获取主机名。
 * @method void setMachineName(string $MachineName) 设置主机名。
 * @method string getProcessName() 获取端口对应进程名。
 * @method void setProcessName(string $ProcessName) 设置端口对应进程名。
 * @method integer getPid() 获取端口对应进程Pid。
 * @method void setPid(integer $Pid) 设置端口对应进程Pid。
 * @method string getCreateTime() 获取记录创建时间。
 * @method void setCreateTime(string $CreateTime) 设置记录创建时间。
 * @method string getModifyTime() 获取记录更新时间。
 * @method void setModifyTime(string $ModifyTime) 设置记录更新时间。
 */
class OpenPort extends AbstractModel
{
    /**
     * @var integer 唯一ID。
     */
    public $Id;

    /**
     * @var string 云镜客户端唯一UUID。
     */
    public $Uuid;

    /**
     * @var integer 开放端口号。
     */
    public $Port;

    /**
     * @var string 主机IP。
     */
    public $MachineIp;

    /**
     * @var string 主机名。
     */
    public $MachineName;

    /**
     * @var string 端口对应进程名。
     */
    public $ProcessName;

    /**
     * @var integer 端口对应进程Pid。
     */
    public $Pid;

    /**
     * @var string 记录创建时间。
     */
    public $CreateTime;

    /**
     * @var string 记录更新时间。
     */
    public $ModifyTime;

    /**
     * @param integer $Id 唯一ID。
     * @param string $Uuid 云镜客户端唯一UUID。
     * @param integer $Port 开放端口号。
     * @param string $MachineIp 主机IP。
     * @param string $MachineName 主机名。
     * @param string $ProcessName 端口对应进程名。
     * @param integer $Pid 端口对应进程Pid。
     * @param string $CreateTime 记录创建时间。
     * @param string $ModifyTime 记录更新时间。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
