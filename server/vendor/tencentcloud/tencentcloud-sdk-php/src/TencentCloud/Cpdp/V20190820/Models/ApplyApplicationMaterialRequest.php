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
 * ApplyApplicationMaterial请求参数结构体
 *
 * @method string getTransactionId() 获取对接方汇出指令编号
 * @method void setTransactionId(string $TransactionId) 设置对接方汇出指令编号
 * @method string getDeclareId() 获取申报流水号
 * @method void setDeclareId(string $DeclareId) 设置申报流水号
 * @method string getPayerId() 获取付款人ID
 * @method void setPayerId(string $PayerId) 设置付款人ID
 * @method string getSourceCurrency() 获取源币种
 * @method void setSourceCurrency(string $SourceCurrency) 设置源币种
 * @method string getTargetCurrency() 获取目的币种
 * @method void setTargetCurrency(string $TargetCurrency) 设置目的币种
 * @method string getTradeCode() 获取贸易编码
 * @method void setTradeCode(string $TradeCode) 设置贸易编码
 * @method string getOriginalDeclareId() 获取原申报流水号
 * @method void setOriginalDeclareId(string $OriginalDeclareId) 设置原申报流水号
 * @method integer getSourceAmount() 获取源金额
 * @method void setSourceAmount(integer $SourceAmount) 设置源金额
 * @method integer getTargetAmount() 获取目的金额
 * @method void setTargetAmount(integer $TargetAmount) 设置目的金额
 * @method string getProfile() 获取接入环境。沙箱环境填sandbox
 * @method void setProfile(string $Profile) 设置接入环境。沙箱环境填sandbox
 */
class ApplyApplicationMaterialRequest extends AbstractModel
{
    /**
     * @var string 对接方汇出指令编号
     */
    public $TransactionId;

    /**
     * @var string 申报流水号
     */
    public $DeclareId;

    /**
     * @var string 付款人ID
     */
    public $PayerId;

    /**
     * @var string 源币种
     */
    public $SourceCurrency;

    /**
     * @var string 目的币种
     */
    public $TargetCurrency;

    /**
     * @var string 贸易编码
     */
    public $TradeCode;

    /**
     * @var string 原申报流水号
     */
    public $OriginalDeclareId;

    /**
     * @var integer 源金额
     */
    public $SourceAmount;

    /**
     * @var integer 目的金额
     */
    public $TargetAmount;

    /**
     * @var string 接入环境。沙箱环境填sandbox
     */
    public $Profile;

    /**
     * @param string $TransactionId 对接方汇出指令编号
     * @param string $DeclareId 申报流水号
     * @param string $PayerId 付款人ID
     * @param string $SourceCurrency 源币种
     * @param string $TargetCurrency 目的币种
     * @param string $TradeCode 贸易编码
     * @param string $OriginalDeclareId 原申报流水号
     * @param integer $SourceAmount 源金额
     * @param integer $TargetAmount 目的金额
     * @param string $Profile 接入环境。沙箱环境填sandbox
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
        if (array_key_exists("TransactionId",$param) and $param["TransactionId"] !== null) {
            $this->TransactionId = $param["TransactionId"];
        }

        if (array_key_exists("DeclareId",$param) and $param["DeclareId"] !== null) {
            $this->DeclareId = $param["DeclareId"];
        }

        if (array_key_exists("PayerId",$param) and $param["PayerId"] !== null) {
            $this->PayerId = $param["PayerId"];
        }

        if (array_key_exists("SourceCurrency",$param) and $param["SourceCurrency"] !== null) {
            $this->SourceCurrency = $param["SourceCurrency"];
        }

        if (array_key_exists("TargetCurrency",$param) and $param["TargetCurrency"] !== null) {
            $this->TargetCurrency = $param["TargetCurrency"];
        }

        if (array_key_exists("TradeCode",$param) and $param["TradeCode"] !== null) {
            $this->TradeCode = $param["TradeCode"];
        }

        if (array_key_exists("OriginalDeclareId",$param) and $param["OriginalDeclareId"] !== null) {
            $this->OriginalDeclareId = $param["OriginalDeclareId"];
        }

        if (array_key_exists("SourceAmount",$param) and $param["SourceAmount"] !== null) {
            $this->SourceAmount = $param["SourceAmount"];
        }

        if (array_key_exists("TargetAmount",$param) and $param["TargetAmount"] !== null) {
            $this->TargetAmount = $param["TargetAmount"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}
