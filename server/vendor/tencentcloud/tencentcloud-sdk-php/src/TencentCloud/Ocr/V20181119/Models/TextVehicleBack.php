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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 行驶证副页正面的识别结果
 *
 * @method string getPlateNo() 获取号牌号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlateNo(string $PlateNo) 设置号牌号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileNo() 获取档案编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileNo(string $FileNo) 设置档案编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAllowNum() 获取核定人数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowNum(string $AllowNum) 设置核定人数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTotalMass() 获取总质量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalMass(string $TotalMass) 设置总质量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCurbWeight() 获取整备质量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurbWeight(string $CurbWeight) 设置整备质量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLoadQuality() 获取核定载质量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadQuality(string $LoadQuality) 设置核定载质量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalSize() 获取外廓尺寸
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalSize(string $ExternalSize) 设置外廓尺寸
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMarks() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMarks(string $Marks) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecord() 获取检验记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecord(string $Record) 设置检验记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTotalQuasiMass() 获取准牵引总质量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalQuasiMass(string $TotalQuasiMass) 设置准牵引总质量
注意：此字段可能返回 null，表示取不到有效值。
 */
class TextVehicleBack extends AbstractModel
{
    /**
     * @var string 号牌号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlateNo;

    /**
     * @var string 档案编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileNo;

    /**
     * @var string 核定人数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowNum;

    /**
     * @var string 总质量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalMass;

    /**
     * @var string 整备质量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurbWeight;

    /**
     * @var string 核定载质量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadQuality;

    /**
     * @var string 外廓尺寸
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalSize;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Marks;

    /**
     * @var string 检验记录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Record;

    /**
     * @var string 准牵引总质量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalQuasiMass;

    /**
     * @param string $PlateNo 号牌号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileNo 档案编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AllowNum 核定人数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TotalMass 总质量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CurbWeight 整备质量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LoadQuality 核定载质量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalSize 外廓尺寸
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Marks 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Record 检验记录
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TotalQuasiMass 准牵引总质量
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
        if (array_key_exists("PlateNo",$param) and $param["PlateNo"] !== null) {
            $this->PlateNo = $param["PlateNo"];
        }

        if (array_key_exists("FileNo",$param) and $param["FileNo"] !== null) {
            $this->FileNo = $param["FileNo"];
        }

        if (array_key_exists("AllowNum",$param) and $param["AllowNum"] !== null) {
            $this->AllowNum = $param["AllowNum"];
        }

        if (array_key_exists("TotalMass",$param) and $param["TotalMass"] !== null) {
            $this->TotalMass = $param["TotalMass"];
        }

        if (array_key_exists("CurbWeight",$param) and $param["CurbWeight"] !== null) {
            $this->CurbWeight = $param["CurbWeight"];
        }

        if (array_key_exists("LoadQuality",$param) and $param["LoadQuality"] !== null) {
            $this->LoadQuality = $param["LoadQuality"];
        }

        if (array_key_exists("ExternalSize",$param) and $param["ExternalSize"] !== null) {
            $this->ExternalSize = $param["ExternalSize"];
        }

        if (array_key_exists("Marks",$param) and $param["Marks"] !== null) {
            $this->Marks = $param["Marks"];
        }

        if (array_key_exists("Record",$param) and $param["Record"] !== null) {
            $this->Record = $param["Record"];
        }

        if (array_key_exists("TotalQuasiMass",$param) and $param["TotalQuasiMass"] !== null) {
            $this->TotalQuasiMass = $param["TotalQuasiMass"];
        }
    }
}
