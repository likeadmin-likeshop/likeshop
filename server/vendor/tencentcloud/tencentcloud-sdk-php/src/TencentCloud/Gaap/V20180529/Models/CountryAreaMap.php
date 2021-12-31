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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 国家地区映射关系（名称和编码）
 *
 * @method string getNationCountryName() 获取国家名称。
 * @method void setNationCountryName(string $NationCountryName) 设置国家名称。
 * @method string getNationCountryInnerCode() 获取国家编码。
 * @method void setNationCountryInnerCode(string $NationCountryInnerCode) 设置国家编码。
 * @method string getGeographicalZoneName() 获取地区名称。
 * @method void setGeographicalZoneName(string $GeographicalZoneName) 设置地区名称。
 * @method string getGeographicalZoneInnerCode() 获取地区编码。
 * @method void setGeographicalZoneInnerCode(string $GeographicalZoneInnerCode) 设置地区编码。
 * @method string getContinentName() 获取大洲名称。
 * @method void setContinentName(string $ContinentName) 设置大洲名称。
 * @method string getContinentInnerCode() 获取大洲编码。
 * @method void setContinentInnerCode(string $ContinentInnerCode) 设置大洲编码。
 */
class CountryAreaMap extends AbstractModel
{
    /**
     * @var string 国家名称。
     */
    public $NationCountryName;

    /**
     * @var string 国家编码。
     */
    public $NationCountryInnerCode;

    /**
     * @var string 地区名称。
     */
    public $GeographicalZoneName;

    /**
     * @var string 地区编码。
     */
    public $GeographicalZoneInnerCode;

    /**
     * @var string 大洲名称。
     */
    public $ContinentName;

    /**
     * @var string 大洲编码。
     */
    public $ContinentInnerCode;

    /**
     * @param string $NationCountryName 国家名称。
     * @param string $NationCountryInnerCode 国家编码。
     * @param string $GeographicalZoneName 地区名称。
     * @param string $GeographicalZoneInnerCode 地区编码。
     * @param string $ContinentName 大洲名称。
     * @param string $ContinentInnerCode 大洲编码。
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
        if (array_key_exists("NationCountryName",$param) and $param["NationCountryName"] !== null) {
            $this->NationCountryName = $param["NationCountryName"];
        }

        if (array_key_exists("NationCountryInnerCode",$param) and $param["NationCountryInnerCode"] !== null) {
            $this->NationCountryInnerCode = $param["NationCountryInnerCode"];
        }

        if (array_key_exists("GeographicalZoneName",$param) and $param["GeographicalZoneName"] !== null) {
            $this->GeographicalZoneName = $param["GeographicalZoneName"];
        }

        if (array_key_exists("GeographicalZoneInnerCode",$param) and $param["GeographicalZoneInnerCode"] !== null) {
            $this->GeographicalZoneInnerCode = $param["GeographicalZoneInnerCode"];
        }

        if (array_key_exists("ContinentName",$param) and $param["ContinentName"] !== null) {
            $this->ContinentName = $param["ContinentName"];
        }

        if (array_key_exists("ContinentInnerCode",$param) and $param["ContinentInnerCode"] !== null) {
            $this->ContinentInnerCode = $param["ContinentInnerCode"];
        }
    }
}
