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
 * @method string getEncryptProto() 获取通道加密协议。
 * @method void setEncryptProto(string $EncryptProto) 设置通道加密协议。
 * @method string getRouteType() 获取路由类型。
 * @method void setRouteType(string $RouteType) 设置路由类型。
 * @method string getCreatedTime() 获取创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
 * @method string getState() 获取通道的生产状态，PENDING：生产中，AVAILABLE：运行中，DELETING：删除中。
 * @method void setState(string $State) 设置通道的生产状态，PENDING：生产中，AVAILABLE：运行中，DELETING：删除中。
 * @method string getNetStatus() 获取通道连接状态，AVAILABLE：已连接。
 * @method void setNetStatus(string $NetStatus) 设置通道连接状态，AVAILABLE：已连接。
 * @method array getSecurityPolicyDatabaseSet() 获取SPD。
 * @method void setSecurityPolicyDatabaseSet(array $SecurityPolicyDatabaseSet) 设置SPD。
 * @method IKEOptionsSpecification getIKEOptionsSpecification() 获取IKE选项。
 * @method void setIKEOptionsSpecification(IKEOptionsSpecification $IKEOptionsSpecification) 设置IKE选项。
 * @method IPSECOptionsSpecification getIPSECOptionsSpecification() 获取IPSEC选择。
 * @method void setIPSECOptionsSpecification(IPSECOptionsSpecification $IPSECOptionsSpecification) 设置IPSEC选择。
 * @method boolean getEnableHealthCheck() 获取是否支持健康状态探测
 * @method void setEnableHealthCheck(boolean $EnableHealthCheck) 设置是否支持健康状态探测
 * @method string getHealthCheckLocalIp() 获取本端探测ip
 * @method void setHealthCheckLocalIp(string $HealthCheckLocalIp) 设置本端探测ip
 * @method string getHealthCheckRemoteIp() 获取对端探测ip
 * @method void setHealthCheckRemoteIp(string $HealthCheckRemoteIp) 设置对端探测ip
 * @method string getHealthCheckStatus() 获取通道健康检查状态，AVAILABLE：正常，UNAVAILABLE：不正常。 未配置健康检查不返回该对象
 * @method void setHealthCheckStatus(string $HealthCheckStatus) 设置通道健康检查状态，AVAILABLE：正常，UNAVAILABLE：不正常。 未配置健康检查不返回该对象
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
     * @var string 通道加密协议。
     */
    public $EncryptProto;

    /**
     * @var string 路由类型。
     */
    public $RouteType;

    /**
     * @var string 创建时间。
     */
    public $CreatedTime;

    /**
     * @var string 通道的生产状态，PENDING：生产中，AVAILABLE：运行中，DELETING：删除中。
     */
    public $State;

    /**
     * @var string 通道连接状态，AVAILABLE：已连接。
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
     * @var IPSECOptionsSpecification IPSEC选择。
     */
    public $IPSECOptionsSpecification;

    /**
     * @var boolean 是否支持健康状态探测
     */
    public $EnableHealthCheck;

    /**
     * @var string 本端探测ip
     */
    public $HealthCheckLocalIp;

    /**
     * @var string 对端探测ip
     */
    public $HealthCheckRemoteIp;

    /**
     * @var string 通道健康检查状态，AVAILABLE：正常，UNAVAILABLE：不正常。 未配置健康检查不返回该对象
     */
    public $HealthCheckStatus;

    /**
     * @param string $VpnConnectionId 通道实例ID。
     * @param string $VpnConnectionName 通道名称。
     * @param string $VpcId VPC实例ID。
     * @param string $VpnGatewayId VPN网关实例ID。
     * @param string $CustomerGatewayId 对端网关实例ID。
     * @param string $PreShareKey 预共享密钥。
     * @param string $VpnProto 通道传输协议。
     * @param string $EncryptProto 通道加密协议。
     * @param string $RouteType 路由类型。
     * @param string $CreatedTime 创建时间。
     * @param string $State 通道的生产状态，PENDING：生产中，AVAILABLE：运行中，DELETING：删除中。
     * @param string $NetStatus 通道连接状态，AVAILABLE：已连接。
     * @param array $SecurityPolicyDatabaseSet SPD。
     * @param IKEOptionsSpecification $IKEOptionsSpecification IKE选项。
     * @param IPSECOptionsSpecification $IPSECOptionsSpecification IPSEC选择。
     * @param boolean $EnableHealthCheck 是否支持健康状态探测
     * @param string $HealthCheckLocalIp 本端探测ip
     * @param string $HealthCheckRemoteIp 对端探测ip
     * @param string $HealthCheckStatus 通道健康检查状态，AVAILABLE：正常，UNAVAILABLE：不正常。 未配置健康检查不返回该对象
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

        if (array_key_exists("EncryptProto",$param) and $param["EncryptProto"] !== null) {
            $this->EncryptProto = $param["EncryptProto"];
        }

        if (array_key_exists("RouteType",$param) and $param["RouteType"] !== null) {
            $this->RouteType = $param["RouteType"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
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

        if (array_key_exists("EnableHealthCheck",$param) and $param["EnableHealthCheck"] !== null) {
            $this->EnableHealthCheck = $param["EnableHealthCheck"];
        }

        if (array_key_exists("HealthCheckLocalIp",$param) and $param["HealthCheckLocalIp"] !== null) {
            $this->HealthCheckLocalIp = $param["HealthCheckLocalIp"];
        }

        if (array_key_exists("HealthCheckRemoteIp",$param) and $param["HealthCheckRemoteIp"] !== null) {
            $this->HealthCheckRemoteIp = $param["HealthCheckRemoteIp"];
        }

        if (array_key_exists("HealthCheckStatus",$param) and $param["HealthCheckStatus"] !== null) {
            $this->HealthCheckStatus = $param["HealthCheckStatus"];
        }
    }
}
