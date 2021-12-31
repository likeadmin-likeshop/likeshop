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
namespace TencentCloud\Youmall\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客户所属的门店信息
 *
 * @method string getCompanyId() 获取公司ID
 * @method void setCompanyId(string $CompanyId) 设置公司ID
 * @method integer getShopId() 获取门店ID
 * @method void setShopId(integer $ShopId) 设置门店ID
 * @method string getShopName() 获取门店名称
 * @method void setShopName(string $ShopName) 设置门店名称
 * @method string getShopCode() 获取客户门店编码
 * @method void setShopCode(string $ShopCode) 设置客户门店编码
 * @method string getProvince() 获取省
 * @method void setProvince(string $Province) 设置省
 * @method string getCity() 获取市
 * @method void setCity(string $City) 设置市
 * @method string getCompanyName() 获取公司名称
 * @method void setCompanyName(string $CompanyName) 设置公司名称
 */
class ShopInfo extends AbstractModel
{
    /**
     * @var string 公司ID
     */
    public $CompanyId;

    /**
     * @var integer 门店ID
     */
    public $ShopId;

    /**
     * @var string 门店名称
     */
    public $ShopName;

    /**
     * @var string 客户门店编码
     */
    public $ShopCode;

    /**
     * @var string 省
     */
    public $Province;

    /**
     * @var string 市
     */
    public $City;

    /**
     * @var string 公司名称
     */
    public $CompanyName;

    /**
     * @param string $CompanyId 公司ID
     * @param integer $ShopId 门店ID
     * @param string $ShopName 门店名称
     * @param string $ShopCode 客户门店编码
     * @param string $Province 省
     * @param string $City 市
     * @param string $CompanyName 公司名称
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
        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("ShopId",$param) and $param["ShopId"] !== null) {
            $this->ShopId = $param["ShopId"];
        }

        if (array_key_exists("ShopName",$param) and $param["ShopName"] !== null) {
            $this->ShopName = $param["ShopName"];
        }

        if (array_key_exists("ShopCode",$param) and $param["ShopCode"] !== null) {
            $this->ShopCode = $param["ShopCode"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("CompanyName",$param) and $param["CompanyName"] !== null) {
            $this->CompanyName = $param["CompanyName"];
        }
    }
}
