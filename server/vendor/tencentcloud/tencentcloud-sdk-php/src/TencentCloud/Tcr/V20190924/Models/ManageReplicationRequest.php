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
 * ManageReplication请求参数结构体
 *
 * @method string getSourceRegistryId() 获取复制源实例ID
 * @method void setSourceRegistryId(string $SourceRegistryId) 设置复制源实例ID
 * @method string getDestinationRegistryId() 获取复制目标实例ID
 * @method void setDestinationRegistryId(string $DestinationRegistryId) 设置复制目标实例ID
 * @method ReplicationRule getRule() 获取同步规则
 * @method void setRule(ReplicationRule $Rule) 设置同步规则
 * @method string getDescription() 获取规则描述
 * @method void setDescription(string $Description) 设置规则描述
 * @method integer getDestinationRegionId() 获取目标实例的地域ID，如广州是1
 * @method void setDestinationRegionId(integer $DestinationRegionId) 设置目标实例的地域ID，如广州是1
 */
class ManageReplicationRequest extends AbstractModel
{
    /**
     * @var string 复制源实例ID
     */
    public $SourceRegistryId;

    /**
     * @var string 复制目标实例ID
     */
    public $DestinationRegistryId;

    /**
     * @var ReplicationRule 同步规则
     */
    public $Rule;

    /**
     * @var string 规则描述
     */
    public $Description;

    /**
     * @var integer 目标实例的地域ID，如广州是1
     */
    public $DestinationRegionId;

    /**
     * @param string $SourceRegistryId 复制源实例ID
     * @param string $DestinationRegistryId 复制目标实例ID
     * @param ReplicationRule $Rule 同步规则
     * @param string $Description 规则描述
     * @param integer $DestinationRegionId 目标实例的地域ID，如广州是1
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
        if (array_key_exists("SourceRegistryId",$param) and $param["SourceRegistryId"] !== null) {
            $this->SourceRegistryId = $param["SourceRegistryId"];
        }

        if (array_key_exists("DestinationRegistryId",$param) and $param["DestinationRegistryId"] !== null) {
            $this->DestinationRegistryId = $param["DestinationRegistryId"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = new ReplicationRule();
            $this->Rule->deserialize($param["Rule"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DestinationRegionId",$param) and $param["DestinationRegionId"] !== null) {
            $this->DestinationRegionId = $param["DestinationRegionId"];
        }
    }
}
