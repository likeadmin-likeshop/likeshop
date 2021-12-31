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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述实例的位置相关信息。
 *
 * @method ZoneInfo getZoneInfo() 获取实例所在的Zone的信息。
 * @method void setZoneInfo(ZoneInfo $ZoneInfo) 设置实例所在的Zone的信息。
 * @method Country getCountry() 获取实例所在的国家的信息。
 * @method void setCountry(Country $Country) 设置实例所在的国家的信息。
 * @method Area getArea() 获取实例所在的Area的信息。
 * @method void setArea(Area $Area) 设置实例所在的Area的信息。
 * @method Province getProvince() 获取实例所在的省份的信息。
 * @method void setProvince(Province $Province) 设置实例所在的省份的信息。
 * @method City getCity() 获取实例所在的城市的信息。
 * @method void setCity(City $City) 设置实例所在的城市的信息。
 * @method RegionInfo getRegionInfo() 获取实例所在的Region的信息。
 * @method void setRegionInfo(RegionInfo $RegionInfo) 设置实例所在的Region的信息。
 */
class Position extends AbstractModel
{
    /**
     * @var ZoneInfo 实例所在的Zone的信息。
     */
    public $ZoneInfo;

    /**
     * @var Country 实例所在的国家的信息。
     */
    public $Country;

    /**
     * @var Area 实例所在的Area的信息。
     */
    public $Area;

    /**
     * @var Province 实例所在的省份的信息。
     */
    public $Province;

    /**
     * @var City 实例所在的城市的信息。
     */
    public $City;

    /**
     * @var RegionInfo 实例所在的Region的信息。
     */
    public $RegionInfo;

    /**
     * @param ZoneInfo $ZoneInfo 实例所在的Zone的信息。
     * @param Country $Country 实例所在的国家的信息。
     * @param Area $Area 实例所在的Area的信息。
     * @param Province $Province 实例所在的省份的信息。
     * @param City $City 实例所在的城市的信息。
     * @param RegionInfo $RegionInfo 实例所在的Region的信息。
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
        if (array_key_exists("ZoneInfo",$param) and $param["ZoneInfo"] !== null) {
            $this->ZoneInfo = new ZoneInfo();
            $this->ZoneInfo->deserialize($param["ZoneInfo"]);
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = new Country();
            $this->Country->deserialize($param["Country"]);
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = new Area();
            $this->Area->deserialize($param["Area"]);
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = new Province();
            $this->Province->deserialize($param["Province"]);
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = new City();
            $this->City->deserialize($param["City"]);
        }

        if (array_key_exists("RegionInfo",$param) and $param["RegionInfo"] !== null) {
            $this->RegionInfo = new RegionInfo();
            $this->RegionInfo->deserialize($param["RegionInfo"]);
        }
    }
}
