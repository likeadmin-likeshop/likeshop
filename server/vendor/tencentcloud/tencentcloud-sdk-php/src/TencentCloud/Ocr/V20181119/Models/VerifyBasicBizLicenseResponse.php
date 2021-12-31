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
 * VerifyBasicBizLicense返回参数结构体
 *
 * @method integer getErrorCode() 获取状态码，成功时返回0
 * @method void setErrorCode(integer $ErrorCode) 设置状态码，成功时返回0
 * @method string getCreditCode() 获取统一社会信用代码
 * @method void setCreditCode(string $CreditCode) 设置统一社会信用代码
 * @method string getOpfrom() 获取经营期限自（YYYY-MM-DD）
 * @method void setOpfrom(string $Opfrom) 设置经营期限自（YYYY-MM-DD）
 * @method string getOpto() 获取经营期限至（YYYY-MM-DD）
 * @method void setOpto(string $Opto) 设置经营期限至（YYYY-MM-DD）
 * @method string getFrname() 获取法人姓名
 * @method void setFrname(string $Frname) 设置法人姓名
 * @method string getEntstatus() 获取经营状态，包括：成立、筹建、存续、在营、开业、在册、正常经营、开业登记中、登记成立、撤销、撤销登记、非正常户、告解、个体暂时吊销、个体转企业、吊销（未注销）、拟注销、已注销、（待）迁入、（待）迁出、停业、歇业、清算等。
 * @method void setEntstatus(string $Entstatus) 设置经营状态，包括：成立、筹建、存续、在营、开业、在册、正常经营、开业登记中、登记成立、撤销、撤销登记、非正常户、告解、个体暂时吊销、个体转企业、吊销（未注销）、拟注销、已注销、（待）迁入、（待）迁出、停业、歇业、清算等。
 * @method string getZsopscope() 获取经营业务范围
 * @method void setZsopscope(string $Zsopscope) 设置经营业务范围
 * @method string getReason() 获取查询的状态信息
 * @method void setReason(string $Reason) 设置查询的状态信息
 * @method string getOriregno() 获取原注册号
 * @method void setOriregno(string $Oriregno) 设置原注册号
 * @method string getVerifyRegno() 获取要核验的工商注册号
 * @method void setVerifyRegno(string $VerifyRegno) 设置要核验的工商注册号
 * @method string getRegno() 获取工商注册号
 * @method void setRegno(string $Regno) 设置工商注册号
 * @method string getVerifyEntname() 获取要核验的企业名称
 * @method void setVerifyEntname(string $VerifyEntname) 设置要核验的企业名称
 * @method string getEntname() 获取企业名称
 * @method void setEntname(string $Entname) 设置企业名称
 * @method string getVerifyDom() 获取要核验的住址
 * @method void setVerifyDom(string $VerifyDom) 设置要核验的住址
 * @method string getDom() 获取住址
 * @method void setDom(string $Dom) 设置住址
 * @method BizLicenseVerifyResult getRegNumResult() 获取验证结果
 * @method void setRegNumResult(BizLicenseVerifyResult $RegNumResult) 设置验证结果
 * @method string getRegCapital() 获取注册资本（单位：万元）,只有输入参数regCapital为1的时候才输出
 * @method void setRegCapital(string $RegCapital) 设置注册资本（单位：万元）,只有输入参数regCapital为1的时候才输出
 * @method string getEstablishTime() 获取成立/注册日期，只有输入参数EstablishTime为true时展示，默认为空
 * @method void setEstablishTime(string $EstablishTime) 设置成立/注册日期，只有输入参数EstablishTime为true时展示，默认为空
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class VerifyBasicBizLicenseResponse extends AbstractModel
{
    /**
     * @var integer 状态码，成功时返回0
     */
    public $ErrorCode;

    /**
     * @var string 统一社会信用代码
     */
    public $CreditCode;

    /**
     * @var string 经营期限自（YYYY-MM-DD）
     */
    public $Opfrom;

    /**
     * @var string 经营期限至（YYYY-MM-DD）
     */
    public $Opto;

    /**
     * @var string 法人姓名
     */
    public $Frname;

    /**
     * @var string 经营状态，包括：成立、筹建、存续、在营、开业、在册、正常经营、开业登记中、登记成立、撤销、撤销登记、非正常户、告解、个体暂时吊销、个体转企业、吊销（未注销）、拟注销、已注销、（待）迁入、（待）迁出、停业、歇业、清算等。
     */
    public $Entstatus;

    /**
     * @var string 经营业务范围
     */
    public $Zsopscope;

    /**
     * @var string 查询的状态信息
     */
    public $Reason;

    /**
     * @var string 原注册号
     */
    public $Oriregno;

    /**
     * @var string 要核验的工商注册号
     */
    public $VerifyRegno;

    /**
     * @var string 工商注册号
     */
    public $Regno;

    /**
     * @var string 要核验的企业名称
     */
    public $VerifyEntname;

    /**
     * @var string 企业名称
     */
    public $Entname;

    /**
     * @var string 要核验的住址
     */
    public $VerifyDom;

    /**
     * @var string 住址
     */
    public $Dom;

    /**
     * @var BizLicenseVerifyResult 验证结果
     */
    public $RegNumResult;

    /**
     * @var string 注册资本（单位：万元）,只有输入参数regCapital为1的时候才输出
     */
    public $RegCapital;

    /**
     * @var string 成立/注册日期，只有输入参数EstablishTime为true时展示，默认为空
     */
    public $EstablishTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ErrorCode 状态码，成功时返回0
     * @param string $CreditCode 统一社会信用代码
     * @param string $Opfrom 经营期限自（YYYY-MM-DD）
     * @param string $Opto 经营期限至（YYYY-MM-DD）
     * @param string $Frname 法人姓名
     * @param string $Entstatus 经营状态，包括：成立、筹建、存续、在营、开业、在册、正常经营、开业登记中、登记成立、撤销、撤销登记、非正常户、告解、个体暂时吊销、个体转企业、吊销（未注销）、拟注销、已注销、（待）迁入、（待）迁出、停业、歇业、清算等。
     * @param string $Zsopscope 经营业务范围
     * @param string $Reason 查询的状态信息
     * @param string $Oriregno 原注册号
     * @param string $VerifyRegno 要核验的工商注册号
     * @param string $Regno 工商注册号
     * @param string $VerifyEntname 要核验的企业名称
     * @param string $Entname 企业名称
     * @param string $VerifyDom 要核验的住址
     * @param string $Dom 住址
     * @param BizLicenseVerifyResult $RegNumResult 验证结果
     * @param string $RegCapital 注册资本（单位：万元）,只有输入参数regCapital为1的时候才输出
     * @param string $EstablishTime 成立/注册日期，只有输入参数EstablishTime为true时展示，默认为空
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
        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("CreditCode",$param) and $param["CreditCode"] !== null) {
            $this->CreditCode = $param["CreditCode"];
        }

        if (array_key_exists("Opfrom",$param) and $param["Opfrom"] !== null) {
            $this->Opfrom = $param["Opfrom"];
        }

        if (array_key_exists("Opto",$param) and $param["Opto"] !== null) {
            $this->Opto = $param["Opto"];
        }

        if (array_key_exists("Frname",$param) and $param["Frname"] !== null) {
            $this->Frname = $param["Frname"];
        }

        if (array_key_exists("Entstatus",$param) and $param["Entstatus"] !== null) {
            $this->Entstatus = $param["Entstatus"];
        }

        if (array_key_exists("Zsopscope",$param) and $param["Zsopscope"] !== null) {
            $this->Zsopscope = $param["Zsopscope"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Oriregno",$param) and $param["Oriregno"] !== null) {
            $this->Oriregno = $param["Oriregno"];
        }

        if (array_key_exists("VerifyRegno",$param) and $param["VerifyRegno"] !== null) {
            $this->VerifyRegno = $param["VerifyRegno"];
        }

        if (array_key_exists("Regno",$param) and $param["Regno"] !== null) {
            $this->Regno = $param["Regno"];
        }

        if (array_key_exists("VerifyEntname",$param) and $param["VerifyEntname"] !== null) {
            $this->VerifyEntname = $param["VerifyEntname"];
        }

        if (array_key_exists("Entname",$param) and $param["Entname"] !== null) {
            $this->Entname = $param["Entname"];
        }

        if (array_key_exists("VerifyDom",$param) and $param["VerifyDom"] !== null) {
            $this->VerifyDom = $param["VerifyDom"];
        }

        if (array_key_exists("Dom",$param) and $param["Dom"] !== null) {
            $this->Dom = $param["Dom"];
        }

        if (array_key_exists("RegNumResult",$param) and $param["RegNumResult"] !== null) {
            $this->RegNumResult = new BizLicenseVerifyResult();
            $this->RegNumResult->deserialize($param["RegNumResult"]);
        }

        if (array_key_exists("RegCapital",$param) and $param["RegCapital"] !== null) {
            $this->RegCapital = $param["RegCapital"];
        }

        if (array_key_exists("EstablishTime",$param) and $param["EstablishTime"] !== null) {
            $this->EstablishTime = $param["EstablishTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
