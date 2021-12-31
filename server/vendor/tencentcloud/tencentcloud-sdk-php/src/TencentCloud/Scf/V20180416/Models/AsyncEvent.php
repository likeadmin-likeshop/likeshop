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
 * 异步事件
 *
 * @method string getInvokeRequestId() 获取调用请求id
 * @method void setInvokeRequestId(string $InvokeRequestId) 设置调用请求id
 * @method string getInvokeType() 获取调用类型
 * @method void setInvokeType(string $InvokeType) 设置调用类型
 * @method string getQualifier() 获取函数版本
 * @method void setQualifier(string $Qualifier) 设置函数版本
 * @method string getStatus() 获取事件状态
 * @method void setStatus(string $Status) 设置事件状态
 * @method string getStartTime() 获取调用开始时间，格式: "%Y-%m-%d %H:%M:%S.%f"
 * @method void setStartTime(string $StartTime) 设置调用开始时间，格式: "%Y-%m-%d %H:%M:%S.%f"
 * @method string getEndTime() 获取调用结束时间，格式: "%Y-%m-%d %H:%M:%S.%f"
 * @method void setEndTime(string $EndTime) 设置调用结束时间，格式: "%Y-%m-%d %H:%M:%S.%f"
 */
class AsyncEvent extends AbstractModel
{
    /**
     * @var string 调用请求id
     */
    public $InvokeRequestId;

    /**
     * @var string 调用类型
     */
    public $InvokeType;

    /**
     * @var string 函数版本
     */
    public $Qualifier;

    /**
     * @var string 事件状态
     */
    public $Status;

    /**
     * @var string 调用开始时间，格式: "%Y-%m-%d %H:%M:%S.%f"
     */
    public $StartTime;

    /**
     * @var string 调用结束时间，格式: "%Y-%m-%d %H:%M:%S.%f"
     */
    public $EndTime;

    /**
     * @param string $InvokeRequestId 调用请求id
     * @param string $InvokeType 调用类型
     * @param string $Qualifier 函数版本
     * @param string $Status 事件状态
     * @param string $StartTime 调用开始时间，格式: "%Y-%m-%d %H:%M:%S.%f"
     * @param string $EndTime 调用结束时间，格式: "%Y-%m-%d %H:%M:%S.%f"
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
        if (array_key_exists("InvokeRequestId",$param) and $param["InvokeRequestId"] !== null) {
            $this->InvokeRequestId = $param["InvokeRequestId"];
        }

        if (array_key_exists("InvokeType",$param) and $param["InvokeType"] !== null) {
            $this->InvokeType = $param["InvokeType"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
