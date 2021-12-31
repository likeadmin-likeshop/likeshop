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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NAT的SNAT规则
 *
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method string getResourceType() 获取资源类型，目前包含SUBNET、NETWORKINTERFACE
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceType(string $ResourceType) 设置资源类型，目前包含SUBNET、NETWORKINTERFACE
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivateIpAddress() 获取源IP/网段
 * @method void setPrivateIpAddress(string $PrivateIpAddress) 设置源IP/网段
 * @method array getPublicIpAddresses() 获取弹性IP地址池
 * @method void setPublicIpAddresses(array $PublicIpAddresses) 设置弹性IP地址池
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getNatGatewaySnatId() 获取Snat规则ID
 * @method void setNatGatewaySnatId(string $NatGatewaySnatId) 设置Snat规则ID
 * @method string getNatGatewayId() 获取NAT网关的ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNatGatewayId(string $NatGatewayId) 设置NAT网关的ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取私有网络VPC的ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置私有网络VPC的ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取NAT网关SNAT规则创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置NAT网关SNAT规则创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SourceIpTranslationNatRule extends AbstractModel
{
    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var string 资源类型，目前包含SUBNET、NETWORKINTERFACE
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceType;

    /**
     * @var string 源IP/网段
     */
    public $PrivateIpAddress;

    /**
     * @var array 弹性IP地址池
     */
    public $PublicIpAddresses;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string Snat规则ID
     */
    public $NatGatewaySnatId;

    /**
     * @var string NAT网关的ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NatGatewayId;

    /**
     * @var string 私有网络VPC的ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string NAT网关SNAT规则创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @param string $ResourceId 资源ID
     * @param string $ResourceType 资源类型，目前包含SUBNET、NETWORKINTERFACE
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrivateIpAddress 源IP/网段
     * @param array $PublicIpAddresses 弹性IP地址池
     * @param string $Description 描述
     * @param string $NatGatewaySnatId Snat规则ID
     * @param string $NatGatewayId NAT网关的ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 私有网络VPC的ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime NAT网关SNAT规则创建时间。
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            $this->PrivateIpAddress = $param["PrivateIpAddress"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("NatGatewaySnatId",$param) and $param["NatGatewaySnatId"] !== null) {
            $this->NatGatewaySnatId = $param["NatGatewaySnatId"];
        }

        if (array_key_exists("NatGatewayId",$param) and $param["NatGatewayId"] !== null) {
            $this->NatGatewayId = $param["NatGatewayId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
