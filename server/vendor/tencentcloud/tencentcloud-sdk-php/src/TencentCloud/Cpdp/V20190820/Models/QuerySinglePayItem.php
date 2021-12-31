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
 * 银企直连-查询单笔支付状态条目
 *
 * @method string getPayStatus() 获取付款状态（S：支付成功；P：支付处理中；F：支付失败）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayStatus(string $PayStatus) 设置付款状态（S：支付成功；P：支付处理中；F：支付失败）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPlatformMsg() 获取平台信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlatformMsg(string $PlatformMsg) 设置平台信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBankRetCode() 获取银行原始返回码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBankRetCode(string $BankRetCode) 设置银行原始返回码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBankRetMsg() 获取银行原始返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBankRetMsg(string $BankRetMsg) 设置银行原始返回
注意：此字段可能返回 null，表示取不到有效值。
 */
class QuerySinglePayItem extends AbstractModel
{
    /**
     * @var string 付款状态（S：支付成功；P：支付处理中；F：支付失败）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayStatus;

    /**
     * @var string 平台信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlatformMsg;

    /**
     * @var string 银行原始返回码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BankRetCode;

    /**
     * @var string 银行原始返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BankRetMsg;

    /**
     * @param string $PayStatus 付款状态（S：支付成功；P：支付处理中；F：支付失败）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PlatformMsg 平台信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BankRetCode 银行原始返回码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BankRetMsg 银行原始返回
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("PayStatus",$param) and $param["PayStatus"] !== null) {
            $this->PayStatus = $param["PayStatus"];
        }

        if (array_key_exists("PlatformMsg",$param) and $param["PlatformMsg"] !== null) {
            $this->PlatformMsg = $param["PlatformMsg"];
        }

        if (array_key_exists("BankRetCode",$param) and $param["BankRetCode"] !== null) {
            $this->BankRetCode = $param["BankRetCode"];
        }

        if (array_key_exists("BankRetMsg",$param) and $param["BankRetMsg"] !== null) {
            $this->BankRetMsg = $param["BankRetMsg"];
        }
    }
}
