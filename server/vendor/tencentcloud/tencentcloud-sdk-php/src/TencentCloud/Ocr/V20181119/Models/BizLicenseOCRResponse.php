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
 * BizLicenseOCR返回参数结构体
 *
 * @method string getRegNum() 获取统一社会信用代码（三合一之前为注册号）
 * @method void setRegNum(string $RegNum) 设置统一社会信用代码（三合一之前为注册号）
 * @method string getName() 获取公司名称
 * @method void setName(string $Name) 设置公司名称
 * @method string getCapital() 获取注册资本
 * @method void setCapital(string $Capital) 设置注册资本
 * @method string getPerson() 获取法定代表人
 * @method void setPerson(string $Person) 设置法定代表人
 * @method string getAddress() 获取地址
 * @method void setAddress(string $Address) 设置地址
 * @method string getBusiness() 获取经营范围
 * @method void setBusiness(string $Business) 设置经营范围
 * @method string getType() 获取主体类型
 * @method void setType(string $Type) 设置主体类型
 * @method string getPeriod() 获取营业期限
 * @method void setPeriod(string $Period) 设置营业期限
 * @method string getComposingForm() 获取组成形式
 * @method void setComposingForm(string $ComposingForm) 设置组成形式
 * @method string getSetDate() 获取成立日期
 * @method void setSetDate(string $SetDate) 设置成立日期
 * @method array getRecognizeWarnCode() 获取Code 告警码列表和释义：
-20001 非营业执照
注：告警码可以同时存在多个
 * @method void setRecognizeWarnCode(array $RecognizeWarnCode) 设置Code 告警码列表和释义：
-20001 非营业执照
注：告警码可以同时存在多个
 * @method array getRecognizeWarnMsg() 获取告警码说明：
OCR_WARNING_TPYE_NOT_MATCH 非营业执照
注：告警信息可以同时存在多个
 * @method void setRecognizeWarnMsg(array $RecognizeWarnMsg) 设置告警码说明：
OCR_WARNING_TPYE_NOT_MATCH 非营业执照
注：告警信息可以同时存在多个
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class BizLicenseOCRResponse extends AbstractModel
{
    /**
     * @var string 统一社会信用代码（三合一之前为注册号）
     */
    public $RegNum;

    /**
     * @var string 公司名称
     */
    public $Name;

    /**
     * @var string 注册资本
     */
    public $Capital;

    /**
     * @var string 法定代表人
     */
    public $Person;

    /**
     * @var string 地址
     */
    public $Address;

    /**
     * @var string 经营范围
     */
    public $Business;

    /**
     * @var string 主体类型
     */
    public $Type;

    /**
     * @var string 营业期限
     */
    public $Period;

    /**
     * @var string 组成形式
     */
    public $ComposingForm;

    /**
     * @var string 成立日期
     */
    public $SetDate;

    /**
     * @var array Code 告警码列表和释义：
-20001 非营业执照
注：告警码可以同时存在多个
     */
    public $RecognizeWarnCode;

    /**
     * @var array 告警码说明：
OCR_WARNING_TPYE_NOT_MATCH 非营业执照
注：告警信息可以同时存在多个
     */
    public $RecognizeWarnMsg;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $RegNum 统一社会信用代码（三合一之前为注册号）
     * @param string $Name 公司名称
     * @param string $Capital 注册资本
     * @param string $Person 法定代表人
     * @param string $Address 地址
     * @param string $Business 经营范围
     * @param string $Type 主体类型
     * @param string $Period 营业期限
     * @param string $ComposingForm 组成形式
     * @param string $SetDate 成立日期
     * @param array $RecognizeWarnCode Code 告警码列表和释义：
-20001 非营业执照
注：告警码可以同时存在多个
     * @param array $RecognizeWarnMsg 告警码说明：
OCR_WARNING_TPYE_NOT_MATCH 非营业执照
注：告警信息可以同时存在多个
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
        if (array_key_exists("RegNum",$param) and $param["RegNum"] !== null) {
            $this->RegNum = $param["RegNum"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Capital",$param) and $param["Capital"] !== null) {
            $this->Capital = $param["Capital"];
        }

        if (array_key_exists("Person",$param) and $param["Person"] !== null) {
            $this->Person = $param["Person"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("ComposingForm",$param) and $param["ComposingForm"] !== null) {
            $this->ComposingForm = $param["ComposingForm"];
        }

        if (array_key_exists("SetDate",$param) and $param["SetDate"] !== null) {
            $this->SetDate = $param["SetDate"];
        }

        if (array_key_exists("RecognizeWarnCode",$param) and $param["RecognizeWarnCode"] !== null) {
            $this->RecognizeWarnCode = $param["RecognizeWarnCode"];
        }

        if (array_key_exists("RecognizeWarnMsg",$param) and $param["RecognizeWarnMsg"] !== null) {
            $this->RecognizeWarnMsg = $param["RecognizeWarnMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
