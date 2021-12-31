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
 * CreateIPStrategy请求参数结构体
 *
 * @method string getServiceId() 获取服务的唯一ID。
 * @method void setServiceId(string $ServiceId) 设置服务的唯一ID。
 * @method string getStrategyName() 获取用户自定义的策略名称。
 * @method void setStrategyName(string $StrategyName) 设置用户自定义的策略名称。
 * @method string getStrategyType() 获取策略类型。支持WHITE（白名单）和BLACK（黑名单）。
 * @method void setStrategyType(string $StrategyType) 设置策略类型。支持WHITE（白名单）和BLACK（黑名单）。
 * @method string getStrategyData() 获取策略详情，多个ip 使用\n 分隔符分开。
 * @method void setStrategyData(string $StrategyData) 设置策略详情，多个ip 使用\n 分隔符分开。
 */
class CreateIPStrategyRequest extends AbstractModel
{
    /**
     * @var string 服务的唯一ID。
     */
    public $ServiceId;

    /**
     * @var string 用户自定义的策略名称。
     */
    public $StrategyName;

    /**
     * @var string 策略类型。支持WHITE（白名单）和BLACK（黑名单）。
     */
    public $StrategyType;

    /**
     * @var string 策略详情，多个ip 使用\n 分隔符分开。
     */
    public $StrategyData;

    /**
     * @param string $ServiceId 服务的唯一ID。
     * @param string $StrategyName 用户自定义的策略名称。
     * @param string $StrategyType 策略类型。支持WHITE（白名单）和BLACK（黑名单）。
     * @param string $StrategyData 策略详情，多个ip 使用\n 分隔符分开。
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

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("StrategyData",$param) and $param["StrategyData"] !== null) {
            $this->StrategyData = $param["StrategyData"];
        }
    }
}
