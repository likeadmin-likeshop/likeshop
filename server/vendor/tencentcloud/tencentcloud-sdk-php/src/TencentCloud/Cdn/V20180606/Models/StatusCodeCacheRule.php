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
 * 状态码缓存过期时间规则配置
 *
 * @method string getStatusCode() 获取http 状态码
支持 403、404 状态码
 * @method void setStatusCode(string $StatusCode) 设置http 状态码
支持 403、404 状态码
 * @method integer getCacheTime() 获取状态码缓存过期时间，单位秒
 * @method void setCacheTime(integer $CacheTime) 设置状态码缓存过期时间，单位秒
 */
class StatusCodeCacheRule extends AbstractModel
{
    /**
     * @var string http 状态码
支持 403、404 状态码
     */
    public $StatusCode;

    /**
     * @var integer 状态码缓存过期时间，单位秒
     */
    public $CacheTime;

    /**
     * @param string $StatusCode http 状态码
支持 403、404 状态码
     * @param integer $CacheTime 状态码缓存过期时间，单位秒
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
        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("CacheTime",$param) and $param["CacheTime"] !== null) {
            $this->CacheTime = $param["CacheTime"];
        }
    }
}
