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
 * CreateApiGroup请求参数结构体
 *
 * @method string getGroupName() 获取分组名称, 不能包含中文
 * @method void setGroupName(string $GroupName) 设置分组名称, 不能包含中文
 * @method string getGroupContext() 获取分组上下文
 * @method void setGroupContext(string $GroupContext) 设置分组上下文
 * @method string getAuthType() 获取鉴权类型。secret： 密钥鉴权； none:无鉴权
 * @method void setAuthType(string $AuthType) 设置鉴权类型。secret： 密钥鉴权； none:无鉴权
 * @method string getDescription() 获取备注
 * @method void setDescription(string $Description) 设置备注
 * @method string getGroupType() 获取分组类型,默认ms。 ms： 微服务分组； external:外部Api分组
 * @method void setGroupType(string $GroupType) 设置分组类型,默认ms。 ms： 微服务分组； external:外部Api分组
 * @method string getGatewayInstanceId() 获取网关实体ID
 * @method void setGatewayInstanceId(string $GatewayInstanceId) 设置网关实体ID
 */
class CreateApiGroupRequest extends AbstractModel
{
    /**
     * @var string 分组名称, 不能包含中文
     */
    public $GroupName;

    /**
     * @var string 分组上下文
     */
    public $GroupContext;

    /**
     * @var string 鉴权类型。secret： 密钥鉴权； none:无鉴权
     */
    public $AuthType;

    /**
     * @var string 备注
     */
    public $Description;

    /**
     * @var string 分组类型,默认ms。 ms： 微服务分组； external:外部Api分组
     */
    public $GroupType;

    /**
     * @var string 网关实体ID
     */
    public $GatewayInstanceId;

    /**
     * @param string $GroupName 分组名称, 不能包含中文
     * @param string $GroupContext 分组上下文
     * @param string $AuthType 鉴权类型。secret： 密钥鉴权； none:无鉴权
     * @param string $Description 备注
     * @param string $GroupType 分组类型,默认ms。 ms： 微服务分组； external:外部Api分组
     * @param string $GatewayInstanceId 网关实体ID
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupContext",$param) and $param["GroupContext"] !== null) {
            $this->GroupContext = $param["GroupContext"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("GatewayInstanceId",$param) and $param["GatewayInstanceId"] !== null) {
            $this->GatewayInstanceId = $param["GatewayInstanceId"];
        }
    }
}
