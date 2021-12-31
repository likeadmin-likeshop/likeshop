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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGroupOffsets请求参数结构体
 *
 * @method string getInstanceId() 获取（过滤条件）按照实例 ID 过滤
 * @method void setInstanceId(string $InstanceId) 设置（过滤条件）按照实例 ID 过滤
 * @method string getGroup() 获取Kafka 消费分组
 * @method void setGroup(string $Group) 设置Kafka 消费分组
 * @method array getTopics() 获取group 订阅的主题名称数组，如果没有该数组，则表示指定的 group 下所有 topic 信息
 * @method void setTopics(array $Topics) 设置group 订阅的主题名称数组，如果没有该数组，则表示指定的 group 下所有 topic 信息
 * @method string getSearchWord() 获取模糊匹配 topicName
 * @method void setSearchWord(string $SearchWord) 设置模糊匹配 topicName
 * @method integer getOffset() 获取本次查询的偏移位置，默认为0
 * @method void setOffset(integer $Offset) 设置本次查询的偏移位置，默认为0
 * @method integer getLimit() 获取本次返回结果的最大个数，默认为50，最大值为50
 * @method void setLimit(integer $Limit) 设置本次返回结果的最大个数，默认为50，最大值为50
 */
class DescribeGroupOffsetsRequest extends AbstractModel
{
    /**
     * @var string （过滤条件）按照实例 ID 过滤
     */
    public $InstanceId;

    /**
     * @var string Kafka 消费分组
     */
    public $Group;

    /**
     * @var array group 订阅的主题名称数组，如果没有该数组，则表示指定的 group 下所有 topic 信息
     */
    public $Topics;

    /**
     * @var string 模糊匹配 topicName
     */
    public $SearchWord;

    /**
     * @var integer 本次查询的偏移位置，默认为0
     */
    public $Offset;

    /**
     * @var integer 本次返回结果的最大个数，默认为50，最大值为50
     */
    public $Limit;

    /**
     * @param string $InstanceId （过滤条件）按照实例 ID 过滤
     * @param string $Group Kafka 消费分组
     * @param array $Topics group 订阅的主题名称数组，如果没有该数组，则表示指定的 group 下所有 topic 信息
     * @param string $SearchWord 模糊匹配 topicName
     * @param integer $Offset 本次查询的偏移位置，默认为0
     * @param integer $Limit 本次返回结果的最大个数，默认为50，最大值为50
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

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("Topics",$param) and $param["Topics"] !== null) {
            $this->Topics = $param["Topics"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
