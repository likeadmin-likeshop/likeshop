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
 * 实例属性返回结果对象
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method array getVipList() 获取接入点 VIP 列表信息
 * @method void setVipList(array $VipList) 设置接入点 VIP 列表信息
 * @method string getVip() 获取虚拟IP
 * @method void setVip(string $Vip) 设置虚拟IP
 * @method string getVport() 获取虚拟端口
 * @method void setVport(string $Vport) 设置虚拟端口
 * @method integer getStatus() 获取实例的状态。0：创建中，1：运行中，2：删除中
 * @method void setStatus(integer $Status) 设置实例的状态。0：创建中，1：运行中，2：删除中
 * @method integer getBandwidth() 获取实例带宽，单位：Mbps
 * @method void setBandwidth(integer $Bandwidth) 设置实例带宽，单位：Mbps
 * @method integer getDiskSize() 获取实例的存储大小，单位：GB
 * @method void setDiskSize(integer $DiskSize) 设置实例的存储大小，单位：GB
 * @method integer getZoneId() 获取可用区
 * @method void setZoneId(integer $ZoneId) 设置可用区
 * @method string getVpcId() 获取VPC 的 ID，为空表示是基础网络
 * @method void setVpcId(string $VpcId) 设置VPC 的 ID，为空表示是基础网络
 * @method string getSubnetId() 获取子网 ID， 为空表示基础网络
 * @method void setSubnetId(string $SubnetId) 设置子网 ID， 为空表示基础网络
 * @method integer getHealthy() 获取实例健康状态， 1：健康，2：告警，3：异常
 * @method void setHealthy(integer $Healthy) 设置实例健康状态， 1：健康，2：告警，3：异常
 * @method string getHealthyMessage() 获取实例健康信息，当前会展示磁盘利用率，最大长度为256
 * @method void setHealthyMessage(string $HealthyMessage) 设置实例健康信息，当前会展示磁盘利用率，最大长度为256
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method integer getMsgRetentionTime() 获取消息保存时间,单位为分钟
 * @method void setMsgRetentionTime(integer $MsgRetentionTime) 设置消息保存时间,单位为分钟
 * @method InstanceConfigDO getConfig() 获取自动创建 Topic 配置， 若该字段为空，则表示未开启自动创建
 * @method void setConfig(InstanceConfigDO $Config) 设置自动创建 Topic 配置， 若该字段为空，则表示未开启自动创建
 * @method integer getRemainderPartitions() 获取剩余创建分区数
 * @method void setRemainderPartitions(integer $RemainderPartitions) 设置剩余创建分区数
 * @method integer getRemainderTopics() 获取剩余创建主题数
 * @method void setRemainderTopics(integer $RemainderTopics) 设置剩余创建主题数
 * @method integer getCreatedPartitions() 获取当前创建分区数
 * @method void setCreatedPartitions(integer $CreatedPartitions) 设置当前创建分区数
 * @method integer getCreatedTopics() 获取当前创建主题数
 * @method void setCreatedTopics(integer $CreatedTopics) 设置当前创建主题数
 * @method array getTags() 获取标签数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExpireTime() 获取过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(integer $ExpireTime) 设置过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getZoneIds() 获取跨可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneIds(array $ZoneIds) 设置跨可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取kafka版本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置kafka版本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxGroupNum() 获取最大分组数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxGroupNum(integer $MaxGroupNum) 设置最大分组数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCvm() 获取售卖类型,0:标准版,1:专业版
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCvm(integer $Cvm) 设置售卖类型,0:标准版,1:专业版
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFeatures() 获取表示该实例支持的特性。FEATURE_SUBNET_ACL:表示acl策略支持设置子网。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFeatures(array $Features) 设置表示该实例支持的特性。FEATURE_SUBNET_ACL:表示acl策略支持设置子网。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DynamicRetentionTime getRetentionTimeConfig() 获取动态消息保留策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetentionTimeConfig(DynamicRetentionTime $RetentionTimeConfig) 设置动态消息保留策略
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceAttributesResponse extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var array 接入点 VIP 列表信息
     */
    public $VipList;

    /**
     * @var string 虚拟IP
     */
    public $Vip;

    /**
     * @var string 虚拟端口
     */
    public $Vport;

    /**
     * @var integer 实例的状态。0：创建中，1：运行中，2：删除中
     */
    public $Status;

    /**
     * @var integer 实例带宽，单位：Mbps
     */
    public $Bandwidth;

    /**
     * @var integer 实例的存储大小，单位：GB
     */
    public $DiskSize;

    /**
     * @var integer 可用区
     */
    public $ZoneId;

    /**
     * @var string VPC 的 ID，为空表示是基础网络
     */
    public $VpcId;

    /**
     * @var string 子网 ID， 为空表示基础网络
     */
    public $SubnetId;

    /**
     * @var integer 实例健康状态， 1：健康，2：告警，3：异常
     */
    public $Healthy;

    /**
     * @var string 实例健康信息，当前会展示磁盘利用率，最大长度为256
     */
    public $HealthyMessage;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 消息保存时间,单位为分钟
     */
    public $MsgRetentionTime;

    /**
     * @var InstanceConfigDO 自动创建 Topic 配置， 若该字段为空，则表示未开启自动创建
     */
    public $Config;

    /**
     * @var integer 剩余创建分区数
     */
    public $RemainderPartitions;

    /**
     * @var integer 剩余创建主题数
     */
    public $RemainderTopics;

    /**
     * @var integer 当前创建分区数
     */
    public $CreatedPartitions;

    /**
     * @var integer 当前创建主题数
     */
    public $CreatedTopics;

    /**
     * @var array 标签数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var integer 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var array 跨可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneIds;

    /**
     * @var string kafka版本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var integer 最大分组数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxGroupNum;

    /**
     * @var integer 售卖类型,0:标准版,1:专业版
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cvm;

    /**
     * @var string 类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var array 表示该实例支持的特性。FEATURE_SUBNET_ACL:表示acl策略支持设置子网。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Features;

    /**
     * @var DynamicRetentionTime 动态消息保留策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetentionTimeConfig;

    /**
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param array $VipList 接入点 VIP 列表信息
     * @param string $Vip 虚拟IP
     * @param string $Vport 虚拟端口
     * @param integer $Status 实例的状态。0：创建中，1：运行中，2：删除中
     * @param integer $Bandwidth 实例带宽，单位：Mbps
     * @param integer $DiskSize 实例的存储大小，单位：GB
     * @param integer $ZoneId 可用区
     * @param string $VpcId VPC 的 ID，为空表示是基础网络
     * @param string $SubnetId 子网 ID， 为空表示基础网络
     * @param integer $Healthy 实例健康状态， 1：健康，2：告警，3：异常
     * @param string $HealthyMessage 实例健康信息，当前会展示磁盘利用率，最大长度为256
     * @param integer $CreateTime 创建时间
     * @param integer $MsgRetentionTime 消息保存时间,单位为分钟
     * @param InstanceConfigDO $Config 自动创建 Topic 配置， 若该字段为空，则表示未开启自动创建
     * @param integer $RemainderPartitions 剩余创建分区数
     * @param integer $RemainderTopics 剩余创建主题数
     * @param integer $CreatedPartitions 当前创建分区数
     * @param integer $CreatedTopics 当前创建主题数
     * @param array $Tags 标签数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExpireTime 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ZoneIds 跨可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version kafka版本信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxGroupNum 最大分组数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Cvm 售卖类型,0:标准版,1:专业版
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType 类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Features 表示该实例支持的特性。FEATURE_SUBNET_ACL:表示acl策略支持设置子网。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DynamicRetentionTime $RetentionTimeConfig 动态消息保留策略
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

        if (array_key_exists("VipList",$param) and $param["VipList"] !== null) {
            $this->VipList = [];
            foreach ($param["VipList"] as $key => $value){
                $obj = new VipEntity();
                $obj->deserialize($value);
                array_push($this->VipList, $obj);
            }
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
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

        if (array_key_exists("Healthy",$param) and $param["Healthy"] !== null) {
            $this->Healthy = $param["Healthy"];
        }

        if (array_key_exists("HealthyMessage",$param) and $param["HealthyMessage"] !== null) {
            $this->HealthyMessage = $param["HealthyMessage"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MsgRetentionTime",$param) and $param["MsgRetentionTime"] !== null) {
            $this->MsgRetentionTime = $param["MsgRetentionTime"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new InstanceConfigDO();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("RemainderPartitions",$param) and $param["RemainderPartitions"] !== null) {
            $this->RemainderPartitions = $param["RemainderPartitions"];
        }

        if (array_key_exists("RemainderTopics",$param) and $param["RemainderTopics"] !== null) {
            $this->RemainderTopics = $param["RemainderTopics"];
        }

        if (array_key_exists("CreatedPartitions",$param) and $param["CreatedPartitions"] !== null) {
            $this->CreatedPartitions = $param["CreatedPartitions"];
        }

        if (array_key_exists("CreatedTopics",$param) and $param["CreatedTopics"] !== null) {
            $this->CreatedTopics = $param["CreatedTopics"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("MaxGroupNum",$param) and $param["MaxGroupNum"] !== null) {
            $this->MaxGroupNum = $param["MaxGroupNum"];
        }

        if (array_key_exists("Cvm",$param) and $param["Cvm"] !== null) {
            $this->Cvm = $param["Cvm"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Features",$param) and $param["Features"] !== null) {
            $this->Features = $param["Features"];
        }

        if (array_key_exists("RetentionTimeConfig",$param) and $param["RetentionTimeConfig"] !== null) {
            $this->RetentionTimeConfig = new DynamicRetentionTime();
            $this->RetentionTimeConfig->deserialize($param["RetentionTimeConfig"]);
        }
    }
}
