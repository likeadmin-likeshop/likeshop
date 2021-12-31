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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述HTTP的包头参数
 *
 * @method string getHeaderName() 获取HTTP头名
 * @method void setHeaderName(string $HeaderName) 设置HTTP头名
 * @method string getHeaderValue() 获取HTTP头值
 * @method void setHeaderValue(string $HeaderValue) 设置HTTP头值
 */
class HttpHeaderParam extends AbstractModel
{
    /**
     * @var string HTTP头名
     */
    public $HeaderName;

    /**
     * @var string HTTP头值
     */
    public $HeaderValue;

    /**
     * @param string $HeaderName HTTP头名
     * @param string $HeaderValue HTTP头值
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
        if (array_key_exists("HeaderName",$param) and $param["HeaderName"] !== null) {
            $this->HeaderName = $param["HeaderName"];
        }

        if (array_key_exists("HeaderValue",$param) and $param["HeaderValue"] !== null) {
            $this->HeaderValue = $param["HeaderValue"];
        }
    }
}
