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
 * RechargeMemberThirdPay请求参数结构体
 *
 * @method string getTranNetMemberCode() 获取STRING(32)，交易网会代码
 * @method void setTranNetMemberCode(string $TranNetMemberCode) 设置STRING(32)，交易网会代码
 * @method string getMemberFillAmt() 获取STRING(20)，会员充值金额
 * @method void setMemberFillAmt(string $MemberFillAmt) 设置STRING(20)，会员充值金额
 * @method string getCommission() 获取STRING(20)，手续费金额
 * @method void setCommission(string $Commission) 设置STRING(20)，手续费金额
 * @method string getCcy() 获取STRING(3)，币种。如RMB
 * @method void setCcy(string $Ccy) 设置STRING(3)，币种。如RMB
 * @method string getPayChannelType() 获取STRING(20)，支付渠道类型。
0001-微信
0002-支付宝
0003-京东支付
 * @method void setPayChannelType(string $PayChannelType) 设置STRING(20)，支付渠道类型。
0001-微信
0002-支付宝
0003-京东支付
 * @method string getPayChannelAssignMerNo() 获取STRING(50)，支付渠道所分配的商户号
 * @method void setPayChannelAssignMerNo(string $PayChannelAssignMerNo) 设置STRING(50)，支付渠道所分配的商户号
 * @method string getPayChannelTranSeqNo() 获取STRING(52)，支付渠道交易流水号
 * @method void setPayChannelTranSeqNo(string $PayChannelTranSeqNo) 设置STRING(52)，支付渠道交易流水号
 * @method string getEjzbOrderNo() 获取STRING(52)，电商见证宝订单号
 * @method void setEjzbOrderNo(string $EjzbOrderNo) 设置STRING(52)，电商见证宝订单号
 * @method string getMrchCode() 获取String(22)，商户号
 * @method void setMrchCode(string $MrchCode) 设置String(22)，商户号
 * @method string getEjzbOrderContent() 获取STRING(500)，电商见证宝订单内容
 * @method void setEjzbOrderContent(string $EjzbOrderContent) 设置STRING(500)，电商见证宝订单内容
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
class RechargeMemberThirdPayRequest extends AbstractModel
{
    /**
     * @var string STRING(32)，交易网会代码
     */
    public $TranNetMemberCode;

    /**
     * @var string STRING(20)，会员充值金额
     */
    public $MemberFillAmt;

    /**
     * @var string STRING(20)，手续费金额
     */
    public $Commission;

    /**
     * @var string STRING(3)，币种。如RMB
     */
    public $Ccy;

    /**
     * @var string STRING(20)，支付渠道类型。
0001-微信
0002-支付宝
0003-京东支付
     */
    public $PayChannelType;

    /**
     * @var string STRING(50)，支付渠道所分配的商户号
     */
    public $PayChannelAssignMerNo;

    /**
     * @var string STRING(52)，支付渠道交易流水号
     */
    public $PayChannelTranSeqNo;

    /**
     * @var string STRING(52)，电商见证宝订单号
     */
    public $EjzbOrderNo;

    /**
     * @var string String(22)，商户号
     */
    public $MrchCode;

    /**
     * @var string STRING(500)，电商见证宝订单内容
     */
    public $EjzbOrderContent;

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
     * @param string $TranNetMemberCode STRING(32)，交易网会代码
     * @param string $MemberFillAmt STRING(20)，会员充值金额
     * @param string $Commission STRING(20)，手续费金额
     * @param string $Ccy STRING(3)，币种。如RMB
     * @param string $PayChannelType STRING(20)，支付渠道类型。
0001-微信
0002-支付宝
0003-京东支付
     * @param string $PayChannelAssignMerNo STRING(50)，支付渠道所分配的商户号
     * @param string $PayChannelTranSeqNo STRING(52)，支付渠道交易流水号
     * @param string $EjzbOrderNo STRING(52)，电商见证宝订单号
     * @param string $MrchCode String(22)，商户号
     * @param string $EjzbOrderContent STRING(500)，电商见证宝订单内容
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

        if (array_key_exists("MemberFillAmt",$param) and $param["MemberFillAmt"] !== null) {
            $this->MemberFillAmt = $param["MemberFillAmt"];
        }

        if (array_key_exists("Commission",$param) and $param["Commission"] !== null) {
            $this->Commission = $param["Commission"];
        }

        if (array_key_exists("Ccy",$param) and $param["Ccy"] !== null) {
            $this->Ccy = $param["Ccy"];
        }

        if (array_key_exists("PayChannelType",$param) and $param["PayChannelType"] !== null) {
            $this->PayChannelType = $param["PayChannelType"];
        }

        if (array_key_exists("PayChannelAssignMerNo",$param) and $param["PayChannelAssignMerNo"] !== null) {
            $this->PayChannelAssignMerNo = $param["PayChannelAssignMerNo"];
        }

        if (array_key_exists("PayChannelTranSeqNo",$param) and $param["PayChannelTranSeqNo"] !== null) {
            $this->PayChannelTranSeqNo = $param["PayChannelTranSeqNo"];
        }

        if (array_key_exists("EjzbOrderNo",$param) and $param["EjzbOrderNo"] !== null) {
            $this->EjzbOrderNo = $param["EjzbOrderNo"];
        }

        if (array_key_exists("MrchCode",$param) and $param["MrchCode"] !== null) {
            $this->MrchCode = $param["MrchCode"];
        }

        if (array_key_exists("EjzbOrderContent",$param) and $param["EjzbOrderContent"] !== null) {
            $this->EjzbOrderContent = $param["EjzbOrderContent"];
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
