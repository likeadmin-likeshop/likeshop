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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateApiGroup请求参数结构体
 *
 * @method string getGroupId() 获取Api 分组ID
 * @method void setGroupId(string $GroupId) 设置Api 分组ID
 * @method string getGroupName() 获取Api 分组名称
 * @method void setGroupName(string $GroupName) 设置Api 分组名称
 * @method string getDescription() 获取Api 分组描述
 * @method void setDescription(string $Description) 设置Api 分组描述
 * @method string getAuthType() 获取鉴权类型
 * @method void setAuthType(string $AuthType) 设置鉴权类型
 * @method string getGroupContext() 获取分组上下文
 * @method void setGroupContext(string $GroupContext) 设置分组上下文
 */
class UpdateApiGroupRequest extends AbstractModel
{
    /**
     * @var string Api 分组ID
     */
    public $GroupId;

    /**
     * @var string Api 分组名称
     */
    public $GroupName;

    /**
     * @var string Api 分组描述
     */
    public $Description;

    /**
     * @var string 鉴权类型
     */
    public $AuthType;

    /**
     * @var string 分组上下文
     */
    public $GroupContext;

    /**
     * @param string $GroupId Api 分组ID
     * @param string $GroupName Api 分组名称
     * @param string $Description Api 分组描述
     * @param string $AuthType 鉴权类型
     * @param string $GroupContext 分组上下文
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("GroupContext",$param) and $param["GroupContext"] !== null) {
            $this->GroupContext = $param["GroupContext"];
        }
    }
}
