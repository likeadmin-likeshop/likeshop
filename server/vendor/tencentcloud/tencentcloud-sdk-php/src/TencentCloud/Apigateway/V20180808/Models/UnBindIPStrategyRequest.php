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
 * UnBindIPStrategy请求参数结构体
 *
 * @method string getServiceId() 获取待解绑的服务唯一ID。
 * @method void setServiceId(string $ServiceId) 设置待解绑的服务唯一ID。
 * @method string getStrategyId() 获取待解绑的IP策略唯一ID。
 * @method void setStrategyId(string $StrategyId) 设置待解绑的IP策略唯一ID。
 * @method string getEnvironmentName() 获取待解绑的环境。
 * @method void setEnvironmentName(string $EnvironmentName) 设置待解绑的环境。
 * @method array getUnBindApiIds() 获取待解绑的 API 列表。
 * @method void setUnBindApiIds(array $UnBindApiIds) 设置待解绑的 API 列表。
 */
class UnBindIPStrategyRequest extends AbstractModel
{
    /**
     * @var string 待解绑的服务唯一ID。
     */
    public $ServiceId;

    /**
     * @var string 待解绑的IP策略唯一ID。
     */
    public $StrategyId;

    /**
     * @var string 待解绑的环境。
     */
    public $EnvironmentName;

    /**
     * @var array 待解绑的 API 列表。
     */
    public $UnBindApiIds;

    /**
     * @param string $ServiceId 待解绑的服务唯一ID。
     * @param string $StrategyId 待解绑的IP策略唯一ID。
     * @param string $EnvironmentName 待解绑的环境。
     * @param array $UnBindApiIds 待解绑的 API 列表。
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

        if (array_key_exists("UnBindApiIds",$param) and $param["UnBindApiIds"] !== null) {
            $this->UnBindApiIds = $param["UnBindApiIds"];
        }
    }
}
