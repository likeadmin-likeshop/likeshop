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
 * 企业版复制实例
 *
 * @method string getRegistryId() 获取主实例ID
 * @method void setRegistryId(string $RegistryId) 设置主实例ID
 * @method string getReplicationRegistryId() 获取复制实例ID
 * @method void setReplicationRegistryId(string $ReplicationRegistryId) 设置复制实例ID
 * @method integer getReplicationRegionId() 获取复制实例的地域ID
 * @method void setReplicationRegionId(integer $ReplicationRegionId) 设置复制实例的地域ID
 * @method string getReplicationRegionName() 获取复制实例的地域名称
 * @method void setReplicationRegionName(string $ReplicationRegionName) 设置复制实例的地域名称
 * @method string getStatus() 获取复制实例的状态
 * @method void setStatus(string $Status) 设置复制实例的状态
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 */
class ReplicationRegistry extends AbstractModel
{
    /**
     * @var string 主实例ID
     */
    public $RegistryId;

    /**
     * @var string 复制实例ID
     */
    public $ReplicationRegistryId;

    /**
     * @var integer 复制实例的地域ID
     */
    public $ReplicationRegionId;

    /**
     * @var string 复制实例的地域名称
     */
    public $ReplicationRegionName;

    /**
     * @var string 复制实例的状态
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @param string $RegistryId 主实例ID
     * @param string $ReplicationRegistryId 复制实例ID
     * @param integer $ReplicationRegionId 复制实例的地域ID
     * @param string $ReplicationRegionName 复制实例的地域名称
     * @param string $Status 复制实例的状态
     * @param string $CreatedAt 创建时间
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("ReplicationRegistryId",$param) and $param["ReplicationRegistryId"] !== null) {
            $this->ReplicationRegistryId = $param["ReplicationRegistryId"];
        }

        if (array_key_exists("ReplicationRegionId",$param) and $param["ReplicationRegionId"] !== null) {
            $this->ReplicationRegionId = $param["ReplicationRegionId"];
        }

        if (array_key_exists("ReplicationRegionName",$param) and $param["ReplicationRegionName"] !== null) {
            $this->ReplicationRegionName = $param["ReplicationRegionName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }
    }
}
