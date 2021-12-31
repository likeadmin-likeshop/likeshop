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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地域信息
 *
 * @method string getRegion() 获取地域ID
 * @method void setRegion(string $Region) 设置地域ID
 * @method integer getRegionId() 获取地域整型ID
 * @method void setRegionId(integer $RegionId) 设置地域整型ID
 * @method string getRegionDescription() 获取地域描述
 * @method void setRegionDescription(string $RegionDescription) 设置地域描述
 * @method array getZoneInfoSet() 获取该地域下的可用区信息
 * @method void setZoneInfoSet(array $ZoneInfoSet) 设置该地域下的可用区信息
 */
class RegionInfo extends AbstractModel
{
    /**
     * @var string 地域ID
     */
    public $Region;

    /**
     * @var integer 地域整型ID
     */
    public $RegionId;

    /**
     * @var string 地域描述
     */
    public $RegionDescription;

    /**
     * @var array 该地域下的可用区信息
     */
    public $ZoneInfoSet;

    /**
     * @param string $Region 地域ID
     * @param integer $RegionId 地域整型ID
     * @param string $RegionDescription 地域描述
     * @param array $ZoneInfoSet 该地域下的可用区信息
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionDescription",$param) and $param["RegionDescription"] !== null) {
            $this->RegionDescription = $param["RegionDescription"];
        }

        if (array_key_exists("ZoneInfoSet",$param) and $param["ZoneInfoSet"] !== null) {
            $this->ZoneInfoSet = [];
            foreach ($param["ZoneInfoSet"] as $key => $value){
                $obj = new ZoneInfo();
                $obj->deserialize($value);
                array_push($this->ZoneInfoSet, $obj);
            }
        }
    }
}
