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
 * API分组信息
 *
 * @method string getGroupId() 获取Api Group Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置Api Group Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupName() 获取Api Group 名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置Api Group 名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupContext() 获取分组上下文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupContext(string $GroupContext) 设置分组上下文
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthType() 获取鉴权类型。 secret： 密钥鉴权； none:无鉴权
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthType(string $AuthType) 设置鉴权类型。 secret： 密钥鉴权； none:无鉴权
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取发布状态, drafted: 未发布。 released: 发布
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置发布状态, drafted: 未发布。 released: 发布
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取分组创建时间 如:2019-06-20 15:51:28
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置分组创建时间 如:2019-06-20 15:51:28
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedTime() 获取分组更新时间 如:2019-06-20 15:51:28
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedTime(string $UpdatedTime) 设置分组更新时间 如:2019-06-20 15:51:28
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBindedGatewayDeployGroups() 获取api分组已绑定的网关部署组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBindedGatewayDeployGroups(array $BindedGatewayDeployGroups) 设置api分组已绑定的网关部署组
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getApiCount() 获取api 个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiCount(integer $ApiCount) 设置api 个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAclMode() 获取访问group的ACL类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAclMode(string $AclMode) 设置访问group的ACL类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupType() 获取分组类型。 ms： 微服务分组； external:外部Api分组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupType(string $GroupType) 设置分组类型。 ms： 微服务分组； external:外部Api分组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayInstanceType() 获取网关实例的类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayInstanceType(string $GatewayInstanceType) 设置网关实例的类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayInstanceId() 获取网关实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayInstanceId(string $GatewayInstanceId) 设置网关实例ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApiGroupInfo extends AbstractModel
{
    /**
     * @var string Api Group Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string Api Group 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var string 分组上下文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupContext;

    /**
     * @var string 鉴权类型。 secret： 密钥鉴权； none:无鉴权
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthType;

    /**
     * @var string 发布状态, drafted: 未发布。 released: 发布
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 分组创建时间 如:2019-06-20 15:51:28
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string 分组更新时间 如:2019-06-20 15:51:28
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedTime;

    /**
     * @var array api分组已绑定的网关部署组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BindedGatewayDeployGroups;

    /**
     * @var integer api 个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiCount;

    /**
     * @var string 访问group的ACL类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AclMode;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 分组类型。 ms： 微服务分组； external:外部Api分组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupType;

    /**
     * @var string 网关实例的类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayInstanceType;

    /**
     * @var string 网关实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayInstanceId;

    /**
     * @param string $GroupId Api Group Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupName Api Group 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupContext 分组上下文
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuthType 鉴权类型。 secret： 密钥鉴权； none:无鉴权
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 发布状态, drafted: 未发布。 released: 发布
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 分组创建时间 如:2019-06-20 15:51:28
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedTime 分组更新时间 如:2019-06-20 15:51:28
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BindedGatewayDeployGroups api分组已绑定的网关部署组
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ApiCount api 个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AclMode 访问group的ACL类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupType 分组类型。 ms： 微服务分组； external:外部Api分组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayInstanceType 网关实例的类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayInstanceId 网关实例ID
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("BindedGatewayDeployGroups",$param) and $param["BindedGatewayDeployGroups"] !== null) {
            $this->BindedGatewayDeployGroups = [];
            foreach ($param["BindedGatewayDeployGroups"] as $key => $value){
                $obj = new GatewayDeployGroup();
                $obj->deserialize($value);
                array_push($this->BindedGatewayDeployGroups, $obj);
            }
        }

        if (array_key_exists("ApiCount",$param) and $param["ApiCount"] !== null) {
            $this->ApiCount = $param["ApiCount"];
        }

        if (array_key_exists("AclMode",$param) and $param["AclMode"] !== null) {
            $this->AclMode = $param["AclMode"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("GatewayInstanceType",$param) and $param["GatewayInstanceType"] !== null) {
            $this->GatewayInstanceType = $param["GatewayInstanceType"];
        }

        if (array_key_exists("GatewayInstanceId",$param) and $param["GatewayInstanceId"] !== null) {
            $this->GatewayInstanceId = $param["GatewayInstanceId"];
        }
    }
}
