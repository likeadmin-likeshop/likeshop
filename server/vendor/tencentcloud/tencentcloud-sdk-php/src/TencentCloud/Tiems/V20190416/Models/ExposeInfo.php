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
namespace TencentCloud\Tiems\V20190416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 暴露信息
 *
 * @method string getExposeType() 获取暴露方式，支持 EXTERNAL（外网暴露），VPC （VPC内网打通）
 * @method void setExposeType(string $ExposeType) 设置暴露方式，支持 EXTERNAL（外网暴露），VPC （VPC内网打通）
 * @method string getIp() 获取暴露Ip。暴露方式为 EXTERNAL 为外网 Ip，暴露方式为 VPC 时为指定 Vpc 下的Vip
 * @method void setIp(string $Ip) 设置暴露Ip。暴露方式为 EXTERNAL 为外网 Ip，暴露方式为 VPC 时为指定 Vpc 下的Vip
 * @method string getVpcId() 获取暴露方式为 VPC 时，打通的私有网络Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置暴露方式为 VPC 时，打通的私有网络Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取暴露方式为 VPC 时，打通的子网Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置暴露方式为 VPC 时，打通的子网Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGateWayServiceId() 获取GATEWAY 服务id，ExposeType = GATEWAY 时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGateWayServiceId(string $GateWayServiceId) 设置GATEWAY 服务id，ExposeType = GATEWAY 时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGateWayAPIId() 获取GATEWAY api id，ExposeType = GATEWAY 时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGateWayAPIId(string $GateWayAPIId) 设置GATEWAY api id，ExposeType = GATEWAY 时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGateWayDomain() 获取GATEWAY domain，ExposeType = GATEWAY 时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGateWayDomain(string $GateWayDomain) 设置GATEWAY domain，ExposeType = GATEWAY 时返回
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExposeInfo extends AbstractModel
{
    /**
     * @var string 暴露方式，支持 EXTERNAL（外网暴露），VPC （VPC内网打通）
     */
    public $ExposeType;

    /**
     * @var string 暴露Ip。暴露方式为 EXTERNAL 为外网 Ip，暴露方式为 VPC 时为指定 Vpc 下的Vip
     */
    public $Ip;

    /**
     * @var string 暴露方式为 VPC 时，打通的私有网络Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 暴露方式为 VPC 时，打通的子网Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string GATEWAY 服务id，ExposeType = GATEWAY 时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GateWayServiceId;

    /**
     * @var string GATEWAY api id，ExposeType = GATEWAY 时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GateWayAPIId;

    /**
     * @var string GATEWAY domain，ExposeType = GATEWAY 时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GateWayDomain;

    /**
     * @param string $ExposeType 暴露方式，支持 EXTERNAL（外网暴露），VPC （VPC内网打通）
     * @param string $Ip 暴露Ip。暴露方式为 EXTERNAL 为外网 Ip，暴露方式为 VPC 时为指定 Vpc 下的Vip
     * @param string $VpcId 暴露方式为 VPC 时，打通的私有网络Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 暴露方式为 VPC 时，打通的子网Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GateWayServiceId GATEWAY 服务id，ExposeType = GATEWAY 时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GateWayAPIId GATEWAY api id，ExposeType = GATEWAY 时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GateWayDomain GATEWAY domain，ExposeType = GATEWAY 时返回
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
        if (array_key_exists("ExposeType",$param) and $param["ExposeType"] !== null) {
            $this->ExposeType = $param["ExposeType"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("GateWayServiceId",$param) and $param["GateWayServiceId"] !== null) {
            $this->GateWayServiceId = $param["GateWayServiceId"];
        }

        if (array_key_exists("GateWayAPIId",$param) and $param["GateWayAPIId"] !== null) {
            $this->GateWayAPIId = $param["GateWayAPIId"];
        }

        if (array_key_exists("GateWayDomain",$param) and $param["GateWayDomain"] !== null) {
            $this->GateWayDomain = $param["GateWayDomain"];
        }
    }
}
