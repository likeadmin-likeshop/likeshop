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
 * VatInvoiceVerify请求参数结构体
 *
 * @method string getInvoiceCode() 获取发票代码， 一张发票一天只能查询5次。
 * @method void setInvoiceCode(string $InvoiceCode) 设置发票代码， 一张发票一天只能查询5次。
 * @method string getInvoiceNo() 获取发票号码（8位）。
 * @method void setInvoiceNo(string $InvoiceNo) 设置发票号码（8位）。
 * @method string getInvoiceDate() 获取开票日期（不支持当天发票查询，只支持一年以内），如：2019-12-20。
 * @method void setInvoiceDate(string $InvoiceDate) 设置开票日期（不支持当天发票查询，只支持一年以内），如：2019-12-20。
 * @method string getAdditional() 获取金额/发票校验码后6位（根据票种传递对应值，如果报参数错误，请仔细检查每个票种对应的值）
增值税专用发票：开具金额（不含税）
增值税普通发票、增值税电子普通发票（含通行费发票）、增值税普通发票（卷票）：校验码后6位
机动车销售统一发票：不含税价
货物运输业增值税专用发票：合计金额
二手车销售统一发票：车价合计
 * @method void setAdditional(string $Additional) 设置金额/发票校验码后6位（根据票种传递对应值，如果报参数错误，请仔细检查每个票种对应的值）
增值税专用发票：开具金额（不含税）
增值税普通发票、增值税电子普通发票（含通行费发票）、增值税普通发票（卷票）：校验码后6位
机动车销售统一发票：不含税价
货物运输业增值税专用发票：合计金额
二手车销售统一发票：车价合计
 */
class VatInvoiceVerifyRequest extends AbstractModel
{
    /**
     * @var string 发票代码， 一张发票一天只能查询5次。
     */
    public $InvoiceCode;

    /**
     * @var string 发票号码（8位）。
     */
    public $InvoiceNo;

    /**
     * @var string 开票日期（不支持当天发票查询，只支持一年以内），如：2019-12-20。
     */
    public $InvoiceDate;

    /**
     * @var string 金额/发票校验码后6位（根据票种传递对应值，如果报参数错误，请仔细检查每个票种对应的值）
增值税专用发票：开具金额（不含税）
增值税普通发票、增值税电子普通发票（含通行费发票）、增值税普通发票（卷票）：校验码后6位
机动车销售统一发票：不含税价
货物运输业增值税专用发票：合计金额
二手车销售统一发票：车价合计
     */
    public $Additional;

    /**
     * @param string $InvoiceCode 发票代码， 一张发票一天只能查询5次。
     * @param string $InvoiceNo 发票号码（8位）。
     * @param string $InvoiceDate 开票日期（不支持当天发票查询，只支持一年以内），如：2019-12-20。
     * @param string $Additional 金额/发票校验码后6位（根据票种传递对应值，如果报参数错误，请仔细检查每个票种对应的值）
增值税专用发票：开具金额（不含税）
增值税普通发票、增值税电子普通发票（含通行费发票）、增值税普通发票（卷票）：校验码后6位
机动车销售统一发票：不含税价
货物运输业增值税专用发票：合计金额
二手车销售统一发票：车价合计
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
        if (array_key_exists("InvoiceCode",$param) and $param["InvoiceCode"] !== null) {
            $this->InvoiceCode = $param["InvoiceCode"];
        }

        if (array_key_exists("InvoiceNo",$param) and $param["InvoiceNo"] !== null) {
            $this->InvoiceNo = $param["InvoiceNo"];
        }

        if (array_key_exists("InvoiceDate",$param) and $param["InvoiceDate"] !== null) {
            $this->InvoiceDate = $param["InvoiceDate"];
        }

        if (array_key_exists("Additional",$param) and $param["Additional"] !== null) {
            $this->Additional = $param["Additional"];
        }
    }
}
