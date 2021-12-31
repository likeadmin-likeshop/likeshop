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
namespace TencentCloud\Npp\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Get400Cdr请求参数结构体
 *
 * @method string getBizAppId() 获取业务appid
 * @method void setBizAppId(string $BizAppId) 设置业务appid
 * @method string getCallId() 获取通话唯一标识 callId，即直拨呼叫响应中返回的 callId
 * @method void setCallId(string $CallId) 设置通话唯一标识 callId，即直拨呼叫响应中返回的 callId
 * @method string getSrc() 获取查询主叫用户产生的呼叫话单（0086开头），设置为空表示拉取该时间段的所有话单
 * @method void setSrc(string $Src) 设置查询主叫用户产生的呼叫话单（0086开头），设置为空表示拉取该时间段的所有话单
 * @method string getStartTimeStamp() 获取话单开始时间戳
 * @method void setStartTimeStamp(string $StartTimeStamp) 设置话单开始时间戳
 * @method string getEndTimeStamp() 获取话单结束时间戳
 * @method void setEndTimeStamp(string $EndTimeStamp) 设置话单结束时间戳
 */
class Get400CdrRequest extends AbstractModel
{
    /**
     * @var string 业务appid
     */
    public $BizAppId;

    /**
     * @var string 通话唯一标识 callId，即直拨呼叫响应中返回的 callId
     */
    public $CallId;

    /**
     * @var string 查询主叫用户产生的呼叫话单（0086开头），设置为空表示拉取该时间段的所有话单
     */
    public $Src;

    /**
     * @var string 话单开始时间戳
     */
    public $StartTimeStamp;

    /**
     * @var string 话单结束时间戳
     */
    public $EndTimeStamp;

    /**
     * @param string $BizAppId 业务appid
     * @param string $CallId 通话唯一标识 callId，即直拨呼叫响应中返回的 callId
     * @param string $Src 查询主叫用户产生的呼叫话单（0086开头），设置为空表示拉取该时间段的所有话单
     * @param string $StartTimeStamp 话单开始时间戳
     * @param string $EndTimeStamp 话单结束时间戳
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
        if (array_key_exists("BizAppId",$param) and $param["BizAppId"] !== null) {
            $this->BizAppId = $param["BizAppId"];
        }

        if (array_key_exists("CallId",$param) and $param["CallId"] !== null) {
            $this->CallId = $param["CallId"];
        }

        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = $param["Src"];
        }

        if (array_key_exists("StartTimeStamp",$param) and $param["StartTimeStamp"] !== null) {
            $this->StartTimeStamp = $param["StartTimeStamp"];
        }

        if (array_key_exists("EndTimeStamp",$param) and $param["EndTimeStamp"] !== null) {
            $this->EndTimeStamp = $param["EndTimeStamp"];
        }
    }
}
