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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务信息和告警策略组
 *
 * @method integer getTaskId() 获取任务ID
 * @method void setTaskId(integer $TaskId) 设置任务ID
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method integer getPeriod() 获取任务周期，单位为分钟。目前支持1，5，15，30几种取值
 * @method void setPeriod(integer $Period) 设置任务周期，单位为分钟。目前支持1，5，15，30几种取值
 * @method string getCatTypeName() 获取拨测类型。http, https, ping, tcp 之一
 * @method void setCatTypeName(string $CatTypeName) 设置拨测类型。http, https, ping, tcp 之一
 * @method string getCgiUrl() 获取拨测任务的URL
 * @method void setCgiUrl(string $CgiUrl) 设置拨测任务的URL
 * @method integer getAgentGroupId() 获取拨测分组ID
 * @method void setAgentGroupId(integer $AgentGroupId) 设置拨测分组ID
 * @method integer getPolicyGroupId() 获取告警策略组ID
 * @method void setPolicyGroupId(integer $PolicyGroupId) 设置告警策略组ID
 * @method integer getStatus() 获取任务状态。1表示暂停，2表示运行中，0为初始态
 * @method void setStatus(integer $Status) 设置任务状态。1表示暂停，2表示运行中，0为初始态
 * @method string getAddTime() 获取任务创建时间
 * @method void setAddTime(string $AddTime) 设置任务创建时间
 * @method integer getType() 获取任务类型。0 站点监控，2 可用性监控
 * @method void setType(integer $Type) 设置任务类型。0 站点监控，2 可用性监控
 * @method string getTopicId() 获取绑定的统一告警主题ID
 * @method void setTopicId(string $TopicId) 设置绑定的统一告警主题ID
 * @method integer getAlarmStatus() 获取告警状态。0 未启用，1, 启用
 * @method void setAlarmStatus(integer $AlarmStatus) 设置告警状态。0 未启用，1, 启用
 * @method string getHost() 获取指定的域名
 * @method void setHost(string $Host) 设置指定的域名
 * @method integer getPort() 获取拨测目标的端口号
 * @method void setPort(integer $Port) 设置拨测目标的端口号
 * @method string getCheckStr() 获取要在结果中进行匹配的字符串
 * @method void setCheckStr(string $CheckStr) 设置要在结果中进行匹配的字符串
 * @method integer getCheckType() 获取1 表示通过检查结果是否包含CheckStr 进行校验
 * @method void setCheckType(integer $CheckType) 设置1 表示通过检查结果是否包含CheckStr 进行校验
 * @method string getUserAgent() 获取用户Agent信息
 * @method void setUserAgent(string $UserAgent) 设置用户Agent信息
 * @method string getCookie() 获取设置的Cookie信息
 * @method void setCookie(string $Cookie) 设置设置的Cookie信息
 * @method string getPostData() 获取POST 请求数据。空字符串表示非POST请求
 * @method void setPostData(string $PostData) 设置POST 请求数据。空字符串表示非POST请求
 * @method string getSslVer() 获取SSL协议版本
 * @method void setSslVer(string $SslVer) 设置SSL协议版本
 * @method integer getIsHeader() 获取是否为Header请求。非0 Header 请求
 * @method void setIsHeader(integer $IsHeader) 设置是否为Header请求。非0 Header 请求
 * @method string getDnsSvr() 获取目的DNS服务器
 * @method void setDnsSvr(string $DnsSvr) 设置目的DNS服务器
 * @method string getDnsCheckIp() 获取需要检验是否在DNS IP列表的IP
 * @method void setDnsCheckIp(string $DnsCheckIp) 设置需要检验是否在DNS IP列表的IP
 * @method string getDnsQueryType() 获取DNS查询类型
 * @method void setDnsQueryType(string $DnsQueryType) 设置DNS查询类型
 * @method string getUserName() 获取登录服务器的账号
 * @method void setUserName(string $UserName) 设置登录服务器的账号
 * @method string getPassWord() 获取登录服务器的密码
 * @method void setPassWord(string $PassWord) 设置登录服务器的密码
 * @method integer getUseSecConn() 获取是否使用安全链接SSL， 0 不使用，1 使用
 * @method void setUseSecConn(integer $UseSecConn) 设置是否使用安全链接SSL， 0 不使用，1 使用
 * @method integer getNeedAuth() 获取FTP登录验证方式  0 不验证  1 匿名登录  2 需要身份验证
 * @method void setNeedAuth(integer $NeedAuth) 设置FTP登录验证方式  0 不验证  1 匿名登录  2 需要身份验证
 * @method integer getReqDataType() 获取请求数据类型。0 表示请求为字符串类型。1表示为二进制类型
 * @method void setReqDataType(integer $ReqDataType) 设置请求数据类型。0 表示请求为字符串类型。1表示为二进制类型
 * @method string getReqData() 获取发起TCP, UDP请求的协议请求数据
 * @method void setReqData(string $ReqData) 设置发起TCP, UDP请求的协议请求数据
 * @method integer getRespDataType() 获取响应数据类型。0 表示响应为字符串类型。1表示为二进制类型
 * @method void setRespDataType(integer $RespDataType) 设置响应数据类型。0 表示响应为字符串类型。1表示为二进制类型
 * @method string getRespData() 获取预期的UDP请求的回应数据
 * @method void setRespData(string $RespData) 设置预期的UDP请求的回应数据
 * @method integer getRedirectFollowNum() 获取跟随跳转次数
 * @method void setRedirectFollowNum(integer $RedirectFollowNum) 设置跟随跳转次数
 */
