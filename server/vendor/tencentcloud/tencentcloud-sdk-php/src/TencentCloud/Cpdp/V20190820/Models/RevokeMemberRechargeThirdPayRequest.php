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
 * RevokeMemberRechargeThirdPay请求参数结构体
 *
 * @method string getOldFillFrontSeqNo() 获取STRING(52)，原充值的前置流水号
 * @method void setOldFillFrontSeqNo(string $OldFillFrontSeqNo) 设置STRING(52)，原充值的前置流水号
 * @method string getOldFillPayChannelType() 获取STRING(20)，原充值的支付渠道类型
 * @method void setOldFillPayChannelType(string $OldFillPayChannelType) 设置STRING(20)，原充值的支付渠道类型
 * @method string getOldPayChannelTranSeqNo() 获取STRING(52)，原充值的支付渠道交易流水号
 * @method void setOldPayChannelTranSeqNo(string $OldPayChannelTranSeqNo) 设置STRING(52)，原充值的支付渠道交易流水号
 * @method string getOldFillEjzbOrderNo() 获取STRING(52)，原充值的电商见证宝订单号
 * @method void setOldFillEjzbOrderNo(string $OldFillEjzbOrderNo) 设置STRING(52)，原充值的电商见证宝订单号
 * @method string getApplyCancelMemberAmt() 获取STRING(20)，申请撤销的会员金额
 * @method void setApplyCancelMemberAmt(string $ApplyCancelMemberAmt) 设置STRING(20)，申请撤销的会员金额
 * @method string getApplyCancelCommission() 获取STRING(20)，申请撤销的手续费金额
 * @method void setApplyCancelCommission(string $ApplyCancelCommission) 设置STRING(20)，申请撤销的手续费金额
 * @method string getMrchCode() 获取String(22)，商户号
 * @method void setMrchCode(string $MrchCode) 设置String(22)，商户号
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
class RevokeMemberRechargeThirdPayRequest extends AbstractModel
{
    /**
     * @var string STRING(52)，原充值的前置流水号
     */
    public $OldFillFrontSeqNo;

    /**
     * @var string STRING(20)，原充值的支付渠道类型
     */
    public $OldFillPayChannelType;

    /**
     * @var string STRING(52)，原充值的支付渠道交易流水号
     */
    public $OldPayChannelTranSeqNo;

    /**
     * @var string STRING(52)，原充值的电商见证宝订单号
     */
    public $OldFillEjzbOrderNo;

    /**
     * @var string STRING(20)，申请撤销的会员金额
     */
    public $ApplyCancelMemberAmt;

    /**
     * @var string STRING(20)，申请撤销的手续费金额
     */
    public $ApplyCancelCommission;

    /**
     * @var string String(22)，商户号
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
     * @param string $OldFillFrontSeqNo STRING(52)，原充值的前置流水号
     * @param string $OldFillPayChannelType STRING(20)，原充值的支付渠道类型
     * @param string $OldPayChannelTranSeqNo STRING(52)，原充值的支付渠道交易流水号
     * @param string $OldFillEjzbOrderNo STRING(52)，原充值的电商见证宝订单号
     * @param string $ApplyCancelMemberAmt STRING(20)，申请撤销的会员金额
     * @param string $ApplyCancelCommission STRING(20)，申请撤销的手续费金额
     * @param string $MrchCode String(22)，商户号
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
        if (array_key_exists("OldFillFrontSeqNo",$param) and $param["OldFillFrontSeqNo"] !== null) {
            $this->OldFillFrontSeqNo = $param["OldFillFrontSeqNo"];
        }

        if (array_key_exists("OldFillPayChannelType",$param) and $param["OldFillPayChannelType"] !== null) {
            $this->OldFillPayChannelType = $param["OldFillPayChannelType"];
        }

        if (array_key_exists("OldPayChannelTranSeqNo",$param) and $param["OldPayChannelTranSeqNo"] !== null) {
            $this->OldPayChannelTranSeqNo = $param["OldPayChannelTranSeqNo"];
        }

        if (array_key_exists("OldFillEjzbOrderNo",$param) and $param["OldFillEjzbOrderNo"] !== null) {
            $this->OldFillEjzbOrderNo = $param["OldFillEjzbOrderNo"];
        }

        if (array_key_exists("ApplyCancelMemberAmt",$param) and $param["ApplyCancelMemberAmt"] !== null) {
            $this->ApplyCancelMemberAmt = $param["ApplyCancelMemberAmt"];
        }

        if (array_key_exists("ApplyCancelCommission",$param) and $param["ApplyCancelCommission"] !== null) {
            $this->ApplyCancelCommission = $param["ApplyCancelCommission"];
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
