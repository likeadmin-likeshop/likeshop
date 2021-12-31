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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePayType返回参数结构体
 *
 * @method string getPayType() 获取计费类型：
flux：流量计费
bandwidth：带宽计费
日结计费方式切换时，若当日产生消耗，则此字段表示第二天即将生效的计费方式，若未产生消耗，则表示已经生效的计费方式。
 * @method void setPayType(string $PayType) 设置计费类型：
flux：流量计费
bandwidth：带宽计费
日结计费方式切换时，若当日产生消耗，则此字段表示第二天即将生效的计费方式，若未产生消耗，则表示已经生效的计费方式。
 * @method string getBillingCycle() 获取计费周期：
day：日结计费
month：月结计费
 * @method void setBillingCycle(string $BillingCycle) 设置计费周期：
day：日结计费
month：月结计费
 * @method string getStatType() 获取计费方式：
monthMax：日峰值月平均计费，月结模式
day95：日 95 带宽计费，月结模式
month95：月95带宽计费，月结模式
sum：总流量计费，日结与月结均有流量计费模式
max：峰值带宽计费，日结模式
 * @method void setStatType(string $StatType) 设置计费方式：
monthMax：日峰值月平均计费，月结模式
day95：日 95 带宽计费，月结模式
month95：月95带宽计费，月结模式
sum：总流量计费，日结与月结均有流量计费模式
max：峰值带宽计费，日结模式
 * @method string getRegionType() 获取境外计费类型：
all：全地区统一计费
multiple：分地区计费
 * @method void setRegionType(string $RegionType) 设置境外计费类型：
all：全地区统一计费
multiple：分地区计费
 * @method string getCurrentPayType() 获取当前生效计费类型：
flux：流量计费
bandwidth：带宽计费
 * @method void setCurrentPayType(string $CurrentPayType) 设置当前生效计费类型：
flux：流量计费
bandwidth：带宽计费
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePayTypeResponse extends AbstractModel
{
    /**
     * @var string 计费类型：
flux：流量计费
bandwidth：带宽计费
日结计费方式切换时，若当日产生消耗，则此字段表示第二天即将生效的计费方式，若未产生消耗，则表示已经生效的计费方式。
     */
    public $PayType;

    /**
     * @var string 计费周期：
day：日结计费
month：月结计费
     */
    public $BillingCycle;

    /**
     * @var string 计费方式：
monthMax：日峰值月平均计费，月结模式
day95：日 95 带宽计费，月结模式
month95：月95带宽计费，月结模式
sum：总流量计费，日结与月结均有流量计费模式
max：峰值带宽计费，日结模式
     */
    public $StatType;

    /**
     * @var string 境外计费类型：
all：全地区统一计费
multiple：分地区计费
     */
    public $RegionType;

    /**
     * @var string 当前生效计费类型：
flux：流量计费
bandwidth：带宽计费
     */
    public $CurrentPayType;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $PayType 计费类型：
flux：流量计费
bandwidth：带宽计费
日结计费方式切换时，若当日产生消耗，则此字段表示第二天即将生效的计费方式，若未产生消耗，则表示已经生效的计费方式。
     * @param string $BillingCycle 计费周期：
day：日结计费
month：月结计费
     * @param string $StatType 计费方式：
monthMax：日峰值月平均计费，月结模式
day95：日 95 带宽计费，月结模式
month95：月95带宽计费，月结模式
sum：总流量计费，日结与月结均有流量计费模式
max：峰值带宽计费，日结模式
     * @param string $RegionType 境外计费类型：
all：全地区统一计费
multiple：分地区计费
     * @param string $CurrentPayType 当前生效计费类型：
flux：流量计费
bandwidth：带宽计费
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("BillingCycle",$param) and $param["BillingCycle"] !== null) {
            $this->BillingCycle = $param["BillingCycle"];
        }

        if (array_key_exists("StatType",$param) and $param["StatType"] !== null) {
            $this->StatType = $param["StatType"];
        }

        if (array_key_exists("RegionType",$param) and $param["RegionType"] !== null) {
            $this->RegionType = $param["RegionType"];
        }

        if (array_key_exists("CurrentPayType",$param) and $param["CurrentPayType"] !== null) {
            $this->CurrentPayType = $param["CurrentPayType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
