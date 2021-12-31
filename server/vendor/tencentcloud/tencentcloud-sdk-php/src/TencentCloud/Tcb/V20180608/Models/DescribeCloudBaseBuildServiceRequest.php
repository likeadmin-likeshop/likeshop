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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudBaseBuildService请求参数结构体
 *
 * @method string getEnvId() 获取环境id
 * @method void setEnvId(string $EnvId) 设置环境id
 * @method string getServiceName() 获取服务名
 * @method void setServiceName(string $ServiceName) 设置服务名
 * @method string getCIBusiness() 获取build类型,枚举值有: cloudbaserun, framework-ci
 * @method void setCIBusiness(string $CIBusiness) 设置build类型,枚举值有: cloudbaserun, framework-ci
 * @method string getServiceVersion() 获取服务版本
 * @method void setServiceVersion(string $ServiceVersion) 设置服务版本
 */
class DescribeCloudBaseBuildServiceRequest extends AbstractModel
{
    /**
     * @var string 环境id
     */
    public $EnvId;

    /**
     * @var string 服务名
     */
    public $ServiceName;

    /**
     * @var string build类型,枚举值有: cloudbaserun, framework-ci
     */
    public $CIBusiness;

    /**
     * @var string 服务版本
     */
    public $ServiceVersion;

    /**
     * @param string $EnvId 环境id
     * @param string $ServiceName 服务名
     * @param string $CIBusiness build类型,枚举值有: cloudbaserun, framework-ci
     * @param string $ServiceVersion 服务版本
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("CIBusiness",$param) and $param["CIBusiness"] !== null) {
            $this->CIBusiness = $param["CIBusiness"];
        }

        if (array_key_exists("ServiceVersion",$param) and $param["ServiceVersion"] !== null) {
            $this->ServiceVersion = $param["ServiceVersion"];
        }
    }
}
