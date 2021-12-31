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
 * 事件列表对象
 *
 * @method string getOldIdMd5() 获取Md5值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOldIdMd5(string $OldIdMd5) 设置Md5值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventName() 获取事件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventName(string $EventName) 设置事件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEventType1() 获取事件类型一级分类
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventType1(integer $EventType1) 设置事件类型一级分类
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEventType2() 获取事件类型二级分类
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventType2(integer $EventType2) 设置事件类型二级分类
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevel() 获取事件等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(integer $Level) 设置事件等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取处理状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置处理状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSrcIp() 获取源ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcIp(string $SrcIp) 设置源ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDstIp() 获取目的ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDstIp(string $DstIp) 设置目的ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTime() 获取事件发生时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTime(string $Time) 设置事件发生时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDstport() 获取目的端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDstport(integer $Dstport) 设置目的端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetIp() 获取资产ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetIp(string $AssetIp) 设置资产ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetName() 获取资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetName(string $AssetName) 设置资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSsaEventUniqid() 获取安全事件唯一标识符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSsaEventUniqid(string $SsaEventUniqid) 设置安全事件唯一标识符
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetId() 获取资产id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetId(string $AssetId) 设置资产id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSource() 获取事件来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(string $Source) 设置事件来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndex() 获取索引
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndex(string $Index) 设置索引
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getId() 获取索引中的唯一标识符
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置索引中的唯一标识符
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsAssetDeleted() 获取受影响资产是否已下线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAssetDeleted(string $IsAssetDeleted) 设置受影响资产是否已下线
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSsaSrcCountry() 获取源ip所属地
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSsaSrcCountry(string $SsaSrcCountry) 设置源ip所属地
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSsaDstCountry() 获取目的ip所属地
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSsaDstCountry(string $SsaDstCountry) 设置目的ip所属地
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSsaDescription() 获取木马类型的描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSsaDescription(string $SsaDescription) 设置木马类型的描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSsaAttackChain() 获取供给链类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSsaAttackChain(string $SsaAttackChain) 设置供给链类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleComponents() 获取受影响组件
 * @method void setRuleComponents(string $RuleComponents) 设置受影响组件
 * @method array getAssetIpAll() 获取资产ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetIpAll(array $AssetIpAll) 设置资产ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetType() 获取资产类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetType(string $AssetType) 设置资产类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPublicIpAddresses() 获取cvm类型资产的公网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicIpAddresses(array $PublicIpAddresses) 设置cvm类型资产的公网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPrivateIpAddresses() 获取cvm类型资产的内网ip
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) 设置cvm类型资产的内网ip
 * @method integer getSoarResponseStatus() 获取事件响应状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSoarResponseStatus(integer $SoarResponseStatus) 设置事件响应状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSoarResponseTime() 获取事件最近响应时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSoarResponseTime(integer $SoarResponseTime) 设置事件最近响应时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSoarSuggestStatus() 获取事件建议处理状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSoarSuggestStatus(integer $SoarSuggestStatus) 设置事件建议处理状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSoarPlaybookType() 获取事件剧本类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSoarPlaybookType(string $SoarPlaybookType) 设置事件剧本类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSoarRunId() 获取剧本任务Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSoarRunId(string $SoarRunId) 设置剧本任务Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSsaEventId() 获取事件Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSsaEventId(string $SsaEventId) 设置事件Id
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataEvent extends AbstractModel
{
    /**
     * @var string Md5值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OldIdMd5;

    /**
     * @var string 事件名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventName;

    /**
     * @var integer 事件类型一级分类
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventType1;

    /**
     * @var integer 事件类型二级分类
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventType2;

    /**
     * @var integer 事件等级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var integer 处理状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 源ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcIp;

    /**
     * @var string 目的ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DstIp;

    /**
     * @var string 事件发生时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Time;

    /**
     * @var integer 目的端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Dstport;

    /**
     * @var string 资产ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetIp;

    /**
     * @var string 资产名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetName;

    /**
     * @var string 安全事件唯一标识符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SsaEventUniqid;

    /**
     * @var string 资产id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetId;

    /**
     * @var string 事件来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var string 索引
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Index;

    /**
     * @var string 索引中的唯一标识符
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 受影响资产是否已下线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAssetDeleted;

    /**
     * @var string 源ip所属地
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SsaSrcCountry;

    /**
     * @var string 目的ip所属地
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SsaDstCountry;

    /**
     * @var string 木马类型的描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SsaDescription;

    /**
     * @var string 供给链类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SsaAttackChain;

    /**
     * @var string 受影响组件
     */
    public $RuleComponents;

    /**
     * @var array 资产ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetIpAll;

    /**
     * @var string 资产类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetType;

    /**
     * @var array cvm类型资产的公网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicIpAddresses;

    /**
     * @var array cvm类型资产的内网ip
     */
    public $PrivateIpAddresses;

    /**
     * @var integer 事件响应状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SoarResponseStatus;

    /**
     * @var integer 事件最近响应时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SoarResponseTime;

    /**
     * @var integer 事件建议处理状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SoarSuggestStatus;

    /**
     * @var string 事件剧本类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SoarPlaybookType;

    /**
     * @var string 剧本任务Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SoarRunId;

    /**
     * @var string 事件Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SsaEventId;

    /**
     * @param string $OldIdMd5 Md5值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventName 事件名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EventType1 事件类型一级分类
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EventType2 事件类型二级分类
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Level 事件等级
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 处理状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SrcIp 源ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DstIp 目的ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Time 事件发生时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Dstport 目的端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetIp 资产ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetName 资产名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SsaEventUniqid 安全事件唯一标识符
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetId 资产id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Source 事件来源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Index 索引
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Id 索引中的唯一标识符
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsAssetDeleted 受影响资产是否已下线
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SsaSrcCountry 源ip所属地
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SsaDstCountry 目的ip所属地
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SsaDescription 木马类型的描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SsaAttackChain 供给链类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleComponents 受影响组件
     * @param array $AssetIpAll 资产ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetType 资产类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PublicIpAddresses cvm类型资产的公网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PrivateIpAddresses cvm类型资产的内网ip
     * @param integer $SoarResponseStatus 事件响应状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SoarResponseTime 事件最近响应时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SoarSuggestStatus 事件建议处理状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SoarPlaybookType 事件剧本类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SoarRunId 剧本任务Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SsaEventId 事件Id
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
        if (array_key_exists("OldIdMd5",$param) and $param["OldIdMd5"] !== null) {
            $this->OldIdMd5 = $param["OldIdMd5"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("EventType1",$param) and $param["EventType1"] !== null) {
            $this->EventType1 = $param["EventType1"];
        }

        if (array_key_exists("EventType2",$param) and $param["EventType2"] !== null) {
            $this->EventType2 = $param["EventType2"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("DstIp",$param) and $param["DstIp"] !== null) {
            $this->DstIp = $param["DstIp"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Dstport",$param) and $param["Dstport"] !== null) {
            $this->Dstport = $param["Dstport"];
        }

        if (array_key_exists("AssetIp",$param) and $param["AssetIp"] !== null) {
            $this->AssetIp = $param["AssetIp"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("SsaEventUniqid",$param) and $param["SsaEventUniqid"] !== null) {
            $this->SsaEventUniqid = $param["SsaEventUniqid"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("IsAssetDeleted",$param) and $param["IsAssetDeleted"] !== null) {
            $this->IsAssetDeleted = $param["IsAssetDeleted"];
        }

        if (array_key_exists("SsaSrcCountry",$param) and $param["SsaSrcCountry"] !== null) {
            $this->SsaSrcCountry = $param["SsaSrcCountry"];
        }

        if (array_key_exists("SsaDstCountry",$param) and $param["SsaDstCountry"] !== null) {
            $this->SsaDstCountry = $param["SsaDstCountry"];
        }

        if (array_key_exists("SsaDescription",$param) and $param["SsaDescription"] !== null) {
            $this->SsaDescription = $param["SsaDescription"];
        }

        if (array_key_exists("SsaAttackChain",$param) and $param["SsaAttackChain"] !== null) {
            $this->SsaAttackChain = $param["SsaAttackChain"];
        }

        if (array_key_exists("RuleComponents",$param) and $param["RuleComponents"] !== null) {
            $this->RuleComponents = $param["RuleComponents"];
        }

        if (array_key_exists("AssetIpAll",$param) and $param["AssetIpAll"] !== null) {
            $this->AssetIpAll = $param["AssetIpAll"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }

        if (array_key_exists("SoarResponseStatus",$param) and $param["SoarResponseStatus"] !== null) {
            $this->SoarResponseStatus = $param["SoarResponseStatus"];
        }

        if (array_key_exists("SoarResponseTime",$param) and $param["SoarResponseTime"] !== null) {
            $this->SoarResponseTime = $param["SoarResponseTime"];
        }

        if (array_key_exists("SoarSuggestStatus",$param) and $param["SoarSuggestStatus"] !== null) {
            $this->SoarSuggestStatus = $param["SoarSuggestStatus"];
        }

        if (array_key_exists("SoarPlaybookType",$param) and $param["SoarPlaybookType"] !== null) {
            $this->SoarPlaybookType = $param["SoarPlaybookType"];
        }

        if (array_key_exists("SoarRunId",$param) and $param["SoarRunId"] !== null) {
            $this->SoarRunId = $param["SoarRunId"];
        }

        if (array_key_exists("SsaEventId",$param) and $param["SsaEventId"] !== null) {
            $this->SsaEventId = $param["SsaEventId"];
        }
    }
}
