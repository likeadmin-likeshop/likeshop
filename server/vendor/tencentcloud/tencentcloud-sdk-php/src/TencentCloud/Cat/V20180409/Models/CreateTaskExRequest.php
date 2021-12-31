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
 * CreateTaskEx请求参数结构体
 *
 * @method string getCatTypeName() 获取http, https, ping, tcp, ftp, smtp, udp, dns 之一
 * @method void setCatTypeName(string $CatTypeName) 设置http, https, ping, tcp, ftp, smtp, udp, dns 之一
 * @method string getUrl() 获取拨测的URL， 例如：www.qq.com (URL域名解析需要能解析出具体的IP)
 * @method void setUrl(string $Url) 设置拨测的URL， 例如：www.qq.com (URL域名解析需要能解析出具体的IP)
 * @method integer getPeriod() 获取拨测周期。取值可为1,5,15,30之一, 单位：分钟。精度不能低于用户等级规定的最小精度
 * @method void setPeriod(integer $Period) 设置拨测周期。取值可为1,5,15,30之一, 单位：分钟。精度不能低于用户等级规定的最小精度
 * @method string getTaskName() 获取拨测任务名称不能超过32个字符。同一个用户创建的任务名不可重复
 * @method void setTaskName(string $TaskName) 设置拨测任务名称不能超过32个字符。同一个用户创建的任务名不可重复
 * @method integer getAgentGroupId() 获取拨测分组ID，体现本拨测任务要采用哪些运营商作为拨测源。一般可直接填写本用户的默认拨测分组。参见：DescribeAgentGroups 接口，本参数使用返回结果里的GroupId的值。注意： Type为0时，AgentGroupId为必填
 * @method void setAgentGroupId(integer $AgentGroupId) 设置拨测分组ID，体现本拨测任务要采用哪些运营商作为拨测源。一般可直接填写本用户的默认拨测分组。参见：DescribeAgentGroups 接口，本参数使用返回结果里的GroupId的值。注意： Type为0时，AgentGroupId为必填
 * @method string getHost() 获取指定域名(如需要)
 * @method void setHost(string $Host) 设置指定域名(如需要)
 * @method integer getIsHeader() 获取是否为Header请求（非0 发起Header 请求。为0，且PostData 非空，发起POST请求。为0，PostData 为空，发起GET请求）
 * @method void setIsHeader(integer $IsHeader) 设置是否为Header请求（非0 发起Header 请求。为0，且PostData 非空，发起POST请求。为0，PostData 为空，发起GET请求）
 * @method string getSslVer() 获取URL中含有"https"时有用。缺省为SSLv23。需要为 TLSv1_2, TLSv1_1, TLSv1, SSLv2, SSLv23, SSLv3 之一
 * @method void setSslVer(string $SslVer) 设置URL中含有"https"时有用。缺省为SSLv23。需要为 TLSv1_2, TLSv1_1, TLSv1, SSLv2, SSLv23, SSLv3 之一
 * @method string getPostData() 获取POST请求数据。空字符串表示非POST请求
 * @method void setPostData(string $PostData) 设置POST请求数据。空字符串表示非POST请求
 * @method string getUserAgent() 获取用户Agent信息
 * @method void setUserAgent(string $UserAgent) 设置用户Agent信息
 * @method string getCheckStr() 获取要在结果中进行匹配的字符串
 * @method void setCheckStr(string $CheckStr) 设置要在结果中进行匹配的字符串
 * @method integer getCheckType() 获取1 表示通过检查结果是否包含CheckStr 进行校验
 * @method void setCheckType(integer $CheckType) 设置1 表示通过检查结果是否包含CheckStr 进行校验
 * @method string getCookie() 获取需要设置的Cookie信息
 * @method void setCookie(string $Cookie) 设置需要设置的Cookie信息
 * @method integer getTaskId() 获取任务ID，用于验证且修改任务时传入原任务ID
 * @method void setTaskId(integer $TaskId) 设置任务ID，用于验证且修改任务时传入原任务ID
 * @method string getUserName() 获取登录服务器的账号。如果为空字符串，表示不用校验用户密码。只做简单连接服务器的拨测
 * @method void setUserName(string $UserName) 设置登录服务器的账号。如果为空字符串，表示不用校验用户密码。只做简单连接服务器的拨测
 * @method string getPassWord() 获取登录服务器的密码
 * @method void setPassWord(string $PassWord) 设置登录服务器的密码
 * @method integer getReqDataType() 获取缺省为0。0 表示请求为字符串类型。1表示为二进制类型
 * @method void setReqDataType(integer $ReqDataType) 设置缺省为0。0 表示请求为字符串类型。1表示为二进制类型
 * @method string getReqData() 获取发起TCP, UDP请求的协议请求数据
 * @method void setReqData(string $ReqData) 设置发起TCP, UDP请求的协议请求数据
 * @method integer getRespDataType() 获取缺省为0。0 表示响应为字符串类型。1表示为二进制类型
 * @method void setRespDataType(integer $RespDataType) 设置缺省为0。0 表示响应为字符串类型。1表示为二进制类型
 * @method string getRespData() 获取预期的UDP请求的回应数据。字符串型，只需要返回的结果里包含本字符串算校验通过。二进制型，则需要严格等于才算通过
 * @method void setRespData(string $RespData) 设置预期的UDP请求的回应数据。字符串型，只需要返回的结果里包含本字符串算校验通过。二进制型，则需要严格等于才算通过
 * @method string getDnsSvr() 获取目的DNS服务器  可以为空字符串
 * @method void setDnsSvr(string $DnsSvr) 设置目的DNS服务器  可以为空字符串
 * @method string getDnsCheckIp() 获取需要检验是否在DNS IP列表的IP。可以为空字符串，表示不校验
 * @method void setDnsCheckIp(string $DnsCheckIp) 设置需要检验是否在DNS IP列表的IP。可以为空字符串，表示不校验
 * @method string getDnsQueryType() 获取需要为下列值之一。缺省为A。A, MX, NS, CNAME, TXT, ANY
 * @method void setDnsQueryType(string $DnsQueryType) 设置需要为下列值之一。缺省为A。A, MX, NS, CNAME, TXT, ANY
 * @method integer getUseSecConn() 获取是否使用安全链接SSL， 0 不使用，1 使用
 * @method void setUseSecConn(integer $UseSecConn) 设置是否使用安全链接SSL， 0 不使用，1 使用
 * @method integer getNeedAuth() 获取FTP登录验证方式， 0 不验证 ， 1 匿名登录， 2 需要身份验证
 * @method void setNeedAuth(integer $NeedAuth) 设置FTP登录验证方式， 0 不验证 ， 1 匿名登录， 2 需要身份验证
 * @method integer getPort() 获取拨测目标的端口号
 * @method void setPort(integer $Port) 设置拨测目标的端口号
 * @method integer getType() 获取Type=0 默认 （站点监控）Type=2 可用率监控
 * @method void setType(integer $Type) 设置Type=0 默认 （站点监控）Type=2 可用率监控
 * @method integer getIsVerify() 获取IsVerify=0 非验证任务 IsVerify=1 验证任务，不传则默认为0
 * @method void setIsVerify(integer $IsVerify) 设置IsVerify=0 非验证任务 IsVerify=1 验证任务，不传则默认为0
 * @method integer getRedirectFollowNum() 获取跟随跳转次数，取值范围0-5，不传则表示不跟随
 * @method void setRedirectFollowNum(integer $RedirectFollowNum) 设置跟随跳转次数，取值范围0-5，不传则表示不跟随
 */
