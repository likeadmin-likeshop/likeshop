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
 * DescribeCallBackStatus请求参数结构体
 *
 * @method string getBizAppId() 获取业务appid
 * @method void setBizAppId(string $BizAppId) 设置业务appid
 * @method string getCallId() 获取回拨请求响应中返回的 callId
 * @method void setCallId(string $CallId) 设置回拨请求响应中返回的 callId
 * @method string getSrc() 获取主叫号码
 * @method void setSrc(string $Src) 设置主叫号码
 * @method string getDst() 获取被叫号码
 * @method void setDst(string $Dst) 设置被叫号码
 * @method string getCallStatus() 获取通话最后状态：0：未知状态 1：主叫响铃中 2：主叫接听 3：被叫响铃中 4：正常通话中 5：通话结束
 * @method void setCallStatus(string $CallStatus) 设置通话最后状态：0：未知状态 1：主叫响铃中 2：主叫接听 3：被叫响铃中 4：正常通话中 5：通话结束
 */
class DescribeCallBackStatusRequest extends AbstractModel
{
    /**
     * @var string 业务appid
     */
    public $BizAppId;

    /**
     * @var string 回拨请求响应中返回的 callId
     */
    public $CallId;

    /**
     * @var string 主叫号码
     */
    public $Src;

    /**
     * @var string 被叫号码
     */
    public $Dst;

    /**
     * @var string 通话最后状态：0：未知状态 1：主叫响铃中 2：主叫接听 3：被叫响铃中 4：正常通话中 5：通话结束
     */
    public $CallStatus;

    /**
     * @param string $BizAppId 业务appid
     * @param string $CallId 回拨请求响应中返回的 callId
     * @param string $Src 主叫号码
     * @param string $Dst 被叫号码
     * @param string $CallStatus 通话最后状态：0：未知状态 1：主叫响铃中 2：主叫接听 3：被叫响铃中 4：正常通话中 5：通话结束
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

        if (array_key_exists("Dst",$param) and $param["Dst"] !== null) {
            $this->Dst = $param["Dst"];
        }

        if (array_key_exists("CallStatus",$param) and $param["CallStatus"] !== null) {
            $this->CallStatus = $param["CallStatus"];
        }
    }
}
