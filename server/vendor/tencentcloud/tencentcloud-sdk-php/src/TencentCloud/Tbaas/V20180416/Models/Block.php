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
 * 区块对象
 *
 * @method integer getBlockNum() 获取区块编号
 * @method void setBlockNum(integer $BlockNum) 设置区块编号
 * @method string getDataHash() 获取区块数据Hash数值
 * @method void setDataHash(string $DataHash) 设置区块数据Hash数值
 * @method integer getBlockId() 获取区块ID，与区块编号一致
 * @method void setBlockId(integer $BlockId) 设置区块ID，与区块编号一致
 * @method string getPreHash() 获取前一个区块Hash
 * @method void setPreHash(string $PreHash) 设置前一个区块Hash
 * @method integer getTxCount() 获取区块内的交易数量
 * @method void setTxCount(integer $TxCount) 设置区块内的交易数量
 */
class Block extends AbstractModel
{
    /**
     * @var integer 区块编号
     */
    public $BlockNum;

    /**
     * @var string 区块数据Hash数值
     */
    public $DataHash;

    /**
     * @var integer 区块ID，与区块编号一致
     */
    public $BlockId;

    /**
     * @var string 前一个区块Hash
     */
    public $PreHash;

    /**
     * @var integer 区块内的交易数量
     */
    public $TxCount;

    /**
     * @param integer $BlockNum 区块编号
     * @param string $DataHash 区块数据Hash数值
     * @param integer $BlockId 区块ID，与区块编号一致
     * @param string $PreHash 前一个区块Hash
     * @param integer $TxCount 区块内的交易数量
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
        if (array_key_exists("BlockNum",$param) and $param["BlockNum"] !== null) {
            $this->BlockNum = $param["BlockNum"];
        }

        if (array_key_exists("DataHash",$param) and $param["DataHash"] !== null) {
            $this->DataHash = $param["DataHash"];
        }

        if (array_key_exists("BlockId",$param) and $param["BlockId"] !== null) {
            $this->BlockId = $param["BlockId"];
        }

        if (array_key_exists("PreHash",$param) and $param["PreHash"] !== null) {
            $this->PreHash = $param["PreHash"];
        }

        if (array_key_exists("TxCount",$param) and $param["TxCount"] !== null) {
            $this->TxCount = $param["TxCount"];
        }
    }
}
