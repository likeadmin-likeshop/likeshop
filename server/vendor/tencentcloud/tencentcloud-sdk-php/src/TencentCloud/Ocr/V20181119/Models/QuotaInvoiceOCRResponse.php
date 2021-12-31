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
 * QuotaInvoiceOCR返回参数结构体
 *
 * @method string getInvoiceNum() 获取发票号码
 * @method void setInvoiceNum(string $InvoiceNum) 设置发票号码
 * @method string getInvoiceCode() 获取发票代码
 * @method void setInvoiceCode(string $InvoiceCode) 设置发票代码
 * @method string getRate() 获取大写金额
 * @method void setRate(string $Rate) 设置大写金额
 * @method string getRateNum() 获取小写金额
 * @method void setRateNum(string $RateNum) 设置小写金额
 * @method string getInvoiceType() 获取发票消费类型
 * @method void setInvoiceType(string $InvoiceType) 设置发票消费类型
 * @method string getProvince() 获取省
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProvince(string $Province) 设置省
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCity() 获取市
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCity(string $City) 设置市
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHasStamp() 获取是否有公司印章（1有 0无 空为识别不出）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasStamp(string $HasStamp) 设置是否有公司印章（1有 0无 空为识别不出）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class QuotaInvoiceOCRResponse extends AbstractModel
{
    /**
     * @var string 发票号码
     */
    public $InvoiceNum;

    /**
     * @var string 发票代码
     */
    public $InvoiceCode;

    /**
     * @var string 大写金额
     */
    public $Rate;

    /**
     * @var string 小写金额
     */
    public $RateNum;

    /**
     * @var string 发票消费类型
     */
    public $InvoiceType;

    /**
     * @var string 省
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Province;

    /**
     * @var string 市
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $City;

    /**
     * @var string 是否有公司印章（1有 0无 空为识别不出）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasStamp;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InvoiceNum 发票号码
     * @param string $InvoiceCode 发票代码
     * @param string $Rate 大写金额
     * @param string $RateNum 小写金额
     * @param string $InvoiceType 发票消费类型
     * @param string $Province 省
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $City 市
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HasStamp 是否有公司印章（1有 0无 空为识别不出）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("InvoiceNum",$param) and $param["InvoiceNum"] !== null) {
            $this->InvoiceNum = $param["InvoiceNum"];
        }

        if (array_key_exists("InvoiceCode",$param) and $param["InvoiceCode"] !== null) {
            $this->InvoiceCode = $param["InvoiceCode"];
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("RateNum",$param) and $param["RateNum"] !== null) {
            $this->RateNum = $param["RateNum"];
        }

        if (array_key_exists("InvoiceType",$param) and $param["InvoiceType"] !== null) {
            $this->InvoiceType = $param["InvoiceType"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("HasStamp",$param) and $param["HasStamp"] !== null) {
            $this->HasStamp = $param["HasStamp"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
