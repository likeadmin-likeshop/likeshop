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
 * PassportOCR返回参数结构体
 *
 * @method string getCountry() 获取国家码
 * @method void setCountry(string $Country) 设置国家码
 * @method string getPassportNo() 获取护照号
 * @method void setPassportNo(string $PassportNo) 设置护照号
 * @method string getSex() 获取性别
 * @method void setSex(string $Sex) 设置性别
 * @method string getNationality() 获取国籍
 * @method void setNationality(string $Nationality) 设置国籍
 * @method string getBirthDate() 获取出生日期
 * @method void setBirthDate(string $BirthDate) 设置出生日期
 * @method string getBirthPlace() 获取出生地点
 * @method void setBirthPlace(string $BirthPlace) 设置出生地点
 * @method string getIssueDate() 获取签发日期
 * @method void setIssueDate(string $IssueDate) 设置签发日期
 * @method string getIssuePlace() 获取签发地点
 * @method void setIssuePlace(string $IssuePlace) 设置签发地点
 * @method string getExpiryDate() 获取有效期
 * @method void setExpiryDate(string $ExpiryDate) 设置有效期
 * @method string getSignature() 获取持证人签名
 * @method void setSignature(string $Signature) 设置持证人签名
 * @method string getCodeSet() 获取最下方第一行 MRZ Code 序列
 * @method void setCodeSet(string $CodeSet) 设置最下方第一行 MRZ Code 序列
 * @method string getCodeCrc() 获取最下方第二行 MRZ Code 序列
 * @method void setCodeCrc(string $CodeCrc) 设置最下方第二行 MRZ Code 序列
 * @method string getName() 获取姓名
 * @method void setName(string $Name) 设置姓名
 * @method string getFamilyName() 获取姓
 * @method void setFamilyName(string $FamilyName) 设置姓
 * @method string getFirstName() 获取名
 * @method void setFirstName(string $FirstName) 设置名
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class PassportOCRResponse extends AbstractModel
{
    /**
     * @var string 国家码
     */
    public $Country;

    /**
     * @var string 护照号
     */
    public $PassportNo;

    /**
     * @var string 性别
     */
    public $Sex;

    /**
     * @var string 国籍
     */
    public $Nationality;

    /**
     * @var string 出生日期
     */
    public $BirthDate;

    /**
     * @var string 出生地点
     */
    public $BirthPlace;

    /**
     * @var string 签发日期
     */
    public $IssueDate;

    /**
     * @var string 签发地点
     */
    public $IssuePlace;

    /**
     * @var string 有效期
     */
    public $ExpiryDate;

    /**
     * @var string 持证人签名
     */
    public $Signature;

    /**
     * @var string 最下方第一行 MRZ Code 序列
     */
    public $CodeSet;

    /**
     * @var string 最下方第二行 MRZ Code 序列
     */
    public $CodeCrc;

    /**
     * @var string 姓名
     */
    public $Name;

    /**
     * @var string 姓
     */
    public $FamilyName;

    /**
     * @var string 名
     */
    public $FirstName;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Country 国家码
     * @param string $PassportNo 护照号
     * @param string $Sex 性别
     * @param string $Nationality 国籍
     * @param string $BirthDate 出生日期
     * @param string $BirthPlace 出生地点
     * @param string $IssueDate 签发日期
     * @param string $IssuePlace 签发地点
     * @param string $ExpiryDate 有效期
     * @param string $Signature 持证人签名
     * @param string $CodeSet 最下方第一行 MRZ Code 序列
     * @param string $CodeCrc 最下方第二行 MRZ Code 序列
     * @param string $Name 姓名
     * @param string $FamilyName 姓
     * @param string $FirstName 名
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
        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("PassportNo",$param) and $param["PassportNo"] !== null) {
            $this->PassportNo = $param["PassportNo"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("BirthDate",$param) and $param["BirthDate"] !== null) {
            $this->BirthDate = $param["BirthDate"];
        }

        if (array_key_exists("BirthPlace",$param) and $param["BirthPlace"] !== null) {
            $this->BirthPlace = $param["BirthPlace"];
        }

        if (array_key_exists("IssueDate",$param) and $param["IssueDate"] !== null) {
            $this->IssueDate = $param["IssueDate"];
        }

        if (array_key_exists("IssuePlace",$param) and $param["IssuePlace"] !== null) {
            $this->IssuePlace = $param["IssuePlace"];
        }

        if (array_key_exists("ExpiryDate",$param) and $param["ExpiryDate"] !== null) {
            $this->ExpiryDate = $param["ExpiryDate"];
        }

        if (array_key_exists("Signature",$param) and $param["Signature"] !== null) {
            $this->Signature = $param["Signature"];
        }

        if (array_key_exists("CodeSet",$param) and $param["CodeSet"] !== null) {
            $this->CodeSet = $param["CodeSet"];
        }

        if (array_key_exists("CodeCrc",$param) and $param["CodeCrc"] !== null) {
            $this->CodeCrc = $param["CodeCrc"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("FamilyName",$param) and $param["FamilyName"] !== null) {
            $this->FamilyName = $param["FamilyName"];
        }

        if (array_key_exists("FirstName",$param) and $param["FirstName"] !== null) {
            $this->FirstName = $param["FirstName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
