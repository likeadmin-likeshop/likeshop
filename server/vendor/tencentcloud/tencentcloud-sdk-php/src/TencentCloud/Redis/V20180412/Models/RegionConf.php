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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地域信息
 *
 * @method string getRegionId() 获取地域ID
 * @method void setRegionId(string $RegionId) 设置地域ID
 * @method string getRegionName() 获取地域名称
 * @method void setRegionName(string $RegionName) 设置地域名称
 * @method string getRegionShortName() 获取地域简称
 * @method void setRegionShortName(string $RegionShortName) 设置地域简称
 * @method string getArea() 获取地域所在大区名称
 * @method void setArea(string $Area) 设置地域所在大区名称
 * @method array getZoneSet() 获取可用区信息
 * @method void setZoneSet(array $ZoneSet) 设置可用区信息
 */
class RegionConf extends AbstractModel
{
    /**
     * @var string 地域ID
     */
    public $RegionId;

    /**
     * @var string 地域名称
     */
    public $RegionName;

    /**
     * @var string 地域简称
     */
    public $RegionShortName;

    /**
     * @var string 地域所在大区名称
     */
    public $Area;

    /**
     * @var array 可用区信息
     */
    public $ZoneSet;

    /**
     * @param string $RegionId 地域ID
     * @param string $RegionName 地域名称
     * @param string $RegionShortName 地域简称
     * @param string $Area 地域所在大区名称
     * @param array $ZoneSet 可用区信息
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionShortName",$param) and $param["RegionShortName"] !== null) {
            $this->RegionShortName = $param["RegionShortName"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("ZoneSet",$param) and $param["ZoneSet"] !== null) {
            $this->ZoneSet = [];
            foreach ($param["ZoneSet"] as $key => $value){
                $obj = new ZoneCapacityConf();
                $obj->deserialize($value);
                array_push($this->ZoneSet, $obj);
            }
        }
    }
}
