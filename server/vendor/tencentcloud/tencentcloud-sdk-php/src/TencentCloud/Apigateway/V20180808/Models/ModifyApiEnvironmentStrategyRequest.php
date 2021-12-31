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
 * ModifyApiEnvironmentStrategy请求参数结构体
 *
 * @method string getServiceId() 获取服务唯一ID。
 * @method void setServiceId(string $ServiceId) 设置服务唯一ID。
 * @method integer getStrategy() 获取限流值。
 * @method void setStrategy(integer $Strategy) 设置限流值。
 * @method string getEnvironmentName() 获取环境名。
 * @method void setEnvironmentName(string $EnvironmentName) 设置环境名。
 * @method array getApiIds() 获取API列表。
 * @method void setApiIds(array $ApiIds) 设置API列表。
 */
class ModifyApiEnvironmentStrategyRequest extends AbstractModel
{
    /**
     * @var string 服务唯一ID。
     */
    public $ServiceId;

    /**
     * @var integer 限流值。
     */
    public $Strategy;

    /**
     * @var string 环境名。
     */
    public $EnvironmentName;

    /**
     * @var array API列表。
     */
    public $ApiIds;

    /**
     * @param string $ServiceId 服务唯一ID。
     * @param integer $Strategy 限流值。
     * @param string $EnvironmentName 环境名。
     * @param array $ApiIds API列表。
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

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("ApiIds",$param) and $param["ApiIds"] !== null) {
            $this->ApiIds = $param["ApiIds"];
        }
    }
}
