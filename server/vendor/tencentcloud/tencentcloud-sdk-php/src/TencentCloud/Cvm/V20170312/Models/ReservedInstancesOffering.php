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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述可购买预留实例计费信息
 *
 * @method string getZone() 获取预留实例计费可购买的可用区。形如：ap-guangzhou-1。
返回项：<a href="https://cloud.tencent.com/document/product/213/6091">可用区列表</a>
 * @method void setZone(string $Zone) 设置预留实例计费可购买的可用区。形如：ap-guangzhou-1。
返回项：<a href="https://cloud.tencent.com/document/product/213/6091">可用区列表</a>
 * @method string getCurrencyCode() 获取可购买的预留实例计费类型的结算货币，使用ISO 4217标准货币代码。
返回项：USD（美元）。
 * @method void setCurrencyCode(string $CurrencyCode) 设置可购买的预留实例计费类型的结算货币，使用ISO 4217标准货币代码。
返回项：USD（美元）。
 * @method integer getDuration() 获取预留实例计费【有效期】即预留实例计费购买时长。形如：31536000。
计量单位：秒
 * @method void setDuration(integer $Duration) 设置预留实例计费【有效期】即预留实例计费购买时长。形如：31536000。
计量单位：秒
 * @method float getFixedPrice() 获取预留实例计费的购买价格。形如：4000.0。
计量单位：与 currencyCode 一致，目前支持 USD（美元）
 * @method void setFixedPrice(float $FixedPrice) 设置预留实例计费的购买价格。形如：4000.0。
计量单位：与 currencyCode 一致，目前支持 USD（美元）
 * @method string getInstanceType() 获取预留实例计费的实例类型。形如：S3.MEDIUM4。
返回项：<a href="https://cloud.tencent.com/product/cvm/instances">预留实例计费类型列表</a>
 * @method void setInstanceType(string $InstanceType) 设置预留实例计费的实例类型。形如：S3.MEDIUM4。
返回项：<a href="https://cloud.tencent.com/product/cvm/instances">预留实例计费类型列表</a>
 * @method string getOfferingType() 获取预留实例计费的付款类型。形如：All Upfront。
返回项： All Upfront (预付全部费用)。
 * @method void setOfferingType(string $OfferingType) 设置预留实例计费的付款类型。形如：All Upfront。
返回项： All Upfront (预付全部费用)。
 * @method string getReservedInstancesOfferingId() 获取可购买的预留实例计费配置ID。形如：650c138f-ae7e-4750-952a-96841d6e9fc1。
 * @method void setReservedInstancesOfferingId(string $ReservedInstancesOfferingId) 设置可购买的预留实例计费配置ID。形如：650c138f-ae7e-4750-952a-96841d6e9fc1。
 * @method string getProductDescription() 获取预留实例计费的平台描述（即操作系统）。形如：linux。
返回项： linux 。
 * @method void setProductDescription(string $ProductDescription) 设置预留实例计费的平台描述（即操作系统）。形如：linux。
返回项： linux 。
 * @method float getUsagePrice() 获取扣除预付费之后的使用价格 (按小时计费)。形如：0.0。
目前，因为只支持 All Upfront 付款类型，所以默认为 0元/小时。
计量单位：元/小时，货币单位与 currencyCode 一致，目前支持 USD（美元）
 * @method void setUsagePrice(float $UsagePrice) 设置扣除预付费之后的使用价格 (按小时计费)。形如：0.0。
目前，因为只支持 All Upfront 付款类型，所以默认为 0元/小时。
计量单位：元/小时，货币单位与 currencyCode 一致，目前支持 USD（美元）
 */
class ReservedInstancesOffering extends AbstractModel
{
    /**
     * @var string 预留实例计费可购买的可用区。形如：ap-guangzhou-1。
返回项：<a href="https://cloud.tencent.com/document/product/213/6091">可用区列表</a>
     */
    public $Zone;

    /**
     * @var string 可购买的预留实例计费类型的结算货币，使用ISO 4217标准货币代码。
返回项：USD（美元）。
     */
    public $CurrencyCode;

