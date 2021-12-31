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
namespace TencentCloud\Solar\V20181011\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReplenishProjectStock请求参数结构体
 *
 * @method string getSubProjectId() 获取项目id
 * @method void setSubProjectId(string $SubProjectId) 设置项目id
 * @method string getPrizeId() 获取奖品id
 * @method void setPrizeId(string $PrizeId) 设置奖品id
 * @method integer getPrizeNum() 获取奖品数量
 * @method void setPrizeNum(integer $PrizeNum) 设置奖品数量
 * @method integer getPoolIndex() 获取奖池索引
 * @method void setPoolIndex(integer $PoolIndex) 设置奖池索引
 * @method string getPoolName() 获取奖池名称
 * @method void setPoolName(string $PoolName) 设置奖池名称
 */
class ReplenishProjectStockRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $SubProjectId;

    /**
     * @var string 奖品id
     */
    public $PrizeId;

    /**
     * @var integer 奖品数量
     */
    public $PrizeNum;

    /**
     * @var integer 奖池索引
     */
    public $PoolIndex;

    /**
     * @var string 奖池名称
     */
    public $PoolName;

    /**
     * @param string $SubProjectId 项目id
     * @param string $PrizeId 奖品id
     * @param integer $PrizeNum 奖品数量
     * @param integer $PoolIndex 奖池索引
     * @param string $PoolName 奖池名称
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
        if (array_key_exists("SubProjectId",$param) and $param["SubProjectId"] !== null) {
            $this->SubProjectId = $param["SubProjectId"];
        }

        if (array_key_exists("PrizeId",$param) and $param["PrizeId"] !== null) {
            $this->PrizeId = $param["PrizeId"];
        }

        if (array_key_exists("PrizeNum",$param) and $param["PrizeNum"] !== null) {
            $this->PrizeNum = $param["PrizeNum"];
        }

        if (array_key_exists("PoolIndex",$param) and $param["PoolIndex"] !== null) {
            $this->PoolIndex = $param["PoolIndex"];
        }

        if (array_key_exists("PoolName",$param) and $param["PoolName"] !== null) {
            $this->PoolName = $param["PoolName"];
        }
    }
}
