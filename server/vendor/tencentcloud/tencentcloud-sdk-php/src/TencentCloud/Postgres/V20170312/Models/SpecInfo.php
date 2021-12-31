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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述某个地域下某个可用区的可售卖规格详细信息。
 *
 * @method string getRegion() 获取地域英文编码，对应RegionSet的Region字段
 * @method void setRegion(string $Region) 设置地域英文编码，对应RegionSet的Region字段
 * @method string getZone() 获取区域英文编码，对应ZoneSet的Zone字段
 * @method void setZone(string $Zone) 设置区域英文编码，对应ZoneSet的Zone字段
 * @method array getSpecItemInfoList() 获取规格详细信息列表
 * @method void setSpecItemInfoList(array $SpecItemInfoList) 设置规格详细信息列表
 */
class SpecInfo extends AbstractModel
{
    /**
     * @var string 地域英文编码，对应RegionSet的Region字段
     */
    public $Region;

    /**
     * @var string 区域英文编码，对应ZoneSet的Zone字段
     */
    public $Zone;

    /**
     * @var array 规格详细信息列表
     */
    public $SpecItemInfoList;

    /**
     * @param string $Region 地域英文编码，对应RegionSet的Region字段
     * @param string $Zone 区域英文编码，对应ZoneSet的Zone字段
     * @param array $SpecItemInfoList 规格详细信息列表
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

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SpecItemInfoList",$param) and $param["SpecItemInfoList"] !== null) {
            $this->SpecItemInfoList = [];
            foreach ($param["SpecItemInfoList"] as $key => $value){
                $obj = new SpecItemInfo();
                $obj->deserialize($value);
                array_push($this->SpecItemInfoList, $obj);
            }
        }
    }
}
