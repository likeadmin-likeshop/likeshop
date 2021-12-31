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
 * 状态码重定向规则配置
 *
 * @method integer getStatusCode() 获取状态码
支持 400、403、404、500
 * @method void setStatusCode(integer $StatusCode) 设置状态码
支持 400、403、404、500
 * @method integer getRedirectCode() 获取重定向状态码设置
支持 301 或 302
 * @method void setRedirectCode(integer $RedirectCode) 设置重定向状态码设置
支持 301 或 302
 * @method string getRedirectUrl() 获取重定向 URL
需要为完整跳转路径，如 https://www.test.com/error.html
 * @method void setRedirectUrl(string $RedirectUrl) 设置重定向 URL
需要为完整跳转路径，如 https://www.test.com/error.html
 */
class ErrorPageRule extends AbstractModel
{
    /**
     * @var integer 状态码
支持 400、403、404、500
     */
    public $StatusCode;

    /**
     * @var integer 重定向状态码设置
支持 301 或 302
     */
    public $RedirectCode;

    /**
     * @var string 重定向 URL
需要为完整跳转路径，如 https://www.test.com/error.html
     */
    public $RedirectUrl;

    /**
     * @param integer $StatusCode 状态码
支持 400、403、404、500
     * @param integer $RedirectCode 重定向状态码设置
支持 301 或 302
     * @param string $RedirectUrl 重定向 URL
需要为完整跳转路径，如 https://www.test.com/error.html
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

        if (array_key_exists("RedirectCode",$param) and $param["RedirectCode"] !== null) {
            $this->RedirectCode = $param["RedirectCode"];
        }

        if (array_key_exists("RedirectUrl",$param) and $param["RedirectUrl"] !== null) {
            $this->RedirectUrl = $param["RedirectUrl"];
        }
    }
}
