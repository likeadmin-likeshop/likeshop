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
 * 出入院信息
 *
 * @method string getAdmissionTime() 获取入院时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdmissionTime(string $AdmissionTime) 设置入院时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDischargeTime() 获取出院时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDischargeTime(string $DischargeTime) 设置出院时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdmissionDays() 获取住院天数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdmissionDays(string $AdmissionDays) 设置住院天数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdmissionDignosis() 获取入院诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdmissionDignosis(string $AdmissionDignosis) 设置入院诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdmissionCondition() 获取入院情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdmissionCondition(string $AdmissionCondition) 设置入院情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiagnosisTreatment() 获取诊疗经过
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiagnosisTreatment(string $DiagnosisTreatment) 设置诊疗经过
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDischargeDiagnosis() 获取出院诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDischargeDiagnosis(string $DischargeDiagnosis) 设置出院诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDischargeInstruction() 获取出院医嘱
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDischargeInstruction(string $DischargeInstruction) 设置出院医嘱
注意：此字段可能返回 null，表示取不到有效值。
 */
class Hospitalization extends AbstractModel
{
    /**
     * @var string 入院时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdmissionTime;

    /**
     * @var string 出院时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DischargeTime;

    /**
     * @var string 住院天数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdmissionDays;

    /**
     * @var string 入院诊断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdmissionDignosis;

    /**
     * @var string 入院情况
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdmissionCondition;

    /**
     * @var string 诊疗经过
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiagnosisTreatment;

    /**
     * @var string 出院诊断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DischargeDiagnosis;

    /**
     * @var string 出院医嘱
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DischargeInstruction;

    /**
     * @param string $AdmissionTime 入院时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DischargeTime 出院时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdmissionDays 住院天数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdmissionDignosis 入院诊断
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdmissionCondition 入院情况
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DiagnosisTreatment 诊疗经过
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DischargeDiagnosis 出院诊断
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DischargeInstruction 出院医嘱
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
        if (array_key_exists("AdmissionTime",$param) and $param["AdmissionTime"] !== null) {
            $this->AdmissionTime = $param["AdmissionTime"];
        }

        if (array_key_exists("DischargeTime",$param) and $param["DischargeTime"] !== null) {
            $this->DischargeTime = $param["DischargeTime"];
        }

        if (array_key_exists("AdmissionDays",$param) and $param["AdmissionDays"] !== null) {
            $this->AdmissionDays = $param["AdmissionDays"];
        }

        if (array_key_exists("AdmissionDignosis",$param) and $param["AdmissionDignosis"] !== null) {
            $this->AdmissionDignosis = $param["AdmissionDignosis"];
        }

        if (array_key_exists("AdmissionCondition",$param) and $param["AdmissionCondition"] !== null) {
            $this->AdmissionCondition = $param["AdmissionCondition"];
        }

        if (array_key_exists("DiagnosisTreatment",$param) and $param["DiagnosisTreatment"] !== null) {
            $this->DiagnosisTreatment = $param["DiagnosisTreatment"];
        }

        if (array_key_exists("DischargeDiagnosis",$param) and $param["DischargeDiagnosis"] !== null) {
            $this->DischargeDiagnosis = $param["DischargeDiagnosis"];
        }

        if (array_key_exists("DischargeInstruction",$param) and $param["DischargeInstruction"] !== null) {
            $this->DischargeInstruction = $param["DischargeInstruction"];
        }
    }
}
