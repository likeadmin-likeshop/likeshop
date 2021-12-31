<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace TencentCloud\Common\Exception;

/**
 * sdk异常类
 * @package TencentCloud\Common\Exception
 */
class TencentCloudSDKException extends \Exception
{
    /**
     * @var string 请求id
     */
    private $requestId;

    private $errorCode;


    /**
     * TencentCloudSDKException constructor.
     * @param string $code 异常错误码
     * @param string $message 异常信息
     * @param string $requestId 请求ID
     */
    public function __construct($code = "", $message = "",  $requestId = "")
    {
        parent::__construct($message, 0);
        $this->errorCode = $code;
        $this->requestId = $requestId;
    }

    /**
     * 返回请求id
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * 返回错误码
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * 格式化输出异常码，异常信息，请求id
     * @return string
     */
    public function __toString()
    {
        return "[".__CLASS__."]"." code:".$this->errorCode.
            " message:".$this->getMessage().
            " requestId:".$this->requestId;
    }
}

