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
 * UnReleaseService请求参数结构体
 *
 * @method string getServiceId() 获取待下线服务的唯一 ID。
 * @method void setServiceId(string $ServiceId) 设置待下线服务的唯一 ID。
 * @method string getEnvironmentName() 获取待下线的环境名称，当前支持三个环境，test（测试环境）、prepub（预发布环境）和 release（发布环境）。
 * @method void setEnvironmentName(string $EnvironmentName) 设置待下线的环境名称，当前支持三个环境，test（测试环境）、prepub（预发布环境）和 release（发布环境）。
 * @method array getApiIds() 获取保留字段，待下线的API列表。
 * @method void setApiIds(array $ApiIds) 设置保留字段，待下线的API列表。
 */
class UnReleaseServiceRequest extends AbstractModel
{
    /**
     * @var string 待下线服务的唯一 ID。
     */
    public $ServiceId;

    /**
     * @var string 待下线的环境名称，当前支持三个环境，test（测试环境）、prepub（预发布环境）和 release（发布环境）。
     */
    public $EnvironmentName;

    /**
     * @var array 保留字段，待下线的API列表。
     */
    public $ApiIds;

    /**
     * @param string $ServiceId 待下线服务的唯一 ID。
     * @param string $EnvironmentName 待下线的环境名称，当前支持三个环境，test（测试环境）、prepub（预发布环境）和 release（发布环境）。
     * @param array $ApiIds 保留字段，待下线的API列表。
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

        if (array_key_exists("ApiIds",$param) and $param["ApiIds"] !== null) {
            $this->ApiIds = $param["ApiIds"];
        }
    }
}