class CreateTaskExRequest extends AbstractModel
{
    /**
     * @var string http, https, ping, tcp, ftp, smtp, udp, dns 之一
     */
    public $CatTypeName;

    /**
     * @var string 拨测的URL， 例如：www.qq.com (URL域名解析需要能解析出具体的IP)
     */
    public $Url;

    /**
     * @var integer 拨测周期。取值可为1,5,15,30之一, 单位：分钟。精度不能低于用户等级规定的最小精度
     */
    public $Period;

    /**
     * @var string 拨测任务名称不能超过32个字符。同一个用户创建的任务名不可重复
     */
    public $TaskName;

    /**
     * @var integer 拨测分组ID，体现本拨测任务要采用哪些运营商作为拨测源。一般可直接填写本用户的默认拨测分组。参见：DescribeAgentGroups 接口，本参数使用返回结果里的GroupId的值。注意： Type为0时，AgentGroupId为必填
     */
    public $AgentGroupId;

    /**
     * @var string 指定域名(如需要)
     */
    public $Host;

    /**
     * @var integer 是否为Header请求（非0 发起Header 请求。为0，且PostData 非空，发起POST请求。为0，PostData 为空，发起GET请求）
     */
    public $IsHeader;

    /**
     * @var string URL中含有"https"时有用。缺省为SSLv23。需要为 TLSv1_2, TLSv1_1, TLSv1, SSLv2, SSLv23, SSLv3 之一
     */
    public $SslVer;

