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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主实例信息
 *
 * @method string getRegion() 获取地域信息
 * @method void setRegion(string $Region) 设置地域信息
 * @method integer getRegionId() 获取地域ID
 * @method void setRegionId(integer $RegionId) 设置地域ID
 * @method integer getZoneId() 获取可用区ID
 * @method void setZoneId(integer $ZoneId) 设置可用区ID
 * @method string getZone() 获取可用区信息
 * @method void setZone(string $Zone) 设置可用区信息
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getResourceId() 获取实例长ID
 * @method void setResourceId(string $ResourceId) 设置实例长ID
 * @method integer getStatus() 获取实例状态
 * @method void setStatus(integer $Status) 设置实例状态
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method integer getInstanceType() 获取实例类型
 * @method void setInstanceType(integer $InstanceType) 设置实例类型
 * @method integer getTaskStatus() 获取任务状态
 * @method void setTaskStatus(integer $TaskStatus) 设置任务状态
 * @method integer getMemory() 获取内存容量
 * @method void setMemory(integer $Memory) 设置内存容量
 * @method integer getVolume() 获取硬盘容量
 * @method void setVolume(integer $Volume) 设置硬盘容量
 * @method string getDeviceType() 获取实例机型
 * @method void setDeviceType(string $DeviceType) 设置实例机型
 * @method integer getQps() 获取每秒查询数
 * @method void setQps(integer $Qps) 设置每秒查询数
 * @method integer getVpcId() 获取私有网络ID
 * @method void setVpcId(integer $VpcId) 设置私有网络ID
 * @method integer getSubnetId() 获取子网ID
 * @method void setSubnetId(integer $SubnetId) 设置子网ID
 * @method string getExClusterId() 获取独享集群ID
 * @method void setExClusterId(string $ExClusterId) 设置独享集群ID
 * @method string getExClusterName() 获取独享集群名称
 * @method void setExClusterName(string $ExClusterName) 设置独享集群名称
 */
class MasterInfo extends AbstractModel
{
    /**
     * @var string 地域信息
     */
    public $Region;

    /**
     * @var integer 地域ID
     */
    public $RegionId;

    /**
     * @var integer 可用区ID
     */
    public $ZoneId;

    /**
     * @var string 可用区信息
     */
    public $Zone;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例长ID
     */
    public $ResourceId;

    /**
     * @var integer 实例状态
     */
    public $Status;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var integer 实例类型
     */
    public $InstanceType;

    /**
     * @var integer 任务状态
     */
    public $TaskStatus;

    /**
     * @var integer 内存容量
     */
    public $Memory;

    /**
     * @var integer 硬盘容量
     */
    public $Volume;

    /**
     * @var string 实例机型
     */
    public $DeviceType;

    /**
     * @var integer 每秒查询数
     */
    public $Qps;

    /**
     * @var integer 私有网络ID
     */
    public $VpcId;

    /**
     * @var integer 子网ID
     */
    public $SubnetId;

    /**
     * @var string 独享集群ID
     */
    public $ExClusterId;

    /**
     * @var string 独享集群名称
     */
    public $ExClusterName;

    /**
     * @param string $Region 地域信息
     * @param integer $RegionId 地域ID
     * @param integer $ZoneId 可用区ID
     * @param string $Zone 可用区信息
     * @param string $InstanceId 实例ID
     * @param string $ResourceId 实例长ID
     * @param integer $Status 实例状态
     * @param string $InstanceName 实例名称
     * @param integer $InstanceType 实例类型
     * @param integer $TaskStatus 任务状态
     * @param integer $Memory 内存容量
     * @param integer $Volume 硬盘容量
     * @param string $DeviceType 实例机型
     * @param integer $Qps 每秒查询数
     * @param integer $VpcId 私有网络ID
     * @param integer $SubnetId 子网ID
     * @param string $ExClusterId 独享集群ID
     * @param string $ExClusterName 独享集群名称
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ExClusterId",$param) and $param["ExClusterId"] !== null) {
            $this->ExClusterId = $param["ExClusterId"];
        }

        if (array_key_exists("ExClusterName",$param) and $param["ExClusterName"] !== null) {
            $this->ExClusterName = $param["ExClusterName"];
        }
    }
}
