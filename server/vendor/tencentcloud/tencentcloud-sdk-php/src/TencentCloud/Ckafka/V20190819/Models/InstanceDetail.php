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
 * 实例详情
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getVip() 获取访问实例的vip 信息
 * @method void setVip(string $Vip) 设置访问实例的vip 信息
 * @method string getVport() 获取访问实例的端口信息
 * @method void setVport(string $Vport) 设置访问实例的端口信息
 * @method array getVipList() 获取虚拟IP列表
 * @method void setVipList(array $VipList) 设置虚拟IP列表
 * @method integer getStatus() 获取实例的状态。0：创建中，1：运行中，2：删除中：5隔离中， -1 创建失败
 * @method void setStatus(integer $Status) 设置实例的状态。0：创建中，1：运行中，2：删除中：5隔离中， -1 创建失败
 * @method integer getBandwidth() 获取实例带宽，单位Mbps
 * @method void setBandwidth(integer $Bandwidth) 设置实例带宽，单位Mbps
 * @method integer getDiskSize() 获取实例的存储大小，单位GB
 * @method void setDiskSize(integer $DiskSize) 设置实例的存储大小，单位GB
 * @method integer getZoneId() 获取可用区域ID
 * @method void setZoneId(integer $ZoneId) 设置可用区域ID
 * @method string getVpcId() 获取vpcId，如果为空，说明是基础网络
 * @method void setVpcId(string $VpcId) 设置vpcId，如果为空，说明是基础网络
 * @method string getSubnetId() 获取子网id
 * @method void setSubnetId(string $SubnetId) 设置子网id
 * @method integer getRenewFlag() 获取实例是否续费，int  枚举值：1表示自动续费，2表示明确不自动续费
 * @method void setRenewFlag(integer $RenewFlag) 设置实例是否续费，int  枚举值：1表示自动续费，2表示明确不自动续费
 * @method integer getHealthy() 获取实例状态 int：0表示健康，1表示告警，2 表示实例状态异常
 * @method void setHealthy(integer $Healthy) 设置实例状态 int：0表示健康，1表示告警，2 表示实例状态异常
 * @method string getHealthyMessage() 获取实例状态信息
 * @method void setHealthyMessage(string $HealthyMessage) 设置实例状态信息
 * @method integer getCreateTime() 获取实例创建时间时间
 * @method void setCreateTime(integer $CreateTime) 设置实例创建时间时间
 * @method integer getExpireTime() 获取实例过期时间
 * @method void setExpireTime(integer $ExpireTime) 设置实例过期时间
 * @method integer getIsInternal() 获取是否为内部客户。值为1 表示内部客户
 * @method void setIsInternal(integer $IsInternal) 设置是否为内部客户。值为1 表示内部客户
 * @method integer getTopicNum() 获取Topic个数
 * @method void setTopicNum(integer $TopicNum) 设置Topic个数
 * @method array getTags() 获取标识tag
 * @method void setTags(array $Tags) 设置标识tag
 * @method string getVersion() 获取kafka版本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置kafka版本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getZoneIds() 获取跨可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneIds(array $ZoneIds) 设置跨可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCvm() 获取ckafka售卖类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCvm(integer $Cvm) 设置ckafka售卖类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取ckafka实例类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置ckafka实例类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiskType() 获取磁盘类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskType(string $DiskType) 设置磁盘类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxTopicNumber() 获取当前规格最大Topic数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxTopicNumber(integer $MaxTopicNumber) 设置当前规格最大Topic数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxPartitionNumber() 获取当前规格最大Partition数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxPartitionNumber(integer $MaxPartitionNumber) 设置当前规格最大Partition数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRebalanceTime() 获取计划升级配置时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRebalanceTime(string $RebalanceTime) 设置计划升级配置时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceDetail extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 访问实例的vip 信息
     */
    public $Vip;

    /**
     * @var string 访问实例的端口信息
     */
    public $Vport;

    /**
     * @var array 虚拟IP列表
     */
    public $VipList;

    /**
     * @var integer 实例的状态。0：创建中，1：运行中，2：删除中：5隔离中， -1 创建失败
     */
    public $Status;

    /**
     * @var integer 实例带宽，单位Mbps
     */
    public $Bandwidth;

    /**
     * @var integer 实例的存储大小，单位GB
     */
    public $DiskSize;

    /**
     * @var integer 可用区域ID
     */
    public $ZoneId;

    /**
     * @var string vpcId，如果为空，说明是基础网络
     */
    public $VpcId;

    /**
     * @var string 子网id
     */
    public $SubnetId;

    /**
     * @var integer 实例是否续费，int  枚举值：1表示自动续费，2表示明确不自动续费
     */
    public $RenewFlag;

    /**
     * @var integer 实例状态 int：0表示健康，1表示告警，2 表示实例状态异常
     */
    public $Healthy;

    /**
     * @var string 实例状态信息
     */
    public $HealthyMessage;

    /**
     * @var integer 实例创建时间时间
     */
    public $CreateTime;

    /**
     * @var integer 实例过期时间
     */
    public $ExpireTime;

    /**
     * @var integer 是否为内部客户。值为1 表示内部客户
     */
    public $IsInternal;

    /**
     * @var integer Topic个数
     */
    public $TopicNum;

    /**
     * @var array 标识tag
     */
    public $Tags;

    /**
     * @var string kafka版本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var array 跨可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneIds;

    /**
     * @var integer ckafka售卖类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cvm;

    /**
     * @var string ckafka实例类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var string 磁盘类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskType;

    /**
     * @var integer 当前规格最大Topic数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxTopicNumber;

    /**
     * @var integer 当前规格最大Partition数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxPartitionNumber;

    /**
     * @var string 计划升级配置时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RebalanceTime;

    /**
     * @param string $InstanceId 实例id
     * @param string $InstanceName 实例名称
     * @param string $Vip 访问实例的vip 信息
     * @param string $Vport 访问实例的端口信息
     * @param array $VipList 虚拟IP列表
     * @param integer $Status 实例的状态。0：创建中，1：运行中，2：删除中：5隔离中， -1 创建失败
     * @param integer $Bandwidth 实例带宽，单位Mbps
     * @param integer $DiskSize 实例的存储大小，单位GB
     * @param integer $ZoneId 可用区域ID
     * @param string $VpcId vpcId，如果为空，说明是基础网络
     * @param string $SubnetId 子网id
     * @param integer $RenewFlag 实例是否续费，int  枚举值：1表示自动续费，2表示明确不自动续费
     * @param integer $Healthy 实例状态 int：0表示健康，1表示告警，2 表示实例状态异常
     * @param string $HealthyMessage 实例状态信息
     * @param integer $CreateTime 实例创建时间时间
     * @param integer $ExpireTime 实例过期时间
     * @param integer $IsInternal 是否为内部客户。值为1 表示内部客户
     * @param integer $TopicNum Topic个数
     * @param array $Tags 标识tag
     * @param string $Version kafka版本信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ZoneIds 跨可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Cvm ckafka售卖类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType ckafka实例类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiskType 磁盘类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxTopicNumber 当前规格最大Topic数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxPartitionNumber 当前规格最大Partition数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RebalanceTime 计划升级配置时间
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("VipList",$param) and $param["VipList"] !== null) {
            $this->VipList = [];
            foreach ($param["VipList"] as $key => $value){
                $obj = new VipEntity();
                $obj->deserialize($value);
                array_push($this->VipList, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("Healthy",$param) and $param["Healthy"] !== null) {
            $this->Healthy = $param["Healthy"];
        }

        if (array_key_exists("HealthyMessage",$param) and $param["HealthyMessage"] !== null) {
            $this->HealthyMessage = $param["HealthyMessage"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("IsInternal",$param) and $param["IsInternal"] !== null) {
            $this->IsInternal = $param["IsInternal"];
        }

        if (array_key_exists("TopicNum",$param) and $param["TopicNum"] !== null) {
            $this->TopicNum = $param["TopicNum"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("Cvm",$param) and $param["Cvm"] !== null) {
            $this->Cvm = $param["Cvm"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("MaxTopicNumber",$param) and $param["MaxTopicNumber"] !== null) {
            $this->MaxTopicNumber = $param["MaxTopicNumber"];
        }

        if (array_key_exists("MaxPartitionNumber",$param) and $param["MaxPartitionNumber"] !== null) {
            $this->MaxPartitionNumber = $param["MaxPartitionNumber"];
        }

        if (array_key_exists("RebalanceTime",$param) and $param["RebalanceTime"] !== null) {
            $this->RebalanceTime = $param["RebalanceTime"];
        }
    }
}
