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
namespace TencentCloud\Cis\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器实例的具体信息
 *
 * @method string getInstanceId() 获取容器实例ID
 * @method void setInstanceId(string $InstanceId) 设置容器实例ID
 * @method string getInstanceName() 获取容器实例名称
 * @method void setInstanceName(string $InstanceName) 设置容器实例名称
 * @method string getVpcId() 获取容器实例所属VpcId
 * @method void setVpcId(string $VpcId) 设置容器实例所属VpcId
 * @method string getSubnetId() 获取容器实例所属SubnetId
 * @method void setSubnetId(string $SubnetId) 设置容器实例所属SubnetId
 * @method string getState() 获取容器实例状态
 * @method void setState(string $State) 设置容器实例状态
 * @method array getContainers() 获取容器列表
 * @method void setContainers(array $Containers) 设置容器列表
 * @method string getRestartPolicy() 获取重启策略
 * @method void setRestartPolicy(string $RestartPolicy) 设置重启策略
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getStartTime() 获取启动时间
 * @method void setStartTime(string $StartTime) 设置启动时间
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getVpcName() 获取Vpc名称
 * @method void setVpcName(string $VpcName) 设置Vpc名称
 * @method string getVpcCidr() 获取VpcCidr
 * @method void setVpcCidr(string $VpcCidr) 设置VpcCidr
 * @method string getSubnetName() 获取SubnetName
 * @method void setSubnetName(string $SubnetName) 设置SubnetName
 * @method string getSubnetCidr() 获取子网Cidr
 * @method void setSubnetCidr(string $SubnetCidr) 设置子网Cidr
 * @method string getLanIp() 获取内网IP
 * @method void setLanIp(string $LanIp) 设置内网IP
 */
class ContainerInstance extends AbstractModel
{
    /**
     * @var string 容器实例ID
     */
    public $InstanceId;

    /**
     * @var string 容器实例名称
     */
    public $InstanceName;

    /**
     * @var string 容器实例所属VpcId
     */
    public $VpcId;

    /**
     * @var string 容器实例所属SubnetId
     */
    public $SubnetId;

    /**
     * @var string 容器实例状态
     */
    public $State;

    /**
     * @var array 容器列表
     */
    public $Containers;

    /**
     * @var string 重启策略
     */
    public $RestartPolicy;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 启动时间
     */
    public $StartTime;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string Vpc名称
     */
    public $VpcName;

    /**
     * @var string VpcCidr
     */
    public $VpcCidr;

    /**
     * @var string SubnetName
     */
    public $SubnetName;

    /**
     * @var string 子网Cidr
     */
    public $SubnetCidr;

    /**
     * @var string 内网IP
     */
    public $LanIp;

    /**
     * @param string $InstanceId 容器实例ID
     * @param string $InstanceName 容器实例名称
     * @param string $VpcId 容器实例所属VpcId
     * @param string $SubnetId 容器实例所属SubnetId
     * @param string $State 容器实例状态
     * @param array $Containers 容器列表
     * @param string $RestartPolicy 重启策略
     * @param string $CreateTime 创建时间
     * @param string $StartTime 启动时间
     * @param string $Zone 可用区
     * @param string $VpcName Vpc名称
     * @param string $VpcCidr VpcCidr
     * @param string $SubnetName SubnetName
     * @param string $SubnetCidr 子网Cidr
     * @param string $LanIp 内网IP
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Containers",$param) and $param["Containers"] !== null) {
            $this->Containers = [];
            foreach ($param["Containers"] as $key => $value){
                $obj = new Container();
                $obj->deserialize($value);
                array_push($this->Containers, $obj);
            }
        }

        if (array_key_exists("RestartPolicy",$param) and $param["RestartPolicy"] !== null) {
            $this->RestartPolicy = $param["RestartPolicy"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("VpcCidr",$param) and $param["VpcCidr"] !== null) {
            $this->VpcCidr = $param["VpcCidr"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("SubnetCidr",$param) and $param["SubnetCidr"] !== null) {
            $this->SubnetCidr = $param["SubnetCidr"];
        }

        if (array_key_exists("LanIp",$param) and $param["LanIp"] !== null) {
            $this->LanIp = $param["LanIp"];
        }
    }
}
