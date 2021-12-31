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
 * QueryTransferDetail请求参数结构体
 *
 * @method string getMerchantId() 获取商户号。
示例值：129284394
 * @method void setMerchantId(string $MerchantId) 设置商户号。
示例值：129284394
 * @method string getMerchantBatchNo() 获取商家批次单号。
商户系统内部的商家批次单号，此参数只能由数字、字母组成，商户系统内部唯一，UTF8编码，最多32个字符。
示例值：plfk2020042013
 * @method void setMerchantBatchNo(string $MerchantBatchNo) 设置商家批次单号。
商户系统内部的商家批次单号，此参数只能由数字、字母组成，商户系统内部唯一，UTF8编码，最多32个字符。
示例值：plfk2020042013
 * @method string getMerchantDetailNo() 获取商家明细单号。
商户系统内部的商家明细单号
示例值：plfk2020042013
 * @method void setMerchantDetailNo(string $MerchantDetailNo) 设置商家明细单号。
商户系统内部的商家明细单号
示例值：plfk2020042013
 * @method string getBatchId() 获取微信批次单号。
微信商家转账系统返回的唯一标识。
商家单号（包含批次号和明细单号）和微信单号（包含批次号和明细单号）二者必填其一。
示例值：1030000071100999991182020050700019480001
 * @method void setBatchId(string $BatchId) 设置微信批次单号。
微信商家转账系统返回的唯一标识。
商家单号（包含批次号和明细单号）和微信单号（包含批次号和明细单号）二者必填其一。
示例值：1030000071100999991182020050700019480001
 * @method string getDetailId() 获取微信明细单号。
微信区分明细单返回的唯一标识。
示例值：1030000071100999991182020050700019480001
 * @method void setDetailId(string $DetailId) 设置微信明细单号。
微信区分明细单返回的唯一标识。
示例值：1030000071100999991182020050700019480001
 * @method string getProfile() 获取环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
 * @method void setProfile(string $Profile) 设置环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
 */
class QueryTransferDetailRequest extends AbstractModel
{
    /**
     * @var string 商户号。
示例值：129284394
     */
    public $MerchantId;

    /**
     * @var string 商家批次单号。
商户系统内部的商家批次单号，此参数只能由数字、字母组成，商户系统内部唯一，UTF8编码，最多32个字符。
示例值：plfk2020042013
     */
    public $MerchantBatchNo;

    /**
     * @var string 商家明细单号。
商户系统内部的商家明细单号
示例值：plfk2020042013
     */
    public $MerchantDetailNo;

    /**
     * @var string 微信批次单号。
微信商家转账系统返回的唯一标识。
商家单号（包含批次号和明细单号）和微信单号（包含批次号和明细单号）二者必填其一。
示例值：1030000071100999991182020050700019480001
     */
    public $BatchId;

    /**
     * @var string 微信明细单号。
微信区分明细单返回的唯一标识。
示例值：1030000071100999991182020050700019480001
     */
    public $DetailId;

    /**
     * @var string 环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
     */
    public $Profile;

    /**
     * @param string $MerchantId 商户号。
示例值：129284394
     * @param string $MerchantBatchNo 商家批次单号。
商户系统内部的商家批次单号，此参数只能由数字、字母组成，商户系统内部唯一，UTF8编码，最多32个字符。
示例值：plfk2020042013
     * @param string $MerchantDetailNo 商家明细单号。
商户系统内部的商家明细单号
示例值：plfk2020042013
     * @param string $BatchId 微信批次单号。
微信商家转账系统返回的唯一标识。
商家单号（包含批次号和明细单号）和微信单号（包含批次号和明细单号）二者必填其一。
示例值：1030000071100999991182020050700019480001
     * @param string $DetailId 微信明细单号。
微信区分明细单返回的唯一标识。
示例值：1030000071100999991182020050700019480001
     * @param string $Profile 环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
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

        if (array_key_exists("MerchantBatchNo",$param) and $param["MerchantBatchNo"] !== null) {
            $this->MerchantBatchNo = $param["MerchantBatchNo"];
        }

        if (array_key_exists("MerchantDetailNo",$param) and $param["MerchantDetailNo"] !== null) {
            $this->MerchantDetailNo = $param["MerchantDetailNo"];
        }

        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }

        if (array_key_exists("DetailId",$param) and $param["DetailId"] !== null) {
            $this->DetailId = $param["DetailId"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}
