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
 * 商户查询管理端列表
 *
 * @method string getTaxpayerName() 获取企业名称。
 * @method void setTaxpayerName(string $TaxpayerName) 设置企业名称。
 * @method string getTaxpayerNum() 获取纳税人识别号(税号)	。
 * @method void setTaxpayerNum(string $TaxpayerNum) 设置纳税人识别号(税号)	。
 * @method string getSerialNo() 获取请求流水号。
 * @method void setSerialNo(string $SerialNo) 设置请求流水号。
 * @method integer getInvoicePlatformId() 获取开票系统ID
 * @method void setInvoicePlatformId(integer $InvoicePlatformId) 设置开票系统ID
 */
class MerchantManagementList extends AbstractModel
{
    /**
     * @var string 企业名称。
     */
    public $TaxpayerName;

    /**
     * @var string 纳税人识别号(税号)	。
     */
    public $TaxpayerNum;

    /**
     * @var string 请求流水号。
     */
    public $SerialNo;

    /**
     * @var integer 开票系统ID
     */
    public $InvoicePlatformId;

    /**
     * @param string $TaxpayerName 企业名称。
     * @param string $TaxpayerNum 纳税人识别号(税号)	。
     * @param string $SerialNo 请求流水号。
     * @param integer $InvoicePlatformId 开票系统ID
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
        if (array_key_exists("TaxpayerName",$param) and $param["TaxpayerName"] !== null) {
            $this->TaxpayerName = $param["TaxpayerName"];
        }

        if (array_key_exists("TaxpayerNum",$param) and $param["TaxpayerNum"] !== null) {
            $this->TaxpayerNum = $param["TaxpayerNum"];
        }

        if (array_key_exists("SerialNo",$param) and $param["SerialNo"] !== null) {
            $this->SerialNo = $param["SerialNo"];
        }

        if (array_key_exists("InvoicePlatformId",$param) and $param["InvoicePlatformId"] !== null) {
            $this->InvoicePlatformId = $param["InvoicePlatformId"];
        }
    }
}
