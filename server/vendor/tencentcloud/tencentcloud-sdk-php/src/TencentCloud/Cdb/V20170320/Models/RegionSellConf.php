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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地域售卖配置
 *
 * @method string getRegionName() 获取地域中文名称
 * @method void setRegionName(string $RegionName) 设置地域中文名称
 * @method string getArea() 获取所属大区
 * @method void setArea(string $Area) 设置所属大区
 * @method integer getIsDefaultRegion() 获取是否为默认地域
 * @method void setIsDefaultRegion(integer $IsDefaultRegion) 设置是否为默认地域
 * @method string getRegion() 获取地域名称
 * @method void setRegion(string $Region) 设置地域名称
 * @method array getZonesConf() 获取可用区售卖配置
 * @method void setZonesConf(array $ZonesConf) 设置可用区售卖配置
 */
class RegionSellConf extends AbstractModel
{
    /**
     * @var string 地域中文名称
     */
    public $RegionName;

    /**
     * @var string 所属大区
     */
    public $Area;

    /**
     * @var integer 是否为默认地域
     */
    public $IsDefaultRegion;

    /**
     * @var string 地域名称
     */
    public $Region;

    /**
     * @var array 可用区售卖配置
     */
    public $ZonesConf;

    /**
     * @param string $RegionName 地域中文名称
     * @param string $Area 所属大区
     * @param integer $IsDefaultRegion 是否为默认地域
     * @param string $Region 地域名称
     * @param array $ZonesConf 可用区售卖配置
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
        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("IsDefaultRegion",$param) and $param["IsDefaultRegion"] !== null) {
            $this->IsDefaultRegion = $param["IsDefaultRegion"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ZonesConf",$param) and $param["ZonesConf"] !== null) {
            $this->ZonesConf = [];
            foreach ($param["ZonesConf"] as $key => $value){
                $obj = new ZoneSellConf();
                $obj->deserialize($value);
                array_push($this->ZonesConf, $obj);
            }
        }
    }
}
