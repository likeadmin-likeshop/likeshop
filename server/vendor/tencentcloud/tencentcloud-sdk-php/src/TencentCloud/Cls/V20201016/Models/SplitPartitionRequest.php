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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SplitPartition请求参数结构体
 *
 * @method string getTopicId() 获取日志主题ID
 * @method void setTopicId(string $TopicId) 设置日志主题ID
 * @method integer getPartitionId() 获取待分裂分区ID
 * @method void setPartitionId(integer $PartitionId) 设置待分裂分区ID
 * @method string getSplitKey() 获取分区切分的哈希key的位置，只在Number=2时有意义
 * @method void setSplitKey(string $SplitKey) 设置分区切分的哈希key的位置，只在Number=2时有意义
 * @method integer getNumber() 获取分区分裂个数(可选)，默认等于2
 * @method void setNumber(integer $Number) 设置分区分裂个数(可选)，默认等于2
 */
class SplitPartitionRequest extends AbstractModel
{
    /**
     * @var string 日志主题ID
     */
    public $TopicId;

    /**
     * @var integer 待分裂分区ID
     */
    public $PartitionId;

    /**
     * @var string 分区切分的哈希key的位置，只在Number=2时有意义
     */
    public $SplitKey;

    /**
     * @var integer 分区分裂个数(可选)，默认等于2
     */
    public $Number;

    /**
     * @param string $TopicId 日志主题ID
     * @param integer $PartitionId 待分裂分区ID
     * @param string $SplitKey 分区切分的哈希key的位置，只在Number=2时有意义
     * @param integer $Number 分区分裂个数(可选)，默认等于2
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("PartitionId",$param) and $param["PartitionId"] !== null) {
            $this->PartitionId = $param["PartitionId"];
        }

        if (array_key_exists("SplitKey",$param) and $param["SplitKey"] !== null) {
            $this->SplitKey = $param["SplitKey"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }
    }
}
