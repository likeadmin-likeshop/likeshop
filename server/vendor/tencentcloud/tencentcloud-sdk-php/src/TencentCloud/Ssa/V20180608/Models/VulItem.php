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
 * 漏洞管理漏洞数据
 *
 * @method string getId() 获取标识
 * @method void setId(string $Id) 设置标识
 * @method string getVulName() 获取漏洞名称
 * @method void setVulName(string $VulName) 设置漏洞名称
 * @method integer getType() 获取漏洞类型
 * @method void setType(integer $Type) 设置漏洞类型
 * @method integer getLevel() 获取风险等级
 * @method void setLevel(integer $Level) 设置风险等级
 * @method integer getStatus() 获取处理状态
 * @method void setStatus(integer $Status) 设置处理状态
 * @method string getTime() 获取发现时间
 * @method void setTime(string $Time) 设置发现时间
 * @method integer getImpactAssetNum() 获取影响资产数
 * @method void setImpactAssetNum(integer $ImpactAssetNum) 设置影响资产数
 * @method string getImpactAsset() 获取影响资产id
 * @method void setImpactAsset(string $ImpactAsset) 设置影响资产id
 * @method string getImpactAssetName() 获取影响资产名称
 * @method void setImpactAssetName(string $ImpactAssetName) 设置影响资产名称
 * @method string getVulDetail() 获取漏洞描述
 * @method void setVulDetail(string $VulDetail) 设置漏洞描述
 * @method string getVulRefLink() 获取参考链接
 * @method void setVulRefLink(string $VulRefLink) 设置参考链接
 * @method string getOldIdMd5() 获取Md5值
 * @method void setOldIdMd5(string $OldIdMd5) 设置Md5值
 * @method string getUniqId() 获取漏洞唯一标识
 * @method void setUniqId(string $UniqId) 设置漏洞唯一标识
 * @method string getOperateTime() 获取忽略时间
 * @method void setOperateTime(string $OperateTime) 设置忽略时间
 * @method string getIsAssetDeleted() 获取受影响资产是否下线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAssetDeleted(string $IsAssetDeleted) 设置受影响资产是否下线
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiscoverTime() 获取漏洞首次发现时间
 * @method void setDiscoverTime(string $DiscoverTime) 设置漏洞首次发现时间
 * @method integer getOriginId() 获取主机源信息标识符
 * @method void setOriginId(integer $OriginId) 设置主机源信息标识符
 * @method string getRegion() 获取资产区域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置资产区域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcid() 获取资产所属网络
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcid(string $Vpcid) 设置资产所属网络
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetType() 获取资产类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetType(string $AssetType) 设置资产类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetSubType() 获取资产子类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetSubType(string $AssetSubType) 设置资产子类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAssetIpAll() 获取资产IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetIpAll(array $AssetIpAll) 设置资产IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPublicIpAddresses() 获取cvm类型的公网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicIpAddresses(array $PublicIpAddresses) 设置cvm类型的公网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPrivateIpAddresses() 获取cvm类型的内网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) 设置cvm类型的内网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVulSource() 获取漏洞来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulSource(string $VulSource) 设置漏洞来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAffectedUrl() 获取影响URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAffectedUrl(string $AffectedUrl) 设置影响URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSsaAssetCategory() 获取资产归属
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSsaAssetCategory(integer $SsaAssetCategory) 设置资产归属
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVulUrl() 获取影响url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulUrl(string $VulUrl) 设置影响url
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsOpen() 获取是否扫描
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsOpen(boolean $IsOpen) 设置是否扫描
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getYzHostId() 获取御知主机id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setYzHostId(integer $YzHostId) 设置御知主机id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVulRepairPlan() 获取漏洞描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulRepairPlan(string $VulRepairPlan) 设置漏洞描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class VulItem extends AbstractModel
{
    /**
     * @var string 标识
     */
    public $Id;

    /**
     * @var string 漏洞名称
     */
    public $VulName;

    /**
     * @var integer 漏洞类型
     */
    public $Type;

    /**
     * @var integer 风险等级
     */
    public $Level;

    /**
     * @var integer 处理状态
     */
    public $Status;

    /**
     * @var string 发现时间
     */
    public $Time;

    /**
     * @var integer 影响资产数
     */
    public $ImpactAssetNum;

    /**
     * @var string 影响资产id
     */
    public $ImpactAsset;

    /**
     * @var string 影响资产名称
     */
    public $ImpactAssetName;

    /**
     * @var string 漏洞描述
     */
    public $VulDetail;

    /**
     * @var string 参考链接
     */
    public $VulRefLink;

    /**
     * @var string Md5值
     */
    public $OldIdMd5;

    /**
     * @var string 漏洞唯一标识
     */
    public $UniqId;

    /**
     * @var string 忽略时间
     */
    public $OperateTime;

    /**
     * @var string 受影响资产是否下线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAssetDeleted;

    /**
     * @var string 漏洞首次发现时间
     */
    public $DiscoverTime;

    /**
     * @var integer 主机源信息标识符
     */
    public $OriginId;

    /**
     * @var string 资产区域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 资产所属网络
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vpcid;

    /**
     * @var string 资产类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetType;

    /**
     * @var string 资产子类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetSubType;

    /**
     * @var array 资产IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetIpAll;

    /**
     * @var array cvm类型的公网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicIpAddresses;

    /**
     * @var array cvm类型的内网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateIpAddresses;

    /**
     * @var string 漏洞来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulSource;

    /**
     * @var string 影响URL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AffectedUrl;

    /**
     * @var integer 资产归属
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SsaAssetCategory;

    /**
     * @var string 影响url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulUrl;

    /**
     * @var boolean 是否扫描
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsOpen;

    /**
     * @var integer 御知主机id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $YzHostId;

    /**
     * @var string 漏洞描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulRepairPlan;

    /**
     * @param string $Id 标识
     * @param string $VulName 漏洞名称
     * @param integer $Type 漏洞类型
     * @param integer $Level 风险等级
     * @param integer $Status 处理状态
     * @param string $Time 发现时间
     * @param integer $ImpactAssetNum 影响资产数
     * @param string $ImpactAsset 影响资产id
     * @param string $ImpactAssetName 影响资产名称
     * @param string $VulDetail 漏洞描述
     * @param string $VulRefLink 参考链接
     * @param string $OldIdMd5 Md5值
     * @param string $UniqId 漏洞唯一标识
     * @param string $OperateTime 忽略时间
     * @param string $IsAssetDeleted 受影响资产是否下线
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiscoverTime 漏洞首次发现时间
     * @param integer $OriginId 主机源信息标识符
     * @param string $Region 资产区域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Vpcid 资产所属网络
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetType 资产类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetSubType 资产子类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AssetIpAll 资产IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PublicIpAddresses cvm类型的公网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PrivateIpAddresses cvm类型的内网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VulSource 漏洞来源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AffectedUrl 影响URL
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SsaAssetCategory 资产归属
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VulUrl 影响url
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsOpen 是否扫描
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $YzHostId 御知主机id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VulRepairPlan 漏洞描述
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("ImpactAssetNum",$param) and $param["ImpactAssetNum"] !== null) {
            $this->ImpactAssetNum = $param["ImpactAssetNum"];
        }

        if (array_key_exists("ImpactAsset",$param) and $param["ImpactAsset"] !== null) {
            $this->ImpactAsset = $param["ImpactAsset"];
        }

        if (array_key_exists("ImpactAssetName",$param) and $param["ImpactAssetName"] !== null) {
            $this->ImpactAssetName = $param["ImpactAssetName"];
        }

        if (array_key_exists("VulDetail",$param) and $param["VulDetail"] !== null) {
            $this->VulDetail = $param["VulDetail"];
        }

        if (array_key_exists("VulRefLink",$param) and $param["VulRefLink"] !== null) {
            $this->VulRefLink = $param["VulRefLink"];
        }

        if (array_key_exists("OldIdMd5",$param) and $param["OldIdMd5"] !== null) {
            $this->OldIdMd5 = $param["OldIdMd5"];
        }

        if (array_key_exists("UniqId",$param) and $param["UniqId"] !== null) {
            $this->UniqId = $param["UniqId"];
        }

        if (array_key_exists("OperateTime",$param) and $param["OperateTime"] !== null) {
            $this->OperateTime = $param["OperateTime"];
        }

        if (array_key_exists("IsAssetDeleted",$param) and $param["IsAssetDeleted"] !== null) {
            $this->IsAssetDeleted = $param["IsAssetDeleted"];
        }

        if (array_key_exists("DiscoverTime",$param) and $param["DiscoverTime"] !== null) {
            $this->DiscoverTime = $param["DiscoverTime"];
        }

        if (array_key_exists("OriginId",$param) and $param["OriginId"] !== null) {
            $this->OriginId = $param["OriginId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Vpcid",$param) and $param["Vpcid"] !== null) {
            $this->Vpcid = $param["Vpcid"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("AssetSubType",$param) and $param["AssetSubType"] !== null) {
            $this->AssetSubType = $param["AssetSubType"];
        }

        if (array_key_exists("AssetIpAll",$param) and $param["AssetIpAll"] !== null) {
            $this->AssetIpAll = $param["AssetIpAll"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }

        if (array_key_exists("VulSource",$param) and $param["VulSource"] !== null) {
            $this->VulSource = $param["VulSource"];
        }

        if (array_key_exists("AffectedUrl",$param) and $param["AffectedUrl"] !== null) {
            $this->AffectedUrl = $param["AffectedUrl"];
        }

        if (array_key_exists("SsaAssetCategory",$param) and $param["SsaAssetCategory"] !== null) {
            $this->SsaAssetCategory = $param["SsaAssetCategory"];
        }

        if (array_key_exists("VulUrl",$param) and $param["VulUrl"] !== null) {
            $this->VulUrl = $param["VulUrl"];
        }

        if (array_key_exists("IsOpen",$param) and $param["IsOpen"] !== null) {
            $this->IsOpen = $param["IsOpen"];
        }

        if (array_key_exists("YzHostId",$param) and $param["YzHostId"] !== null) {
            $this->YzHostId = $param["YzHostId"];
        }

        if (array_key_exists("VulRepairPlan",$param) and $param["VulRepairPlan"] !== null) {
            $this->VulRepairPlan = $param["VulRepairPlan"];
        }
    }
}
