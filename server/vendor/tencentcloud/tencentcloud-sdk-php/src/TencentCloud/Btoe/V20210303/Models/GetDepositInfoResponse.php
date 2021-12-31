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
namespace TencentCloud\Btoe\V20210303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetDepositInfo返回参数结构体
 *
 * @method string getEvidenceId() 获取存证编号
 * @method void setEvidenceId(string $EvidenceId) 设置存证编号
 * @method string getEvidenceTime() 获取上链时间
 * @method void setEvidenceTime(string $EvidenceTime) 设置上链时间
 * @method string getEvidenceTxHash() 获取区块链交易哈希
 * @method void setEvidenceTxHash(string $EvidenceTxHash) 设置区块链交易哈希
 * @method integer getBlockchainHeight() 获取区块高度
 * @method void setBlockchainHeight(integer $BlockchainHeight) 设置区块高度
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetDepositInfoResponse extends AbstractModel
{
    /**
     * @var string 存证编号
     */
    public $EvidenceId;

    /**
     * @var string 上链时间
     */
    public $EvidenceTime;

    /**
     * @var string 区块链交易哈希
     */
    public $EvidenceTxHash;

    /**
     * @var integer 区块高度
     */
    public $BlockchainHeight;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $EvidenceId 存证编号
     * @param string $EvidenceTime 上链时间
     * @param string $EvidenceTxHash 区块链交易哈希
     * @param integer $BlockchainHeight 区块高度
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
        if (array_key_exists("EvidenceId",$param) and $param["EvidenceId"] !== null) {
            $this->EvidenceId = $param["EvidenceId"];
        }

        if (array_key_exists("EvidenceTime",$param) and $param["EvidenceTime"] !== null) {
            $this->EvidenceTime = $param["EvidenceTime"];
        }

        if (array_key_exists("EvidenceTxHash",$param) and $param["EvidenceTxHash"] !== null) {
            $this->EvidenceTxHash = $param["EvidenceTxHash"];
        }

        if (array_key_exists("BlockchainHeight",$param) and $param["BlockchainHeight"] !== null) {
            $this->BlockchainHeight = $param["BlockchainHeight"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
