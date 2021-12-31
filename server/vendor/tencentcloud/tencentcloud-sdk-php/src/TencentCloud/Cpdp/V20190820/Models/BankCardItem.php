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
 * 绑卡列表
 *
 * @method string getEiconBankBranchId() 获取超级网银行号
 * @method void setEiconBankBranchId(string $EiconBankBranchId) 设置超级网银行号
 * @method string getCnapsBranchId() 获取大小额行号
 * @method void setCnapsBranchId(string $CnapsBranchId) 设置大小额行号
 * @method integer getSettleAcctType() 获取结算账户类型
1 – 本行账户
2 – 他行账户
 * @method void setSettleAcctType(integer $SettleAcctType) 设置结算账户类型
1 – 本行账户
2 – 他行账户
 * @method string getSettleAcctName() 获取结算账户户名
<敏感信息>
 * @method void setSettleAcctName(string $SettleAcctName) 设置结算账户户名
<敏感信息>
 * @method string getAcctBranchName() 获取开户行名称
 * @method void setAcctBranchName(string $AcctBranchName) 设置开户行名称
 * @method string getSettleAcctNo() 获取用于提现
<敏感信息>
 * @method void setSettleAcctNo(string $SettleAcctNo) 设置用于提现
<敏感信息>
 * @method string getSubAppId() 获取聚鑫计费SubAppId，代表子商户
 * @method void setSubAppId(string $SubAppId) 设置聚鑫计费SubAppId，代表子商户
 * @method integer getBindType() 获取验证类型
1 – 小额转账验证
2 – 短信验证
 * @method void setBindType(integer $BindType) 设置验证类型
1 – 小额转账验证
2 – 短信验证
 * @method string getMobile() 获取用于短信验证
BindType==2时必填
<敏感信息>
 * @method void setMobile(string $Mobile) 设置用于短信验证
BindType==2时必填
<敏感信息>
 * @method string getIdType() 获取证件类型
 * @method void setIdType(string $IdType) 设置证件类型
 * @method string getIdCode() 获取证件号码
<敏感信息>
 * @method void setIdCode(string $IdCode) 设置证件号码
<敏感信息>
 */
class BankCardItem extends AbstractModel
{
    /**
     * @var string 超级网银行号
     */
    public $EiconBankBranchId;

    /**
     * @var string 大小额行号
     */
    public $CnapsBranchId;

    /**
     * @var integer 结算账户类型
1 – 本行账户
2 – 他行账户
     */
    public $SettleAcctType;

    /**
     * @var string 结算账户户名
<敏感信息>
     */
    public $SettleAcctName;

    /**
     * @var string 开户行名称
     */
    public $AcctBranchName;

    /**
     * @var string 用于提现
<敏感信息>
     */
    public $SettleAcctNo;

    /**
     * @var string 聚鑫计费SubAppId，代表子商户
     */
    public $SubAppId;

    /**
     * @var integer 验证类型
1 – 小额转账验证
2 – 短信验证
     */
    public $BindType;

    /**
     * @var string 用于短信验证
BindType==2时必填
<敏感信息>
     */
    public $Mobile;

    /**
     * @var string 证件类型
     */
    public $IdType;

    /**
     * @var string 证件号码
<敏感信息>
     */
    public $IdCode;

    /**
     * @param string $EiconBankBranchId 超级网银行号
     * @param string $CnapsBranchId 大小额行号
     * @param integer $SettleAcctType 结算账户类型
1 – 本行账户
2 – 他行账户
     * @param string $SettleAcctName 结算账户户名
<敏感信息>
     * @param string $AcctBranchName 开户行名称
     * @param string $SettleAcctNo 用于提现
<敏感信息>
     * @param string $SubAppId 聚鑫计费SubAppId，代表子商户
     * @param integer $BindType 验证类型
1 – 小额转账验证
2 – 短信验证
     * @param string $Mobile 用于短信验证
BindType==2时必填
<敏感信息>
     * @param string $IdType 证件类型
     * @param string $IdCode 证件号码
<敏感信息>
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
        if (array_key_exists("EiconBankBranchId",$param) and $param["EiconBankBranchId"] !== null) {
            $this->EiconBankBranchId = $param["EiconBankBranchId"];
        }

        if (array_key_exists("CnapsBranchId",$param) and $param["CnapsBranchId"] !== null) {
            $this->CnapsBranchId = $param["CnapsBranchId"];
        }

        if (array_key_exists("SettleAcctType",$param) and $param["SettleAcctType"] !== null) {
            $this->SettleAcctType = $param["SettleAcctType"];
        }

        if (array_key_exists("SettleAcctName",$param) and $param["SettleAcctName"] !== null) {
            $this->SettleAcctName = $param["SettleAcctName"];
        }

        if (array_key_exists("AcctBranchName",$param) and $param["AcctBranchName"] !== null) {
            $this->AcctBranchName = $param["AcctBranchName"];
        }

        if (array_key_exists("SettleAcctNo",$param) and $param["SettleAcctNo"] !== null) {
            $this->SettleAcctNo = $param["SettleAcctNo"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("BindType",$param) and $param["BindType"] !== null) {
            $this->BindType = $param["BindType"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("IdType",$param) and $param["IdType"] !== null) {
            $this->IdType = $param["IdType"];
        }

        if (array_key_exists("IdCode",$param) and $param["IdCode"] !== null) {
            $this->IdCode = $param["IdCode"];
        }
    }
}
