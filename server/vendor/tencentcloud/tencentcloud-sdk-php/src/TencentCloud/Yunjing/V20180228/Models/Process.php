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
 * 进程信息数据。
 *
 * @method integer getId() 获取唯一ID。
 * @method void setId(integer $Id) 设置唯一ID。
 * @method string getUuid() 获取云镜客户端唯一UUID。
 * @method void setUuid(string $Uuid) 设置云镜客户端唯一UUID。
 * @method string getMachineIp() 获取主机内网IP。
 * @method void setMachineIp(string $MachineIp) 设置主机内网IP。
 * @method string getMachineName() 获取主机名。
 * @method void setMachineName(string $MachineName) 设置主机名。
 * @method integer getPid() 获取进程Pid。
 * @method void setPid(integer $Pid) 设置进程Pid。
 * @method integer getPpid() 获取进程Ppid。
 * @method void setPpid(integer $Ppid) 设置进程Ppid。
 * @method string getProcessName() 获取进程名。
 * @method void setProcessName(string $ProcessName) 设置进程名。
 * @method string getUsername() 获取进程用户名。
 * @method void setUsername(string $Username) 设置进程用户名。
 * @method string getPlatform() 获取所属平台。
<li>WIN32：windows32位</li>
<li>WIN64：windows64位</li>
<li>LINUX32：Linux32位</li>
<li>LINUX64：Linux64位</li>
 * @method void setPlatform(string $Platform) 设置所属平台。
<li>WIN32：windows32位</li>
<li>WIN64：windows64位</li>
<li>LINUX32：Linux32位</li>
<li>LINUX64：Linux64位</li>
 * @method string getFullPath() 获取进程路径。
 * @method void setFullPath(string $FullPath) 设置进程路径。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 */
class Process extends AbstractModel
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
     * @var string 主机内网IP。
     */
    public $MachineIp;

    /**
     * @var string 主机名。
     */
    public $MachineName;

    /**
     * @var integer 进程Pid。
     */
    public $Pid;

    /**
     * @var integer 进程Ppid。
     */
    public $Ppid;

    /**
     * @var string 进程名。
     */
    public $ProcessName;

    /**
     * @var string 进程用户名。
     */
    public $Username;

    /**
     * @var string 所属平台。
<li>WIN32：windows32位</li>
<li>WIN64：windows64位</li>
<li>LINUX32：Linux32位</li>
<li>LINUX64：Linux64位</li>
     */
    public $Platform;

    /**
     * @var string 进程路径。
     */
    public $FullPath;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @param integer $Id 唯一ID。
     * @param string $Uuid 云镜客户端唯一UUID。
     * @param string $MachineIp 主机内网IP。
     * @param string $MachineName 主机名。
     * @param integer $Pid 进程Pid。
     * @param integer $Ppid 进程Ppid。
     * @param string $ProcessName 进程名。
     * @param string $Username 进程用户名。
     * @param string $Platform 所属平台。
<li>WIN32：windows32位</li>
<li>WIN64：windows64位</li>
<li>LINUX32：Linux32位</li>
<li>LINUX64：Linux64位</li>
     * @param string $FullPath 进程路径。
     * @param string $CreateTime 创建时间。
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

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("Ppid",$param) and $param["Ppid"] !== null) {
            $this->Ppid = $param["Ppid"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("FullPath",$param) and $param["FullPath"] !== null) {
            $this->FullPath = $param["FullPath"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