    /**
     * @var string POST请求数据。空字符串表示非POST请求
     */
    public $PostData;

    /**
     * @var string 用户Agent信息
     */
    public $UserAgent;

    /**
     * @var string 要在结果中进行匹配的字符串
     */
    public $CheckStr;

    /**
     * @var integer 1 表示通过检查结果是否包含CheckStr 进行校验
     */
    public $CheckType;

    /**
     * @var string 需要设置的Cookie信息
     */
    public $Cookie;

    /**
     * @var integer 任务ID，用于验证且修改任务时传入原任务ID
     */
    public $TaskId;

    /**
     * @var string 登录服务器的账号。如果为空字符串，表示不用校验用户密码。只做简单连接服务器的拨测
     */
    public $UserName;

    /**
     * @var string 登录服务器的密码
     */
    public $PassWord;

    /**
     * @var integer 缺省为0。0 表示请求为字符串类型。1表示为二进制类型
     */
    public $ReqDataType;

    /**
     * @var string 发起TCP, UDP请求的协议请求数据
     */
    public $ReqData;

    /**
     * @var integer 缺省为0。0 表示响应为字符串类型。1表示为二进制类型
     */
    public $RespDataType;

    /**
     * @var string 预期的UDP请求的回应数据。字符串型，只需要返回的结果里包含本字符串算校验通过。二进制型，则需要严格等于才算通过
     */
    public $RespData;

    /**
     * @var string 目的DNS服务器  可以为空字符串
     */
    public $DnsSvr;

    /**
     * @var string 需要检验是否在DNS IP列表的IP。可以为空字符串，表示不校验
     */
    public $DnsCheckIp;

    /**
     * @var string 需要为下列值之一。缺省为A。A, MX, NS, CNAME, TXT, ANY
     */
    public $DnsQueryType;

    /**
     * @var integer 是否使用安全链接SSL， 0 不使用，1 使用
     */
    public $UseSecConn;

    /**
     * @var integer FTP登录验证方式， 0 不验证 ， 1 匿名登录， 2 需要身份验证
     */
    public $NeedAuth;

    /**
     * @var integer 拨测目标的端口号
     */
    public $Port;

    /**
     * @var integer Type=0 默认 （站点监控）Type=2 可用率监控
     */
    public $Type;

    /**
     * @var integer IsVerify=0 非验证任务 IsVerify=1 验证任务，不传则默认为0
     */
    public $IsVerify;

    /**
     * @var integer 跟随跳转次数，取值范围0-5，不传则表示不跟随
     */
    public $RedirectFollowNum;

