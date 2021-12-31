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
 * QuerySingleTransactionStatus请求参数结构体
 *
 * @method string getMrchCode() 获取String(22)，商户号（签约客户号）
 * @method void setMrchCode(string $MrchCode) 设置String(22)，商户号（签约客户号）
 * @method string getFunctionFlag() 获取STRING(2)，功能标志（2: 会员间交易; 3: 提现; 4: 充值）
 * @method void setFunctionFlag(string $FunctionFlag) 设置STRING(2)，功能标志（2: 会员间交易; 3: 提现; 4: 充值）
 * @method string getTranNetSeqNo() 获取STRING(52)，交易网流水号（提现，充值或会员交易请求时的CnsmrSeqNo值）
 * @method void setTranNetSeqNo(string $TranNetSeqNo) 设置STRING(52)，交易网流水号（提现，充值或会员交易请求时的CnsmrSeqNo值）
 * @method string getSubAcctNo() 获取STRING(50)，见证子帐户的帐号（未启用）
 * @method void setSubAcctNo(string $SubAcctNo) 设置STRING(50)，见证子帐户的帐号（未启用）
 * @method string getTranDate() 获取STRING(8)，交易日期（未启用）
 * @method void setTranDate(string $TranDate) 设置STRING(8)，交易日期（未启用）
 * @method string getReservedMsg() 获取STRING(1027)，保留域
 * @method void setReservedMsg(string $ReservedMsg) 设置STRING(1027)，保留域
 * @method string getProfile() 获取STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
 * @method void setProfile(string $Profile) 设置STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
 */
class QuerySingleTransactionStatusRequest extends AbstractModel
{
    /**
     * @var string String(22)，商户号（签约客户号）
     */
    public $MrchCode;

    /**
     * @var string STRING(2)，功能标志（2: 会员间交易; 3: 提现; 4: 充值）
     */
    public $FunctionFlag;

    /**
     * @var string STRING(52)，交易网流水号（提现，充值或会员交易请求时的CnsmrSeqNo值）
     */
    public $TranNetSeqNo;

    /**
     * @var string STRING(50)，见证子帐户的帐号（未启用）
     */
    public $SubAcctNo;

    /**
     * @var string STRING(8)，交易日期（未启用）
     */
    public $TranDate;

    /**
     * @var string STRING(1027)，保留域
     */
    public $ReservedMsg;

    /**
     * @var string STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
     */
    public $Profile;

    /**
     * @param string $MrchCode String(22)，商户号（签约客户号）
     * @param string $FunctionFlag STRING(2)，功能标志（2: 会员间交易; 3: 提现; 4: 充值）
     * @param string $TranNetSeqNo STRING(52)，交易网流水号（提现，充值或会员交易请求时的CnsmrSeqNo值）
     * @param string $SubAcctNo STRING(50)，见证子帐户的帐号（未启用）
     * @param string $TranDate STRING(8)，交易日期（未启用）
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
        if (array_key_exists("MrchCode",$param) and $param["MrchCode"] !== null) {
            $this->MrchCode = $param["MrchCode"];
        }

        if (array_key_exists("FunctionFlag",$param) and $param["FunctionFlag"] !== null) {
            $this->FunctionFlag = $param["FunctionFlag"];
        }

        if (array_key_exists("TranNetSeqNo",$param) and $param["TranNetSeqNo"] !== null) {
            $this->TranNetSeqNo = $param["TranNetSeqNo"];
        }

        if (array_key_exists("SubAcctNo",$param) and $param["SubAcctNo"] !== null) {
            $this->SubAcctNo = $param["SubAcctNo"];
        }

        if (array_key_exists("TranDate",$param) and $param["TranDate"] !== null) {
            $this->TranDate = $param["TranDate"];
        }

        if (array_key_exists("ReservedMsg",$param) and $param["ReservedMsg"] !== null) {
            $this->ReservedMsg = $param["ReservedMsg"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}
