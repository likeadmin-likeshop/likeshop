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
 * 运行函数的返回
 *
 * @method string getLog() 获取表示执行过程中的日志输出，异步调用返回为空
 * @method void setLog(string $Log) 设置表示执行过程中的日志输出，异步调用返回为空
 * @method string getRetMsg() 获取表示执行函数的返回，异步调用返回为空
 * @method void setRetMsg(string $RetMsg) 设置表示执行函数的返回，异步调用返回为空
 * @method string getErrMsg() 获取表示执行函数的错误返回信息，异步调用返回为空
 * @method void setErrMsg(string $ErrMsg) 设置表示执行函数的错误返回信息，异步调用返回为空
 * @method integer getMemUsage() 获取执行函数时的内存大小，单位为Byte，异步调用返回为空
 * @method void setMemUsage(integer $MemUsage) 设置执行函数时的内存大小，单位为Byte，异步调用返回为空
 * @method float getDuration() 获取表示执行函数的耗时，单位是毫秒，异步调用返回为空
 * @method void setDuration(float $Duration) 设置表示执行函数的耗时，单位是毫秒，异步调用返回为空
 * @method integer getBillDuration() 获取表示函数的计费耗时，单位是毫秒，异步调用返回为空
 * @method void setBillDuration(integer $BillDuration) 设置表示函数的计费耗时，单位是毫秒，异步调用返回为空
 * @method string getFunctionRequestId() 获取此次函数执行的Id
 * @method void setFunctionRequestId(string $FunctionRequestId) 设置此次函数执行的Id
 * @method integer getInvokeResult() 获取0为正确，异步调用返回为空
 * @method void setInvokeResult(integer $InvokeResult) 设置0为正确，异步调用返回为空
 */
class Result extends AbstractModel
{
    /**
     * @var string 表示执行过程中的日志输出，异步调用返回为空
     */
    public $Log;

    /**
     * @var string 表示执行函数的返回，异步调用返回为空
     */
    public $RetMsg;

    /**
     * @var string 表示执行函数的错误返回信息，异步调用返回为空
     */
    public $ErrMsg;

    /**
     * @var integer 执行函数时的内存大小，单位为Byte，异步调用返回为空
     */
    public $MemUsage;

    /**
     * @var float 表示执行函数的耗时，单位是毫秒，异步调用返回为空
     */
    public $Duration;

    /**
     * @var integer 表示函数的计费耗时，单位是毫秒，异步调用返回为空
     */
    public $BillDuration;

    /**
     * @var string 此次函数执行的Id
     */
    public $FunctionRequestId;

    /**
     * @var integer 0为正确，异步调用返回为空
     */
    public $InvokeResult;

    /**
     * @param string $Log 表示执行过程中的日志输出，异步调用返回为空
     * @param string $RetMsg 表示执行函数的返回，异步调用返回为空
     * @param string $ErrMsg 表示执行函数的错误返回信息，异步调用返回为空
     * @param integer $MemUsage 执行函数时的内存大小，单位为Byte，异步调用返回为空
     * @param float $Duration 表示执行函数的耗时，单位是毫秒，异步调用返回为空
     * @param integer $BillDuration 表示函数的计费耗时，单位是毫秒，异步调用返回为空
     * @param string $FunctionRequestId 此次函数执行的Id
     * @param integer $InvokeResult 0为正确，异步调用返回为空
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
        if (array_key_exists("Log",$param) and $param["Log"] !== null) {
            $this->Log = $param["Log"];
        }

        if (array_key_exists("RetMsg",$param) and $param["RetMsg"] !== null) {
            $this->RetMsg = $param["RetMsg"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("MemUsage",$param) and $param["MemUsage"] !== null) {
            $this->MemUsage = $param["MemUsage"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("BillDuration",$param) and $param["BillDuration"] !== null) {
            $this->BillDuration = $param["BillDuration"];
        }

        if (array_key_exists("FunctionRequestId",$param) and $param["FunctionRequestId"] !== null) {
            $this->FunctionRequestId = $param["FunctionRequestId"];
        }

        if (array_key_exists("InvokeResult",$param) and $param["InvokeResult"] !== null) {
            $this->InvokeResult = $param["InvokeResult"];
        }
    }
}
