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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务流量的http状态码聚合数据
 *
 * @method array getHttp2xx() 获取http2xx状态码
 * @method void setHttp2xx(array $Http2xx) 设置http2xx状态码
 * @method array getHttp3xx() 获取http3xx状态码
 * @method void setHttp3xx(array $Http3xx) 设置http3xx状态码
 * @method array getHttp404() 获取http404状态码
 * @method void setHttp404(array $Http404) 设置http404状态码
 * @method array getHttp4xx() 获取http4xx状态码
 * @method void setHttp4xx(array $Http4xx) 设置http4xx状态码
 * @method array getHttp5xx() 获取http5xx状态码
 * @method void setHttp5xx(array $Http5xx) 设置http5xx状态码
 * @method array getSourceHttp2xx() 获取http2xx回源状态码
 * @method void setSourceHttp2xx(array $SourceHttp2xx) 设置http2xx回源状态码
 * @method array getSourceHttp3xx() 获取http3xx回源状态码
 * @method void setSourceHttp3xx(array $SourceHttp3xx) 设置http3xx回源状态码
 * @method array getSourceHttp404() 获取http404回源状态码
 * @method void setSourceHttp404(array $SourceHttp404) 设置http404回源状态码
 * @method array getSourceHttp4xx() 获取http4xx回源状态码
 * @method void setSourceHttp4xx(array $SourceHttp4xx) 设置http4xx回源状态码
 * @method array getSourceHttp5xx() 获取http5xx回源状态码
 * @method void setSourceHttp5xx(array $SourceHttp5xx) 设置http5xx回源状态码
 */
class HttpStatusMap extends AbstractModel
{
    /**
     * @var array http2xx状态码
     */
    public $Http2xx;

    /**
     * @var array http3xx状态码
     */
    public $Http3xx;

    /**
     * @var array http404状态码
     */
    public $Http404;

    /**
     * @var array http4xx状态码
     */
    public $Http4xx;

    /**
     * @var array http5xx状态码
     */
    public $Http5xx;

    /**
     * @var array http2xx回源状态码
     */
    public $SourceHttp2xx;

    /**
     * @var array http3xx回源状态码
     */
    public $SourceHttp3xx;

    /**
     * @var array http404回源状态码
     */
    public $SourceHttp404;

    /**
     * @var array http4xx回源状态码
     */
    public $SourceHttp4xx;

    /**
     * @var array http5xx回源状态码
     */
    public $SourceHttp5xx;

    /**
     * @param array $Http2xx http2xx状态码
     * @param array $Http3xx http3xx状态码
     * @param array $Http404 http404状态码
     * @param array $Http4xx http4xx状态码
     * @param array $Http5xx http5xx状态码
     * @param array $SourceHttp2xx http2xx回源状态码
     * @param array $SourceHttp3xx http3xx回源状态码
     * @param array $SourceHttp404 http404回源状态码
     * @param array $SourceHttp4xx http4xx回源状态码
     * @param array $SourceHttp5xx http5xx回源状态码
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
        if (array_key_exists("Http2xx",$param) and $param["Http2xx"] !== null) {
            $this->Http2xx = $param["Http2xx"];
        }

        if (array_key_exists("Http3xx",$param) and $param["Http3xx"] !== null) {
            $this->Http3xx = $param["Http3xx"];
        }

        if (array_key_exists("Http404",$param) and $param["Http404"] !== null) {
            $this->Http404 = $param["Http404"];
        }

        if (array_key_exists("Http4xx",$param) and $param["Http4xx"] !== null) {
            $this->Http4xx = $param["Http4xx"];
        }

        if (array_key_exists("Http5xx",$param) and $param["Http5xx"] !== null) {
            $this->Http5xx = $param["Http5xx"];
        }

        if (array_key_exists("SourceHttp2xx",$param) and $param["SourceHttp2xx"] !== null) {
            $this->SourceHttp2xx = $param["SourceHttp2xx"];
        }

        if (array_key_exists("SourceHttp3xx",$param) and $param["SourceHttp3xx"] !== null) {
            $this->SourceHttp3xx = $param["SourceHttp3xx"];
        }

        if (array_key_exists("SourceHttp404",$param) and $param["SourceHttp404"] !== null) {
            $this->SourceHttp404 = $param["SourceHttp404"];
        }

        if (array_key_exists("SourceHttp4xx",$param) and $param["SourceHttp4xx"] !== null) {
            $this->SourceHttp4xx = $param["SourceHttp4xx"];
        }

        if (array_key_exists("SourceHttp5xx",$param) and $param["SourceHttp5xx"] !== null) {
            $this->SourceHttp5xx = $param["SourceHttp5xx"];
        }
    }
}
