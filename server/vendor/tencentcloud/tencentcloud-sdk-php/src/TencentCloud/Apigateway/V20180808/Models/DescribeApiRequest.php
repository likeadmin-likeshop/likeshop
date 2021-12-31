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
 * DescribeApi请求参数结构体
 *
 * @method string getServiceId() 获取API 所在的服务唯一 ID。
 * @method void setServiceId(string $ServiceId) 设置API 所在的服务唯一 ID。
 * @method string getApiId() 获取API 接口唯一 ID。
 * @method void setApiId(string $ApiId) 设置API 接口唯一 ID。
 */
class DescribeApiRequest extends AbstractModel
{
    /**
     * @var string API 所在的服务唯一 ID。
     */
    public $ServiceId;

    /**
     * @var string API 接口唯一 ID。
     */
    public $ApiId;

    /**
     * @param string $ServiceId API 所在的服务唯一 ID。
     * @param string $ApiId API 接口唯一 ID。
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }
    }
}
