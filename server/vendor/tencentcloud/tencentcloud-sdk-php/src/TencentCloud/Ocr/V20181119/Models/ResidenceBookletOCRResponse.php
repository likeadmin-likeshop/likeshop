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
 * ResidenceBookletOCR返回参数结构体
 *
 * @method string getHouseholdNumber() 获取户号
 * @method void setHouseholdNumber(string $HouseholdNumber) 设置户号
 * @method string getName() 获取姓名
 * @method void setName(string $Name) 设置姓名
 * @method string getSex() 获取性别
 * @method void setSex(string $Sex) 设置性别
 * @method string getBirthPlace() 获取出生地
 * @method void setBirthPlace(string $BirthPlace) 设置出生地
 * @method string getNation() 获取民族
 * @method void setNation(string $Nation) 设置民族
 * @method string getNativePlace() 获取籍贯
 * @method void setNativePlace(string $NativePlace) 设置籍贯
 * @method string getBirthDate() 获取出生日期
 * @method void setBirthDate(string $BirthDate) 设置出生日期
 * @method string getIdCardNumber() 获取公民身份证件编号
 * @method void setIdCardNumber(string $IdCardNumber) 设置公民身份证件编号
 * @method string getEducationDegree() 获取文化程度
 * @method void setEducationDegree(string $EducationDegree) 设置文化程度
 * @method string getServicePlace() 获取服务处所
 * @method void setServicePlace(string $ServicePlace) 设置服务处所
 * @method string getHousehold() 获取户别
 * @method void setHousehold(string $Household) 设置户别
 * @method string getAddress() 获取住址
 * @method void setAddress(string $Address) 设置住址
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ResidenceBookletOCRResponse extends AbstractModel
{
    /**
     * @var string 户号
     */
    public $HouseholdNumber;

    /**
     * @var string 姓名
     */
    public $Name;

    /**
     * @var string 性别
     */
    public $Sex;

    /**
     * @var string 出生地
     */
    public $BirthPlace;

    /**
     * @var string 民族
     */
    public $Nation;

    /**
     * @var string 籍贯
     */
    public $NativePlace;

    /**
     * @var string 出生日期
     */
    public $BirthDate;

    /**
     * @var string 公民身份证件编号
     */
    public $IdCardNumber;

    /**
     * @var string 文化程度
     */
    public $EducationDegree;

    /**
     * @var string 服务处所
     */
    public $ServicePlace;

    /**
     * @var string 户别
     */
    public $Household;

    /**
     * @var string 住址
     */
    public $Address;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $HouseholdNumber 户号
     * @param string $Name 姓名
     * @param string $Sex 性别
     * @param string $BirthPlace 出生地
     * @param string $Nation 民族
     * @param string $NativePlace 籍贯
     * @param string $BirthDate 出生日期
     * @param string $IdCardNumber 公民身份证件编号
     * @param string $EducationDegree 文化程度
     * @param string $ServicePlace 服务处所
     * @param string $Household 户别
     * @param string $Address 住址
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("HouseholdNumber",$param) and $param["HouseholdNumber"] !== null) {
            $this->HouseholdNumber = $param["HouseholdNumber"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("BirthPlace",$param) and $param["BirthPlace"] !== null) {
            $this->BirthPlace = $param["BirthPlace"];
        }

        if (array_key_exists("Nation",$param) and $param["Nation"] !== null) {
            $this->Nation = $param["Nation"];
        }

        if (array_key_exists("NativePlace",$param) and $param["NativePlace"] !== null) {
            $this->NativePlace = $param["NativePlace"];
        }

        if (array_key_exists("BirthDate",$param) and $param["BirthDate"] !== null) {
            $this->BirthDate = $param["BirthDate"];
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
        }

        if (array_key_exists("EducationDegree",$param) and $param["EducationDegree"] !== null) {
            $this->EducationDegree = $param["EducationDegree"];
        }

        if (array_key_exists("ServicePlace",$param) and $param["ServicePlace"] !== null) {
            $this->ServicePlace = $param["ServicePlace"];
        }

        if (array_key_exists("Household",$param) and $param["Household"] !== null) {
            $this->Household = $param["Household"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
