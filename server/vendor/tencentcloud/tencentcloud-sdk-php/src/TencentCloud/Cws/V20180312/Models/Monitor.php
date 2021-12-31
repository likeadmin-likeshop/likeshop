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
namespace TencentCloud\Cws\V20180312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 监控任务基础数据
 *
 * @method integer getId() 获取监控任务ID。
 * @method void setId(integer $Id) 设置监控任务ID。
 * @method string getName() 获取监控名称。
 * @method void setName(string $Name) 设置监控名称。
 * @method integer getMonitorStatus() 获取监测状态：1-监测中；2-暂停监测。
 * @method void setMonitorStatus(integer $MonitorStatus) 设置监测状态：1-监测中；2-暂停监测。
 * @method string getScannerType() 获取监测模式，normal-正常扫描；deep-深度扫描。
 * @method void setScannerType(string $ScannerType) 设置监测模式，normal-正常扫描；deep-深度扫描。
 * @method integer getCrontab() 获取扫描周期，单位小时，每X小时执行一次。
 * @method void setCrontab(integer $Crontab) 设置扫描周期，单位小时，每X小时执行一次。
 * @method string getIncludedVulsTypes() 获取指定扫描类型，3位数每位依次表示：扫描Web漏洞、扫描系统漏洞、扫描系统端口。
 * @method void setIncludedVulsTypes(string $IncludedVulsTypes) 设置指定扫描类型，3位数每位依次表示：扫描Web漏洞、扫描系统漏洞、扫描系统端口。
 * @method integer getRateLimit() 获取速率限制，每秒发送X个HTTP请求。
 * @method void setRateLimit(integer $RateLimit) 设置速率限制，每秒发送X个HTTP请求。
 * @method string getFirstScanStartTime() 获取首次扫描开始时间。
 * @method void setFirstScanStartTime(string $FirstScanStartTime) 设置首次扫描开始时间。
 * @method integer getScanStatus() 获取扫描状态：0-待扫描（无任何扫描结果）；1-扫描中（正在进行扫描）；2-已扫描（有扫描结果且不正在扫描）；3-扫描完成待同步结果。
 * @method void setScanStatus(integer $ScanStatus) 设置扫描状态：0-待扫描（无任何扫描结果）；1-扫描中（正在进行扫描）；2-已扫描（有扫描结果且不正在扫描）；3-扫描完成待同步结果。
 * @method string getLastScanFinishTime() 获取上一次扫描完成时间。
 * @method void setLastScanFinishTime(string $LastScanFinishTime) 设置上一次扫描完成时间。
 * @method string getCurrentScanStartTime() 获取当前扫描开始时间，如扫描完成则为上一次扫描的开始时间。
 * @method void setCurrentScanStartTime(string $CurrentScanStartTime) 设置当前扫描开始时间，如扫描完成则为上一次扫描的开始时间。
 * @method string getCreatedAt() 获取CreatedAt。
 * @method void setCreatedAt(string $CreatedAt) 设置CreatedAt。
 * @method string getUpdatedAt() 获取UpdatedAt。
 * @method void setUpdatedAt(string $UpdatedAt) 设置UpdatedAt。
 * @method integer getAppid() 获取云用户appid。
 * @method void setAppid(integer $Appid) 设置云用户appid。
 * @method integer getContentScanStatus() 获取扫描状态：0-待检测；1-检测完成
 * @method void setContentScanStatus(integer $ContentScanStatus) 设置扫描状态：0-待检测；1-检测完成
 */
class Monitor extends AbstractModel
{
    /**
     * @var integer 监控任务ID。
     */
    public $Id;

    /**
     * @var string 监控名称。
     */
    public $Name;

    /**
     * @var integer 监测状态：1-监测中；2-暂停监测。
     */
    public $MonitorStatus;

    /**
     * @var string 监测模式，normal-正常扫描；deep-深度扫描。
     */
    public $ScannerType;

    /**
     * @var integer 扫描周期，单位小时，每X小时执行一次。
     */
    public $Crontab;

    /**
     * @var string 指定扫描类型，3位数每位依次表示：扫描Web漏洞、扫描系统漏洞、扫描系统端口。
     */
    public $IncludedVulsTypes;

