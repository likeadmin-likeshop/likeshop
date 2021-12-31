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
 * 合规检查项详情对象
 *
 * @method string getId() 获取等保唯一标识符
 * @method void setId(string $Id) 设置等保唯一标识符
 * @method string getCheckItemId() 获取检查项唯一标识符
 * @method void setCheckItemId(string $CheckItemId) 设置检查项唯一标识符
 * @method string getName() 获取检查项名称
 * @method void setName(string $Name) 设置检查项名称
 * @method string getAssetType() 获取检查项资产类型
 * @method void setAssetType(string $AssetType) 设置检查项资产类型
 * @method string getType() 获取检查项类型
 * @method void setType(string $Type) 设置检查项类型
 * @method string getCategory() 获取检查项类别
 * @method void setCategory(string $Category) 设置检查项类别
 * @method string getStandardItem() 获取检查项标准项
 * @method void setStandardItem(string $StandardItem) 设置检查项标准项
 * @method string getChapter() 获取检查项章节号
 * @method void setChapter(string $Chapter) 设置检查项章节号
 * @method string getLastCheckTime() 获取最近一次检查时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastCheckTime(string $LastCheckTime) 设置最近一次检查时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取初始未检测状态0, 已通过为1，未通过为2
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置初始未检测状态0, 已通过为1，未通过为2
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRiskCount() 获取有风险的资源总数，未通过数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskCount(integer $RiskCount) 设置有风险的资源总数，未通过数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsChecked() 获取0-检测中,1-结束检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsChecked(integer $IsChecked) 设置0-检测中,1-结束检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskItem() 获取检查项风险项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskItem(string $RiskItem) 设置检查项风险项
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsIgnored() 获取0-未忽略,1-已忽略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsIgnored(integer $IsIgnored) 设置0-未忽略,1-已忽略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTitle() 获取等保检查项完整名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTitle(string $Title) 设置等保检查项完整名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAssetTotal() 获取资产总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetTotal(integer $AssetTotal) 设置资产总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemarks() 获取忽略内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemarks(string $Remarks) 设置忽略内容
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataCompliance extends AbstractModel
{
    /**
     * @var string 等保唯一标识符
     */
    public $Id;

    /**
     * @var string 检查项唯一标识符
     */
    public $CheckItemId;

    /**
     * @var string 检查项名称
     */
    public $Name;

    /**
     * @var string 检查项资产类型
     */
    public $AssetType;

    /**
     * @var string 检查项类型
     */
    public $Type;

    /**
     * @var string 检查项类别
     */
    public $Category;

    /**
     * @var string 检查项标准项
     */
    public $StandardItem;

    /**
     * @var string 检查项章节号
     */
    public $Chapter;

    /**
     * @var string 最近一次检查时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastCheckTime;

    /**
     * @var integer 初始未检测状态0, 已通过为1，未通过为2
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 有风险的资源总数，未通过数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskCount;

    /**
     * @var integer 0-检测中,1-结束检测
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsChecked;

    /**
     * @var string 检查项风险项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskItem;

    /**
     * @var integer 0-未忽略,1-已忽略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsIgnored;

    /**
     * @var string 等保检查项完整名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Title;

    /**
     * @var integer 资产总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetTotal;

    /**
     * @var string 忽略内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remarks;

    /**
     * @param string $Id 等保唯一标识符
     * @param string $CheckItemId 检查项唯一标识符
     * @param string $Name 检查项名称
     * @param string $AssetType 检查项资产类型
     * @param string $Type 检查项类型
     * @param string $Category 检查项类别
     * @param string $StandardItem 检查项标准项
     * @param string $Chapter 检查项章节号
     * @param string $LastCheckTime 最近一次检查时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 初始未检测状态0, 已通过为1，未通过为2
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RiskCount 有风险的资源总数，未通过数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsChecked 0-检测中,1-结束检测
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskItem 检查项风险项
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsIgnored 0-未忽略,1-已忽略
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Title 等保检查项完整名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AssetTotal 资产总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remarks 忽略内容
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

        if (array_key_exists("CheckItemId",$param) and $param["CheckItemId"] !== null) {
            $this->CheckItemId = $param["CheckItemId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("StandardItem",$param) and $param["StandardItem"] !== null) {
            $this->StandardItem = $param["StandardItem"];
        }

        if (array_key_exists("Chapter",$param) and $param["Chapter"] !== null) {
            $this->Chapter = $param["Chapter"];
        }

        if (array_key_exists("LastCheckTime",$param) and $param["LastCheckTime"] !== null) {
            $this->LastCheckTime = $param["LastCheckTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("IsChecked",$param) and $param["IsChecked"] !== null) {
            $this->IsChecked = $param["IsChecked"];
        }

        if (array_key_exists("RiskItem",$param) and $param["RiskItem"] !== null) {
            $this->RiskItem = $param["RiskItem"];
        }

        if (array_key_exists("IsIgnored",$param) and $param["IsIgnored"] !== null) {
            $this->IsIgnored = $param["IsIgnored"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("AssetTotal",$param) and $param["AssetTotal"] !== null) {
            $this->AssetTotal = $param["AssetTotal"];
        }

        if (array_key_exists("Remarks",$param) and $param["Remarks"] !== null) {
            $this->Remarks = $param["Remarks"];
        }
    }
}
