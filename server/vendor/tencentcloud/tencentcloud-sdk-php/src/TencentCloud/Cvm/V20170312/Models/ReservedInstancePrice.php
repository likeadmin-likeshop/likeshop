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
 * 预留实例相关价格信息。预留实例当前只针对国际站白名单用户开放。
 *
 * @method float getOriginalFixedPrice() 获取预支合计费用的原价，单位：元。
 * @method void setOriginalFixedPrice(float $OriginalFixedPrice) 设置预支合计费用的原价，单位：元。
 * @method float getDiscountFixedPrice() 获取预支合计费用的折扣价，单位：元。
 * @method void setDiscountFixedPrice(float $DiscountFixedPrice) 设置预支合计费用的折扣价，单位：元。
 * @method float getOriginalUsagePrice() 获取后续合计费用的原价，单位：元/小时
 * @method void setOriginalUsagePrice(float $OriginalUsagePrice) 设置后续合计费用的原价，单位：元/小时
 * @method float getDiscountUsagePrice() 获取后续合计费用的折扣价，单位：元/小时
 * @method void setDiscountUsagePrice(float $DiscountUsagePrice) 设置后续合计费用的折扣价，单位：元/小时
 */
class ReservedInstancePrice extends AbstractModel
{
    /**
     * @var float 预支合计费用的原价，单位：元。
     */
    public $OriginalFixedPrice;

    /**
     * @var float 预支合计费用的折扣价，单位：元。
     */
    public $DiscountFixedPrice;

    /**
     * @var float 后续合计费用的原价，单位：元/小时
     */
    public $OriginalUsagePrice;

    /**
     * @var float 后续合计费用的折扣价，单位：元/小时
     */
    public $DiscountUsagePrice;

    /**
     * @param float $OriginalFixedPrice 预支合计费用的原价，单位：元。
     * @param float $DiscountFixedPrice 预支合计费用的折扣价，单位：元。
     * @param float $OriginalUsagePrice 后续合计费用的原价，单位：元/小时
     * @param float $DiscountUsagePrice 后续合计费用的折扣价，单位：元/小时
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
        if (array_key_exists("OriginalFixedPrice",$param) and $param["OriginalFixedPrice"] !== null) {
            $this->OriginalFixedPrice = $param["OriginalFixedPrice"];
        }

        if (array_key_exists("DiscountFixedPrice",$param) and $param["DiscountFixedPrice"] !== null) {
            $this->DiscountFixedPrice = $param["DiscountFixedPrice"];
        }

        if (array_key_exists("OriginalUsagePrice",$param) and $param["OriginalUsagePrice"] !== null) {
            $this->OriginalUsagePrice = $param["OriginalUsagePrice"];
        }

        if (array_key_exists("DiscountUsagePrice",$param) and $param["DiscountUsagePrice"] !== null) {
            $this->DiscountUsagePrice = $param["DiscountUsagePrice"];
        }
    }
}
