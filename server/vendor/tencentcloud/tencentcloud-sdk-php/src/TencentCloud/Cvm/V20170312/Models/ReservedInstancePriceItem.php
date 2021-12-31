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
 * 基于付费类型的预留实例相关价格信息。预留实例当前只针对国际站白名单用户开放。
 *
 * @method string getOfferingType() 获取付费类型，如："All Upfront","Partial Upfront","No Upfront"
 * @method void setOfferingType(string $OfferingType) 设置付费类型，如："All Upfront","Partial Upfront","No Upfront"
 * @method float getFixedPrice() 获取预支合计费用，单位：元。
 * @method void setFixedPrice(float $FixedPrice) 设置预支合计费用，单位：元。
 * @method float getUsagePrice() 获取后续合计费用，单位：元/小时
 * @method void setUsagePrice(float $UsagePrice) 设置后续合计费用，单位：元/小时
 * @method string getReservedInstancesOfferingId() 获取预留实例配置ID
 * @method void setReservedInstancesOfferingId(string $ReservedInstancesOfferingId) 设置预留实例配置ID
 * @method string getZone() 获取预留实例计费可购买的可用区。
 * @method void setZone(string $Zone) 设置预留实例计费可购买的可用区。
 * @method integer getDuration() 获取预留实例计费【有效期】即预留实例计费购买时长。形如：31536000。
计量单位：秒
 * @method void setDuration(integer $Duration) 设置预留实例计费【有效期】即预留实例计费购买时长。形如：31536000。
计量单位：秒
 * @method string getProductDescription() 获取预留实例计费的平台描述（即操作系统）。形如：linux。
返回项： linux 。
 * @method void setProductDescription(string $ProductDescription) 设置预留实例计费的平台描述（即操作系统）。形如：linux。
返回项： linux 。
 */
class ReservedInstancePriceItem extends AbstractModel
{
    /**
     * @var string 付费类型，如："All Upfront","Partial Upfront","No Upfront"
     */
    public $OfferingType;

    /**
     * @var float 预支合计费用，单位：元。
     */
    public $FixedPrice;

    /**
     * @var float 后续合计费用，单位：元/小时
     */
    public $UsagePrice;

    /**
     * @var string 预留实例配置ID
     */
    public $ReservedInstancesOfferingId;

    /**
     * @var string 预留实例计费可购买的可用区。
     */
    public $Zone;

    /**
     * @var integer 预留实例计费【有效期】即预留实例计费购买时长。形如：31536000。
计量单位：秒
     */
    public $Duration;

    /**
     * @var string 预留实例计费的平台描述（即操作系统）。形如：linux。
返回项： linux 。
     */
    public $ProductDescription;

    /**
     * @param string $OfferingType 付费类型，如："All Upfront","Partial Upfront","No Upfront"
     * @param float $FixedPrice 预支合计费用，单位：元。
     * @param float $UsagePrice 后续合计费用，单位：元/小时
     * @param string $ReservedInstancesOfferingId 预留实例配置ID
     * @param string $Zone 预留实例计费可购买的可用区。
     * @param integer $Duration 预留实例计费【有效期】即预留实例计费购买时长。形如：31536000。
计量单位：秒
     * @param string $ProductDescription 预留实例计费的平台描述（即操作系统）。形如：linux。
返回项： linux 。
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
        if (array_key_exists("OfferingType",$param) and $param["OfferingType"] !== null) {
            $this->OfferingType = $param["OfferingType"];
        }

        if (array_key_exists("FixedPrice",$param) and $param["FixedPrice"] !== null) {
            $this->FixedPrice = $param["FixedPrice"];
        }

        if (array_key_exists("UsagePrice",$param) and $param["UsagePrice"] !== null) {
            $this->UsagePrice = $param["UsagePrice"];
        }

        if (array_key_exists("ReservedInstancesOfferingId",$param) and $param["ReservedInstancesOfferingId"] !== null) {
            $this->ReservedInstancesOfferingId = $param["ReservedInstancesOfferingId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ProductDescription",$param) and $param["ProductDescription"] !== null) {
            $this->ProductDescription = $param["ProductDescription"];
        }
    }
}
