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
 * QueryInvoiceV2返回参数结构体
 *
 * @method QueryInvoiceResultData getResult() 获取发票查询结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(QueryInvoiceResultData $Result) 设置发票查询结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrCode() 获取错误码
 * @method void setErrCode(string $ErrCode) 设置错误码
 * @method string getErrMessage() 获取错误消息
 * @method void setErrMessage(string $ErrMessage) 设置错误消息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class QueryInvoiceV2Response extends AbstractModel
{
    /**
     * @var QueryInvoiceResultData 发票查询结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @var string 错误码
     */
    public $ErrCode;

    /**
     * @var string 错误消息
     */
    public $ErrMessage;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param QueryInvoiceResultData $Result 发票查询结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrCode 错误码
     * @param string $ErrMessage 错误消息
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = new QueryInvoiceResultData();
            $this->Result->deserialize($param["Result"]);
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrMessage",$param) and $param["ErrMessage"] !== null) {
            $this->ErrMessage = $param["ErrMessage"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
