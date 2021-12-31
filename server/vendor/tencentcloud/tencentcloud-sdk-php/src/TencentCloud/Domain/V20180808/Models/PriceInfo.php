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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名价格信息
 *
 * @method string getTld() 获取域名后缀，例如.com
 * @method void setTld(string $Tld) 设置域名后缀，例如.com
 * @method integer getYear() 获取购买年限，范围[1-10]
 * @method void setYear(integer $Year) 设置购买年限，范围[1-10]
 * @method integer getPrice() 获取域名原价
 * @method void setPrice(integer $Price) 设置域名原价
 * @method integer getRealPrice() 获取域名现价
 * @method void setRealPrice(integer $RealPrice) 设置域名现价
 * @method string getOperation() 获取商品的购买类型，新购，续费，赎回，转入，续费并转入
 * @method void setOperation(string $Operation) 设置商品的购买类型，新购，续费，赎回，转入，续费并转入
 */
class PriceInfo extends AbstractModel
{
    /**
     * @var string 域名后缀，例如.com
     */
    public $Tld;

    /**
     * @var integer 购买年限，范围[1-10]
     */
    public $Year;

    /**
     * @var integer 域名原价
     */
    public $Price;

    /**
     * @var integer 域名现价
     */
    public $RealPrice;

    /**
     * @var string 商品的购买类型，新购，续费，赎回，转入，续费并转入
     */
    public $Operation;

    /**
     * @param string $Tld 域名后缀，例如.com
     * @param integer $Year 购买年限，范围[1-10]
     * @param integer $Price 域名原价
     * @param integer $RealPrice 域名现价
     * @param string $Operation 商品的购买类型，新购，续费，赎回，转入，续费并转入
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
        if (array_key_exists("Tld",$param) and $param["Tld"] !== null) {
            $this->Tld = $param["Tld"];
        }

        if (array_key_exists("Year",$param) and $param["Year"] !== null) {
            $this->Year = $param["Year"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("RealPrice",$param) and $param["RealPrice"] !== null) {
            $this->RealPrice = $param["RealPrice"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }
    }
}
