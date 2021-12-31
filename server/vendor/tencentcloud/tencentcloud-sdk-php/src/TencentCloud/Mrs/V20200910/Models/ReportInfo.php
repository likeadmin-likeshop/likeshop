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
 * 报告基本信息
 *
 * @method string getHospital() 获取医院名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHospital(string $Hospital) 设置医院名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDepartmentName() 获取科室名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDepartmentName(string $DepartmentName) 设置科室名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBillingTime() 获取申请时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillingTime(string $BillingTime) 设置申请时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReportTime() 获取报告时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReportTime(string $ReportTime) 设置报告时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInspectTime() 获取检查时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInspectTime(string $InspectTime) 设置检查时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCheckNum() 获取检查号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckNum(string $CheckNum) 设置检查号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageNum() 获取影像号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageNum(string $ImageNum) 设置影像号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRadiationNum() 获取放射号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRadiationNum(string $RadiationNum) 设置放射号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTestNum() 获取检验号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTestNum(string $TestNum) 设置检验号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutpatientNum() 获取门诊号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutpatientNum(string $OutpatientNum) 设置门诊号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPathologyNum() 获取病理号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPathologyNum(string $PathologyNum) 设置病理号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInHospitalNum() 获取住院号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInHospitalNum(string $InHospitalNum) 设置住院号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSampleNum() 获取样本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSampleNum(string $SampleNum) 设置样本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSampleType() 获取标本种类
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSampleType(string $SampleType) 设置标本种类
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMedicalRecordNum() 获取病历号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMedicalRecordNum(string $MedicalRecordNum) 设置病历号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReportName() 获取报告名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReportName(string $ReportName) 设置报告名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUltraNum() 获取超声号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUltraNum(string $UltraNum) 设置超声号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiagnose() 获取临床诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiagnose(string $Diagnose) 设置临床诊断
注意：此字段可能返回 null，表示取不到有效值。
 */
class ReportInfo extends AbstractModel
{
    /**
     * @var string 医院名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Hospital;

    /**
     * @var string 科室名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DepartmentName;

    /**
     * @var string 申请时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillingTime;

    /**
     * @var string 报告时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReportTime;

    /**
     * @var string 检查时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InspectTime;

    /**
     * @var string 检查号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckNum;

    /**
     * @var string 影像号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageNum;

    /**
     * @var string 放射号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RadiationNum;

    /**
     * @var string 检验号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TestNum;

    /**
     * @var string 门诊号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutpatientNum;

    /**
     * @var string 病理号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PathologyNum;

    /**
     * @var string 住院号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InHospitalNum;

    /**
     * @var string 样本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SampleNum;

    /**
     * @var string 标本种类
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SampleType;

    /**
     * @var string 病历号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MedicalRecordNum;

    /**
     * @var string 报告名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReportName;

    /**
     * @var string 超声号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UltraNum;

    /**
     * @var string 临床诊断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Diagnose;

    /**
     * @param string $Hospital 医院名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DepartmentName 科室名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BillingTime 申请时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReportTime 报告时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InspectTime 检查时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CheckNum 检查号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageNum 影像号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RadiationNum 放射号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TestNum 检验号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutpatientNum 门诊号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PathologyNum 病理号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InHospitalNum 住院号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SampleNum 样本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SampleType 标本种类
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MedicalRecordNum 病历号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReportName 报告名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UltraNum 超声号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Diagnose 临床诊断
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
        if (array_key_exists("Hospital",$param) and $param["Hospital"] !== null) {
            $this->Hospital = $param["Hospital"];
        }

        if (array_key_exists("DepartmentName",$param) and $param["DepartmentName"] !== null) {
            $this->DepartmentName = $param["DepartmentName"];
        }

        if (array_key_exists("BillingTime",$param) and $param["BillingTime"] !== null) {
            $this->BillingTime = $param["BillingTime"];
        }

        if (array_key_exists("ReportTime",$param) and $param["ReportTime"] !== null) {
            $this->ReportTime = $param["ReportTime"];
        }

        if (array_key_exists("InspectTime",$param) and $param["InspectTime"] !== null) {
            $this->InspectTime = $param["InspectTime"];
        }

        if (array_key_exists("CheckNum",$param) and $param["CheckNum"] !== null) {
            $this->CheckNum = $param["CheckNum"];
        }

        if (array_key_exists("ImageNum",$param) and $param["ImageNum"] !== null) {
            $this->ImageNum = $param["ImageNum"];
        }

        if (array_key_exists("RadiationNum",$param) and $param["RadiationNum"] !== null) {
            $this->RadiationNum = $param["RadiationNum"];
        }

        if (array_key_exists("TestNum",$param) and $param["TestNum"] !== null) {
            $this->TestNum = $param["TestNum"];
        }

        if (array_key_exists("OutpatientNum",$param) and $param["OutpatientNum"] !== null) {
            $this->OutpatientNum = $param["OutpatientNum"];
        }

        if (array_key_exists("PathologyNum",$param) and $param["PathologyNum"] !== null) {
            $this->PathologyNum = $param["PathologyNum"];
        }

        if (array_key_exists("InHospitalNum",$param) and $param["InHospitalNum"] !== null) {
            $this->InHospitalNum = $param["InHospitalNum"];
        }

        if (array_key_exists("SampleNum",$param) and $param["SampleNum"] !== null) {
            $this->SampleNum = $param["SampleNum"];
        }

        if (array_key_exists("SampleType",$param) and $param["SampleType"] !== null) {
            $this->SampleType = $param["SampleType"];
        }

        if (array_key_exists("MedicalRecordNum",$param) and $param["MedicalRecordNum"] !== null) {
            $this->MedicalRecordNum = $param["MedicalRecordNum"];
        }

        if (array_key_exists("ReportName",$param) and $param["ReportName"] !== null) {
            $this->ReportName = $param["ReportName"];
        }

        if (array_key_exists("UltraNum",$param) and $param["UltraNum"] !== null) {
            $this->UltraNum = $param["UltraNum"];
        }

        if (array_key_exists("Diagnose",$param) and $param["Diagnose"] !== null) {
            $this->Diagnose = $param["Diagnose"];
        }
    }
}
