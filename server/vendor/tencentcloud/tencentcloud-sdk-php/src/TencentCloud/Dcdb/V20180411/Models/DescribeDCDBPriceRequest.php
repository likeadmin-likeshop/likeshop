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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDCDBPrice请求参数结构体
 *
 * @method string getZone() 获取欲新购实例的可用区ID。
 * @method void setZone(string $Zone) 设置欲新购实例的可用区ID。
 * @method integer getCount() 获取欲购买实例的数量，目前支持购买1-10个实例
 * @method void setCount(integer $Count) 设置欲购买实例的数量，目前支持购买1-10个实例
 * @method integer getPeriod() 获取欲购买的时长，单位：月。
 * @method void setPeriod(integer $Period) 设置欲购买的时长，单位：月。
 * @method integer getShardNodeCount() 获取单个分片节点个数大小，可以通过 DescribeShardSpec
 查询实例规格获得。
 * @method void setShardNodeCount(integer $ShardNodeCount) 设置单个分片节点个数大小，可以通过 DescribeShardSpec
 查询实例规格获得。
 * @method integer getShardMemory() 获取分片内存大小，单位：GB，可以通过 DescribeShardSpec
 查询实例规格获得。
 * @method void setShardMemory(integer $ShardMemory) 设置分片内存大小，单位：GB，可以通过 DescribeShardSpec
 查询实例规格获得。
 * @method integer getShardStorage() 获取分片存储空间大小，单位：GB，可以通过 DescribeShardSpec
 查询实例规格获得。
 * @method void setShardStorage(integer $ShardStorage) 设置分片存储空间大小，单位：GB，可以通过 DescribeShardSpec
 查询实例规格获得。
 * @method integer getShardCount() 获取实例分片个数，可选范围2-8，可以通过升级实例进行新增分片到最多64个分片。
 * @method void setShardCount(integer $ShardCount) 设置实例分片个数，可选范围2-8，可以通过升级实例进行新增分片到最多64个分片。
 * @method string getPaymode() 获取付费类型。postpaid：按量付费   prepaid：预付费
 * @method void setPaymode(string $Paymode) 设置付费类型。postpaid：按量付费   prepaid：预付费
 */
class DescribeDCDBPriceRequest extends AbstractModel
{
    /**
     * @var string 欲新购实例的可用区ID。
     */
    public $Zone;

    /**
     * @var integer 欲购买实例的数量，目前支持购买1-10个实例
     */
    public $Count;

    /**
     * @var integer 欲购买的时长，单位：月。
     */
    public $Period;

    /**
     * @var integer 单个分片节点个数大小，可以通过 DescribeShardSpec
 查询实例规格获得。
     */
    public $ShardNodeCount;

    /**
     * @var integer 分片内存大小，单位：GB，可以通过 DescribeShardSpec
 查询实例规格获得。
     */
    public $ShardMemory;

    /**
     * @var integer 分片存储空间大小，单位：GB，可以通过 DescribeShardSpec
 查询实例规格获得。
     */
    public $ShardStorage;

    /**
     * @var integer 实例分片个数，可选范围2-8，可以通过升级实例进行新增分片到最多64个分片。
     */
    public $ShardCount;

    /**
     * @var string 付费类型。postpaid：按量付费   prepaid：预付费
     */
    public $Paymode;

    /**
     * @param string $Zone 欲新购实例的可用区ID。
     * @param integer $Count 欲购买实例的数量，目前支持购买1-10个实例
     * @param integer $Period 欲购买的时长，单位：月。
     * @param integer $ShardNodeCount 单个分片节点个数大小，可以通过 DescribeShardSpec
 查询实例规格获得。
     * @param integer $ShardMemory 分片内存大小，单位：GB，可以通过 DescribeShardSpec
 查询实例规格获得。
     * @param integer $ShardStorage 分片存储空间大小，单位：GB，可以通过 DescribeShardSpec
 查询实例规格获得。
     * @param integer $ShardCount 实例分片个数，可选范围2-8，可以通过升级实例进行新增分片到最多64个分片。
     * @param string $Paymode 付费类型。postpaid：按量付费   prepaid：预付费
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("ShardNodeCount",$param) and $param["ShardNodeCount"] !== null) {
            $this->ShardNodeCount = $param["ShardNodeCount"];
        }

        if (array_key_exists("ShardMemory",$param) and $param["ShardMemory"] !== null) {
            $this->ShardMemory = $param["ShardMemory"];
        }

        if (array_key_exists("ShardStorage",$param) and $param["ShardStorage"] !== null) {
            $this->ShardStorage = $param["ShardStorage"];
        }

        if (array_key_exists("ShardCount",$param) and $param["ShardCount"] !== null) {
            $this->ShardCount = $param["ShardCount"];
        }

        if (array_key_exists("Paymode",$param) and $param["Paymode"] !== null) {
            $this->Paymode = $param["Paymode"];
        }
    }
}
