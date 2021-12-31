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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApiDetail请求参数结构体
 *
 * @method string getMicroserviceId() 获取微服务id
 * @method void setMicroserviceId(string $MicroserviceId) 设置微服务id
 * @method string getPath() 获取请求路径
 * @method void setPath(string $Path) 设置请求路径
 * @method string getMethod() 获取请求方法
 * @method void setMethod(string $Method) 设置请求方法
 * @method string getPkgVersion() 获取包版本
 * @method void setPkgVersion(string $PkgVersion) 设置包版本
 * @method string getApplicationId() 获取应用ID
 * @method void setApplicationId(string $ApplicationId) 设置应用ID
 */
class DescribeApiDetailRequest extends AbstractModel
{
    /**
     * @var string 微服务id
     */
    public $MicroserviceId;

    /**
     * @var string 请求路径
     */
    public $Path;

    /**
     * @var string 请求方法
     */
    public $Method;

    /**
     * @var string 包版本
     */
    public $PkgVersion;

    /**
     * @var string 应用ID
     */
    public $ApplicationId;

    /**
     * @param string $MicroserviceId 微服务id
     * @param string $Path 请求路径
     * @param string $Method 请求方法
     * @param string $PkgVersion 包版本
     * @param string $ApplicationId 应用ID
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
        if (array_key_exists("MicroserviceId",$param) and $param["MicroserviceId"] !== null) {
            $this->MicroserviceId = $param["MicroserviceId"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("PkgVersion",$param) and $param["PkgVersion"] !== null) {
            $this->PkgVersion = $param["PkgVersion"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }
    }
}
