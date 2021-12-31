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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 接入点信息。
 *
 * @method string getAccessPointName() 获取接入点的名称。
 * @method void setAccessPointName(string $AccessPointName) 设置接入点的名称。
 * @method string getAccessPointId() 获取接入点唯一ID。
 * @method void setAccessPointId(string $AccessPointId) 设置接入点唯一ID。
 * @method string getState() 获取接入点的状态。可用，不可用。
 * @method void setState(string $State) 设置接入点的状态。可用，不可用。
 * @method string getLocation() 获取接入点的位置。
 * @method void setLocation(string $Location) 设置接入点的位置。
 * @method array getLineOperator() 获取接入点支持的运营商列表。
 * @method void setLineOperator(array $LineOperator) 设置接入点支持的运营商列表。
 * @method string getRegionId() 获取接入点管理的大区ID。
 * @method void setRegionId(string $RegionId) 设置接入点管理的大区ID。
 * @method array getAvailablePortType() 获取接入点可用的端口类型列表。1000BASE-T代表千兆电口，1000BASE-LX代表千兆单模光口10km，1000BASE-ZX代表千兆单模光口80km,10GBASE-LR代表万兆单模光口10km,10GBASE-ZR代表万兆单模光口80km,10GBASE-LH代表万兆单模光口40km,100GBASE-LR4代表100G单模光口10km
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailablePortType(array $AvailablePortType) 设置接入点可用的端口类型列表。1000BASE-T代表千兆电口，1000BASE-LX代表千兆单模光口10km，1000BASE-ZX代表千兆单模光口80km,10GBASE-LR代表万兆单模光口10km,10GBASE-ZR代表万兆单模光口80km,10GBASE-LH代表万兆单模光口40km,100GBASE-LR4代表100G单模光口10km
注意：此字段可能返回 null，表示取不到有效值。
 * @method Coordinate getCoordinate() 获取接入点经纬度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoordinate(Coordinate $Coordinate) 设置接入点经纬度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCity() 获取接入点所在城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCity(string $City) 设置接入点所在城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getArea() 获取接入点地域名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArea(string $Area) 设置接入点地域名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class AccessPoint extends AbstractModel
{
    /**
     * @var string 接入点的名称。
     */
    public $AccessPointName;

    /**
     * @var string 接入点唯一ID。
     */
    public $AccessPointId;

    /**
     * @var string 接入点的状态。可用，不可用。
     */
    public $State;

    /**
     * @var string 接入点的位置。
     */
    public $Location;

    /**
     * @var array 接入点支持的运营商列表。
     */
    public $LineOperator;

    /**
     * @var string 接入点管理的大区ID。
     */
    public $RegionId;

    /**
     * @var array 接入点可用的端口类型列表。1000BASE-T代表千兆电口，1000BASE-LX代表千兆单模光口10km，1000BASE-ZX代表千兆单模光口80km,10GBASE-LR代表万兆单模光口10km,10GBASE-ZR代表万兆单模光口80km,10GBASE-LH代表万兆单模光口40km,100GBASE-LR4代表100G单模光口10km
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvailablePortType;

    /**
     * @var Coordinate 接入点经纬度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Coordinate;

    /**
     * @var string 接入点所在城市
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $City;

    /**
     * @var string 接入点地域名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Area;

    /**
     * @param string $AccessPointName 接入点的名称。
     * @param string $AccessPointId 接入点唯一ID。
     * @param string $State 接入点的状态。可用，不可用。
     * @param string $Location 接入点的位置。
     * @param array $LineOperator 接入点支持的运营商列表。
     * @param string $RegionId 接入点管理的大区ID。
     * @param array $AvailablePortType 接入点可用的端口类型列表。1000BASE-T代表千兆电口，1000BASE-LX代表千兆单模光口10km，1000BASE-ZX代表千兆单模光口80km,10GBASE-LR代表万兆单模光口10km,10GBASE-ZR代表万兆单模光口80km,10GBASE-LH代表万兆单模光口40km,100GBASE-LR4代表100G单模光口10km
注意：此字段可能返回 null，表示取不到有效值。
     * @param Coordinate $Coordinate 接入点经纬度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $City 接入点所在城市
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Area 接入点地域名称
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
        if (array_key_exists("AccessPointName",$param) and $param["AccessPointName"] !== null) {
            $this->AccessPointName = $param["AccessPointName"];
        }

        if (array_key_exists("AccessPointId",$param) and $param["AccessPointId"] !== null) {
            $this->AccessPointId = $param["AccessPointId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("LineOperator",$param) and $param["LineOperator"] !== null) {
            $this->LineOperator = $param["LineOperator"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("AvailablePortType",$param) and $param["AvailablePortType"] !== null) {
            $this->AvailablePortType = $param["AvailablePortType"];
        }

        if (array_key_exists("Coordinate",$param) and $param["Coordinate"] !== null) {
            $this->Coordinate = new Coordinate();
            $this->Coordinate->deserialize($param["Coordinate"]);
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
