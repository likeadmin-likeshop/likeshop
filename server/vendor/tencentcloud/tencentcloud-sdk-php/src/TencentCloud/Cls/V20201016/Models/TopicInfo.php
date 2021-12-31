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
 * 日志主题信息
 *
 * @method string getLogsetId() 获取日志集ID
 * @method void setLogsetId(string $LogsetId) 设置日志集ID
 * @method string getTopicId() 获取日志主题ID
 * @method void setTopicId(string $TopicId) 设置日志主题ID
 * @method string getTopicName() 获取日志主题名称
 * @method void setTopicName(string $TopicName) 设置日志主题名称
 * @method integer getPartitionCount() 获取主题分区个数
 * @method void setPartitionCount(integer $PartitionCount) 设置主题分区个数
 * @method boolean getIndex() 获取是否开启索引
 * @method void setIndex(boolean $Index) 设置是否开启索引
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method boolean getStatus() 获取日主主题是否开启采集
 * @method void setStatus(boolean $Status) 设置日主主题是否开启采集
 * @method array getTags() 获取日志主题绑定的标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置日志主题绑定的标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAutoSplit() 获取该主题是否开启自动分裂
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoSplit(boolean $AutoSplit) 设置该主题是否开启自动分裂
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxSplitPartitions() 获取若开启自动分裂的话，该主题能够允许的最大分区数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxSplitPartitions(integer $MaxSplitPartitions) 设置若开启自动分裂的话，该主题能够允许的最大分区数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStorageType() 获取日主题的存储类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageType(string $StorageType) 设置日主题的存储类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class TopicInfo extends AbstractModel
{
    /**
     * @var string 日志集ID
     */
    public $LogsetId;

    /**
     * @var string 日志主题ID
     */
    public $TopicId;

    /**
     * @var string 日志主题名称
     */
    public $TopicName;

    /**
     * @var integer 主题分区个数
     */
    public $PartitionCount;

    /**
     * @var boolean 是否开启索引
     */
    public $Index;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var boolean 日主主题是否开启采集
     */
    public $Status;

    /**
     * @var array 日志主题绑定的标签信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var boolean 该主题是否开启自动分裂
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoSplit;

    /**
     * @var integer 若开启自动分裂的话，该主题能够允许的最大分区数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxSplitPartitions;

    /**
     * @var string 日主题的存储类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageType;

    /**
     * @param string $LogsetId 日志集ID
     * @param string $TopicId 日志主题ID
     * @param string $TopicName 日志主题名称
     * @param integer $PartitionCount 主题分区个数
     * @param boolean $Index 是否开启索引
     * @param string $CreateTime 创建时间
     * @param boolean $Status 日主主题是否开启采集
     * @param array $Tags 日志主题绑定的标签信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AutoSplit 该主题是否开启自动分裂
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxSplitPartitions 若开启自动分裂的话，该主题能够允许的最大分区数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StorageType 日主题的存储类型
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
        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("PartitionCount",$param) and $param["PartitionCount"] !== null) {
            $this->PartitionCount = $param["PartitionCount"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AutoSplit",$param) and $param["AutoSplit"] !== null) {
            $this->AutoSplit = $param["AutoSplit"];
        }

        if (array_key_exists("MaxSplitPartitions",$param) and $param["MaxSplitPartitions"] !== null) {
            $this->MaxSplitPartitions = $param["MaxSplitPartitions"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }
    }
}
