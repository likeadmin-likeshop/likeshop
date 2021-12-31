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
namespace TencentCloud\Bmlb\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取与流量镜像绑定的接收机信息时返回的接收机信息。
 *
 * @method string getInstanceId() 获取接收机实例ID。
 * @method void setInstanceId(string $InstanceId) 设置接收机实例ID。
 * @method integer getPort() 获取接收机接收端口。
 * @method void setPort(integer $Port) 设置接收机接收端口。
 * @method integer getWeight() 获取接收机权重。
 * @method void setWeight(integer $Weight) 设置接收机权重。
 * @method string getTrafficMirrorId() 获取流量镜像ID。
 * @method void setTrafficMirrorId(string $TrafficMirrorId) 设置流量镜像ID。
 * @method string getAlias() 获取接收机别名。
 * @method void setAlias(string $Alias) 设置接收机别名。
 * @method string getLanIp() 获取接收机内网IP地址。
 * @method void setLanIp(string $LanIp) 设置接收机内网IP地址。
 * @method string getSubnetId() 获取接收机所在的子网的ID。
 * @method void setSubnetId(string $SubnetId) 设置接收机所在的子网的ID。
 * @method string getSubnetName() 获取接收机所在的子网的名称。
 * @method void setSubnetName(string $SubnetName) 设置接收机所在的子网的名称。
 * @method string getSubnetCidrBlock() 获取接收机所在的子网的Cidr。
 * @method void setSubnetCidrBlock(string $SubnetCidrBlock) 设置接收机所在的子网的Cidr。
 * @method string getVpcId() 获取接收机所在的私有网络的ID。
 * @method void setVpcId(string $VpcId) 设置接收机所在的私有网络的ID。
 * @method string getVpcName() 获取接收机所在的私有网络的名称。
 * @method void setVpcName(string $VpcName) 设置接收机所在的私有网络的名称。
 * @method string getVpcCidrBlock() 获取接收机所在的私有网络的Cidr。
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置接收机所在的私有网络的Cidr。
 * @method string getHealthStatus() 获取接收机的健康状态。
 * @method void setHealthStatus(string $HealthStatus) 设置接收机的健康状态。
 * @method array getOperates() 获取接收机的可以执行的操作集合。
 * @method void setOperates(array $Operates) 设置接收机的可以执行的操作集合。
 */
class TrafficMirrorReceiver extends AbstractModel
{
    /**
     * @var string 接收机实例ID。
     */
    public $InstanceId;

    /**
     * @var integer 接收机接收端口。
     */
    public $Port;

    /**
     * @var integer 接收机权重。
     */
    public $Weight;

    /**
     * @var string 流量镜像ID。
     */
    public $TrafficMirrorId;

    /**
     * @var string 接收机别名。
     */
    public $Alias;

    /**
     * @var string 接收机内网IP地址。
     */
    public $LanIp;

    /**
     * @var string 接收机所在的子网的ID。
     */
    public $SubnetId;

    /**
     * @var string 接收机所在的子网的名称。
     */
    public $SubnetName;

    /**
     * @var string 接收机所在的子网的Cidr。
     */
    public $SubnetCidrBlock;

    /**
     * @var string 接收机所在的私有网络的ID。
     */
    public $VpcId;

    /**
     * @var string 接收机所在的私有网络的名称。
     */
    public $VpcName;

    /**
     * @var string 接收机所在的私有网络的Cidr。
     */
    public $VpcCidrBlock;

    /**
     * @var string 接收机的健康状态。
     */
    public $HealthStatus;

    /**
     * @var array 接收机的可以执行的操作集合。
     */
    public $Operates;

    /**
     * @param string $InstanceId 接收机实例ID。
     * @param integer $Port 接收机接收端口。
     * @param integer $Weight 接收机权重。
     * @param string $TrafficMirrorId 流量镜像ID。
     * @param string $Alias 接收机别名。
     * @param string $LanIp 接收机内网IP地址。
     * @param string $SubnetId 接收机所在的子网的ID。
     * @param string $SubnetName 接收机所在的子网的名称。
     * @param string $SubnetCidrBlock 接收机所在的子网的Cidr。
     * @param string $VpcId 接收机所在的私有网络的ID。
     * @param string $VpcName 接收机所在的私有网络的名称。
     * @param string $VpcCidrBlock 接收机所在的私有网络的Cidr。
     * @param string $HealthStatus 接收机的健康状态。
     * @param array $Operates 接收机的可以执行的操作集合。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("TrafficMirrorId",$param) and $param["TrafficMirrorId"] !== null) {
            $this->TrafficMirrorId = $param["TrafficMirrorId"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("LanIp",$param) and $param["LanIp"] !== null) {
            $this->LanIp = $param["LanIp"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("SubnetCidrBlock",$param) and $param["SubnetCidrBlock"] !== null) {
            $this->SubnetCidrBlock = $param["SubnetCidrBlock"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("HealthStatus",$param) and $param["HealthStatus"] !== null) {
            $this->HealthStatus = $param["HealthStatus"];
        }

        if (array_key_exists("Operates",$param) and $param["Operates"] !== null) {
            $this->Operates = $param["Operates"];
        }
    }
}
