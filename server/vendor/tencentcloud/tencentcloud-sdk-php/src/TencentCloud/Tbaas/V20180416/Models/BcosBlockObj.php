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
 * Bcos区块对象
 *
 * @method string getBlockHash() 获取区块哈希
 * @method void setBlockHash(string $BlockHash) 设置区块哈希
 * @method integer getBlockNumber() 获取区块高度
 * @method void setBlockNumber(integer $BlockNumber) 设置区块高度
 * @method string getBlockTimestamp() 获取区块时间戳
 * @method void setBlockTimestamp(string $BlockTimestamp) 设置区块时间戳
 * @method string getSealer() 获取打包节点ID
 * @method void setSealer(string $Sealer) 设置打包节点ID
 * @method integer getSealerIndex() 获取打包节点索引
 * @method void setSealerIndex(integer $SealerIndex) 设置打包节点索引
 * @method string getCreateTime() 获取记录保存时间
 * @method void setCreateTime(string $CreateTime) 设置记录保存时间
 * @method integer getTransCount() 获取交易数量
 * @method void setTransCount(integer $TransCount) 设置交易数量
 * @method string getModifyTime() 获取记录修改时间
 * @method void setModifyTime(string $ModifyTime) 设置记录修改时间
 */
class BcosBlockObj extends AbstractModel
{
    /**
     * @var string 区块哈希
     */
    public $BlockHash;

    /**
     * @var integer 区块高度
     */
    public $BlockNumber;

    /**
     * @var string 区块时间戳
     */
    public $BlockTimestamp;

    /**
     * @var string 打包节点ID
     */
    public $Sealer;

    /**
     * @var integer 打包节点索引
     */
    public $SealerIndex;

    /**
     * @var string 记录保存时间
     */
    public $CreateTime;

    /**
     * @var integer 交易数量
     */
    public $TransCount;

    /**
     * @var string 记录修改时间
     */
    public $ModifyTime;

    /**
     * @param string $BlockHash 区块哈希
     * @param integer $BlockNumber 区块高度
     * @param string $BlockTimestamp 区块时间戳
     * @param string $Sealer 打包节点ID
     * @param integer $SealerIndex 打包节点索引
     * @param string $CreateTime 记录保存时间
     * @param integer $TransCount 交易数量
     * @param string $ModifyTime 记录修改时间
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
        if (array_key_exists("BlockHash",$param) and $param["BlockHash"] !== null) {
            $this->BlockHash = $param["BlockHash"];
        }

        if (array_key_exists("BlockNumber",$param) and $param["BlockNumber"] !== null) {
            $this->BlockNumber = $param["BlockNumber"];
        }

        if (array_key_exists("BlockTimestamp",$param) and $param["BlockTimestamp"] !== null) {
            $this->BlockTimestamp = $param["BlockTimestamp"];
        }

        if (array_key_exists("Sealer",$param) and $param["Sealer"] !== null) {
            $this->Sealer = $param["Sealer"];
        }

        if (array_key_exists("SealerIndex",$param) and $param["SealerIndex"] !== null) {
            $this->SealerIndex = $param["SealerIndex"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("TransCount",$param) and $param["TransCount"] !== null) {
            $this->TransCount = $param["TransCount"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
