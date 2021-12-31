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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateBucketCORSOpt请求参数结构体
 *
 * @method array getAllowedOrigins() 获取允许的访问来源;具体参见 [cos文档](https://cloud.tencent.com/document/product/436/8279)
 * @method void setAllowedOrigins(array $AllowedOrigins) 设置允许的访问来源;具体参见 [cos文档](https://cloud.tencent.com/document/product/436/8279)
 * @method array getAllowedMethods() 获取允许的 HTTP 操作方法;可以配置多个:PUT、GET、POST、HEAD。[cos文档](https://cloud.tencent.com/document/product/436/8279)
 * @method void setAllowedMethods(array $AllowedMethods) 设置允许的 HTTP 操作方法;可以配置多个:PUT、GET、POST、HEAD。[cos文档](https://cloud.tencent.com/document/product/436/8279)
 * @method array getAllowedHeaders() 获取用于指定允许浏览器发送 CORS 请求时携带的自定义 HTTP 请求头部;可以配置*，代表允许所有头部，为了避免遗漏，推荐配置为*。[cos文档](https://cloud.tencent.com/document/product/436/8279)
 * @method void setAllowedHeaders(array $AllowedHeaders) 设置用于指定允许浏览器发送 CORS 请求时携带的自定义 HTTP 请求头部;可以配置*，代表允许所有头部，为了避免遗漏，推荐配置为*。[cos文档](https://cloud.tencent.com/document/product/436/8279)
 * @method integer getMaxAgeSeconds() 获取跨域资源共享配置的有效时间，单位为秒。[cos文档](https://cloud.tencent.com/document/product/436/8279)
 * @method void setMaxAgeSeconds(integer $MaxAgeSeconds) 设置跨域资源共享配置的有效时间，单位为秒。[cos文档](https://cloud.tencent.com/document/product/436/8279)
 * @method array getExposeHeaders() 获取允许浏览器获取的 CORS 请求响应中的头部，不区分大小写；默认情况下浏览器只能访问简单响应头部：Cache-Control、Content-Type、Expires、Last-Modified，如果需要访问其他响应头部，需要添加 ExposeHeader 配置。[cos文档](https://cloud.tencent.com/document/product/436/8279)
 * @method void setExposeHeaders(array $ExposeHeaders) 设置允许浏览器获取的 CORS 请求响应中的头部，不区分大小写；默认情况下浏览器只能访问简单响应头部：Cache-Control、Content-Type、Expires、Last-Modified，如果需要访问其他响应头部，需要添加 ExposeHeader 配置。[cos文档](https://cloud.tencent.com/document/product/436/8279)
 */
class UpdateBucketCORSOptRequest extends AbstractModel
{
    /**
     * @var array 允许的访问来源;具体参见 [cos文档](https://cloud.tencent.com/document/product/436/8279)
     */
    public $AllowedOrigins;

    /**
     * @var array 允许的 HTTP 操作方法;可以配置多个:PUT、GET、POST、HEAD。[cos文档](https://cloud.tencent.com/document/product/436/8279)
     */
    public $AllowedMethods;

    /**
     * @var array 用于指定允许浏览器发送 CORS 请求时携带的自定义 HTTP 请求头部;可以配置*，代表允许所有头部，为了避免遗漏，推荐配置为*。[cos文档](https://cloud.tencent.com/document/product/436/8279)
     */
    public $AllowedHeaders;

    /**
     * @var integer 跨域资源共享配置的有效时间，单位为秒。[cos文档](https://cloud.tencent.com/document/product/436/8279)
     */
    public $MaxAgeSeconds;

    /**
     * @var array 允许浏览器获取的 CORS 请求响应中的头部，不区分大小写；默认情况下浏览器只能访问简单响应头部：Cache-Control、Content-Type、Expires、Last-Modified，如果需要访问其他响应头部，需要添加 ExposeHeader 配置。[cos文档](https://cloud.tencent.com/document/product/436/8279)
     */
    public $ExposeHeaders;

    /**
     * @param array $AllowedOrigins 允许的访问来源;具体参见 [cos文档](https://cloud.tencent.com/document/product/436/8279)
     * @param array $AllowedMethods 允许的 HTTP 操作方法;可以配置多个:PUT、GET、POST、HEAD。[cos文档](https://cloud.tencent.com/document/product/436/8279)
     * @param array $AllowedHeaders 用于指定允许浏览器发送 CORS 请求时携带的自定义 HTTP 请求头部;可以配置*，代表允许所有头部，为了避免遗漏，推荐配置为*。[cos文档](https://cloud.tencent.com/document/product/436/8279)
     * @param integer $MaxAgeSeconds 跨域资源共享配置的有效时间，单位为秒。[cos文档](https://cloud.tencent.com/document/product/436/8279)
     * @param array $ExposeHeaders 允许浏览器获取的 CORS 请求响应中的头部，不区分大小写；默认情况下浏览器只能访问简单响应头部：Cache-Control、Content-Type、Expires、Last-Modified，如果需要访问其他响应头部，需要添加 ExposeHeader 配置。[cos文档](https://cloud.tencent.com/document/product/436/8279)
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
        if (array_key_exists("AllowedOrigins",$param) and $param["AllowedOrigins"] !== null) {
            $this->AllowedOrigins = $param["AllowedOrigins"];
        }

        if (array_key_exists("AllowedMethods",$param) and $param["AllowedMethods"] !== null) {
            $this->AllowedMethods = $param["AllowedMethods"];
        }

        if (array_key_exists("AllowedHeaders",$param) and $param["AllowedHeaders"] !== null) {
            $this->AllowedHeaders = $param["AllowedHeaders"];
        }

        if (array_key_exists("MaxAgeSeconds",$param) and $param["MaxAgeSeconds"] !== null) {
            $this->MaxAgeSeconds = $param["MaxAgeSeconds"];
        }

        if (array_key_exists("ExposeHeaders",$param) and $param["ExposeHeaders"] !== null) {
            $this->ExposeHeaders = $param["ExposeHeaders"];
        }
    }
}