    /**
     * @var integer 预留实例计费【有效期】即预留实例计费购买时长。形如：31536000。
计量单位：秒
     */
    public $Duration;

    /**
     * @var float 预留实例计费的购买价格。形如：4000.0。
计量单位：与 currencyCode 一致，目前支持 USD（美元）
     */
    public $FixedPrice;

    /**
     * @var string 预留实例计费的实例类型。形如：S3.MEDIUM4。
返回项：<a href="https://cloud.tencent.com/product/cvm/instances">预留实例计费类型列表</a>
     */
    public $InstanceType;

    /**
     * @var string 预留实例计费的付款类型。形如：All Upfront。
返回项： All Upfront (预付全部费用)。
     */
    public $OfferingType;

    /**
     * @var string 可购买的预留实例计费配置ID。形如：650c138f-ae7e-4750-952a-96841d6e9fc1。
     */
    public $ReservedInstancesOfferingId;

    /**
     * @var string 预留实例计费的平台描述（即操作系统）。形如：linux。
返回项： linux 。
     */
    public $ProductDescription;

    /**
     * @var float 扣除预付费之后的使用价格 (按小时计费)。形如：0.0。
目前，因为只支持 All Upfront 付款类型，所以默认为 0元/小时。
计量单位：元/小时，货币单位与 currencyCode 一致，目前支持 USD（美元）
     */
    public $UsagePrice;

    /**
     * @param string $Zone 预留实例计费可购买的可用区。形如：ap-guangzhou-1。
返回项：<a href="https://cloud.tencent.com/document/product/213/6091">可用区列表</a>
     * @param string $CurrencyCode 可购买的预留实例计费类型的结算货币，使用ISO 4217标准货币代码。
返回项：USD（美元）。
     * @param integer $Duration 预留实例计费【有效期】即预留实例计费购买时长。形如：31536000。
计量单位：秒
     * @param float $FixedPrice 预留实例计费的购买价格。形如：4000.0。
计量单位：与 currencyCode 一致，目前支持 USD（美元）
     * @param string $InstanceType 预留实例计费的实例类型。形如：S3.MEDIUM4。
返回项：<a href="https://cloud.tencent.com/product/cvm/instances">预留实例计费类型列表</a>
     * @param string $OfferingType 预留实例计费的付款类型。形如：All Upfront。
返回项： All Upfront (预付全部费用)。
     * @param string $ReservedInstancesOfferingId 可购买的预留实例计费配置ID。形如：650c138f-ae7e-4750-952a-96841d6e9fc1。
     * @param string $ProductDescription 预留实例计费的平台描述（即操作系统）。形如：linux。
返回项： linux 。
     * @param float $UsagePrice 扣除预付费之后的使用价格 (按小时计费)。形如：0.0。
目前，因为只支持 All Upfront 付款类型，所以默认为 0元/小时。
计量单位：元/小时，货币单位与 currencyCode 一致，目前支持 USD（美元）
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("CurrencyCode",$param) and $param["CurrencyCode"] !== null) {
            $this->CurrencyCode = $param["CurrencyCode"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("FixedPrice",$param) and $param["FixedPrice"] !== null) {
            $this->FixedPrice = $param["FixedPrice"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("OfferingType",$param) and $param["OfferingType"] !== null) {
            $this->OfferingType = $param["OfferingType"];
        }

        if (array_key_exists("ReservedInstancesOfferingId",$param) and $param["ReservedInstancesOfferingId"] !== null) {
            $this->ReservedInstancesOfferingId = $param["ReservedInstancesOfferingId"];
        }

        if (array_key_exists("ProductDescription",$param) and $param["ProductDescription"] !== null) {
            $this->ProductDescription = $param["ProductDescription"];
        }

        if (array_key_exists("UsagePrice",$param) and $param["UsagePrice"] !== null) {
            $this->UsagePrice = $param["UsagePrice"];
        }
    }
}
