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
 * ServiceConfig
 *
 * @method string getProduct() 获取后端类型。启用vpc时生效，目前支持的类型为clb。
 * @method void setProduct(string $Product) 设置后端类型。启用vpc时生效，目前支持的类型为clb。
 * @method string getUniqVpcId() 获取vpc 的唯一ID。
 * @method void setUniqVpcId(string $UniqVpcId) 设置vpc 的唯一ID。
 * @method string getUrl() 获取API 的后端服务url。如果ServiceType是HTTP，则此参数必传。
 * @method void setUrl(string $Url) 设置API 的后端服务url。如果ServiceType是HTTP，则此参数必传。
 * @method string getPath() 获取API 的后端服务路径，如 /path。如果 ServiceType 是 HTTP，则此参数必传。前后端路径可不同。
 * @method void setPath(string $Path) 设置API 的后端服务路径，如 /path。如果 ServiceType 是 HTTP，则此参数必传。前后端路径可不同。
 * @method string getMethod() 获取API的后端服务请求方法，如 GET。如果 ServiceType 是 HTTP，则此参数必传。前后端方法可不同。
 * @method void setMethod(string $Method) 设置API的后端服务请求方法，如 GET。如果 ServiceType 是 HTTP，则此参数必传。前后端方法可不同。
 */
class ServiceConfig extends AbstractModel
{
    /**
     * @var string 后端类型。启用vpc时生效，目前支持的类型为clb。
     */
    public $Product;

    /**
     * @var string vpc 的唯一ID。
     */
    public $UniqVpcId;

    /**
     * @var string API 的后端服务url。如果ServiceType是HTTP，则此参数必传。
     */
    public $Url;

    /**
     * @var string API 的后端服务路径，如 /path。如果 ServiceType 是 HTTP，则此参数必传。前后端路径可不同。
     */
    public $Path;

    /**
     * @var string API的后端服务请求方法，如 GET。如果 ServiceType 是 HTTP，则此参数必传。前后端方法可不同。
     */
    public $Method;

    /**
     * @param string $Product 后端类型。启用vpc时生效，目前支持的类型为clb。
     * @param string $UniqVpcId vpc 的唯一ID。
     * @param string $Url API 的后端服务url。如果ServiceType是HTTP，则此参数必传。
     * @param string $Path API 的后端服务路径，如 /path。如果 ServiceType 是 HTTP，则此参数必传。前后端路径可不同。
     * @param string $Method API的后端服务请求方法，如 GET。如果 ServiceType 是 HTTP，则此参数必传。前后端方法可不同。
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }
    }
}
