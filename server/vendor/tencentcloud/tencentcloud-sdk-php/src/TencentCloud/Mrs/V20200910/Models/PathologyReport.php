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
 * 病理报告
 *
 * @method Part getCancerPart() 获取癌症部位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCancerPart(Part $CancerPart) 设置癌症部位
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCancerSize() 获取癌症部位大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCancerSize(array $CancerSize) 设置癌症部位大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescText() 获取描述文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescText(string $DescText) 设置描述文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method HistologyLevel getHistologyLevel() 获取组织学等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHistologyLevel(HistologyLevel $HistologyLevel) 设置组织学等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method HistologyType getHistologyType() 获取组织学类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHistologyType(HistologyType $HistologyType) 设置组织学类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIHC() 获取IHC信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIHC(array $IHC) 设置IHC信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getInfiltrationDepth() 获取浸润深度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInfiltrationDepth(BlockInfo $InfiltrationDepth) 设置浸润深度
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInvasive() 获取肿瘤扩散
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvasive(array $Invasive) 设置肿瘤扩散
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLymphNodes() 获取淋巴结
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLymphNodes(array $LymphNodes) 设置淋巴结
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getPTNM() 获取PTNM信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPTNM(BlockInfo $PTNM) 设置PTNM信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getPathologicalReportType() 获取病理报告类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPathologicalReportType(BlockInfo $PathologicalReportType) 设置病理报告类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReportText() 获取报告原文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReportText(string $ReportText) 设置报告原文
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getSampleType() 获取标本类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSampleType(BlockInfo $SampleType) 设置标本类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSummaryText() 获取结论文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSummaryText(string $SummaryText) 设置结论文本
注意：此字段可能返回 null，表示取不到有效值。
 */
class PathologyReport extends AbstractModel
{
    /**
     * @var Part 癌症部位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CancerPart;

    /**
     * @var array 癌症部位大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CancerSize;

    /**
     * @var string 描述文本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DescText;

    /**
     * @var HistologyLevel 组织学等级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HistologyLevel;

    /**
     * @var HistologyType 组织学类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HistologyType;

    /**
     * @var array IHC信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IHC;

    /**
     * @var BlockInfo 浸润深度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InfiltrationDepth;

    /**
     * @var array 肿瘤扩散
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Invasive;

    /**
     * @var array 淋巴结
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LymphNodes;

    /**
     * @var BlockInfo PTNM信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PTNM;

    /**
     * @var BlockInfo 病理报告类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PathologicalReportType;

    /**
     * @var string 报告原文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReportText;

    /**
     * @var BlockInfo 标本类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SampleType;

    /**
     * @var string 结论文本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SummaryText;

    /**
     * @param Part $CancerPart 癌症部位
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CancerSize 癌症部位大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DescText 描述文本
注意：此字段可能返回 null，表示取不到有效值。
     * @param HistologyLevel $HistologyLevel 组织学等级
注意：此字段可能返回 null，表示取不到有效值。
     * @param HistologyType $HistologyType 组织学类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IHC IHC信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $InfiltrationDepth 浸润深度
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Invasive 肿瘤扩散
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LymphNodes 淋巴结
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $PTNM PTNM信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $PathologicalReportType 病理报告类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReportText 报告原文
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $SampleType 标本类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SummaryText 结论文本
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
        if (array_key_exists("CancerPart",$param) and $param["CancerPart"] !== null) {
            $this->CancerPart = new Part();
            $this->CancerPart->deserialize($param["CancerPart"]);
        }

        if (array_key_exists("CancerSize",$param) and $param["CancerSize"] !== null) {
            $this->CancerSize = [];
            foreach ($param["CancerSize"] as $key => $value){
                $obj = new Size();
                $obj->deserialize($value);
                array_push($this->CancerSize, $obj);
            }
        }

        if (array_key_exists("DescText",$param) and $param["DescText"] !== null) {
            $this->DescText = $param["DescText"];
        }

        if (array_key_exists("HistologyLevel",$param) and $param["HistologyLevel"] !== null) {
            $this->HistologyLevel = new HistologyLevel();
            $this->HistologyLevel->deserialize($param["HistologyLevel"]);
        }

        if (array_key_exists("HistologyType",$param) and $param["HistologyType"] !== null) {
            $this->HistologyType = new HistologyType();
            $this->HistologyType->deserialize($param["HistologyType"]);
        }

        if (array_key_exists("IHC",$param) and $param["IHC"] !== null) {
            $this->IHC = [];
            foreach ($param["IHC"] as $key => $value){
                $obj = new IHCInfo();
                $obj->deserialize($value);
                array_push($this->IHC, $obj);
            }
        }

        if (array_key_exists("InfiltrationDepth",$param) and $param["InfiltrationDepth"] !== null) {
            $this->InfiltrationDepth = new BlockInfo();
            $this->InfiltrationDepth->deserialize($param["InfiltrationDepth"]);
        }

        if (array_key_exists("Invasive",$param) and $param["Invasive"] !== null) {
            $this->Invasive = [];
            foreach ($param["Invasive"] as $key => $value){
                $obj = new Invas();
                $obj->deserialize($value);
                array_push($this->Invasive, $obj);
            }
        }

        if (array_key_exists("LymphNodes",$param) and $param["LymphNodes"] !== null) {
            $this->LymphNodes = [];
            foreach ($param["LymphNodes"] as $key => $value){
                $obj = new Lymph();
                $obj->deserialize($value);
                array_push($this->LymphNodes, $obj);
            }
        }

        if (array_key_exists("PTNM",$param) and $param["PTNM"] !== null) {
            $this->PTNM = new BlockInfo();
            $this->PTNM->deserialize($param["PTNM"]);
        }

        if (array_key_exists("PathologicalReportType",$param) and $param["PathologicalReportType"] !== null) {
            $this->PathologicalReportType = new BlockInfo();
            $this->PathologicalReportType->deserialize($param["PathologicalReportType"]);
        }

        if (array_key_exists("ReportText",$param) and $param["ReportText"] !== null) {
            $this->ReportText = $param["ReportText"];
        }

        if (array_key_exists("SampleType",$param) and $param["SampleType"] !== null) {
            $this->SampleType = new BlockInfo();
            $this->SampleType->deserialize($param["SampleType"]);
        }

        if (array_key_exists("SummaryText",$param) and $param["SummaryText"] !== null) {
            $this->SummaryText = $param["SummaryText"];
        }
    }
}
