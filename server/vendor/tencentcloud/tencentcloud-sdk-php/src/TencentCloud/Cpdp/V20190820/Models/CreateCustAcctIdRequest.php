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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCustAcctId请求参数结构体
 *
 * @method string getFunctionFlag() 获取STRING(2)，功能标志（1: 开户; 3: 销户）
 * @method void setFunctionFlag(string $FunctionFlag) 设置STRING(2)，功能标志（1: 开户; 3: 销户）
 * @method string getFundSummaryAcctNo() 获取STRING(50)，资金汇总账号（即收单资金归集入账的账号）
 * @method void setFundSummaryAcctNo(string $FundSummaryAcctNo) 设置STRING(50)，资金汇总账号（即收单资金归集入账的账号）
 * @method string getTranNetMemberCode() 获取STRING(32)，交易网会员代码（平台端的用户ID，需要保证唯一性，可数字字母混合，如HY_120）
 * @method void setTranNetMemberCode(string $TranNetMemberCode) 设置STRING(32)，交易网会员代码（平台端的用户ID，需要保证唯一性，可数字字母混合，如HY_120）
 * @method string getMemberProperty() 获取STRING(10)，会员属性（00-普通子账户(默认); SH-商户子账户）
 * @method void setMemberProperty(string $MemberProperty) 设置STRING(10)，会员属性（00-普通子账户(默认); SH-商户子账户）
 * @method string getMobile() 获取STRING(30)，手机号码
 * @method void setMobile(string $Mobile) 设置STRING(30)，手机号码
 * @method string getMrchCode() 获取String(22)，商户号（签约客户号）
 * @method void setMrchCode(string $MrchCode) 设置String(22)，商户号（签约客户号）
 * @method boolean getSelfBusiness() 获取String(2)，是否为自营业务（0位非自营，1为自营）
 * @method void setSelfBusiness(boolean $SelfBusiness) 设置String(2)，是否为自营业务（0位非自营，1为自营）
 * @method string getContactName() 获取String(64)，联系人
 * @method void setContactName(string $ContactName) 设置String(64)，联系人
 * @method string getSubAcctName() 获取String(64)，子账户名称
 * @method void setSubAcctName(string $SubAcctName) 设置String(64)，子账户名称
 * @method string getSubAcctShortName() 获取String(64)，子账户简称
 * @method void setSubAcctShortName(string $SubAcctShortName) 设置String(64)，子账户简称
 * @method integer getSubAcctType() 获取String(4)，子账户类型（0: 个人子账户; 1: 企业子账户）
 * @method void setSubAcctType(integer $SubAcctType) 设置String(4)，子账户类型（0: 个人子账户; 1: 企业子账户）
 * @method string getUserNickname() 获取STRING(150)，用户昵称
 * @method void setUserNickname(string $UserNickname) 设置STRING(150)，用户昵称
 * @method string getEmail() 获取STRING(150)，邮箱
 * @method void setEmail(string $Email) 设置STRING(150)，邮箱
 * @method string getReservedMsg() 获取STRING(1027)，保留域
 * @method void setReservedMsg(string $ReservedMsg) 设置STRING(1027)，保留域
 * @method string getProfile() 获取STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
 * @method void setProfile(string $Profile) 设置STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
 */
class CreateCustAcctIdRequest extends AbstractModel
{
    /**
     * @var string STRING(2)，功能标志（1: 开户; 3: 销户）
     */
    public $FunctionFlag;

    /**
     * @var string STRING(50)，资金汇总账号（即收单资金归集入账的账号）
     */
    public $FundSummaryAcctNo;

    /**
     * @var string STRING(32)，交易网会员代码（平台端的用户ID，需要保证唯一性，可数字字母混合，如HY_120）
     */
    public $TranNetMemberCode;

    /**
     * @var string STRING(10)，会员属性（00-普通子账户(默认); SH-商户子账户）
     */
    public $MemberProperty;

    /**
     * @var string STRING(30)，手机号码
     */
    public $Mobile;

    /**
     * @var string String(22)，商户号（签约客户号）
     */
    public $MrchCode;

