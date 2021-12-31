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
 * 批量转账查询返回批次明细实体
 *
 * @method string getMerchantDetailNo() 获取商家明细单号。
商户系统内部的商家明细单号
示例值：plfk2020042013
 * @method void setMerchantDetailNo(string $MerchantDetailNo) 设置商家明细单号。
商户系统内部的商家明细单号
示例值：plfk2020042013
 * @method string getDetailId() 获取微信明细单号。
微信区分明细单返回的唯一标识。
示例值：1030000071100999991182020050700019480001
 * @method void setDetailId(string $DetailId) 设置微信明细单号。
微信区分明细单返回的唯一标识。
示例值：1030000071100999991182020050700019480001
 * @method string getDetailStatus() 获取明细状态。
PROCESSING：转账中，正在处理，结果未明；
SUCCESS：转账成功；
FAIL：转账失败，需要确认失败原因以后，再决定是否重新发起地该笔明细的转账。
示例值：SUCCESS
 * @method void setDetailStatus(string $DetailStatus) 设置明细状态。
PROCESSING：转账中，正在处理，结果未明；
SUCCESS：转账成功；
FAIL：转账失败，需要确认失败原因以后，再决定是否重新发起地该笔明细的转账。
示例值：SUCCESS
 */
class TransferDetailResponse extends AbstractModel
{
    /**
     * @var string 商家明细单号。
商户系统内部的商家明细单号
示例值：plfk2020042013
     */
    public $MerchantDetailNo;

    /**
     * @var string 微信明细单号。
微信区分明细单返回的唯一标识。
示例值：1030000071100999991182020050700019480001
     */
    public $DetailId;

    /**
     * @var string 明细状态。
PROCESSING：转账中，正在处理，结果未明；
SUCCESS：转账成功；
FAIL：转账失败，需要确认失败原因以后，再决定是否重新发起地该笔明细的转账。
示例值：SUCCESS
     */
    public $DetailStatus;

    /**
     * @param string $MerchantDetailNo 商家明细单号。
商户系统内部的商家明细单号
示例值：plfk2020042013
     * @param string $DetailId 微信明细单号。
微信区分明细单返回的唯一标识。
示例值：1030000071100999991182020050700019480001
     * @param string $DetailStatus 明细状态。
PROCESSING：转账中，正在处理，结果未明；
SUCCESS：转账成功；
FAIL：转账失败，需要确认失败原因以后，再决定是否重新发起地该笔明细的转账。
示例值：SUCCESS
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
        if (array_key_exists("MerchantDetailNo",$param) and $param["MerchantDetailNo"] !== null) {
            $this->MerchantDetailNo = $param["MerchantDetailNo"];
        }

        if (array_key_exists("DetailId",$param) and $param["DetailId"] !== null) {
            $this->DetailId = $param["DetailId"];
        }

        if (array_key_exists("DetailStatus",$param) and $param["DetailStatus"] !== null) {
            $this->DetailStatus = $param["DetailStatus"];
        }
    }
}
