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
 * 疾病史
 *
 * @method string getMainDiseaseHistory() 获取主病史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMainDiseaseHistory(string $MainDiseaseHistory) 设置主病史
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAllergyHistory() 获取过敏史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllergyHistory(string $AllergyHistory) 设置过敏史
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInfectHistory() 获取传染疾病史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInfectHistory(string $InfectHistory) 设置传染疾病史
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperationHistory() 获取手术史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperationHistory(string $OperationHistory) 设置手术史
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTransfusionHistory() 获取输血史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransfusionHistory(string $TransfusionHistory) 设置输血史
注意：此字段可能返回 null，表示取不到有效值。
 */
class DiseaseMedicalHistory extends AbstractModel
{
    /**
     * @var string 主病史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MainDiseaseHistory;

    /**
     * @var string 过敏史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllergyHistory;

    /**
     * @var string 传染疾病史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InfectHistory;

    /**
     * @var string 手术史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperationHistory;

    /**
     * @var string 输血史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransfusionHistory;

    /**
     * @param string $MainDiseaseHistory 主病史
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AllergyHistory 过敏史
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InfectHistory 传染疾病史
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OperationHistory 手术史
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TransfusionHistory 输血史
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
        if (array_key_exists("MainDiseaseHistory",$param) and $param["MainDiseaseHistory"] !== null) {
            $this->MainDiseaseHistory = $param["MainDiseaseHistory"];
        }

        if (array_key_exists("AllergyHistory",$param) and $param["AllergyHistory"] !== null) {
            $this->AllergyHistory = $param["AllergyHistory"];
        }

        if (array_key_exists("InfectHistory",$param) and $param["InfectHistory"] !== null) {
            $this->InfectHistory = $param["InfectHistory"];
        }

        if (array_key_exists("OperationHistory",$param) and $param["OperationHistory"] !== null) {
            $this->OperationHistory = $param["OperationHistory"];
        }

        if (array_key_exists("TransfusionHistory",$param) and $param["TransfusionHistory"] !== null) {
            $this->TransfusionHistory = $param["TransfusionHistory"];
        }
    }
}
