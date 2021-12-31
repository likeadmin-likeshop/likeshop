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
 * 站点数据
 *
 * @method integer getId() 获取站点ID。
 * @method void setId(integer $Id) 设置站点ID。
 * @method integer getMonitorId() 获取监控任务ID，为0时表示未加入监控任务。
 * @method void setMonitorId(integer $MonitorId) 设置监控任务ID，为0时表示未加入监控任务。
 * @method string getUrl() 获取站点url。
 * @method void setUrl(string $Url) 设置站点url。
 * @method string getName() 获取站点名称。
 * @method void setName(string $Name) 设置站点名称。
 * @method integer getVerifyStatus() 获取验证状态：0-未验证；1-已验证；2-验证失效，待重新验证。
 * @method void setVerifyStatus(integer $VerifyStatus) 设置验证状态：0-未验证；1-已验证；2-验证失效，待重新验证。
 * @method integer getMonitorStatus() 获取监测状态：0-未监测；1-监测中；2-暂停监测。
 * @method void setMonitorStatus(integer $MonitorStatus) 设置监测状态：0-未监测；1-监测中；2-暂停监测。
 * @method integer getScanStatus() 获取扫描状态：0-待扫描（无任何扫描结果）；1-扫描中（正在进行扫描）；2-已扫描（有扫描结果且不正在扫描）；3-扫描完成待同步结果。
 * @method void setScanStatus(integer $ScanStatus) 设置扫描状态：0-待扫描（无任何扫描结果）；1-扫描中（正在进行扫描）；2-已扫描（有扫描结果且不正在扫描）；3-扫描完成待同步结果。
 * @method integer getLastScanTaskId() 获取最近一次的AIScanner的扫描任务id，注意取消的情况。
 * @method void setLastScanTaskId(integer $LastScanTaskId) 设置最近一次的AIScanner的扫描任务id，注意取消的情况。
 * @method string getLastScanStartTime() 获取最近一次扫描开始时间。
 * @method void setLastScanStartTime(string $LastScanStartTime) 设置最近一次扫描开始时间。
 * @method string getLastScanFinishTime() 获取最近一次扫描完成时间。
 * @method void setLastScanFinishTime(string $LastScanFinishTime) 设置最近一次扫描完成时间。
 * @method string getLastScanCancelTime() 获取最近一次取消时间，取消即使用上一次扫描结果。
 * @method void setLastScanCancelTime(string $LastScanCancelTime) 设置最近一次取消时间，取消即使用上一次扫描结果。
 * @method integer getLastScanPageCount() 获取最近一次扫描扫描的页面数。
 * @method void setLastScanPageCount(integer $LastScanPageCount) 设置最近一次扫描扫描的页面数。
 * @method string getLastScanScannerType() 获取normal-正常扫描；deep-深度扫描。
 * @method void setLastScanScannerType(string $LastScanScannerType) 设置normal-正常扫描；deep-深度扫描。
 * @method integer getLastScanVulsHighNum() 获取最近一次扫描高风险漏洞数量。
 * @method void setLastScanVulsHighNum(integer $LastScanVulsHighNum) 设置最近一次扫描高风险漏洞数量。
 * @method integer getLastScanVulsMiddleNum() 获取最近一次扫描中风险漏洞数量。
 * @method void setLastScanVulsMiddleNum(integer $LastScanVulsMiddleNum) 设置最近一次扫描中风险漏洞数量。
 * @method integer getLastScanVulsLowNum() 获取最近一次扫描低风险漏洞数量。
 * @method void setLastScanVulsLowNum(integer $LastScanVulsLowNum) 设置最近一次扫描低风险漏洞数量。
 * @method integer getLastScanVulsNoticeNum() 获取最近一次扫描提示信息数量。
 * @method void setLastScanVulsNoticeNum(integer $LastScanVulsNoticeNum) 设置最近一次扫描提示信息数量。
 * @method string getCreatedAt() 获取记录添加时间。
 * @method void setCreatedAt(string $CreatedAt) 设置记录添加时间。
 * @method string getUpdatedAt() 获取记录最近修改时间。
 * @method void setUpdatedAt(string $UpdatedAt) 设置记录最近修改时间。
 * @method integer getLastScanRateLimit() 获取速率限制，每秒发送X个HTTP请求。
 * @method void setLastScanRateLimit(integer $LastScanRateLimit) 设置速率限制，每秒发送X个HTTP请求。
 * @method integer getLastScanVulsNum() 获取最近一次扫描漏洞总数量。
 * @method void setLastScanVulsNum(integer $LastScanVulsNum) 设置最近一次扫描漏洞总数量。
 * @method integer getLastScanNoticeNum() 获取最近一次扫描提示总数量
 * @method void setLastScanNoticeNum(integer $LastScanNoticeNum) 设置最近一次扫描提示总数量
 * @method integer getProgress() 获取扫描进度，百分比整数
 * @method void setProgress(integer $Progress) 设置扫描进度，百分比整数
 * @method integer getAppid() 获取云用户appid。
 * @method void setAppid(integer $Appid) 设置云用户appid。
 * @method string getUin() 获取云用户标识。
 * @method void setUin(string $Uin) 设置云用户标识。
 * @method integer getNeedLogin() 获取网站是否需要登录扫描：0-未知；-1-不需要；1-需要。
 * @method void setNeedLogin(integer $NeedLogin) 设置网站是否需要登录扫描：0-未知；-1-不需要；1-需要。
 * @method string getLoginCookie() 获取登录后的cookie。
 * @method void setLoginCookie(string $LoginCookie) 设置登录后的cookie。
 * @method integer getLoginCookieValid() 获取登录后的cookie是否有效：0-无效；1-有效。
 * @method void setLoginCookieValid(integer $LoginCookieValid) 设置登录后的cookie是否有效：0-无效；1-有效。
 * @method string getLoginCheckUrl() 获取用于测试cookie是否有效的URL。
 * @method void setLoginCheckUrl(string $LoginCheckUrl) 设置用于测试cookie是否有效的URL。
 * @method string getLoginCheckKw() 获取用于测试cookie是否有效的关键字。
 * @method void setLoginCheckKw(string $LoginCheckKw) 设置用于测试cookie是否有效的关键字。
 * @method string getScanDisallow() 获取禁止扫描器扫描的目录关键字。
 * @method void setScanDisallow(string $ScanDisallow) 设置禁止扫描器扫描的目录关键字。
 * @method string getUserAgent() 获取访问网站的客户端标识。
 * @method void setUserAgent(string $UserAgent) 设置访问网站的客户端标识。
 * @method integer getContentStatus() 获取内容检测状态：0-未检测；1-已检测；
 * @method void setContentStatus(integer $ContentStatus) 设置内容检测状态：0-未检测；1-已检测；
 * @method integer getLastScanContentNum() 获取最近一次扫描内容检测数量
 * @method void setLastScanContentNum(integer $LastScanContentNum) 设置最近一次扫描内容检测数量
 */
