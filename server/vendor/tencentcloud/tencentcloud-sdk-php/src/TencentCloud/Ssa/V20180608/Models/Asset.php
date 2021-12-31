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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资产类型
 *
 * @method string getAssetType() 获取资产类型
 * @method void setAssetType(string $AssetType) 设置资产类型
 * @method string getName() 获取名字
 * @method void setName(string $Name) 设置名字
 * @method string getAssetRegionName() 获取区域
 * @method void setAssetRegionName(string $AssetRegionName) 设置区域
 * @method string getAssetVpcid() 获取所属网络
 * @method void setAssetVpcid(string $AssetVpcid) 设置所属网络
 * @method string getInstanceType() 获取主机类型
 * @method void setInstanceType(string $InstanceType) 设置主机类型
 * @method string getInstanceState() 获取主机状态
 * @method void setInstanceState(string $InstanceState) 设置主机状态
 * @method string getEngineVersion() 获取引擎版本
 * @method void setEngineVersion(string $EngineVersion) 设置引擎版本
 * @method string getId() 获取数据库标识
 * @method void setId(string $Id) 设置数据库标识
 * @method array getTag() 获取标签
 * @method void setTag(array $Tag) 设置标签
 * @method integer getAssetCspmRiskNum() 获取配置风险统计数
 * @method void setAssetCspmRiskNum(integer $AssetCspmRiskNum) 设置配置风险统计数
 * @method array getPublicIpAddresses() 获取主机IP
 * @method void setPublicIpAddresses(array $PublicIpAddresses) 设置主机IP
 * @method string getAssetUniqid() 获取资产唯一标识
 * @method void setAssetUniqid(string $AssetUniqid) 设置资产唯一标识
 * @method string getChargeType() 获取付费类型
 * @method void setChargeType(string $ChargeType) 设置付费类型
 * @method integer getAssetEventNum() 获取安全事件统计数
 * @method void setAssetEventNum(integer $AssetEventNum) 设置安全事件统计数
 * @method integer getAssetVulNum() 获取漏洞统计数
 * @method void setAssetVulNum(integer $AssetVulNum) 设置漏洞统计数
 * @method array getPrivateIpAddresses() 获取主机IP内网
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) 设置主机IP内网
 * @method string getGroupName() 获取所属分组
 * @method void setGroupName(string $GroupName) 设置所属分组
 * @method string getSsaAssetDiscoverTime() 获取发现时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSsaAssetDiscoverTime(string $SsaAssetDiscoverTime) 设置发现时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSsaAssetDeleteTime() 获取下线时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSsaAssetDeleteTime(string $SsaAssetDeleteTime) 设置下线时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsNew() 获取是否是新增资产
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsNew(boolean $IsNew) 设置是否是新增资产
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetSubnetId() 获取所属子网
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetSubnetId(string $AssetSubnetId) 设置所属子网
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetSubnetName() 获取子网名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetSubnetName(string $AssetSubnetName) 设置子网名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetVpcName() 获取vpc名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetVpcName(string $AssetVpcName) 设置vpc名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getClusterType() 获取集群类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterType(integer $ClusterType) 设置集群类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNameSpace() 获取命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNameSpace(string $NameSpace) 设置命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLoadBalancerType() 获取负载均衡实例的网络类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置负载均衡实例的网络类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLoadBalancerVips() 获取负载均衡实例的vip列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerVips(array $LoadBalancerVips) 设置负载均衡实例的vip列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAssetIpv6() 获取ipv6信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetIpv6(array $AssetIpv6) 设置ipv6信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSSHRisk() 获取ssh端口暴露风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSSHRisk(string $SSHRisk) 设置ssh端口暴露风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRDPRisk() 获取rdp端口暴露风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRDPRisk(string $RDPRisk) 设置rdp端口暴露风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventRisk() 获取资产失陷事件风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventRisk(string $EventRisk) 设置资产失陷事件风险
注意：此字段可能返回 null，表示取不到有效值。
 */
class Asset extends AbstractModel
{
    /**
     * @var string 资产类型
     */
    public $AssetType;

    /**
     * @var string 名字
     */
    public $Name;

    /**
     * @var string 区域
     */
    public $AssetRegionName;

    /**
     * @var string 所属网络
     */
    public $AssetVpcid;

    /**
     * @var string 主机类型
     */
    public $InstanceType;

    /**
     * @var string 主机状态
     */
    public $InstanceState;

    /**
     * @var string 引擎版本
     */
    public $EngineVersion;

    /**
     * @var string 数据库标识
     */
    public $Id;

    /**
     * @var array 标签
     */
    public $Tag;

    /**
     * @var integer 配置风险统计数
     */
    public $AssetCspmRiskNum;

    /**
     * @var array 主机IP
     */
    public $PublicIpAddresses;

    /**
     * @var string 资产唯一标识
     */
    public $AssetUniqid;

    /**
     * @var string 付费类型
     */
    public $ChargeType;

    /**
     * @var integer 安全事件统计数
     */
    public $AssetEventNum;

    /**
     * @var integer 漏洞统计数
     */
    public $AssetVulNum;

    /**
     * @var array 主机IP内网
     */
    public $PrivateIpAddresses;

    /**
     * @var string 所属分组
     */
    public $GroupName;

