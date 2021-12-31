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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发票人员信息
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getTaxId() 获取纳税人识别号
 * @method void setTaxId(string $TaxId) 设置纳税人识别号
 * @method string getAddrTel() 获取地 址、电 话
 * @method void setAddrTel(string $AddrTel) 设置地 址、电 话
 * @method string getFinancialAccount() 获取开户行及账号
 * @method void setFinancialAccount(string $FinancialAccount) 设置开户行及账号
 */
class VatInvoiceUserInfo extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 纳税人识别号
     */
    public $TaxId;

    /**
     * @var string 地 址、电 话
     */
    public $AddrTel;

    /**
     * @var string 开户行及账号
     */
    public $FinancialAccount;

    /**
     * @param string $Name 名称
     * @param string $TaxId 纳税人识别号
     * @param string $AddrTel 地 址、电 话
     * @param string $FinancialAccount 开户行及账号
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TaxId",$param) and $param["TaxId"] !== null) {
            $this->TaxId = $param["TaxId"];
        }

        if (array_key_exists("AddrTel",$param) and $param["AddrTel"] !== null) {
            $this->AddrTel = $param["AddrTel"];
        }

        if (array_key_exists("FinancialAccount",$param) and $param["FinancialAccount"] !== null) {
            $this->FinancialAccount = $param["FinancialAccount"];
        }
    }
}
