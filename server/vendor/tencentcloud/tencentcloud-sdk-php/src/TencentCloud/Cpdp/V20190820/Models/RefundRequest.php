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
 * Refund请求参数结构体
 *
 * @method string getUserId() 获取用户ID，长度不小于5位， 仅支持字母和数字的组合
 * @method void setUserId(string $UserId) 设置用户ID，长度不小于5位， 仅支持字母和数字的组合
 * @method string getRefundId() 获取退款订单号，仅支持数字、 字母、下划线（_）、横杠字 符（-）、点（.）的组合
 * @method void setRefundId(string $RefundId) 设置退款订单号，仅支持数字、 字母、下划线（_）、横杠字 符（-）、点（.）的组合
 * @method string getMidasAppId() 获取聚鑫分配的支付主MidasAppId
 * @method void setMidasAppId(string $MidasAppId) 设置聚鑫分配的支付主MidasAppId
 * @method integer getTotalRefundAmt() 获取退款金额，单位：分。备注：当该字段为空或者为0 时，系统会默认使用订单当 实付金额作为退款金额
 * @method void setTotalRefundAmt(integer $TotalRefundAmt) 设置退款金额，单位：分。备注：当该字段为空或者为0 时，系统会默认使用订单当 实付金额作为退款金额
 * @method string getMidasSecretId() 获取聚鑫分配的安全ID
 * @method void setMidasSecretId(string $MidasSecretId) 设置聚鑫分配的安全ID
 * @method string getMidasSignature() 获取按照聚鑫安全密钥计算的签名
 * @method void setMidasSignature(string $MidasSignature) 设置按照聚鑫安全密钥计算的签名
 * @method string getOutTradeNo() 获取商品订单，仅支持数字、字 母、下划线（_）、横杠字符 （-）、点（.）的组合。  OutTradeNo ,TransactionId 二选一,不能都为空,优先使用 OutTradeNo
 * @method void setOutTradeNo(string $OutTradeNo) 设置商品订单，仅支持数字、字 母、下划线（_）、横杠字符 （-）、点（.）的组合。  OutTradeNo ,TransactionId 二选一,不能都为空,优先使用 OutTradeNo
 * @method integer getMchRefundAmt() 获取结算应收金额，单位：分
 * @method void setMchRefundAmt(integer $MchRefundAmt) 设置结算应收金额，单位：分
 * @method string getTransactionId() 获取调用下单接口获取的聚鑫交 易订单。  OutTradeNo ,TransactionId 二选一,不能都为空,优先使用 OutTradeNo
 * @method void setTransactionId(string $TransactionId) 设置调用下单接口获取的聚鑫交 易订单。  OutTradeNo ,TransactionId 二选一,不能都为空,优先使用 OutTradeNo
 * @method integer getPlatformRefundAmt() 获取平台应收金额，单位：分
 * @method void setPlatformRefundAmt(integer $PlatformRefundAmt) 设置平台应收金额，单位：分
 * @method array getSubOrderRefundList() 获取支持多个子订单批量退款单 个子订单退款支持传 SubOutTradeNo ，也支持传 SubOutTradeNoList ，都传的时候以 SubOutTradeNoList 为准。  如果传了子单退款细节，外 部不需要再传退款金额，平 台应退，商户应退金额，我 们可以直接根据子单退款算出来总和。
 * @method void setSubOrderRefundList(array $SubOrderRefundList) 设置支持多个子订单批量退款单 个子订单退款支持传 SubOutTradeNo ，也支持传 SubOutTradeNoList ，都传的时候以 SubOutTradeNoList 为准。  如果传了子单退款细节，外 部不需要再传退款金额，平 台应退，商户应退金额，我 们可以直接根据子单退款算出来总和。
 * @method string getMidasEnvironment() 获取环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
 * @method void setMidasEnvironment(string $MidasEnvironment) 设置环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
 */
class RefundRequest extends AbstractModel
{
    /**
     * @var string 用户ID，长度不小于5位， 仅支持字母和数字的组合
     */
    public $UserId;

    /**
     * @var string 退款订单号，仅支持数字、 字母、下划线（_）、横杠字 符（-）、点（.）的组合
     */
    public $RefundId;

    /**
     * @var string 聚鑫分配的支付主MidasAppId
     */
    public $MidasAppId;

    /**
     * @var integer 退款金额，单位：分。备注：当该字段为空或者为0 时，系统会默认使用订单当 实付金额作为退款金额
     */
    public $TotalRefundAmt;

    /**
     * @var string 聚鑫分配的安全ID
     */
    public $MidasSecretId;

    /**
     * @var string 按照聚鑫安全密钥计算的签名
     */
    public $MidasSignature;