class Site extends AbstractModel
{
    /**
     * @var integer 站点ID。
     */
    public $Id;

    /**
     * @var integer 监控任务ID，为0时表示未加入监控任务。
     */
    public $MonitorId;

    /**
     * @var string 站点url。
     */
    public $Url;

    /**
     * @var string 站点名称。
     */
    public $Name;

    /**
     * @var integer 验证状态：0-未验证；1-已验证；2-验证失效，待重新验证。
     */
    public $VerifyStatus;

    /**
     * @var integer 监测状态：0-未监测；1-监测中；2-暂停监测。
     */
    public $MonitorStatus;

    /**
     * @var integer 扫描状态：0-待扫描（无任何扫描结果）；1-扫描中（正在进行扫描）；2-已扫描（有扫描结果且不正在扫描）；3-扫描完成待同步结果。
     */
    public $ScanStatus;

    /**
     * @var integer 最近一次的AIScanner的扫描任务id，注意取消的情况。
     */
    public $LastScanTaskId;

    /**
     * @var string 最近一次扫描开始时间。
     */
    public $LastScanStartTime;

    /**
     * @var string 最近一次扫描完成时间。
     */
    public $LastScanFinishTime;

    /**
     * @var string 最近一次取消时间，取消即使用上一次扫描结果。
     */
    public $LastScanCancelTime;

    /**
     * @var integer 最近一次扫描扫描的页面数。
     */
    public $LastScanPageCount;

    /**
     * @var string normal-正常扫描；deep-深度扫描。
     */
    public $LastScanScannerType;

    /**
     * @var integer 最近一次扫描高风险漏洞数量。
     */
    public $LastScanVulsHighNum;

    /**
     * @var integer 最近一次扫描中风险漏洞数量。
     */
    public $LastScanVulsMiddleNum;

    /**
     * @var integer 最近一次扫描低风险漏洞数量。
     */
    public $LastScanVulsLowNum;

    /**
     * @var integer 最近一次扫描提示信息数量。
     */
    public $LastScanVulsNoticeNum;

    /**
     * @var string 记录添加时间。
     */
    public $CreatedAt;