class CatTaskDetail extends AbstractModel
{
    /**
     * @var integer 任务ID
     */
    public $TaskId;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var integer 任务周期，单位为分钟。目前支持1，5，15，30几种取值
     */
    public $Period;

    /**
     * @var string 拨测类型。http, https, ping, tcp 之一
     */
    public $CatTypeName;

    /**
     * @var string 拨测任务的URL
     */
    public $CgiUrl;

    /**
     * @var integer 拨测分组ID
     */
    public $AgentGroupId;

    /**
     * @var integer 告警策略组ID
     */
    public $PolicyGroupId;

    /**
     * @var integer 任务状态。1表示暂停，2表示运行中，0为初始态
     */
    public $Status;

    /**
     * @var string 任务创建时间
     */
    public $AddTime;

    /**
     * @var integer 任务类型。0 站点监控，2 可用性监控
     */
    public $Type;

    /**
     * @var string 绑定的统一告警主题ID
     */
    public $TopicId;

    /**
     * @var integer 告警状态。0 未启用，1, 启用
     */
    public $AlarmStatus;

    /**
     * @var string 指定的域名
     */
    public $Host;

    /**
     * @var integer 拨测目标的端口号
     */
    public $Port;

    /**
     * @var string 要在结果中进行匹配的字符串
     */
    public $CheckStr;

    /**
     * @var integer 1 表示通过检查结果是否包含CheckStr 进行校验
     */
    public $CheckType;

    /**
     * @var string 用户Agent信息
     */
    public $UserAgent;

    /**
     * @var string 设置的Cookie信息
     */
    public $Cookie;

    /**
     * @var string POST 请求数据。空字符串表示非POST请求
     */
    public $PostData;

    /**
     * @var string SSL协议版本
     */
    public $SslVer;

    /**
     * @var integer 是否为Header请求。非0 Header 请求
     */
    public $IsHeader;

    /**
     * @var string 目的DNS服务器
     */
    public $DnsSvr;

    /**
     * @var string 需要检验是否在DNS IP列表的IP
     */
    public $DnsCheckIp;

    /**
     * @var string DNS查询类型
     */
    public $DnsQueryType;

    /**
     * @var string 登录服务器的账号
     */
    public $UserName;

    /**
     * @var string 登录服务器的密码
     */
    public $PassWord;

    /**
     * @var integer 是否使用安全链接SSL， 0 不使用，1 使用
     */
    public $UseSecConn;

    /**
     * @var integer FTP登录验证方式  0 不验证  1 匿名登录  2 需要身份验证
     */
    public $NeedAuth;

    /**
     * @var integer 请求数据类型。0 表示请求为字符串类型。1表示为二进制类型
     */
    public $ReqDataType;

    /**
     * @var string 发起TCP, UDP请求的协议请求数据
     */
    public $ReqData;

    /**
     * @var integer 响应数据类型。0 表示响应为字符串类型。1表示为二进制类型
     */
    public $RespDataType;

    /**
     * @var string 预期的UDP请求的回应数据
     */
    public $RespData;

    /**
     * @var integer 跟随跳转次数
     */
    public $RedirectFollowNum;

