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
 * 日志主题分区信息
 *
 * @method integer getPartitionId() 获取分区ID
 * @method void setPartitionId(integer $PartitionId) 设置分区ID
 * @method string getStatus() 获取分区的状态（readwrite或者是readonly）
 * @method void setStatus(string $Status) 设置分区的状态（readwrite或者是readonly）
 * @method string getInclusiveBeginKey() 获取分区哈希键起始key
 * @method void setInclusiveBeginKey(string $InclusiveBeginKey) 设置分区哈希键起始key
 * @method string getExclusiveEndKey() 获取分区哈希键结束key
 * @method void setExclusiveEndKey(string $ExclusiveEndKey) 设置分区哈希键结束key
 * @method string getCreateTime() 获取分区创建时间
 * @method void setCreateTime(string $CreateTime) 设置分区创建时间
 * @method string getLastWriteTime() 获取只读分区数据停止写入时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastWriteTime(string $LastWriteTime) 设置只读分区数据停止写入时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class PartitionInfo extends AbstractModel
{
    /**
     * @var integer 分区ID
     */
    public $PartitionId;

    /**
     * @var string 分区的状态（readwrite或者是readonly）
     */
    public $Status;

    /**
     * @var string 分区哈希键起始key
     */
    public $InclusiveBeginKey;

    /**
     * @var string 分区哈希键结束key
     */
    public $ExclusiveEndKey;

    /**
     * @var string 分区创建时间
     */
    public $CreateTime;

    /**
     * @var string 只读分区数据停止写入时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastWriteTime;

    /**
     * @param integer $PartitionId 分区ID
     * @param string $Status 分区的状态（readwrite或者是readonly）
     * @param string $InclusiveBeginKey 分区哈希键起始key
     * @param string $ExclusiveEndKey 分区哈希键结束key
     * @param string $CreateTime 分区创建时间
     * @param string $LastWriteTime 只读分区数据停止写入时间
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
        if (array_key_exists("PartitionId",$param) and $param["PartitionId"] !== null) {
            $this->PartitionId = $param["PartitionId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InclusiveBeginKey",$param) and $param["InclusiveBeginKey"] !== null) {
            $this->InclusiveBeginKey = $param["InclusiveBeginKey"];
        }

        if (array_key_exists("ExclusiveEndKey",$param) and $param["ExclusiveEndKey"] !== null) {
            $this->ExclusiveEndKey = $param["ExclusiveEndKey"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LastWriteTime",$param) and $param["LastWriteTime"] !== null) {
            $this->LastWriteTime = $param["LastWriteTime"];
        }
    }
}
