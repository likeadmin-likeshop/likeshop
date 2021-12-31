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
 * 患者信息
 *
 * @method string getName() 获取患者姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置患者姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSex() 获取患者性别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSex(string $Sex) 设置患者性别
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAge() 获取患者年龄
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAge(string $Age) 设置患者年龄
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhone() 获取患者手机号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhone(string $Phone) 设置患者手机号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddress() 获取患者地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddress(string $Address) 设置患者地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdCard() 获取患者身份证
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdCard(string $IdCard) 设置患者身份证
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHealthCardNo() 获取健康卡号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthCardNo(string $HealthCardNo) 设置健康卡号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSocialSecurityCardNo() 获取社保卡号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSocialSecurityCardNo(string $SocialSecurityCardNo) 设置社保卡号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBirthday() 获取出生日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBirthday(string $Birthday) 设置出生日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEthnicity() 获取民族
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEthnicity(string $Ethnicity) 设置民族
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMarried() 获取婚姻状况
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMarried(string $Married) 设置婚姻状况
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProfession() 获取职业
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProfession(string $Profession) 设置职业
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEducationBackground() 获取教育程度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEducationBackground(string $EducationBackground) 设置教育程度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNationality() 获取国籍
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNationality(string $Nationality) 设置国籍
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBirthPlace() 获取籍贯
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBirthPlace(string $BirthPlace) 设置籍贯
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMedicalInsuranceType() 获取医保类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMedicalInsuranceType(string $MedicalInsuranceType) 设置医保类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class PatientInfo extends AbstractModel
{
    /**
     * @var string 患者姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 患者性别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sex;

    /**
     * @var string 患者年龄
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Age;

    /**
     * @var string 患者手机号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Phone;

    /**
     * @var string 患者地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Address;

    /**
     * @var string 患者身份证
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdCard;

    /**
     * @var string 健康卡号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthCardNo;

    /**
     * @var string 社保卡号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SocialSecurityCardNo;

    /**
     * @var string 出生日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Birthday;

    /**
     * @var string 民族
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ethnicity;

    /**
     * @var string 婚姻状况
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Married;

    /**
     * @var string 职业
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Profession;

    /**
     * @var string 教育程度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EducationBackground;

    /**
     * @var string 国籍
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nationality;

    /**
     * @var string 籍贯
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BirthPlace;

    /**
     * @var string 医保类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MedicalInsuranceType;

    /**
     * @param string $Name 患者姓名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Sex 患者性别
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Age 患者年龄
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Phone 患者手机号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Address 患者地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdCard 患者身份证
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HealthCardNo 健康卡号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SocialSecurityCardNo 社保卡号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Birthday 出生日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ethnicity 民族
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Married 婚姻状况
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Profession 职业
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EducationBackground 教育程度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Nationality 国籍
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BirthPlace 籍贯
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MedicalInsuranceType 医保类型
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("IdCard",$param) and $param["IdCard"] !== null) {
            $this->IdCard = $param["IdCard"];
        }

        if (array_key_exists("HealthCardNo",$param) and $param["HealthCardNo"] !== null) {
            $this->HealthCardNo = $param["HealthCardNo"];
        }

        if (array_key_exists("SocialSecurityCardNo",$param) and $param["SocialSecurityCardNo"] !== null) {
            $this->SocialSecurityCardNo = $param["SocialSecurityCardNo"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("Ethnicity",$param) and $param["Ethnicity"] !== null) {
            $this->Ethnicity = $param["Ethnicity"];
        }

        if (array_key_exists("Married",$param) and $param["Married"] !== null) {
            $this->Married = $param["Married"];
        }

        if (array_key_exists("Profession",$param) and $param["Profession"] !== null) {
            $this->Profession = $param["Profession"];
        }

        if (array_key_exists("EducationBackground",$param) and $param["EducationBackground"] !== null) {
            $this->EducationBackground = $param["EducationBackground"];
        }

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("BirthPlace",$param) and $param["BirthPlace"] !== null) {
            $this->BirthPlace = $param["BirthPlace"];
        }

        if (array_key_exists("MedicalInsuranceType",$param) and $param["MedicalInsuranceType"] !== null) {
            $this->MedicalInsuranceType = $param["MedicalInsuranceType"];
        }
    }
}
