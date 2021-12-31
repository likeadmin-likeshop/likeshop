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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 版本控制-区域数组
 *
 * @method string getRegion() 获取区域名称，如“ap-beijing”
 * @method void setRegion(string $Region) 设置区域名称，如“ap-beijing”
 * @method string getRegionName() 获取区域名称，如“bj”
 * @method void setRegionName(string $RegionName) 设置区域名称，如“bj”
 * @method string getRegionStatus() 获取区域可用情况，当区域内至少有一个可用区处于可售状态时，取值为AVAILABLE，否则为UNAVAILABLE
 * @method void setRegionStatus(string $RegionStatus) 设置区域可用情况，当区域内至少有一个可用区处于可售状态时，取值为AVAILABLE，否则为UNAVAILABLE
 * @method array getZones() 获取可用区数组
 * @method void setZones(array $Zones) 设置可用区数组
 * @method string getRegionCnName() 获取区域中文名称，如“广州”
 * @method void setRegionCnName(string $RegionCnName) 设置区域中文名称，如“广州”
 */
class AvailableRegion extends AbstractModel
{
    /**
     * @var string 区域名称，如“ap-beijing”
     */
    public $Region;

    /**
     * @var string 区域名称，如“bj”
     */
    public $RegionName;

    /**
     * @var string 区域可用情况，当区域内至少有一个可用区处于可售状态时，取值为AVAILABLE，否则为UNAVAILABLE
     */
    public $RegionStatus;

    /**
     * @var array 可用区数组
     */
    public $Zones;

    /**
     * @var string 区域中文名称，如“广州”
     */
    public $RegionCnName;

    /**
     * @param string $Region 区域名称，如“ap-beijing”
     * @param string $RegionName 区域名称，如“bj”
     * @param string $RegionStatus 区域可用情况，当区域内至少有一个可用区处于可售状态时，取值为AVAILABLE，否则为UNAVAILABLE
     * @param array $Zones 可用区数组
     * @param string $RegionCnName 区域中文名称，如“广州”
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

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionStatus",$param) and $param["RegionStatus"] !== null) {
            $this->RegionStatus = $param["RegionStatus"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = [];
            foreach ($param["Zones"] as $key => $value){
                $obj = new AvailableZone();
                $obj->deserialize($value);
                array_push($this->Zones, $obj);
            }
        }

        if (array_key_exists("RegionCnName",$param) and $param["RegionCnName"] !== null) {
            $this->RegionCnName = $param["RegionCnName"];
        }
    }
}