    /**
     * @var string 记录最近修改时间。
     */
    public $UpdatedAt;

    /**
     * @var integer 速率限制，每秒发送X个HTTP请求。
     */
    public $LastScanRateLimit;

    /**
     * @var integer 最近一次扫描漏洞总数量。
     */
    public $LastScanVulsNum;

    /**
     * @var integer 最近一次扫描提示总数量
     */
    public $LastScanNoticeNum;

    /**
     * @var integer 扫描进度，百分比整数
     */
    public $Progress;

    /**
     * @var integer 云用户appid。
     */
    public $Appid;

    /**
     * @var string 云用户标识。
     */
    public $Uin;

    /**
     * @var integer 网站是否需要登录扫描：0-未知；-1-不需要；1-需要。
     */
    public $NeedLogin;

    /**
     * @var string 登录后的cookie。
     */
    public $LoginCookie;

    /**
     * @var integer 登录后的cookie是否有效：0-无效；1-有效。
     */
    public $LoginCookieValid;

    /**
     * @var string 用于测试cookie是否有效的URL。
     */
    public $LoginCheckUrl;

    /**
     * @var string 用于测试cookie是否有效的关键字。
     */
    public $LoginCheckKw;

    /**
     * @var string 禁止扫描器扫描的目录关键字。
     */
    public $ScanDisallow;

    /**
     * @var string 访问网站的客户端标识。
     */
    public $UserAgent;

    /**
     * @var integer 内容检测状态：0-未检测；1-已检测；
     */
    public $ContentStatus;

    /**
     * @var integer 最近一次扫描内容检测数量
     */
    public $LastScanContentNum;

