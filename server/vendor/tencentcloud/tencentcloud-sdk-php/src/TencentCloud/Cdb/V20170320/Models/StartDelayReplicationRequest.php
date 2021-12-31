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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartDelayReplication请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。
 * @method string getDelayReplicationType() 获取延迟复制类型。可选值 DEFAULT（按照延迟复制时间进行复制）、GTID（回放到指定GTID）、DUE_TIME（回放到指定时间点）。
 * @method void setDelayReplicationType(string $DelayReplicationType) 设置延迟复制类型。可选值 DEFAULT（按照延迟复制时间进行复制）、GTID（回放到指定GTID）、DUE_TIME（回放到指定时间点）。
 * @method integer getDueTime() 获取指定时间点，默认为0，最大值不能超过当前时间。
 * @method void setDueTime(integer $DueTime) 设置指定时间点，默认为0，最大值不能超过当前时间。
 * @method string getGtid() 获取指定GITD。回放到指定GTID时必传。
 * @method void setGtid(string $Gtid) 设置指定GITD。回放到指定GTID时必传。
 */
class StartDelayReplicationRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 延迟复制类型。可选值 DEFAULT（按照延迟复制时间进行复制）、GTID（回放到指定GTID）、DUE_TIME（回放到指定时间点）。
     */
    public $DelayReplicationType;

    /**
     * @var integer 指定时间点，默认为0，最大值不能超过当前时间。
     */
    public $DueTime;

    /**
     * @var string 指定GITD。回放到指定GTID时必传。
     */
    public $Gtid;

    /**
     * @param string $InstanceId 实例 ID。
     * @param string $DelayReplicationType 延迟复制类型。可选值 DEFAULT（按照延迟复制时间进行复制）、GTID（回放到指定GTID）、DUE_TIME（回放到指定时间点）。
     * @param integer $DueTime 指定时间点，默认为0，最大值不能超过当前时间。
     * @param string $Gtid 指定GITD。回放到指定GTID时必传。
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

        if (array_key_exists("DelayReplicationType",$param) and $param["DelayReplicationType"] !== null) {
            $this->DelayReplicationType = $param["DelayReplicationType"];
        }

        if (array_key_exists("DueTime",$param) and $param["DueTime"] !== null) {
            $this->DueTime = $param["DueTime"];
        }

        if (array_key_exists("Gtid",$param) and $param["Gtid"] !== null) {
            $this->Gtid = $param["Gtid"];
        }
    }
}
