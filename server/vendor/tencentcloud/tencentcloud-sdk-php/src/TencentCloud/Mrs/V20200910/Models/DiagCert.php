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
 * 诊断证明
 *
 * @method Advice getAdvice() 获取建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvice(Advice $Advice) 设置建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDiagnosis() 获取诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiagnosis(array $Diagnosis) 设置诊断
注意：此字段可能返回 null，表示取不到有效值。
 */
class DiagCert extends AbstractModel
{
    /**
     * @var Advice 建议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Advice;

    /**
     * @var array 诊断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Diagnosis;

    /**
     * @param Advice $Advice 建议
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Diagnosis 诊断
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
        if (array_key_exists("Advice",$param) and $param["Advice"] !== null) {
            $this->Advice = new Advice();
            $this->Advice->deserialize($param["Advice"]);
        }

        if (array_key_exists("Diagnosis",$param) and $param["Diagnosis"] !== null) {
            $this->Diagnosis = [];
            foreach ($param["Diagnosis"] as $key => $value){
                $obj = new DiagCertItem();
                $obj->deserialize($value);
                array_push($this->Diagnosis, $obj);
            }
        }
    }
}
