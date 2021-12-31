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
 * DescribeDBLogFiles请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，形如：dcdbt-ow7t8lmc。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，形如：dcdbt-ow7t8lmc。
 * @method string getShardId() 获取分片 ID，形如：shard-7noic7tv
 * @method void setShardId(string $ShardId) 设置分片 ID，形如：shard-7noic7tv
 * @method integer getType() 获取请求日志类型，取值只能为1、2、3或者4。1-binlog，2-冷备，3-errlog，4-slowlog。
 * @method void setType(integer $Type) 设置请求日志类型，取值只能为1、2、3或者4。1-binlog，2-冷备，3-errlog，4-slowlog。
 */
class DescribeDBLogFilesRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，形如：dcdbt-ow7t8lmc。
     */
    public $InstanceId;

    /**
     * @var string 分片 ID，形如：shard-7noic7tv
     */
    public $ShardId;

    /**
     * @var integer 请求日志类型，取值只能为1、2、3或者4。1-binlog，2-冷备，3-errlog，4-slowlog。
     */
    public $Type;

    /**
     * @param string $InstanceId 实例 ID，形如：dcdbt-ow7t8lmc。
     * @param string $ShardId 分片 ID，形如：shard-7noic7tv
     * @param integer $Type 请求日志类型，取值只能为1、2、3或者4。1-binlog，2-冷备，3-errlog，4-slowlog。
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

        if (array_key_exists("ShardId",$param) and $param["ShardId"] !== null) {
            $this->ShardId = $param["ShardId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
