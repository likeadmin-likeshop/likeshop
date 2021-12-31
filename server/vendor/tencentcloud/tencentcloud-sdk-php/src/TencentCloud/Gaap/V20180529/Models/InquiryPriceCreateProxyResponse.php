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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceCreateProxy返回参数结构体
 *
 * @method float getProxyDailyPrice() 获取通道基础费用价格，单位：元/天。
 * @method void setProxyDailyPrice(float $ProxyDailyPrice) 设置通道基础费用价格，单位：元/天。
 * @method array getBandwidthUnitPrice() 获取通道带宽费用梯度价格。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBandwidthUnitPrice(array $BandwidthUnitPrice) 设置通道带宽费用梯度价格。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDiscountProxyDailyPrice() 获取通道基础费用折扣价格，单位：元/天。
 * @method void setDiscountProxyDailyPrice(float $DiscountProxyDailyPrice) 设置通道基础费用折扣价格，单位：元/天。
 * @method string getCurrency() 获取价格使用的货币，支持人民币，美元等。
 * @method void setCurrency(string $Currency) 设置价格使用的货币，支持人民币，美元等。
 * @method float getFlowUnitPrice() 获取通道的流量费用价格，单位: 元/GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowUnitPrice(float $FlowUnitPrice) 设置通道的流量费用价格，单位: 元/GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDiscountFlowUnitPrice() 获取通道的流量费用折扣价格，单位:元/GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiscountFlowUnitPrice(float $DiscountFlowUnitPrice) 设置通道的流量费用折扣价格，单位:元/GB
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class InquiryPriceCreateProxyResponse extends AbstractModel
{
    /**
     * @var float 通道基础费用价格，单位：元/天。
     */
    public $ProxyDailyPrice;

    /**
     * @var array 通道带宽费用梯度价格。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BandwidthUnitPrice;

    /**
     * @var float 通道基础费用折扣价格，单位：元/天。
     */
    public $DiscountProxyDailyPrice;

    /**
     * @var string 价格使用的货币，支持人民币，美元等。
     */
    public $Currency;

    /**
     * @var float 通道的流量费用价格，单位: 元/GB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowUnitPrice;

    /**
     * @var float 通道的流量费用折扣价格，单位:元/GB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiscountFlowUnitPrice;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $ProxyDailyPrice 通道基础费用价格，单位：元/天。
     * @param array $BandwidthUnitPrice 通道带宽费用梯度价格。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $DiscountProxyDailyPrice 通道基础费用折扣价格，单位：元/天。
     * @param string $Currency 价格使用的货币，支持人民币，美元等。
     * @param float $FlowUnitPrice 通道的流量费用价格，单位: 元/GB
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $DiscountFlowUnitPrice 通道的流量费用折扣价格，单位:元/GB
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ProxyDailyPrice",$param) and $param["ProxyDailyPrice"] !== null) {
            $this->ProxyDailyPrice = $param["ProxyDailyPrice"];
        }

        if (array_key_exists("BandwidthUnitPrice",$param) and $param["BandwidthUnitPrice"] !== null) {
            $this->BandwidthUnitPrice = [];
            foreach ($param["BandwidthUnitPrice"] as $key => $value){
                $obj = new BandwidthPriceGradient();
                $obj->deserialize($value);
                array_push($this->BandwidthUnitPrice, $obj);
            }
        }

        if (array_key_exists("DiscountProxyDailyPrice",$param) and $param["DiscountProxyDailyPrice"] !== null) {
            $this->DiscountProxyDailyPrice = $param["DiscountProxyDailyPrice"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("FlowUnitPrice",$param) and $param["FlowUnitPrice"] !== null) {
            $this->FlowUnitPrice = $param["FlowUnitPrice"];
        }

        if (array_key_exists("DiscountFlowUnitPrice",$param) and $param["DiscountFlowUnitPrice"] !== null) {
            $this->DiscountFlowUnitPrice = $param["DiscountFlowUnitPrice"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
