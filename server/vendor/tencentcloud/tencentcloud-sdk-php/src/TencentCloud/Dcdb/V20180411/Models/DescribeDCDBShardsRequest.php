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
 * DescribeDCDBShards请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，形如：dcdbt-ow728lmc。
 * @method void setInstanceId(string $InstanceId) 设置实例ID，形如：dcdbt-ow728lmc。
 * @method array getShardInstanceIds() 获取分片ID列表。
 * @method void setShardInstanceIds(array $ShardInstanceIds) 设置分片ID列表。
 * @method integer getOffset() 获取偏移量，默认为 0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为 0
 * @method integer getLimit() 获取返回数量，默认为 20，最大值为 100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为 20，最大值为 100。
 * @method string getOrderBy() 获取排序字段， 目前仅支持 createtime
 * @method void setOrderBy(string $OrderBy) 设置排序字段， 目前仅支持 createtime
 * @method string getOrderByType() 获取排序类型， desc 或者 asc
 * @method void setOrderByType(string $OrderByType) 设置排序类型， desc 或者 asc
 */
class DescribeDCDBShardsRequest extends AbstractModel
{
    /**
     * @var string 实例ID，形如：dcdbt-ow728lmc。
     */
    public $InstanceId;

    /**
     * @var array 分片ID列表。
     */
    public $ShardInstanceIds;

    /**
     * @var integer 偏移量，默认为 0
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为 20，最大值为 100。
     */
    public $Limit;

    /**
     * @var string 排序字段， 目前仅支持 createtime
     */
    public $OrderBy;

    /**
     * @var string 排序类型， desc 或者 asc
     */
    public $OrderByType;

    /**
     * @param string $InstanceId 实例ID，形如：dcdbt-ow728lmc。
     * @param array $ShardInstanceIds 分片ID列表。
     * @param integer $Offset 偏移量，默认为 0
     * @param integer $Limit 返回数量，默认为 20，最大值为 100。
     * @param string $OrderBy 排序字段， 目前仅支持 createtime
     * @param string $OrderByType 排序类型， desc 或者 asc
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ShardInstanceIds",$param) and $param["ShardInstanceIds"] !== null) {
            $this->ShardInstanceIds = $param["ShardInstanceIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
