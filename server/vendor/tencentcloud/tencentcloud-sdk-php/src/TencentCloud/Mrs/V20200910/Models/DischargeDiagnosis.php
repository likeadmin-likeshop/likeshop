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
 * 出入院诊断
 *
 * @method integer getTableIndex() 获取表格位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableIndex(integer $TableIndex) 设置表格位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getOutDiagnosis() 获取出院诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutDiagnosis(BlockInfo $OutDiagnosis) 设置出院诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getDiseaseCode() 获取疾病编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiseaseCode(BlockInfo $DiseaseCode) 设置疾病编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getInStatus() 获取入院情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInStatus(BlockInfo $InStatus) 设置入院情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getOutStatus() 获取出院情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutStatus(BlockInfo $OutStatus) 设置出院情况
注意：此字段可能返回 null，表示取不到有效值。
 */
class DischargeDiagnosis extends AbstractModel
{
    /**
     * @var integer 表格位置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableIndex;

    /**
     * @var BlockInfo 出院诊断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutDiagnosis;

    /**
     * @var BlockInfo 疾病编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiseaseCode;

    /**
     * @var BlockInfo 入院情况
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InStatus;

    /**
     * @var BlockInfo 出院情况
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutStatus;

    /**
     * @param integer $TableIndex 表格位置
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $OutDiagnosis 出院诊断
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $DiseaseCode 疾病编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $InStatus 入院情况
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $OutStatus 出院情况
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
        if (array_key_exists("TableIndex",$param) and $param["TableIndex"] !== null) {
            $this->TableIndex = $param["TableIndex"];
        }

        if (array_key_exists("OutDiagnosis",$param) and $param["OutDiagnosis"] !== null) {
            $this->OutDiagnosis = new BlockInfo();
            $this->OutDiagnosis->deserialize($param["OutDiagnosis"]);
        }

        if (array_key_exists("DiseaseCode",$param) and $param["DiseaseCode"] !== null) {
            $this->DiseaseCode = new BlockInfo();
            $this->DiseaseCode->deserialize($param["DiseaseCode"]);
        }

        if (array_key_exists("InStatus",$param) and $param["InStatus"] !== null) {
            $this->InStatus = new BlockInfo();
            $this->InStatus->deserialize($param["InStatus"]);
        }

        if (array_key_exists("OutStatus",$param) and $param["OutStatus"] !== null) {
            $this->OutStatus = new BlockInfo();
            $this->OutStatus->deserialize($param["OutStatus"]);
        }
    }
}
