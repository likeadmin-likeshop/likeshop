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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 响应体的返回码
 *
 * @method string getCode() 获取如果成功则返回Success，失败则返回yunapi定义的错误码
 * @method void setCode(string $Code) 设置如果成功则返回Success，失败则返回yunapi定义的错误码
 * @method string getMessage() 获取如果成功则返回Success，失败则返回WAF定义的二级错误码
 * @method void setMessage(string $Message) 设置如果成功则返回Success，失败则返回WAF定义的二级错误码
 */
class ResponseCode extends AbstractModel
{
    /**
     * @var string 如果成功则返回Success，失败则返回yunapi定义的错误码
     */
    public $Code;

    /**
     * @var string 如果成功则返回Success，失败则返回WAF定义的二级错误码
     */
    public $Message;

    /**
     * @param string $Code 如果成功则返回Success，失败则返回yunapi定义的错误码
     * @param string $Message 如果成功则返回Success，失败则返回WAF定义的二级错误码
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
