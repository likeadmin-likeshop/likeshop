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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 公司信息
 *
 * @method string getCompanyName() 获取公司名称
 * @method void setCompanyName(string $CompanyName) 设置公司名称
 * @method integer getCompanyId() 获取公司ID
 * @method void setCompanyId(integer $CompanyId) 设置公司ID
 * @method string getCompanyCountry() 获取公司所在国家
 * @method void setCompanyCountry(string $CompanyCountry) 设置公司所在国家
 * @method string getCompanyProvince() 获取公司所在省份
 * @method void setCompanyProvince(string $CompanyProvince) 设置公司所在省份
 * @method string getCompanyCity() 获取公司所在城市
 * @method void setCompanyCity(string $CompanyCity) 设置公司所在城市
 * @method string getCompanyAddress() 获取公司所在详细地址
 * @method void setCompanyAddress(string $CompanyAddress) 设置公司所在详细地址
 * @method string getCompanyPhone() 获取公司电话
 * @method void setCompanyPhone(string $CompanyPhone) 设置公司电话
 */
class CompanyInfo extends AbstractModel
{
    /**
     * @var string 公司名称
     */
    public $CompanyName;

    /**
     * @var integer 公司ID
     */
    public $CompanyId;

    /**
     * @var string 公司所在国家
     */
    public $CompanyCountry;

    /**
     * @var string 公司所在省份
     */
    public $CompanyProvince;

    /**
     * @var string 公司所在城市
     */
    public $CompanyCity;

    /**
     * @var string 公司所在详细地址
     */
    public $CompanyAddress;

    /**
     * @var string 公司电话
     */
    public $CompanyPhone;

    /**
     * @param string $CompanyName 公司名称
     * @param integer $CompanyId 公司ID
     * @param string $CompanyCountry 公司所在国家
     * @param string $CompanyProvince 公司所在省份
     * @param string $CompanyCity 公司所在城市
     * @param string $CompanyAddress 公司所在详细地址
     * @param string $CompanyPhone 公司电话
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
        if (array_key_exists("CompanyName",$param) and $param["CompanyName"] !== null) {
            $this->CompanyName = $param["CompanyName"];
        }

        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("CompanyCountry",$param) and $param["CompanyCountry"] !== null) {
            $this->CompanyCountry = $param["CompanyCountry"];
        }

        if (array_key_exists("CompanyProvince",$param) and $param["CompanyProvince"] !== null) {
            $this->CompanyProvince = $param["CompanyProvince"];
        }

        if (array_key_exists("CompanyCity",$param) and $param["CompanyCity"] !== null) {
            $this->CompanyCity = $param["CompanyCity"];
        }

        if (array_key_exists("CompanyAddress",$param) and $param["CompanyAddress"] !== null) {
            $this->CompanyAddress = $param["CompanyAddress"];
        }

        if (array_key_exists("CompanyPhone",$param) and $param["CompanyPhone"] !== null) {
            $this->CompanyPhone = $param["CompanyPhone"];
        }
    }
}
