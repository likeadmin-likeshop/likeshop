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
 * QueryTransferBatch返回参数结构体
 *
 * @method string getMerchantId() 获取商户号。
示例值：19300009329
 * @method void setMerchantId(string $MerchantId) 设置商户号。
示例值：19300009329
 * @method string getMerchantBatchNo() 获取商家批次单号。
商户系统内部的商家批次单号，此参数只能由数字、字母组成，商户系统内部唯一，UTF8编码，最多32个字符。
示例值：plfk2020042013
 * @method void setMerchantBatchNo(string $MerchantBatchNo) 设置商家批次单号。
商户系统内部的商家批次单号，此参数只能由数字、字母组成，商户系统内部唯一，UTF8编码，最多32个字符。
示例值：plfk2020042013
 * @method string getBatchId() 获取微信批次单号。
微信商家转账系统返回的唯一标识。
示例值：1030000071100999991182020050700019480001
 * @method void setBatchId(string $BatchId) 设置微信批次单号。
微信商家转账系统返回的唯一标识。
示例值：1030000071100999991182020050700019480001
 * @method string getMerchantAppId() 获取直连商户appId。
商户号绑定的appid。
示例值：wxf636efh567hg4356
 * @method void setMerchantAppId(string $MerchantAppId) 设置直连商户appId。
商户号绑定的appid。
示例值：wxf636efh567hg4356
 * @method string getBatchStatus() 获取批次状态。
ACCEPTED:已受理，批次已受理成功，若发起批量转账的30分钟后，转账批次单仍处于该状态，可能原因是商户账户余额不足等。商户可查询账户资金流水，若该笔转账批次单的扣款已经发生，则表示批次已经进入转账中，请再次查单确认；
PROCESSING:转账中，已开始处理批次内的转账明细单；
FINISHED:已完成，批次内的所有转账明细单都已处理完成；
CLOSED:已关闭，可查询具体的批次关闭原因确认；
示例值：ACCEPTED
 * @method void setBatchStatus(string $BatchStatus) 设置批次状态。
ACCEPTED:已受理，批次已受理成功，若发起批量转账的30分钟后，转账批次单仍处于该状态，可能原因是商户账户余额不足等。商户可查询账户资金流水，若该笔转账批次单的扣款已经发生，则表示批次已经进入转账中，请再次查单确认；
PROCESSING:转账中，已开始处理批次内的转账明细单；
FINISHED:已完成，批次内的所有转账明细单都已处理完成；
CLOSED:已关闭，可查询具体的批次关闭原因确认；
示例值：ACCEPTED
 * @method string getCloseReason() 获取批次关闭原因。
如果批次单状态为“CLOSED”（已关闭），则有关闭原因；
MERCHANT_REVOCATION：商户主动撤销；
OVERDUE_CLOSE：系统超时关闭。
示例值：OVERDUE_CLOSE
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCloseReason(string $CloseReason) 设置批次关闭原因。
如果批次单状态为“CLOSED”（已关闭），则有关闭原因；
MERCHANT_REVOCATION：商户主动撤销；
OVERDUE_CLOSE：系统超时关闭。
示例值：OVERDUE_CLOSE
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalAmount() 获取转账总金额。
转账金额，单位为分。
示例值：4000000
 * @method void setTotalAmount(integer $TotalAmount) 设置转账总金额。
转账金额，单位为分。
示例值：4000000
 * @method integer getTotalNum() 获取转账总笔数。
一个转账批次最多允许发起三千笔转账。
示例值：200
 * @method void setTotalNum(integer $TotalNum) 设置转账总笔数。
一个转账批次最多允许发起三千笔转账。
示例值：200
 * @method string getCreateTime() 获取批次受理成功时返回，遵循rfc3339标准格式。格式为YYYY-MM-DDTHH:mm:ss.sss+TIMEZONE，YYYY-MM-DD表示年月日，T出现在字符串中，表示time元素的开头，HH:mm:ss.sss表示时分秒毫秒，TIMEZONE表示时区（+08:00表示东八区时间，领先UTC 8小时，即北京时间）。例如：2015-05-20T13:29:35.120+08:00表示北京时间2015年05月20日13点29分35秒。
