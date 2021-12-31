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
 * 资产详情信息
 *
 * @method string getAssetType() 获取资产类型
 * @method void setAssetType(string $AssetType) 设置资产类型
 * @method string getName() 获取名字
 * @method void setName(string $Name) 设置名字
 * @method string getRegion() 获取区域
 * @method void setRegion(string $Region) 设置区域
 * @method string getVpcId() 获取所属网络
 * @method void setVpcId(string $VpcId) 设置所属网络
 * @method string getInstanceType() 获取主机类型
 * @method void setInstanceType(string $InstanceType) 设置主机类型
 * @method string getInstanceState() 获取主机状态
 * @method void setInstanceState(string $InstanceState) 设置主机状态
 * @method array getPublicIpAddresses() 获取主机IP-公网
 * @method void setPublicIpAddresses(array $PublicIpAddresses) 设置主机IP-公网
 * @method string getEngineVersion() 获取引擎版本
 * @method void setEngineVersion(string $EngineVersion) 设置引擎版本
 * @method string getId() 获取标识
 * @method void setId(string $Id) 设置标识
 * @method array getTag() 获取标签
 * @method void setTag(array $Tag) 设置标签
 * @method string getVip() 获取内网IP地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVip(string $Vip) 设置内网IP地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLoadBalancerVips() 获取负载均衡示例的vip列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerVips(array $LoadBalancerVips) 设置负载均衡示例的vip列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUin() 获取账号ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(integer $Uin) 设置账号ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreationDate() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreationDate(string $CreationDate) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomain() 获取访问域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置访问域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetUniqid() 获取资产唯一id
 * @method void setAssetUniqid(string $AssetUniqid) 设置资产唯一id
 * @method string getInstanceId() 获取关联实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置关联实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiskType() 获取配置硬盘类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskType(string $DiskType) 设置配置硬盘类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiskSize() 获取配置硬盘大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskSize(integer $DiskSize) 设置配置硬盘大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetStatus() 获取云硬盘/证书状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetStatus(string $AssetStatus) 设置云硬盘/证书状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertType() 获取证书类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertType(string $CertType) 设置证书类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取所属项目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置所属项目
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCertEndTime() 获取到期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertEndTime(string $CertEndTime) 设置到期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProductType() 获取nosql引擎/版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductType(integer $ProductType) 设置nosql引擎/版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPrivateIpAddresses() 获取主机IP-内网
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) 设置主机IP-内网
 * @method string getValidityPeriod() 获取证书有效期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValidityPeriod(string $ValidityPeriod) 设置证书有效期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取分组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置分组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPort() 获取端口服务数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(array $Port) 设置端口服务数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRiskConfig() 获取配置风险数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskConfig(array $RiskConfig) 设置配置风险数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEvent() 获取相关待处理事件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEvent(string $Event) 设置相关待处理事件
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVul() 获取相关待处理漏洞
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVul(string $Vul) 设置相关待处理漏洞
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSsaAssetDiscoverTime() 获取资产发现时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSsaAssetDiscoverTime(string $SsaAssetDiscoverTime) 设置资产发现时间
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
 * @method string getAssetCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetCreateTime(string $AssetCreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLoadBalancerType() 获取负载均衡网络类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置负载均衡网络类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAssetIpv6() 获取ipv6信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetIpv6(array $AssetIpv6) 设置ipv6信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSSHRisk() 获取ssh风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSSHRisk(string $SSHRisk) 设置ssh风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRDPRisk() 获取rdp风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRDPRisk(string $RDPRisk) 设置rdp风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventRisk() 获取安全事件风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventRisk(string $EventRisk) 设置安全事件风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAssetVulNum() 获取漏洞数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetVulNum(integer $AssetVulNum) 设置漏洞数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class AssetDetail extends AbstractModel
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
    public $Region;

    /**
     * @var string 所属网络
     */
    public $VpcId;

    /**
     * @var string 主机类型
     */
    public $InstanceType;

    /**
     * @var string 主机状态
     */
    public $InstanceState;

    /**
     * @var array 主机IP-公网
     */
    public $PublicIpAddresses;

    /**
     * @var string 引擎版本
     */
    public $EngineVersion;

    /**
     * @var string 标识
     */
    public $Id;

    /**
     * @var array 标签
     */
    public $Tag;

    /**
     * @var string 内网IP地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vip;

    /**
     * @var integer 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var array 负载均衡示例的vip列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerVips;

    /**
     * @var integer 账号ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreationDate;

    /**
     * @var string 访问域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var string 资产唯一id
     */
    public $AssetUniqid;

    /**
     * @var string 关联实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 配置硬盘类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskType;

    /**
     * @var integer 配置硬盘大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskSize;

    /**
     * @var string 云硬盘/证书状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetStatus;

    /**
     * @var string 证书类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertType;

    /**
     * @var string 所属项目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var string 到期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertEndTime;

    /**
     * @var integer nosql引擎/版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductType;

    /**
     * @var array 主机IP-内网
     */
    public $PrivateIpAddresses;

    /**
     * @var string 证书有效期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValidityPeriod;

    /**
     * @var string 分组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var array 端口服务数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var array 配置风险数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskConfig;

    /**
     * @var string 相关待处理事件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Event;

    /**
     * @var string 相关待处理漏洞
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vul;

    /**
     * @var string 资产发现时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SsaAssetDiscoverTime;

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
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetCreateTime;

    /**
     * @var string 负载均衡网络类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerType;

    /**
     * @var array ipv6信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetIpv6;

    /**
     * @var string ssh风险
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SSHRisk;

    /**
     * @var string rdp风险
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RDPRisk;

    /**
     * @var string 安全事件风险
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventRisk;

    /**
     * @var integer 漏洞数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetVulNum;

    /**
     * @param string $AssetType 资产类型
     * @param string $Name 名字
     * @param string $Region 区域
     * @param string $VpcId 所属网络
     * @param string $InstanceType 主机类型
     * @param string $InstanceState 主机状态
     * @param array $PublicIpAddresses 主机IP-公网
     * @param string $EngineVersion 引擎版本
     * @param string $Id 标识
     * @param array $Tag 标签
     * @param string $Vip 内网IP地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LoadBalancerVips 负载均衡示例的vip列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Uin 账号ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreationDate 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Domain 访问域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetUniqid 资产唯一id
     * @param string $InstanceId 关联实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiskType 配置硬盘类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DiskSize 配置硬盘大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetStatus 云硬盘/证书状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CertType 证书类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 所属项目
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CertEndTime 到期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProductType nosql引擎/版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PrivateIpAddresses 主机IP-内网
     * @param string $ValidityPeriod 证书有效期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName 分组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Port 端口服务数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RiskConfig 配置风险数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Event 相关待处理事件
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Vul 相关待处理漏洞
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SsaAssetDiscoverTime 资产发现时间
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
     * @param string $AssetCreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LoadBalancerType 负载均衡网络类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AssetIpv6 ipv6信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SSHRisk ssh风险
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RDPRisk rdp风险
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventRisk 安全事件风险
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AssetVulNum 漏洞数量
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
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

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LoadBalancerVips",$param) and $param["LoadBalancerVips"] !== null) {
            $this->LoadBalancerVips = $param["LoadBalancerVips"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("CreationDate",$param) and $param["CreationDate"] !== null) {
            $this->CreationDate = $param["CreationDate"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("AssetUniqid",$param) and $param["AssetUniqid"] !== null) {
            $this->AssetUniqid = $param["AssetUniqid"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("AssetStatus",$param) and $param["AssetStatus"] !== null) {
            $this->AssetStatus = $param["AssetStatus"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("CertEndTime",$param) and $param["CertEndTime"] !== null) {
            $this->CertEndTime = $param["CertEndTime"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }

        if (array_key_exists("ValidityPeriod",$param) and $param["ValidityPeriod"] !== null) {
            $this->ValidityPeriod = $param["ValidityPeriod"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("RiskConfig",$param) and $param["RiskConfig"] !== null) {
            $this->RiskConfig = $param["RiskConfig"];
        }

        if (array_key_exists("Event",$param) and $param["Event"] !== null) {
            $this->Event = $param["Event"];
        }

        if (array_key_exists("Vul",$param) and $param["Vul"] !== null) {
            $this->Vul = $param["Vul"];
        }

        if (array_key_exists("SsaAssetDiscoverTime",$param) and $param["SsaAssetDiscoverTime"] !== null) {
            $this->SsaAssetDiscoverTime = $param["SsaAssetDiscoverTime"];
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

        if (array_key_exists("AssetCreateTime",$param) and $param["AssetCreateTime"] !== null) {
            $this->AssetCreateTime = $param["AssetCreateTime"];
        }

        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
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

        if (array_key_exists("AssetVulNum",$param) and $param["AssetVulNum"] !== null) {
            $this->AssetVulNum = $param["AssetVulNum"];
        }
    }
}
