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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地域实体对象
 *
 * @method integer getRegionId() 获取地域ID
 * @method void setRegionId(integer $RegionId) 设置地域ID
 * @method string getRegionName() 获取地域名称
 * @method void setRegionName(string $RegionName) 设置地域名称
 * @method string getAreaName() 获取区域名称
 * @method void setAreaName(string $AreaName) 设置区域名称
 * @method string getRegionCode() 获取地域代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionCode(string $RegionCode) 设置地域代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegionCodeV3() 获取地域代码（V3版本）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionCodeV3(string $RegionCodeV3) 设置地域代码（V3版本）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSupport() 获取NONE:默认值不支持任何特殊机型\nCVM:支持CVM类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupport(string $Support) 设置NONE:默认值不支持任何特殊机型\nCVM:支持CVM类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIpv6() 获取是否支持ipv6, 0：表示不支持，1：表示支持
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpv6(integer $Ipv6) 设置是否支持ipv6, 0：表示不支持，1：表示支持
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMultiZone() 获取是否支持跨可用区, 0：表示不支持，1：表示支持
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMultiZone(integer $MultiZone) 设置是否支持跨可用区, 0：表示不支持，1：表示支持
注意：此字段可能返回 null，表示取不到有效值。
 */
class Region extends AbstractModel
{
    /**
     * @var integer 地域ID
     */
    public $RegionId;

    /**
     * @var string 地域名称
     */
    public $RegionName;

    /**
     * @var string 区域名称
     */
    public $AreaName;

    /**
     * @var string 地域代码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionCode;

    /**
     * @var string 地域代码（V3版本）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionCodeV3;

    /**
     * @var string NONE:默认值不支持任何特殊机型\nCVM:支持CVM类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Support;

    /**
     * @var integer 是否支持ipv6, 0：表示不支持，1：表示支持
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ipv6;

    /**
     * @var integer 是否支持跨可用区, 0：表示不支持，1：表示支持
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MultiZone;

    /**
     * @param integer $RegionId 地域ID
     * @param string $RegionName 地域名称
     * @param string $AreaName 区域名称
     * @param string $RegionCode 地域代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegionCodeV3 地域代码（V3版本）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Support NONE:默认值不支持任何特殊机型\nCVM:支持CVM类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Ipv6 是否支持ipv6, 0：表示不支持，1：表示支持
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MultiZone 是否支持跨可用区, 0：表示不支持，1：表示支持
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("AreaName",$param) and $param["AreaName"] !== null) {
            $this->AreaName = $param["AreaName"];
        }

        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("RegionCodeV3",$param) and $param["RegionCodeV3"] !== null) {
            $this->RegionCodeV3 = $param["RegionCodeV3"];
        }

        if (array_key_exists("Support",$param) and $param["Support"] !== null) {
            $this->Support = $param["Support"];
        }

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = $param["Ipv6"];
        }

        if (array_key_exists("MultiZone",$param) and $param["MultiZone"] !== null) {
            $this->MultiZone = $param["MultiZone"];
        }
    }
}
