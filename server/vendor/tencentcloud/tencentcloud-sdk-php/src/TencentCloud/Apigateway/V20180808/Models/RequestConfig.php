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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 前端路径配置
 *
 * @method string getPath() 获取API 的路径，如 /path。
 * @method void setPath(string $Path) 设置API 的路径，如 /path。
 * @method string getMethod() 获取API 的请求方法，如 GET。
 * @method void setMethod(string $Method) 设置API 的请求方法，如 GET。
 */
class RequestConfig extends AbstractModel
{
    /**
     * @var string API 的路径，如 /path。
     */
    public $Path;

    /**
     * @var string API 的请求方法，如 GET。
     */
    public $Method;

    /**
     * @param string $Path API 的路径，如 /path。
     * @param string $Method API 的请求方法，如 GET。
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }
    }
}
