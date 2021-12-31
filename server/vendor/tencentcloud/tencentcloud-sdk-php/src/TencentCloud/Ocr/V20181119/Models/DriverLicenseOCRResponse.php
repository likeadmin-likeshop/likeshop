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
 * DriverLicenseOCR返回参数结构体
 *
 * @method string getName() 获取姓名
 * @method void setName(string $Name) 设置姓名
 * @method string getSex() 获取性别
 * @method void setSex(string $Sex) 设置性别
 * @method string getNationality() 获取国籍
 * @method void setNationality(string $Nationality) 设置国籍
 * @method string getAddress() 获取住址
 * @method void setAddress(string $Address) 设置住址
 * @method string getDateOfBirth() 获取出生日期（YYYY-MM-DD）
 * @method void setDateOfBirth(string $DateOfBirth) 设置出生日期（YYYY-MM-DD）
 * @method string getDateOfFirstIssue() 获取初次领证日期（YYYY-MM-DD）
 * @method void setDateOfFirstIssue(string $DateOfFirstIssue) 设置初次领证日期（YYYY-MM-DD）
 * @method string getClass() 获取准驾车型
 * @method void setClass(string $Class) 设置准驾车型
 * @method string getStartDate() 获取有效期开始时间（YYYY-MM-DD）
 * @method void setStartDate(string $StartDate) 设置有效期开始时间（YYYY-MM-DD）
 * @method string getEndDate() 获取有效期截止时间（YYYY-MM-DD）
 * @method void setEndDate(string $EndDate) 设置有效期截止时间（YYYY-MM-DD）
 * @method string getCardCode() 获取证号
 * @method void setCardCode(string $CardCode) 设置证号
 * @method string getArchivesCode() 获取档案编号
 * @method void setArchivesCode(string $ArchivesCode) 设置档案编号
 * @method string getRecord() 获取记录
 * @method void setRecord(string $Record) 设置记录
 * @method array getRecognizeWarnCode() 获取Code 告警码列表和释义：
-9102  复印件告警
-9103  翻拍件告警
-9106  ps告警
注：告警码可以同时存在多个
 * @method void setRecognizeWarnCode(array $RecognizeWarnCode) 设置Code 告警码列表和释义：
-9102  复印件告警
-9103  翻拍件告警
-9106  ps告警
注：告警码可以同时存在多个
 * @method array getRecognizeWarnMsg() 获取告警码说明：
WARN_DRIVER_LICENSE_COPY_CARD 复印件告警
WARN_DRIVER_LICENSE_SCREENED_CARD 翻拍件告警
WARN_DRIVER_LICENSE_PS_CARD ps告警
注：告警信息可以同时存在多个
 * @method void setRecognizeWarnMsg(array $RecognizeWarnMsg) 设置告警码说明：
WARN_DRIVER_LICENSE_COPY_CARD 复印件告警
WARN_DRIVER_LICENSE_SCREENED_CARD 翻拍件告警
WARN_DRIVER_LICENSE_PS_CARD ps告警
注：告警信息可以同时存在多个
 * @method string getIssuingAuthority() 获取发证单位
 * @method void setIssuingAuthority(string $IssuingAuthority) 设置发证单位
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DriverLicenseOCRResponse extends AbstractModel
{
    /**
     * @var string 姓名
     */
    public $Name;

    /**
     * @var string 性别
     */
    public $Sex;

    /**
     * @var string 国籍
     */
    public $Nationality;

    /**
     * @var string 住址
     */
    public $Address;

    /**
     * @var string 出生日期（YYYY-MM-DD）
     */
    public $DateOfBirth;

    /**
     * @var string 初次领证日期（YYYY-MM-DD）
     */
    public $DateOfFirstIssue;

    /**
     * @var string 准驾车型
     */
    public $Class;

    /**
     * @var string 有效期开始时间（YYYY-MM-DD）
     */
    public $StartDate;

    /**
     * @var string 有效期截止时间（YYYY-MM-DD）
     */
    public $EndDate;

    /**
     * @var string 证号
     */
    public $CardCode;

    /**
     * @var string 档案编号
     */
    public $ArchivesCode;

    /**
     * @var string 记录
     */
    public $Record;

    /**
     * @var array Code 告警码列表和释义：
-9102  复印件告警
-9103  翻拍件告警
-9106  ps告警
注：告警码可以同时存在多个
     */
    public $RecognizeWarnCode;

    /**
     * @var array 告警码说明：
WARN_DRIVER_LICENSE_COPY_CARD 复印件告警
WARN_DRIVER_LICENSE_SCREENED_CARD 翻拍件告警
WARN_DRIVER_LICENSE_PS_CARD ps告警
注：告警信息可以同时存在多个
     */
    public $RecognizeWarnMsg;

    /**
     * @var string 发证单位
     */
    public $IssuingAuthority;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name 姓名
     * @param string $Sex 性别
     * @param string $Nationality 国籍
     * @param string $Address 住址
     * @param string $DateOfBirth 出生日期（YYYY-MM-DD）
     * @param string $DateOfFirstIssue 初次领证日期（YYYY-MM-DD）
     * @param string $Class 准驾车型
     * @param string $StartDate 有效期开始时间（YYYY-MM-DD）
     * @param string $EndDate 有效期截止时间（YYYY-MM-DD）
     * @param string $CardCode 证号
     * @param string $ArchivesCode 档案编号
     * @param string $Record 记录
     * @param array $RecognizeWarnCode Code 告警码列表和释义：
-9102  复印件告警
-9103  翻拍件告警
-9106  ps告警
注：告警码可以同时存在多个
     * @param array $RecognizeWarnMsg 告警码说明：
WARN_DRIVER_LICENSE_COPY_CARD 复印件告警
WARN_DRIVER_LICENSE_SCREENED_CARD 翻拍件告警
WARN_DRIVER_LICENSE_PS_CARD ps告警
注：告警信息可以同时存在多个
     * @param string $IssuingAuthority 发证单位
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("DateOfBirth",$param) and $param["DateOfBirth"] !== null) {
            $this->DateOfBirth = $param["DateOfBirth"];
        }

        if (array_key_exists("DateOfFirstIssue",$param) and $param["DateOfFirstIssue"] !== null) {
            $this->DateOfFirstIssue = $param["DateOfFirstIssue"];
        }

        if (array_key_exists("Class",$param) and $param["Class"] !== null) {
            $this->Class = $param["Class"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("CardCode",$param) and $param["CardCode"] !== null) {
            $this->CardCode = $param["CardCode"];
        }

        if (array_key_exists("ArchivesCode",$param) and $param["ArchivesCode"] !== null) {
            $this->ArchivesCode = $param["ArchivesCode"];
        }

        if (array_key_exists("Record",$param) and $param["Record"] !== null) {
            $this->Record = $param["Record"];
        }

        if (array_key_exists("RecognizeWarnCode",$param) and $param["RecognizeWarnCode"] !== null) {
            $this->RecognizeWarnCode = $param["RecognizeWarnCode"];
        }

        if (array_key_exists("RecognizeWarnMsg",$param) and $param["RecognizeWarnMsg"] !== null) {
            $this->RecognizeWarnMsg = $param["RecognizeWarnMsg"];
        }

        if (array_key_exists("IssuingAuthority",$param) and $param["IssuingAuthority"] !== null) {
            $this->IssuingAuthority = $param["IssuingAuthority"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
