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
 * 主题详情
 *
 * @method string getTopicName() 获取主题名称
 * @method void setTopicName(string $TopicName) 设置主题名称
 * @method string getTopicId() 获取主题ID
 * @method void setTopicId(string $TopicId) 设置主题ID
 * @method integer getPartitionNum() 获取分区数
 * @method void setPartitionNum(integer $PartitionNum) 设置分区数
 * @method integer getReplicaNum() 获取副本数
 * @method void setReplicaNum(integer $ReplicaNum) 设置副本数
 * @method string getNote() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNote(string $Note) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method boolean getEnableWhiteList() 获取是否开启ip鉴权白名单，true表示开启，false表示不开启
 * @method void setEnableWhiteList(boolean $EnableWhiteList) 设置是否开启ip鉴权白名单，true表示开启，false表示不开启
 * @method integer getIpWhiteListCount() 获取ip白名单中ip个数
 * @method void setIpWhiteListCount(integer $IpWhiteListCount) 设置ip白名单中ip个数
 * @method string getForwardCosBucket() 获取数据备份cos bucket: 转存到cos 的bucket地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setForwardCosBucket(string $ForwardCosBucket) 设置数据备份cos bucket: 转存到cos 的bucket地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getForwardStatus() 获取数据备份cos 状态： 1 不开启数据备份，0 开启数据备份
 * @method void setForwardStatus(integer $ForwardStatus) 设置数据备份cos 状态： 1 不开启数据备份，0 开启数据备份
 * @method integer getForwardInterval() 获取数据备份到cos的周期频率
 * @method void setForwardInterval(integer $ForwardInterval) 设置数据备份到cos的周期频率
 * @method Config getConfig() 获取高级配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfig(Config $Config) 设置高级配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method TopicRetentionTimeConfigRsp getRetentionTimeConfig() 获取消息保留时间配置(用于动态配置变更记录)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetentionTimeConfig(TopicRetentionTimeConfigRsp $RetentionTimeConfig) 设置消息保留时间配置(用于动态配置变更记录)
注意：此字段可能返回 null，表示取不到有效值。
 */
class TopicDetail extends AbstractModel
{
    /**
     * @var string 主题名称
     */
    public $TopicName;

    /**
     * @var string 主题ID
     */
    public $TopicId;

    /**
     * @var integer 分区数
     */
    public $PartitionNum;

    /**
     * @var integer 副本数
     */
    public $ReplicaNum;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Note;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var boolean 是否开启ip鉴权白名单，true表示开启，false表示不开启
     */
    public $EnableWhiteList;

    /**
     * @var integer ip白名单中ip个数
     */
    public $IpWhiteListCount;

    /**
     * @var string 数据备份cos bucket: 转存到cos 的bucket地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ForwardCosBucket;

    /**
     * @var integer 数据备份cos 状态： 1 不开启数据备份，0 开启数据备份
     */
    public $ForwardStatus;

    /**
     * @var integer 数据备份到cos的周期频率
     */
    public $ForwardInterval;

    /**
     * @var Config 高级配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Config;

    /**
     * @var TopicRetentionTimeConfigRsp 消息保留时间配置(用于动态配置变更记录)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetentionTimeConfig;

    /**
     * @param string $TopicName 主题名称
     * @param string $TopicId 主题ID
     * @param integer $PartitionNum 分区数
     * @param integer $ReplicaNum 副本数
     * @param string $Note 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间
     * @param boolean $EnableWhiteList 是否开启ip鉴权白名单，true表示开启，false表示不开启
     * @param integer $IpWhiteListCount ip白名单中ip个数
     * @param string $ForwardCosBucket 数据备份cos bucket: 转存到cos 的bucket地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ForwardStatus 数据备份cos 状态： 1 不开启数据备份，0 开启数据备份
     * @param integer $ForwardInterval 数据备份到cos的周期频率
     * @param Config $Config 高级配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param TopicRetentionTimeConfigRsp $RetentionTimeConfig 消息保留时间配置(用于动态配置变更记录)
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("PartitionNum",$param) and $param["PartitionNum"] !== null) {
            $this->PartitionNum = $param["PartitionNum"];
        }

        if (array_key_exists("ReplicaNum",$param) and $param["ReplicaNum"] !== null) {
            $this->ReplicaNum = $param["ReplicaNum"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EnableWhiteList",$param) and $param["EnableWhiteList"] !== null) {
            $this->EnableWhiteList = $param["EnableWhiteList"];
        }

        if (array_key_exists("IpWhiteListCount",$param) and $param["IpWhiteListCount"] !== null) {
            $this->IpWhiteListCount = $param["IpWhiteListCount"];
        }

        if (array_key_exists("ForwardCosBucket",$param) and $param["ForwardCosBucket"] !== null) {
            $this->ForwardCosBucket = $param["ForwardCosBucket"];
        }

        if (array_key_exists("ForwardStatus",$param) and $param["ForwardStatus"] !== null) {
            $this->ForwardStatus = $param["ForwardStatus"];
        }

        if (array_key_exists("ForwardInterval",$param) and $param["ForwardInterval"] !== null) {
            $this->ForwardInterval = $param["ForwardInterval"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new Config();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("RetentionTimeConfig",$param) and $param["RetentionTimeConfig"] !== null) {
            $this->RetentionTimeConfig = new TopicRetentionTimeConfigRsp();
            $this->RetentionTimeConfig->deserialize($param["RetentionTimeConfig"]);
        }
    }
}
