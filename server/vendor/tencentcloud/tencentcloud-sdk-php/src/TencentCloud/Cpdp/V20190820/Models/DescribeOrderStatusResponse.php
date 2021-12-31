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
 * DescribeOrderStatus返回参数结构体
 *
 * @method string getOrderStatus() 获取交易状态 （0：成功，1：失败，2：待确认, 5：待处理，6：处理中）
 * @method void setOrderStatus(string $OrderStatus) 设置交易状态 （0：成功，1：失败，2：待确认, 5：待处理，6：处理中）
 * @method string getOrderAmount() 获取交易金额
 * @method void setOrderAmount(string $OrderAmount) 设置交易金额
 * @method string getOrderDate() 获取交易日期
 * @method void setOrderDate(string $OrderDate) 设置交易日期
 * @method string getOrderTime() 获取交易时间
 * @method void setOrderTime(string $OrderTime) 设置交易时间
 * @method string getOutSubAccountNumber() 获取转出子账户账号
 * @method void setOutSubAccountNumber(string $OutSubAccountNumber) 设置转出子账户账号
 * @method string getInSubAccountNumber() 获取转入子账户账号
 * @method void setInSubAccountNumber(string $InSubAccountNumber) 设置转入子账户账号
 * @method string getBookingFlag() 获取记账标志（1：登记挂账 2：支付 3：提现 4：清分5:下单预支付 6：确认并付款 7：退款 8：支付到平台 N:其他）
 * @method void setBookingFlag(string $BookingFlag) 设置记账标志（1：登记挂账 2：支付 3：提现 4：清分5:下单预支付 6：确认并付款 7：退款 8：支付到平台 N:其他）
 * @method string getFailMessage() 获取当交易失败时，返回交易失败原因
 * @method void setFailMessage(string $FailMessage) 设置当交易失败时，返回交易失败原因
 * @method string getRequestType() 获取请求类型
 * @method void setRequestType(string $RequestType) 设置请求类型
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeOrderStatusResponse extends AbstractModel
{
    /**
     * @var string 交易状态 （0：成功，1：失败，2：待确认, 5：待处理，6：处理中）
     */
    public $OrderStatus;

    /**
     * @var string 交易金额
     */
    public $OrderAmount;

    /**
     * @var string 交易日期
     */
    public $OrderDate;

    /**
     * @var string 交易时间
     */
    public $OrderTime;

    /**
     * @var string 转出子账户账号
     */
    public $OutSubAccountNumber;

    /**
     * @var string 转入子账户账号
     */
    public $InSubAccountNumber;

    /**
     * @var string 记账标志（1：登记挂账 2：支付 3：提现 4：清分5:下单预支付 6：确认并付款 7：退款 8：支付到平台 N:其他）
     */
    public $BookingFlag;

    /**
     * @var string 当交易失败时，返回交易失败原因
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
     * @param string $OrderStatus 交易状态 （0：成功，1：失败，2：待确认, 5：待处理，6：处理中）
     * @param string $OrderAmount 交易金额
     * @param string $OrderDate 交易日期
     * @param string $OrderTime 交易时间
     * @param string $OutSubAccountNumber 转出子账户账号
     * @param string $InSubAccountNumber 转入子账户账号
     * @param string $BookingFlag 记账标志（1：登记挂账 2：支付 3：提现 4：清分5:下单预支付 6：确认并付款 7：退款 8：支付到平台 N:其他）
     * @param string $FailMessage 当交易失败时，返回交易失败原因
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

        if (array_key_exists("OrderDate",$param) and $param["OrderDate"] !== null) {
            $this->OrderDate = $param["OrderDate"];
        }

        if (array_key_exists("OrderTime",$param) and $param["OrderTime"] !== null) {
            $this->OrderTime = $param["OrderTime"];
        }

        if (array_key_exists("OutSubAccountNumber",$param) and $param["OutSubAccountNumber"] !== null) {
            $this->OutSubAccountNumber = $param["OutSubAccountNumber"];
        }

        if (array_key_exists("InSubAccountNumber",$param) and $param["InSubAccountNumber"] !== null) {
            $this->InSubAccountNumber = $param["InSubAccountNumber"];
        }

        if (array_key_exists("BookingFlag",$param) and $param["BookingFlag"] !== null) {
            $this->BookingFlag = $param["BookingFlag"];
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