示例值：2015-05-20T13:29:35.120+08:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置批次受理成功时返回，遵循rfc3339标准格式。格式为YYYY-MM-DDTHH:mm:ss.sss+TIMEZONE，YYYY-MM-DD表示年月日，T出现在字符串中，表示time元素的开头，HH:mm:ss.sss表示时分秒毫秒，TIMEZONE表示时区（+08:00表示东八区时间，领先UTC 8小时，即北京时间）。例如：2015-05-20T13:29:35.120+08:00表示北京时间2015年05月20日13点29分35秒。
示例值：2015-05-20T13:29:35.120+08:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取批次最近一次更新时间，遵循rfc3339标准格式。格式为YYYY-MM-DDTHH:mm:ss.sss+TIMEZONE，YYYY-MM-DD表示年月日，T出现在字符串中，表示time元素的开头，HH:mm:ss.sss表示时分秒毫秒，TIMEZONE表示时区（+08:00表示东八区时间，领先UTC 8小时，即北京时间）。例如：2015-05-20T13:29:35.120+08:00表示北京时间2015年05月20日13点29分35秒。
示例值：2015-05-20T13:29:35.120+08:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置批次最近一次更新时间，遵循rfc3339标准格式。格式为YYYY-MM-DDTHH:mm:ss.sss+TIMEZONE，YYYY-MM-DD表示年月日，T出现在字符串中，表示time元素的开头，HH:mm:ss.sss表示时分秒毫秒，TIMEZONE表示时区（+08:00表示东八区时间，领先UTC 8小时，即北京时间）。例如：2015-05-20T13:29:35.120+08:00表示北京时间2015年05月20日13点29分35秒。
示例值：2015-05-20T13:29:35.120+08:00
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSuccessAmount() 获取转账成功金额。
转账成功的金额，单位为分，可能随时变化。
示例值：4000000
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessAmount(integer $SuccessAmount) 设置转账成功金额。
转账成功的金额，单位为分，可能随时变化。
示例值：4000000
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSuccessNum() 获取转账成功的笔数。
可能随时变化。
示例值：200
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessNum(integer $SuccessNum) 设置转账成功的笔数。
可能随时变化。
示例值：200
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailAmount() 获取转账失败金额。
转账失败的金额，单位为分，可能随时变化。
示例值：4000000
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailAmount(integer $FailAmount) 设置转账失败金额。
转账失败的金额，单位为分，可能随时变化。
示例值：4000000
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailNum() 获取转账失败笔数。
可能随时变化。
示例值：200
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailNum(integer $FailNum) 设置转账失败笔数。
可能随时变化。
示例值：200
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTransferDetails() 获取转账明细列表。
返回明细详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransferDetails(array $TransferDetails) 设置转账明细列表。
返回明细详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBatchType() 获取批次类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBatchType(string $BatchType) 设置批次类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBatchName() 获取批次名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBatchName(string $BatchName) 设置批次名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBatchRemark() 获取批次标注。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBatchRemark(string $BatchRemark) 设置批次标注。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class QueryTransferBatchResponse extends AbstractModel
{
    /**
     * @var string 商户号。
示例值：19300009329
     */
    public $MerchantId;

    /**
     * @var string 商家批次单号。
商户系统内部的商家批次单号，此参数只能由数字、字母组成，商户系统内部唯一，UTF8编码，最多32个字符。
示例值：plfk2020042013
     */
    public $MerchantBatchNo;

    /**
     * @var string 微信批次单号。
微信商家转账系统返回的唯一标识。
示例值：1030000071100999991182020050700019480001
     */
    public $BatchId;

    /**
     * @var string 直连商户appId。
商户号绑定的appid。
示例值：wxf636efh567hg4356
     */
    public $MerchantAppId;

    /**
     * @var string 批次状态。
ACCEPTED:已受理，批次已受理成功，若发起批量转账的30分钟后，转账批次单仍处于该状态，可能原因是商户账户余额不足等。商户可查询账户资金流水，若该笔转账批次单的扣款已经发生，则表示批次已经进入转账中，请再次查单确认；
PROCESSING:转账中，已开始处理批次内的转账明细单；
FINISHED:已完成，批次内的所有转账明细单都已处理完成；
CLOSED:已关闭，可查询具体的批次关闭原因确认；
示例值：ACCEPTED
     */
    public $BatchStatus;

    /**
     * @var string 批次关闭原因。
如果批次单状态为“CLOSED”（已关闭），则有关闭原因；
MERCHANT_REVOCATION：商户主动撤销；
OVERDUE_CLOSE：系统超时关闭。
示例值：OVERDUE_CLOSE
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CloseReason;

    /**
     * @var integer 转账总金额。
转账金额，单位为分。
示例值：4000000
     */
    public $TotalAmount;

    /**
     * @var integer 转账总笔数。
一个转账批次最多允许发起三千笔转账。
示例值：200
     */
    public $TotalNum;

    /**
     * @var string 批次受理成功时返回，遵循rfc3339标准格式。格式为YYYY-MM-DDTHH:mm:ss.sss+TIMEZONE，YYYY-MM-DD表示年月日，T出现在字符串中，表示time元素的开头，HH:mm:ss.sss表示时分秒毫秒，TIMEZONE表示时区（+08:00表示东八区时间，领先UTC 8小时，即北京时间）。例如：2015-05-20T13:29:35.120+08:00表示北京时间2015年05月20日13点29分35秒。
示例值：2015-05-20T13:29:35.120+08:00
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 批次最近一次更新时间，遵循rfc3339标准格式。格式为YYYY-MM-DDTHH:mm:ss.sss+TIMEZONE，YYYY-MM-DD表示年月日，T出现在字符串中，表示time元素的开头，HH:mm:ss.sss表示时分秒毫秒，TIMEZONE表示时区（+08:00表示东八区时间，领先UTC 8小时，即北京时间）。例如：2015-05-20T13:29:35.120+08:00表示北京时间2015年05月20日13点29分35秒。
示例值：2015-05-20T13:29:35.120+08:00
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 转账成功金额。
转账成功的金额，单位为分，可能随时变化。
示例值：4000000
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessAmount;

    /**
     * @var integer 转账成功的笔数。
可能随时变化。
示例值：200
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessNum;

    /**
     * @var integer 转账失败金额。
转账失败的金额，单位为分，可能随时变化。
示例值：4000000
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailAmount;

    /**
     * @var integer 转账失败笔数。
可能随时变化。
示例值：200
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailNum;

    /**
     * @var array 转账明细列表。
返回明细详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransferDetails;

    /**
     * @var string 批次类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BatchType;

    /**
     * @var string 批次名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BatchName;

    /**
     * @var string 批次标注。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BatchRemark;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $MerchantId 商户号。
示例值：19300009329
     * @param string $MerchantBatchNo 商家批次单号。
商户系统内部的商家批次单号，此参数只能由数字、字母组成，商户系统内部唯一，UTF8编码，最多32个字符。
示例值：plfk2020042013
     * @param string $BatchId 微信批次单号。
微信商家转账系统返回的唯一标识。
示例值：1030000071100999991182020050700019480001
     * @param string $MerchantAppId 直连商户appId。
商户号绑定的appid。
示例值：wxf636efh567hg4356
     * @param string $BatchStatus 批次状态。
ACCEPTED:已受理，批次已受理成功，若发起批量转账的30分钟后，转账批次单仍处于该状态，可能原因是商户账户余额不足等。商户可查询账户资金流水，若该笔转账批次单的扣款已经发生，则表示批次已经进入转账中，请再次查单确认；
PROCESSING:转账中，已开始处理批次内的转账明细单；
FINISHED:已完成，批次内的所有转账明细单都已处理完成；
CLOSED:已关闭，可查询具体的批次关闭原因确认；
示例值：ACCEPTED
     * @param string $CloseReason 批次关闭原因。
如果批次单状态为“CLOSED”（已关闭），则有关闭原因；
MERCHANT_REVOCATION：商户主动撤销；
OVERDUE_CLOSE：系统超时关闭。
示例值：OVERDUE_CLOSE
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalAmount 转账总金额。
转账金额，单位为分。
示例值：4000000
     * @param integer $TotalNum 转账总笔数。
一个转账批次最多允许发起三千笔转账。
示例值：200
     * @param string $CreateTime 批次受理成功时返回，遵循rfc3339标准格式。格式为YYYY-MM-DDTHH:mm:ss.sss+TIMEZONE，YYYY-MM-DD表示年月日，T出现在字符串中，表示time元素的开头，HH:mm:ss.sss表示时分秒毫秒，TIMEZONE表示时区（+08:00表示东八区时间，领先UTC 8小时，即北京时间）。例如：2015-05-20T13:29:35.120+08:00表示北京时间2015年05月20日13点29分35秒。
示例值：2015-05-20T13:29:35.120+08:00
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 批次最近一次更新时间，遵循rfc3339标准格式。格式为YYYY-MM-DDTHH:mm:ss.sss+TIMEZONE，YYYY-MM-DD表示年月日，T出现在字符串中，表示time元素的开头，HH:mm:ss.sss表示时分秒毫秒，TIMEZONE表示时区（+08:00表示东八区时间，领先UTC 8小时，即北京时间）。例如：2015-05-20T13:29:35.120+08:00表示北京时间2015年05月20日13点29分35秒。
示例值：2015-05-20T13:29:35.120+08:00
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SuccessAmount 转账成功金额。
转账成功的金额，单位为分，可能随时变化。
示例值：4000000
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SuccessNum 转账成功的笔数。
可能随时变化。
示例值：200
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FailAmount 转账失败金额。
转账失败的金额，单位为分，可能随时变化。
示例值：4000000
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FailNum 转账失败笔数。
可能随时变化。
示例值：200
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TransferDetails 转账明细列表。
返回明细详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BatchType 批次类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BatchName 批次名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BatchRemark 批次标注。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("MerchantId",$param) and $param["MerchantId"] !== null) {
            $this->MerchantId = $param["MerchantId"];
        }

        if (array_key_exists("MerchantBatchNo",$param) and $param["MerchantBatchNo"] !== null) {
            $this->MerchantBatchNo = $param["MerchantBatchNo"];
        }

        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }

        if (array_key_exists("MerchantAppId",$param) and $param["MerchantAppId"] !== null) {
            $this->MerchantAppId = $param["MerchantAppId"];
        }

        if (array_key_exists("BatchStatus",$param) and $param["BatchStatus"] !== null) {
            $this->BatchStatus = $param["BatchStatus"];
        }

        if (array_key_exists("CloseReason",$param) and $param["CloseReason"] !== null) {
            $this->CloseReason = $param["CloseReason"];
        }

        if (array_key_exists("TotalAmount",$param) and $param["TotalAmount"] !== null) {
            $this->TotalAmount = $param["TotalAmount"];
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("SuccessAmount",$param) and $param["SuccessAmount"] !== null) {
            $this->SuccessAmount = $param["SuccessAmount"];
        }

        if (array_key_exists("SuccessNum",$param) and $param["SuccessNum"] !== null) {
            $this->SuccessNum = $param["SuccessNum"];
        }

        if (array_key_exists("FailAmount",$param) and $param["FailAmount"] !== null) {
            $this->FailAmount = $param["FailAmount"];
        }

        if (array_key_exists("FailNum",$param) and $param["FailNum"] !== null) {
            $this->FailNum = $param["FailNum"];
        }

        if (array_key_exists("TransferDetails",$param) and $param["TransferDetails"] !== null) {
            $this->TransferDetails = [];
            foreach ($param["TransferDetails"] as $key => $value){
                $obj = new TransferDetailResponse();
                $obj->deserialize($value);
                array_push($this->TransferDetails, $obj);
            }
        }

        if (array_key_exists("BatchType",$param) and $param["BatchType"] !== null) {
            $this->BatchType = $param["BatchType"];
        }

        if (array_key_exists("BatchName",$param) and $param["BatchName"] !== null) {
            $this->BatchName = $param["BatchName"];
        }

        if (array_key_exists("BatchRemark",$param) and $param["BatchRemark"] !== null) {
            $this->BatchRemark = $param["BatchRemark"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
