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
namespace TencentCloud\Organization\V20181225\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddOrganizationNode请求参数结构体
 *
 * @method integer getParentNodeId() 获取父组织单元ID
 * @method void setParentNodeId(integer $ParentNodeId) 设置父组织单元ID
 * @method string getName() 获取组织单元名字
 * @method void setName(string $Name) 设置组织单元名字
 */
class AddOrganizationNodeRequest extends AbstractModel
{
    /**
     * @var integer 父组织单元ID
     */
    public $ParentNodeId;

    /**
     * @var string 组织单元名字
     */
    public $Name;

    /**
     * @param integer $ParentNodeId 父组织单元ID
     * @param string $Name 组织单元名字
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
        if (array_key_exists("ParentNodeId",$param) and $param["ParentNodeId"] !== null) {
            $this->ParentNodeId = $param["ParentNodeId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
