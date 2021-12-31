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
 * QueryBillDownloadURL请求参数结构体
 *
 * @method string getMerchantId() 获取商户号
 * @method void setMerchantId(string $MerchantId) 设置商户号
 * @method integer getTransferType() 获取代发类型：
1、 微信企业付款 
2、 支付宝转账 
3、 平安银企直联代发转账
 * @method void setTransferType(integer $TransferType) 设置代发类型：
1、 微信企业付款 
2、 支付宝转账 
3、 平安银企直联代发转账
 * @method string getBillDate() 获取账单日期，格式yyyy-MM-dd
 * @method void setBillDate(string $BillDate) 设置账单日期，格式yyyy-MM-dd
 */
class QueryBillDownloadURLRequest extends AbstractModel
{
    /**
     * @var string 商户号
     */
    public $MerchantId;

    /**
     * @var integer 代发类型：
1、 微信企业付款 
2、 支付宝转账 
3、 平安银企直联代发转账
     */
    public $TransferType;

    /**
     * @var string 账单日期，格式yyyy-MM-dd
     */
    public $BillDate;

    /**
     * @param string $MerchantId 商户号
     * @param integer $TransferType 代发类型：
1、 微信企业付款 
2、 支付宝转账 
3、 平安银企直联代发转账
     * @param string $BillDate 账单日期，格式yyyy-MM-dd
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

        if (array_key_exists("TransferType",$param) and $param["TransferType"] !== null) {
            $this->TransferType = $param["TransferType"];
        }

        if (array_key_exists("BillDate",$param) and $param["BillDate"] !== null) {
            $this->BillDate = $param["BillDate"];
        }
    }
}
