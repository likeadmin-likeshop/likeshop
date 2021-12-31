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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVpcEndPointAttribute请求参数结构体
 *
 * @method string getEndPointId() 获取终端节点ID。
 * @method void setEndPointId(string $EndPointId) 设置终端节点ID。
 * @method string getEndPointName() 获取终端节点名称。
 * @method void setEndPointName(string $EndPointName) 设置终端节点名称。
 * @method array getSecurityGroupIds() 获取安全组ID列表。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组ID列表。
 */
class ModifyVpcEndPointAttributeRequest extends AbstractModel
{
    /**
     * @var string 终端节点ID。
     */
    public $EndPointId;

    /**
     * @var string 终端节点名称。
     */
    public $EndPointName;

    /**
     * @var array 安全组ID列表。
     */
    public $SecurityGroupIds;

    /**
     * @param string $EndPointId 终端节点ID。
     * @param string $EndPointName 终端节点名称。
     * @param array $SecurityGroupIds 安全组ID列表。
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
        if (array_key_exists("EndPointId",$param) and $param["EndPointId"] !== null) {
            $this->EndPointId = $param["EndPointId"];
        }

        if (array_key_exists("EndPointName",$param) and $param["EndPointName"] !== null) {
            $this->EndPointName = $param["EndPointName"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
