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
 * 等保资产组记录
 *
 * @method string getId() 获取检查项ID
 * @method void setId(string $Id) 设置检查项ID
 * @method string getCategory() 获取检查项类别
 * @method void setCategory(string $Category) 设置检查项类别
 * @method string getType() 获取检查项类型
 * @method void setType(string $Type) 设置检查项类型
 * @method integer getErrorCount() 获取不通过总数
 * @method void setErrorCount(integer $ErrorCount) 设置不通过总数
 * @method string getNameEn() 获取检查项英文名
 * @method void setNameEn(string $NameEn) 设置检查项英文名
 * @method string getCheckName() 获取检查项名称
 * @method void setCheckName(string $CheckName) 设置检查项名称
 * @method string getMethod() 获取检查项处置方式
 * @method void setMethod(string $Method) 设置检查项处置方式
 * @method string getDoc() 获取帮助文档
 * @method void setDoc(string $Doc) 设置帮助文档
 * @method integer getSafeCount() 获取通过总数
 * @method void setSafeCount(integer $SafeCount) 设置通过总数
 * @method string getContent() 获取检查项检查内容
 * @method void setContent(string $Content) 设置检查项检查内容
 * @method integer getIsPass() 获取是否通过检测
 * @method void setIsPass(integer $IsPass) 设置是否通过检测
 * @method integer getIgnoreCount() 获取忽略总数
 * @method void setIgnoreCount(integer $IgnoreCount) 设置忽略总数
 * @method integer getRiskCount() 获取风险总数
 * @method void setRiskCount(integer $RiskCount) 设置风险总数
 * @method string getLastCheckTime() 获取最近一次检测时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastCheckTime(string $LastCheckTime) 设置最近一次检测时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetType() 获取资产组类型
 * @method void setAssetType(string $AssetType) 设置资产组类型
 * @method integer getResCount() 获取res_count
 * @method void setResCount(integer $ResCount) 设置res_count
 * @method string getUUID() 获取检查项UUID
 * @method void setUUID(string $UUID) 设置检查项UUID
 * @method string getStandardItem() 获取标准项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStandardItem(string $StandardItem) 设置标准项
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChapter() 获取章节
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChapter(string $Chapter) 设置章节
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetTypeDesc() 获取资产类型描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetTypeDesc(string $AssetTypeDesc) 设置资产类型描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsIgnore() 获取是否忽略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsIgnore(integer $IsIgnore) 设置是否忽略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskItem() 获取风险项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskItem(string $RiskItem) 设置风险项
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTitle() 获取合规检查项完整名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTitle(string $Title) 设置合规检查项完整名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class ComplianceCheckDetail extends AbstractModel
{
    /**
     * @var string 检查项ID
     */
    public $Id;

    /**
     * @var string 检查项类别
     */
    public $Category;

    /**
     * @var string 检查项类型
     */
    public $Type;

    /**
     * @var integer 不通过总数
     */
    public $ErrorCount;

    /**
     * @var string 检查项英文名
     */
    public $NameEn;

    /**
     * @var string 检查项名称
     */
    public $CheckName;

    /**
     * @var string 检查项处置方式
     */
    public $Method;

    /**
     * @var string 帮助文档
     */
    public $Doc;

    /**
     * @var integer 通过总数
     */
    public $SafeCount;

    /**
     * @var string 检查项检查内容
     */
    public $Content;

    /**
     * @var integer 是否通过检测
     */
    public $IsPass;

    /**
     * @var integer 忽略总数
     */
    public $IgnoreCount;

    /**
     * @var integer 风险总数
     */
    public $RiskCount;

    /**
     * @var string 最近一次检测时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastCheckTime;

    /**
     * @var string 资产组类型
     */
    public $AssetType;

    /**
     * @var integer res_count
     */
    public $ResCount;

    /**
     * @var string 检查项UUID
     */
    public $UUID;

    /**
     * @var string 标准项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StandardItem;

    /**
     * @var string 章节
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Chapter;

    /**
     * @var string 资产类型描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetTypeDesc;

    /**
     * @var integer 是否忽略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsIgnore;

    /**
     * @var string 风险项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskItem;

    /**
     * @var string 合规检查项完整名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Title;

    /**
     * @param string $Id 检查项ID
     * @param string $Category 检查项类别
     * @param string $Type 检查项类型
     * @param integer $ErrorCount 不通过总数
     * @param string $NameEn 检查项英文名
     * @param string $CheckName 检查项名称
     * @param string $Method 检查项处置方式
     * @param string $Doc 帮助文档
     * @param integer $SafeCount 通过总数
     * @param string $Content 检查项检查内容
     * @param integer $IsPass 是否通过检测
     * @param integer $IgnoreCount 忽略总数
     * @param integer $RiskCount 风险总数
     * @param string $LastCheckTime 最近一次检测时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetType 资产组类型
     * @param integer $ResCount res_count
     * @param string $UUID 检查项UUID
     * @param string $StandardItem 标准项
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Chapter 章节
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetTypeDesc 资产类型描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsIgnore 是否忽略
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskItem 风险项
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Title 合规检查项完整名称
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

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ErrorCount",$param) and $param["ErrorCount"] !== null) {
            $this->ErrorCount = $param["ErrorCount"];
        }

        if (array_key_exists("NameEn",$param) and $param["NameEn"] !== null) {
            $this->NameEn = $param["NameEn"];
        }

        if (array_key_exists("CheckName",$param) and $param["CheckName"] !== null) {
            $this->CheckName = $param["CheckName"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Doc",$param) and $param["Doc"] !== null) {
            $this->Doc = $param["Doc"];
        }

        if (array_key_exists("SafeCount",$param) and $param["SafeCount"] !== null) {
            $this->SafeCount = $param["SafeCount"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("IsPass",$param) and $param["IsPass"] !== null) {
            $this->IsPass = $param["IsPass"];
        }

        if (array_key_exists("IgnoreCount",$param) and $param["IgnoreCount"] !== null) {
            $this->IgnoreCount = $param["IgnoreCount"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("LastCheckTime",$param) and $param["LastCheckTime"] !== null) {
            $this->LastCheckTime = $param["LastCheckTime"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("ResCount",$param) and $param["ResCount"] !== null) {
            $this->ResCount = $param["ResCount"];
        }

        if (array_key_exists("UUID",$param) and $param["UUID"] !== null) {
            $this->UUID = $param["UUID"];
        }

        if (array_key_exists("StandardItem",$param) and $param["StandardItem"] !== null) {
            $this->StandardItem = $param["StandardItem"];
        }

        if (array_key_exists("Chapter",$param) and $param["Chapter"] !== null) {
            $this->Chapter = $param["Chapter"];
        }

        if (array_key_exists("AssetTypeDesc",$param) and $param["AssetTypeDesc"] !== null) {
            $this->AssetTypeDesc = $param["AssetTypeDesc"];
        }

        if (array_key_exists("IsIgnore",$param) and $param["IsIgnore"] !== null) {
            $this->IsIgnore = $param["IsIgnore"];
        }

        if (array_key_exists("RiskItem",$param) and $param["RiskItem"] !== null) {
            $this->RiskItem = $param["RiskItem"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }
    }
}
