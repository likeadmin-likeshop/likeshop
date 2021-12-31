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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志信息
 *
 * @method string getFunctionName() 获取函数的名称
 * @method void setFunctionName(string $FunctionName) 设置函数的名称
 * @method string getRetMsg() 获取函数执行完成后的返回值
 * @method void setRetMsg(string $RetMsg) 设置函数执行完成后的返回值
 * @method string getRequestId() 获取执行该函数对应的requestId
 * @method void setRequestId(string $RequestId) 设置执行该函数对应的requestId
 * @method string getStartTime() 获取函数开始执行时的时间点
 * @method void setStartTime(string $StartTime) 设置函数开始执行时的时间点
 * @method integer getRetCode() 获取函数执行结果，如果是 0 表示执行成功，其他值表示失败
 * @method void setRetCode(integer $RetCode) 设置函数执行结果，如果是 0 表示执行成功，其他值表示失败
 * @method integer getInvokeFinished() 获取函数调用是否结束，如果是 1 表示执行结束，其他值表示调用异常
 * @method void setInvokeFinished(integer $InvokeFinished) 设置函数调用是否结束，如果是 1 表示执行结束，其他值表示调用异常
 * @method float getDuration() 获取函数执行耗时，单位为 ms
 * @method void setDuration(float $Duration) 设置函数执行耗时，单位为 ms
 * @method integer getBillDuration() 获取函数计费时间，根据 duration 向上取最近的 100ms，单位为ms
 * @method void setBillDuration(integer $BillDuration) 设置函数计费时间，根据 duration 向上取最近的 100ms，单位为ms
 * @method integer getMemUsage() 获取函数执行时消耗实际内存大小，单位为 Byte
 * @method void setMemUsage(integer $MemUsage) 设置函数执行时消耗实际内存大小，单位为 Byte
 * @method string getLog() 获取函数执行过程中的日志输出
 * @method void setLog(string $Log) 设置函数执行过程中的日志输出
 * @method string getLevel() 获取日志等级
 * @method void setLevel(string $Level) 设置日志等级
 * @method string getSource() 获取日志来源
 * @method void setSource(string $Source) 设置日志来源
 * @method integer getRetryNum() 获取重试次数
 * @method void setRetryNum(integer $RetryNum) 设置重试次数
 */
class FunctionLog extends AbstractModel
{
    /**
     * @var string 函数的名称
     */
    public $FunctionName;

    /**
     * @var string 函数执行完成后的返回值
     */
    public $RetMsg;

    /**
     * @var string 执行该函数对应的requestId
     */
    public $RequestId;

    /**
     * @var string 函数开始执行时的时间点
     */
    public $StartTime;

    /**
     * @var integer 函数执行结果，如果是 0 表示执行成功，其他值表示失败
     */
    public $RetCode;

    /**
     * @var integer 函数调用是否结束，如果是 1 表示执行结束，其他值表示调用异常
     */
    public $InvokeFinished;

    /**
     * @var float 函数执行耗时，单位为 ms
     */
    public $Duration;

    /**
     * @var integer 函数计费时间，根据 duration 向上取最近的 100ms，单位为ms
     */
    public $BillDuration;

    /**
     * @var integer 函数执行时消耗实际内存大小，单位为 Byte
     */
    public $MemUsage;

    /**
     * @var string 函数执行过程中的日志输出
     */
    public $Log;

    /**
     * @var string 日志等级
     */
    public $Level;

    /**
     * @var string 日志来源
     */
    public $Source;

    /**
     * @var integer 重试次数
     */
    public $RetryNum;

    /**
     * @param string $FunctionName 函数的名称
     * @param string $RetMsg 函数执行完成后的返回值
     * @param string $RequestId 执行该函数对应的requestId
     * @param string $StartTime 函数开始执行时的时间点
     * @param integer $RetCode 函数执行结果，如果是 0 表示执行成功，其他值表示失败
     * @param integer $InvokeFinished 函数调用是否结束，如果是 1 表示执行结束，其他值表示调用异常
     * @param float $Duration 函数执行耗时，单位为 ms
     * @param integer $BillDuration 函数计费时间，根据 duration 向上取最近的 100ms，单位为ms
     * @param integer $MemUsage 函数执行时消耗实际内存大小，单位为 Byte
     * @param string $Log 函数执行过程中的日志输出
     * @param string $Level 日志等级
     * @param string $Source 日志来源
     * @param integer $RetryNum 重试次数
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
        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("RetMsg",$param) and $param["RetMsg"] !== null) {
            $this->RetMsg = $param["RetMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("RetCode",$param) and $param["RetCode"] !== null) {
            $this->RetCode = $param["RetCode"];
        }

        if (array_key_exists("InvokeFinished",$param) and $param["InvokeFinished"] !== null) {
            $this->InvokeFinished = $param["InvokeFinished"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("BillDuration",$param) and $param["BillDuration"] !== null) {
            $this->BillDuration = $param["BillDuration"];
        }

        if (array_key_exists("MemUsage",$param) and $param["MemUsage"] !== null) {
            $this->MemUsage = $param["MemUsage"];
        }

        if (array_key_exists("Log",$param) and $param["Log"] !== null) {
            $this->Log = $param["Log"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("RetryNum",$param) and $param["RetryNum"] !== null) {
            $this->RetryNum = $param["RetryNum"];
        }
    }
}
