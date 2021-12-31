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
 * 交易列表项信息
 *
 * @method string getTransactionId() 获取交易ID
 * @method void setTransactionId(string $TransactionId) 设置交易ID
 * @method string getTransactionHash() 获取交易hash
 * @method void setTransactionHash(string $TransactionHash) 设置交易hash
 * @method string getCreateOrgName() 获取创建交易的组织名
 * @method void setCreateOrgName(string $CreateOrgName) 设置创建交易的组织名
 * @method integer getBlockId() 获取交易所在区块号
 * @method void setBlockId(integer $BlockId) 设置交易所在区块号
 * @method string getTransactionType() 获取交易类型（普通交易和配置交易）
 * @method void setTransactionType(string $TransactionType) 设置交易类型（普通交易和配置交易）
 * @method string getCreateTime() 获取交易创建时间
 * @method void setCreateTime(string $CreateTime) 设置交易创建时间
 * @method integer getBlockHeight() 获取交易所在区块高度
 * @method void setBlockHeight(integer $BlockHeight) 设置交易所在区块高度
 * @method string getTransactionStatus() 获取交易状态
 * @method void setTransactionStatus(string $TransactionStatus) 设置交易状态
 */
class TransactionItem extends AbstractModel
{
    /**
     * @var string 交易ID
     */
    public $TransactionId;

    /**
     * @var string 交易hash
     */
    public $TransactionHash;

    /**
     * @var string 创建交易的组织名
     */
    public $CreateOrgName;

    /**
     * @var integer 交易所在区块号
     */
    public $BlockId;

    /**
     * @var string 交易类型（普通交易和配置交易）
     */
    public $TransactionType;

    /**
     * @var string 交易创建时间
     */
    public $CreateTime;

    /**
     * @var integer 交易所在区块高度
     */
    public $BlockHeight;

    /**
     * @var string 交易状态
     */
    public $TransactionStatus;

    /**
     * @param string $TransactionId 交易ID
     * @param string $TransactionHash 交易hash
     * @param string $CreateOrgName 创建交易的组织名
     * @param integer $BlockId 交易所在区块号
     * @param string $TransactionType 交易类型（普通交易和配置交易）
     * @param string $CreateTime 交易创建时间
     * @param integer $BlockHeight 交易所在区块高度
     * @param string $TransactionStatus 交易状态
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
        if (array_key_exists("TransactionId",$param) and $param["TransactionId"] !== null) {
            $this->TransactionId = $param["TransactionId"];
        }

        if (array_key_exists("TransactionHash",$param) and $param["TransactionHash"] !== null) {
            $this->TransactionHash = $param["TransactionHash"];
        }

        if (array_key_exists("CreateOrgName",$param) and $param["CreateOrgName"] !== null) {
            $this->CreateOrgName = $param["CreateOrgName"];
        }

        if (array_key_exists("BlockId",$param) and $param["BlockId"] !== null) {
            $this->BlockId = $param["BlockId"];
        }

        if (array_key_exists("TransactionType",$param) and $param["TransactionType"] !== null) {
            $this->TransactionType = $param["TransactionType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BlockHeight",$param) and $param["BlockHeight"] !== null) {
            $this->BlockHeight = $param["BlockHeight"];
        }

        if (array_key_exists("TransactionStatus",$param) and $param["TransactionStatus"] !== null) {
            $this->TransactionStatus = $param["TransactionStatus"];
        }
    }
}
