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
 * 项目奖品库存
 *
 * @method string getPrizeId() 获取奖品id
 * @method void setPrizeId(string $PrizeId) 设置奖品id
 * @method integer getPrizeBat() 获取奖品批次
 * @method void setPrizeBat(integer $PrizeBat) 设置奖品批次
 * @method string getPrizeName() 获取奖品名称
 * @method void setPrizeName(string $PrizeName) 设置奖品名称
 * @method integer getUsedStock() 获取已分配奖品数量
 * @method void setUsedStock(integer $UsedStock) 设置已分配奖品数量
 * @method integer getRemainStock() 获取该奖品剩余库存数量
 * @method void setRemainStock(integer $RemainStock) 设置该奖品剩余库存数量
 * @method integer getPoolIdx() 获取奖品所在奖池index
 * @method void setPoolIdx(integer $PoolIdx) 设置奖品所在奖池index
 * @method string getPoolName() 获取奖品所在奖池名称
 * @method void setPoolName(string $PoolName) 设置奖品所在奖池名称
 */
class ProjectStock extends AbstractModel
{
    /**
     * @var string 奖品id
     */
    public $PrizeId;

    /**
     * @var integer 奖品批次
     */
    public $PrizeBat;

    /**
     * @var string 奖品名称
     */
    public $PrizeName;

    /**
     * @var integer 已分配奖品数量
     */
    public $UsedStock;

    /**
     * @var integer 该奖品剩余库存数量
     */
    public $RemainStock;

    /**
     * @var integer 奖品所在奖池index
     */
    public $PoolIdx;

    /**
     * @var string 奖品所在奖池名称
     */
    public $PoolName;

    /**
     * @param string $PrizeId 奖品id
     * @param integer $PrizeBat 奖品批次
     * @param string $PrizeName 奖品名称
     * @param integer $UsedStock 已分配奖品数量
     * @param integer $RemainStock 该奖品剩余库存数量
     * @param integer $PoolIdx 奖品所在奖池index
     * @param string $PoolName 奖品所在奖池名称
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
        if (array_key_exists("PrizeId",$param) and $param["PrizeId"] !== null) {
            $this->PrizeId = $param["PrizeId"];
        }

        if (array_key_exists("PrizeBat",$param) and $param["PrizeBat"] !== null) {
            $this->PrizeBat = $param["PrizeBat"];
        }

        if (array_key_exists("PrizeName",$param) and $param["PrizeName"] !== null) {
            $this->PrizeName = $param["PrizeName"];
        }

        if (array_key_exists("UsedStock",$param) and $param["UsedStock"] !== null) {
            $this->UsedStock = $param["UsedStock"];
        }

        if (array_key_exists("RemainStock",$param) and $param["RemainStock"] !== null) {
            $this->RemainStock = $param["RemainStock"];
        }

        if (array_key_exists("PoolIdx",$param) and $param["PoolIdx"] !== null) {
            $this->PoolIdx = $param["PoolIdx"];
        }

        if (array_key_exists("PoolName",$param) and $param["PoolName"] !== null) {
            $this->PoolName = $param["PoolName"];
        }
    }
}
