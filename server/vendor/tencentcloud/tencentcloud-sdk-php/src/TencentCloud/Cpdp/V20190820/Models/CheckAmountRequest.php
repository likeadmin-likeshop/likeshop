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
 * CheckAmount请求参数结构体
 *
 * @method string getMrchCode() 获取String(22)，商户号（签约客户号）
 * @method void setMrchCode(string $MrchCode) 设置String(22)，商户号（签约客户号）
 * @method string getTranNetMemberCode() 获取STRING(32)，交易网会员代码（若需要把一个待绑定账户关联到两个会员名下，此字段可上送两个会员的交易网代码，并且须用“|::|”(右侧)进行分隔）
 * @method void setTranNetMemberCode(string $TranNetMemberCode) 设置STRING(32)，交易网会员代码（若需要把一个待绑定账户关联到两个会员名下，此字段可上送两个会员的交易网代码，并且须用“|::|”(右侧)进行分隔）
 * @method string getTakeCashAcctNo() 获取STRING(50)，会员的待绑定账户的账号（即 BindRelateAcctSmallAmount接口中的“会员的待绑定账户的账号”）
 * @method void setTakeCashAcctNo(string $TakeCashAcctNo) 设置STRING(50)，会员的待绑定账户的账号（即 BindRelateAcctSmallAmount接口中的“会员的待绑定账户的账号”）
 * @method string getAuthAmt() 获取STRING(20)，鉴权验证金额（即 BindRelateAcctSmallAmount接口中的“会员的待绑定账户收到的验证金额。原小额转账鉴权方式为来账鉴权的情况下此字段须赋值为0.00）
 * @method void setAuthAmt(string $AuthAmt) 设置STRING(20)，鉴权验证金额（即 BindRelateAcctSmallAmount接口中的“会员的待绑定账户收到的验证金额。原小额转账鉴权方式为来账鉴权的情况下此字段须赋值为0.00）
 * @method string getCcy() 获取STRING(3)，币种（默认为RMB）
 * @method void setCcy(string $Ccy) 设置STRING(3)，币种（默认为RMB）
 * @method string getReservedMsg() 获取STRING(1027)，原小额转账方式（1: 往账鉴权，此为默认值; 2: 来账鉴权）
 * @method void setReservedMsg(string $ReservedMsg) 设置STRING(1027)，原小额转账方式（1: 往账鉴权，此为默认值; 2: 来账鉴权）
 * @method string getProfile() 获取STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
 * @method void setProfile(string $Profile) 设置STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
 */
class CheckAmountRequest extends AbstractModel
{
    /**
     * @var string String(22)，商户号（签约客户号）
     */
    public $MrchCode;

    /**
     * @var string STRING(32)，交易网会员代码（若需要把一个待绑定账户关联到两个会员名下，此字段可上送两个会员的交易网代码，并且须用“|::|”(右侧)进行分隔）
     */
    public $TranNetMemberCode;

    /**
     * @var string STRING(50)，会员的待绑定账户的账号（即 BindRelateAcctSmallAmount接口中的“会员的待绑定账户的账号”）
     */
    public $TakeCashAcctNo;

    /**
     * @var string STRING(20)，鉴权验证金额（即 BindRelateAcctSmallAmount接口中的“会员的待绑定账户收到的验证金额。原小额转账鉴权方式为来账鉴权的情况下此字段须赋值为0.00）
     */
    public $AuthAmt;

    /**
     * @var string STRING(3)，币种（默认为RMB）
     */
    public $Ccy;

    /**
     * @var string STRING(1027)，原小额转账方式（1: 往账鉴权，此为默认值; 2: 来账鉴权）
     */
    public $ReservedMsg;

    /**
     * @var string STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
     */
    public $Profile;

    /**
     * @param string $MrchCode String(22)，商户号（签约客户号）
     * @param string $TranNetMemberCode STRING(32)，交易网会员代码（若需要把一个待绑定账户关联到两个会员名下，此字段可上送两个会员的交易网代码，并且须用“|::|”(右侧)进行分隔）
     * @param string $TakeCashAcctNo STRING(50)，会员的待绑定账户的账号（即 BindRelateAcctSmallAmount接口中的“会员的待绑定账户的账号”）
     * @param string $AuthAmt STRING(20)，鉴权验证金额（即 BindRelateAcctSmallAmount接口中的“会员的待绑定账户收到的验证金额。原小额转账鉴权方式为来账鉴权的情况下此字段须赋值为0.00）
     * @param string $Ccy STRING(3)，币种（默认为RMB）
     * @param string $ReservedMsg STRING(1027)，原小额转账方式（1: 往账鉴权，此为默认值; 2: 来账鉴权）
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
        if (array_key_exists("MrchCode",$param) and $param["MrchCode"] !== null) {
            $this->MrchCode = $param["MrchCode"];
        }

        if (array_key_exists("TranNetMemberCode",$param) and $param["TranNetMemberCode"] !== null) {
            $this->TranNetMemberCode = $param["TranNetMemberCode"];
        }

        if (array_key_exists("TakeCashAcctNo",$param) and $param["TakeCashAcctNo"] !== null) {
            $this->TakeCashAcctNo = $param["TakeCashAcctNo"];
        }

        if (array_key_exists("AuthAmt",$param) and $param["AuthAmt"] !== null) {
            $this->AuthAmt = $param["AuthAmt"];
        }

        if (array_key_exists("Ccy",$param) and $param["Ccy"] !== null) {
            $this->Ccy = $param["Ccy"];
        }

        if (array_key_exists("ReservedMsg",$param) and $param["ReservedMsg"] !== null) {
            $this->ReservedMsg = $param["ReservedMsg"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}
