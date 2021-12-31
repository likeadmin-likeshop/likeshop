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
namespace TencentCloud\Btoe\V20210514\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VerifyEvidenceBlockChainTxHash请求参数结构体
 *
 * @method string getEvidenceTxHash() 获取区块链交易 hash，在“存证基本信息查询（GetDepositInfo）”接口中可以获取。
 * @method void setEvidenceTxHash(string $EvidenceTxHash) 设置区块链交易 hash，在“存证基本信息查询（GetDepositInfo）”接口中可以获取。
 */
class VerifyEvidenceBlockChainTxHashRequest extends AbstractModel
{
    /**
     * @var string 区块链交易 hash，在“存证基本信息查询（GetDepositInfo）”接口中可以获取。
     */
    public $EvidenceTxHash;

    /**
     * @param string $EvidenceTxHash 区块链交易 hash，在“存证基本信息查询（GetDepositInfo）”接口中可以获取。
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
        if (array_key_exists("EvidenceTxHash",$param) and $param["EvidenceTxHash"] !== null) {
            $this->EvidenceTxHash = $param["EvidenceTxHash"];
        }
    }
}
