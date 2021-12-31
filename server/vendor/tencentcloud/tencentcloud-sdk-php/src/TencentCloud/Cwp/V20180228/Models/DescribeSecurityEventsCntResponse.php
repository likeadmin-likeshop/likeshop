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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityEventsCnt返回参数结构体
 *
 * @method SecurityEventInfo getMalware() 获取木马文件相关风险事件
 * @method void setMalware(SecurityEventInfo $Malware) 设置木马文件相关风险事件
 * @method SecurityEventInfo getHostLogin() 获取登录审计相关风险事件
 * @method void setHostLogin(SecurityEventInfo $HostLogin) 设置登录审计相关风险事件
 * @method SecurityEventInfo getBruteAttack() 获取密码破解相关风险事件
 * @method void setBruteAttack(SecurityEventInfo $BruteAttack) 设置密码破解相关风险事件
 * @method SecurityEventInfo getRiskDns() 获取恶意请求相关风险事件
 * @method void setRiskDns(SecurityEventInfo $RiskDns) 设置恶意请求相关风险事件
 * @method SecurityEventInfo getBash() 获取高危命令相关风险事件
 * @method void setBash(SecurityEventInfo $Bash) 设置高危命令相关风险事件
 * @method SecurityEventInfo getPrivilegeRules() 获取本地提权相关风险事件
 * @method void setPrivilegeRules(SecurityEventInfo $PrivilegeRules) 设置本地提权相关风险事件
 * @method SecurityEventInfo getReverseShell() 获取反弹Shell相关风险事件
 * @method void setReverseShell(SecurityEventInfo $ReverseShell) 设置反弹Shell相关风险事件
 * @method SecurityEventInfo getSysVul() 获取系统组件相关风险事件
 * @method void setSysVul(SecurityEventInfo $SysVul) 设置系统组件相关风险事件
 * @method SecurityEventInfo getWebVul() 获取Web应用漏洞相关风险事件
 * @method void setWebVul(SecurityEventInfo $WebVul) 设置Web应用漏洞相关风险事件
 * @method SecurityEventInfo getEmergencyVul() 获取应急漏洞相关风险事件
 * @method void setEmergencyVul(SecurityEventInfo $EmergencyVul) 设置应急漏洞相关风险事件
 * @method SecurityEventInfo getBaseLine() 获取安全基线相关风险事件
 * @method void setBaseLine(SecurityEventInfo $BaseLine) 设置安全基线相关风险事件
 * @method SecurityEventInfo getAttackLogs() 获取攻击检测相关风险事件
 * @method void setAttackLogs(SecurityEventInfo $AttackLogs) 设置攻击检测相关风险事件
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSecurityEventsCntResponse extends AbstractModel
{
    /**
     * @var SecurityEventInfo 木马文件相关风险事件
     */
    public $Malware;

    /**
     * @var SecurityEventInfo 登录审计相关风险事件
     */
    public $HostLogin;

    /**
     * @var SecurityEventInfo 密码破解相关风险事件
     */
    public $BruteAttack;

    /**
     * @var SecurityEventInfo 恶意请求相关风险事件
     */
    public $RiskDns;

    /**
     * @var SecurityEventInfo 高危命令相关风险事件
     */
    public $Bash;

    /**
     * @var SecurityEventInfo 本地提权相关风险事件
     */
    public $PrivilegeRules;

    /**
     * @var SecurityEventInfo 反弹Shell相关风险事件
     */
    public $ReverseShell;

    /**
     * @var SecurityEventInfo 系统组件相关风险事件
     */
    public $SysVul;

    /**
     * @var SecurityEventInfo Web应用漏洞相关风险事件
     */
    public $WebVul;

    /**
     * @var SecurityEventInfo 应急漏洞相关风险事件
     */
    public $EmergencyVul;

    /**
     * @var SecurityEventInfo 安全基线相关风险事件
     */
    public $BaseLine;

    /**
     * @var SecurityEventInfo 攻击检测相关风险事件
     */
    public $AttackLogs;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param SecurityEventInfo $Malware 木马文件相关风险事件
     * @param SecurityEventInfo $HostLogin 登录审计相关风险事件
     * @param SecurityEventInfo $BruteAttack 密码破解相关风险事件
     * @param SecurityEventInfo $RiskDns 恶意请求相关风险事件
     * @param SecurityEventInfo $Bash 高危命令相关风险事件
     * @param SecurityEventInfo $PrivilegeRules 本地提权相关风险事件
     * @param SecurityEventInfo $ReverseShell 反弹Shell相关风险事件
     * @param SecurityEventInfo $SysVul 系统组件相关风险事件
     * @param SecurityEventInfo $WebVul Web应用漏洞相关风险事件
     * @param SecurityEventInfo $EmergencyVul 应急漏洞相关风险事件
     * @param SecurityEventInfo $BaseLine 安全基线相关风险事件
     * @param SecurityEventInfo $AttackLogs 攻击检测相关风险事件
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
        if (array_key_exists("Malware",$param) and $param["Malware"] !== null) {
            $this->Malware = new SecurityEventInfo();
            $this->Malware->deserialize($param["Malware"]);
        }

        if (array_key_exists("HostLogin",$param) and $param["HostLogin"] !== null) {
            $this->HostLogin = new SecurityEventInfo();
            $this->HostLogin->deserialize($param["HostLogin"]);
        }

        if (array_key_exists("BruteAttack",$param) and $param["BruteAttack"] !== null) {
            $this->BruteAttack = new SecurityEventInfo();
            $this->BruteAttack->deserialize($param["BruteAttack"]);
        }

        if (array_key_exists("RiskDns",$param) and $param["RiskDns"] !== null) {
            $this->RiskDns = new SecurityEventInfo();
            $this->RiskDns->deserialize($param["RiskDns"]);
        }

        if (array_key_exists("Bash",$param) and $param["Bash"] !== null) {
            $this->Bash = new SecurityEventInfo();
            $this->Bash->deserialize($param["Bash"]);
        }

        if (array_key_exists("PrivilegeRules",$param) and $param["PrivilegeRules"] !== null) {
            $this->PrivilegeRules = new SecurityEventInfo();
            $this->PrivilegeRules->deserialize($param["PrivilegeRules"]);
        }

        if (array_key_exists("ReverseShell",$param) and $param["ReverseShell"] !== null) {
            $this->ReverseShell = new SecurityEventInfo();
            $this->ReverseShell->deserialize($param["ReverseShell"]);
        }

        if (array_key_exists("SysVul",$param) and $param["SysVul"] !== null) {
            $this->SysVul = new SecurityEventInfo();
            $this->SysVul->deserialize($param["SysVul"]);
        }

        if (array_key_exists("WebVul",$param) and $param["WebVul"] !== null) {
            $this->WebVul = new SecurityEventInfo();
            $this->WebVul->deserialize($param["WebVul"]);
        }

        if (array_key_exists("EmergencyVul",$param) and $param["EmergencyVul"] !== null) {
            $this->EmergencyVul = new SecurityEventInfo();
            $this->EmergencyVul->deserialize($param["EmergencyVul"]);
        }

        if (array_key_exists("BaseLine",$param) and $param["BaseLine"] !== null) {
            $this->BaseLine = new SecurityEventInfo();
            $this->BaseLine->deserialize($param["BaseLine"]);
        }

        if (array_key_exists("AttackLogs",$param) and $param["AttackLogs"] !== null) {
            $this->AttackLogs = new SecurityEventInfo();
            $this->AttackLogs->deserialize($param["AttackLogs"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
