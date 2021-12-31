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
 * 银企直连-单笔支付响应结果
 *
 * @method string getHandleStatus() 获取受理状态（S：处理成功；F：处理失败）
 * @method void setHandleStatus(string $HandleStatus) 设置受理状态（S：处理成功；F：处理失败）
 * @method string getHandleMsg() 获取受理状态描述
 * @method void setHandleMsg(string $HandleMsg) 设置受理状态描述
 * @method string getSerialNo() 获取业务流水号，历史唯一
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSerialNo(string $SerialNo) 设置业务流水号，历史唯一
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBankSerialNo() 获取银行指令流水
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBankSerialNo(string $BankSerialNo) 设置银行指令流水
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayStatus() 获取付款状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayStatus(string $PayStatus) 设置付款状态
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
class CreateSinglePayResult extends AbstractModel
{
    /**
     * @var string 受理状态（S：处理成功；F：处理失败）
     */
    public $HandleStatus;

    /**
     * @var string 受理状态描述
     */
    public $HandleMsg;

    /**
     * @var string 业务流水号，历史唯一
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SerialNo;

    /**
     * @var string 银行指令流水
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BankSerialNo;

    /**
     * @var string 付款状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayStatus;

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
     * @param string $HandleStatus 受理状态（S：处理成功；F：处理失败）
     * @param string $HandleMsg 受理状态描述
     * @param string $SerialNo 业务流水号，历史唯一
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BankSerialNo 银行指令流水
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayStatus 付款状态
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
        if (array_key_exists("HandleStatus",$param) and $param["HandleStatus"] !== null) {
            $this->HandleStatus = $param["HandleStatus"];
        }

        if (array_key_exists("HandleMsg",$param) and $param["HandleMsg"] !== null) {
            $this->HandleMsg = $param["HandleMsg"];
        }

        if (array_key_exists("SerialNo",$param) and $param["SerialNo"] !== null) {
            $this->SerialNo = $param["SerialNo"];
        }

        if (array_key_exists("BankSerialNo",$param) and $param["BankSerialNo"] !== null) {
            $this->BankSerialNo = $param["BankSerialNo"];
        }

        if (array_key_exists("PayStatus",$param) and $param["PayStatus"] !== null) {
            $this->PayStatus = $param["PayStatus"];
        }

        if (array_key_exists("BankRetCode",$param) and $param["BankRetCode"] !== null) {
            $this->BankRetCode = $param["BankRetCode"];
        }

        if (array_key_exists("BankRetMsg",$param) and $param["BankRetMsg"] !== null) {
            $this->BankRetMsg = $param["BankRetMsg"];
        }
    }
}
