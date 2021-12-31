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
 * 批量转账明细实体
 *
 * @method string getMerchantDetailNo() 获取商家明细单号。
商户系统内部区分转账批次单下不同转账明细单的唯一标识，要求此参数只能由数字、大小写字母组成。
示例值：x23zy545Bd5436
 * @method void setMerchantDetailNo(string $MerchantDetailNo) 设置商家明细单号。
商户系统内部区分转账批次单下不同转账明细单的唯一标识，要求此参数只能由数字、大小写字母组成。
示例值：x23zy545Bd5436
 * @method integer getTransferAmount() 获取转账金额。
转账金额单位为分。
示例值：200000
 * @method void setTransferAmount(integer $TransferAmount) 设置转账金额。
转账金额单位为分。
示例值：200000
 * @method string getTransferRemark() 获取转账备注。
单条转账备注（微信用户会收到该备注）。UTF8编码，最多32字符。
示例值：2020年4月报销
 * @method void setTransferRemark(string $TransferRemark) 设置转账备注。
单条转账备注（微信用户会收到该备注）。UTF8编码，最多32字符。
示例值：2020年4月报销
 * @method string getOpenId() 获取用户在直连商户下的唯一标识。
示例值：o-MYE42l80oelYMDE34nYD456Xoy
 * @method void setOpenId(string $OpenId) 设置用户在直连商户下的唯一标识。
示例值：o-MYE42l80oelYMDE34nYD456Xoy
 * @method string getUserName() 获取收款用户姓名。
收款方姓名。
示例值：张三
 * @method void setUserName(string $UserName) 设置收款用户姓名。
收款方姓名。
示例值：张三
 */
class TransferDetailRequest extends AbstractModel
{
    /**
     * @var string 商家明细单号。
商户系统内部区分转账批次单下不同转账明细单的唯一标识，要求此参数只能由数字、大小写字母组成。
示例值：x23zy545Bd5436
     */
    public $MerchantDetailNo;

    /**
     * @var integer 转账金额。
转账金额单位为分。
示例值：200000
     */
    public $TransferAmount;

    /**
     * @var string 转账备注。
单条转账备注（微信用户会收到该备注）。UTF8编码，最多32字符。
示例值：2020年4月报销
     */
    public $TransferRemark;

    /**
     * @var string 用户在直连商户下的唯一标识。
示例值：o-MYE42l80oelYMDE34nYD456Xoy
     */
    public $OpenId;

    /**
     * @var string 收款用户姓名。
收款方姓名。
示例值：张三
     */
    public $UserName;

    /**
     * @param string $MerchantDetailNo 商家明细单号。
商户系统内部区分转账批次单下不同转账明细单的唯一标识，要求此参数只能由数字、大小写字母组成。
示例值：x23zy545Bd5436
     * @param integer $TransferAmount 转账金额。
转账金额单位为分。
示例值：200000
     * @param string $TransferRemark 转账备注。
单条转账备注（微信用户会收到该备注）。UTF8编码，最多32字符。
示例值：2020年4月报销
     * @param string $OpenId 用户在直连商户下的唯一标识。
示例值：o-MYE42l80oelYMDE34nYD456Xoy
     * @param string $UserName 收款用户姓名。
收款方姓名。
示例值：张三
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
        if (array_key_exists("MerchantDetailNo",$param) and $param["MerchantDetailNo"] !== null) {
            $this->MerchantDetailNo = $param["MerchantDetailNo"];
        }

        if (array_key_exists("TransferAmount",$param) and $param["TransferAmount"] !== null) {
            $this->TransferAmount = $param["TransferAmount"];
        }

        if (array_key_exists("TransferRemark",$param) and $param["TransferRemark"] !== null) {
            $this->TransferRemark = $param["TransferRemark"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }
    }
}
