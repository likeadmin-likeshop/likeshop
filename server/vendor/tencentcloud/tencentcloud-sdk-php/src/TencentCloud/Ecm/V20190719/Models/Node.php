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
 * 节点信息
 *
 * @method ZoneInfo getZoneInfo() 获取zone信息
 * @method void setZoneInfo(ZoneInfo $ZoneInfo) 设置zone信息
 * @method Country getCountry() 获取国家信息
 * @method void setCountry(Country $Country) 设置国家信息
 * @method Area getArea() 获取区域信息
 * @method void setArea(Area $Area) 设置区域信息
 * @method Province getProvince() 获取省份信息
 * @method void setProvince(Province $Province) 设置省份信息
 * @method City getCity() 获取城市信息
 * @method void setCity(City $City) 设置城市信息
 * @method RegionInfo getRegionInfo() 获取Region信息
 * @method void setRegionInfo(RegionInfo $RegionInfo) 设置Region信息
 * @method array getISPSet() 获取运营商列表
 * @method void setISPSet(array $ISPSet) 设置运营商列表
 * @method integer getISPNum() 获取运营商数量
 * @method void setISPNum(integer $ISPNum) 设置运营商数量
 */
class Node extends AbstractModel
{
    /**
     * @var ZoneInfo zone信息
     */
    public $ZoneInfo;

    /**
     * @var Country 国家信息
     */
    public $Country;

    /**
     * @var Area 区域信息
     */
    public $Area;

    /**
     * @var Province 省份信息
     */
    public $Province;

    /**
     * @var City 城市信息
     */
    public $City;

    /**
     * @var RegionInfo Region信息
     */
    public $RegionInfo;

    /**
     * @var array 运营商列表
     */
    public $ISPSet;

    /**
     * @var integer 运营商数量
     */
    public $ISPNum;

    /**
     * @param ZoneInfo $ZoneInfo zone信息
     * @param Country $Country 国家信息
     * @param Area $Area 区域信息
     * @param Province $Province 省份信息
     * @param City $City 城市信息
     * @param RegionInfo $RegionInfo Region信息
     * @param array $ISPSet 运营商列表
     * @param integer $ISPNum 运营商数量
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

        if (array_key_exists("ISPSet",$param) and $param["ISPSet"] !== null) {
            $this->ISPSet = [];
            foreach ($param["ISPSet"] as $key => $value){
                $obj = new ISP();
                $obj->deserialize($value);
                array_push($this->ISPSet, $obj);
            }
        }

        if (array_key_exists("ISPNum",$param) and $param["ISPNum"] !== null) {
            $this->ISPNum = $param["ISPNum"];
        }
    }
}
