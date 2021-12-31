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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义脚本任务详细信息
 *
 * @method integer getAutoId() 获取自动编号，可忽略
 * @method void setAutoId(integer $AutoId) 设置自动编号，可忽略
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getRunBeginTime() 获取任务开始时间
 * @method void setRunBeginTime(string $RunBeginTime) 设置任务开始时间
 * @method string getRunEndTime() 获取任务结束时间
 * @method void setRunEndTime(string $RunEndTime) 设置任务结束时间
 * @method integer getStatus() 获取任务状态ID，取值为 -1：进行中；0：成功；>0：失败错误码
 * @method void setStatus(integer $Status) 设置任务状态ID，取值为 -1：进行中；0：成功；>0：失败错误码
 * @method string getInstanceName() 获取设备别名
 * @method void setInstanceName(string $InstanceName) 设置设备别名
 * @method string getInstanceId() 获取设备ID
 * @method void setInstanceId(string $InstanceId) 设置设备ID
 * @method string getVpcName() 获取私有网络名
 * @method void setVpcName(string $VpcName) 设置私有网络名
 * @method string getVpcId() 获取私有网络整型ID
 * @method void setVpcId(string $VpcId) 设置私有网络整型ID
 * @method string getVpcCidrBlock() 获取私有网络Cidr
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置私有网络Cidr
 * @method string getSubnetName() 获取子网名
 * @method void setSubnetName(string $SubnetName) 设置子网名
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method string getSubnetCidrBlock() 获取子网Cidr
 * @method void setSubnetCidrBlock(string $SubnetCidrBlock) 设置子网Cidr
 * @method string getLanIp() 获取内网IP
 * @method void setLanIp(string $LanIp) 设置内网IP
 * @method string getCmdContent() 获取脚本内容，base64编码后的值
 * @method void setCmdContent(string $CmdContent) 设置脚本内容，base64编码后的值
 * @method string getCmdParam() 获取脚本参数，base64编码后的值
 * @method void setCmdParam(string $CmdParam) 设置脚本参数，base64编码后的值
 * @method string getCmdResult() 获取脚本执行结果，base64编码后的值
 * @method void setCmdResult(string $CmdResult) 设置脚本执行结果，base64编码后的值
 * @method integer getAppId() 获取用户AppId
 * @method void setAppId(integer $AppId) 设置用户AppId
 * @method integer getLastShellExit() 获取用户执行脚本结束退出的返回值，没有返回值为-1
 * @method void setLastShellExit(integer $LastShellExit) 设置用户执行脚本结束退出的返回值，没有返回值为-1
 */
class UserCmdTaskInfo extends AbstractModel
{
    /**
     * @var integer 自动编号，可忽略
     */
    public $AutoId;

    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 任务开始时间
     */
    public $RunBeginTime;

    /**
     * @var string 任务结束时间
     */
    public $RunEndTime;

    /**
     * @var integer 任务状态ID，取值为 -1：进行中；0：成功；>0：失败错误码
     */
    public $Status;

    /**
     * @var string 设备别名
     */
    public $InstanceName;

    /**
     * @var string 设备ID
     */
    public $InstanceId;

    /**
     * @var string 私有网络名
     */
    public $VpcName;

    /**
     * @var string 私有网络整型ID
     */
    public $VpcId;

    /**
     * @var string 私有网络Cidr
     */
    public $VpcCidrBlock;

    /**
     * @var string 子网名
     */
    public $SubnetName;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var string 子网Cidr
     */
    public $SubnetCidrBlock;

    /**
     * @var string 内网IP
     */
    public $LanIp;

    /**
     * @var string 脚本内容，base64编码后的值
     */
    public $CmdContent;

    /**
     * @var string 脚本参数，base64编码后的值
     */
    public $CmdParam;

    /**
     * @var string 脚本执行结果，base64编码后的值
     */
    public $CmdResult;

    /**
     * @var integer 用户AppId
     */
    public $AppId;

    /**
     * @var integer 用户执行脚本结束退出的返回值，没有返回值为-1
     */
    public $LastShellExit;

    /**
     * @param integer $AutoId 自动编号，可忽略
     * @param string $TaskId 任务ID
     * @param string $RunBeginTime 任务开始时间
     * @param string $RunEndTime 任务结束时间
     * @param integer $Status 任务状态ID，取值为 -1：进行中；0：成功；>0：失败错误码
     * @param string $InstanceName 设备别名
     * @param string $InstanceId 设备ID
     * @param string $VpcName 私有网络名
     * @param string $VpcId 私有网络整型ID
     * @param string $VpcCidrBlock 私有网络Cidr
     * @param string $SubnetName 子网名
     * @param string $SubnetId 子网ID
     * @param string $SubnetCidrBlock 子网Cidr
     * @param string $LanIp 内网IP
     * @param string $CmdContent 脚本内容，base64编码后的值
     * @param string $CmdParam 脚本参数，base64编码后的值
     * @param string $CmdResult 脚本执行结果，base64编码后的值
     * @param integer $AppId 用户AppId
     * @param integer $LastShellExit 用户执行脚本结束退出的返回值，没有返回值为-1
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
        if (array_key_exists("AutoId",$param) and $param["AutoId"] !== null) {
            $this->AutoId = $param["AutoId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RunBeginTime",$param) and $param["RunBeginTime"] !== null) {
            $this->RunBeginTime = $param["RunBeginTime"];
        }

        if (array_key_exists("RunEndTime",$param) and $param["RunEndTime"] !== null) {
            $this->RunEndTime = $param["RunEndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetCidrBlock",$param) and $param["SubnetCidrBlock"] !== null) {
            $this->SubnetCidrBlock = $param["SubnetCidrBlock"];
        }

        if (array_key_exists("LanIp",$param) and $param["LanIp"] !== null) {
            $this->LanIp = $param["LanIp"];
        }

        if (array_key_exists("CmdContent",$param) and $param["CmdContent"] !== null) {
            $this->CmdContent = $param["CmdContent"];
        }

        if (array_key_exists("CmdParam",$param) and $param["CmdParam"] !== null) {
            $this->CmdParam = $param["CmdParam"];
        }

        if (array_key_exists("CmdResult",$param) and $param["CmdResult"] !== null) {
            $this->CmdResult = $param["CmdResult"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("LastShellExit",$param) and $param["LastShellExit"] !== null) {
            $this->LastShellExit = $param["LastShellExit"];
        }
    }
}
