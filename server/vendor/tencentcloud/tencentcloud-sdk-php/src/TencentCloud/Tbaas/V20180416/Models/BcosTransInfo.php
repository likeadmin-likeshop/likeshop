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
 * Bcos交易信息对象
 *
 * @method integer getBlockNumber() 获取所属区块高度
 * @method void setBlockNumber(integer $BlockNumber) 设置所属区块高度
 * @method string getBlockTimestamp() 获取区块时间戳
 * @method void setBlockTimestamp(string $BlockTimestamp) 设置区块时间戳
 * @method string getTransHash() 获取交易哈希
 * @method void setTransHash(string $TransHash) 设置交易哈希
 * @method string getTransFrom() 获取交易发起者
 * @method void setTransFrom(string $TransFrom) 设置交易发起者
 * @method string getTransTo() 获取交易接收者
 * @method void setTransTo(string $TransTo) 设置交易接收者
 * @method string getCreateTime() 获取落库时间
 * @method void setCreateTime(string $CreateTime) 设置落库时间
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 */
class BcosTransInfo extends AbstractModel
{
    /**
     * @var integer 所属区块高度
     */
    public $BlockNumber;

    /**
     * @var string 区块时间戳
     */
    public $BlockTimestamp;

    /**
     * @var string 交易哈希
     */
    public $TransHash;

    /**
     * @var string 交易发起者
     */
    public $TransFrom;

    /**
     * @var string 交易接收者
     */
    public $TransTo;

    /**
     * @var string 落库时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @param integer $BlockNumber 所属区块高度
     * @param string $BlockTimestamp 区块时间戳
     * @param string $TransHash 交易哈希
     * @param string $TransFrom 交易发起者
     * @param string $TransTo 交易接收者
     * @param string $CreateTime 落库时间
     * @param string $ModifyTime 修改时间
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
        if (array_key_exists("BlockNumber",$param) and $param["BlockNumber"] !== null) {
            $this->BlockNumber = $param["BlockNumber"];
        }

        if (array_key_exists("BlockTimestamp",$param) and $param["BlockTimestamp"] !== null) {
            $this->BlockTimestamp = $param["BlockTimestamp"];
        }

        if (array_key_exists("TransHash",$param) and $param["TransHash"] !== null) {
            $this->TransHash = $param["TransHash"];
        }

        if (array_key_exists("TransFrom",$param) and $param["TransFrom"] !== null) {
            $this->TransFrom = $param["TransFrom"];
        }

        if (array_key_exists("TransTo",$param) and $param["TransTo"] !== null) {
            $this->TransTo = $param["TransTo"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