    /**
     * @var integer 速率限制，每秒发送X个HTTP请求。
     */
    public $RateLimit;

    /**
     * @var string 首次扫描开始时间。
     */
    public $FirstScanStartTime;

    /**
     * @var integer 扫描状态：0-待扫描（无任何扫描结果）；1-扫描中（正在进行扫描）；2-已扫描（有扫描结果且不正在扫描）；3-扫描完成待同步结果。
     */
    public $ScanStatus;

    /**
     * @var string 上一次扫描完成时间。
     */
    public $LastScanFinishTime;

    /**
     * @var string 当前扫描开始时间，如扫描完成则为上一次扫描的开始时间。
     */
    public $CurrentScanStartTime;

    /**
     * @var string CreatedAt。
     */
    public $CreatedAt;

    /**
     * @var string UpdatedAt。
     */
    public $UpdatedAt;

    /**
     * @var integer 云用户appid。
     */
    public $Appid;

    /**
     * @var integer 扫描状态：0-待检测；1-检测完成
     */
    public $ContentScanStatus;

    /**
     * @param integer $Id 监控任务ID。
     * @param string $Name 监控名称。
     * @param integer $MonitorStatus 监测状态：1-监测中；2-暂停监测。
     * @param string $ScannerType 监测模式，normal-正常扫描；deep-深度扫描。
     * @param integer $Crontab 扫描周期，单位小时，每X小时执行一次。
     * @param string $IncludedVulsTypes 指定扫描类型，3位数每位依次表示：扫描Web漏洞、扫描系统漏洞、扫描系统端口。
     * @param integer $RateLimit 速率限制，每秒发送X个HTTP请求。
     * @param string $FirstScanStartTime 首次扫描开始时间。
     * @param integer $ScanStatus 扫描状态：0-待扫描（无任何扫描结果）；1-扫描中（正在进行扫描）；2-已扫描（有扫描结果且不正在扫描）；3-扫描完成待同步结果。
     * @param string $LastScanFinishTime 上一次扫描完成时间。
     * @param string $CurrentScanStartTime 当前扫描开始时间，如扫描完成则为上一次扫描的开始时间。
     * @param string $CreatedAt CreatedAt。
     * @param string $UpdatedAt UpdatedAt。
     * @param integer $Appid 云用户appid。
     * @param integer $ContentScanStatus 扫描状态：0-待检测；1-检测完成
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MonitorStatus",$param) and $param["MonitorStatus"] !== null) {
            $this->MonitorStatus = $param["MonitorStatus"];
        }

        if (array_key_exists("ScannerType",$param) and $param["ScannerType"] !== null) {
            $this->ScannerType = $param["ScannerType"];
        }

        if (array_key_exists("Crontab",$param) and $param["Crontab"] !== null) {
            $this->Crontab = $param["Crontab"];
        }

        if (array_key_exists("IncludedVulsTypes",$param) and $param["IncludedVulsTypes"] !== null) {
            $this->IncludedVulsTypes = $param["IncludedVulsTypes"];
        }

        if (array_key_exists("RateLimit",$param) and $param["RateLimit"] !== null) {
            $this->RateLimit = $param["RateLimit"];
        }

        if (array_key_exists("FirstScanStartTime",$param) and $param["FirstScanStartTime"] !== null) {
            $this->FirstScanStartTime = $param["FirstScanStartTime"];
        }

        if (array_key_exists("ScanStatus",$param) and $param["ScanStatus"] !== null) {
            $this->ScanStatus = $param["ScanStatus"];
        }

        if (array_key_exists("LastScanFinishTime",$param) and $param["LastScanFinishTime"] !== null) {
            $this->LastScanFinishTime = $param["LastScanFinishTime"];
        }

        if (array_key_exists("CurrentScanStartTime",$param) and $param["CurrentScanStartTime"] !== null) {
            $this->CurrentScanStartTime = $param["CurrentScanStartTime"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("ContentScanStatus",$param) and $param["ContentScanStatus"] !== null) {
            $this->ContentScanStatus = $param["ContentScanStatus"];
        }
    }
}
