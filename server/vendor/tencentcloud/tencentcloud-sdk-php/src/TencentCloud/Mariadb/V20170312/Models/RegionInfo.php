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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 售卖可用区信息
 *
 * @method string getRegion() 获取地域英文ID
 * @method void setRegion(string $Region) 设置地域英文ID
 * @method integer getRegionId() 获取地域数字ID
 * @method void setRegionId(integer $RegionId) 设置地域数字ID
 * @method string getRegionName() 获取地域中文名
 * @method void setRegionName(string $RegionName) 设置地域中文名
 * @method array getZoneList() 获取可用区列表
 * @method void setZoneList(array $ZoneList) 设置可用区列表
 * @method array getAvailableChoice() 获取可选择的主可用区和从可用区
 * @method void setAvailableChoice(array $AvailableChoice) 设置可选择的主可用区和从可用区
 */
class RegionInfo extends AbstractModel
{
    /**
     * @var string 地域英文ID
     */
    public $Region;

    /**
     * @var integer 地域数字ID
     */
    public $RegionId;

    /**
     * @var string 地域中文名
     */
    public $RegionName;

    /**
     * @var array 可用区列表
     */
    public $ZoneList;

    /**
     * @var array 可选择的主可用区和从可用区
     */
    public $AvailableChoice;

    /**
     * @param string $Region 地域英文ID
     * @param integer $RegionId 地域数字ID
     * @param string $RegionName 地域中文名
     * @param array $ZoneList 可用区列表
     * @param array $AvailableChoice 可选择的主可用区和从可用区
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

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("ZoneList",$param) and $param["ZoneList"] !== null) {
            $this->ZoneList = [];
            foreach ($param["ZoneList"] as $key => $value){
                $obj = new ZonesInfo();
                $obj->deserialize($value);
                array_push($this->ZoneList, $obj);
            }
        }

        if (array_key_exists("AvailableChoice",$param) and $param["AvailableChoice"] !== null) {
            $this->AvailableChoice = [];
            foreach ($param["AvailableChoice"] as $key => $value){
                $obj = new ZoneChooseInfo();
                $obj->deserialize($value);
                array_push($this->AvailableChoice, $obj);
            }
        }
    }
}
