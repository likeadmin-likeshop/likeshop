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
 * 高级配置对象
 *
 * @method integer getRetention() 获取消息保留时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetention(integer $Retention) 设置消息保留时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinInsyncReplicas() 获取最小同步复制数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinInsyncReplicas(integer $MinInsyncReplicas) 设置最小同步复制数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCleanUpPolicy() 获取日志清理模式，默认 delete。
delete：日志按保存时间删除；compact：日志按 key 压缩；compact, delete：日志按 key 压缩且会保存时间删除。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCleanUpPolicy(string $CleanUpPolicy) 设置日志清理模式，默认 delete。
delete：日志按保存时间删除；compact：日志按 key 压缩；compact, delete：日志按 key 压缩且会保存时间删除。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSegmentMs() 获取Segment 分片滚动的时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSegmentMs(integer $SegmentMs) 设置Segment 分片滚动的时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUncleanLeaderElectionEnable() 获取0表示 false。 1表示 true。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUncleanLeaderElectionEnable(integer $UncleanLeaderElectionEnable) 设置0表示 false。 1表示 true。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSegmentBytes() 获取Segment 分片滚动的字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSegmentBytes(integer $SegmentBytes) 设置Segment 分片滚动的字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxMessageBytes() 获取最大消息字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxMessageBytes(integer $MaxMessageBytes) 设置最大消息字节数
注意：此字段可能返回 null，表示取不到有效值。
 */
class Config extends AbstractModel
{
    /**
     * @var integer 消息保留时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Retention;

    /**
     * @var integer 最小同步复制数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinInsyncReplicas;

    /**
     * @var string 日志清理模式，默认 delete。
delete：日志按保存时间删除；compact：日志按 key 压缩；compact, delete：日志按 key 压缩且会保存时间删除。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CleanUpPolicy;

    /**
     * @var integer Segment 分片滚动的时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SegmentMs;

    /**
     * @var integer 0表示 false。 1表示 true。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UncleanLeaderElectionEnable;

    /**
     * @var integer Segment 分片滚动的字节数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SegmentBytes;

    /**
     * @var integer 最大消息字节数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxMessageBytes;

    /**
     * @param integer $Retention 消息保留时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MinInsyncReplicas 最小同步复制数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CleanUpPolicy 日志清理模式，默认 delete。
delete：日志按保存时间删除；compact：日志按 key 压缩；compact, delete：日志按 key 压缩且会保存时间删除。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SegmentMs Segment 分片滚动的时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UncleanLeaderElectionEnable 0表示 false。 1表示 true。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SegmentBytes Segment 分片滚动的字节数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxMessageBytes 最大消息字节数
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Retention",$param) and $param["Retention"] !== null) {
            $this->Retention = $param["Retention"];
        }

        if (array_key_exists("MinInsyncReplicas",$param) and $param["MinInsyncReplicas"] !== null) {
            $this->MinInsyncReplicas = $param["MinInsyncReplicas"];
        }

        if (array_key_exists("CleanUpPolicy",$param) and $param["CleanUpPolicy"] !== null) {
            $this->CleanUpPolicy = $param["CleanUpPolicy"];
        }

        if (array_key_exists("SegmentMs",$param) and $param["SegmentMs"] !== null) {
            $this->SegmentMs = $param["SegmentMs"];
        }

        if (array_key_exists("UncleanLeaderElectionEnable",$param) and $param["UncleanLeaderElectionEnable"] !== null) {
            $this->UncleanLeaderElectionEnable = $param["UncleanLeaderElectionEnable"];
        }

        if (array_key_exists("SegmentBytes",$param) and $param["SegmentBytes"] !== null) {
            $this->SegmentBytes = $param["SegmentBytes"];
        }

        if (array_key_exists("MaxMessageBytes",$param) and $param["MaxMessageBytes"] !== null) {
            $this->MaxMessageBytes = $param["MaxMessageBytes"];
        }
    }
}
