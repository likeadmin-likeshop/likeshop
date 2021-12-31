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
 * DescribeChargeDetail返回参数结构体
 *
 * @method string getOrderStatus() 获取交易状态 （0：成功，1：失败，2：异常,3:冲正，5：待处理）
 * @method void setOrderStatus(string $OrderStatus) 设置交易状态 （0：成功，1：失败，2：异常,3:冲正，5：待处理）
 * @method string getOrderAmount() 获取交易金额
 * @method void setOrderAmount(string $OrderAmount) 设置交易金额
 * @method string getCommissionAmount() 获取佣金费
 * @method void setCommissionAmount(string $CommissionAmount) 设置佣金费
 * @method string getPayMode() 获取支付方式  0-冻结支付 1-普通支付
 * @method void setPayMode(string $PayMode) 设置支付方式  0-冻结支付 1-普通支付
 * @method string getOrderDate() 获取交易日期
 * @method void setOrderDate(string $OrderDate) 设置交易日期
 * @method string getOrderTime() 获取交易时间
 * @method void setOrderTime(string $OrderTime) 设置交易时间
 * @method string getOrderActualInSubAccountName() 获取订单实际转入见证子账户的名称
 * @method void setOrderActualInSubAccountName(string $OrderActualInSubAccountName) 设置订单实际转入见证子账户的名称
 * @method string getOrderActualInSubAccountNumber() 获取订单实际转入见证子账户的帐号
 * @method void setOrderActualInSubAccountNumber(string $OrderActualInSubAccountNumber) 设置订单实际转入见证子账户的帐号
 * @method string getOrderInSubAccountName() 获取订单实际转入见证子账户的帐号
 * @method void setOrderInSubAccountName(string $OrderInSubAccountName) 设置订单实际转入见证子账户的帐号
 * @method string getOrderInSubAccountNumber() 获取订单转入见证子账户的帐号
 * @method void setOrderInSubAccountNumber(string $OrderInSubAccountNumber) 设置订单转入见证子账户的帐号
 * @method string getFrontSequenceNumber() 获取银行流水号
 * @method void setFrontSequenceNumber(string $FrontSequenceNumber) 设置银行流水号
 * @method string getFailMessage() 获取当充值失败时，返回交易失败原因
 * @method void setFailMessage(string $FailMessage) 设置当充值失败时，返回交易失败原因
 * @method string getRequestType() 获取请求类型
 * @method void setRequestType(string $RequestType) 设置请求类型
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeChargeDetailResponse extends AbstractModel
{
    /**
     * @var string 交易状态 （0：成功，1：失败，2：异常,3:冲正，5：待处理）
     */
    public $OrderStatus;

    /**
     * @var string 交易金额
     */
    public $OrderAmount;

    /**
     * @var string 佣金费
     */
    public $CommissionAmount;

    /**
     * @var string 支付方式  0-冻结支付 1-普通支付
     */
    public $PayMode;

    /**
     * @var string 交易日期
     */
    public $OrderDate;

    /**
     * @var string 交易时间
     */
    public $OrderTime;

    /**
     * @var string 订单实际转入见证子账户的名称
     */
    public $OrderActualInSubAccountName;

    /**
     * @var string 订单实际转入见证子账户的帐号
     */
    public $OrderActualInSubAccountNumber;

    /**
     * @var string 订单实际转入见证子账户的帐号
     */
    public $OrderInSubAccountName;

    /**
     * @var string 订单转入见证子账户的帐号
     */
    public $OrderInSubAccountNumber;

    /**
     * @var string 银行流水号
     */
    public $FrontSequenceNumber;

    /**
     * @var string 当充值失败时，返回交易失败原因
     */
    public $FailMessage;

    /**
     * @var string 请求类型
     */
    public $RequestType;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $OrderStatus 交易状态 （0：成功，1：失败，2：异常,3:冲正，5：待处理）
     * @param string $OrderAmount 交易金额
     * @param string $CommissionAmount 佣金费
     * @param string $PayMode 支付方式  0-冻结支付 1-普通支付
     * @param string $OrderDate 交易日期
     * @param string $OrderTime 交易时间
     * @param string $OrderActualInSubAccountName 订单实际转入见证子账户的名称
     * @param string $OrderActualInSubAccountNumber 订单实际转入见证子账户的帐号
     * @param string $OrderInSubAccountName 订单实际转入见证子账户的帐号
     * @param string $OrderInSubAccountNumber 订单转入见证子账户的帐号
     * @param string $FrontSequenceNumber 银行流水号
     * @param string $FailMessage 当充值失败时，返回交易失败原因
     * @param string $RequestType 请求类型
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
        if (array_key_exists("OrderStatus",$param) and $param["OrderStatus"] !== null) {
            $this->OrderStatus = $param["OrderStatus"];
        }

        if (array_key_exists("OrderAmount",$param) and $param["OrderAmount"] !== null) {
            $this->OrderAmount = $param["OrderAmount"];
        }

        if (array_key_exists("CommissionAmount",$param) and $param["CommissionAmount"] !== null) {
            $this->CommissionAmount = $param["CommissionAmount"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("OrderDate",$param) and $param["OrderDate"] !== null) {
            $this->OrderDate = $param["OrderDate"];
        }

        if (array_key_exists("OrderTime",$param) and $param["OrderTime"] !== null) {
            $this->OrderTime = $param["OrderTime"];
        }

        if (array_key_exists("OrderActualInSubAccountName",$param) and $param["OrderActualInSubAccountName"] !== null) {
            $this->OrderActualInSubAccountName = $param["OrderActualInSubAccountName"];
        }

        if (array_key_exists("OrderActualInSubAccountNumber",$param) and $param["OrderActualInSubAccountNumber"] !== null) {
            $this->OrderActualInSubAccountNumber = $param["OrderActualInSubAccountNumber"];
        }

        if (array_key_exists("OrderInSubAccountName",$param) and $param["OrderInSubAccountName"] !== null) {
            $this->OrderInSubAccountName = $param["OrderInSubAccountName"];
        }

        if (array_key_exists("OrderInSubAccountNumber",$param) and $param["OrderInSubAccountNumber"] !== null) {
            $this->OrderInSubAccountNumber = $param["OrderInSubAccountNumber"];
        }

        if (array_key_exists("FrontSequenceNumber",$param) and $param["FrontSequenceNumber"] !== null) {
            $this->FrontSequenceNumber = $param["FrontSequenceNumber"];
        }

        if (array_key_exists("FailMessage",$param) and $param["FailMessage"] !== null) {
            $this->FailMessage = $param["FailMessage"];
        }

        if (array_key_exists("RequestType",$param) and $param["RequestType"] !== null) {
            $this->RequestType = $param["RequestType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
