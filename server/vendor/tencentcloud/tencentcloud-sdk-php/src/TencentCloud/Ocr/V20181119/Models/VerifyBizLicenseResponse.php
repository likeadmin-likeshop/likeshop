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
 * VerifyBizLicense返回参数结构体
 *
 * @method integer getErrorCode() 获取状态码
 * @method void setErrorCode(integer $ErrorCode) 设置状态码
 * @method string getCreditCode() 获取统一社会信用代码
 * @method void setCreditCode(string $CreditCode) 设置统一社会信用代码
 * @method string getOrgCode() 获取组织机构代码
 * @method void setOrgCode(string $OrgCode) 设置组织机构代码
 * @method string getOpenFrom() 获取经营期限自（YYYY-MM-DD）
 * @method void setOpenFrom(string $OpenFrom) 设置经营期限自（YYYY-MM-DD）
 * @method string getOpenTo() 获取经营期限至（YYYY-MM-DD）
 * @method void setOpenTo(string $OpenTo) 设置经营期限至（YYYY-MM-DD）
 * @method string getFrName() 获取法人姓名
 * @method void setFrName(string $FrName) 设置法人姓名
 * @method string getEnterpriseStatus() 获取经营状态，包括：成立、筹建、存续、在营、开业、在册、正常经营、开业登记中、登记成立、撤销、撤销登记、非正常户、告解、个体暂时吊销、个体转企业、吊销（未注销）、拟注销、已注销、（待）迁入、（待）迁出、停业、歇业、清算等。
 * @method void setEnterpriseStatus(string $EnterpriseStatus) 设置经营状态，包括：成立、筹建、存续、在营、开业、在册、正常经营、开业登记中、登记成立、撤销、撤销登记、非正常户、告解、个体暂时吊销、个体转企业、吊销（未注销）、拟注销、已注销、（待）迁入、（待）迁出、停业、歇业、清算等。
 * @method string getOperateScopeAndForm() 获取经营（业务）范围及方式
 * @method void setOperateScopeAndForm(string $OperateScopeAndForm) 设置经营（业务）范围及方式
 * @method string getRegCap() 获取注册资金（单位:万元）
 * @method void setRegCap(string $RegCap) 设置注册资金（单位:万元）
 * @method string getRegCapCur() 获取注册币种
 * @method void setRegCapCur(string $RegCapCur) 设置注册币种
 * @method string getRegOrg() 获取登记机关
 * @method void setRegOrg(string $RegOrg) 设置登记机关
 * @method string getEsDate() 获取开业日期（YYYY-MM-DD）
 * @method void setEsDate(string $EsDate) 设置开业日期（YYYY-MM-DD）
 * @method string getEnterpriseType() 获取企业（机构）类型
 * @method void setEnterpriseType(string $EnterpriseType) 设置企业（机构）类型
 * @method string getCancelDate() 获取注销日期
 * @method void setCancelDate(string $CancelDate) 设置注销日期
 * @method string getRevokeDate() 获取吊销日期
 * @method void setRevokeDate(string $RevokeDate) 设置吊销日期
 * @method string getAbuItem() 获取许可经营项目
 * @method void setAbuItem(string $AbuItem) 设置许可经营项目
 * @method string getCbuItem() 获取一般经营项目
 * @method void setCbuItem(string $CbuItem) 设置一般经营项目
 * @method string getApprDate() 获取核准时间
 * @method void setApprDate(string $ApprDate) 设置核准时间
 * @method string getProvince() 获取省
 * @method void setProvince(string $Province) 设置省
 * @method string getCity() 获取地级市
 * @method void setCity(string $City) 设置地级市
 * @method string getCounty() 获取区\县
 * @method void setCounty(string $County) 设置区\县
 * @method string getAreaCode() 获取住所所在行政区划代码
 * @method void setAreaCode(string $AreaCode) 设置住所所在行政区划代码
 * @method string getIndustryPhyCode() 获取行业门类代码
 * @method void setIndustryPhyCode(string $IndustryPhyCode) 设置行业门类代码
 * @method string getIndustryPhyName() 获取行业门类名称
 * @method void setIndustryPhyName(string $IndustryPhyName) 设置行业门类名称
 * @method string getIndustryCode() 获取国民经济行业代码
 * @method void setIndustryCode(string $IndustryCode) 设置国民经济行业代码
 * @method string getIndustryName() 获取国民经济行业名称
 * @method void setIndustryName(string $IndustryName) 设置国民经济行业名称
 * @method string getOperateScope() 获取经营（业务）范围
 * @method void setOperateScope(string $OperateScope) 设置经营（业务）范围
 * @method string getVerifyRegNo() 获取要核验的工商注册号
 * @method void setVerifyRegNo(string $VerifyRegNo) 设置要核验的工商注册号
 * @method string getRegNo() 获取工商注册号
 * @method void setRegNo(string $RegNo) 设置工商注册号
 * @method string getVerifyEnterpriseName() 获取要核验的企业名称
 * @method void setVerifyEnterpriseName(string $VerifyEnterpriseName) 设置要核验的企业名称
 * @method string getEnterpriseName() 获取企业名称
 * @method void setEnterpriseName(string $EnterpriseName) 设置企业名称
 * @method string getVerifyAddress() 获取要核验的注册地址
 * @method void setVerifyAddress(string $VerifyAddress) 设置要核验的注册地址
 * @method string getAddress() 获取注册地址
 * @method void setAddress(string $Address) 设置注册地址
 * @method BizLicenseVerifyResult getRegNumResult() 获取验证结果
 * @method void setRegNumResult(BizLicenseVerifyResult $RegNumResult) 设置验证结果
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class VerifyBizLicenseResponse extends AbstractModel
{
    /**
     * @var integer 状态码
     */
    public $ErrorCode;

    /**
     * @var string 统一社会信用代码
     */
    public $CreditCode;

    /**
     * @var string 组织机构代码
     */
    public $OrgCode;

    /**
     * @var string 经营期限自（YYYY-MM-DD）
     */
    public $OpenFrom;

    /**
     * @var string 经营期限至（YYYY-MM-DD）
     */
    public $OpenTo;

    /**
     * @var string 法人姓名
     */
    public $FrName;

    /**
     * @var string 经营状态，包括：成立、筹建、存续、在营、开业、在册、正常经营、开业登记中、登记成立、撤销、撤销登记、非正常户、告解、个体暂时吊销、个体转企业、吊销（未注销）、拟注销、已注销、（待）迁入、（待）迁出、停业、歇业、清算等。
     */
    public $EnterpriseStatus;

    /**
     * @var string 经营（业务）范围及方式
     */
    public $OperateScopeAndForm;

    /**
     * @var string 注册资金（单位:万元）
     */
    public $RegCap;

    /**
     * @var string 注册币种
     */
    public $RegCapCur;

    /**
     * @var string 登记机关
     */
    public $RegOrg;

    /**
     * @var string 开业日期（YYYY-MM-DD）
     */
    public $EsDate;

    /**
     * @var string 企业（机构）类型
     */
    public $EnterpriseType;

    /**
     * @var string 注销日期
     */
    public $CancelDate;

    /**
     * @var string 吊销日期
     */
    public $RevokeDate;

    /**
     * @var string 许可经营项目
     */
    public $AbuItem;

    /**
     * @var string 一般经营项目
     */
    public $CbuItem;

    /**
     * @var string 核准时间
     */
    public $ApprDate;

    /**
     * @var string 省
     */
    public $Province;

    /**
     * @var string 地级市
     */
    public $City;

    /**
     * @var string 区\县
     */
    public $County;

    /**
     * @var string 住所所在行政区划代码
     */
    public $AreaCode;

    /**
     * @var string 行业门类代码
     */
    public $IndustryPhyCode;

    /**
     * @var string 行业门类名称
     */
    public $IndustryPhyName;

    /**
     * @var string 国民经济行业代码
     */
    public $IndustryCode;

    /**
     * @var string 国民经济行业名称
     */
    public $IndustryName;

    /**
     * @var string 经营（业务）范围
     */
    public $OperateScope;

    /**
     * @var string 要核验的工商注册号
     */
    public $VerifyRegNo;

    /**
     * @var string 工商注册号
     */
    public $RegNo;

    /**
     * @var string 要核验的企业名称
     */
    public $VerifyEnterpriseName;

    /**
     * @var string 企业名称
     */
    public $EnterpriseName;

    /**
     * @var string 要核验的注册地址
     */
    public $VerifyAddress;

    /**
     * @var string 注册地址
     */
    public $Address;

    /**
     * @var BizLicenseVerifyResult 验证结果
     */
    public $RegNumResult;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ErrorCode 状态码
     * @param string $CreditCode 统一社会信用代码
     * @param string $OrgCode 组织机构代码
     * @param string $OpenFrom 经营期限自（YYYY-MM-DD）
     * @param string $OpenTo 经营期限至（YYYY-MM-DD）
     * @param string $FrName 法人姓名
     * @param string $EnterpriseStatus 经营状态，包括：成立、筹建、存续、在营、开业、在册、正常经营、开业登记中、登记成立、撤销、撤销登记、非正常户、告解、个体暂时吊销、个体转企业、吊销（未注销）、拟注销、已注销、（待）迁入、（待）迁出、停业、歇业、清算等。
     * @param string $OperateScopeAndForm 经营（业务）范围及方式
     * @param string $RegCap 注册资金（单位:万元）
     * @param string $RegCapCur 注册币种
     * @param string $RegOrg 登记机关
     * @param string $EsDate 开业日期（YYYY-MM-DD）
     * @param string $EnterpriseType 企业（机构）类型
     * @param string $CancelDate 注销日期
     * @param string $RevokeDate 吊销日期
     * @param string $AbuItem 许可经营项目
     * @param string $CbuItem 一般经营项目
     * @param string $ApprDate 核准时间
     * @param string $Province 省
     * @param string $City 地级市
     * @param string $County 区\县
     * @param string $AreaCode 住所所在行政区划代码
     * @param string $IndustryPhyCode 行业门类代码
     * @param string $IndustryPhyName 行业门类名称
     * @param string $IndustryCode 国民经济行业代码
     * @param string $IndustryName 国民经济行业名称
     * @param string $OperateScope 经营（业务）范围
     * @param string $VerifyRegNo 要核验的工商注册号
     * @param string $RegNo 工商注册号
     * @param string $VerifyEnterpriseName 要核验的企业名称
     * @param string $EnterpriseName 企业名称
     * @param string $VerifyAddress 要核验的注册地址
     * @param string $Address 注册地址
     * @param BizLicenseVerifyResult $RegNumResult 验证结果
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

        if (array_key_exists("OrgCode",$param) and $param["OrgCode"] !== null) {
            $this->OrgCode = $param["OrgCode"];
        }

        if (array_key_exists("OpenFrom",$param) and $param["OpenFrom"] !== null) {
            $this->OpenFrom = $param["OpenFrom"];
        }

        if (array_key_exists("OpenTo",$param) and $param["OpenTo"] !== null) {
            $this->OpenTo = $param["OpenTo"];
        }

        if (array_key_exists("FrName",$param) and $param["FrName"] !== null) {
            $this->FrName = $param["FrName"];
        }

        if (array_key_exists("EnterpriseStatus",$param) and $param["EnterpriseStatus"] !== null) {
            $this->EnterpriseStatus = $param["EnterpriseStatus"];
        }

        if (array_key_exists("OperateScopeAndForm",$param) and $param["OperateScopeAndForm"] !== null) {
            $this->OperateScopeAndForm = $param["OperateScopeAndForm"];
        }

        if (array_key_exists("RegCap",$param) and $param["RegCap"] !== null) {
            $this->RegCap = $param["RegCap"];
        }

        if (array_key_exists("RegCapCur",$param) and $param["RegCapCur"] !== null) {
            $this->RegCapCur = $param["RegCapCur"];
        }

        if (array_key_exists("RegOrg",$param) and $param["RegOrg"] !== null) {
            $this->RegOrg = $param["RegOrg"];
        }

        if (array_key_exists("EsDate",$param) and $param["EsDate"] !== null) {
            $this->EsDate = $param["EsDate"];
        }

        if (array_key_exists("EnterpriseType",$param) and $param["EnterpriseType"] !== null) {
            $this->EnterpriseType = $param["EnterpriseType"];
        }

        if (array_key_exists("CancelDate",$param) and $param["CancelDate"] !== null) {
            $this->CancelDate = $param["CancelDate"];
        }

        if (array_key_exists("RevokeDate",$param) and $param["RevokeDate"] !== null) {
            $this->RevokeDate = $param["RevokeDate"];
        }

        if (array_key_exists("AbuItem",$param) and $param["AbuItem"] !== null) {
            $this->AbuItem = $param["AbuItem"];
        }

        if (array_key_exists("CbuItem",$param) and $param["CbuItem"] !== null) {
            $this->CbuItem = $param["CbuItem"];
        }

        if (array_key_exists("ApprDate",$param) and $param["ApprDate"] !== null) {
            $this->ApprDate = $param["ApprDate"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("County",$param) and $param["County"] !== null) {
            $this->County = $param["County"];
        }

        if (array_key_exists("AreaCode",$param) and $param["AreaCode"] !== null) {
            $this->AreaCode = $param["AreaCode"];
        }

        if (array_key_exists("IndustryPhyCode",$param) and $param["IndustryPhyCode"] !== null) {
            $this->IndustryPhyCode = $param["IndustryPhyCode"];
        }

        if (array_key_exists("IndustryPhyName",$param) and $param["IndustryPhyName"] !== null) {
            $this->IndustryPhyName = $param["IndustryPhyName"];
        }

        if (array_key_exists("IndustryCode",$param) and $param["IndustryCode"] !== null) {
            $this->IndustryCode = $param["IndustryCode"];
        }

        if (array_key_exists("IndustryName",$param) and $param["IndustryName"] !== null) {
            $this->IndustryName = $param["IndustryName"];
        }

        if (array_key_exists("OperateScope",$param) and $param["OperateScope"] !== null) {
            $this->OperateScope = $param["OperateScope"];
        }

        if (array_key_exists("VerifyRegNo",$param) and $param["VerifyRegNo"] !== null) {
            $this->VerifyRegNo = $param["VerifyRegNo"];
        }

        if (array_key_exists("RegNo",$param) and $param["RegNo"] !== null) {
            $this->RegNo = $param["RegNo"];
        }

        if (array_key_exists("VerifyEnterpriseName",$param) and $param["VerifyEnterpriseName"] !== null) {
            $this->VerifyEnterpriseName = $param["VerifyEnterpriseName"];
        }

        if (array_key_exists("EnterpriseName",$param) and $param["EnterpriseName"] !== null) {
            $this->EnterpriseName = $param["EnterpriseName"];
        }

        if (array_key_exists("VerifyAddress",$param) and $param["VerifyAddress"] !== null) {
            $this->VerifyAddress = $param["VerifyAddress"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("RegNumResult",$param) and $param["RegNumResult"] !== null) {
            $this->RegNumResult = new BizLicenseVerifyResult();
            $this->RegNumResult->deserialize($param["RegNumResult"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
