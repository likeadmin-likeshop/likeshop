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
 * CreateTopic请求参数结构体
 *
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method string getTopicName() 获取主题名称，是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)
 * @method void setTopicName(string $TopicName) 设置主题名称，是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)
 * @method integer getPartitionNum() 获取Partition个数，大于0
 * @method void setPartitionNum(integer $PartitionNum) 设置Partition个数，大于0
 * @method integer getReplicaNum() 获取副本个数，不能多于 broker 数，最大为3
 * @method void setReplicaNum(integer $ReplicaNum) 设置副本个数，不能多于 broker 数，最大为3
 * @method integer getEnableWhiteList() 获取ip白名单开关, 1:打开  0:关闭，默认不打开
 * @method void setEnableWhiteList(integer $EnableWhiteList) 设置ip白名单开关, 1:打开  0:关闭，默认不打开
 * @method array getIpWhiteList() 获取Ip白名单列表，配额限制，enableWhileList=1时必选
 * @method void setIpWhiteList(array $IpWhiteList) 设置Ip白名单列表，配额限制，enableWhileList=1时必选
 * @method string getCleanUpPolicy() 获取清理日志策略，日志清理模式，默认为"delete"。"delete"：日志按保存时间删除，"compact"：日志按 key 压缩，"compact, delete"：日志按 key 压缩且会按保存时间删除。
 * @method void setCleanUpPolicy(string $CleanUpPolicy) 设置清理日志策略，日志清理模式，默认为"delete"。"delete"：日志按保存时间删除，"compact"：日志按 key 压缩，"compact, delete"：日志按 key 压缩且会按保存时间删除。
 * @method string getNote() 获取主题备注，是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)
 * @method void setNote(string $Note) 设置主题备注，是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)
 * @method integer getMinInsyncReplicas() 获取默认为1
 * @method void setMinInsyncReplicas(integer $MinInsyncReplicas) 设置默认为1
 * @method integer getUncleanLeaderElectionEnable() 获取是否允许未同步的副本选为leader，false:不允许，true:允许，默认不允许
 * @method void setUncleanLeaderElectionEnable(integer $UncleanLeaderElectionEnable) 设置是否允许未同步的副本选为leader，false:不允许，true:允许，默认不允许
 * @method integer getRetentionMs() 获取可消息选。保留时间，单位ms，当前最小值为60000ms
 * @method void setRetentionMs(integer $RetentionMs) 设置可消息选。保留时间，单位ms，当前最小值为60000ms
 * @method integer getSegmentMs() 获取Segment分片滚动的时长，单位ms，当前最小为3600000ms
 * @method void setSegmentMs(integer $SegmentMs) 设置Segment分片滚动的时长，单位ms，当前最小为3600000ms
 */
class CreateTopicRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var string 主题名称，是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)
     */
    public $TopicName;

    /**
     * @var integer Partition个数，大于0
     */
    public $PartitionNum;

    /**
     * @var integer 副本个数，不能多于 broker 数，最大为3
     */
    public $ReplicaNum;

    /**
     * @var integer ip白名单开关, 1:打开  0:关闭，默认不打开
     */
    public $EnableWhiteList;

    /**
     * @var array Ip白名单列表，配额限制，enableWhileList=1时必选
     */
    public $IpWhiteList;

    /**
     * @var string 清理日志策略，日志清理模式，默认为"delete"。"delete"：日志按保存时间删除，"compact"：日志按 key 压缩，"compact, delete"：日志按 key 压缩且会按保存时间删除。
     */
    public $CleanUpPolicy;

    /**
     * @var string 主题备注，是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)
     */
    public $Note;

    /**
     * @var integer 默认为1
     */
    public $MinInsyncReplicas;

    /**
     * @var integer 是否允许未同步的副本选为leader，false:不允许，true:允许，默认不允许
     */
    public $UncleanLeaderElectionEnable;

    /**
     * @var integer 可消息选。保留时间，单位ms，当前最小值为60000ms
     */
    public $RetentionMs;

    /**
     * @var integer Segment分片滚动的时长，单位ms，当前最小为3600000ms
     */
    public $SegmentMs;

    /**
     * @param string $InstanceId 实例Id
     * @param string $TopicName 主题名称，是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)
     * @param integer $PartitionNum Partition个数，大于0
     * @param integer $ReplicaNum 副本个数，不能多于 broker 数，最大为3
     * @param integer $EnableWhiteList ip白名单开关, 1:打开  0:关闭，默认不打开
     * @param array $IpWhiteList Ip白名单列表，配额限制，enableWhileList=1时必选
     * @param string $CleanUpPolicy 清理日志策略，日志清理模式，默认为"delete"。"delete"：日志按保存时间删除，"compact"：日志按 key 压缩，"compact, delete"：日志按 key 压缩且会按保存时间删除。
     * @param string $Note 主题备注，是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)
     * @param integer $MinInsyncReplicas 默认为1
     * @param integer $UncleanLeaderElectionEnable 是否允许未同步的副本选为leader，false:不允许，true:允许，默认不允许
     * @param integer $RetentionMs 可消息选。保留时间，单位ms，当前最小值为60000ms
     * @param integer $SegmentMs Segment分片滚动的时长，单位ms，当前最小为3600000ms
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

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("PartitionNum",$param) and $param["PartitionNum"] !== null) {
            $this->PartitionNum = $param["PartitionNum"];
        }

        if (array_key_exists("ReplicaNum",$param) and $param["ReplicaNum"] !== null) {
            $this->ReplicaNum = $param["ReplicaNum"];
        }

        if (array_key_exists("EnableWhiteList",$param) and $param["EnableWhiteList"] !== null) {
            $this->EnableWhiteList = $param["EnableWhiteList"];
        }

        if (array_key_exists("IpWhiteList",$param) and $param["IpWhiteList"] !== null) {
            $this->IpWhiteList = $param["IpWhiteList"];
        }

        if (array_key_exists("CleanUpPolicy",$param) and $param["CleanUpPolicy"] !== null) {
            $this->CleanUpPolicy = $param["CleanUpPolicy"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("MinInsyncReplicas",$param) and $param["MinInsyncReplicas"] !== null) {
            $this->MinInsyncReplicas = $param["MinInsyncReplicas"];
        }

        if (array_key_exists("UncleanLeaderElectionEnable",$param) and $param["UncleanLeaderElectionEnable"] !== null) {
            $this->UncleanLeaderElectionEnable = $param["UncleanLeaderElectionEnable"];
        }

        if (array_key_exists("RetentionMs",$param) and $param["RetentionMs"] !== null) {
            $this->RetentionMs = $param["RetentionMs"];
        }

        if (array_key_exists("SegmentMs",$param) and $param["SegmentMs"] !== null) {
            $this->SegmentMs = $param["SegmentMs"];
        }
    }
}
