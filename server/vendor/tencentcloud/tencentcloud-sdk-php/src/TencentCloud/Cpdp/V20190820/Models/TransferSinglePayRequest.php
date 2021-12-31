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
 * TransferSinglePay请求参数结构体
 *
 * @method string getMerchantId() 获取商户号
 * @method void setMerchantId(string $MerchantId) 设置商户号
 * @method string getMerchantAppId() 获取微信申请商户号的appid或者商户号绑定的appid
支付宝、平安填入MerchantId
 * @method void setMerchantAppId(string $MerchantAppId) 设置微信申请商户号的appid或者商户号绑定的appid
支付宝、平安填入MerchantId
 * @method integer getTransferType() 获取1、 微信企业付款 
2、 支付宝转账 
3、 平安银企直联代发转账
 * @method void setTransferType(integer $TransferType) 设置1、 微信企业付款 
2、 支付宝转账 
3、 平安银企直联代发转账
 * @method string getOrderId() 获取订单流水号，唯一，不能包含特殊字符，长度最大限制64位，推荐使用字母，数字组合，"_","-"组合
 * @method void setOrderId(string $OrderId) 设置订单流水号，唯一，不能包含特殊字符，长度最大限制64位，推荐使用字母，数字组合，"_","-"组合
 * @method integer getTransferAmount() 获取转账金额，单位分
 * @method void setTransferAmount(integer $TransferAmount) 设置转账金额，单位分
 * @method string getPayeeId() 获取收款方标识。
微信为open_id；
支付宝为会员alipay_user_id;
平安为收款方银行账号
 * @method void setPayeeId(string $PayeeId) 设置收款方标识。
微信为open_id；
支付宝为会员alipay_user_id;
平安为收款方银行账号
 * @method string getPayeeName() 获取收款方姓名。支付宝可选；微信，平安模式下必传
 * @method void setPayeeName(string $PayeeName) 设置收款方姓名。支付宝可选；微信，平安模式下必传
 * @method string getPayeeExtends() 获取收款方附加信息，平安接入使用。需要以JSON格式提供以下字段：
PayeeBankName：收款人开户行名称
 CcyCode：货币类型（RMB-人民币）
 UnionFlag：行内跨行标志（1：行内转账，0：跨行转账）。
 * @method void setPayeeExtends(string $PayeeExtends) 设置收款方附加信息，平安接入使用。需要以JSON格式提供以下字段：
PayeeBankName：收款人开户行名称
 CcyCode：货币类型（RMB-人民币）
 UnionFlag：行内跨行标志（1：行内转账，0：跨行转账）。
 * @method string getReqReserved() 获取请求预留字段，原样透传返回
 * @method void setReqReserved(string $ReqReserved) 设置请求预留字段，原样透传返回
 * @method string getRemark() 获取业务备注
 * @method void setRemark(string $Remark) 设置业务备注
 * @method string getNotifyUrl() 获取转账结果回调通知URL。若不填，则不进行回调。
 * @method void setNotifyUrl(string $NotifyUrl) 设置转账结果回调通知URL。若不填，则不进行回调。
 * @method string getProfile() 获取接入环境。沙箱环境填sandbox。
 * @method void setProfile(string $Profile) 设置接入环境。沙箱环境填sandbox。
 */
class TransferSinglePayRequest extends AbstractModel
{
    /**
     * @var string 商户号
     */
    public $MerchantId;

    /**
     * @var string 微信申请商户号的appid或者商户号绑定的appid
支付宝、平安填入MerchantId
     */
    public $MerchantAppId;

    /**
     * @var integer 1、 微信企业付款 
2、 支付宝转账 
3、 平安银企直联代发转账
     */
    public $TransferType;

    /**
     * @var string 订单流水号，唯一，不能包含特殊字符，长度最大限制64位，推荐使用字母，数字组合，"_","-"组合
     */
    public $OrderId;

    /**
     * @var integer 转账金额，单位分
     */
    public $TransferAmount;

    /**
     * @var string 收款方标识。
微信为open_id；
支付宝为会员alipay_user_id;
平安为收款方银行账号
     */
    public $PayeeId;

    /**
     * @var string 收款方姓名。支付宝可选；微信，平安模式下必传
     */
    public $PayeeName;

    /**
     * @var string 收款方附加信息，平安接入使用。需要以JSON格式提供以下字段：
PayeeBankName：收款人开户行名称
 CcyCode：货币类型（RMB-人民币）
 UnionFlag：行内跨行标志（1：行内转账，0：跨行转账）。
     */
    public $PayeeExtends;

    /**
     * @var string 请求预留字段，原样透传返回
     */
    public $ReqReserved;

    /**
     * @var string 业务备注
     */
    public $Remark;

    /**
     * @var string 转账结果回调通知URL。若不填，则不进行回调。
     */
    public $NotifyUrl;

    /**
     * @var string 接入环境。沙箱环境填sandbox。
     */
    public $Profile;

    /**
     * @param string $MerchantId 商户号
     * @param string $MerchantAppId 微信申请商户号的appid或者商户号绑定的appid
支付宝、平安填入MerchantId
     * @param integer $TransferType 1、 微信企业付款 
2、 支付宝转账 
3、 平安银企直联代发转账
     * @param string $OrderId 订单流水号，唯一，不能包含特殊字符，长度最大限制64位，推荐使用字母，数字组合，"_","-"组合
     * @param integer $TransferAmount 转账金额，单位分
     * @param string $PayeeId 收款方标识。
微信为open_id；
支付宝为会员alipay_user_id;
平安为收款方银行账号
     * @param string $PayeeName 收款方姓名。支付宝可选；微信，平安模式下必传
     * @param string $PayeeExtends 收款方附加信息，平安接入使用。需要以JSON格式提供以下字段：
PayeeBankName：收款人开户行名称
 CcyCode：货币类型（RMB-人民币）
 UnionFlag：行内跨行标志（1：行内转账，0：跨行转账）。
     * @param string $ReqReserved 请求预留字段，原样透传返回
     * @param string $Remark 业务备注
     * @param string $NotifyUrl 转账结果回调通知URL。若不填，则不进行回调。
     * @param string $Profile 接入环境。沙箱环境填sandbox。
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

        if (array_key_exists("MerchantAppId",$param) and $param["MerchantAppId"] !== null) {
            $this->MerchantAppId = $param["MerchantAppId"];
        }

        if (array_key_exists("TransferType",$param) and $param["TransferType"] !== null) {
            $this->TransferType = $param["TransferType"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("TransferAmount",$param) and $param["TransferAmount"] !== null) {
            $this->TransferAmount = $param["TransferAmount"];
        }

        if (array_key_exists("PayeeId",$param) and $param["PayeeId"] !== null) {
            $this->PayeeId = $param["PayeeId"];
        }

        if (array_key_exists("PayeeName",$param) and $param["PayeeName"] !== null) {
            $this->PayeeName = $param["PayeeName"];
        }

        if (array_key_exists("PayeeExtends",$param) and $param["PayeeExtends"] !== null) {
            $this->PayeeExtends = $param["PayeeExtends"];
        }

        if (array_key_exists("ReqReserved",$param) and $param["ReqReserved"] !== null) {
            $this->ReqReserved = $param["ReqReserved"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}