    /**
     * @param integer $TaskId 任务ID
     * @param string $TaskName 任务名称
     * @param integer $Period 任务周期，单位为分钟。目前支持1，5，15，30几种取值
     * @param string $CatTypeName 拨测类型。http, https, ping, tcp 之一
     * @param string $CgiUrl 拨测任务的URL
     * @param integer $AgentGroupId 拨测分组ID
     * @param integer $PolicyGroupId 告警策略组ID
     * @param integer $Status 任务状态。1表示暂停，2表示运行中，0为初始态
     * @param string $AddTime 任务创建时间
     * @param integer $Type 任务类型。0 站点监控，2 可用性监控
     * @param string $TopicId 绑定的统一告警主题ID
     * @param integer $AlarmStatus 告警状态。0 未启用，1, 启用
     * @param string $Host 指定的域名
     * @param integer $Port 拨测目标的端口号
     * @param string $CheckStr 要在结果中进行匹配的字符串
     * @param integer $CheckType 1 表示通过检查结果是否包含CheckStr 进行校验
     * @param string $UserAgent 用户Agent信息
     * @param string $Cookie 设置的Cookie信息
     * @param string $PostData POST 请求数据。空字符串表示非POST请求
     * @param string $SslVer SSL协议版本
     * @param integer $IsHeader 是否为Header请求。非0 Header 请求
     * @param string $DnsSvr 目的DNS服务器
     * @param string $DnsCheckIp 需要检验是否在DNS IP列表的IP
     * @param string $DnsQueryType DNS查询类型
     * @param string $UserName 登录服务器的账号
     * @param string $PassWord 登录服务器的密码
     * @param integer $UseSecConn 是否使用安全链接SSL， 0 不使用，1 使用
     * @param integer $NeedAuth FTP登录验证方式  0 不验证  1 匿名登录  2 需要身份验证
     * @param integer $ReqDataType 请求数据类型。0 表示请求为字符串类型。1表示为二进制类型
     * @param string $ReqData 发起TCP, UDP请求的协议请求数据
     * @param integer $RespDataType 响应数据类型。0 表示响应为字符串类型。1表示为二进制类型
     * @param string $RespData 预期的UDP请求的回应数据
     * @param integer $RedirectFollowNum 跟随跳转次数
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("CatTypeName",$param) and $param["CatTypeName"] !== null) {
            $this->CatTypeName = $param["CatTypeName"];
        }

        if (array_key_exists("CgiUrl",$param) and $param["CgiUrl"] !== null) {
            $this->CgiUrl = $param["CgiUrl"];
        }

        if (array_key_exists("AgentGroupId",$param) and $param["AgentGroupId"] !== null) {
            $this->AgentGroupId = $param["AgentGroupId"];
        }

        if (array_key_exists("PolicyGroupId",$param) and $param["PolicyGroupId"] !== null) {
            $this->PolicyGroupId = $param["PolicyGroupId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("AlarmStatus",$param) and $param["AlarmStatus"] !== null) {
            $this->AlarmStatus = $param["AlarmStatus"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("CheckStr",$param) and $param["CheckStr"] !== null) {
            $this->CheckStr = $param["CheckStr"];
        }

        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }

        if (array_key_exists("UserAgent",$param) and $param["UserAgent"] !== null) {
            $this->UserAgent = $param["UserAgent"];
        }

        if (array_key_exists("Cookie",$param) and $param["Cookie"] !== null) {
            $this->Cookie = $param["Cookie"];
        }

        if (array_key_exists("PostData",$param) and $param["PostData"] !== null) {
            $this->PostData = $param["PostData"];
        }

        if (array_key_exists("SslVer",$param) and $param["SslVer"] !== null) {
            $this->SslVer = $param["SslVer"];
        }

        if (array_key_exists("IsHeader",$param) and $param["IsHeader"] !== null) {
            $this->IsHeader = $param["IsHeader"];
        }

        if (array_key_exists("DnsSvr",$param) and $param["DnsSvr"] !== null) {
            $this->DnsSvr = $param["DnsSvr"];
        }

        if (array_key_exists("DnsCheckIp",$param) and $param["DnsCheckIp"] !== null) {
            $this->DnsCheckIp = $param["DnsCheckIp"];
        }

        if (array_key_exists("DnsQueryType",$param) and $param["DnsQueryType"] !== null) {
            $this->DnsQueryType = $param["DnsQueryType"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("PassWord",$param) and $param["PassWord"] !== null) {
            $this->PassWord = $param["PassWord"];
        }

        if (array_key_exists("UseSecConn",$param) and $param["UseSecConn"] !== null) {
            $this->UseSecConn = $param["UseSecConn"];
        }

        if (array_key_exists("NeedAuth",$param) and $param["NeedAuth"] !== null) {
            $this->NeedAuth = $param["NeedAuth"];
        }

        if (array_key_exists("ReqDataType",$param) and $param["ReqDataType"] !== null) {
            $this->ReqDataType = $param["ReqDataType"];
        }

        if (array_key_exists("ReqData",$param) and $param["ReqData"] !== null) {
            $this->ReqData = $param["ReqData"];
        }

        if (array_key_exists("RespDataType",$param) and $param["RespDataType"] !== null) {
            $this->RespDataType = $param["RespDataType"];
        }

        if (array_key_exists("RespData",$param) and $param["RespData"] !== null) {
            $this->RespData = $param["RespData"];
        }

        if (array_key_exists("RedirectFollowNum",$param) and $param["RedirectFollowNum"] !== null) {
            $this->RedirectFollowNum = $param["RedirectFollowNum"];
        }
    }
}
