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
 * RegisterBillSupportWithdraw请求参数结构体
 *
 * @method string getTranNetMemberCode() 获取STRING(32)，交易网会员代码
 * @method void setTranNetMemberCode(string $TranNetMemberCode) 设置STRING(32)，交易网会员代码
 * @method string getOrderNo() 获取STRING(50)，订单号
 * @method void setOrderNo(string $OrderNo) 设置STRING(50)，订单号
 * @method string getSuspendAmt() 获取STRING(20)，挂账金额（包含交易费用）
 * @method void setSuspendAmt(string $SuspendAmt) 设置STRING(20)，挂账金额（包含交易费用）
 * @method string getTranFee() 获取STRING(20)，交易费用（暂未使用，默认传0.0）
 * @method void setTranFee(string $TranFee) 设置STRING(20)，交易费用（暂未使用，默认传0.0）
 * @method string getMrchCode() 获取String(22)，商户号（签约客户号）
 * @method void setMrchCode(string $MrchCode) 设置String(22)，商户号（签约客户号）
 * @method string getRemark() 获取STRING(300)，备注
 * @method void setRemark(string $Remark) 设置STRING(300)，备注
 * @method string getReservedMsgOne() 获取STRING(300)，保留域1
 * @method void setReservedMsgOne(string $ReservedMsgOne) 设置STRING(300)，保留域1
 * @method string getReservedMsgTwo() 获取STRING(300)，保留域2
 * @method void setReservedMsgTwo(string $ReservedMsgTwo) 设置STRING(300)，保留域2
 * @method string getReservedMsgThree() 获取STRING(300)，保留域3
 * @method void setReservedMsgThree(string $ReservedMsgThree) 设置STRING(300)，保留域3
 * @method string getProfile() 获取STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
 * @method void setProfile(string $Profile) 设置STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
 */
class RegisterBillSupportWithdrawRequest extends AbstractModel
{
    /**
     * @var string STRING(32)，交易网会员代码
     */
    public $TranNetMemberCode;

    /**
     * @var string STRING(50)，订单号
     */
    public $OrderNo;

    /**
     * @var string STRING(20)，挂账金额（包含交易费用）
     */
    public $SuspendAmt;

    /**
     * @var string STRING(20)，交易费用（暂未使用，默认传0.0）
     */
    public $TranFee;

    /**
     * @var string String(22)，商户号（签约客户号）
     */
    public $MrchCode;

    /**
     * @var string STRING(300)，备注
     */
    public $Remark;

    /**
     * @var string STRING(300)，保留域1
     */
    public $ReservedMsgOne;

    /**
     * @var string STRING(300)，保留域2
     */
    public $ReservedMsgTwo;

    /**
     * @var string STRING(300)，保留域3
     */
    public $ReservedMsgThree;

    /**
     * @var string STRING(12)，接入环境，默认接入沙箱环境。接入正式环境填"prod"
     */
    public $Profile;

    /**
     * @param string $TranNetMemberCode STRING(32)，交易网会员代码
     * @param string $OrderNo STRING(50)，订单号
     * @param string $SuspendAmt STRING(20)，挂账金额（包含交易费用）
     * @param string $TranFee STRING(20)，交易费用（暂未使用，默认传0.0）
     * @param string $MrchCode String(22)，商户号（签约客户号）
     * @param string $Remark STRING(300)，备注
     * @param string $ReservedMsgOne STRING(300)，保留域1
     * @param string $ReservedMsgTwo STRING(300)，保留域2
     * @param string $ReservedMsgThree STRING(300)，保留域3
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
        if (array_key_exists("TranNetMemberCode",$param) and $param["TranNetMemberCode"] !== null) {
            $this->TranNetMemberCode = $param["TranNetMemberCode"];
        }

        if (array_key_exists("OrderNo",$param) and $param["OrderNo"] !== null) {
            $this->OrderNo = $param["OrderNo"];
        }

        if (array_key_exists("SuspendAmt",$param) and $param["SuspendAmt"] !== null) {
            $this->SuspendAmt = $param["SuspendAmt"];
        }

        if (array_key_exists("TranFee",$param) and $param["TranFee"] !== null) {
            $this->TranFee = $param["TranFee"];
        }

        if (array_key_exists("MrchCode",$param) and $param["MrchCode"] !== null) {
            $this->MrchCode = $param["MrchCode"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ReservedMsgOne",$param) and $param["ReservedMsgOne"] !== null) {
            $this->ReservedMsgOne = $param["ReservedMsgOne"];
        }

        if (array_key_exists("ReservedMsgTwo",$param) and $param["ReservedMsgTwo"] !== null) {
            $this->ReservedMsgTwo = $param["ReservedMsgTwo"];
        }

        if (array_key_exists("ReservedMsgThree",$param) and $param["ReservedMsgThree"] !== null) {
            $this->ReservedMsgThree = $param["ReservedMsgThree"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}
