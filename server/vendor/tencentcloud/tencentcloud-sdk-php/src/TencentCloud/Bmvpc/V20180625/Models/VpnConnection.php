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
namespace TencentCloud\Bmvpc\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPN通道对象。
 *
 * @method string getVpnConnectionId() 获取通道实例ID。
 * @method void setVpnConnectionId(string $VpnConnectionId) 设置通道实例ID。
 * @method string getVpnConnectionName() 获取通道名称。
 * @method void setVpnConnectionName(string $VpnConnectionName) 设置通道名称。
 * @method string getVpcId() 获取VPC实例ID。
 * @method void setVpcId(string $VpcId) 设置VPC实例ID。
 * @method string getVpnGatewayId() 获取VPN网关实例ID。
 * @method void setVpnGatewayId(string $VpnGatewayId) 设置VPN网关实例ID。
 * @method string getCustomerGatewayId() 获取对端网关实例ID。
 * @method void setCustomerGatewayId(string $CustomerGatewayId) 设置对端网关实例ID。
 * @method string getPreShareKey() 获取预共享密钥。
 * @method void setPreShareKey(string $PreShareKey) 设置预共享密钥。
 * @method string getVpnProto() 获取通道传输协议。
 * @method void setVpnProto(string $VpnProto) 设置通道传输协议。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method string getState() 获取通道的生产状态
 * @method void setState(string $State) 设置通道的生产状态
 * @method string getNetStatus() 获取通道连接状态
 * @method void setNetStatus(string $NetStatus) 设置通道连接状态
 * @method array getSecurityPolicyDatabaseSet() 获取SPD。
 * @method void setSecurityPolicyDatabaseSet(array $SecurityPolicyDatabaseSet) 设置SPD。
 * @method IKEOptionsSpecification getIKEOptionsSpecification() 获取IKE选项。
 * @method void setIKEOptionsSpecification(IKEOptionsSpecification $IKEOptionsSpecification) 设置IKE选项。
 * @method IPSECOptionsSpecification getIPSECOptionsSpecification() 获取IPSEC选项。
 * @method void setIPSECOptionsSpecification(IPSECOptionsSpecification $IPSECOptionsSpecification) 设置IPSEC选项。
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getVpcCidrBlock() 获取VPC网段
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置VPC网段
 * @method string getVpcName() 获取VPC名称
 * @method void setVpcName(string $VpcName) 设置VPC名称
 * @method string getVpnGatewayName() 获取VPN网关名称
 * @method void setVpnGatewayName(string $VpnGatewayName) 设置VPN网关名称
 * @method string getCustomerGatewayName() 获取对端网关名称
 * @method void setCustomerGatewayName(string $CustomerGatewayName) 设置对端网关名称
 * @method array getDestinationCidr() 获取IPSEC VPN通道路由策略目的端地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDestinationCidr(array $DestinationCidr) 设置IPSEC VPN通道路由策略目的端地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSourceCidr() 获取IPSEC VPN通道路由策略源端地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceCidr(array $SourceCidr) 设置IPSEC VPN通道路由策略源端地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class VpnConnection extends AbstractModel
{
    /**
     * @var string 通道实例ID。
     */
    public $VpnConnectionId;

    /**
     * @var string 通道名称。
     */
    public $VpnConnectionName;

    /**
     * @var string VPC实例ID。
     */
    public $VpcId;

    /**
     * @var string VPN网关实例ID。
     */
    public $VpnGatewayId;

    /**
     * @var string 对端网关实例ID。
     */
    public $CustomerGatewayId;

    /**
     * @var string 预共享密钥。
     */
    public $PreShareKey;

    /**
     * @var string 通道传输协议。
     */
    public $VpnProto;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var string 通道的生产状态
     */
    public $State;

    /**
     * @var string 通道连接状态
     */
    public $NetStatus;

    /**
     * @var array SPD。
     */
    public $SecurityPolicyDatabaseSet;

    /**
     * @var IKEOptionsSpecification IKE选项。
     */
    public $IKEOptionsSpecification;

    /**
     * @var IPSECOptionsSpecification IPSEC选项。
     */
    public $IPSECOptionsSpecification;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string VPC网段
     */
    public $VpcCidrBlock;

    /**
     * @var string VPC名称
     */
    public $VpcName;

    /**
     * @var string VPN网关名称
     */
    public $VpnGatewayName;

    /**
     * @var string 对端网关名称
     */
    public $CustomerGatewayName;

    /**
     * @var array IPSEC VPN通道路由策略目的端地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DestinationCidr;

    /**
     * @var array IPSEC VPN通道路由策略源端地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceCidr;

    /**
     * @param string $VpnConnectionId 通道实例ID。
     * @param string $VpnConnectionName 通道名称。
     * @param string $VpcId VPC实例ID。
     * @param string $VpnGatewayId VPN网关实例ID。
     * @param string $CustomerGatewayId 对端网关实例ID。
     * @param string $PreShareKey 预共享密钥。
     * @param string $VpnProto 通道传输协议。
     * @param string $CreateTime 创建时间。
     * @param string $State 通道的生产状态
     * @param string $NetStatus 通道连接状态
     * @param array $SecurityPolicyDatabaseSet SPD。
     * @param IKEOptionsSpecification $IKEOptionsSpecification IKE选项。
     * @param IPSECOptionsSpecification $IPSECOptionsSpecification IPSEC选项。
     * @param string $Zone 可用区
     * @param string $VpcCidrBlock VPC网段
     * @param string $VpcName VPC名称
     * @param string $VpnGatewayName VPN网关名称
     * @param string $CustomerGatewayName 对端网关名称
     * @param array $DestinationCidr IPSEC VPN通道路由策略目的端地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SourceCidr IPSEC VPN通道路由策略源端地址
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
        if (array_key_exists("VpnConnectionId",$param) and $param["VpnConnectionId"] !== null) {
            $this->VpnConnectionId = $param["VpnConnectionId"];
        }

        if (array_key_exists("VpnConnectionName",$param) and $param["VpnConnectionName"] !== null) {
            $this->VpnConnectionName = $param["VpnConnectionName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpnGatewayId",$param) and $param["VpnGatewayId"] !== null) {
            $this->VpnGatewayId = $param["VpnGatewayId"];
        }

        if (array_key_exists("CustomerGatewayId",$param) and $param["CustomerGatewayId"] !== null) {
            $this->CustomerGatewayId = $param["CustomerGatewayId"];
        }

        if (array_key_exists("PreShareKey",$param) and $param["PreShareKey"] !== null) {
            $this->PreShareKey = $param["PreShareKey"];
        }

        if (array_key_exists("VpnProto",$param) and $param["VpnProto"] !== null) {
            $this->VpnProto = $param["VpnProto"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("NetStatus",$param) and $param["NetStatus"] !== null) {
            $this->NetStatus = $param["NetStatus"];
        }

        if (array_key_exists("SecurityPolicyDatabaseSet",$param) and $param["SecurityPolicyDatabaseSet"] !== null) {
            $this->SecurityPolicyDatabaseSet = [];
            foreach ($param["SecurityPolicyDatabaseSet"] as $key => $value){
                $obj = new SecurityPolicyDatabase();
                $obj->deserialize($value);
                array_push($this->SecurityPolicyDatabaseSet, $obj);
            }
        }

        if (array_key_exists("IKEOptionsSpecification",$param) and $param["IKEOptionsSpecification"] !== null) {
            $this->IKEOptionsSpecification = new IKEOptionsSpecification();
            $this->IKEOptionsSpecification->deserialize($param["IKEOptionsSpecification"]);
        }

        if (array_key_exists("IPSECOptionsSpecification",$param) and $param["IPSECOptionsSpecification"] !== null) {
            $this->IPSECOptionsSpecification = new IPSECOptionsSpecification();
            $this->IPSECOptionsSpecification->deserialize($param["IPSECOptionsSpecification"]);
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("VpnGatewayName",$param) and $param["VpnGatewayName"] !== null) {
            $this->VpnGatewayName = $param["VpnGatewayName"];
        }

        if (array_key_exists("CustomerGatewayName",$param) and $param["CustomerGatewayName"] !== null) {
            $this->CustomerGatewayName = $param["CustomerGatewayName"];
        }

        if (array_key_exists("DestinationCidr",$param) and $param["DestinationCidr"] !== null) {
            $this->DestinationCidr = $param["DestinationCidr"];
        }

        if (array_key_exists("SourceCidr",$param) and $param["SourceCidr"] !== null) {
            $this->SourceCidr = $param["SourceCidr"];
        }
    }
}
