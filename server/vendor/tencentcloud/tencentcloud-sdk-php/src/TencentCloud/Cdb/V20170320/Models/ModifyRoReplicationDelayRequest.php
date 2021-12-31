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
 * ModifyRoReplicationDelay请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。
 * @method integer getReplicationDelay() 获取延迟时间（s）。最小值1，最大值259200。
 * @method void setReplicationDelay(integer $ReplicationDelay) 设置延迟时间（s）。最小值1，最大值259200。
 */
class ModifyRoReplicationDelayRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。
     */
    public $InstanceId;

    /**
     * @var integer 延迟时间（s）。最小值1，最大值259200。
     */
    public $ReplicationDelay;

    /**
     * @param string $InstanceId 实例 ID。
     * @param integer $ReplicationDelay 延迟时间（s）。最小值1，最大值259200。
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

        if (array_key_exists("ReplicationDelay",$param) and $param["ReplicationDelay"] !== null) {
            $this->ReplicationDelay = $param["ReplicationDelay"];
        }
    }
}
