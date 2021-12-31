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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReplicationInstanceCreateTasks请求参数结构体
 *
 * @method string getReplicationRegistryId() 获取同步实例Id
 * @method void setReplicationRegistryId(string $ReplicationRegistryId) 设置同步实例Id
 * @method integer getReplicationRegionId() 获取同步实例的地域ID
 * @method void setReplicationRegionId(integer $ReplicationRegionId) 设置同步实例的地域ID
 */
class DescribeReplicationInstanceCreateTasksRequest extends AbstractModel
{
    /**
     * @var string 同步实例Id
     */
    public $ReplicationRegistryId;

    /**
     * @var integer 同步实例的地域ID
     */
    public $ReplicationRegionId;

    /**
     * @param string $ReplicationRegistryId 同步实例Id
     * @param integer $ReplicationRegionId 同步实例的地域ID
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
        if (array_key_exists("ReplicationRegistryId",$param) and $param["ReplicationRegistryId"] !== null) {
            $this->ReplicationRegistryId = $param["ReplicationRegistryId"];
        }

        if (array_key_exists("ReplicationRegionId",$param) and $param["ReplicationRegionId"] !== null) {
            $this->ReplicationRegionId = $param["ReplicationRegionId"];
        }
    }
}
