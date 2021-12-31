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
 * 行驶证主页正面的识别结果
 *
 * @method string getPlateNo() 获取号牌号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlateNo(string $PlateNo) 设置号牌号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVehicleType() 获取车辆类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVehicleType(string $VehicleType) 设置车辆类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwner() 获取所有人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwner(string $Owner) 设置所有人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddress() 获取住址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddress(string $Address) 设置住址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUseCharacter() 获取使用性质
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUseCharacter(string $UseCharacter) 设置使用性质
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModel() 获取品牌型号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModel(string $Model) 设置品牌型号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVin() 获取车辆识别代号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVin(string $Vin) 设置车辆识别代号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineNo() 获取发动机号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineNo(string $EngineNo) 设置发动机号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegisterDate() 获取注册日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegisterDate(string $RegisterDate) 设置注册日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIssueDate() 获取发证日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIssueDate(string $IssueDate) 设置发证日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSeal() 获取印章
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeal(string $Seal) 设置印章
注意：此字段可能返回 null，表示取不到有效值。
 */
class TextVehicleFront extends AbstractModel
{
    /**
     * @var string 号牌号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlateNo;

    /**
     * @var string 车辆类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VehicleType;

    /**
     * @var string 所有人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Owner;

    /**
     * @var string 住址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Address;

    /**
     * @var string 使用性质
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UseCharacter;

    /**
     * @var string 品牌型号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Model;

    /**
     * @var string 车辆识别代号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vin;

    /**
     * @var string 发动机号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineNo;

    /**
     * @var string 注册日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegisterDate;

    /**
     * @var string 发证日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IssueDate;

    /**
     * @var string 印章
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Seal;

    /**
     * @param string $PlateNo 号牌号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VehicleType 车辆类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Owner 所有人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Address 住址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UseCharacter 使用性质
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Model 品牌型号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Vin 车辆识别代号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineNo 发动机号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegisterDate 注册日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IssueDate 发证日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Seal 印章
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

        if (array_key_exists("VehicleType",$param) and $param["VehicleType"] !== null) {
            $this->VehicleType = $param["VehicleType"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("UseCharacter",$param) and $param["UseCharacter"] !== null) {
            $this->UseCharacter = $param["UseCharacter"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Vin",$param) and $param["Vin"] !== null) {
            $this->Vin = $param["Vin"];
        }

        if (array_key_exists("EngineNo",$param) and $param["EngineNo"] !== null) {
            $this->EngineNo = $param["EngineNo"];
        }

        if (array_key_exists("RegisterDate",$param) and $param["RegisterDate"] !== null) {
            $this->RegisterDate = $param["RegisterDate"];
        }

        if (array_key_exists("IssueDate",$param) and $param["IssueDate"] !== null) {
            $this->IssueDate = $param["IssueDate"];
        }

        if (array_key_exists("Seal",$param) and $param["Seal"] !== null) {
            $this->Seal = $param["Seal"];
        }
    }
}
