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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据订阅地域售卖信息
 *
 * @method string getRegionName() 获取地域名称，如广州
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionName(string $RegionName) 设置地域名称，如广州
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地区标识，如ap-guangzhou
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地区标识，如ap-guangzhou
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getArea() 获取地域名称，如华南地区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArea(string $Area) 设置地域名称，如华南地区
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsDefaultRegion() 获取是否为默认地域，0 - 不是，1 - 是的
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDefaultRegion(integer $IsDefaultRegion) 设置是否为默认地域，0 - 不是，1 - 是的
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取当前地域的售卖情况，1 - 正常， 2-灰度，3 - 停售
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置当前地域的售卖情况，1 - 正常， 2-灰度，3 - 停售
注意：此字段可能返回 null，表示取不到有效值。
 */
class SubscribeRegionConf extends AbstractModel
{
    /**
     * @var string 地域名称，如广州
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionName;

    /**
     * @var string 地区标识，如ap-guangzhou
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 地域名称，如华南地区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Area;

    /**
     * @var integer 是否为默认地域，0 - 不是，1 - 是的
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDefaultRegion;

    /**
     * @var integer 当前地域的售卖情况，1 - 正常， 2-灰度，3 - 停售
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param string $RegionName 地域名称，如广州
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地区标识，如ap-guangzhou
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Area 地域名称，如华南地区
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsDefaultRegion 是否为默认地域，0 - 不是，1 - 是的
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 当前地域的售卖情况，1 - 正常， 2-灰度，3 - 停售
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("IsDefaultRegion",$param) and $param["IsDefaultRegion"] !== null) {
            $this->IsDefaultRegion = $param["IsDefaultRegion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
