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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预付费订单的费用。
 *
 * @method float getOriginalPrice() 获取预付费云盘或快照预支费用的原价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginalPrice(float $OriginalPrice) 设置预付费云盘或快照预支费用的原价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDiscountPrice() 获取预付费云盘或快照预支费用的折扣价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiscountPrice(float $DiscountPrice) 设置预付费云盘或快照预支费用的折扣价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginalPriceHigh() 获取高精度预付费云盘或快照预支费用的原价，单位：元
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginalPriceHigh(string $OriginalPriceHigh) 设置高精度预付费云盘或快照预支费用的原价，单位：元
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiscountPriceHigh() 获取高精度预付费云盘或快照预支费用的折扣价，单位：元
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiscountPriceHigh(string $DiscountPriceHigh) 设置高精度预付费云盘或快照预支费用的折扣价，单位：元
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getUnitPrice() 获取后付费云盘原单价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitPrice(float $UnitPrice) 设置后付费云盘原单价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeUnit() 获取后付费云盘的计价单元，取值范围：<br><li>HOUR：表示后付费云盘的计价单元是按小时计算。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeUnit(string $ChargeUnit) 设置后付费云盘的计价单元，取值范围：<br><li>HOUR：表示后付费云盘的计价单元是按小时计算。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getUnitPriceDiscount() 获取后付费云盘折扣单价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitPriceDiscount(float $UnitPriceDiscount) 设置后付费云盘折扣单价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnitPriceHigh() 获取高精度后付费云盘原单价, 单位：元
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitPriceHigh(string $UnitPriceHigh) 设置高精度后付费云盘原单价, 单位：元
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnitPriceDiscountHigh() 获取高精度后付费云盘折扣单价, 单位：元
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitPriceDiscountHigh(string $UnitPriceDiscountHigh) 设置高精度后付费云盘折扣单价, 单位：元
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrepayPrice extends AbstractModel
{
    /**
     * @var float 预付费云盘或快照预支费用的原价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginalPrice;

    /**
     * @var float 预付费云盘或快照预支费用的折扣价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiscountPrice;

    /**
     * @var string 高精度预付费云盘或快照预支费用的原价，单位：元
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginalPriceHigh;

    /**
     * @var string 高精度预付费云盘或快照预支费用的折扣价，单位：元
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiscountPriceHigh;

    /**
     * @var float 后付费云盘原单价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitPrice;

    /**
     * @var string 后付费云盘的计价单元，取值范围：<br><li>HOUR：表示后付费云盘的计价单元是按小时计算。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeUnit;

    /**
     * @var float 后付费云盘折扣单价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitPriceDiscount;

    /**
     * @var string 高精度后付费云盘原单价, 单位：元
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitPriceHigh;

    /**
     * @var string 高精度后付费云盘折扣单价, 单位：元
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitPriceDiscountHigh;

    /**
     * @param float $OriginalPrice 预付费云盘或快照预支费用的原价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $DiscountPrice 预付费云盘或快照预支费用的折扣价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginalPriceHigh 高精度预付费云盘或快照预支费用的原价，单位：元
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiscountPriceHigh 高精度预付费云盘或快照预支费用的折扣价，单位：元
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $UnitPrice 后付费云盘原单价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeUnit 后付费云盘的计价单元，取值范围：<br><li>HOUR：表示后付费云盘的计价单元是按小时计算。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $UnitPriceDiscount 后付费云盘折扣单价，单位：元。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UnitPriceHigh 高精度后付费云盘原单价, 单位：元
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UnitPriceDiscountHigh 高精度后付费云盘折扣单价, 单位：元
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }

        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
        }

        if (array_key_exists("OriginalPriceHigh",$param) and $param["OriginalPriceHigh"] !== null) {
            $this->OriginalPriceHigh = $param["OriginalPriceHigh"];
        }

        if (array_key_exists("DiscountPriceHigh",$param) and $param["DiscountPriceHigh"] !== null) {
            $this->DiscountPriceHigh = $param["DiscountPriceHigh"];
        }

        if (array_key_exists("UnitPrice",$param) and $param["UnitPrice"] !== null) {
            $this->UnitPrice = $param["UnitPrice"];
        }

        if (array_key_exists("ChargeUnit",$param) and $param["ChargeUnit"] !== null) {
            $this->ChargeUnit = $param["ChargeUnit"];
        }

        if (array_key_exists("UnitPriceDiscount",$param) and $param["UnitPriceDiscount"] !== null) {
            $this->UnitPriceDiscount = $param["UnitPriceDiscount"];
        }

        if (array_key_exists("UnitPriceHigh",$param) and $param["UnitPriceHigh"] !== null) {
            $this->UnitPriceHigh = $param["UnitPriceHigh"];
        }

        if (array_key_exists("UnitPriceDiscountHigh",$param) and $param["UnitPriceDiscountHigh"] !== null) {
            $this->UnitPriceDiscountHigh = $param["UnitPriceDiscountHigh"];
        }
    }
}
