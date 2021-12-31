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
 * 拨测记录
 *
 * @method string getTime() 获取拨测时间点
 * @method void setTime(string $Time) 设置拨测时间点
 * @method string getCatTypeName() 获取拨测类型
 * @method void setCatTypeName(string $CatTypeName) 设置拨测类型
 * @method integer getTaskId() 获取任务ID
 * @method void setTaskId(integer $TaskId) 设置任务ID
 * @method string getCity() 获取拨测点所在城市
 * @method void setCity(string $City) 设置拨测点所在城市
 * @method string getIsp() 获取拨测点所在运营商
 * @method void setIsp(string $Isp) 设置拨测点所在运营商
 * @method string getServerIp() 获取被拨测Server的IP
 * @method void setServerIp(string $ServerIp) 设置被拨测Server的IP
 * @method string getDomainName() 获取被拨测Server的域名
 * @method void setDomainName(string $DomainName) 设置被拨测Server的域名
 * @method integer getTotalTime() 获取执行耗时，单位毫秒
 * @method void setTotalTime(integer $TotalTime) 设置执行耗时，单位毫秒
 * @method integer getResultType() 获取成功失败(1 失败，0 成功）
 * @method void setResultType(integer $ResultType) 设置成功失败(1 失败，0 成功）
 * @method integer getResultCode() 获取失败错误码
 * @method void setResultCode(integer $ResultCode) 设置失败错误码
 * @method integer getReqPkgSize() 获取请求包大小
 * @method void setReqPkgSize(integer $ReqPkgSize) 设置请求包大小
 * @method integer getRspPkgSize() 获取回应包大小
 * @method void setRspPkgSize(integer $RspPkgSize) 设置回应包大小
 * @method string getReqMsg() 获取拨测请求
 * @method void setReqMsg(string $ReqMsg) 设置拨测请求
 * @method string getRespMsg() 获取拨测回应
 * @method void setRespMsg(string $RespMsg) 设置拨测回应
 * @method string getClientIp() 获取客户端IP
 * @method void setClientIp(string $ClientIp) 设置客户端IP
 * @method string getCityName() 获取拨测点所在城市名称
 * @method void setCityName(string $CityName) 设置拨测点所在城市名称
 * @method string getIspName() 获取拨测点所在运营商名称
 * @method void setIspName(string $IspName) 设置拨测点所在运营商名称
 * @method integer getParseTime() 获取解析耗时，单位毫秒
 * @method void setParseTime(integer $ParseTime) 设置解析耗时，单位毫秒
 * @method integer getConnectTime() 获取连接耗时，单位毫秒
 * @method void setConnectTime(integer $ConnectTime) 设置连接耗时，单位毫秒
 * @method integer getSendTime() 获取数据发送耗时，单位毫秒
 * @method void setSendTime(integer $SendTime) 设置数据发送耗时，单位毫秒
 * @method integer getWaitTime() 获取等待耗时，单位毫秒
 * @method void setWaitTime(integer $WaitTime) 设置等待耗时，单位毫秒
 * @method integer getReceiveTime() 获取接收耗时，单位毫秒
 * @method void setReceiveTime(integer $ReceiveTime) 设置接收耗时，单位毫秒
 */
class CatLog extends AbstractModel
{
    /**
     * @var string 拨测时间点
     */
    public $Time;

    /**
     * @var string 拨测类型
     */
    public $CatTypeName;

    /**
     * @var integer 任务ID
     */
    public $TaskId;

    /**
     * @var string 拨测点所在城市
     */
    public $City;

    /**
     * @var string 拨测点所在运营商
     */
    public $Isp;

    /**
     * @var string 被拨测Server的IP
     */
    public $ServerIp;

    /**
     * @var string 被拨测Server的域名
     */
    public $DomainName;

    /**
     * @var integer 执行耗时，单位毫秒
     */
    public $TotalTime;

    /**
     * @var integer 成功失败(1 失败，0 成功）
     */
    public $ResultType;

    /**
     * @var integer 失败错误码
     */
    public $ResultCode;

    /**
     * @var integer 请求包大小
     */
    public $ReqPkgSize;

    /**
     * @var integer 回应包大小
     */
    public $RspPkgSize;

    /**
     * @var string 拨测请求
     */
    public $ReqMsg;

    /**
     * @var string 拨测回应
     */
    public $RespMsg;

    /**
     * @var string 客户端IP
     */
    public $ClientIp;

    /**
     * @var string 拨测点所在城市名称
     */
    public $CityName;

    /**
     * @var string 拨测点所在运营商名称
     */
    public $IspName;

    /**
     * @var integer 解析耗时，单位毫秒
     */
    public $ParseTime;

    /**
     * @var integer 连接耗时，单位毫秒
     */
    public $ConnectTime;

    /**
     * @var integer 数据发送耗时，单位毫秒
     */
    public $SendTime;

    /**
     * @var integer 等待耗时，单位毫秒
     */
    public $WaitTime;

    /**
     * @var integer 接收耗时，单位毫秒
     */
    public $ReceiveTime;

    /**
     * @param string $Time 拨测时间点
     * @param string $CatTypeName 拨测类型
     * @param integer $TaskId 任务ID
     * @param string $City 拨测点所在城市
     * @param string $Isp 拨测点所在运营商
     * @param string $ServerIp 被拨测Server的IP
     * @param string $DomainName 被拨测Server的域名
     * @param integer $TotalTime 执行耗时，单位毫秒
     * @param integer $ResultType 成功失败(1 失败，0 成功）
     * @param integer $ResultCode 失败错误码
     * @param integer $ReqPkgSize 请求包大小
     * @param integer $RspPkgSize 回应包大小
     * @param string $ReqMsg 拨测请求
     * @param string $RespMsg 拨测回应
     * @param string $ClientIp 客户端IP
     * @param string $CityName 拨测点所在城市名称
     * @param string $IspName 拨测点所在运营商名称
     * @param integer $ParseTime 解析耗时，单位毫秒
     * @param integer $ConnectTime 连接耗时，单位毫秒
     * @param integer $SendTime 数据发送耗时，单位毫秒
     * @param integer $WaitTime 等待耗时，单位毫秒
     * @param integer $ReceiveTime 接收耗时，单位毫秒
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("CatTypeName",$param) and $param["CatTypeName"] !== null) {
            $this->CatTypeName = $param["CatTypeName"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }

        if (array_key_exists("ServerIp",$param) and $param["ServerIp"] !== null) {
            $this->ServerIp = $param["ServerIp"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("TotalTime",$param) and $param["TotalTime"] !== null) {
            $this->TotalTime = $param["TotalTime"];
        }

        if (array_key_exists("ResultType",$param) and $param["ResultType"] !== null) {
            $this->ResultType = $param["ResultType"];
        }

        if (array_key_exists("ResultCode",$param) and $param["ResultCode"] !== null) {
            $this->ResultCode = $param["ResultCode"];
        }

        if (array_key_exists("ReqPkgSize",$param) and $param["ReqPkgSize"] !== null) {
            $this->ReqPkgSize = $param["ReqPkgSize"];
        }

        if (array_key_exists("RspPkgSize",$param) and $param["RspPkgSize"] !== null) {
            $this->RspPkgSize = $param["RspPkgSize"];
        }

        if (array_key_exists("ReqMsg",$param) and $param["ReqMsg"] !== null) {
            $this->ReqMsg = $param["ReqMsg"];
        }

        if (array_key_exists("RespMsg",$param) and $param["RespMsg"] !== null) {
            $this->RespMsg = $param["RespMsg"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("CityName",$param) and $param["CityName"] !== null) {
            $this->CityName = $param["CityName"];
        }

        if (array_key_exists("IspName",$param) and $param["IspName"] !== null) {
            $this->IspName = $param["IspName"];
        }

        if (array_key_exists("ParseTime",$param) and $param["ParseTime"] !== null) {
            $this->ParseTime = $param["ParseTime"];
        }

        if (array_key_exists("ConnectTime",$param) and $param["ConnectTime"] !== null) {
            $this->ConnectTime = $param["ConnectTime"];
        }

        if (array_key_exists("SendTime",$param) and $param["SendTime"] !== null) {
            $this->SendTime = $param["SendTime"];
        }

        if (array_key_exists("WaitTime",$param) and $param["WaitTime"] !== null) {
            $this->WaitTime = $param["WaitTime"];
        }

        if (array_key_exists("ReceiveTime",$param) and $param["ReceiveTime"] !== null) {
            $this->ReceiveTime = $param["ReceiveTime"];
        }
    }
}
