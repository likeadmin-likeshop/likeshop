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
 * 域名联系人信息
 *
 * @method string getOrganizationNameCN() 获取注册人（中文）
 * @method void setOrganizationNameCN(string $OrganizationNameCN) 设置注册人（中文）
 * @method string getOrganizationName() 获取注册人（英文）
 * @method void setOrganizationName(string $OrganizationName) 设置注册人（英文）
 * @method string getRegistrantNameCN() 获取联系人（中文）
 * @method void setRegistrantNameCN(string $RegistrantNameCN) 设置联系人（中文）
 * @method string getRegistrantName() 获取联系人（英文）
 * @method void setRegistrantName(string $RegistrantName) 设置联系人（英文）
 * @method string getProvinceCN() 获取省份（中文）
 * @method void setProvinceCN(string $ProvinceCN) 设置省份（中文）
 * @method string getCityCN() 获取城市（中文）
 * @method void setCityCN(string $CityCN) 设置城市（中文）
 * @method string getStreetCN() 获取街道（中文）
 * @method void setStreetCN(string $StreetCN) 设置街道（中文）
 * @method string getStreet() 获取街道（英文）
 * @method void setStreet(string $Street) 设置街道（英文）
 * @method string getCountryCN() 获取国家（中文）
 * @method void setCountryCN(string $CountryCN) 设置国家（中文）
 * @method string getTelephone() 获取联系人手机号
 * @method void setTelephone(string $Telephone) 设置联系人手机号
 * @method string getEmail() 获取联系人邮箱
 * @method void setEmail(string $Email) 设置联系人邮箱
 * @method string getZipCode() 获取邮编
 * @method void setZipCode(string $ZipCode) 设置邮编
 * @method string getRegistrantType() 获取用户类型 E:组织， I:个人
 * @method void setRegistrantType(string $RegistrantType) 设置用户类型 E:组织， I:个人
 * @method string getProvince() 获取省份（英文）。作为入参时可以不填
 * @method void setProvince(string $Province) 设置省份（英文）。作为入参时可以不填
 * @method string getCity() 获取城市（英文）。作为入参时可以不填
 * @method void setCity(string $City) 设置城市（英文）。作为入参时可以不填
 * @method string getCountry() 获取国家（英文）。作为入参时可以不填
 * @method void setCountry(string $Country) 设置国家（英文）。作为入参时可以不填
 */
class ContactInfo extends AbstractModel
{
    /**
     * @var string 注册人（中文）
     */
    public $OrganizationNameCN;

    /**
     * @var string 注册人（英文）
     */
    public $OrganizationName;

    /**
     * @var string 联系人（中文）
     */
    public $RegistrantNameCN;

    /**
     * @var string 联系人（英文）
     */
    public $RegistrantName;

    /**
     * @var string 省份（中文）
     */
    public $ProvinceCN;

    /**
     * @var string 城市（中文）
     */
    public $CityCN;

    /**
     * @var string 街道（中文）
     */
    public $StreetCN;

    /**
     * @var string 街道（英文）
     */
    public $Street;

    /**
     * @var string 国家（中文）
     */
    public $CountryCN;

    /**
     * @var string 联系人手机号
     */
    public $Telephone;

    /**
     * @var string 联系人邮箱
     */
    public $Email;

    /**
     * @var string 邮编
     */
    public $ZipCode;

    /**
     * @var string 用户类型 E:组织， I:个人
     */
    public $RegistrantType;

    /**
     * @var string 省份（英文）。作为入参时可以不填
     */
    public $Province;

    /**
     * @var string 城市（英文）。作为入参时可以不填
     */
    public $City;

    /**
     * @var string 国家（英文）。作为入参时可以不填
     */
    public $Country;

    /**
     * @param string $OrganizationNameCN 注册人（中文）
     * @param string $OrganizationName 注册人（英文）
     * @param string $RegistrantNameCN 联系人（中文）
     * @param string $RegistrantName 联系人（英文）
     * @param string $ProvinceCN 省份（中文）
     * @param string $CityCN 城市（中文）
     * @param string $StreetCN 街道（中文）
     * @param string $Street 街道（英文）
     * @param string $CountryCN 国家（中文）
     * @param string $Telephone 联系人手机号
     * @param string $Email 联系人邮箱
     * @param string $ZipCode 邮编
     * @param string $RegistrantType 用户类型 E:组织， I:个人
     * @param string $Province 省份（英文）。作为入参时可以不填
     * @param string $City 城市（英文）。作为入参时可以不填
     * @param string $Country 国家（英文）。作为入参时可以不填
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
        if (array_key_exists("OrganizationNameCN",$param) and $param["OrganizationNameCN"] !== null) {
            $this->OrganizationNameCN = $param["OrganizationNameCN"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("RegistrantNameCN",$param) and $param["RegistrantNameCN"] !== null) {
            $this->RegistrantNameCN = $param["RegistrantNameCN"];
        }

        if (array_key_exists("RegistrantName",$param) and $param["RegistrantName"] !== null) {
            $this->RegistrantName = $param["RegistrantName"];
        }

        if (array_key_exists("ProvinceCN",$param) and $param["ProvinceCN"] !== null) {
            $this->ProvinceCN = $param["ProvinceCN"];
        }

        if (array_key_exists("CityCN",$param) and $param["CityCN"] !== null) {
            $this->CityCN = $param["CityCN"];
        }

        if (array_key_exists("StreetCN",$param) and $param["StreetCN"] !== null) {
            $this->StreetCN = $param["StreetCN"];
        }

        if (array_key_exists("Street",$param) and $param["Street"] !== null) {
            $this->Street = $param["Street"];
        }

        if (array_key_exists("CountryCN",$param) and $param["CountryCN"] !== null) {
            $this->CountryCN = $param["CountryCN"];
        }

        if (array_key_exists("Telephone",$param) and $param["Telephone"] !== null) {
            $this->Telephone = $param["Telephone"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("ZipCode",$param) and $param["ZipCode"] !== null) {
            $this->ZipCode = $param["ZipCode"];
        }

        if (array_key_exists("RegistrantType",$param) and $param["RegistrantType"] !== null) {
            $this->RegistrantType = $param["RegistrantType"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }
    }
}
