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
namespace TencentCloud\Tbaas\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetInvokeTx返回参数结构体
 *
 * @method integer getTxValidationCode() 获取交易执行状态码
 * @method void setTxValidationCode(integer $TxValidationCode) 设置交易执行状态码
 * @method string getTxValidationMsg() 获取交易执行消息
 * @method void setTxValidationMsg(string $TxValidationMsg) 设置交易执行消息
 * @method integer getBlockId() 获取交易所在区块ID
 * @method void setBlockId(integer $BlockId) 设置交易所在区块ID
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetInvokeTxResponse extends AbstractModel
{
    /**
     * @var integer 交易执行状态码
     */
    public $TxValidationCode;

    /**
     * @var string 交易执行消息
     */
    public $TxValidationMsg;

    /**
     * @var integer 交易所在区块ID
     */
    public $BlockId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TxValidationCode 交易执行状态码
     * @param string $TxValidationMsg 交易执行消息
     * @param integer $BlockId 交易所在区块ID
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
        if (array_key_exists("TxValidationCode",$param) and $param["TxValidationCode"] !== null) {
            $this->TxValidationCode = $param["TxValidationCode"];
        }

        if (array_key_exists("TxValidationMsg",$param) and $param["TxValidationMsg"] !== null) {
            $this->TxValidationMsg = $param["TxValidationMsg"];
        }

        if (array_key_exists("BlockId",$param) and $param["BlockId"] !== null) {
            $this->BlockId = $param["BlockId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
