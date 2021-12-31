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
 * UpdateService请求参数结构体
 *
 * @method string getServiceId() 获取待切换服务的唯一 Id。
 * @method void setServiceId(string $ServiceId) 设置待切换服务的唯一 Id。
 * @method string getEnvironmentName() 获取待切换的环境名称，当前支持三个环境，test（测试环境）、prepub（预发布环境）和 release（发布环境）。
 * @method void setEnvironmentName(string $EnvironmentName) 设置待切换的环境名称，当前支持三个环境，test（测试环境）、prepub（预发布环境）和 release（发布环境）。
 * @method string getVersionName() 获取切换的版本号。
 * @method void setVersionName(string $VersionName) 设置切换的版本号。
 * @method string getUpdateDesc() 获取本次的切换描述。
 * @method void setUpdateDesc(string $UpdateDesc) 设置本次的切换描述。
 */
class UpdateServiceRequest extends AbstractModel
{
    /**
     * @var string 待切换服务的唯一 Id。
     */
    public $ServiceId;

    /**
     * @var string 待切换的环境名称，当前支持三个环境，test（测试环境）、prepub（预发布环境）和 release（发布环境）。
     */
    public $EnvironmentName;

    /**
     * @var string 切换的版本号。
     */
    public $VersionName;

    /**
     * @var string 本次的切换描述。
     */
    public $UpdateDesc;

    /**
     * @param string $ServiceId 待切换服务的唯一 Id。
     * @param string $EnvironmentName 待切换的环境名称，当前支持三个环境，test（测试环境）、prepub（预发布环境）和 release（发布环境）。
     * @param string $VersionName 切换的版本号。
     * @param string $UpdateDesc 本次的切换描述。
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

        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("UpdateDesc",$param) and $param["UpdateDesc"] !== null) {
            $this->UpdateDesc = $param["UpdateDesc"];
        }
    }
}