    /**
     * @var boolean String(2)，是否为自营业务（0位非自营，1为自营）
     */
    public $SelfBusiness;

    /**
     * @var string String(64)，联系人
     */
    public $ContactName;

    /**
     * @var string String(64)，子账户名称
     */
    public $SubAcctName;

    /**
     * @var string String(64)，子账户简称
     */
    public $SubAcctShortName;

    /**
     * @var integer String(4)，子账户类型（0: 个人子账户; 1: 企业子账户）
     */
    public $SubAcctType;

    /**
     * @var string STRING(150)，用户昵称
     */
    public $UserNickname;

    /**
     * @var string STRING(150)，邮箱
     */
    public $Email;

    /**
     * @var string STRING(1027)，保留域
     */
    public $ReservedMsg;

    /**
     * @var string STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
     */
    public $Profile;

    /**
     * @param string $FunctionFlag STRING(2)，功能标志（1: 开户; 3: 销户）
     * @param string $FundSummaryAcctNo STRING(50)，资金汇总账号（即收单资金归集入账的账号）
     * @param string $TranNetMemberCode STRING(32)，交易网会员代码（平台端的用户ID，需要保证唯一性，可数字字母混合，如HY_120）
     * @param string $MemberProperty STRING(10)，会员属性（00-普通子账户(默认); SH-商户子账户）
     * @param string $Mobile STRING(30)，手机号码
     * @param string $MrchCode String(22)，商户号（签约客户号）
     * @param boolean $SelfBusiness String(2)，是否为自营业务（0位非自营，1为自营）
     * @param string $ContactName String(64)，联系人
     * @param string $SubAcctName String(64)，子账户名称
     * @param string $SubAcctShortName String(64)，子账户简称
     * @param integer $SubAcctType String(4)，子账户类型（0: 个人子账户; 1: 企业子账户）
     * @param string $UserNickname STRING(150)，用户昵称
     * @param string $Email STRING(150)，邮箱
     * @param string $ReservedMsg STRING(1027)，保留域
     * @param string $Profile STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
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
        if (array_key_exists("FunctionFlag",$param) and $param["FunctionFlag"] !== null) {
            $this->FunctionFlag = $param["FunctionFlag"];
        }

        if (array_key_exists("FundSummaryAcctNo",$param) and $param["FundSummaryAcctNo"] !== null) {
            $this->FundSummaryAcctNo = $param["FundSummaryAcctNo"];
        }

        if (array_key_exists("TranNetMemberCode",$param) and $param["TranNetMemberCode"] !== null) {
            $this->TranNetMemberCode = $param["TranNetMemberCode"];
        }

        if (array_key_exists("MemberProperty",$param) and $param["MemberProperty"] !== null) {
            $this->MemberProperty = $param["MemberProperty"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("MrchCode",$param) and $param["MrchCode"] !== null) {
            $this->MrchCode = $param["MrchCode"];
        }

        if (array_key_exists("SelfBusiness",$param) and $param["SelfBusiness"] !== null) {
            $this->SelfBusiness = $param["SelfBusiness"];
        }

        if (array_key_exists("ContactName",$param) and $param["ContactName"] !== null) {
            $this->ContactName = $param["ContactName"];
        }

        if (array_key_exists("SubAcctName",$param) and $param["SubAcctName"] !== null) {
            $this->SubAcctName = $param["SubAcctName"];
        }

        if (array_key_exists("SubAcctShortName",$param) and $param["SubAcctShortName"] !== null) {
            $this->SubAcctShortName = $param["SubAcctShortName"];
        }

        if (array_key_exists("SubAcctType",$param) and $param["SubAcctType"] !== null) {
            $this->SubAcctType = $param["SubAcctType"];
        }

        if (array_key_exists("UserNickname",$param) and $param["UserNickname"] !== null) {
            $this->UserNickname = $param["UserNickname"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("ReservedMsg",$param) and $param["ReservedMsg"] !== null) {
            $this->ReservedMsg = $param["ReservedMsg"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}
