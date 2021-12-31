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
 * DescribeVulDetail返回参数结构体
 *
 * @method integer getVulType() 获取漏洞类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulType(integer $VulType) 设置漏洞类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubVulType() 获取漏洞子类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubVulType(string $SubVulType) 设置漏洞子类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCvssScore() 获取cvss分数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCvssScore(string $CvssScore) 设置cvss分数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCvss() 获取cvss值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCvss(string $Cvss) 设置cvss值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCve() 获取cve编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCve(string $Cve) 设置cve编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCnvd() 获取cnvd编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCnvd(string $Cnvd) 设置cnvd编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCnnvd() 获取cnnvd编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCnnvd(string $Cnnvd) 设置cnnvd编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDesc() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesc(string $Desc) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReference() 获取参考
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReference(string $Reference) 设置参考
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepair() 获取修复意见
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepair(string $Repair) 设置修复意见
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReleaseTime() 获取披露时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReleaseTime(string $ReleaseTime) 设置披露时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取漏洞名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置漏洞名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevel() 获取等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(integer $Level) 设置等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImpactAsset() 获取受影响资产唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImpactAsset(string $ImpactAsset) 设置受影响资产唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImpactAssetName() 获取受影响资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImpactAssetName(string $ImpactAssetName) 设置受影响资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsAssetDeleted() 获取受影响资产是否已删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAssetDeleted(boolean $IsAssetDeleted) 设置受影响资产是否已删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSource() 获取漏洞来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(string $Source) 设置漏洞来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVulUrl() 获取漏洞URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulUrl(string $VulUrl) 设置漏洞URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSsaAssetCategory() 获取资产归属
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSsaAssetCategory(integer $SsaAssetCategory) 设置资产归属
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVulDetailResponse extends AbstractModel
{
    /**
     * @var integer 漏洞类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulType;

    /**
     * @var string 漏洞子类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubVulType;

    /**
     * @var string cvss分数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CvssScore;

    /**
     * @var string cvss值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cvss;

    /**
     * @var string cve编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cve;

    /**
     * @var string cnvd编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cnvd;

    /**
     * @var string cnnvd编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cnnvd;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Desc;

    /**
     * @var string 参考
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reference;

    /**
     * @var string 修复意见
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Repair;

    /**
     * @var string 披露时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReleaseTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 漏洞名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 等级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var integer 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 受影响资产唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImpactAsset;

    /**
     * @var string 受影响资产名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImpactAssetName;

    /**
     * @var boolean 受影响资产是否已删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAssetDeleted;

    /**
     * @var string 漏洞来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var string 漏洞URL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulUrl;

    /**
     * @var integer 资产归属
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SsaAssetCategory;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $VulType 漏洞类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubVulType 漏洞子类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CvssScore cvss分数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Cvss cvss值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Cve cve编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Cnvd cnvd编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Cnnvd cnnvd编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Desc 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Reference 参考
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Repair 修复意见
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReleaseTime 披露时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 漏洞名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Level 等级
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImpactAsset 受影响资产唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImpactAssetName 受影响资产名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsAssetDeleted 受影响资产是否已删除
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Source 漏洞来源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VulUrl 漏洞URL
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SsaAssetCategory 资产归属
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("VulType",$param) and $param["VulType"] !== null) {
            $this->VulType = $param["VulType"];
        }

        if (array_key_exists("SubVulType",$param) and $param["SubVulType"] !== null) {
            $this->SubVulType = $param["SubVulType"];
        }

        if (array_key_exists("CvssScore",$param) and $param["CvssScore"] !== null) {
            $this->CvssScore = $param["CvssScore"];
        }

        if (array_key_exists("Cvss",$param) and $param["Cvss"] !== null) {
            $this->Cvss = $param["Cvss"];
        }

        if (array_key_exists("Cve",$param) and $param["Cve"] !== null) {
            $this->Cve = $param["Cve"];
        }

        if (array_key_exists("Cnvd",$param) and $param["Cnvd"] !== null) {
            $this->Cnvd = $param["Cnvd"];
        }

        if (array_key_exists("Cnnvd",$param) and $param["Cnnvd"] !== null) {
            $this->Cnnvd = $param["Cnnvd"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Reference",$param) and $param["Reference"] !== null) {
            $this->Reference = $param["Reference"];
        }

        if (array_key_exists("Repair",$param) and $param["Repair"] !== null) {
            $this->Repair = $param["Repair"];
        }

        if (array_key_exists("ReleaseTime",$param) and $param["ReleaseTime"] !== null) {
            $this->ReleaseTime = $param["ReleaseTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ImpactAsset",$param) and $param["ImpactAsset"] !== null) {
            $this->ImpactAsset = $param["ImpactAsset"];
        }

        if (array_key_exists("ImpactAssetName",$param) and $param["ImpactAssetName"] !== null) {
            $this->ImpactAssetName = $param["ImpactAssetName"];
        }

        if (array_key_exists("IsAssetDeleted",$param) and $param["IsAssetDeleted"] !== null) {
            $this->IsAssetDeleted = $param["IsAssetDeleted"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("VulUrl",$param) and $param["VulUrl"] !== null) {
            $this->VulUrl = $param["VulUrl"];
        }

        if (array_key_exists("SsaAssetCategory",$param) and $param["SsaAssetCategory"] !== null) {
            $this->SsaAssetCategory = $param["SsaAssetCategory"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