    /**
     * @var string 商品订单，仅支持数字、字 母、下划线（_）、横杠字符 （-）、点（.）的组合。  OutTradeNo ,TransactionId 二选一,不能都为空,优先使用 OutTradeNo
     */
    public $OutTradeNo;

    /**
     * @var integer 结算应收金额，单位：分
     */
    public $MchRefundAmt;

    /**
     * @var string 调用下单接口获取的聚鑫交 易订单。  OutTradeNo ,TransactionId 二选一,不能都为空,优先使用 OutTradeNo
     */
    public $TransactionId;

    /**
     * @var integer 平台应收金额，单位：分
     */
    public $PlatformRefundAmt;

    /**
     * @var array 支持多个子订单批量退款单 个子订单退款支持传 SubOutTradeNo ，也支持传 SubOutTradeNoList ，都传的时候以 SubOutTradeNoList 为准。  如果传了子单退款细节，外 部不需要再传退款金额，平 台应退，商户应退金额，我 们可以直接根据子单退款算出来总和。
     */
    public $SubOrderRefundList;

    /**
     * @var string 环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
     */
    public $MidasEnvironment;

    /**
     * @param string $UserId 用户ID，长度不小于5位， 仅支持字母和数字的组合
     * @param string $RefundId 退款订单号，仅支持数字、 字母、下划线（_）、横杠字 符（-）、点（.）的组合
     * @param string $MidasAppId 聚鑫分配的支付主MidasAppId
     * @param integer $TotalRefundAmt 退款金额，单位：分。备注：当该字段为空或者为0 时，系统会默认使用订单当 实付金额作为退款金额
     * @param string $MidasSecretId 聚鑫分配的安全ID
     * @param string $MidasSignature 按照聚鑫安全密钥计算的签名
     * @param string $OutTradeNo 商品订单，仅支持数字、字 母、下划线（_）、横杠字符 （-）、点（.）的组合。  OutTradeNo ,TransactionId 二选一,不能都为空,优先使用 OutTradeNo
     * @param integer $MchRefundAmt 结算应收金额，单位：分
     * @param string $TransactionId 调用下单接口获取的聚鑫交 易订单。  OutTradeNo ,TransactionId 二选一,不能都为空,优先使用 OutTradeNo
     * @param integer $PlatformRefundAmt 平台应收金额，单位：分
     * @param array $SubOrderRefundList 支持多个子订单批量退款单 个子订单退款支持传 SubOutTradeNo ，也支持传 SubOutTradeNoList ，都传的时候以 SubOutTradeNoList 为准。  如果传了子单退款细节，外 部不需要再传退款金额，平 台应退，商户应退金额，我 们可以直接根据子单退款算出来总和。
     * @param string $MidasEnvironment 环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("RefundId",$param) and $param["RefundId"] !== null) {
            $this->RefundId = $param["RefundId"];
        }

        if (array_key_exists("MidasAppId",$param) and $param["MidasAppId"] !== null) {
            $this->MidasAppId = $param["MidasAppId"];
        }

        if (array_key_exists("TotalRefundAmt",$param) and $param["TotalRefundAmt"] !== null) {
            $this->TotalRefundAmt = $param["TotalRefundAmt"];
        }

        if (array_key_exists("MidasSecretId",$param) and $param["MidasSecretId"] !== null) {
            $this->MidasSecretId = $param["MidasSecretId"];
        }

        if (array_key_exists("MidasSignature",$param) and $param["MidasSignature"] !== null) {
            $this->MidasSignature = $param["MidasSignature"];
        }

        if (array_key_exists("OutTradeNo",$param) and $param["OutTradeNo"] !== null) {
            $this->OutTradeNo = $param["OutTradeNo"];
        }

        if (array_key_exists("MchRefundAmt",$param) and $param["MchRefundAmt"] !== null) {
            $this->MchRefundAmt = $param["MchRefundAmt"];
        }

        if (array_key_exists("TransactionId",$param) and $param["TransactionId"] !== null) {
            $this->TransactionId = $param["TransactionId"];
        }

        if (array_key_exists("PlatformRefundAmt",$param) and $param["PlatformRefundAmt"] !== null) {
            $this->PlatformRefundAmt = $param["PlatformRefundAmt"];
        }

        if (array_key_exists("SubOrderRefundList",$param) and $param["SubOrderRefundList"] !== null) {
            $this->SubOrderRefundList = [];
            foreach ($param["SubOrderRefundList"] as $key => $value){
                $obj = new RefundOutSubOrderRefundList();
                $obj->deserialize($value);
                array_push($this->SubOrderRefundList, $obj);
            }
        }

        if (array_key_exists("MidasEnvironment",$param) and $param["MidasEnvironment"] !== null) {
            $this->MidasEnvironment = $param["MidasEnvironment"];
        }
    }
}
