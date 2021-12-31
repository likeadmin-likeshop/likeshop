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
 * 恶意请求数据。
 *
 * @method integer getId() 获取记录ID。
 * @method void setId(integer $Id) 设置记录ID。
 * @method string getUuid() 获取云镜客户端UUID。
 * @method void setUuid(string $Uuid) 设置云镜客户端UUID。
 * @method string getMachineIp() 获取主机内网IP。
 * @method void setMachineIp(string $MachineIp) 设置主机内网IP。
 * @method string getMachineName() 获取主机名。
 * @method void setMachineName(string $MachineName) 设置主机名。
 * @method string getDomain() 获取恶意请求域名。
 * @method void setDomain(string $Domain) 设置恶意请求域名。
 * @method integer getCount() 获取恶意请求数。
 * @method void setCount(integer $Count) 设置恶意请求数。
 * @method string getProcessName() 获取进程名。
 * @method void setProcessName(string $ProcessName) 设置进程名。
 * @method string getStatus() 获取记录状态。
<li>UN_OPERATED：待处理</li>
<li>TRUSTED：已信任</li>
<li>UN_TRUSTED：已取消信任</li>
 * @method void setStatus(string $Status) 设置记录状态。
<li>UN_OPERATED：待处理</li>
<li>TRUSTED：已信任</li>
<li>UN_TRUSTED：已取消信任</li>
 * @method string getDescription() 获取恶意请求域名描述。
 * @method void setDescription(string $Description) 设置恶意请求域名描述。
 * @method string getReference() 获取参考地址。
 * @method void setReference(string $Reference) 设置参考地址。
 * @method string getCreateTime() 获取发现时间。
 * @method void setCreateTime(string $CreateTime) 设置发现时间。
 * @method string getMergeTime() 获取记录合并时间。
 * @method void setMergeTime(string $MergeTime) 设置记录合并时间。
 * @method string getProcessMd5() 获取进程MD5
值。
 * @method void setProcessMd5(string $ProcessMd5) 设置进程MD5
值。
 * @method string getCmdLine() 获取执行命令行。
 * @method void setCmdLine(string $CmdLine) 设置执行命令行。
 * @method integer getPid() 获取进程PID。
 * @method void setPid(integer $Pid) 设置进程PID。
 */
class MaliciousRequest extends AbstractModel
{
    /**
     * @var integer 记录ID。
     */
    public $Id;

    /**
     * @var string 云镜客户端UUID。
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
     * @var string 恶意请求域名。
     */
    public $Domain;

    /**
     * @var integer 恶意请求数。
     */
    public $Count;

    /**
     * @var string 进程名。
     */
    public $ProcessName;

    /**
     * @var string 记录状态。
<li>UN_OPERATED：待处理</li>
<li>TRUSTED：已信任</li>
<li>UN_TRUSTED：已取消信任</li>
     */
    public $Status;

    /**
     * @var string 恶意请求域名描述。
     */
    public $Description;

    /**
     * @var string 参考地址。
     */
    public $Reference;

    /**
     * @var string 发现时间。
     */
    public $CreateTime;

    /**
     * @var string 记录合并时间。
     */
    public $MergeTime;

    /**
     * @var string 进程MD5
值。
     */
    public $ProcessMd5;

    /**
     * @var string 执行命令行。
     */
    public $CmdLine;

    /**
     * @var integer 进程PID。
     */
    public $Pid;

    /**
     * @param integer $Id 记录ID。
     * @param string $Uuid 云镜客户端UUID。
     * @param string $MachineIp 主机内网IP。
     * @param string $MachineName 主机名。
     * @param string $Domain 恶意请求域名。
     * @param integer $Count 恶意请求数。
     * @param string $ProcessName 进程名。
     * @param string $Status 记录状态。
<li>UN_OPERATED：待处理</li>
<li>TRUSTED：已信任</li>
<li>UN_TRUSTED：已取消信任</li>
     * @param string $Description 恶意请求域名描述。
     * @param string $Reference 参考地址。
     * @param string $CreateTime 发现时间。
     * @param string $MergeTime 记录合并时间。
     * @param string $ProcessMd5 进程MD5
值。
     * @param string $CmdLine 执行命令行。
     * @param integer $Pid 进程PID。
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

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Reference",$param) and $param["Reference"] !== null) {
            $this->Reference = $param["Reference"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MergeTime",$param) and $param["MergeTime"] !== null) {
            $this->MergeTime = $param["MergeTime"];
        }

        if (array_key_exists("ProcessMd5",$param) and $param["ProcessMd5"] !== null) {
            $this->ProcessMd5 = $param["ProcessMd5"];
        }

        if (array_key_exists("CmdLine",$param) and $param["CmdLine"] !== null) {
            $this->CmdLine = $param["CmdLine"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }
    }
}
