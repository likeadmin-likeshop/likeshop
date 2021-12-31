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
 * BindEnvironment请求参数结构体
 *
 * @method array getUsagePlanIds() 获取待绑定的使用计划唯一 ID 列表。
 * @method void setUsagePlanIds(array $UsagePlanIds) 设置待绑定的使用计划唯一 ID 列表。
 * @method string getBindType() 获取绑定类型，取值为API、SERVICE，默认值为SERVICE。
 * @method void setBindType(string $BindType) 设置绑定类型，取值为API、SERVICE，默认值为SERVICE。
 * @method string getEnvironment() 获取待绑定的环境。
 * @method void setEnvironment(string $Environment) 设置待绑定的环境。
 * @method string getServiceId() 获取待绑定的服务唯一 ID。
 * @method void setServiceId(string $ServiceId) 设置待绑定的服务唯一 ID。
 * @method array getApiIds() 获取API唯一ID数组，当bindType=API时，需要传入此参数。
 * @method void setApiIds(array $ApiIds) 设置API唯一ID数组，当bindType=API时，需要传入此参数。
 */
class BindEnvironmentRequest extends AbstractModel
{
    /**
     * @var array 待绑定的使用计划唯一 ID 列表。
     */
    public $UsagePlanIds;

    /**
     * @var string 绑定类型，取值为API、SERVICE，默认值为SERVICE。
     */
    public $BindType;

    /**
     * @var string 待绑定的环境。
     */
    public $Environment;

    /**
     * @var string 待绑定的服务唯一 ID。
     */
    public $ServiceId;

    /**
     * @var array API唯一ID数组，当bindType=API时，需要传入此参数。
     */
    public $ApiIds;

    /**
     * @param array $UsagePlanIds 待绑定的使用计划唯一 ID 列表。
     * @param string $BindType 绑定类型，取值为API、SERVICE，默认值为SERVICE。
     * @param string $Environment 待绑定的环境。
     * @param string $ServiceId 待绑定的服务唯一 ID。
     * @param array $ApiIds API唯一ID数组，当bindType=API时，需要传入此参数。
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
        if (array_key_exists("UsagePlanIds",$param) and $param["UsagePlanIds"] !== null) {
            $this->UsagePlanIds = $param["UsagePlanIds"];
        }

        if (array_key_exists("BindType",$param) and $param["BindType"] !== null) {
            $this->BindType = $param["BindType"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ApiIds",$param) and $param["ApiIds"] !== null) {
            $this->ApiIds = $param["ApiIds"];
        }
    }
}
