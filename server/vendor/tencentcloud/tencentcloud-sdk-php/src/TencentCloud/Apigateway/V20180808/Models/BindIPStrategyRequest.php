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
 * BindIPStrategy请求参数结构体
 *
 * @method string getServiceId() 获取待绑定的IP策略所属的服务唯一ID。
 * @method void setServiceId(string $ServiceId) 设置待绑定的IP策略所属的服务唯一ID。
 * @method string getStrategyId() 获取待绑定的IP策略唯一ID。
 * @method void setStrategyId(string $StrategyId) 设置待绑定的IP策略唯一ID。
 * @method string getEnvironmentName() 获取IP策略待绑定的环境。
 * @method void setEnvironmentName(string $EnvironmentName) 设置IP策略待绑定的环境。
 * @method array getBindApiIds() 获取IP策略待绑定的API列表。
 * @method void setBindApiIds(array $BindApiIds) 设置IP策略待绑定的API列表。
 */
class BindIPStrategyRequest extends AbstractModel
{
    /**
     * @var string 待绑定的IP策略所属的服务唯一ID。
     */
    public $ServiceId;

    /**
     * @var string 待绑定的IP策略唯一ID。
     */
    public $StrategyId;

    /**
     * @var string IP策略待绑定的环境。
     */
    public $EnvironmentName;

    /**
     * @var array IP策略待绑定的API列表。
     */
    public $BindApiIds;

    /**
     * @param string $ServiceId 待绑定的IP策略所属的服务唯一ID。
     * @param string $StrategyId 待绑定的IP策略唯一ID。
     * @param string $EnvironmentName IP策略待绑定的环境。
     * @param array $BindApiIds IP策略待绑定的API列表。
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

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("BindApiIds",$param) and $param["BindApiIds"] !== null) {
            $this->BindApiIds = $param["BindApiIds"];
        }
    }
}
