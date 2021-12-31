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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BlueprintPrice	自定义镜像的价格参数。
 *
 * @method float getOriginalBlueprintPrice() 获取镜像单价，原价。单位元。
 * @method void setOriginalBlueprintPrice(float $OriginalBlueprintPrice) 设置镜像单价，原价。单位元。
 * @method float getOriginalPrice() 获取镜像总价，原价。单位元。
 * @method void setOriginalPrice(float $OriginalPrice) 设置镜像总价，原价。单位元。
 * @method integer getDiscount() 获取折扣。
 * @method void setDiscount(integer $Discount) 设置折扣。
 * @method float getDiscountPrice() 获取镜像折扣后总价。单位元。
 * @method void setDiscountPrice(float $DiscountPrice) 设置镜像折扣后总价。单位元。
 */
class BlueprintPrice extends AbstractModel
{
    /**
     * @var float 镜像单价，原价。单位元。
     */
    public $OriginalBlueprintPrice;

    /**
     * @var float 镜像总价，原价。单位元。
     */
    public $OriginalPrice;

    /**
     * @var integer 折扣。
     */
    public $Discount;

    /**
     * @var float 镜像折扣后总价。单位元。
     */
    public $DiscountPrice;

    /**
     * @param float $OriginalBlueprintPrice 镜像单价，原价。单位元。
     * @param float $OriginalPrice 镜像总价，原价。单位元。
     * @param integer $Discount 折扣。
     * @param float $DiscountPrice 镜像折扣后总价。单位元。
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
        if (array_key_exists("OriginalBlueprintPrice",$param) and $param["OriginalBlueprintPrice"] !== null) {
            $this->OriginalBlueprintPrice = $param["OriginalBlueprintPrice"];
        }

        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
        }
    }
}
