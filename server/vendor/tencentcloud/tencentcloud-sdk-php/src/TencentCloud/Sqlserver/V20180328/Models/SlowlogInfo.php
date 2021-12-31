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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 慢查询日志文件信息
 *
 * @method integer getId() 获取慢查询日志文件唯一标识
 * @method void setId(integer $Id) 设置慢查询日志文件唯一标识
 * @method string getStartTime() 获取文件生成的开始时间
 * @method void setStartTime(string $StartTime) 设置文件生成的开始时间
 * @method string getEndTime() 获取文件生成的结束时间
 * @method void setEndTime(string $EndTime) 设置文件生成的结束时间
 * @method integer getSize() 获取文件大小（KB）
 * @method void setSize(integer $Size) 设置文件大小（KB）
 * @method integer getCount() 获取文件中log条数
 * @method void setCount(integer $Count) 设置文件中log条数
 * @method string getInternalAddr() 获取内网下载地址
 * @method void setInternalAddr(string $InternalAddr) 设置内网下载地址
 * @method string getExternalAddr() 获取外网下载地址
 * @method void setExternalAddr(string $ExternalAddr) 设置外网下载地址
 * @method integer getStatus() 获取状态（1成功 2失败）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态（1成功 2失败）
注意：此字段可能返回 null，表示取不到有效值。
 */
class SlowlogInfo extends AbstractModel
{
    /**
     * @var integer 慢查询日志文件唯一标识
     */
    public $Id;

    /**
     * @var string 文件生成的开始时间
     */
    public $StartTime;

    /**
     * @var string 文件生成的结束时间
     */
    public $EndTime;

    /**
     * @var integer 文件大小（KB）
     */
    public $Size;

    /**
     * @var integer 文件中log条数
     */
    public $Count;

    /**
     * @var string 内网下载地址
     */
    public $InternalAddr;

    /**
     * @var string 外网下载地址
     */
    public $ExternalAddr;

    /**
     * @var integer 状态（1成功 2失败）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param integer $Id 慢查询日志文件唯一标识
     * @param string $StartTime 文件生成的开始时间
     * @param string $EndTime 文件生成的结束时间
     * @param integer $Size 文件大小（KB）
     * @param integer $Count 文件中log条数
     * @param string $InternalAddr 内网下载地址
     * @param string $ExternalAddr 外网下载地址
     * @param integer $Status 状态（1成功 2失败）
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("InternalAddr",$param) and $param["InternalAddr"] !== null) {
            $this->InternalAddr = $param["InternalAddr"];
        }

        if (array_key_exists("ExternalAddr",$param) and $param["ExternalAddr"] !== null) {
            $this->ExternalAddr = $param["ExternalAddr"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
