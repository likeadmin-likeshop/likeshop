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
 * CreateServerlessGroup请求参数结构体
 *
 * @method string getApplicationId() 获取分组所属应用ID
 * @method void setApplicationId(string $ApplicationId) 设置分组所属应用ID
 * @method string getGroupName() 获取分组名称字段，长度1~60，字母或下划线开头，可包含字母数字下划线
 * @method void setGroupName(string $GroupName) 设置分组名称字段，长度1~60，字母或下划线开头，可包含字母数字下划线
 * @method string getNamespaceId() 获取分组所属名字空间ID
 * @method void setNamespaceId(string $NamespaceId) 设置分组所属名字空间ID
 * @method string getClusterId() 获取分组所属集群ID
 * @method void setClusterId(string $ClusterId) 设置分组所属集群ID
 */
class CreateServerlessGroupRequest extends AbstractModel
{
    /**
     * @var string 分组所属应用ID
     */
    public $ApplicationId;

    /**
     * @var string 分组名称字段，长度1~60，字母或下划线开头，可包含字母数字下划线
     */
    public $GroupName;

    /**
     * @var string 分组所属名字空间ID
     */
    public $NamespaceId;

    /**
     * @var string 分组所属集群ID
     */
    public $ClusterId;

    /**
     * @param string $ApplicationId 分组所属应用ID
     * @param string $GroupName 分组名称字段，长度1~60，字母或下划线开头，可包含字母数字下划线
     * @param string $NamespaceId 分组所属名字空间ID
     * @param string $ClusterId 分组所属集群ID
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

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
