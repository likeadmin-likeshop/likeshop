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
 * 策略绑定api列表
 *
 * @method string getApiId() 获取API 唯一 ID。
 * @method void setApiId(string $ApiId) 设置API 唯一 ID。
 * @method string getApiName() 获取用户自定义的 API 名称。
 * @method void setApiName(string $ApiName) 设置用户自定义的 API 名称。
 * @method string getApiType() 获取API 类型。取值为NORMAL（普通API）和TSF （微服务API）。
 * @method void setApiType(string $ApiType) 设置API 类型。取值为NORMAL（普通API）和TSF （微服务API）。
 * @method string getPath() 获取API 的路径。如 /path。
 * @method void setPath(string $Path) 设置API 的路径。如 /path。
 * @method string getMethod() 获取API 的请求方法。如 GET。
 * @method void setMethod(string $Method) 设置API 的请求方法。如 GET。
 * @method string getOtherIPStrategyId() 获取API 已经绑定的其他策略唯一ID。
 * @method void setOtherIPStrategyId(string $OtherIPStrategyId) 设置API 已经绑定的其他策略唯一ID。
 * @method string getOtherEnvironmentName() 获取API 已经绑定的环境。
 * @method void setOtherEnvironmentName(string $OtherEnvironmentName) 设置API 已经绑定的环境。
 */
class IPStrategyApi extends AbstractModel
{
    /**
     * @var string API 唯一 ID。
     */
    public $ApiId;

    /**
     * @var string 用户自定义的 API 名称。
     */
    public $ApiName;

    /**
     * @var string API 类型。取值为NORMAL（普通API）和TSF （微服务API）。
     */
    public $ApiType;

    /**
     * @var string API 的路径。如 /path。
     */
    public $Path;

    /**
     * @var string API 的请求方法。如 GET。
     */
    public $Method;

    /**
     * @var string API 已经绑定的其他策略唯一ID。
     */
    public $OtherIPStrategyId;

    /**
     * @var string API 已经绑定的环境。
     */
    public $OtherEnvironmentName;

    /**
     * @param string $ApiId API 唯一 ID。
     * @param string $ApiName 用户自定义的 API 名称。
     * @param string $ApiType API 类型。取值为NORMAL（普通API）和TSF （微服务API）。
     * @param string $Path API 的路径。如 /path。
     * @param string $Method API 的请求方法。如 GET。
     * @param string $OtherIPStrategyId API 已经绑定的其他策略唯一ID。
     * @param string $OtherEnvironmentName API 已经绑定的环境。
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
        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("ApiType",$param) and $param["ApiType"] !== null) {
            $this->ApiType = $param["ApiType"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("OtherIPStrategyId",$param) and $param["OtherIPStrategyId"] !== null) {
            $this->OtherIPStrategyId = $param["OtherIPStrategyId"];
        }

        if (array_key_exists("OtherEnvironmentName",$param) and $param["OtherEnvironmentName"] !== null) {
            $this->OtherEnvironmentName = $param["OtherEnvironmentName"];
        }
    }
}
