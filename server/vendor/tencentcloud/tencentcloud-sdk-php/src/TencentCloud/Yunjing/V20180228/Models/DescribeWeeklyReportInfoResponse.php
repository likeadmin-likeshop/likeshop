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
 * DescribeWeeklyReportInfo返回参数结构体
 *
 * @method string getCompanyName() 获取账号所属公司或个人名称。
 * @method void setCompanyName(string $CompanyName) 设置账号所属公司或个人名称。
 * @method integer getMachineNum() 获取机器总数。
 * @method void setMachineNum(integer $MachineNum) 设置机器总数。
 * @method integer getOnlineMachineNum() 获取云镜客户端在线数。
 * @method void setOnlineMachineNum(integer $OnlineMachineNum) 设置云镜客户端在线数。
 * @method integer getOfflineMachineNum() 获取云镜客户端离线数。
 * @method void setOfflineMachineNum(integer $OfflineMachineNum) 设置云镜客户端离线数。
 * @method integer getProVersionMachineNum() 获取开通云镜专业版数量。
 * @method void setProVersionMachineNum(integer $ProVersionMachineNum) 设置开通云镜专业版数量。
 * @method string getBeginDate() 获取周报开始时间。
 * @method void setBeginDate(string $BeginDate) 设置周报开始时间。
 * @method string getEndDate() 获取周报结束时间。
 * @method void setEndDate(string $EndDate) 设置周报结束时间。
 * @method string getLevel() 获取安全等级。
<li>HIGH：高</li>
<li>MIDDLE：中</li>
<li>LOW：低</li>
 * @method void setLevel(string $Level) 设置安全等级。
<li>HIGH：高</li>
<li>MIDDLE：中</li>
<li>LOW：低</li>
 * @method integer getMalwareNum() 获取木马记录数。
 * @method void setMalwareNum(integer $MalwareNum) 设置木马记录数。
 * @method integer getNonlocalLoginNum() 获取异地登录数。
 * @method void setNonlocalLoginNum(integer $NonlocalLoginNum) 设置异地登录数。
 * @method integer getBruteAttackSuccessNum() 获取密码破解成功数。
 * @method void setBruteAttackSuccessNum(integer $BruteAttackSuccessNum) 设置密码破解成功数。
 * @method integer getVulNum() 获取漏洞数。
 * @method void setVulNum(integer $VulNum) 设置漏洞数。
 * @method string getDownloadUrl() 获取导出文件下载地址。
 * @method void setDownloadUrl(string $DownloadUrl) 设置导出文件下载地址。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeWeeklyReportInfoResponse extends AbstractModel
{
    /**
     * @var string 账号所属公司或个人名称。
     */
    public $CompanyName;

    /**
     * @var integer 机器总数。
     */
    public $MachineNum;

    /**
     * @var integer 云镜客户端在线数。
     */
    public $OnlineMachineNum;

    /**
     * @var integer 云镜客户端离线数。
     */
    public $OfflineMachineNum;

    /**
     * @var integer 开通云镜专业版数量。
     */
    public $ProVersionMachineNum;

    /**
     * @var string 周报开始时间。
     */
    public $BeginDate;

    /**
     * @var string 周报结束时间。
     */
    public $EndDate;

    /**
     * @var string 安全等级。
<li>HIGH：高</li>
<li>MIDDLE：中</li>
<li>LOW：低</li>
     */
    public $Level;

    /**
     * @var integer 木马记录数。
     */
    public $MalwareNum;

    /**
     * @var integer 异地登录数。
     */
    public $NonlocalLoginNum;

    /**
     * @var integer 密码破解成功数。
     */
    public $BruteAttackSuccessNum;

    /**
     * @var integer 漏洞数。
     */
    public $VulNum;

    /**
     * @var string 导出文件下载地址。
     */
    public $DownloadUrl;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CompanyName 账号所属公司或个人名称。
     * @param integer $MachineNum 机器总数。
     * @param integer $OnlineMachineNum 云镜客户端在线数。
     * @param integer $OfflineMachineNum 云镜客户端离线数。
     * @param integer $ProVersionMachineNum 开通云镜专业版数量。
     * @param string $BeginDate 周报开始时间。
     * @param string $EndDate 周报结束时间。
     * @param string $Level 安全等级。
<li>HIGH：高</li>
<li>MIDDLE：中</li>
<li>LOW：低</li>
     * @param integer $MalwareNum 木马记录数。
     * @param integer $NonlocalLoginNum 异地登录数。
     * @param integer $BruteAttackSuccessNum 密码破解成功数。
     * @param integer $VulNum 漏洞数。
     * @param string $DownloadUrl 导出文件下载地址。
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
        if (array_key_exists("CompanyName",$param) and $param["CompanyName"] !== null) {
            $this->CompanyName = $param["CompanyName"];
        }

        if (array_key_exists("MachineNum",$param) and $param["MachineNum"] !== null) {
            $this->MachineNum = $param["MachineNum"];
        }

        if (array_key_exists("OnlineMachineNum",$param) and $param["OnlineMachineNum"] !== null) {
            $this->OnlineMachineNum = $param["OnlineMachineNum"];
        }

        if (array_key_exists("OfflineMachineNum",$param) and $param["OfflineMachineNum"] !== null) {
            $this->OfflineMachineNum = $param["OfflineMachineNum"];
        }

        if (array_key_exists("ProVersionMachineNum",$param) and $param["ProVersionMachineNum"] !== null) {
            $this->ProVersionMachineNum = $param["ProVersionMachineNum"];
        }

        if (array_key_exists("BeginDate",$param) and $param["BeginDate"] !== null) {
            $this->BeginDate = $param["BeginDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("MalwareNum",$param) and $param["MalwareNum"] !== null) {
            $this->MalwareNum = $param["MalwareNum"];
        }

        if (array_key_exists("NonlocalLoginNum",$param) and $param["NonlocalLoginNum"] !== null) {
            $this->NonlocalLoginNum = $param["NonlocalLoginNum"];
        }

        if (array_key_exists("BruteAttackSuccessNum",$param) and $param["BruteAttackSuccessNum"] !== null) {
            $this->BruteAttackSuccessNum = $param["BruteAttackSuccessNum"];
        }

        if (array_key_exists("VulNum",$param) and $param["VulNum"] !== null) {
            $this->VulNum = $param["VulNum"];
        }

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
