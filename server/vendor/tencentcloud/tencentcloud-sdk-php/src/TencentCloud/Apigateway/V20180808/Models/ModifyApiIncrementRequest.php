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
 * ModifyApiIncrement请求参数结构体
 *
 * @method string getServiceId() 获取服务ID
 * @method void setServiceId(string $ServiceId) 设置服务ID
 * @method string getApiId() 获取接口ID
 * @method void setApiId(string $ApiId) 设置接口ID
 * @method string getBusinessType() 获取需要修改的API auth类型(可选择OAUTH-授权API)
 * @method void setBusinessType(string $BusinessType) 设置需要修改的API auth类型(可选择OAUTH-授权API)
 * @method string getPublicKey() 获取oauth接口需要修改的公钥值
 * @method void setPublicKey(string $PublicKey) 设置oauth接口需要修改的公钥值
 * @method string getLoginRedirectUrl() 获取oauth接口重定向地址
 * @method void setLoginRedirectUrl(string $LoginRedirectUrl) 设置oauth接口重定向地址
 */
class ModifyApiIncrementRequest extends AbstractModel
{
    /**
     * @var string 服务ID
     */
    public $ServiceId;

    /**
     * @var string 接口ID
     */
    public $ApiId;

    /**
     * @var string 需要修改的API auth类型(可选择OAUTH-授权API)
     */
    public $BusinessType;

    /**
     * @var string oauth接口需要修改的公钥值
     */
    public $PublicKey;

    /**
     * @var string oauth接口重定向地址
     */
    public $LoginRedirectUrl;

    /**
     * @param string $ServiceId 服务ID
     * @param string $ApiId 接口ID
     * @param string $BusinessType 需要修改的API auth类型(可选择OAUTH-授权API)
     * @param string $PublicKey oauth接口需要修改的公钥值
     * @param string $LoginRedirectUrl oauth接口重定向地址
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

        if (array_key_exists("BusinessType",$param) and $param["BusinessType"] !== null) {
            $this->BusinessType = $param["BusinessType"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("LoginRedirectUrl",$param) and $param["LoginRedirectUrl"] !== null) {
            $this->LoginRedirectUrl = $param["LoginRedirectUrl"];
        }
    }
}
