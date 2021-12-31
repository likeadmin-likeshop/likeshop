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
 * 主题属性返回结果实体
 *
 * @method string getTopicId() 获取主题 ID
 * @method void setTopicId(string $TopicId) 设置主题 ID
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method string getNote() 获取主题备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNote(string $Note) 设置主题备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPartitionNum() 获取分区个数
 * @method void setPartitionNum(integer $PartitionNum) 设置分区个数
 * @method integer getEnableWhiteList() 获取IP 白名单开关，1：打开； 0：关闭
 * @method void setEnableWhiteList(integer $EnableWhiteList) 设置IP 白名单开关，1：打开； 0：关闭
 * @method array getIpWhiteList() 获取IP 白名单列表
 * @method void setIpWhiteList(array $IpWhiteList) 设置IP 白名单列表
 * @method Config getConfig() 获取topic 配置数组
 * @method void setConfig(Config $Config) 设置topic 配置数组
 * @method array getPartitions() 获取分区详情
 * @method void setPartitions(array $Partitions) 设置分区详情
 */
class TopicAttributesResponse extends AbstractModel
{
    /**
     * @var string 主题 ID
     */
    public $TopicId;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var string 主题备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Note;

    /**
     * @var integer 分区个数
     */
    public $PartitionNum;

    /**
     * @var integer IP 白名单开关，1：打开； 0：关闭
     */
    public $EnableWhiteList;

    /**
     * @var array IP 白名单列表
     */
    public $IpWhiteList;

    /**
     * @var Config topic 配置数组
     */
    public $Config;

    /**
     * @var array 分区详情
     */
    public $Partitions;

    /**
     * @param string $TopicId 主题 ID
     * @param integer $CreateTime 创建时间
     * @param string $Note 主题备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PartitionNum 分区个数
     * @param integer $EnableWhiteList IP 白名单开关，1：打开； 0：关闭
     * @param array $IpWhiteList IP 白名单列表
     * @param Config $Config topic 配置数组
     * @param array $Partitions 分区详情
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("PartitionNum",$param) and $param["PartitionNum"] !== null) {
            $this->PartitionNum = $param["PartitionNum"];
        }

        if (array_key_exists("EnableWhiteList",$param) and $param["EnableWhiteList"] !== null) {
            $this->EnableWhiteList = $param["EnableWhiteList"];
        }

        if (array_key_exists("IpWhiteList",$param) and $param["IpWhiteList"] !== null) {
            $this->IpWhiteList = $param["IpWhiteList"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new Config();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = [];
            foreach ($param["Partitions"] as $key => $value){
                $obj = new TopicPartitionDO();
                $obj->deserialize($value);
                array_push($this->Partitions, $obj);
            }
        }
    }
}