    /**
     * @param integer $Id 站点ID。
     * @param integer $MonitorId 监控任务ID，为0时表示未加入监控任务。
     * @param string $Url 站点url。
     * @param string $Name 站点名称。
     * @param integer $VerifyStatus 验证状态：0-未验证；1-已验证；2-验证失效，待重新验证。
     * @param integer $MonitorStatus 监测状态：0-未监测；1-监测中；2-暂停监测。
     * @param integer $ScanStatus 扫描状态：0-待扫描（无任何扫描结果）；1-扫描中（正在进行扫描）；2-已扫描（有扫描结果且不正在扫描）；3-扫描完成待同步结果。
     * @param integer $LastScanTaskId 最近一次的AIScanner的扫描任务id，注意取消的情况。
     * @param string $LastScanStartTime 最近一次扫描开始时间。
     * @param string $LastScanFinishTime 最近一次扫描完成时间。
     * @param string $LastScanCancelTime 最近一次取消时间，取消即使用上一次扫描结果。
     * @param integer $LastScanPageCount 最近一次扫描扫描的页面数。
     * @param string $LastScanScannerType normal-正常扫描；deep-深度扫描。
     * @param integer $LastScanVulsHighNum 最近一次扫描高风险漏洞数量。
     * @param integer $LastScanVulsMiddleNum 最近一次扫描中风险漏洞数量。
     * @param integer $LastScanVulsLowNum 最近一次扫描低风险漏洞数量。
     * @param integer $LastScanVulsNoticeNum 最近一次扫描提示信息数量。
     * @param string $CreatedAt 记录添加时间。
     * @param string $UpdatedAt 记录最近修改时间。
     * @param integer $LastScanRateLimit 速率限制，每秒发送X个HTTP请求。
     * @param integer $LastScanVulsNum 最近一次扫描漏洞总数量。
     * @param integer $LastScanNoticeNum 最近一次扫描提示总数量
     * @param integer $Progress 扫描进度，百分比整数
     * @param integer $Appid 云用户appid。
     * @param string $Uin 云用户标识。
     * @param integer $NeedLogin 网站是否需要登录扫描：0-未知；-1-不需要；1-需要。
     * @param string $LoginCookie 登录后的cookie。
     * @param integer $LoginCookieValid 登录后的cookie是否有效：0-无效；1-有效。
     * @param string $LoginCheckUrl 用于测试cookie是否有效的URL。
     * @param string $LoginCheckKw 用于测试cookie是否有效的关键字。
     * @param string $ScanDisallow 禁止扫描器扫描的目录关键字。
     * @param string $UserAgent 访问网站的客户端标识。
     * @param integer $ContentStatus 内容检测状态：0-未检测；1-已检测；
     * @param integer $LastScanContentNum 最近一次扫描内容检测数量
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

        if (array_key_exists("MonitorId",$param) and $param["MonitorId"] !== null) {
            $this->MonitorId = $param["MonitorId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("VerifyStatus",$param) and $param["VerifyStatus"] !== null) {
            $this->VerifyStatus = $param["VerifyStatus"];
        }

        if (array_key_exists("MonitorStatus",$param) and $param["MonitorStatus"] !== null) {
            $this->MonitorStatus = $param["MonitorStatus"];
        }

        if (array_key_exists("ScanStatus",$param) and $param["ScanStatus"] !== null) {
            $this->ScanStatus = $param["ScanStatus"];
        }

        if (array_key_exists("LastScanTaskId",$param) and $param["LastScanTaskId"] !== null) {
            $this->LastScanTaskId = $param["LastScanTaskId"];
        }

        if (array_key_exists("LastScanStartTime",$param) and $param["LastScanStartTime"] !== null) {
            $this->LastScanStartTime = $param["LastScanStartTime"];
        }

        if (array_key_exists("LastScanFinishTime",$param) and $param["LastScanFinishTime"] !== null) {
            $this->LastScanFinishTime = $param["LastScanFinishTime"];
        }

        if (array_key_exists("LastScanCancelTime",$param) and $param["LastScanCancelTime"] !== null) {
            $this->LastScanCancelTime = $param["LastScanCancelTime"];
        }

        if (array_key_exists("LastScanPageCount",$param) and $param["LastScanPageCount"] !== null) {
            $this->LastScanPageCount = $param["LastScanPageCount"];
        }

        if (array_key_exists("LastScanScannerType",$param) and $param["LastScanScannerType"] !== null) {
            $this->LastScanScannerType = $param["LastScanScannerType"];
        }

        if (array_key_exists("LastScanVulsHighNum",$param) and $param["LastScanVulsHighNum"] !== null) {
            $this->LastScanVulsHighNum = $param["LastScanVulsHighNum"];
        }

        if (array_key_exists("LastScanVulsMiddleNum",$param) and $param["LastScanVulsMiddleNum"] !== null) {
            $this->LastScanVulsMiddleNum = $param["LastScanVulsMiddleNum"];
        }

        if (array_key_exists("LastScanVulsLowNum",$param) and $param["LastScanVulsLowNum"] !== null) {
            $this->LastScanVulsLowNum = $param["LastScanVulsLowNum"];
        }

        if (array_key_exists("LastScanVulsNoticeNum",$param) and $param["LastScanVulsNoticeNum"] !== null) {
            $this->LastScanVulsNoticeNum = $param["LastScanVulsNoticeNum"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("LastScanRateLimit",$param) and $param["LastScanRateLimit"] !== null) {
            $this->LastScanRateLimit = $param["LastScanRateLimit"];
        }

        if (array_key_exists("LastScanVulsNum",$param) and $param["LastScanVulsNum"] !== null) {
            $this->LastScanVulsNum = $param["LastScanVulsNum"];
        }

        if (array_key_exists("LastScanNoticeNum",$param) and $param["LastScanNoticeNum"] !== null) {
            $this->LastScanNoticeNum = $param["LastScanNoticeNum"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("NeedLogin",$param) and $param["NeedLogin"] !== null) {
            $this->NeedLogin = $param["NeedLogin"];
        }

        if (array_key_exists("LoginCookie",$param) and $param["LoginCookie"] !== null) {
            $this->LoginCookie = $param["LoginCookie"];
        }

        if (array_key_exists("LoginCookieValid",$param) and $param["LoginCookieValid"] !== null) {
            $this->LoginCookieValid = $param["LoginCookieValid"];
        }

        if (array_key_exists("LoginCheckUrl",$param) and $param["LoginCheckUrl"] !== null) {
            $this->LoginCheckUrl = $param["LoginCheckUrl"];
        }

        if (array_key_exists("LoginCheckKw",$param) and $param["LoginCheckKw"] !== null) {
            $this->LoginCheckKw = $param["LoginCheckKw"];
        }

        if (array_key_exists("ScanDisallow",$param) and $param["ScanDisallow"] !== null) {
            $this->ScanDisallow = $param["ScanDisallow"];
        }

        if (array_key_exists("UserAgent",$param) and $param["UserAgent"] !== null) {
            $this->UserAgent = $param["UserAgent"];
        }

        if (array_key_exists("ContentStatus",$param) and $param["ContentStatus"] !== null) {
            $this->ContentStatus = $param["ContentStatus"];
        }

        if (array_key_exists("LastScanContentNum",$param) and $param["LastScanContentNum"] !== null) {
            $this->LastScanContentNum = $param["LastScanContentNum"];
        }
    }
}
