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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例信息
 *
 * @method string getFleetId() 获取服务部署ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFleetId(string $FleetId) 设置服务部署ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIpAddress() 获取IP地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpAddress(string $IpAddress) 设置IP地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDnsName() 获取dns
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDnsName(string $DnsName) 设置dns
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperatingSystem() 获取操作系统
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatingSystem(string $OperatingSystem) 设置操作系统
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWeight() 获取实例权重
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeight(integer $Weight) 设置实例权重
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReserveValue() 获取实例是否保留, 1-保留，0-不保留,默认
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReserveValue(integer $ReserveValue) 设置实例是否保留, 1-保留，0-不保留,默认
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivateIpAddress() 获取实例的私有IP地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateIpAddress(string $PrivateIpAddress) 设置实例的私有IP地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class Instance extends AbstractModel
{
    /**
     * @var string 服务部署ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FleetId;

    /**
     * @var string 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string IP地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpAddress;

    /**
     * @var string dns
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DnsName;

    /**
     * @var string 操作系统
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatingSystem;

    /**
     * @var string 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 实例权重
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weight;

    /**
     * @var integer 实例是否保留, 1-保留，0-不保留,默认
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReserveValue;

    /**
     * @var string 实例的私有IP地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateIpAddress;

    /**
     * @param string $FleetId 服务部署ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IpAddress IP地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DnsName dns
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OperatingSystem 操作系统
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Weight 实例权重
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReserveValue 实例是否保留, 1-保留，0-不保留,默认
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrivateIpAddress 实例的私有IP地址
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
        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            $this->IpAddress = $param["IpAddress"];
        }

        if (array_key_exists("DnsName",$param) and $param["DnsName"] !== null) {
            $this->DnsName = $param["DnsName"];
        }

        if (array_key_exists("OperatingSystem",$param) and $param["OperatingSystem"] !== null) {
            $this->OperatingSystem = $param["OperatingSystem"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("ReserveValue",$param) and $param["ReserveValue"] !== null) {
            $this->ReserveValue = $param["ReserveValue"];
        }

        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            $this->PrivateIpAddress = $param["PrivateIpAddress"];
        }
    }
}
