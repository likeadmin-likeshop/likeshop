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
 * 创建商户结果数据
 *
 * @method string getTaxpayerName() 获取企业名称
 * @method void setTaxpayerName(string $TaxpayerName) 设置企业名称
 * @method string getSerialNo() 获取请求流水号
 * @method void setSerialNo(string $SerialNo) 设置请求流水号
 * @method string getTaxpayerNum() 获取纳税号
 * @method void setTaxpayerNum(string $TaxpayerNum) 设置纳税号
 */
class CreateMerchantResultData extends AbstractModel
{
    /**
     * @var string 企业名称
     */
    public $TaxpayerName;

    /**
     * @var string 请求流水号
     */
    public $SerialNo;

    /**
     * @var string 纳税号
     */
    public $TaxpayerNum;

    /**
     * @param string $TaxpayerName 企业名称
     * @param string $SerialNo 请求流水号
     * @param string $TaxpayerNum 纳税号
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

        if (array_key_exists("SerialNo",$param) and $param["SerialNo"] !== null) {
            $this->SerialNo = $param["SerialNo"];
        }

        if (array_key_exists("TaxpayerNum",$param) and $param["TaxpayerNum"] !== null) {
            $this->TaxpayerNum = $param["TaxpayerNum"];
        }
    }
}
