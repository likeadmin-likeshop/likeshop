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
 * 高危命令数据
 *
 * @method integer getId() 获取ID
 * @method void setId(integer $Id) 设置ID
 * @method string getUuid() 获取云镜ID
 * @method void setUuid(string $Uuid) 设置云镜ID
 * @method string getQuuid() 获取主机ID
 * @method void setQuuid(string $Quuid) 设置主机ID
 * @method string getHostip() 获取主机内网IP
 * @method void setHostip(string $Hostip) 设置主机内网IP
 * @method string getUser() 获取执行用户名
 * @method void setUser(string $User) 设置执行用户名
 * @method integer getPlatform() 获取平台类型
 * @method void setPlatform(integer $Platform) 设置平台类型
 * @method string getBashCmd() 获取执行命令
 * @method void setBashCmd(string $BashCmd) 设置执行命令
 * @method integer getRuleId() 获取规则ID
 * @method void setRuleId(integer $RuleId) 设置规则ID
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method integer getRuleLevel() 获取规则等级
 * @method void setRuleLevel(integer $RuleLevel) 设置规则等级
 * @method integer getStatus() 获取处理状态
 * @method void setStatus(integer $Status) 设置处理状态
 * @method string getCreateTime() 获取发生时间
 * @method void setCreateTime(string $CreateTime) 设置发生时间
 * @method string getMachineName() 获取主机名
 * @method void setMachineName(string $MachineName) 设置主机名
 */
class BashEvent extends AbstractModel
{
    /**
     * @var integer ID
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
     * @var string 执行用户名
     */
    public $User;

    /**
     * @var integer 平台类型
     */
    public $Platform;

    /**
     * @var string 执行命令
     */
    public $BashCmd;

    /**
     * @var integer 规则ID
     */
    public $RuleId;

    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var integer 规则等级
     */
    public $RuleLevel;

    /**
     * @var integer 处理状态
     */
    public $Status;

    /**
     * @var string 发生时间
     */
    public $CreateTime;

    /**
     * @var string 主机名
     */
    public $MachineName;

    /**
     * @param integer $Id ID
     * @param string $Uuid 云镜ID
     * @param string $Quuid 主机ID
     * @param string $Hostip 主机内网IP
     * @param string $User 执行用户名
     * @param integer $Platform 平台类型
     * @param string $BashCmd 执行命令
     * @param integer $RuleId 规则ID
     * @param string $RuleName 规则名称
     * @param integer $RuleLevel 规则等级
     * @param integer $Status 处理状态
     * @param string $CreateTime 发生时间
     * @param string $MachineName 主机名
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

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("BashCmd",$param) and $param["BashCmd"] !== null) {
            $this->BashCmd = $param["BashCmd"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleLevel",$param) and $param["RuleLevel"] !== null) {
            $this->RuleLevel = $param["RuleLevel"];
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
