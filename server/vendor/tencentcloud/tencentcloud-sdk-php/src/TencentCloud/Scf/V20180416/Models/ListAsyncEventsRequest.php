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
 * ListAsyncEvents请求参数结构体
 *
 * @method string getFunctionName() 获取函数名称
 * @method void setFunctionName(string $FunctionName) 设置函数名称
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getQualifier() 获取过滤条件，函数版本
 * @method void setQualifier(string $Qualifier) 设置过滤条件，函数版本
 * @method array getInvokeType() 获取过滤条件，调用类型列表
 * @method void setInvokeType(array $InvokeType) 设置过滤条件，调用类型列表
 * @method array getStatus() 获取过滤条件，事件状态列表
 * @method void setStatus(array $Status) 设置过滤条件，事件状态列表
 * @method TimeInterval getStartTimeInterval() 获取过滤条件，开始执行时间左闭右开区间
 * @method void setStartTimeInterval(TimeInterval $StartTimeInterval) 设置过滤条件，开始执行时间左闭右开区间
 * @method TimeInterval getEndTimeInterval() 获取过滤条件，结束执行时间左闭右开区间
 * @method void setEndTimeInterval(TimeInterval $EndTimeInterval) 设置过滤条件，结束执行时间左闭右开区间
 * @method string getOrder() 获取可选值 ASC 和 DESC，默认 DESC
 * @method void setOrder(string $Order) 设置可选值 ASC 和 DESC，默认 DESC
 * @method string getOrderby() 获取可选值 StartTime 和 EndTime，默认值 StartTime
 * @method void setOrderby(string $Orderby) 设置可选值 StartTime 和 EndTime，默认值 StartTime
 * @method integer getOffset() 获取数据偏移量，默认值为 0
 * @method void setOffset(integer $Offset) 设置数据偏移量，默认值为 0
 * @method integer getLimit() 获取返回数据长度，默认值为 20，最大值 100
 * @method void setLimit(integer $Limit) 设置返回数据长度，默认值为 20，最大值 100
 * @method string getInvokeRequestId() 获取过滤条件，事件调用请求id
 * @method void setInvokeRequestId(string $InvokeRequestId) 设置过滤条件，事件调用请求id
 */
class ListAsyncEventsRequest extends AbstractModel
{
    /**
     * @var string 函数名称
     */
    public $FunctionName;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 过滤条件，函数版本
     */
    public $Qualifier;

    /**
     * @var array 过滤条件，调用类型列表
     */
    public $InvokeType;

    /**
     * @var array 过滤条件，事件状态列表
     */
    public $Status;

    /**
     * @var TimeInterval 过滤条件，开始执行时间左闭右开区间
     */
    public $StartTimeInterval;

    /**
     * @var TimeInterval 过滤条件，结束执行时间左闭右开区间
     */
    public $EndTimeInterval;

    /**
     * @var string 可选值 ASC 和 DESC，默认 DESC
     */
    public $Order;

    /**
     * @var string 可选值 StartTime 和 EndTime，默认值 StartTime
     */
    public $Orderby;

    /**
     * @var integer 数据偏移量，默认值为 0
     */
    public $Offset;

    /**
     * @var integer 返回数据长度，默认值为 20，最大值 100
     */
    public $Limit;

    /**
     * @var string 过滤条件，事件调用请求id
     */
    public $InvokeRequestId;

    /**
     * @param string $FunctionName 函数名称
     * @param string $Namespace 命名空间
     * @param string $Qualifier 过滤条件，函数版本
     * @param array $InvokeType 过滤条件，调用类型列表
     * @param array $Status 过滤条件，事件状态列表
     * @param TimeInterval $StartTimeInterval 过滤条件，开始执行时间左闭右开区间
     * @param TimeInterval $EndTimeInterval 过滤条件，结束执行时间左闭右开区间
     * @param string $Order 可选值 ASC 和 DESC，默认 DESC
     * @param string $Orderby 可选值 StartTime 和 EndTime，默认值 StartTime
     * @param integer $Offset 数据偏移量，默认值为 0
     * @param integer $Limit 返回数据长度，默认值为 20，最大值 100
     * @param string $InvokeRequestId 过滤条件，事件调用请求id
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

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }

        if (array_key_exists("InvokeType",$param) and $param["InvokeType"] !== null) {
            $this->InvokeType = $param["InvokeType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTimeInterval",$param) and $param["StartTimeInterval"] !== null) {
            $this->StartTimeInterval = new TimeInterval();
            $this->StartTimeInterval->deserialize($param["StartTimeInterval"]);
        }

        if (array_key_exists("EndTimeInterval",$param) and $param["EndTimeInterval"] !== null) {
            $this->EndTimeInterval = new TimeInterval();
            $this->EndTimeInterval->deserialize($param["EndTimeInterval"]);
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Orderby",$param) and $param["Orderby"] !== null) {
            $this->Orderby = $param["Orderby"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("InvokeRequestId",$param) and $param["InvokeRequestId"] !== null) {
            $this->InvokeRequestId = $param["InvokeRequestId"];
        }
    }
}
