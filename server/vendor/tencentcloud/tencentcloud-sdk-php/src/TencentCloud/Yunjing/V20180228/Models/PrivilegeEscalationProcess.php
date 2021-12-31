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
 * 本地提权数据
 *
 * @method integer getId() 获取数据ID
 * @method void setId(integer $Id) 设置数据ID
 * @method string getUuid() 获取云镜ID
 * @method void setUuid(string $Uuid) 设置云镜ID
 * @method string getQuuid() 获取主机ID
 * @method void setQuuid(string $Quuid) 设置主机ID
 * @method string getHostip() 获取主机内网IP
 * @method void setHostip(string $Hostip) 设置主机内网IP
 * @method string getProcessName() 获取进程名
 * @method void setProcessName(string $ProcessName) 设置进程名
 * @method string getFullPath() 获取进程路径
 * @method void setFullPath(string $FullPath) 设置进程路径
 * @method string getCmdLine() 获取执行命令
 * @method void setCmdLine(string $CmdLine) 设置执行命令
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getUserGroup() 获取用户组
 * @method void setUserGroup(string $UserGroup) 设置用户组
 * @method string getProcFilePrivilege() 获取进程文件权限
 * @method void setProcFilePrivilege(string $ProcFilePrivilege) 设置进程文件权限
 * @method string getParentProcName() 获取父进程名
 * @method void setParentProcName(string $ParentProcName) 设置父进程名
 * @method string getParentProcUser() 获取父进程用户名
 * @method void setParentProcUser(string $ParentProcUser) 设置父进程用户名
 * @method string getParentProcGroup() 获取父进程用户组
 * @method void setParentProcGroup(string $ParentProcGroup) 设置父进程用户组
 * @method string getParentProcPath() 获取父进程路径
 * @method void setParentProcPath(string $ParentProcPath) 设置父进程路径
 * @method string getProcTree() 获取进程树
 * @method void setProcTree(string $ProcTree) 设置进程树
 * @method integer getStatus() 获取处理状态
 * @method void setStatus(integer $Status) 设置处理状态
 * @method string getCreateTime() 获取发生时间
 * @method void setCreateTime(string $CreateTime) 设置发生时间
 * @method string getMachineName() 获取机器名
 * @method void setMachineName(string $MachineName) 设置机器名
 */
class PrivilegeEscalationProcess extends AbstractModel
{
    /**
     * @var integer 数据ID
     */
    public $Id;

    /**
     * @var string 云镜ID
     */
    public $Uuid;

    /**
     * @var string 主机ID
     */
    public $Quuid;

    /**
     * @var string 主机内网IP
     */
    public $Hostip;

    /**
     * @var string 进程名
     */
    public $ProcessName;

    /**
     * @var string 进程路径
     */
    public $FullPath;

    /**
     * @var string 执行命令
     */
    public $CmdLine;

    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string 用户组
     */
    public $UserGroup;

    /**
     * @var string 进程文件权限
     */
    public $ProcFilePrivilege;

    /**
     * @var string 父进程名
     */
    public $ParentProcName;

    /**
     * @var string 父进程用户名
     */
    public $ParentProcUser;

    /**
     * @var string 父进程用户组
     */
    public $ParentProcGroup;

    /**
     * @var string 父进程路径
     */
    public $ParentProcPath;

    /**
     * @var string 进程树
     */
    public $ProcTree;

    /**
     * @var integer 处理状态
     */
    public $Status;

    /**
     * @var string 发生时间
     */
    public $CreateTime;

    /**
     * @var string 机器名
     */
    public $MachineName;

    /**
     * @param integer $Id 数据ID
     * @param string $Uuid 云镜ID
     * @param string $Quuid 主机ID
     * @param string $Hostip 主机内网IP
     * @param string $ProcessName 进程名
     * @param string $FullPath 进程路径
     * @param string $CmdLine 执行命令
     * @param string $UserName 用户名
     * @param string $UserGroup 用户组
     * @param string $ProcFilePrivilege 进程文件权限
     * @param string $ParentProcName 父进程名
     * @param string $ParentProcUser 父进程用户名
     * @param string $ParentProcGroup 父进程用户组
     * @param string $ParentProcPath 父进程路径
     * @param string $ProcTree 进程树
     * @param integer $Status 处理状态
     * @param string $CreateTime 发生时间
     * @param string $MachineName 机器名
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

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Hostip",$param) and $param["Hostip"] !== null) {
            $this->Hostip = $param["Hostip"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("FullPath",$param) and $param["FullPath"] !== null) {
            $this->FullPath = $param["FullPath"];
        }

        if (array_key_exists("CmdLine",$param) and $param["CmdLine"] !== null) {
            $this->CmdLine = $param["CmdLine"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UserGroup",$param) and $param["UserGroup"] !== null) {
            $this->UserGroup = $param["UserGroup"];
        }

        if (array_key_exists("ProcFilePrivilege",$param) and $param["ProcFilePrivilege"] !== null) {
            $this->ProcFilePrivilege = $param["ProcFilePrivilege"];
        }

        if (array_key_exists("ParentProcName",$param) and $param["ParentProcName"] !== null) {
            $this->ParentProcName = $param["ParentProcName"];
        }

        if (array_key_exists("ParentProcUser",$param) and $param["ParentProcUser"] !== null) {
            $this->ParentProcUser = $param["ParentProcUser"];
        }

        if (array_key_exists("ParentProcGroup",$param) and $param["ParentProcGroup"] !== null) {
            $this->ParentProcGroup = $param["ParentProcGroup"];
        }

        if (array_key_exists("ParentProcPath",$param) and $param["ParentProcPath"] !== null) {
            $this->ParentProcPath = $param["ParentProcPath"];
        }

        if (array_key_exists("ProcTree",$param) and $param["ProcTree"] !== null) {
            $this->ProcTree = $param["ProcTree"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }
    }
}
