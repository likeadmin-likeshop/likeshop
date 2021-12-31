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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * http头部设置规则。
 *
 * @method string getHeaderMode() 获取http头部设置方式，支持add，set或del，分别表示新增，设置或删除头部。
 * @method void setHeaderMode(string $HeaderMode) 设置http头部设置方式，支持add，set或del，分别表示新增，设置或删除头部。
 * @method string getHeaderName() 获取http头部名称。
 * @method void setHeaderName(string $HeaderName) 设置http头部名称。
 * @method string getHeaderValue() 获取http头部值。
 * @method void setHeaderValue(string $HeaderValue) 设置http头部值。
 */
class HttpHeaderRule extends AbstractModel
{
    /**
     * @var string http头部设置方式，支持add，set或del，分别表示新增，设置或删除头部。
     */
    public $HeaderMode;

    /**
     * @var string http头部名称。
     */
    public $HeaderName;

    /**
     * @var string http头部值。
     */
    public $HeaderValue;

    /**
     * @param string $HeaderMode http头部设置方式，支持add，set或del，分别表示新增，设置或删除头部。
     * @param string $HeaderName http头部名称。
     * @param string $HeaderValue http头部值。
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
        if (array_key_exists("HeaderMode",$param) and $param["HeaderMode"] !== null) {
            $this->HeaderMode = $param["HeaderMode"];
        }

        if (array_key_exists("HeaderName",$param) and $param["HeaderName"] !== null) {
            $this->HeaderName = $param["HeaderName"];
        }

        if (array_key_exists("HeaderValue",$param) and $param["HeaderValue"] !== null) {
            $this->HeaderValue = $param["HeaderValue"];
        }
    }
}
