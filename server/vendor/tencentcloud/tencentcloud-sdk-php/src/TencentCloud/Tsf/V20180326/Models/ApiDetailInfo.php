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
 * API 明细
 *
 * @method string getApiId() 获取API ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiId(string $ApiId) 设置API ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespaceId() 获取命名空间ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespaceName() 获取命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMicroserviceId() 获取服务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMicroserviceId(string $MicroserviceId) 设置服务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMicroserviceName() 获取服务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMicroserviceName(string $MicroserviceName) 设置服务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPath() 获取API 请求路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置API 请求路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPathMapping() 获取Api 映射路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPathMapping(string $PathMapping) 设置Api 映射路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMethod() 获取请求方法
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMethod(string $Method) 设置请求方法
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupId() 获取所属分组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置所属分组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUsableStatus() 获取是否禁用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsableStatus(string $UsableStatus) 设置是否禁用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReleaseStatus() 获取发布状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReleaseStatus(string $ReleaseStatus) 设置发布状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRateLimitStatus() 获取开启限流
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRateLimitStatus(string $RateLimitStatus) 设置开启限流
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMockStatus() 获取是否开启mock
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMockStatus(string $MockStatus) 设置是否开启mock
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedTime(string $UpdatedTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReleasedTime() 获取发布时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReleasedTime(string $ReleasedTime) 设置发布时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取所属分组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置所属分组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeout() 获取API 超时，单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeout(integer $Timeout) 设置API 超时，单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHost() 获取Api所在服务host
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHost(string $Host) 设置Api所在服务host
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiType() 获取API类型。 ms ： 微服务API； external :外部服务Api
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiType(string $ApiType) 设置API类型。 ms ： 微服务API； external :外部服务Api
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取Api描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置Api描述信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApiDetailInfo extends AbstractModel
{
    /**
     * @var string API ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiId;

    /**
     * @var string 命名空间ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceId;

    /**
     * @var string 命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceName;

    /**
     * @var string 服务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MicroserviceId;

    /**
     * @var string 服务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MicroserviceName;

    /**
     * @var string API 请求路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var string Api 映射路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PathMapping;

    /**
     * @var string 请求方法
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Method;

    /**
     * @var string 所属分组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string 是否禁用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsableStatus;

    /**
     * @var string 发布状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReleaseStatus;

    /**
     * @var string 开启限流
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RateLimitStatus;

    /**
     * @var string 是否开启mock
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MockStatus;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedTime;

    /**
     * @var string 发布时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReleasedTime;

    /**
     * @var string 所属分组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var integer API 超时，单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timeout;

    /**
     * @var string Api所在服务host
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Host;

    /**
     * @var string API类型。 ms ： 微服务API； external :外部服务Api
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiType;

    /**
     * @var string Api描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @param string $ApiId API ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceId 命名空间ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceName 命名空间名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MicroserviceId 服务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MicroserviceName 服务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Path API 请求路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PathMapping Api 映射路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Method 请求方法
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupId 所属分组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UsableStatus 是否禁用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReleaseStatus 发布状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RateLimitStatus 开启限流
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MockStatus 是否开启mock
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReleasedTime 发布时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName 所属分组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Timeout API 超时，单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Host Api所在服务host
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiType API类型。 ms ： 微服务API； external :外部服务Api
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description Api描述信息
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("MicroserviceId",$param) and $param["MicroserviceId"] !== null) {
            $this->MicroserviceId = $param["MicroserviceId"];
        }

        if (array_key_exists("MicroserviceName",$param) and $param["MicroserviceName"] !== null) {
            $this->MicroserviceName = $param["MicroserviceName"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("PathMapping",$param) and $param["PathMapping"] !== null) {
            $this->PathMapping = $param["PathMapping"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("UsableStatus",$param) and $param["UsableStatus"] !== null) {
            $this->UsableStatus = $param["UsableStatus"];
        }

        if (array_key_exists("ReleaseStatus",$param) and $param["ReleaseStatus"] !== null) {
            $this->ReleaseStatus = $param["ReleaseStatus"];
        }

        if (array_key_exists("RateLimitStatus",$param) and $param["RateLimitStatus"] !== null) {
            $this->RateLimitStatus = $param["RateLimitStatus"];
        }

        if (array_key_exists("MockStatus",$param) and $param["MockStatus"] !== null) {
            $this->MockStatus = $param["MockStatus"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("ReleasedTime",$param) and $param["ReleasedTime"] !== null) {
            $this->ReleasedTime = $param["ReleasedTime"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("ApiType",$param) and $param["ApiType"] !== null) {
            $this->ApiType = $param["ApiType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
