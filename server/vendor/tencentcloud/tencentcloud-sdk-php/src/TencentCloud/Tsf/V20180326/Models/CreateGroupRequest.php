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
 * CreateGroup请求参数结构体
 *
 * @method string getApplicationId() 获取部署组所属的应用ID
 * @method void setApplicationId(string $ApplicationId) 设置部署组所属的应用ID
 * @method string getNamespaceId() 获取部署组所属命名空间ID
 * @method void setNamespaceId(string $NamespaceId) 设置部署组所属命名空间ID
 * @method string getGroupName() 获取部署组名称
 * @method void setGroupName(string $GroupName) 设置部署组名称
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getGroupDesc() 获取部署组描述
 * @method void setGroupDesc(string $GroupDesc) 设置部署组描述
 * @method string getGroupResourceType() 获取部署组资源类型
 * @method void setGroupResourceType(string $GroupResourceType) 设置部署组资源类型
 * @method string getAlias() 获取部署组备注
 * @method void setAlias(string $Alias) 设置部署组备注
 */
class CreateGroupRequest extends AbstractModel
{
    /**
     * @var string 部署组所属的应用ID
     */
    public $ApplicationId;

    /**
     * @var string 部署组所属命名空间ID
     */
    public $NamespaceId;

    /**
     * @var string 部署组名称
     */
    public $GroupName;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 部署组描述
     */
    public $GroupDesc;

    /**
     * @var string 部署组资源类型
     */
    public $GroupResourceType;

    /**
     * @var string 部署组备注
     */
    public $Alias;

    /**
     * @param string $ApplicationId 部署组所属的应用ID
     * @param string $NamespaceId 部署组所属命名空间ID
     * @param string $GroupName 部署组名称
     * @param string $ClusterId 集群ID
     * @param string $GroupDesc 部署组描述
     * @param string $GroupResourceType 部署组资源类型
     * @param string $Alias 部署组备注
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("GroupDesc",$param) and $param["GroupDesc"] !== null) {
            $this->GroupDesc = $param["GroupDesc"];
        }

        if (array_key_exists("GroupResourceType",$param) and $param["GroupResourceType"] !== null) {
            $this->GroupResourceType = $param["GroupResourceType"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }
    }
}
