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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回调事件信息
 *
 * @method string getEventTime() 获取事件时间
 * @method void setEventTime(string $EventTime) 设置事件时间
 * @method integer getEventType() 获取事件类型
 * @method void setEventType(integer $EventType) 设置事件类型
 * @method string getRequest() 获取回调请求
 * @method void setRequest(string $Request) 设置回调请求
 * @method string getResponse() 获取回调响应
 * @method void setResponse(string $Response) 设置回调响应
 * @method string getResponseTime() 获取客户接口响应时间
 * @method void setResponseTime(string $ResponseTime) 设置客户接口响应时间
 * @method integer getResultCode() 获取回调结果
 * @method void setResultCode(integer $ResultCode) 设置回调结果
 * @method string getStreamId() 获取流名称
 * @method void setStreamId(string $StreamId) 设置流名称
 */
class CallbackEventInfo extends AbstractModel
{
    /**
     * @var string 事件时间
     */
    public $EventTime;

    /**
     * @var integer 事件类型
     */
    public $EventType;

    /**
     * @var string 回调请求
     */
    public $Request;

    /**
     * @var string 回调响应
     */
    public $Response;

    /**
     * @var string 客户接口响应时间
     */
    public $ResponseTime;

    /**
     * @var integer 回调结果
     */
    public $ResultCode;

    /**
     * @var string 流名称
     */
    public $StreamId;

    /**
     * @param string $EventTime 事件时间
     * @param integer $EventType 事件类型
     * @param string $Request 回调请求
     * @param string $Response 回调响应
     * @param string $ResponseTime 客户接口响应时间
     * @param integer $ResultCode 回调结果
     * @param string $StreamId 流名称
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
        if (array_key_exists("EventTime",$param) and $param["EventTime"] !== null) {
            $this->EventTime = $param["EventTime"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("Request",$param) and $param["Request"] !== null) {
            $this->Request = $param["Request"];
        }

        if (array_key_exists("Response",$param) and $param["Response"] !== null) {
            $this->Response = $param["Response"];
        }

        if (array_key_exists("ResponseTime",$param) and $param["ResponseTime"] !== null) {
            $this->ResponseTime = $param["ResponseTime"];
        }

        if (array_key_exists("ResultCode",$param) and $param["ResultCode"] !== null) {
            $this->ResultCode = $param["ResultCode"];
        }

        if (array_key_exists("StreamId",$param) and $param["StreamId"] !== null) {
            $this->StreamId = $param["StreamId"];
        }
    }
}
