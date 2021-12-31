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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库实例价格
 *
 * @method float getUnitPrice() 获取单价
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnitPrice(float $UnitPrice) 设置单价
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getOriginalPrice() 获取原价
 * @method void setOriginalPrice(float $OriginalPrice) 设置原价
 * @method float getDiscountPrice() 获取折扣加
 * @method void setDiscountPrice(float $DiscountPrice) 设置折扣加
 */
class DBInstancePrice extends AbstractModel
{
    /**
     * @var float 单价
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnitPrice;

    /**
     * @var float 原价
     */
    public $OriginalPrice;

    /**
     * @var float 折扣加
     */
    public $DiscountPrice;

    /**
     * @param float $UnitPrice 单价
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $OriginalPrice 原价
     * @param float $DiscountPrice 折扣加
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
        if (array_key_exists("UnitPrice",$param) and $param["UnitPrice"] !== null) {
            $this->UnitPrice = $param["UnitPrice"];
        }

        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }

        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
        }
    }
}
