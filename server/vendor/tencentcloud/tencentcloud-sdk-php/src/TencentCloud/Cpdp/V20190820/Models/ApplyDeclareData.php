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
 * 提交申报材料结果
 *
 * @method string getMerchantId() 获取商户号
 * @method void setMerchantId(string $MerchantId) 设置商户号
 * @method string getTransactionId() 获取第三方指令编号
 * @method void setTransactionId(string $TransactionId) 设置第三方指令编号
 * @method string getStatus() 获取受理状态
 * @method void setStatus(string $Status) 设置受理状态
 * @method string getDeclareId() 获取申报流水号
 * @method void setDeclareId(string $DeclareId) 设置申报流水号
 * @method string getOriginalDeclareId() 获取原申报流水号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginalDeclareId(string $OriginalDeclareId) 设置原申报流水号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayerId() 获取付款人ID
 * @method void setPayerId(string $PayerId) 设置付款人ID
 */
class ApplyDeclareData extends AbstractModel
{
    /**
     * @var string 商户号
     */
    public $MerchantId;

    /**
     * @var string 第三方指令编号
     */
    public $TransactionId;

    /**
     * @var string 受理状态
     */
    public $Status;

    /**
     * @var string 申报流水号
     */
    public $DeclareId;

    /**
     * @var string 原申报流水号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginalDeclareId;

    /**
     * @var string 付款人ID
     */
    public $PayerId;

    /**
     * @param string $MerchantId 商户号
     * @param string $TransactionId 第三方指令编号
     * @param string $Status 受理状态
     * @param string $DeclareId 申报流水号
     * @param string $OriginalDeclareId 原申报流水号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayerId 付款人ID
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

        if (array_key_exists("TransactionId",$param) and $param["TransactionId"] !== null) {
            $this->TransactionId = $param["TransactionId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DeclareId",$param) and $param["DeclareId"] !== null) {
            $this->DeclareId = $param["DeclareId"];
        }

        if (array_key_exists("OriginalDeclareId",$param) and $param["OriginalDeclareId"] !== null) {
            $this->OriginalDeclareId = $param["OriginalDeclareId"];
        }

        if (array_key_exists("PayerId",$param) and $param["PayerId"] !== null) {
            $this->PayerId = $param["PayerId"];
        }
    }
}