    /**
     * @param string $CatTypeName http, https, ping, tcp, ftp, smtp, udp, dns 之一
     * @param string $Url 拨测的URL， 例如：www.qq.com (URL域名解析需要能解析出具体的IP)
     * @param integer $Period 拨测周期。取值可为1,5,15,30之一, 单位：分钟。精度不能低于用户等级规定的最小精度
     * @param string $TaskName 拨测任务名称不能超过32个字符。同一个用户创建的任务名不可重复
     * @param integer $AgentGroupId 拨测分组ID，体现本拨测任务要采用哪些运营商作为拨测源。一般可直接填写本用户的默认拨测分组。参见：DescribeAgentGroups 接口，本参数使用返回结果里的GroupId的值。注意： Type为0时，AgentGroupId为必填
     * @param string $Host 指定域名(如需要)
     * @param integer $IsHeader 是否为Header请求（非0 发起Header 请求。为0，且PostData 非空，发起POST请求。为0，PostData 为空，发起GET请求）
     * @param string $SslVer URL中含有"https"时有用。缺省为SSLv23。需要为 TLSv1_2, TLSv1_1, TLSv1, SSLv2, SSLv23, SSLv3 之一
     * @param string $PostData POST请求数据。空字符串表示非POST请求
     * @param string $UserAgent 用户Agent信息
     * @param string $CheckStr 要在结果中进行匹配的字符串
     * @param integer $CheckType 1 表示通过检查结果是否包含CheckStr 进行校验
     * @param string $Cookie 需要设置的Cookie信息
     * @param integer $TaskId 任务ID，用于验证且修改任务时传入原任务ID
     * @param string $UserName 登录服务器的账号。如果为空字符串，表示不用校验用户密码。只做简单连接服务器的拨测
     * @param string $PassWord 登录服务器的密码
     * @param integer $ReqDataType 缺省为0。0 表示请求为字符串类型。1表示为二进制类型
     * @param string $ReqData 发起TCP, UDP请求的协议请求数据
     * @param integer $RespDataType 缺省为0。0 表示响应为字符串类型。1表示为二进制类型
     * @param string $RespData 预期的UDP请求的回应数据。字符串型，只需要返回的结果里包含本字符串算校验通过。二进制型，则需要严格等于才算通过
     * @param string $DnsSvr 目的DNS服务器  可以为空字符串
     * @param string $DnsCheckIp 需要检验是否在DNS IP列表的IP。可以为空字符串，表示不校验
     * @param string $DnsQueryType 需要为下列值之一。缺省为A。A, MX, NS, CNAME, TXT, ANY
     * @param integer $UseSecConn 是否使用安全链接SSL， 0 不使用，1 使用
     * @param integer $NeedAuth FTP登录验证方式， 0 不验证 ， 1 匿名登录， 2 需要身份验证
     * @param integer $Port 拨测目标的端口号
     * @param integer $Type Type=0 默认 （站点监控）Type=2 可用率监控
     * @param integer $IsVerify IsVerify=0 非验证任务 IsVerify=1 验证任务，不传则默认为0
     * @param integer $RedirectFollowNum 跟随跳转次数，取值范围0-5，不传则表示不跟随
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
        if (array_key_exists("CatTypeName",$param) and $param["CatTypeName"] !== null) {
            $this->CatTypeName = $param["CatTypeName"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("AgentGroupId",$param) and $param["AgentGroupId"] !== null) {
            $this->AgentGroupId = $param["AgentGroupId"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("IsHeader",$param) and $param["IsHeader"] !== null) {
            $this->IsHeader = $param["IsHeader"];
        }

        if (array_key_exists("SslVer",$param) and $param["SslVer"] !== null) {
            $this->SslVer = $param["SslVer"];
        }

        if (array_key_exists("PostData",$param) and $param["PostData"] !== null) {
            $this->PostData = $param["PostData"];
        }

        if (array_key_exists("UserAgent",$param) and $param["UserAgent"] !== null) {
            $this->UserAgent = $param["UserAgent"];
        }

        if (array_key_exists("CheckStr",$param) and $param["CheckStr"] !== null) {
            $this->CheckStr = $param["CheckStr"];
        }

        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }

        if (array_key_exists("Cookie",$param) and $param["Cookie"] !== null) {
            $this->Cookie = $param["Cookie"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("PassWord",$param) and $param["PassWord"] !== null) {
            $this->PassWord = $param["PassWord"];
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

        if (array_key_exists("DnsSvr",$param) and $param["DnsSvr"] !== null) {
            $this->DnsSvr = $param["DnsSvr"];
        }

        if (array_key_exists("DnsCheckIp",$param) and $param["DnsCheckIp"] !== null) {
            $this->DnsCheckIp = $param["DnsCheckIp"];
        }

        if (array_key_exists("DnsQueryType",$param) and $param["DnsQueryType"] !== null) {
            $this->DnsQueryType = $param["DnsQueryType"];
        }

        if (array_key_exists("UseSecConn",$param) and $param["UseSecConn"] !== null) {
            $this->UseSecConn = $param["UseSecConn"];
        }

        if (array_key_exists("NeedAuth",$param) and $param["NeedAuth"] !== null) {
            $this->NeedAuth = $param["NeedAuth"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("IsVerify",$param) and $param["IsVerify"] !== null) {
            $this->IsVerify = $param["IsVerify"];
        }

        if (array_key_exists("RedirectFollowNum",$param) and $param["RedirectFollowNum"] !== null) {
            $this->RedirectFollowNum = $param["RedirectFollowNum"];
        }
    }
}
