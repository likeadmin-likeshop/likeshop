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
namespace TencentCloud\Cis\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 价格
 *
 * @method float getDiscountPrice() 获取原价，单位：元
 * @method void setDiscountPrice(float $DiscountPrice) 设置原价，单位：元
 * @method float getOriginalPrice() 获取折扣价，单位：元
 * @method void setOriginalPrice(float $OriginalPrice) 设置折扣价，单位：元
 */
class Price extends AbstractModel
{
    /**
     * @var float 原价，单位：元
     */
    public $DiscountPrice;

    /**
     * @var float 折扣价，单位：元
     */
    public $OriginalPrice;

    /**
     * @param float $DiscountPrice 原价，单位：元
     * @param float $OriginalPrice 折扣价，单位：元
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
        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
        }

        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }
    }
}