    /**
     * @var string 发现时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SsaAssetDiscoverTime;

    /**
     * @var string 下线时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SsaAssetDeleteTime;

    /**
     * @var boolean 是否是新增资产
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsNew;

    /**
     * @var string 所属子网
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetSubnetId;

    /**
     * @var string 子网名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetSubnetName;

    /**
     * @var string vpc名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetVpcName;

    /**
     * @var integer 集群类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterType;

    /**
     * @var string 命名空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NameSpace;

    /**
     * @var string 负载均衡实例的网络类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerType;

    /**
     * @var array 负载均衡实例的vip列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerVips;

    /**
     * @var array ipv6信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetIpv6;

    /**
     * @var string ssh端口暴露风险
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SSHRisk;

    /**
     * @var string rdp端口暴露风险
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RDPRisk;

    /**
     * @var string 资产失陷事件风险
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventRisk;

    /**
     * @param string $AssetType 资产类型
     * @param string $Name 名字
     * @param string $AssetRegionName 区域
     * @param string $AssetVpcid 所属网络
     * @param string $InstanceType 主机类型
     * @param string $InstanceState 主机状态
     * @param string $EngineVersion 引擎版本
     * @param string $Id 数据库标识
     * @param array $Tag 标签
     * @param integer $AssetCspmRiskNum 配置风险统计数
     * @param array $PublicIpAddresses 主机IP
     * @param string $AssetUniqid 资产唯一标识
     * @param string $ChargeType 付费类型
     * @param integer $AssetEventNum 安全事件统计数
     * @param integer $AssetVulNum 漏洞统计数
     * @param array $PrivateIpAddresses 主机IP内网
     * @param string $GroupName 所属分组
     * @param string $SsaAssetDiscoverTime 发现时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SsaAssetDeleteTime 下线时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsNew 是否是新增资产
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetSubnetId 所属子网
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetSubnetName 子网名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetVpcName vpc名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ClusterType 集群类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NameSpace 命名空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LoadBalancerType 负载均衡实例的网络类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LoadBalancerVips 负载均衡实例的vip列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AssetIpv6 ipv6信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SSHRisk ssh端口暴露风险
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RDPRisk rdp端口暴露风险
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventRisk 资产失陷事件风险
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
        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AssetRegionName",$param) and $param["AssetRegionName"] !== null) {
            $this->AssetRegionName = $param["AssetRegionName"];
        }

        if (array_key_exists("AssetVpcid",$param) and $param["AssetVpcid"] !== null) {
            $this->AssetVpcid = $param["AssetVpcid"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("AssetCspmRiskNum",$param) and $param["AssetCspmRiskNum"] !== null) {
            $this->AssetCspmRiskNum = $param["AssetCspmRiskNum"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }

        if (array_key_exists("AssetUniqid",$param) and $param["AssetUniqid"] !== null) {
            $this->AssetUniqid = $param["AssetUniqid"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("AssetEventNum",$param) and $param["AssetEventNum"] !== null) {
            $this->AssetEventNum = $param["AssetEventNum"];
        }

        if (array_key_exists("AssetVulNum",$param) and $param["AssetVulNum"] !== null) {
            $this->AssetVulNum = $param["AssetVulNum"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("SsaAssetDiscoverTime",$param) and $param["SsaAssetDiscoverTime"] !== null) {
            $this->SsaAssetDiscoverTime = $param["SsaAssetDiscoverTime"];
        }

        if (array_key_exists("SsaAssetDeleteTime",$param) and $param["SsaAssetDeleteTime"] !== null) {
            $this->SsaAssetDeleteTime = $param["SsaAssetDeleteTime"];
        }

        if (array_key_exists("IsNew",$param) and $param["IsNew"] !== null) {
            $this->IsNew = $param["IsNew"];
        }

        if (array_key_exists("AssetSubnetId",$param) and $param["AssetSubnetId"] !== null) {
            $this->AssetSubnetId = $param["AssetSubnetId"];
        }

        if (array_key_exists("AssetSubnetName",$param) and $param["AssetSubnetName"] !== null) {
            $this->AssetSubnetName = $param["AssetSubnetName"];
        }

        if (array_key_exists("AssetVpcName",$param) and $param["AssetVpcName"] !== null) {
            $this->AssetVpcName = $param["AssetVpcName"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("NameSpace",$param) and $param["NameSpace"] !== null) {
            $this->NameSpace = $param["NameSpace"];
        }

        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("LoadBalancerVips",$param) and $param["LoadBalancerVips"] !== null) {
            $this->LoadBalancerVips = $param["LoadBalancerVips"];
        }

        if (array_key_exists("AssetIpv6",$param) and $param["AssetIpv6"] !== null) {
            $this->AssetIpv6 = $param["AssetIpv6"];
        }

        if (array_key_exists("SSHRisk",$param) and $param["SSHRisk"] !== null) {
            $this->SSHRisk = $param["SSHRisk"];
        }

        if (array_key_exists("RDPRisk",$param) and $param["RDPRisk"] !== null) {
            $this->RDPRisk = $param["RDPRisk"];
        }

        if (array_key_exists("EventRisk",$param) and $param["EventRisk"] !== null) {
            $this->EventRisk = $param["EventRisk"];
        }
    }
}
