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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 手术史
 *
 * @method SurgeryAttr getSurgeryName() 获取手术名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSurgeryName(SurgeryAttr $SurgeryName) 设置手术名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method SurgeryAttr getSurgeryDate() 获取手术日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSurgeryDate(SurgeryAttr $SurgeryDate) 设置手术日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method SurgeryAttr getPreoperativePathology() 获取术前诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPreoperativePathology(SurgeryAttr $PreoperativePathology) 设置术前诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method SurgeryAttr getIntraoperativePathology() 获取术中诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntraoperativePathology(SurgeryAttr $IntraoperativePathology) 设置术中诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method SurgeryAttr getPostoperativePathology() 获取术后诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostoperativePathology(SurgeryAttr $PostoperativePathology) 设置术后诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method SurgeryAttr getDischargeDiagnosis() 获取出院诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDischargeDiagnosis(SurgeryAttr $DischargeDiagnosis) 设置出院诊断
注意：此字段可能返回 null，表示取不到有效值。
 */
class SurgeryHistory extends AbstractModel
{
    /**
     * @var SurgeryAttr 手术名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SurgeryName;

    /**
     * @var SurgeryAttr 手术日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SurgeryDate;

    /**
     * @var SurgeryAttr 术前诊断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PreoperativePathology;

    /**
     * @var SurgeryAttr 术中诊断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntraoperativePathology;

    /**
     * @var SurgeryAttr 术后诊断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostoperativePathology;

    /**
     * @var SurgeryAttr 出院诊断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DischargeDiagnosis;

    /**
     * @param SurgeryAttr $SurgeryName 手术名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param SurgeryAttr $SurgeryDate 手术日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param SurgeryAttr $PreoperativePathology 术前诊断
注意：此字段可能返回 null，表示取不到有效值。
     * @param SurgeryAttr $IntraoperativePathology 术中诊断
注意：此字段可能返回 null，表示取不到有效值。
     * @param SurgeryAttr $PostoperativePathology 术后诊断
注意：此字段可能返回 null，表示取不到有效值。
     * @param SurgeryAttr $DischargeDiagnosis 出院诊断
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
        if (array_key_exists("SurgeryName",$param) and $param["SurgeryName"] !== null) {
            $this->SurgeryName = new SurgeryAttr();
            $this->SurgeryName->deserialize($param["SurgeryName"]);
        }

        if (array_key_exists("SurgeryDate",$param) and $param["SurgeryDate"] !== null) {
            $this->SurgeryDate = new SurgeryAttr();
            $this->SurgeryDate->deserialize($param["SurgeryDate"]);
        }

        if (array_key_exists("PreoperativePathology",$param) and $param["PreoperativePathology"] !== null) {
            $this->PreoperativePathology = new SurgeryAttr();
            $this->PreoperativePathology->deserialize($param["PreoperativePathology"]);
        }

        if (array_key_exists("IntraoperativePathology",$param) and $param["IntraoperativePathology"] !== null) {
            $this->IntraoperativePathology = new SurgeryAttr();
            $this->IntraoperativePathology->deserialize($param["IntraoperativePathology"]);
        }

        if (array_key_exists("PostoperativePathology",$param) and $param["PostoperativePathology"] !== null) {
            $this->PostoperativePathology = new SurgeryAttr();
            $this->PostoperativePathology->deserialize($param["PostoperativePathology"]);
        }

        if (array_key_exists("DischargeDiagnosis",$param) and $param["DischargeDiagnosis"] !== null) {
            $this->DischargeDiagnosis = new SurgeryAttr();
            $this->DischargeDiagnosis->deserialize($param["DischargeDiagnosis"]);
        }
    }
}
